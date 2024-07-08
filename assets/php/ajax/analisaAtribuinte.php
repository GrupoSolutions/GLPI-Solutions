<?php

$idUsuario = $_POST['idUsuario'];
$idCategoria = $_POST['idCategoria'];

require('../../../src/db_config.php');

## Aqui, deverá ser buscado o grupo do usuario atual, e verificar se o grupo do usuario está atribuido no array de grupos da categoria

$stmt = $sqlcon->prepare("SELECT groups_id FROM glpi_groups_users WHERE users_id = ?");
$stmt->bind_param("i", $idUsuario);
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
if (!$stmt->execute()) {
    die("Erro na execução da consulta: " . $stmt->error);
}

$sqlGrupoUsuario = $stmt->get_result();

$gruposUsuario = array();

if($sqlGrupoUsuario->num_rows > 0) {
    while($row = $sqlGrupoUsuario->fetch_assoc()) {
        array_push($gruposUsuario, $row['groups_id']);
    }
}
$stmt = $sqlcon->prepare("SELECT groups_id FROM glpi_itilcategories WHERE id = ?");

$stmt->bind_param("i", $idCategoria);
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
if (!$stmt->execute()) {
    die("Erro na execução da consulta: " . $stmt->error);
}

$groupsItilID = $stmt->get_result();

$gruposCategoria = array(); // Inicializa o array
if ($groupsItilID->num_rows > 0) {
    while ($row = $groupsItilID->fetch_assoc()) {
        
        if($row['groups_id'] == 0 ){
            $gruposCategoria = array();
        } else {
            $gruposCategoria = unserialize($row['groups_id']);
        }
    }
} 
// Verificação se há ao menos um grupo em comum
if (!empty($gruposUsuario) && !empty($gruposCategoria)) {
    // Intersecção dos arrays
    $intersecao = array_intersect($gruposUsuario, $gruposCategoria);

    // Verificar se a intersecção não está vazia
    if (!empty($intersecao)) {
        // Quando existirem grupos em comum
        echo json_encode(['status' => false]);
        // Adicione aqui o que deseja fazer se houver pelo menos um grupo em comum
    } else {
        // Quando não existirem grupos em comum
        echo json_encode(['status' => true]);
    }
}