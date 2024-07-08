<?php
require("../../../src/db_config.php");

if(isset($_POST)){
    $id = $_POST["loc_id"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $comentario = $_POST["comentario"];
    $nome = $_POST["nome"];
    $bairro = $_POST["bairro"];
    session_start();
    if($id > 0){
        $stmt = $sqlcon->prepare("UPDATE glpi_locations
            SET
                postcode = ?,
                address = ?,
                town = ?,
                state = ?,
                building = ?,
                country = 'BRASIL',
                room = ?,
                latitude = ?,
                longitude = ?,
                comment = ?,
                name = ?,
                bairro = ?
            WHERE id = ?");

        if(!$stmt) {
            die("Erro na preparação da consulta: " . $sqlcon->error);
        }
        $stmt->bind_param('ssssssssssss', $cep, $endereco, $cidade, $estado, $numero, $complemento, $latitude, $longitude, $comentario, $nome, $bairro, $id);
      
        if ($stmt->execute()) {
            $tipo = "success";
            $msg = "Localização atualizada com sucesso!";

            $_SESSION['toast_tipo'] = $tipo;
            $_SESSION['toast_msg'] = $msg;
            $_SESSION["loc"] = 1;
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));  
        } else {
            $_SESSION["loc"] = 3;
            echo "<script>console.warn('". $stmt->error . "');";
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));  
        }
        
    } else {
        $hoje = date("Y-m-d H:i:s");
        $SQL = "INSERT INTO glpi_locations(entities_id, is_recursive, name, locations_id, completename, comment, level, address, postcode, town, state, country, building, room, latitude, longitude, date_mod, date_creation, bairro)
        VALUES (0, 0, '$nome', 0, '$nome', '$comentario', 1, '$endereco', '$cep', '$cidade' , '$estado', 'BRASIL', '$numero', '$complemento', '$longitude', '$longitude', '$hoje', '$hoje', '$bairro')";
        $executa = mysqli_query($sqlcon, $SQL);
        if ($executa){  
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));       
        }
           
    }
        
}
?>