<?php

//AUTOLOAD COMPOSER
require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
$GLOBALS['sqlcon'] = $sqlcon;


$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];
$frmStatus = $_POST['status'];
switch ($frmStatus) {
    case 0:
        $status = "STATUS";
        $stats = "Status: Todos";
	break;
    case 1:
        $status = "STATUS = 1";
        $stats = "Status: Aprovado";
        break;
    case 101:
        $status = "STATUS = 101";
        $stats = "Status: Aguardando Aprovação";
        break;
    case 102:
        $status = "STATUS = 102";
        $stats = "Status: Recusado";
        break;
}

$sqlcon = $GLOBALS['sqlcon'];
$arrSolicitacao = [];

//BUSCA OS ID's DAS SOLICITAÇÕES, JUNTAMENTE COM COMENTARIO E NOME DO SOLICITANTE
$sqlSolicitacao = "SELECT glpi_plugin_formcreator_formanswers.id AS ID, USUARIOS.name as SOLICITANTE, status as STATS, DATE_FORMAT(request_date,'%d/%m/%Y %H:%i') AS DATA_PEDIDO, glpi_plugin_formcreator_formanswers.endereco as ENDERECO, glpi_plugin_formcreator_formanswers.cep AS CEP, glpi_plugin_formcreator_formanswers.estado AS ESTADO, glpi_plugin_formcreator_formanswers.cidade AS CIDADE, glpi_plugin_formcreator_formanswers.entrega AS ENTREGA, glpi_plugin_formcreator_formanswers.comment as COMENTARIO FROM glpi_plugin_formcreator_formanswers LEFT JOIN glpi_users USUARIOS on USUARIOS.id = glpi_plugin_formcreator_formanswers.requester_id WHERE glpi_plugin_formcreator_formanswers.request_date between '{$data_inicial}' AND '{$data_final}' AND {$status}";
$solicitacaoRetorno = mysqli_query($sqlcon, $sqlSolicitacao);

if($solicitacaoRetorno){
    while($row = mysqli_fetch_assoc($solicitacaoRetorno)){
        array_push($arrSolicitacao, $row);
    }
}

