<?php
include('../inc/includes.php');
Session::checkRight("reports", READ);
require  '../src/vendor/autoload.php';
require_once '../src/db_config.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$arrBusca =  $_SESSION['tipoBusca'];
$arrOperacoes = $_SESSION['operacao'];
$arrComputador = array();
$arrMonitor = array();
$arrImpressora = array();
$arrTelefones = array();
$arrDispositivos = array();
$arrDispositivosPassivos = array();

foreach($arrBusca as $tipoBusca){
   

    if(!empty($arrOperacoes)){
        $buscarOP = "AND `glpi_plugin_fields_operaofielddropdowns`.`name` IN (";
        for($j = 0; $j <= count($arrOperacoes) - 1; $j++){
            if($j != count($arrOperacoes) - 1){
                $buscarOP .= "'".$arrOperacoes[$j]. "', ";
            } else{
                $buscarOP .= "'". $arrOperacoes[$j]. "'";
            }
        }
        $buscarOP .= ")";
    }
    else{
        $buscarOP = '';
    }
    $_SESSION['buscaOP'] = $buscarOP;

    if($tipoBusca == "computers"){
        $query = "SELECT 
        `glpi_computers`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
		IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', UPPER(`glpi_users`.`name`)) AS USUARIO,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_computermodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'COMPUTADOR' AS TYPE
        FROM `glpi_computers` 
        LEFT JOIN `glpi_locations` ON (`glpi_computers`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_computers`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'computer') 
        LEFT JOIN `glpi_users` ON (`glpi_computers`.`users_id` = `glpi_users`.`id`) 
        LEFT JOIN `glpi_groups` ON (`glpi_computers`.`groups_id` = `glpi_groups`.`id`) 
        LEFT JOIN `glpi_computermodels` ON (`glpi_computers`.`computermodels_id` = `glpi_computermodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_computers`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_computers`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_computerativooperacaos` ON (`glpi_computers`.`id` = `glpi_plugin_fields_computerativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_computerativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA' " . $buscarOP;

        $buscaComputador = mysqli_query($sqlcon, $query);
        if($buscaComputador) {
            while ($req = mysqli_fetch_row($buscaComputador)) {
                array_push($arrComputador, $req);
            }
        }
    }

    if($tipoBusca == "monitors"){
        $query = "SELECT 
        `glpi_monitors`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
		IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', UPPER(`glpi_users`.`name`)) AS USUARIO,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_monitormodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'MONITOR' as TYPE
        FROM `glpi_monitors` 
        LEFT JOIN `glpi_locations` ON (`glpi_monitors`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_monitors`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'monitor') 
        LEFT JOIN `glpi_users` ON (`glpi_monitors`.`users_id` = `glpi_users`.`id`) 
        LEFT JOIN `glpi_groups` ON (`glpi_monitors`.`groups_id` = `glpi_groups`.`id`) 
        LEFT JOIN `glpi_monitormodels` ON (`glpi_monitors`.`monitormodels_id` = `glpi_monitormodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_monitors`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_monitors`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_monitorativooperacaos` ON (`glpi_monitors`.`id` = `glpi_plugin_fields_monitorativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_monitorativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA' " . $buscarOP;

        $buscaMonitor = mysqli_query($sqlcon, $query);
        if($buscaMonitor) {
            while ($req = mysqli_fetch_row($buscaMonitor)) {
                array_push($arrMonitor, $req);
            }
        }
    }
    
    if($tipoBusca == "printers"){
        $query = "SELECT 
        `glpi_printers`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', UPPER(`glpi_users`.`name`)) AS USUARIO,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_printermodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'IMPRESSORA' AS TYPE
        FROM `glpi_printers` 
        LEFT JOIN `glpi_locations` ON (`glpi_printers`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_printers`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'printer') 
        LEFT JOIN `glpi_users` ON (`glpi_printers`.`users_id` = `glpi_users`.`id`) 
        LEFT JOIN `glpi_groups` ON (`glpi_printers`.`groups_id` = `glpi_groups`.`id`) 
        LEFT JOIN `glpi_printermodels` ON (`glpi_printers`.`printermodels_id` = `glpi_printermodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_printers`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_printers`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_printerativooperacaos` ON (`glpi_printers`.`id` = `glpi_plugin_fields_printerativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_printerativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA'" . $buscarOP;

        $buscaImpressora = mysqli_query($sqlcon, $query);
        if($buscaImpressora) {
            while ($req = mysqli_fetch_row($buscaImpressora)) {
                array_push($arrImpressora, $req);
            }
        }
    }

    if($tipoBusca == "phones"){
        $query = "SELECT 
        `glpi_phones`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', UPPER(`glpi_users`.`name`)) AS USUARIO, 
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_phonemodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'TELEFONES' AS TYPE
        FROM `glpi_phones` 
        LEFT JOIN `glpi_locations` ON (`glpi_phones`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_phones`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'phone') 
        LEFT JOIN `glpi_users` ON (`glpi_phones`.`users_id` = `glpi_users`.`id`) 
        LEFT JOIN `glpi_groups` ON (`glpi_phones`.`groups_id` = `glpi_groups`.`id`) 
        LEFT JOIN `glpi_phonemodels` ON (`glpi_phones`.`phonemodels_id` = `glpi_phonemodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_phones`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_phones`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_phoneativooperacaos` ON (`glpi_phones`.`id` = `glpi_plugin_fields_phoneativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_phoneativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA'" . $buscarOP;

       
        $buscaTelefone = mysqli_query($sqlcon, $query);

        if($buscaTelefone) {
            while ($req = mysqli_fetch_row($buscaTelefone)) {
                array_push($arrTelefones, $req);
            }
        }
    }
    
    if($tipoBusca == "peripherals"){
        $query = "SELECT 
        `glpi_peripherals`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', UPPER(`glpi_users`.`name`)) AS USUARIO,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_peripheralmodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'DISPOSITIVOS' AS TYPE
        FROM `glpi_peripherals` 
        LEFT JOIN `glpi_locations` ON (`glpi_peripherals`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_peripherals`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'peripheral') 
        LEFT JOIN `glpi_users` ON (`glpi_peripherals`.`users_id` = `glpi_users`.`id`) 
        LEFT JOIN `glpi_groups` ON (`glpi_peripherals`.`groups_id` = `glpi_groups`.`id`) 
        LEFT JOIN `glpi_peripheralmodels` ON (`glpi_peripherals`.`peripheralmodels_id` = `glpi_peripheralmodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_peripherals`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_peripherals`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_peripheralativooperacaos` ON (`glpi_peripherals`.`id` = `glpi_plugin_fields_peripheralativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_peripheralativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA' " . $buscarOP;

        $buscaDispositivos = mysqli_query($sqlcon, $query);
        if($buscaDispositivos) {
            while ($req = mysqli_fetch_row($buscaDispositivos)) {
                array_push($arrDispositivos, $req);
            }
        }
    }

    
    if($tipoBusca == "passivedcequipments"){
        $query = "SELECT 
        `glpi_passivedcequipments`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', date_format(str_to_date(`glpi_infocoms`.`buy_date`, '%Y-%m-%d'), '%d/%m/%Y')) AS DATA_COMPRA,
        IF(`glpi_manufacturers`.`name` IS NULL, 'NÃO INFORMADO', `glpi_manufacturers`.`name`) AS FABRICANTE, 
        `glpi_passivedcequipmentmodels`.`name` AS MODELO , 
        Concat('R$ ', Replace(Replace(Replace(Format(`glpi_infocoms`.`value`, 2), '.', '|'), ',', '.'), '|', ',')) AS VALOR,   
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'DISPOSITIVOS PASSIVOS' AS TYPE
        FROM `glpi_passivedcequipments` 
        LEFT JOIN `glpi_locations` ON (`glpi_passivedcequipments`.`locations_id` = `glpi_locations`.`id`) 
        LEFT JOIN `glpi_infocoms` ON (`glpi_passivedcequipments`.`id` = `glpi_infocoms`.`items_id` AND `glpi_infocoms`.`itemtype` = 'passivedcequipment') 
        LEFT JOIN `glpi_passivedcequipmentmodels` ON (`glpi_passivedcequipments`.`passivedcequipmentmodels_id` = `glpi_passivedcequipmentmodels`.`id`) 
        LEFT JOIN `glpi_states` ON (`glpi_passivedcequipments`.`states_id` = `glpi_states`.`id`) 
        LEFT JOIN `glpi_manufacturers` ON (`glpi_passivedcequipments`.`manufacturers_id` = `glpi_manufacturers`.`id`)
        LEFT JOIN `glpi_plugin_fields_passivedcequipmentativooperacaos` ON (`glpi_passivedcequipments`.`id` = `glpi_plugin_fields_passivedcequipmentativooperacaos`.`items_id`)
        LEFT JOIN `glpi_plugin_fields_operaofielddropdowns` ON ( `glpi_plugin_fields_passivedcequipmentativooperacaos`.`plugin_fields_operaofielddropdowns_id` = `glpi_plugin_fields_operaofielddropdowns`.`id`)
        WHERE 
            glpi_infocoms.value != '0' AND glpi_states.name != 'SUCATA'" . $buscarOP;

        $buscaDispositivosPassivos = mysqli_query($sqlcon, $query);
        if($buscaDispositivosPassivos) {
            while ($req = mysqli_fetch_row($buscaDispositivosPassivos)) {
                array_push($arrDispositivosPassivos, $req);
            }
        }
       
    }
   
}

$arr = array_merge($arrComputador, $arrMonitor, $arrImpressora, $arrTelefones, $arrDispositivos, $arrDispositivosPassivos);
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('FINANCEIRO GERAL');
$sheet->setCellValue('A1', 'Relatório financeiro geral');
$sheet->setCellValue('A2', 'Patrimônio');
$sheet->setCellValue('B2', 'Localização');
$sheet->setCellValue('C2', 'Status');
$sheet->setCellValue('D2', 'Data da Compra');
$sheet->setCellValue('E2', 'Usuário');
$sheet->setCellValue('F2', 'Fabricante');
$sheet->setCellValue('G2', 'Modelo');
$sheet->setCellValue('H2', 'Valor');
$sheet->setCellValue('I2', 'Operação');
$date = date(" - dmY");
$sheet->fromArray($arr, null, 'A3');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="RelatorioFinanceiro'. $date . '.xlsx"');
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

?>