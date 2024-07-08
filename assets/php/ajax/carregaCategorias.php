<?php

require('../src/db_config.php');

if (isset($_POST["idUsuario"])) {
    $sql = "SELECT groups_id FROM glpi_groups_users WHERE users_id = ?";
    $stmt = $sqlcon->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $users_id = $_POST["idUsuario"]; 
        $arrGroupsID = array();
        $stmt->bind_param("i", $users_id); 
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($arrGroupsID, $row['groups_id']);
            }
        } else {
             $arrGroupsID;
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

}
