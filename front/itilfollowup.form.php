<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

use Glpi\Event;

include('../inc/includes.php');

Session::checkLoginUser();

$fup = new ITILFollowup();

$redirect = null;
$handled = false;

if (!isset($_POST['itemtype']) || !class_exists($_POST['itemtype'])) {
    Html::displayErrorAndDie('Lost');
}
$track = new $_POST['itemtype']();


if (isset($_POST["add"])) {
    $fup->check(-1, CREATE, $_POST);
     //Aqui vou ter que chamar o src da conexão com o banco, verificar o id do ticket, e ver se é novo e se quem está respondendo é diferente de quem fez a solicitação
    //Daí entao atribuo o status do chamado para em atendimento.
    require_once '../src/db_config.php';
    
    $idChamado = $_POST['items_id'];
    $SQL = "SELECT id, users_id_lastupdater, status, users_id_recipient, id_atendente FROM glpi_tickets WHERE id = {$idChamado} ";
    $buscaChamado = mysqli_query($sqlcon, $SQL);
    $chamado = array();
    if($buscaChamado){
        while ($ticket = mysqli_fetch_row($buscaChamado)) {
            array_push($chamado, $ticket);
        }
    }   
    $ticketStatus = $chamado[0][2];
    $ticketUltimoUpd = $chamado[0][1];
    $ticketRecipiente = $chamado[0][3];
    $idUsuario = $_SESSION['glpiID'];
    $now = date('Y-m-d H:i:s');
    $arrAtendentes = array();
    //Esta parte seta o status para Aguardando Resposta (Quando o Atendente responde e aguarda resposta do cliente/solicitante) e atribui o atendente que respondeu ao chamado. 
    if($ticketStatus == 1 && $ticketUltimoUpd != $idUsuario && $ticketRecipiente != $idUsuario){
        $sqlAtribuiChamado = "INSERT INTO glpi_tickets_users(tickets_id, users_id, type, use_notification) VALUES ({$idChamado}, {$idUsuario}, 2, 1)";
        $atribuiChamado =  mysqli_query($sqlcon, $sqlAtribuiChamado);
        //Aqui deveria entrar a parte de insert na tabela de pauses, e inserir o id da ultima pausa na tabela glpi_tickets
        
        $sqlAddPausa = "INSERT INTO tickets_pause(tickets_id, data_inicio) VALUES ({$idChamado}, '{$now}')";
        $addPausa = mysqli_query($sqlcon, $sqlAddPausa);
        $idPausa = mysqli_insert_id($sqlcon);
        $statusSQL = "UPDATE glpi_tickets SET status = 4, id_atendente = {$idUsuario}, lastpause_id = {$idPausa} WHERE id = {$idChamado}";
        $execStatus = mysqli_query($sqlcon, $statusSQL);
    } 
   
    //Esta parte setará o status para Em atendimento, quando for igual a Pendente/Aguardando Terceiros
    if ($ticketStatus == 4) {
        $arrClientes = array();
        $sqlBuscaClientes = "SELECT users_id FROM glpi_tickets_users WHERE tickets_id = '{$idChamado}' AND type IN (1,3)";
        $buscaClientes = mysqli_query($sqlcon, $sqlBuscaClientes);
        if ($buscaClientes) {
            while ($cliente = mysqli_fetch_row($buscaClientes)) {
                array_push($arrClientes, $cliente[0]); // Adiciona apenas o valor do ID do cliente no array
            }
        }
        if (in_array($idUsuario, $arrClientes)) {
            $idLastPause = 0;
            $buscaIdPausa = "SELECT lastpause_id FROM glpi_tickets WHERE id = {$idChamado}";
            $buscaPausa = mysqli_query($sqlcon, $buscaIdPausa);
    
            if ($buscaPausa) {
                while ($pausa = mysqli_fetch_row($buscaPausa)) {
                    $idLastPause = $pausa[0];
                }
            }
    
    
            $sqlAddFimPausa = "UPDATE tickets_pause SET data_final = '{$now}' WHERE id = {$idLastPause}";
            $addFimPausa = mysqli_query($sqlcon, $sqlAddFimPausa);
    
            $statusSQL = "UPDATE glpi_tickets SET status = 2 WHERE id = {$idChamado}";
            $execStatus = mysqli_query($sqlcon, $statusSQL);
        }
    } else if ($ticketStatus == 2) {
        $arrAtendentes = array();
        $sqlBuscaAtendentes = "SELECT users_id FROM glpi_tickets_users where tickets_id = '{$idChamado}' and type = 2";
        $buscaAtendentes = mysqli_query($sqlcon, $sqlBuscaAtendentes);
        if($buscaAtendentes){
            while ($atendente = mysqli_fetch_row($buscaAtendentes)) {
                array_push($arrAtendentes, $atendente[0]);
            }
        }
        if (in_array($idUsuario, $arrAtendentes)) {
            $sqlAddPausa = "INSERT INTO tickets_pause(tickets_id, data_inicio) VALUES ({$idChamado}, '{$now}')";
            $addPausa = mysqli_query($sqlcon, $sqlAddPausa);
            $idPausa = mysqli_insert_id($sqlcon);
    
            $statusSQL = "UPDATE glpi_tickets SET status = 4, id_atendente = {$idUsuario}, lastpause_id = {$idPausa} WHERE id = {$idChamado}";
            $execStatus = mysqli_query($sqlcon, $statusSQL);
        }
    }
   
    $fup->add($_POST);

    Event::log(
        $fup->getField('items_id'),
        strtolower($_POST['itemtype']),
        4,
        "tracking",
        //TRANS: %s is the user login
        sprintf(__('%s adds a followup'), $_SESSION["glpiname"])
    );
    $redirect = $track->getFormURLWithID($fup->getField('items_id'));
    $handled = true;
} else if (
    isset($_POST['add_close'])
           || isset($_POST['add_reopen'])
) {
    if ($track->getFromDB($_POST['items_id']) && (method_exists($track, 'canApprove') && $track->canApprove())) {
        $fup->add($_POST);

        Event::log(
            $fup->getField('items_id'),
            strtolower($_POST['itemtype']),
            4,
            "tracking",
            //TRANS: %s is the user login
            sprintf(__('%s approves or refuses a solution'), $_SESSION["glpiname"])
        );
    }
} else if (isset($_POST["update"])) {
    $fup->check($_POST['id'], UPDATE);
    $fup->update($_POST);

    Event::log(
        $fup->getField('items_id'),
        strtolower($_POST['itemtype']),
        4,
        "tracking",
        //TRANS: %s is the user login
        sprintf(__('%s updates a followup'), $_SESSION["glpiname"])
    );
    $redirect = $track->getFormURLWithID($fup->getField('items_id'));
    $handled = true;
} else if (isset($_POST["purge"])) {
    $fup->check($_POST['id'], PURGE);
    $fup->delete($_POST, 1);

    Event::log(
        $fup->getField('items_id'),
        strtolower($_POST['itemtype']),
        4,
        "tracking",
        //TRANS: %s is the user login
        sprintf(__('%s purges a followup'), $_SESSION["glpiname"])
    );
    $redirect = $track->getFormURLWithID($fup->getField('items_id'));
}

if ($handled) {
    if (isset($_POST['kb_linked_id'])) {
       //if followup should be linked to selected KB entry
        $params = [
            'knowbaseitems_id' => $_POST['kb_linked_id'],
            'itemtype'         => $track->getType(),
            'items_id'         => $track->getID()
        ];
        $existing = $DB->request(
            'glpi_knowbaseitems_items',
            $params
        );
        if ($existing->numrows() == 0) {
            $kb_item_item = new KnowbaseItem_Item();
            $kb_item_item->add($params);
        }
    }

    if ($track->can($_POST["items_id"], READ)) {
        $toadd = '';
       // Copy followup to KB redirect to KB
        if (isset($_POST['_fup_to_kb']) && $_POST['_fup_to_kb']) {
            $toadd = "&_fup_to_kb=" . $fup->getID();
        }
        $redirect = $track->getLinkURL() . $toadd;
    } else {
        Session::addMessageAfterRedirect(
            __('You have been redirected because you no longer have access to this ticket'),
            true,
            ERROR
        );
        $redirect = $track->getSearchURL();
    }
}

if (null == $redirect) {
    Html::back();
} else {
    Html::redirect($redirect);
}

Html::displayErrorAndDie('Lost');
