<?php
include('../../inc/includes.php');
Session::checkRight("consumable", READ);
    require '../../src/db_config.php';
    print_r($_POST);

    function buscaInsumo($idInsumo, $qtdInsumos){
        require '../../src/db_config.php';

        $SQL = "SELECT id FROM glpi_consumables
        WHERE glpi_consumables.consumableitems_id = '$idInsumo' AND date_out IS NULL
        LIMIT $qtdInsumos";

        $buscaInsumo = mysqli_query($sqlcon, $SQL);

        $arrInsumos = array();

        if($buscaInsumo){
            while ($requ = mysqli_fetch_row($buscaInsumo)) {
                array_push($arrInsumos, $requ[0]);
            }
        }

        return $arrInsumos;
    }

    function movimentaInsumo($idDestino, $arrInsumos, $idOrigem, $qtdInsumos){
        require '../../src/db_config.php';

        $arrInsumos = implode(",", $arrInsumos);

        $nomeInsumos = "SELECT glpi_consumableitems.id,
        CONCAT( glpi_consumableitems.name, ' - ', glpi_locations.name) AS INSUMO
        FROM base_104.glpi_consumableitems
        LEFT JOIN
            glpi_locations on glpi_locations.id = glpi_consumableitems.locations_id
        WHERE glpi_consumableitems.id IN($idOrigem, $idDestino)";
        $buscaNomeInsumo = mysqli_query($sqlcon, $nomeInsumos);
        $arrNomeInsumos = array();

        if($buscaNomeInsumo){
            while ($requ = mysqli_fetch_row($buscaNomeInsumo)) {
                array_push($arrNomeInsumos, $requ[1]);
            }
        }

        $SQL = "UPDATE glpi_consumables
        SET consumableitems_id = $idDestino
        WHERE id in ($arrInsumos)";
        $movimentaInsumo = mysqli_query($sqlcon, $SQL);

        if($movimentaInsumo = 1){
    $SQLOG = "INSERT INTO glpi_logs (itemtype, items_id, itemtype_link, user_name, date_mod, old_value, new_value)
            VALUES('ConsumableItem', '$idOrigem', 'Consumable', '{$_SESSION['glpiname']}', '{$_SESSION['glpi_currenttime']}', '$arrNomeInsumos[0]', '$arrNomeInsumos[1] - $qtdInsumos insumos'";
            $addLogInsumo = mysqli_query($sqlcon, $SQLOG);
            print_r($SQLOG);
    
        }
    }
    if(!isset($_POST)){

    } else {
        $qtdInsumos = $_POST['qtdInsumos'];
        $idOrigem = $_POST['idOrigem'];
        $idDestino = $_POST['idDestino'];
        $comentario = $_POST['comentario'];

        movimentaInsumo($idDestino, $arrInsumos, $idOrigem, $qtdInsumos);
    }


?>