<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2022 Teclib' and contributors.
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

Session::checkRight("peripheral", READ);

if (empty($_GET["id"])) {
    $_GET["id"] = "";
}
if (!isset($_GET["withtemplate"])) {
    $_GET["withtemplate"] = "";
}

$peripheral = new Peripheral();

if (isset($_POST["add"])) {
    $peripheral->check(-1, CREATE, $_POST);

    $peripheraltypeid = $_POST['peripheraltypes_id'];
    $manufacturesid = $_POST['manufacturers_id'];
    $modelid = $_POST['peripheralmodels_id'];

   
    if($peripheraltypeid == 0 || $manufacturesid == 0 || $modelid == 0){
        echo '<script language="javascript">';
        echo 'if(confirm("Erro ao adicionar Dispositivo!\nOs campos Modelo, Fabricante e Tipo devem ser preenchidos.") == true){ history.go(-1)}';
        //echo 'else{javascript:window.history.back();}';
        echo '</script>';
    }
    else {

    if ($newID = $peripheral->add($_POST)) {
        Event::log(
            $newID,
            "peripherals",
            4,
            "inventory",
            sprintf(__('%1$s adds the item %2$s'), $_SESSION["glpiname"], $_POST["name"])
        );
        if ($_SESSION['glpibackcreated']) {
            Html::redirect($peripheral->getLinkURL());
        }
    }
    Html::back();
}} else if (isset($_POST["delete"])) {
    $peripheral->check($_POST["id"], DELETE);
    $peripheral->delete($_POST);

    Event::log(
        $_POST["id"],
        "peripherals",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s deletes an item'), $_SESSION["glpiname"])
    );
    $peripheral->redirectToList();
} else if (isset($_POST["restore"])) {
    $peripheral->check($_POST["id"], DELETE);

    $peripheral->restore($_POST);
    Event::log(
        $_POST["id"],
        "peripherals",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s restores an item'), $_SESSION["glpiname"])
    );
    $peripheral->redirectToList();
} else if (isset($_POST["purge"])) {
    $peripheral->check($_POST["id"], PURGE);

    $peripheral->delete($_POST, 1);
    Event::log(
        $_POST["id"],
        "peripherals",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s purges an item'), $_SESSION["glpiname"])
    );
    $peripheral->redirectToList();
} else if (isset($_POST["update"])) {
    $peripheral->check($_POST["id"], UPDATE);

    $peripheraltypeid = $_POST['peripheraltypes_id'];
    $manufacturesid = $_POST['manufacturers_id'];
    $modelid = $_POST['peripheralmodels_id'];

   
    if($peripheraltypeid == 0 || $manufacturesid == 0 || $modelid == 0){
        echo '<script language="javascript">';
        echo 'if(confirm("Erro ao atualizar dispositivo!\nOs campos Modelo, Fabricante e Tipo devem ser preenchidos.") == true){ history.go(-1)}';
        //echo 'else{javascript:window.history.back();}';
        echo '</script>';
    }
    else {

    $peripheral->update($_POST);
    Event::log(
        $_POST["id"],
        "peripherals",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s updates an item'), $_SESSION["glpiname"])
    );
    Html::back();
}} else if (isset($_POST["unglobalize"])) {
    $peripheral->check($_POST["id"], UPDATE);

    Computer_Item::unglobalizeItem($peripheral);
    Event::log(
        $_POST["id"],
        "peripherals",
        4,
        "inventory",
        //TRANS: %s is the user login
        sprintf(__('%s sets unitary management'), $_SESSION["glpiname"])
    );

    Html::redirect($peripheral->getFormURLWithID($_POST["id"]));
} else {
    $menus = ["assets", "peripheral"];
    Peripheral::displayFullPageForItem($_GET["id"], $menus, [
        'withtemplate' => $_GET["withtemplate"],
        'formoptions'  => "data-track-changes=true"
    ]);
}