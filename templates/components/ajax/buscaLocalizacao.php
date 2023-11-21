<?php
require_once('../../../src/db_config.php');

$id = $_POST['usuario_id'];

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


// Esta query busca o nome e a localização do usuário que receberá o produto
$sqlBuscaNome = "SELECT name, locations_id from glpi_users WHERE id = $id";
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
    $arrLoc = [$rua, $bairro, $cep, $cidade, $estado, $numero, $complemento, $nome];
    header('Content-Type: application/json');
    echo json_encode($arrLoc);
} else {
    return "ERRO, LOCALIZAÇÃO NÃO ENCONTRADA";
}



?>