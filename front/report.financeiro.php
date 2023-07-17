<?php
include('../inc/includes.php');

Session::checkRight("reports", READ);

Html::header(Report::getTypeName(Session::getPluralNumber()), $_SERVER['PHP_SELF'], "tools", "report");

Report::title();
require_once '../src/db_config.php';

if (isset($_POST['tipoBusca'])){
    $_SESSION['tipoBusca'] = $_POST['tipoBusca'];
}

if(isset($_POST['operacao'])){
    $_SESSION['operacao'] = $_POST['operacao'];
} 

//Deve percorrer o array POST tipoBusca e com varios if's, verificar se o tipobusca é igual e apresentar os dados em tela.
$arrBusca =  $_SESSION['tipoBusca'];
$arrOperacoes = $_SESSION['operacao'];
$arrComputador = array();
$arrMonitor = array();
$arrImpressora = array();
$arrTelefones = array();
$arrDispositivos = array();
$arrDispositivosPassivos = array();
$qtdItems = 0;
$qtdPC = 0;
$qtdMonitor = 0;
$qtdImpressora = 0;
$qtdTelefones = 0 ;
$valorPC = 0;
$valorMonitor = 0;
$valorImpressora = 0;
$valorTelefone = 0;
$valorDispositivo = 0;
$valorDispositivoP = 0;

$columns = array(
    array( '0' => 'glpi_computers.id'),
    array( '1' => 'glpi_computers.name'),
    array( '2' => 'glpi_computers.completename'),
    array( '3' => 'glpi_states.name'),
    array( '4' => 'glpi_infocoms.buy_date'),
    array( '5' => 'glpi_users.name'),
    array( '6' => 'glpi_users.id'),
    array( '7' => 'glpi_manufacturers.name'),
    array( '8' => 'glpi_computermodels.name'),
    array( '9' => 'glpi_plugin_fields_operaofielddropdowns.name'),
    array( '10' => 'TYPE')
);
print_r($_REQUEST);

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
        'computer' AS TYPE 
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
       

        $query.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        $resultado_computador = mysqli_query($sqlcon, $query);

        while($row_computador = mysqli_fetch_array($resultado_computador)){
            $dado = array();
            
            $dado[] = $row_computador['PATRIMONIO_ID'];
            $dado[] = $row_computador['PATRIMONIO'];
            $dado[] = $row_computador['LOCALIZACAO'];
            $dado[] = $row_computador['ESTADO'];
            $dado[] = $row_computador['DATA_COMPRA'];
            $dado[] = $row_computador['USUARIO'];
            $dado[] = $row_computador['USUARIO_ID'];
            $dado[] = $row_computador['FABRICANTE'];
            $dado[] = $row_computador['MODELO'];
            $dado[] = $row_computador['OPERACAO'];
            $dado[] = $row_computador['TYPE'];
            $arrComputador[] = $dado;
        }
    }
}
print_r($arrComputador);
$json_data = array(
    "draw" => intval($requestData['draw']),
    "recordsTotal"=> intval($computador_qtd),
    "recordsFiltered" => intval($computador_qtd),
    "data" => $arrComputador
);
print_r($json_data);
echo json_encode($json_data);

$qtdPC = $_SESSION['qtdPC'];
$qtdMonitor = $_SESSION['qtdMonitor'];
$qtdImpressora = $_SESSION['qtdImpressora'];
$qtdTelefones = $_SESSION['qtdTelefone'];
$qtdDispositivos = $_SESSION['qtdDispositivo'];
$qtdDispositivosP = $_SESSION['qtdDispositivoP'];
$arrQtd = [$qtdPC, $qtdMonitor, $qtdImpressora, $qtdTelefones, $qtdDispositivos, $qtdDispositivosP];


$arr = array_merge($arrComputador, $arrMonitor, $arrImpressora, $arrTelefones, $arrDispositivos, $arrDispositivosPassivos);


$qtdItems = max($arrQtd);


?>
