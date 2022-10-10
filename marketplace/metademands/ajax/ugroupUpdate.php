<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Metademands plugin for GLPI
 Copyright (C) 2018-2022 by the Metademands Development Team.

 https://github.com/InfotelGLPI/metademands
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Metademands.

 Metademands is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Metademands is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Metademands. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

$AJAX_INCLUDE = 1;
if (strpos($_SERVER['PHP_SELF'], "ugroupUpdate.php")) {
   include('../../../inc/includes.php');
   header("Content-Type: text/html; charset=UTF-8");
   Html::header_nocache();
}

Session::checkLoginUser();

$fieldGroup = new PluginMetademandsField();
$cond       = [];

if (isset($_POST['id_fielduser']) && $_POST["id_fielduser"] > 0) {
   if (!isset($_POST['field'])) {
      if ($fieldGroup->getFromDBByCrit(['link_to_user' => $_POST['id_fielduser'],
                                        'type'         => "dropdown_object",
                                        'plugin_metademands_metademands_id' => $_POST['metademands_id'],
                                        'item'         => Group::getType()])) {
         $id = $fieldGroup->fields['id'];
         $_POST["field"] = "field[$id]";
      }
   } else {
      if (isset($_SESSION['plugin_metademands']['fields'][$_POST['id_fielduser']])) {
         $_POST['value'] = $_SESSION['plugin_metademands']['fields'][$_POST['id_fielduser']];
      }

      $fieldGroup->getFromDB($_POST['fields_id']);
   }

   if (!empty($fieldGroup->fields['custom_values'])) {
      $options = PluginMetademandsField::_unserialize($fieldGroup->fields['custom_values']);
      foreach ($options as $type_group => $values) {
         $cond[$type_group] = $values;
      }
   }
}

//chercher les champs de la meta avec param : updatefromthisfield
$groups_id = 0;
if (isset($_POST['value']) && $_POST["value"] > 0
    && isset($_POST['id_fielduser']) && $_POST["id_fielduser"] > 0) {

   $user = new User();
   if ($user->getFromDB($_POST["value"])) {
      $groups_id = PluginMetademandsField::getUserGroup($_SESSION['glpiactiveentities'],
                                                        $_POST["value"],
                                                        $cond,
                                                        true);
   }
}

if (isset($_POST['fields_id'])
    && isset($_SESSION['plugin_metademands']['fields'][$_POST['fields_id']])) {
   $groups_id = $_SESSION['plugin_metademands']['fields'][$_POST['fields_id']];
}

if (isset($_POST['groups_id'])) {
   $groups_id = $_POST['groups_id'];
}

$rand = mt_rand();
$opt = ['name'      => $_POST["field"],
        'entity'    => $_SESSION['glpiactiveentities'],
        'value'     => $groups_id,
        'condition' => $cond,
        'rand' => $rand
];
if (isset($_POST["is_mandatory"]) && $_POST['is_mandatory'] == 1) {
   $opt['specific_tags'] = ['required' => 'required'];
}
Group::dropdown($opt);

$_POST['name'] = "group_user";
$_POST['rand'] = $rand;
Ajax::commonDropdownUpdateItem($_POST);
