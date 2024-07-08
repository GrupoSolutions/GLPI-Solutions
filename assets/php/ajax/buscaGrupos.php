<?php

/*Esta requisição, efetua a busca dos id's dos grupos que estão atribuidos a categoria selecionada anteriormente
Após pegar estes id's, irá fazer a busca de todos grupos, e os grupos que conterem os id's iguais os da $gruposCategoria, serão retornados com um selected

*/
//require('../src/db_config.php');

require('../../../src/db_config.php');
$selectedCategoria = $_POST['selectedCategoria'];
//$selectedCategoria = 15;
//Aqui ele retorna o ID da Categoria (glpi_itilcategories)
$stmt = $sqlcon->prepare("SELECT groups_id FROM glpi_itilcategories WHERE id = ?");

$stmt->bind_param("i", $selectedCategoria);
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
            $gruposCategoria = explode(';', $row['groups_id']);
        }
    }
} else {
    $gruposCategoria = array();
}

print_r($gruposCategoria);

$stmt = $sqlcon->prepare("SELECT id, name FROM glpi_groups ");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}

if (!$stmt->execute()) {
    die("Erro na execução da consulta: " . $stmt->error);
}
$groups = $stmt->get_result();

$options = "";
$selected = "";
while($group = $groups->fetch_assoc()) {
    if (in_array($group['id'], $gruposCategoria)) {
        $selected = 'selected'; // Marca como selecionado
    } else {
        $selected = "";
    }
    $options .= "<option value='" . $group['id'] ."' $selected>" . $group['name'] ."</option>";
}

// Retorne as opções
echo $options;