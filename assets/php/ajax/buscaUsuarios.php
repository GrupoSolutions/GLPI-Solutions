<?php

require('../../../src/db_config.php');
$sql = "SELECT id, name FROM glpi_users WHERE is_active = 1 AND is_deleted = 0 AND id not in (3, 4, 6, 7) order by name ASC";
$result = mysqli_query($sqlcon, $sql);
$arrLoc = array();
if($result) {
    while($user = mysqli_fetch_array($result)){
        // $id = $user[0];
        // $name = $user[1];
        // $location_id = $name[2];
        array_push($arrLoc, $user);
    }
    // print_r($arrLoc);
    header('Content-Type: application/json');
    echo json_encode($arrLoc);
} else {
    return "ERRO AO LOCALIZAR NOME/LOCALIZACAO DO USUARIO";
}