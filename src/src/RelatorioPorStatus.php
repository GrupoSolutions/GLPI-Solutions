<?php
//AUTOLOAD COMPOSER
require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
$GLOBALS['sqlcon'] = $sqlcon;
//BUSCARÁ TIPOS E STATUS DOS ATIVOS
$arrComputadorTipo = [];

$sqlComputadorTipo = "SELECT 'Computador',glpi_computertypes.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_computers LEFT JOIN 	glpi_computertypes ON glpi_computertypes.id = glpi_computers.computertypes_id LEFT JOIN glpi_states ON glpi_states.id = glpi_computers.states_id WHERE glpi_computers.is_deleted = 0  group by glpi_computertypes.name, glpi_states.name ORDER BY QTD_STATUS DESC";
$computadorTipoRetorno = mysqli_query($sqlcon, $sqlComputadorTipo);

if($computadorTipoRetorno){
    while($row = mysqli_fetch_assoc($computadorTipoRetorno)){
        array_push($arrComputadorTipo, $row);
    }
} 

$nextLinePC = mysqli_num_rows($computadorTipoRetorno) + 1;

// BUSCA MONITORES
$arrMonitorTipo = [];

$sqlMonitorTipo = "SELECT 'Monitor',glpi_monitortypes.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_monitors LEFT JOIN 	glpi_monitortypes ON glpi_monitortypes.id = glpi_monitors.monitortypes_id LEFT JOIN 	glpi_states ON glpi_states.id = glpi_monitors.states_id WHERE glpi_monitors.is_deleted = 0 group by glpi_monitortypes.name, glpi_states.name  ORDER BY QTD_STATUS DESC";
$monitorTipoRetorno = mysqli_query($sqlcon, $sqlMonitorTipo);

if($monitorTipoRetorno){
    while($row = mysqli_fetch_assoc($monitorTipoRetorno)){
        array_push($arrMonitorTipo, $row);
    }
} 

$nextLineMonitor = $nextLinePC + mysqli_num_rows($monitorTipoRetorno);

// BUSCA DISPOSITIVOS
$arrDispositivoTipo = [];

$sqlDispositivoTipo = "SELECT 'Dispositivo',glpi_peripheraltypes.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_peripherals LEFT JOIN 	glpi_peripheraltypes ON glpi_peripheraltypes.id = glpi_peripherals.peripheraltypes_id LEFT JOIN 	glpi_states ON glpi_states.id = glpi_peripherals.states_id WHERE glpi_peripherals.is_deleted = 0 group by glpi_peripheraltypes.name, glpi_states.name  ORDER BY QTD_STATUS DESC";
$dispositivoTipoRetorno = mysqli_query($sqlcon, $sqlDispositivoTipo);

if($dispositivoTipoRetorno){
    while($row = mysqli_fetch_assoc($dispositivoTipoRetorno)){
        array_push($arrDispositivoTipo, $row);
    }
} 
$nextLineDispositivo = $nextLineMonitor + mysqli_num_rows($dispositivoTipoRetorno);


// IMPRESSORA
$arrImpressoraTipo = [];

$sqlImpressoraTipo = "SELECT 'Impressora',glpi_printertypes.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_printers LEFT JOIN glpi_printertypes ON glpi_printertypes.id = glpi_printers.printertypes_id LEFT JOIN 	glpi_states ON glpi_states.id = glpi_printers.states_id WHERE glpi_printers.is_deleted = 0 group by glpi_printertypes.name, glpi_states.name  ORDER BY QTD_STATUS DESC";
$impressoraTipoRetorno = mysqli_query($sqlcon, $sqlImpressoraTipo);

if($impressoraTipoRetorno){
    while($row = mysqli_fetch_assoc($impressoraTipoRetorno)){
        array_push($arrImpressoraTipo, $row);
    }
} 

$nextLineImpressora = $nextLineDispositivo + mysqli_num_rows($impressoraTipoRetorno);

// TELEFONE
$arrTelefoneTipo = [];

$sqlTelefoneTipo = "SELECT 'Telefone',glpi_phonetypes.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_phones LEFT JOIN glpi_phonetypes ON glpi_phonetypes.id = glpi_phones.phonetypes_id LEFT JOIN glpi_states ON glpi_states.id = glpi_phones.states_id WHERE glpi_phones.is_deleted = 0 group by glpi_phonetypes.name, glpi_states.name  ORDER BY QTD_STATUS DESC";
$telefoneTipoRetorno = mysqli_query($sqlcon, $sqlTelefoneTipo);

if($telefoneTipoRetorno){
    while($row = mysqli_fetch_assoc($telefoneTipoRetorno)){
        array_push($arrTelefoneTipo, $row);
    }
} 

$nextLineTelefone = $nextLineImpressora + mysqli_num_rows($telefoneTipoRetorno);

// MOBILIA
$arrMobiliaTipo = [];
$sqlMobiliaTipo = "SELECT 'Dispositivos Passivos', glpi_passivedcequipmentmodels.name as TIPO, glpi_states.name AS STATUS, COUNT(glpi_states.name) AS QTD_STATUS FROM glpi_passivedcequipments LEFT JOIN glpi_passivedcequipmentmodels ON glpi_passivedcequipmentmodels.id = glpi_passivedcequipments.passivedcequipmentmodels_id LEFT JOIN 	glpi_states ON glpi_states.id = glpi_passivedcequipments.states_id WHERE glpi_passivedcequipments.is_deleted = 0 group by glpi_passivedcequipmentmodels.name, glpi_states.name  ORDER BY QTD_STATUS DESC";
$mobiliaTipoRetorno = mysqli_query($sqlcon, $sqlMobiliaTipo);

if($mobiliaTipoRetorno){
    while($row = mysqli_fetch_assoc($mobiliaTipoRetorno)){
        array_push($arrMobiliaTipo, $row);
    }
} 
$nextLineMobilia = $nextLineTelefone + mysqli_num_rows($mobiliaTipoRetorno);

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('GERAL POR STATUS');
    $sheet->setCellValue('A1', 'Relatório geral por status');
    $sheet->setCellValue('A2', '#');
    $sheet->setCellValue('B2', 'Tipo');
    $sheet->setCellValue('C2', 'Status');
    $sheet->setCellValue('D2', 'Quantidade');

    $sheet->fromArray($arrComputadorTipo, null, 'A3');

    $sheet->fromArray($arrMonitorTipo, null, 'A' . $nextLinePC);

    $sheet->fromArray($arrDispositivoTipo, null, 'A' . $nextLineMonitor);

    $sheet->fromArray($arrImpressoraTipo, null, 'A' . $nextLineDispositivo);

    $sheet->fromArray($arrTelefoneTipo, null, 'A' . $nextLineImpressora );
    $sheet->fromArray($arrMobiliaTipo, null, 'A' . $nextLineTelefone);
    $date = date(" - dmY");


    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatorioPorStatus'. $date . '.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    
?>