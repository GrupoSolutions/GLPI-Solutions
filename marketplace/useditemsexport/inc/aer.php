
<?php

    if(isset($_POST)){
        $id = $_POST['user_id'];
        $nametype = $_POST['nametype'];

        if(isset($_POST['itens'])){
            $items = $_POST['itens'];
        }
    switch($nametype){
        case 'Computador':
            $tb_item = 'glpi_computers';
            $tb_type = 'glpi_computertypes';
            $idType = 'item.computertypes_id';
            $type = 'Computer';
            break;
        case 'Telefone':
            $tb_item = 'glpi_phones';
            $tb_type = 'glpi_phonetypes';
            $idType = 'item.phonetypes_id';
            $type = 'Phone';
            break;
        case 'Monitor':
            $tb_item = 'glpi_monitors';
            $tb_type = 'glpi_monitortypes';
            $idType = 'item.monitortypes_id';
            $type = 'Monitor';
            break;
        case 'Impressora':
            $tb_item = 'glpi_printers';
            $tb_type = 'glpi_printertypes';
            $idType = 'item.printertypes_id';
            $type = 'Printer';
            break;
        case 'Dispositivo':
            $tb_item = 'glpi_peripherals';
            $tb_type = 'glpi_peripheraltypes';
            $idType = 'item.peripheraltypes_id';
            $type = 'Peripheral';
            break;
        
    }
    require("../../../src/db_config.php");
    $sqlBuscaTipo = "SELECT c.name FROM $tb_item as item LEFT JOIN $tb_type AS c ON $idType = c.id WHERE item.id = $id";
    $sqlResultTipo = mysqli_query($sqlcon, $sqlBuscaTipo);
    if($sqlResultTipo){
        while($usu = mysqli_fetch_array($sqlResultTipo)){
            $tipo = $usu[0];
        }
    }
    
    $sqlBuscaValor = "SELECT value FROM glpi_infocoms where items_id = $id and itemtype = '$type'";
    $sqlResultValor = mysqli_query($sqlcon, $sqlBuscaValor);
    if($sqlResultValor) {
        while($val = mysqli_fetch_array($sqlResultValor)){
            $valor = $val[0];
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
    } else {
        return "ERRO, LOCALIZAÇÃO NÃO ENCONTRADA";
    }

    require('ar.php');
    echo "<script>window.print();</script>";
}
?>