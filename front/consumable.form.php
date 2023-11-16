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

Session::checkRight("consumable", READ);

$con      = new Consumable();
$constype = new ConsumableItem();

if (isset($_POST["add_several"])) {
    $usuario_insercao = $_SESSION['glpifriendlyname'];

    $constype->check($_POST["consumableitems_id"], UPDATE);

    for ($i = 0; $i < $_POST["to_add"]; $i++) {
        unset($con->fields["id"]);
        $id = $con->add($_POST);
        require('../src/db_config.php');

        $data_nf = $_POST['data_nf'];
        $valor_insumo = $_POST['valor_insumo'];
        $numero_nf = $_POST['numero_nf'];
        $comentario = $_POST['comentario'];

        $sqlInsereValor = "UPDATE glpi_consumables SET data_nf = '$data_nf', valor_insumo = '$valor_insumo', numero_nf = '$numero_nf', usuario_insercao = '$usuario_insercao', comentario = '$comentario' WHERE id = $id" ;
        mysqli_query($sqlcon, $sqlInsereValor);
    }
    Event::log(
        $_POST["consumableitems_id"],
        "consumableitems",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s adds consumables'), $_SESSION["glpiname"])
    );

   Html::back();
} else {
    Html::back();
}
