<?php
//AUTOLOAD COMPOSER
require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
$GLOBALS['sqlcon'] = $sqlcon;

$sqlcon = $GLOBALS['sqlcon'];
$arrGlobal = [];
$arrMonitores = [];
$arrDispositivos = [];
$arrImpressoras = [];
$arrTelefones = [];
$arrMobilia = [];
//BUSCA E INSERE OS COMPUTADORES DA BASE
$sqlComputadores = "SELECT UPPER(glpi_computers.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_computertypes.name) AS TIPO, UPPER(glpi_computermodels.name) AS MODELO, UPPER(glpi_manufacturers.name) as FABRICANTE, UPPER(glpi_locations.name) AS LOCAL, UPPER(glpi_users.name) AS USUARIO FROM glpi_computers LEFT JOIN 	glpi_states ON glpi_states.id = glpi_computers.states_id LEFT JOIN 	glpi_computertypes ON glpi_computertypes.id = glpi_computers.computertypes_id LEFT JOIN glpi_computermodels ON glpi_computermodels.id = glpi_computers.computermodels_id LEFT JOIN 	glpi_manufacturers ON glpi_manufacturers.id = glpi_computers.manufacturers_id LEFT JOIN glpi_locations ON glpi_locations.id = glpi_computers.locations_id LEFT JOIN glpi_users on glpi_users.id = glpi_computers.users_id WHERE glpi_computers.is_deleted = 0";
$computadoresRetorno = mysqli_query($sqlcon, $sqlComputadores);
if($computadoresRetorno){
    while($row = mysqli_fetch_assoc($computadoresRetorno)){
        array_push($arrGlobal, $row);
    }
}
//BUSCA E INSERE OS MONITORES DA BASE
$sqlMonitores = "SELECT UPPER(glpi_monitors.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_monitortypes.name) AS TIPO, UPPER(glpi_monitormodels.name) AS MODELO, UPPER(glpi_manufacturers.name) as FABRICANTE, UPPER(glpi_locations.name) AS LOCAL, UPPER(glpi_users.name) AS USUARIO FROM glpi_monitors LEFT JOIN glpi_states ON glpi_states.id = glpi_monitors.states_id LEFT JOIN glpi_monitortypes ON glpi_monitortypes.id = glpi_monitors.monitortypes_id LEFT JOIN glpi_monitormodels ON glpi_monitormodels.id = glpi_monitors.monitormodels_id LEFT JOIN glpi_manufacturers ON glpi_manufacturers.id = glpi_monitors.manufacturers_id LEFT JOIN glpi_locations ON glpi_locations.id = glpi_monitors.locations_id LEFT JOIN 	glpi_users on glpi_users.id = glpi_monitors.users_id WHERE glpi_monitors.is_deleted = 0";
$monitoresRetorno = mysqli_query($sqlcon, $sqlMonitores);
if($monitoresRetorno){
    while($row = mysqli_fetch_assoc($monitoresRetorno)){
        array_push($arrGlobal, $row);
    }
}
//BUSCA E INSERE OS DISPOSITIVOS DA BASE
$sqlDispositivos = "SELECT UPPER(glpi_peripherals.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_peripheraltypes.name) AS TIPO, UPPER(glpi_peripheralmodels.name) AS MODELO, UPPER(glpi_manufacturers.name) as FABRICANTE, UPPER(glpi_locations.name) AS LOCAL, UPPER(glpi_users.name) AS USUARIO FROM glpi_peripherals LEFT JOIN glpi_states ON glpi_states.id = glpi_peripherals.states_id LEFT JOIN glpi_peripheraltypes ON glpi_peripheraltypes.id = glpi_peripherals.peripheraltypes_id LEFT JOIN glpi_peripheralmodels ON glpi_peripheralmodels.id = glpi_peripherals.peripheralmodels_id LEFT JOIN glpi_manufacturers ON glpi_manufacturers.id = glpi_peripherals.manufacturers_id LEFT JOIN glpi_locations ON glpi_locations.id = glpi_peripherals.locations_id LEFT JOIN glpi_users on glpi_users.id = glpi_peripherals.users_id WHERE glpi_peripherals.is_deleted = 0;";
$dispositivosRetorno = mysqli_query($sqlcon, $sqlDispositivos);
if($dispositivosRetorno){
    while($row = mysqli_fetch_assoc($dispositivosRetorno)){
        array_push($arrGlobal, $row);
    }
}

