<?php
include('../inc/includes.php');

Session::checkRight("reports", READ);

Html::header(Report::getTypeName(Session::getPluralNumber()), $_SERVER['PHP_SELF'], "tools", "report");

require_once '../src/db_config.php';

if (isset($_POST['tipoBusca'])){
    $_SESSION['tipoBusca'] = $_POST['tipoBusca'];
} else{
    $_SESSION['tipoBusca'] = ['computers', 'monitors', 'printers', 'phones', 'peripherals', 'passivedcequipments'];
}


$buscaOperacao = "SELECT NAME FROM glpi_plugin_fields_operaofielddropdowns";
$operacao = mysqli_query($sqlcon, $buscaOperacao);
$arrOperacao = array();
if($operacao){
    while ($requ = mysqli_fetch_row($operacao)) {
        array_push($arrOperacao, $requ[0]);
    }
}

if(isset($_POST['operacao'])){
    $_SESSION['operacao'] = $_POST['operacao'];
} else{
    $_SESSION['operacao'] = $arrOperacao;
}

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
        `glpi_computers`.`id` AS COMPUTADOR_ID,
        `glpi_computers`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
		IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', `glpi_users`.`name`) AS USUARIO,
        `glpi_users`.`id` AS USUARIO_ID,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_computermodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'computer' AS TYPE,
        'COMPUTADOR' AS TEST
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

        $resultado_computador = mysqli_query($sqlcon, $query);
        $computador_qtd = mysqli_num_rows($resultado_computador);
       

        $resultado_computador = mysqli_query($sqlcon, $query);

        while($row_computador = mysqli_fetch_array($resultado_computador)){
            $dado = array();
            
            $dado[] = $row_computador[0];
            $dado[] = $row_computador[1];
            $dado[] = $row_computador[2];
            $dado[] = $row_computador[3];
            $dado[] = $row_computador[4];
            $dado[] = $row_computador[5];
            $dado[] = $row_computador[6];
            $dado[] = $row_computador[7];
            $dado[] = $row_computador[8];
            $dado[] = $row_computador[9];
            $dado[] = $row_computador[10];
            $dado[] = $row_computador[11];
            $dado[] = $row_computador[12];

            $arrComputador[] = $dado;
        }
    }
    if($tipoBusca == "monitors"){
        $query = "SELECT 
        `glpi_monitors`.`id` AS PATRIMONIO_ID,
        `glpi_monitors`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
		IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', `glpi_users`.`name`) AS USUARIO,
        `glpi_users`.`id` AS USUARIO_ID,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_monitormodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'monitor' as TYPE,
        'MONITOR' as TIPO
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
        `glpi_printers`.`id` AS PATRIMONIO_ID,
        `glpi_printers`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', `glpi_users`.`name`) AS USUARIO,
        `glpi_users`.`id` AS USUARIO_ID,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_printermodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'printer' AS TYPE,
        'IMPRESSORA' AS TIPO
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
        `glpi_phones`.`id` AS PATRIMONIO_ID,
        `glpi_phones`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', `glpi_users`.`name`) AS USUARIO, 
        `glpi_users`.`id` AS USUARIO_ID,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_phonemodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'phone' AS TYPE,
        'TELEFONE' AS TIPO
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
        `glpi_peripherals`.`id` AS PATRIMONIO_ID,
        `glpi_peripherals`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
		IF(`glpi_users`.`name` IS NULL, 'EM ESTOQUE', `glpi_users`.`name`) AS USUARIO,
        `glpi_users`.`id` AS USUARIO_ID,
        `glpi_manufacturers`.`name` AS FABRICANTE, 
        `glpi_peripheralmodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'peripheral' AS TYPE,
        'DISPOSITIVO' AS TIPO
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
        `glpi_passivedcequipments`.`id` AS PATRIMONIO_ID,
        `glpi_passivedcequipments`.`name` AS PATRIMONIO, 
        `glpi_locations`.`completename` AS LOCALIZACAO, 
        `glpi_states`.`name` AS ESTADO, 
        IF(`glpi_infocoms`.`buy_date` IS NULL, 'NÃO INFORMADO', `glpi_infocoms`.`buy_date`) AS DATA_COMPRA,
        'SEM USUARIO' AS USUARIO,
        '' AS USUARIO_ID,
        IF(`glpi_manufacturers`.`name` IS NULL, 'NÃO INFORMADO', `glpi_manufacturers`.`name`) AS FABRICANTE, 
        `glpi_passivedcequipmentmodels`.`name` AS MODELO , 
        `glpi_infocoms`.`value` AS VALOR, 
        IF(`glpi_plugin_fields_operaofielddropdowns`.`name` IS NULL, 'NÃO INFORMADO', `glpi_plugin_fields_operaofielddropdowns`.`name`) AS OPERACAO,
        'passivedcequipments' AS TYPE,
        'DISPOSITIVO PASSIVO' AS TIPO
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
$arrFinal = array_merge($arrComputador, $arrMonitor, $arrImpressora, $arrTelefones, $arrDispositivos, $arrDispositivosPassivos);
?>
<link rel="stylesheet" href="/glpi/assets/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/glpi/assets/font-awesome-4.7.0/css/fontawesome.css">
<button class="btn btn-success"><a href="ExportaXLSX.php"><i class="fa-solid fa-file-excel fa-xl" style="color: #116917;"></i>  <span> Exportar(XLSX)</span></a></button><br><br>

<table id="example" class="table" style="width:100%">
    <thead>
        
        <th>Tipo</th>
        <th>Patrimonio</th>
        <th>Estado</th>
        <th>Modelo</th>
        <th>Fabricante</th>
        <th>Usuario</th>
        <th>Localização</th>
        <th>Operação</th>
        <th>Data Compra</th>
        <th>Preço</th>
    </thead>

    <tbody>
        <?php foreach($arrFinal as $item) { ?>
            <tr>
                <td><?php echo $item[12]?></td>
                <td><a href="<?php echo $item[11]?>.form.php?id=<?php echo $item[0]?>"> <?php echo $item[1]?></a></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[8] ?></td>
                <td><?php echo $item[7] ?></td>
                <td><?php if($item[6]){ ?> <a href="user.form.php?id=<?php echo $item[6] ?>"><?php }?><?php echo mb_strtoupper($item[5]) ?></a></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo mb_strtoupper($item[10])?></td>
                <td><?php echo date('d/m/Y', strtotime($item[4] ?? '')); ?></td>
                <td>R$ <?php echo number_format($item[9], 2, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
                },
                pageLength: 25,
                columnDefs: [
                {
                    targets: 0,
                    className: 'dt-body-center'
                }
                ],
            });
        });
    </script>
    
