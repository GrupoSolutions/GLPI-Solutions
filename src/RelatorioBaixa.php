<?php

//AUTOLOAD COMPOSER
require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


require("./db_config.php");

$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];
$data_inicial = date('Y/m/d', strtotime($data_inicial));
$data_final = date('Y/m/d', strtotime($data_final));
$frmStatus = $_POST['status'];
switch ($frmStatus) {
    case 0:
        $status = "";
        $st = "Todos";
	    break;
    case 2:
        $status = "= 2";
        $st = "Aguardando aprovação";
        break;
    case 4:
        $status = "= 4";
        $st = "Reprovado";
        break;
    case 3:
        $status = "= 3";
        $st = "Aprovado";
        break;
}

$arrSolicitacao = [];

//BUSCA OS ID's DAS SOLICITAÇÕES, JUNTAMENTE COM COMENTARIO E NOME DO SOLICITANTE
$sqlBaixa = "SELECT 
glpi_plugin_consumables_requests.id,
UPPER(solicitante.name) as SOLICITANTE,
UPPER(lider_aprova.name) AS LIDER,
UPPER(validador.name) as VALIDADOR,
UPPER(glpi_plugin_consumables_requests.projeto) as PROJETO,
UPPER(glpi_consumableitems.name) AS INSUMO,
number AS QUANTIDADE,
CASE 
    WHEN glpi_plugin_consumables_requests.status = 4 THEN 'REPROVADO'
    WHEN glpi_plugin_consumables_requests.status = 3 THEN 'APROVADO'
    WHEN glpi_plugin_consumables_requests.status = 2 THEN 'AGUARDANDO APROVAÇÃO'
END AS STATUS,
UPPER(glpi_plugin_consumables_requests.observacao) AS OBSERVACAO,
UPPER(glpi_plugin_consumables_requests.endereco),
UPPER(glpi_plugin_consumables_requests.cep),
UPPER(glpi_plugin_consumables_requests.estado),
UPPER(glpi_plugin_consumables_requests.cidade),
UPPER(glpi_plugin_consumables_requests.tipo_entrega),
UPPER(glpi_plugin_consumables_requests.projeto),

DATE_FORMAT(glpi_plugin_consumables_requests.date_mod,
        '%d/%m/%Y %H:%i') AS DATA_BAIXA
FROM
glpi_plugin_consumables_requests
    LEFT JOIN
glpi_consumableitems ON glpi_consumableitems.id = glpi_plugin_consumables_requests.consumables_id
    LEFT JOIN
glpi_users as solicitante ON solicitante.id = glpi_plugin_consumables_requests.give_items_id
    LEFT JOIN
glpi_users as lider_aprova ON lider_aprova.id = glpi_plugin_consumables_requests.requesters_id
    LEFT JOIN
glpi_users as validador ON validador.id = glpi_plugin_consumables_requests.validators_id
    WHERE 
 glpi_plugin_consumables_requests.date_mod between '{$data_inicial}' AND '{$data_final}' AND STATUS {$status}";

$baixaRetorno = mysqli_query($sqlcon, $sqlBaixa);

if($baixaRetorno){
    while($row = mysqli_fetch_assoc($baixaRetorno)){
        array_push($arrSolicitacao, $row);
    }
}
    $data_inicial = date('d/m/Y', strtotime($data_inicial));
    $data_final = date('d/m/Y', strtotime($data_final));
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $lABC1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $lABC2 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

    for($I = 0; $I < count($lABC1); $I++){
    $sheet->getColumnDimension($lABC1[$I])->setAutoSize(true);
    for($J = 0; $J < 6; $J++){
        $sheet->getColumnDimension($lABC2[$J].$lABC1[$I])->setAutoSize(true);
    }}
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->setCellValue('A1', 'Relatório de Baixa de Insumos');
    $sheet->setCellValue('A2', 'Periodo: ' . $data_inicial . ' a ' . $data_final );
    $sheet->setCellValue('A3', 'Data da extração: ' . date('d/m/y h:m') );
    $sheet->setCellValue('A4', 'Status: ' . $st);

    $sheet->setCellValue('A5', 'ID');
    $sheet->setCellValue('B5', 'Solicitado Por');
    $sheet->setCellValue('C5', 'Validado Por');
    $sheet->setCellValue('D5', 'Movimentado Por');
    $sheet->setCellValue('E5', 'Projeto');
    $sheet->setCellValue('F5', 'Insumo');
    $sheet->setCellValue('G5', 'Quantidade');
    $sheet->setCellValue('H5', 'Status');
    $sheet->setCellValue('I5', 'Observação');
    $sheet->setCellValue('J5', 'Endereço');  
    $sheet->setCellValue('K5', 'CEP'); 
    $sheet->setCellValue('L5', 'Estado');  
    $sheet->setCellValue('M5', 'Cidade');  
    $sheet->setCellValue('N5', 'Tipo de entrega');  
    $sheet->setCellValue('O5', 'Projeto');   
    $sheet->setCellValue('P5', 'Data de Baixa');   
    $sheet->fromArray($arrSolicitacao, null, 'A6');
    $date = date(" - dmY");
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatoriodeBaixadeInsumos'. $date . '.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');



?>