$sqlImpressoras = "SELECT UPPER(glpi_printers.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_printertypes.name) AS TIPO, UPPER(glpi_printermodels.name) AS MODELO, UPPER(glpi_manufacturers.name) as FABRICANTE, UPPER(glpi_locations.name) AS LOCAL, UPPER(glpi_users.name) AS USUARIO FROM  glpi_printers LEFT JOIN 	glpi_states ON glpi_states.id = glpi_printers.states_id LEFT JOIN glpi_printertypes ON  glpi_printertypes.id =  glpi_printers.printertypes_id LEFT JOIN 	glpi_printermodels ON  glpi_printermodels.id =  glpi_printers.printermodels_id LEFT JOIN glpi_manufacturers ON  glpi_manufacturers.id =  glpi_printers.manufacturers_id LEFT JOIN glpi_locations ON glpi_locations.id =  glpi_printers.locations_id LEFT JOIN glpi_users on glpi_users.id =  glpi_printers.users_id WHERE  glpi_printers.is_deleted = 0";
$impressorasRetorno = mysqli_query($sqlcon, $sqlImpressoras);
if($impressorasRetorno){
    while($row = mysqli_fetch_assoc($impressorasRetorno)){
        array_push($arrGlobal, $row);
    }
} 

$sqlTelefones = "SELECT UPPER(glpi_phones.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_phonetypes.name) AS TIPO, UPPER(glpi_phonemodels.name) AS MODELO, UPPER(glpi_manufacturers.name) as FABRICANTE, UPPER(glpi_locations.name) AS LOCAL, UPPER(glpi_users.name) AS USUARIO FROM glpi_phones LEFT JOIN glpi_states ON glpi_states.id = glpi_phones.states_id LEFT JOIN glpi_phonetypes ON  glpi_phonetypes.id = glpi_phones.phonetypes_id LEFT JOIN 	glpi_phonemodels ON  glpi_phonemodels.id = glpi_phones.phonemodels_id LEFT JOIN 	glpi_manufacturers ON  glpi_manufacturers.id = glpi_phones.manufacturers_id LEFT JOIN 	glpi_locations ON glpi_locations.id = glpi_phones.locations_id LEFT JOIN glpi_users on glpi_users.id = glpi_phones.users_id WHERE glpi_phones.is_deleted = 0";
$telefonesRetorno = mysqli_query($sqlcon, $sqlTelefones);
if($telefonesRetorno){
    while($row = mysqli_fetch_assoc($telefonesRetorno)){
        array_push($arrGlobal, $row);
    }
}  

$sqlMobilia = "SELECT UPPER(glpi_passivedcequipments.name) AS PATRIMONIO, UPPER(serial) AS SERIAL, UPPER(glpi_states.name) AS STATUS, UPPER(glpi_passivedcequipmenttypes.name) AS TIPO, UPPER(glpi_passivedcequipmentmodels.name) AS MODELO, '', UPPER(glpi_locations.name) AS LOCAL FROM glpi_passivedcequipments LEFT JOIN glpi_states ON glpi_states.id = glpi_passivedcequipments.states_id LEFT JOIN 	glpi_passivedcequipmenttypes ON  glpi_passivedcequipmenttypes.id = glpi_passivedcequipments.passivedcequipmenttypes_id LEFT JOIN glpi_passivedcequipmentmodels ON glpi_passivedcequipmentmodels.id =  glpi_passivedcequipments.passivedcequipmentmodels_id LEFT JOIN glpi_locations ON glpi_locations.id = glpi_passivedcequipments.locations_id WHERE  glpi_passivedcequipments.is_deleted = 0";
$mobiliaRetorno = mysqli_query($sqlcon, $sqlMobilia);
if($mobiliaRetorno){
    while($row = mysqli_fetch_assoc($mobiliaRetorno)){
        array_push($arrGlobal, $row);
    }
} 
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('GERAL');
    $sheet->getColumnDimension('B');
    $sheet->getColumnDimension('C');
    $sheet->getColumnDimension('F');
    $sheet->getColumnDimension('G');
    $sheet->getColumnDimension('I');
    $sheet->setCellValue('A1', 'Relatório de Ativos Global');
    $sheet->setCellValue('A2', 'Patrimônio');
    $sheet->setCellValue('B2', 'Serial');
    $sheet->setCellValue('C2', 'Status');
    $sheet->setCellValue('D2', 'Tipo');
    $sheet->setCellValue('E2', 'Modelo');
    $sheet->setCellValue('F2', 'Fabricante');
    $sheet->setCellValue('G2', 'Local');
    $sheet->setCellValue('H2', 'Usuário');
    $date = date(" - dmY");
    $sheet->fromArray($arrGlobal, null, 'A3');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatorioGlobal'. $date . '.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
?>