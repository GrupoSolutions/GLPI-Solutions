<?php

require('../../../src/db_config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    if(isset($_POST['action']) && $_POST['action'] === 'visualizaToast'){
        $stmt = $sqlcon->prepare("UPDATE tb_helpdesk_notificacoes SET toast_visualizado = 1 WHERE ticket_id = ? AND id_usuario = ?");
        $stmt->bind_param("ii", $id, $user_id);
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $sqlcon->error);
        }
        $stmt->execute();
    } else if(isset($_POST['action']) && $_POST['action'] === 'visualizaSino'){
        $stmt = $sqlcon->prepare("UPDATE tb_helpdesk_notificacoes SET visualizado = 1 WHERE ticket_id = ? AND id_usuario = ?");
        $stmt->bind_param("ii", $id, $user_id);
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $sqlcon->error);
        }
        $stmt->execute();
    }
}