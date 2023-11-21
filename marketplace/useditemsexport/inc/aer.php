
<?php


    if(isset($_POST)){
        $id = $_POST['user_id'];
        $peso = $_POST['peso'];
        $operacao = $_POST['operacao'];

        if(isset($_POST['itens'])){
            $items = $_POST['itens'];
        }
  
    require("../../../src/db_config.php");
    
    // Esta query busca o nome e a localização do usuário que receberá o produto
    $sqlBuscaNome = "SELECT name, locations_id from glpi_users WHERE id = $id";
    $nomeResult = mysqli_query($sqlcon, $sqlBuscaNome);
    if($nomeResult) {
        while($name = mysqli_fetch_array($nomeResult)){
            $nome = $name[0];
            $location_id = $name[1];
        }
    } else {
        return  "<script>console.warn('ERRO AO LOCALIZAR NOME/LOCALIZACAO DO USUARIO')</script>";
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
    } else {
        "<script>console.warn('ERRO, LOCALIZAÇÃO NÃO ENCONTRADA')</script>";
    }
    if(isset($items)){
        foreach($items as $item) {
	    $valorDec = floatval(substr($item['valor'], 4));
            $sqlInsereItem = "INSERT INTO tb_envio_correio (rua, bairro, cep, cidade, estado, numero, complemento, nome, data_envio, operacao, valor_declarado, conteudo, quantidade)
            VALUES ('$rua', '$bairro', '$cep', '$cidade', '$estado', '$numero', '$complemento', '$nome', now(), '$operacao', '{$valorDec}', '{$item['conteudo']}', '{$item['quantidade']}')";
            $insertItem = mysqli_query($sqlcon, $sqlInsereItem);

        }
    } 


    require('ar.php');
    echo "<script>window.print();</script>";
}
?>