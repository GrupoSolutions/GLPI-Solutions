<?php


function buscarPedidos(){
    require '../../../src/db_config.php';

    $SQL = "SELECT glpi_plugin_consumables_requests.id,
    consumables_id,
    glpi_consumableitems.name,
    glpi_plugin_consumables_requests.consumableitemtypes_id,
    glpi_consumableitemtypes.name,
    requesters_id,
    REQUERENTE.name as REQURENTE,
    give_items_id,
    DESTINO.name as DESTINO,
    status,
    number,
    glpi_plugin_consumables_requests.date_mod,
    ticket_id
    FROM glpi_plugin_consumables_requests
        LEFT JOIN
        glpi_consumableitems on glpi_consumableitems.id = glpi_plugin_consumables_requests.consumables_id
        JOIN
        glpi_consumableitemtypes on glpi_consumableitemtypes.id = glpi_plugin_consumables_requests.consumableitemtypes_id
        LEFT JOIN 
        glpi_users as REQUERENTE on REQUERENTE.id = glpi_plugin_consumables_requests.requesters_id
        LEFT JOIN 
        glpi_users as DESTINO on DESTINO.id = glpi_plugin_consumables_requests.give_items_id
    WHERE 
        status = 2";

    $buscaPedido = mysqli_query($sqlcon, $SQL);

    $arrPedidos = array();

    if($buscaPedido){
        while ($requ = mysqli_fetch_row($buscaPedido)) {
            array_push($arrPedidos, $requ);
        }
    }
    return $arrPedidos;
}

?>