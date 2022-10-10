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

include('../../../inc/includes.php');
//header("Content-Type: text/html; charset=UTF-8");
header("Content-Type: application/json; charset=UTF-8");

Html::header_nocache();

Session::checkLoginUser();

$KO = true;

$form = new PluginMetademandsForm();

if (isset($_POST['save_model'])) {

   $form->getFromDB($_POST['plugin_metademands_forms_id']);
   if ($form->fields['is_model'] == 0) {
      $input = ['name'                              => $_POST['form_name'],
                'plugin_metademands_metademands_id' => $form->fields['plugin_metademands_metademands_id'],
                'users_id'                          => $form->fields['users_id'],
                'items_id'                          => 0,
                'itemtype'                          => '',
                'date'                              => date('Y-m-d H:i:s'),
                'is_model'                          => $_POST['is_model']];

      if ($newid = $form->add($input)) {
         $KO                                                              = false;
         $_SESSION['plugin_metademands']['plugin_metademands_forms_name'] = $_POST['form_name'];
         $_SESSION['plugin_metademands']['plugin_metademands_forms_id']   = $newid;
         $form_values                                                     = new PluginMetademandsForm_Value();
         $values                                                          = $form_values->find(['plugin_metademands_forms_id' => $_POST['plugin_metademands_forms_id']]);
         foreach ($values as $value) {
            $form_values->add(['plugin_metademands_forms_id'  => $newid,
                               'plugin_metademands_fields_id' => $value['plugin_metademands_fields_id'],
                               'value'                        => $value['value'],
                               'value2'                       => $value['value2']]);
         }
      }
   } else {

      $input = ['name'                              => $_POST['form_name'],
                'plugin_metademands_metademands_id' => $form->fields['plugin_metademands_metademands_id'],
                'users_id'                          => $form->fields['users_id'],
                'items_id'                          => 0,
                'itemtype'                          => '',
                'date'                              => date('Y-m-d H:i:s'),
                'is_model'                          => 1,
                'id'                                => $_POST['plugin_metademands_forms_id']];

      $form->update($input);
      $metademands = new PluginMetademandsMetademand();
      $forms_values = new PluginMetademandsForm_Value();
      $forms_values->deleteByCriteria(['plugin_metademands_forms_id' => $_POST['plugin_metademands_forms_id']]);
      $metademands_data = $metademands->constructMetademands($_POST['metademands_id']);

      $nblines = 0;
      $KO      = false;

      if ($nblines == 0) {
         $post    = $_POST['field'];
         $nblines = 1;
      }

      $checks  = [];
      $content = [];

      for ($i = 0; $i < $nblines; $i++) {

         $_POST['field']   = $post;
         $metademands_data = $metademands->constructMetademands($_POST['metademands_id']);
         if (count($metademands_data)) {
            foreach ($metademands_data as $form_step => $data) {
               $docitem = null;
               foreach ($data as $form_metademands_id => $line) {
                  foreach ($line['form'] as $id => $value) {
                     if (!isset($post[$id])) {
                        if (isset($_SESSION['plugin_metademands']['fields'][$id])
                            && $value['plugin_metademands_metademands_id'] != $_POST['form_metademands_id']) {
                           $_POST['field'][$id] = $_SESSION['plugin_metademands']['fields'][$id];
                        } else {
                           $_POST['field'][$id] = [];
                        }
                     } else {
                        $_SESSION['plugin_metademands']['fields'][$id] = $post[$id];
                     }

                     if ($value['type'] == 'radio') {
                        if (!isset($_POST['field'][$id])) {
                           $_POST['field'][$id] = NULL;
                        }
                     }
                     if ($value['type'] == 'checkbox') {
                        if (!isset($_POST['field'][$id])) {
                           $_POST['field'][$id] = 0;
                        }
                     }
                     if ($value['type'] == 'informations'
                         || $value['type'] == 'title') {
                        if (!isset($_POST['field'][$id])) {
                           $_POST['field'][$id] = 0;
                        }
                     }
                     if ($value['item'] == 'ITILCategory_Metademands') {
                        $_POST['field'][$id] = $_POST['field_plugin_servicecatalog_itilcategories_id'] ?? 0;
                     }
                  }

               }
            }
         }

         if (count($metademands_data)) {
            foreach ($metademands_data as $form_step => $data) {
               $docitem = null;
               foreach ($data as $form_metademands_id => $line) {
                  PluginMetademandsForm_Value::setFormValues($line['form'], $_POST['field'], $_POST['plugin_metademands_forms_id']);
               }
            }
         }
         PluginMetademandsForm_Value::loadFormValues($_POST['plugin_metademands_forms_id']);

         $_SESSION['plugin_metademands']['plugin_metademands_forms_name'] = $_POST['form_name'];
         $_SESSION['plugin_metademands']['plugin_metademands_forms_id']   = $_POST['plugin_metademands_forms_id'];
      }
   }
}

if ($KO === false) {
   echo 0;
} else {
   echo $KO;
}
