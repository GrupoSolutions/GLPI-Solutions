<?php

require('../src/db_config.php');

$stmt = $sqlcon->prepare("SELECT id, name, groups_id FROM glpi_itilcategories WHERE level = 1 ORDER BY name ASC");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}

if (!$stmt->execute()) {
    die("Erro na execução da consulta: " . $stmt->error);
}

$itilCategories = $stmt->get_result();

$stmt = $sqlcon->prepare("SELECT id, name FROM glpi_groups");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}

if (!$stmt->execute()) {
    die("Erro na execução da consulta: " . $stmt->error);
}
$groups = $stmt->get_result();