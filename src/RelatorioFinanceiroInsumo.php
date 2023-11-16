<?php

require('../src/db_config.php');

require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sqlBuscaInsumo = "SELECT glpi_consumableitems.name, CONCAT('R$ ', FORMAT(valor_insumo, 2, 'de_DE')), count(valor_insumo), usuario_insercao, numero_nf, DATE_FORMAT(data_nf, '%d/%m/%Y') FROM glpi_consumables
LEFT JOIN glpi_consumableitems on glpi_consumableitems.id = glpi_consumables.consumableitems_id
where glpi_consumables.valor_insumo
group by glpi_consumables.numero_nf, glpi_consumables.consumableitems_id";

$arrInsumos = array();

$resultInsumo = mysqli_query($sqlcon, $sqlBuscaInsumo);
if($resultInsumo){
    while($row = mysqli_fetch_array($resultInsumo)){
        $arr = [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5]];  
        array_push($arrInsumos, $arr);
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
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->setCellValue('A1', 'Relatório Financeiro de Insumos');
    $sheet->setCellValue('A2', 'Data da extração: ' . date('d/m/y h:i') );

    $sheet->setCellValue('A3', 'Insumo');
    $sheet->setCellValue('B3', 'Valor total da nota');
    $sheet->setCellValue('C3', 'Quantidade de insumos');
    $sheet->setCellValue('D3', 'Adicionado por');
    $sheet->setCellValue('E3', 'Numero da NF');
    $sheet->setCellValue('F3', 'Data da NF');
    $sheet->fromArray($arrInsumos, null, 'A4');
    $date = date(" - dmY");

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatorioFinanceirodeInsumos'. $date . '.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');

?>