//BUSCA O CONTEUDO DA SOLICITAÇÃO
$qtdSolicitacao = count($arrSolicitacao);
for($i = 1; $i < $qtdSolicitacao; $i++){
    $sqlPedido = "SELECT RESPOSTA.id as id, IF(name = 'Tamanho', 'BOTA DE SEGURANÇA', PERGUNTAS.name) AS PERGUNTA, RESPOSTA.answer as RESPOSTA FROM glpi_plugin_formcreator_answers RESPOSTA LEFT JOIN  glpi_plugin_formcreator_questions PERGUNTAS on PERGUNTAS.id = RESPOSTA.plugin_formcreator_questions_id WHERE plugin_formcreator_formanswers_id = {$arrSolicitacao[$i]['ID']} and RESPOSTA.answer IS NOT NULL AND RESPOSTA.answer <> '' AND PERGUNTAS.fieldtype <> 'checkboxes' AND PERGUNTAS.name != 'Tipo de Vestimenta'";
    $returnPedido = mysqli_query($sqlcon, $sqlPedido);

    if($returnPedido){
        while($row = mysqli_fetch_array($returnPedido)){
            array_push($arrSolicitacao[$i], "{$row['PERGUNTA']} : {$row['RESPOSTA']}");
            // array_push($arrSolicitacao[$i], $row['RESPOSTA']);

        }
    }
}

    for ($j = 1; $j < $qtdSolicitacao; $j++){
        $oldV = $arrSolicitacao[$j][0];
        $newV = str_replace('Informe qual projeto você participa : ', '', $oldV);
        $arrSolicitacao[$j][0] = $newV;
    }
    $arrSoli = [];

    for($k=1; $k < $qtdSolicitacao; $k++){
        $qtdARR = count($arrSolicitacao[$k]);
        $idSOL = $arrSolicitacao[$k]['ID'];
        $sqlBuscaChamado = "SELECT glpi_tickets.id FROM glpi_items_tickets INNER JOIN glpi_tickets on (glpi_items_tickets.tickets_id = glpi_tickets.id) WHERE itemtype = 'PluginFormcreatorFormAnswer' AND items_id = '{$idSOL}'";
        $buscarChamado = mysqli_query($sqlcon, $sqlBuscaChamado);
        if($buscarChamado){
            $chamado = mysqli_num_rows($buscarChamado);
            if($chamado != 1){
                $idChamado = "NÃO GERADO";
                
            } else{
                while($cha = mysqli_fetch_array($buscarChamado)){
                    $idChamado = $cha[0];

                }
            }
        }

        $nomeSolicitante = $arrSolicitacao[$k]['SOLICITANTE'];
        $dataPedido = $arrSolicitacao[$k]['DATA_PEDIDO'];
        $comentario = $arrSolicitacao[$k]['COMENTARIO'];
        if(isset($arrSolicitacao[$k]['ENDERECO'])){
            $endereco = $arrSolicitacao[$k]['ENDERECO'];
        } else {
            $endereco = '';
        }
        if(isset($arrSolicitacao[$k]['CEP'])){
            $cep = $arrSolicitacao[$k]['CEP'];
        } else {
            $cep = '';
        }
        if(isset($arrSolicitacao[$k]['CIDADE'])){
            $cidade = $arrSolicitacao[$k]['CIDADE'];
        } else{
            $cidade = '';
        }
        if(isset($arrSolicitacao[$k]['ENTREGA'])){
            $tipoEntrega = $arrSolicitacao[$k]['ENTREGA'];
        } else {
            $tipoEntrega = '';
        }
        $stt = $arrSolicitacao[$k]['STATS'];
        switch ($stt) {
            case 1:
                $stt = "Aprovado";
                break;
            case 101:
                $stt = "Em Aberto";
                break;
            case 102:
                $stt = "Recusado";
                break;
            case 6:
                $stt = "Excluído";
        }
        $projeto = $arrSolicitacao[$k][0];
        $qtdPedidos = $qtdARR - 10;
        for($a = 1; $a < $qtdPedidos; $a++){
            $pedido = $arrSolicitacao[$k][$a];
            if(!isset($idChamado)){
                $idChamado = 'NÃO GERADO';
            }
            $item = explode(" : " , $pedido);
            array_push($arrSoli, [$idChamado, $nomeSolicitante, $dataPedido, $comentario, $projeto ,strtoupper($stt), strtoupper($item[0]), $item[1], $endereco, $cidade, $cep, $tipoEntrega]);

        }
    }
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $lABC1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $lABC2 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

    for($I = 0; $I < count($lABC1); $I++){
    $sheet->getColumnDimension($lABC1[$I])->setAutoSize(true);
    for($J = 0; $J < 6; $J++){
        $sheet->getColumnDimension($lABC2[$J].$lABC1[$I])->setAutoSize(true);
    }}
    $data_inicio = date('d-m-Y', strtotime($data_inicial));
    $data_inicio  = str_replace("-", "/", $data_inicio);

    $data_fim = date('d-m-Y', strtotime($data_final));
    $data_fim  = str_replace("-", "/", $data_fim);


    $periodo = "Período: {$data_inicio} a {$data_fim}";


    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->setCellValue('A1', 'Relatório de Solicitações');
    $sheet->setCellValue('A2', $periodo);
    $sheet->setCellValue('A3', $stats);
    $sheet->setCellValue('A4', 'ID do Chamado');
    $sheet->setCellValue('B4', 'Solicitante');
    $sheet->setCellValue('C4', 'Data da Solicitação');
    $sheet->setCellValue('D4', 'Comentário (Lider)');
    $sheet->setCellValue('E4', 'Projeto');
    $sheet->setCellValue('F4', 'Status');
    $sheet->setCellValue('G4', 'Solicitação');
    $sheet->setCellValue('H4', 'Quantidade');
    $sheet->setCellValue('I4', 'Endereço');
    $sheet->setCellValue('J4', 'Estado');
    $sheet->setCellValue('K4', 'CEP');
    $sheet->setCellValue('L4', 'Tipo de Entrega');    
    $sheet->fromArray($arrSoli, null, 'A5');

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatorioDeSolicitacao.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    


?>