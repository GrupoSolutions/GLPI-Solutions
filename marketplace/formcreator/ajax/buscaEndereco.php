<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
function obterDados($id){
    require('../../../src/db_config.php');

    $locationsId = 0;
    $sqlBuscaUsuario = "SELECT locations_id FROM glpi_users where id = '{$id}'";
    $buscaUsuario = mysqli_query($sqlcon, $sqlBuscaUsuario);
    if($buscaUsuario){
        while($location = mysqli_fetch_assoc($buscaUsuario)){
            $locationsId = $location['locations_id'];
        }
    }
    $id = 0;
    $endereco = "";
    $cep = "";
    $estado = "";
    $cidade = "";
    $numero = "";
    $complemento = "";

    $arrLoc = array();
    $sqlBuscaLocalizacao = "SELECT id, address, bairro, postcode, town, state, building, room FROM glpi_locations WHERE id = '{$locationsId}'";
    $buscaLocalizacao = mysqli_query($sqlcon, $sqlBuscaLocalizacao);
    if($buscaLocalizacao){
        while($localizacao = mysqli_fetch_array($buscaLocalizacao)){
           array_push($arrLoc, $localizacao);
        }
    }

    return $arrLoc[0];
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dados = obterdados($id);
    if($dados) {
        echo json_encode($dados);
    } else {
        echo json_encode(array('erro' => 'Erro ao buscar endereço!'));
    }
} else {
    echo json_encode(array('erro' => 'Id não informado'));
}