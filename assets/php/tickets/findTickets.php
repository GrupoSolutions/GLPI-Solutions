<?php 
function findTickets($userID, $status) {
    require('../src/db_config.php');
    $arrGroupTicket = array();

    $sqlTicketsUser = "SELECT tickets_id from glpi_tickets_users WHERE users_id = '{$userID}' and type = 1";
    $findTicketsUser = mysqli_query($sqlcon, $sqlTicketsUser);
    if($findTicketsUser) {
        while($ticketUser = mysqli_fetch_row($findTicketsUser)){
            array_push($arrGroupTicket, $ticketUser[0]);
        }
    }

    //Aqui buscarÃ¡ os chamados que foram abertos pelo usuÃ¡rio logado.

    $arrGroup = array();

    // Aqui efetuarÃ¡ a busca dos grupos atribuidos ao usuario logado.
    $sqlGroupUser = "SELECT groups_id FROM glpi_groups_users WHERE users_id = '{$userID}'";
    $findGroupUser = mysqli_query($sqlcon, $sqlGroupUser);
    if($findGroupUser){
        while($groupUser = mysqli_fetch_row($findGroupUser)){
            array_push($arrGroup, $groupUser[0]);
        }
    }

    $groupsID = "";
    foreach($arrGroup as $group){
        $groupsID .= $group . ", ";
    }
    $groupsID = rtrim($groupsID, ', ');
    // Aqui busca os chamados que sÃ£o atribuidos ao grupo do usuÃ¡rio logado.
    $sqlGroupTicket = "SELECT tickets_id FROM glpi_groups_tickets where groups_id in ('$groupsID')";
    $findGroupTicket = mysqli_query($sqlcon, $sqlGroupTicket);
    if($findGroupTicket) {
        while($groupTicket = mysqli_fetch_row($findGroupTicket)) {
            array_push($arrGroupTicket, $groupTicket[0]);
        }
    }
    array_unique($arrGroupTicket);
    $ticketsID = "";
    foreach($arrGroupTicket as $ticket){
        $ticketsID .= $ticket . ", ";
    }
    $ticketsID = rtrim($ticketsID, ', ');

    $sqlTicket = "SELECT 
        glpi_tickets.id,
        glpi_tickets.name,
        CASE
			WHEN status = 1 THEN 'Novo'
            WHEN status = 2 THEN 'Em Atendimento'
            WHEN status = 3 THEN 'Aguardando terceiros'
            WHEN status = 4 THEN 'Aguardando usuário'
            WHEN status = 5 THEN 'Solucionado'
            WHEN status = 6 THEN 'Fechado'
		END as status,
        glpi_tickets.date_creation,
        time_to_resolve,
        glpi_tickets.date_mod,
        glpi_itilcategories.completename,
        glpi_users.name,
        glpi_tickets.date_mod,
        glpi_tickets.closedate,
        user2.name
    FROM glpi_tickets
        LEFT JOIN glpi_itilcategories
        ON glpi_tickets.itilcategories_id = glpi_itilcategories.id
        LEFT JOIN glpi_users
        ON glpi_tickets.id_atendente = glpi_users.id
        LEFT JOIN glpi_users AS user2 
		ON user2.id = glpi_tickets.users_id_recipient
    WHERE glpi_tickets.is_deleted = 0 AND glpi_tickets.id in ($ticketsID)";
	
    if($status == 'novo'){
        $sqlTicket .= "AND status = 1  ORDER BY glpi_tickets.id DESC";
    } else if($status == 'ematendimento'){
        $sqlTicket .= "AND status = 2  ORDER BY glpi_tickets.id DESC";
    } else if($status == 'fechados') {
        $sqlTicket .= "AND status = 6 ORDER BY glpi_tickets.id DESC";
    } else {
        $sqlTicket .= "AND status != 6 ORDER BY glpi_tickets.id DESC";
    }

    $buscaTicket = mysqli_query($sqlcon, $sqlTicket);
    $arrTickets = array();

    if($buscaTicket) {
        while ($ticket = mysqli_fetch_row($buscaTicket)){
            array_push($arrTickets,  $ticket);
        }
    }

    return $arrTickets;
}
function findDep($ID){
    require('../src/db_config.php');
    $departamento;
    $sqlDepartamento = "SELECT itilcategories_id FROM glpi_tickets WHERE id = {$ID}";
        $dep = mysqli_query($sqlcon, $sqlDepartamento);
        if($dep) {
            $row = $dep->fetch_assoc();

            $itilcategories_id = $row['itilcategories_id'];
        }
    $sqlITILCategories = "SELECT completename FROM glpi_itilcategories WHERE id = {$itilcategories_id}";
    $itilCategory = mysqli_query($sqlcon, $sqlITILCategories);
    if($itilCategory) {
        $row = $itilCategory->fetch_assoc();

        $completename = $row['completename'];
    }
    $arrayPartes = explode(">", $completename);

    // Remove espaÃ§os em branco adicionais antes e depois de cada parte
    $parte1 = trim($arrayPartes[0]);
    $parte2 = trim($arrayPartes[1]);

    return [$parte1, $parte2];
}

?>