<?php
require_once('../../../src/db_config.php');

$id = $_POST['usuario_id'];
$nametype = $_POST['nametype'];

$location_id = 0;
$rua;
$bairro;
$cep;
$cidade;
$estado;
$numero;
$complemento;
$tb_item;
$tb_type;
$nome;
$tipo;

switch($nametype){
    case 'Computador':
        $tb_item = 'glpi_computers';
        $tb_type = 'glpi_computertypes';
        $type = 'Computer';
        break;
    case 'Telefone':
        $tb_item = 'glpi_phones';
        $tb_type = 'glpi_phonetypes';
        $type = 'Phone';
        break;
    case 'Monitor':
        $tb_item = 'glpi_monitors';
        $tb_type = 'glpi_monitortypes';
        $type = 'Monitor';
        break;
    case 'Impressora':
        $tb_item = 'glpi_printers';
        $tb_type = 'glpi_printertypes';
        $type = 'Printer';
        break;
    case 'Dispositivo':
        $tb_item = 'glpi_peripherals';
        $tb_type = 'glpi_peripheraltypes';
        $type = 'Peripheral';
        break;
    
}
$sqlBuscaTipo = "SELECT c.name FROM glpi_computers as item LEFT JOIN glpi_computertypes AS c ON item.computertypes_id = c.id WHERE item.id = $id";
$sqlResultTipo = mysqli_query($sqlcon, $sqlBuscaTipo);
if($sqlResultTipo){
    while($usu = mysqli_fetch_array($sqlResultTipo)){
        $tipo = $usu[0];
    }
}

// Esta query busca o id do usuário que está como propietario do Ativo.
$sqlBuscaItem = "SELECT users_id from $tb_item WHERE id = $id";
$sqlResult = mysqli_query($sqlcon, $sqlBuscaItem);

if($sqlResult) {
    while($usu = mysqli_fetch_array($sqlResult)){
        $usuario = $usu[0];
    }
} else {
    return "ERRO AO LOCALIZAR ID DA LOCALIZAÇÃO";
}

// Esta query busca o nome e a localização do usuário que receberá o produto
$sqlBuscaNome = "SELECT name, locations_id from glpi_users WHERE id = $usuario";
$nomeResult = mysqli_query($sqlcon, $sqlBuscaNome);
if($nomeResult) {
    while($name = mysqli_fetch_array($nomeResult)){
        $nome = $name[0];
        $location_id = $name[1];
    }
} else {
    return "ERRO AO LOCALIZAR NOME/LOCALIZACAO DO USUARIO";
}


$sqlLocation = "SELECT address, bairro, postcode, town, state, building, room FROM glpi_locations WHERE id = $location_id";
$locationResult = mysqli_query($sqlcon, $sqlLocation);
$arrLoc = array();

if($locationResult) {
    while($loc = mysqli_fetch_array($locationResult)){
        $rua = $loc[0];
        $bairro = $loc[1];
        $cep = $loc[2];
        $cidade = $loc[3];
        $estado = $loc[4];
        $numero = $loc[5];
        $complemento = $loc[6];
    }
    $arrLoc = [$rua, $bairro, $cep, $cidade, $estado, $numero, $complemento, $nome, $tipo];
    header('Content-Type: application/json');
    echo json_encode($arrLoc);
} else {
    return "ERRO, LOCALIZAÇÃO NÃO ENCONTRADA";
}



?>