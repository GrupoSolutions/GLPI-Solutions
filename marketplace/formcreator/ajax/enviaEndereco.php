<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require('../../../src/db_config.php');

    $idusu = $_POST['idf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['estado'];
    $numero = $_POST['numero'];
    $complemento = '';
    $locationsId = 0;
    print_r($_POST['complemento']);
    if(!empty($_POST['complemento'])){
        $complemento = $_POST['complemento'];
    }

    $sqlLocation = "SELECT locations_id FROM glpi_users where id = '{$idusu}'";
    $buscaLocation = mysqli_query($sqlcon, $sqlLocation);
    if($buscaLocation){
        while($location = mysqli_fetch_assoc($buscaLocation)){
            $locationsId = $location['locations_id'];
        }
    }

    $sqlAlteraLocalizacao = "UPDATE glpi_locations SET address = '{$rua}', bairro = '{$bairro}', postcode = '{$cep}', town = '{$uf}', state = '{$cidade}', building = '{$numero}', room = '{$complemento}' WHERE id = '{$locationsId}'";
    $alteraLocalizacao = mysqli_query($sqlcon, $sqlAlteraLocalizacao);
}
?>