<?php

require('../../../src/db_config.php');
$idUsuario = $_POST["idUsuario"];

// Consulta para obter `groups_id` do usuário
$stmt = $sqlcon->prepare("SELECT groups_id FROM glpi_groups_users WHERE users_id = ?");
$stmt->bind_param("i", $idUsuario);
$stmt->execute();
$result = $stmt->get_result();

$arrGroupsId = [];
while ($row = $result->fetch_assoc()) {
    $arrGroupsId[] = $row["groups_id"];
}

// Converte o array de IDs de grupos do usuário em uma string separada por vírgulas
$idCat = implode(', ', $arrGroupsId);

// Preparar a consulta para obter todas as categorias
$stmt = $sqlcon->prepare("SELECT id, name, completename, level, itilcategories_id, groups_id FROM glpi_itilcategories");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
$stmt->execute();
$categoriasGrupos = $stmt->get_result();

$select = '';
$insideOptgroup = false;

// Transformar $idCat de volta em um array de IDs
$idCatArray = explode(', ', $idCat);
while ($r = $categoriasGrupos->fetch_assoc()) {
    if ($r['groups_id'] != 0) {
        // Deserializa o campo groups_id
        $groups = explode(';', $r['groups_id']);
       
        
        // Verifica se há interseção entre $idCatArray e $groups
        if (array_intersect($idCatArray, $groups)) {
            if ($r['level'] == 1) {
                if ($insideOptgroup) {
                    $select .= '</optgroup>';
                }
                $select .= '<optgroup label="' . htmlspecialchars($r['name'], ENT_QUOTES, 'UTF-8') . '">';
                $insideOptgroup = true;
            } else {
                $select .= '<option value="' . htmlspecialchars($r['id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($r['name'], ENT_QUOTES, 'UTF-8') . '</option>';
            }
        }
    }
}

// Fecha o optgroup aberto se houver
if ($insideOptgroup) {
    $select .= '</optgroup>';
}

echo $select;

?>