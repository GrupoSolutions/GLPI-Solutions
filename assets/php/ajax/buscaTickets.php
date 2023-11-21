<?php 
require('../../../src/db_config.php');

//$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$id = 2;
$arrIdsTickets = array();
$arrIdsRequeridos = array();
$arrIdsGrupos = array();
$idGrupos = array();
$groupsID = "";

//Primeiramente ele buscará todos os chamados que o usuário logado abriu e que está aguardando resposta
$stmt = $sqlcon->prepare("SELECT tickets_id
FROM glpi_tickets_users a
LEFT JOIN glpi_tickets b ON b.id = a.tickets_id
WHERE users_id = ? AND a.type = 1 AND b.status != 6 AND b.users_id_lastupdater != ? ");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
$stmt->bind_param("ii", $id, $id);
$stmt->execute();

$ticketsRequeridos = $stmt->get_result();
while($row = $ticketsRequeridos->fetch_assoc()) {
    array_push($arrIdsRequeridos, $row["tickets_id"]);
}

//Agora ele buscará todos os chamados em que estão em aberto para o grupo do usuário seja aguardando resposta ou não
$stmt = $sqlcon->prepare("SELECT groups_id FROM glpi_groups_users WHERE users_id = ? ");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
$stmt->bind_param("i", $id);
$stmt->execute();

$ticketsGrupos = $stmt->get_result();
while($r = $ticketsGrupos->fetch_assoc()) {
    array_push($idGrupos, $r['groups_id']);
}
foreach($idGrupos as $group){
    $groupsID .= $group . ", ";
}
$groupsID = rtrim($groupsID, ', ');

$stmt = $sqlcon->prepare("SELECT b.id FROM glpi_groups_tickets a
LEFT JOIN glpi_tickets b on b.id = a.tickets_id
WHERE b.users_id_lastupdater != ? AND b.is_deleted = 0 and status != 6 and a.groups_id = ?");

if (!$stmt) {
    die("Erro na preparação da consulta: " . $sqlcon->error);
}
$stmt->bind_param("is", $id, $groupsID);
$stmt->execute();

$ticketsInGrupo = $stmt->get_result();

while($y = $ticketsInGrupo->fetch_assoc()){
    array_push($arrIdsGrupos, $y["id"]);
}
$todosid = array_merge($arrIdsRequeridos, $arrIdsGrupos); 

$arrNotificacao = array();

if(count($todosid) > 0){
    $parameters = str_repeat('?,', count($todosid) - 1) . '?'; // placeholders
    $stmt = $sqlcon->prepare("SELECT id, CASE
    WHEN status = 1 THEN 'Novo Chamado'
    WHEN status = 2 THEN 'Aguardando sua resposta'
    WHEN status = 3 THEN 'Aguardando terceiros'
    WHEN status = 4 THEN 'Aguardando sua resposta'
    WHEN status = 5 THEN 'Solucionado'
    WHEN status = 6 THEN 'Fechado'
    END as status FROM glpi_tickets WHERE id IN ($parameters)");
    if(!$stmt) {
        die("Erro na preparação da consulta: " . $sqlcon->error);
    }
    $stmt->bind_param(str_repeat('s', count($todosid)), ...$todosid);
    $stmt->execute();

    // Obter resultados
    $result = $stmt->get_result();

    // Processar resultados
    while ($row = $result->fetch_assoc()) {
        // Faça algo com os resultados
        array_push($arrNotificacao, $row);
    }
} 

header('Content-Type: application/json');
echo json_encode($arrNotificacao);


