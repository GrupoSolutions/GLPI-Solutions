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

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/**
 * Class PluginMetademandsTask
 */
class PluginMetademandsTask extends CommonDBTM {

   static $rightname = 'plugin_metademands';

   const TICKET_TYPE     = 0;
   const METADEMAND_TYPE = 1;
   const TASK_TYPE       = 2;

   /**
    * functions mandatory
    * getTypeName(), canCreate(), canView()
    *
    * @param int $nb
    *
    * @return string
    */
   static function getTypeName($nb = 0) {
      return __('Task creation', 'metademands');
   }

   /**
    * @return bool|int
    */
   static function canView() {
      return Session::haveRight(self::$rightname, READ);
   }

   /**
    * @return bool
    */
   static function canCreate() {
      return Session::haveRightsOr(self::$rightname, [CREATE, UPDATE, DELETE]);
   }

   /**
    * @return bool|int
    */
   static function canPurge() {
      return Session::haveRight(self::$rightname, PURGE);
   }

   /**
    * Display tab for each users
    *
    * @param CommonGLPI $item
    * @param int        $withtemplate
    *
    * @return array|string
    */
   function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {

      $dbu = new DbUtils();
      if (!$withtemplate) {
         if ($item->getType() == 'PluginMetademandsMetademand') {
            if ($_SESSION['glpishow_count_on_tabs']) {
               return self::createTabEntry(self::getTypeName(),
                                           $dbu->countElementsInTable($this->getTable(),
                                                                      ["plugin_metademands_metademands_id" => $item->getID()]));
            }
            return self::getTypeName();
         }
      }
      return '';
   }

   /**
    * Display content for each users
    *
    * @static
    *
    * @param CommonGLPI $item
    * @param int        $tabnum
    * @param int        $withtemplate
    *
    * @return bool|true
    * @throws \GlpitestSQLError
    * @throws \GlpitestSQLError
    */
   static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0) {
      $field = new self();

      if ($item->getType() == 'PluginMetademandsMetademand') {
         $field->showTaskslist($item);
      }
      return true;
   }

   /**
    * Print the field form
    *
    * @param $metademands
    *
    * @return bool (display)
    * @throws \GlpitestSQLError
    */
   function showTaskslist($metademands) {
      global $CFG_GLPI;

      if (!$this->canview()) {
         return false;
      }
      if (!$this->cancreate()) {
         return false;
      }

      $canedit = $metademands->can($metademands->fields['id'], UPDATE);
      $solved  = true;
      if ($canedit) {
         // Check if metademand tasks has been already created
         $ticket_metademand      = new PluginMetademandsTicket_Metademand();
         $ticket_metademand_data = $ticket_metademand->find(['plugin_metademands_metademands_id' => $metademands->fields['id']]);

         $solved = PluginMetademandsTicket::isTicketSolved($ticket_metademand_data);

         if ($metademands->fields['maintenance_mode'] == 1) {
            $solved = true;
         }
         if ($solved) {
            echo "<div class='center first-bloc'>";
            echo "<form name='form_ticket' method='post' action='" . Toolbox::getItemTypeFormURL(__CLASS__) . "'>";
            echo "<table class='tab_cadre_fixe' >";
            echo "<tr class='tab_bg_1'>";
            echo "<th colspan='6'>" . __('Add a task', 'metademands') . "</th>";
            echo "</tr>";

            echo "<tr class='tab_bg_1'>";
            echo "<td class='center'>" . __('Task type', 'metademands') . "&nbsp;:&nbsp;";

            $task_types = self::getTaskTypes($metademands->fields['id']);

            // Only one metademand can be selected
            $metademand_tasks = $this->find(['plugin_metademands_metademands_id' => $metademands->fields['id'],
                                             'type'                              => self::METADEMAND_TYPE]);
            if (count($metademand_tasks)) {
               unset($task_types[self::METADEMAND_TYPE]);
            }

            $rand   = Dropdown::showFromArray('taskType', $task_types);
            $params = ['taskType'                          => '__VALUE__',
                       'plugin_metademands_metademands_id' => $metademands->fields['id']];
            Ajax::updateItemOnSelectEvent("dropdown_taskType$rand", "show_add_task_form",
                                          PLUGIN_METADEMANDS_WEBDIR . "/ajax/showAddTaskForm.php",
                                          $params);
            echo "</td>";
            echo "</tr>";

            echo "<tr class='tab_bg_1'>";
            echo "<td class='center'>";
            echo "<span id='show_add_task_form'>";
            $type = "-1";
            if (Session::haveRight('ticket', CREATE)) {
               $type = self::TICKET_TYPE;
            }
            if ($metademands->fields['force_create_tasks'] == 1) {
               $type = self::TASK_TYPE;
            }
            if ($type > -1) {
               PluginMetademandsTicketTask::showTicketTaskForm($metademands->fields['id'], $solved, $type);
            } else {
               echo "<span style='color:red'>" . __("You don't have the ticket creation right", 'metademands') . "</span>";
            }
            echo "</span>";
            echo "</td>";
            echo "</tr>";

            echo "<tr class='tab_bg_1'>";

            echo "<td class='tab_bg_2 center' colspan='6'>";
            echo Html::hidden('plugin_metademands_metademands_id', ['value' => $metademands->fields['id']]);
            echo Html::hidden('entities_id', ['value' => $metademands->fields['entities_id']]);
            echo Html::submit(_sx('button', 'Add'), ['name' => 'add', 'class' => 'btn btn-primary']);
            echo "</td>";
            echo "</tr>";

            echo "</table>";
            Html::closeForm();
            echo "</div>";

         } else {
            echo "<h3><div class='alert alert-warning' role='alert'>";
            echo "<i class='fas fa-exclamation-triangle fa-2x' style='color:orange'></i>&nbsp;";
            echo __('You cannot add new tasks if linked tickets are not solved', 'metademands');
            echo "</div>";
            echo "</h3>";
         }
      }
      $this->listTasks($metademands->fields['id'], $canedit, $solved);
   }


   /**
    * Print the field form
    *
    * @param $ID integer ID of the item
    * @param $options array
    *     - target filename : where to go when done.
    *     - withtemplate boolean : template or basic item
    *
    * @return bool (display)
    * @throws \GlpitestSQLError
    */
   function showForm($ID, $options = [""]) {

      if (!$this->canview()) {
         return false;
      }
      if (!$this->cancreate()) {
         return false;
      }

      if ($ID > 0) {
         $this->check($ID, READ);
      } else {
         // Create item
         $this->check(-1, UPDATE);
         $this->getEmpty();
      }

      $meta    = new PluginMetademandsMetademand();
      $canedit = $meta->can($this->fields['plugin_metademands_metademands_id'], UPDATE);

      $this->showFormHeader(['colspan' => 3]);

      echo "<tr class='tab_bg_1'>";
      echo "<td>" . __('Name') . "</td>";
      echo "<td>";
      echo Html::input('name', ['value' => $this->fields['name'], 'size' => 40]);
      echo "</td>";
      echo "<td>" . __('Label') . "</td>";
      echo "<td>";
      echo Html::input('label', ['value' => $this->fields['label'], 'size' => 40]);
      echo "</td>";
      echo "<td>" . __('Mandatory field') . "</td>";
      echo "<td>";
      Dropdown::showYesNo("is_mandatory", $this->fields["is_mandatory"]);
      echo "</td>";
      echo "</tr>";

      echo "<tr class='tab_bg_1'>";
      echo "<td>" . __('Type') . "</td>";
      echo "<td>";
      PluginMetademandsField::dropdownFieldTypes("type", ['value'     => $this->fields["type"],
                                                          'on_change' => 'if(this.value == "dropdown"){
                                    document.getElementById("show_item").style.display = "inline";
                                    document.getElementById("show_item_title").style.display = "inline"
                                  } else {
                                    document.getElementById("show_item").style.display = "none";
                                    document.getElementById("show_item_title").style.display = "none"
                                  }']);
      echo "</td>";
      echo "<td>";
      echo "<span id='show_item_title' style='display:none'>";
      __('Object', 'metademands');
      echo "</span>";
      echo "</td>";
      echo "<td>";
      echo "<span id='show_item' style='display:none'>";
      self::dropdownFieldItems("item", ['value' => $this->fields["item"]]);
      echo "</span>";
      echo Html::hidden('plugin_metademands_metademands_id', ['value' => $this->fields["plugin_metademands_metademands_id"]]);
      echo "</td>";
      $this->showFormButtons(['colspan' => 3,
                              'canedit' => $canedit]);

      return true;
   }

   /**
    * @param $metademands_id
    * @param $canedit
    * @param $canchangeorder
    *
    * @throws \GlpitestSQLError
    */
   private function listTasks($metademands_id, $canedit, $canchangeorder) {
      global $CFG_GLPI;

      $tasks = $this->getTasks($metademands_id);

      if (!$canchangeorder) {
         $metademands = new PluginMetademandsMetademand();
         $metademands->showDuplication($metademands_id);
      }

      echo "<div class='center first-bloc'>";
      echo "<table class='tab_cadre_fixe'>";
      echo "<tr class='tab_bg_1 center'>";
      echo "<td>";

      echo "<a href='#' class='submit btn btn-primary' data-bs-toggle='modal' data-bs-target='#tags' title='" . __('Show list of available tags') . "' >";
      echo __('Show list of available tags');
      echo "</a>";
      echo Ajax::createIframeModalWindow('tags',
                                         PLUGIN_METADEMANDS_WEBDIR . "/front/tags.php?metademands_id=" . $metademands_id,
                                         ['title'   => __('Show list of available tags'),
                                          'display' => false]);
      echo "</td>";
      echo "</tr>";
      echo "</table>";
      echo "</div>";

      $rand = mt_rand();

      if (count($tasks)) {
         Session::initNavigateListItems('PluginMetademandsTicketTask', self::getTypeName(1));

         echo "<div class='left first-bloc'>";
         if ($canedit && $canchangeorder) {
            Html::openMassiveActionsForm('mass' . __CLASS__ . $rand);
            $massiveactionparams = ['item' => __CLASS__, 'container' => 'mass' . __CLASS__ . $rand];
            Html::showMassiveActions($massiveactionparams);
         }
         echo "<table class='tab_cadre_fixe'>";
         echo "<tr class='tab_bg_2'>";
         echo "<th class='left b' colspan='11'>" . __('Tasks', 'metademands') . "</th>";
         echo "</tr>";

         echo "<tr class='tab_bg_2'>";
         echo "<th width='10'>";
         if ($canedit && $canchangeorder) {
            echo Html::getCheckAllAsCheckbox('mass' . __CLASS__ . $rand);
         }
         echo "</th>";
         echo "<th class='center b'>" . __('ID') . "</th>";
         echo "<th class='center b'>" . __('Name') . "</th>";
         echo "<th class='center b'>" . __('Type') . "</th>";
         echo "<th class='center b'>" . __('Category') . "</th>";
         echo "<th class='center b'>" . __('Assigned to') . "</th>";
         echo "<th class='center b'>" . __('Level', 'metademands') . "</th>";
         echo "<th class='center b'>" . __('Block to use', 'metademands') . "</th>";
         echo "<th class='center b'>" . __('Use block', 'metademands') . "</th>";
         echo "<th class='center b'>" . __('Format the description of the childs ticket as a table', 'metademands') . "</th>";
         echo "</tr>";
         foreach ($tasks as $value) {
            echo "<tr class='tab_bg_1'>";

            if ($value['type'] == self::TICKET_TYPE || $value['type'] == self::TASK_TYPE) {
               $color_class = '';
            } else {
               $color_class = "class='metademand_metademandtasks'";
            }

            if ($canedit && $canchangeorder) {
               echo "<td $color_class width='10'>";
               echo "<input type='checkbox' name='item[" . $this->getType() . "][" . $value['tasks_id'] . "]' value='1' data-glpicore-ma-tags='common'>";
               echo "</td>";
            } else {
               echo "<td $color_class width='10'></td>";
            }

            // ID
            $color_class = '';
            if ($value['type'] == self::TICKET_TYPE || $value['type'] == self::TASK_TYPE) {
               echo "<td>";
               $width = 0;
               if ($value['level'] > 1) {
                  $width = (10 * $value['level']);
                  echo "<div style='margin-left:" . $width . "px' class='metademands_tree'></div>";
               }
               $name = "#metademandTicketTask" . $value['tickettasks_id'];
               echo "<a href='#' data-bs-toggle='modal' data-bs-target='$name' title='" . PluginMetademandsTicketTask::getTypeName() . "' >";
               echo $value['tickettasks_id'];
               echo "</a>";
               echo Ajax::createIframeModalWindow('metademandTicketTask' . $value['tickettasks_id'],
                                                  Toolbox::getItemTypeFormURL('PluginMetademandsTicketTask') . "?id=" . $value['tickettasks_id'],
                                                  ['title'         => PluginMetademandsTicketTask::getTypeName(),
                                                   'display'       => false,
                                                   'reloadonclose' => true]);

               //               Ajax::createIframeModalWindow('metademandTicketTask' . $value['tickettasks_id'], Toolbox::getItemTypeFormURL('PluginMetademandsTicketTask') . "?id=" . $value['tickettasks_id'],
               //                                             ['title' => PluginMetademandsTicketTask::getTypeName(), 'reloadonclose' => true]);
               //               echo "<a href='#' onClick=\"" . Html::jsGetElementbyID('metademandTicketTask' . $value['tickettasks_id']) . ".dialog('open');\">" . $value['tickettasks_id'] . "</a>";
               echo "</td>";

            } else {
               $color_class = "class='metademand_metademandtasks'";
               echo "<td $color_class><a href='" . Toolbox::getItemTypeFormURL('PluginMetademandsMetademand') .
                    "?id=" . $value['link_metademands_id'] . "'>" . $value['link_metademands_id'] . "</a></td>";
            }

            // Name
            if ($value['type'] == self::TICKET_TYPE || $value['type'] == self::TASK_TYPE) {
               echo "<td>";
               $width = 0;
               $name  = "#metademandTicketTask" . $value['tickettasks_id'];
               echo "<a href='#' data-bs-toggle='modal' data-bs-target='$name' title='" . PluginMetademandsTicketTask::getTypeName() . "' >";
               echo $value['tickettasks_name'];
               echo "</a>";
               echo Ajax::createIframeModalWindow('metademandTicketTask' . $value['tickettasks_id'],
                                                  Toolbox::getItemTypeFormURL('PluginMetademandsTicketTask') . "?id=" . $value['tickettasks_id'],
                                                  ['title'         => PluginMetademandsTicketTask::getTypeName(),
                                                   'display'       => false,
                                                   'reloadonclose' => true]);

               //               Ajax::createIframeModalWindow('metademandTicketTask' . $value['tickettasks_id'], Toolbox::getItemTypeFormURL('PluginMetademandsTicketTask') . "?id=" . $value['tickettasks_id'],
               //                                             ['title' => PluginMetademandsTicketTask::getTypeName(), 'reloadonclose' => true]);
               //               echo "<a href='#' onClick=\"" . Html::jsGetElementbyID('metademandTicketTask' . $value['tickettasks_id']) . ".dialog('open');\">" . $value['tickettasks_name'] . "</a>";
               echo "</td>";

            } else {
               $color_class = "class='metademand_metademandtasks'";
               echo "<td $color_class><a href='" . Toolbox::getItemTypeFormURL('PluginMetademandsMetademand') .
                    "?id=" . $value['link_metademands_id'] . "'>" . Dropdown::getDropdownName('glpi_plugin_metademands_metademands', $value['link_metademands_id']) . "</a></td>";
            }

            // Type
            echo "<td $color_class>" . self::getTaskTypeName($value['type']) . "</td>";

            $cat = "";
            if ($value['type'] == self::TICKET_TYPE
                && isset($value['itilcategories_id'])
                && $value['itilcategories_id'] > 0) {
               $cat = Dropdown::getDropdownName("glpi_itilcategories", $value['itilcategories_id']);
            }
            if ($value['type'] == self::TASK_TYPE) {
               $cat = "---";
            }
            echo "<td $color_class>";
            echo $cat;
            echo "</td>";

            //assign
            $techdata = "";
            if ($value['type'] == self::TICKET_TYPE || $value['type'] == self::TASK_TYPE) {
               if (isset($value['users_id_assign'])
                   && $value['users_id_assign'] > 0) {
                  $techdata .= getUserName($value['users_id_assign']);
                  $techdata .= "<br>";
               }
               if (isset($value['groups_id_assign'])
                   && $value['groups_id_assign'] > 0) {
                  $techdata .= Dropdown::getDropdownName("glpi_groups", $value['groups_id_assign']);
               }
            }
            echo "<td $color_class>";
            echo $techdata;
            echo "</td>";

            // Order
            if ($value['type'] == self::TICKET_TYPE) {
               if ($value['level'] > 1) {
                  echo "<td " . $color_class . ">";
                  echo "<div class='center'>" . $value['level'] . "</div>";
                  echo "</td>";
               } else {
                  echo "<td " . $color_class . ">";
                  echo "<div class='center'>" . __('Root', 'metademands') . "</div>";
                  echo "</td>";
               }
            } else if ($value['type'] == self::TASK_TYPE) {
               echo "<td " . $color_class . ">
                        <div class='center'>---</div>
                     </td>";
            } else {
               echo "<td " . $color_class . ">
                        <div class='center'>" . __('Root', 'metademands') . "</div>
                     </td>";
            }

            $blocks = json_decode($value['block_use']);
            if (!empty($blocks)) {
               $blocktext = "";
               $i         = 0;
               foreach ($blocks as $block) {
                  if ($i != 0) {
                     $blocktext .= " <br>";
                  }
                  $blocktext .= sprintf(__("Block %s", 'metademands'), $block);
                  $i++;
               }
            } else {
               $blocktext = __('All');
            }
            if ($value['type'] == self::TASK_TYPE) {
               $blocktext = "---";
            }
            echo "<td $color_class>";
            echo $blocktext;
            echo "</td>";
            echo "<td $color_class>";
            if ($value['type'] == self::TASK_TYPE) {
               echo "---";
            } else {
               echo Dropdown::getYesNo($value['useBlock']);
            }
            echo "</td>";
            echo "<td $color_class>";
            if ($value['type'] == self::TASK_TYPE) {
               echo "---";
            } else {
               echo Dropdown::getYesNo($value['formatastable']);
            }
            echo "</td>";
            echo "</tr>";

         }
         echo "</table>";

         if ($canedit && count($tasks) && $canchangeorder) {
            $massiveactionparams['ontop'] = false;
            Html::showMassiveActions($massiveactionparams);
            Html::closeForm();
         }
         echo "</div>";

      } else {
         echo "<div class='center first-bloc'>";
         echo "<table class='tab_cadre_fixe'>";
         echo "<tr class='tab_bg_1'><td class='center'>" . __('No item to display') . "</td></tr>";
         echo "</table></div>";
      }
   }

   /**
    * @param       $metademands_id
    * @param array $options
    *
    * @return array
    * @throws \GlpitestSQLError
    */
   function getTasks($metademands_id, $options = []) {
      global $DB;

      $params['condition'] = [];
      $params['join']      = '';
      foreach ($options as $key => $val) {
         $params[$key] = $val;
      }

      $tasks = [];

      $query = "SELECT `glpi_plugin_metademands_tickettasks`.`id` as tickettasks_id,
                       `glpi_plugin_metademands_tasks`.`name` as tickettasks_name,
                       `glpi_plugin_metademands_metademandtasks`.`id` as metademandtask_id,
                       `glpi_plugin_metademands_metademandtasks`.`plugin_metademands_metademands_id` as link_metademands_id,
                       `glpi_plugin_metademands_tasks`.`type`,
                       `glpi_plugin_metademands_tasks`.`plugin_metademands_tasks_id` as parent_task,
                       `glpi_plugin_metademands_tasks`.`plugin_metademands_metademands_id` as parent_metademand,
                       `glpi_plugin_metademands_tasks`.`id` as tasks_id,
                       `glpi_plugin_metademands_tasks`.`completename` as tasks_completename, 
                       `glpi_plugin_metademands_tasks`.`level`,
                       `glpi_plugin_metademands_tasks`.`block_use`,
                       `glpi_plugin_metademands_tasks`.`formatastable`,
                       `glpi_plugin_metademands_tasks`.`useBlock`,
                       `glpi_plugin_metademands_tickettasks`.`itilcategories_id`,
                       `glpi_plugin_metademands_tickettasks`.`content`,
                       `glpi_plugin_metademands_tickettasks`.`status`,
                       `glpi_plugin_metademands_tickettasks`.`actiontime`,
                       `glpi_plugin_metademands_tickettasks`.`requesttypes_id`,
                       `glpi_plugin_metademands_tickettasks`.`groups_id_assign`,
                       `glpi_plugin_metademands_tickettasks`.`users_id_assign`,
                       `glpi_plugin_metademands_tickettasks`.`groups_id_observer`,
                       `glpi_plugin_metademands_tickettasks`.`users_id_observer`,
                       `glpi_plugin_metademands_tickettasks`.`groups_id_requester`,
                       `glpi_plugin_metademands_tickettasks`.`users_id_requester`,
                       `glpi_plugin_metademands_tasks`.`entities_id`
                  FROM `glpi_plugin_metademands_tasks`
                  LEFT JOIN `glpi_plugin_metademands_tickettasks`
                    ON (`glpi_plugin_metademands_tickettasks`.`plugin_metademands_tasks_id` = `glpi_plugin_metademands_tasks`.`id`)
                  LEFT JOIN `glpi_plugin_metademands_metademandtasks`
                    ON (`glpi_plugin_metademands_metademandtasks`.`plugin_metademands_tasks_id` = `glpi_plugin_metademands_tasks`.`id`) " .
               $params['join'] . " 
                  WHERE `glpi_plugin_metademands_tasks`.`plugin_metademands_metademands_id` = " . $metademands_id . "";

      if (count($params['condition']) > 0) {
         foreach ($params['condition'] as $cond => $value) {
            $query .= " AND " . $cond . " = " . $value;
         }
      }

      $query  .= " ORDER BY `glpi_plugin_metademands_tasks`.`id`, `glpi_plugin_metademands_tasks`.`completename`";
      $result = $DB->query($query);

      if ($DB->numrows($result)) {
         while ($data = $DB->fetchAssoc($result)) {
            $tasks[$data['tasks_id']] = $data;
         }
      }

      return $tasks;
   }


   /**
    * Get ticket types
    *
    * @return array of types
    **/
   static function getTaskTypes($metademands_id = 0) {

      $metademands = new PluginMetademandsMetademand();

      if (Session::haveRight('ticket', CREATE)) {
         if ($metademands_id == 0) {
            $options[self::TICKET_TYPE] = __('Ticket');
         } else if ($metademands->getFromDB($metademands_id)
                    && isset($metademands->fields['force_create_tasks'])
                    && $metademands->fields['force_create_tasks'] == 0) {
            $options[self::TICKET_TYPE] = __('Ticket');
         }
      }
      if ($metademands_id > 0 &&
          $metademands->getFromDB($metademands_id)
          && isset($metademands->fields['force_create_tasks'])
          && $metademands->fields['force_create_tasks'] == 1) {
         $options[self::TASK_TYPE] = __('Task');
      }
      if ($metademands->fields['object_to_create'] == 'Ticket' || $metademands_id == 0) {
         $options[self::METADEMAND_TYPE] = PluginMetademandsMetademand::getTypeName(1);
      }
      return $options;
   }

   /**
    * Get ticket type Name
    *
    * @param $value type ID
    **
    *
    * @return string
    * @return string
    */
   static function getTaskTypeName($value) {

      switch ($value) {
         case self::TICKET_TYPE     :
            return __('Ticket');
         case self::TASK_TYPE     :
            return __('Task');
         case self::METADEMAND_TYPE :
            return PluginMetademandsMetademand::getTypeName(1);
      }
   }

   /**
    * Get a child for a level given
    *
    * @param integer $tasks_id
    * @param integer $search_level
    *
    * @return integer child
    * @throws \GlpitestSQLError
    */
   function getChildrenForLevel($tasks_id, $search_level) {
      $ChildrenForLevel = [];

      // If no child found get next task
      $task = new PluginMetademandsTask();
      $task->getFromDB($tasks_id);
      $tasks_data = $task->getTasks($task->fields['plugin_metademands_metademands_id']);

      foreach ($tasks_data as $key => $values) {
         if ($values['level'] == $search_level
             && $values['parent_task'] == $tasks_id) {
            $ChildrenForLevel[] = $values['tasks_id'];
         }
      }
      if (count($ChildrenForLevel)) {
         return $ChildrenForLevel;
      }

      return false;
   }


   /**
    * @param $input
    *
    * @return array|bool
    */
   function prepareInputForAdd($input) {

      if (isset($input['link_metademands_id']) && empty($input['link_metademands_id'])) {
         return [];
      }

      // cannot update a used metademand category
      if (isset($input['itilcategories_id']) && !empty($input['itilcategories_id'])) {

         $dbu  = new DbUtils();
         $meta = new PluginMetademandsMetademand();
         $meta->getFromDB($input["plugin_metademands_metademands_id"]);
         $metas = $dbu->getAllDataFromTable('glpi_plugin_metademands_metademands',
                                            ["`itilcategories_id`" => $input["itilcategories_id"],
                                             "`type`"              => $meta->getField("type")]);

         if (!empty($metas)) {
            $input = [];
            Session::addMessageAfterRedirect(__('The category is related to a demand. Thank you to select another', 'metademands'), false, ERROR);
            return false;
         }
      }

      $input = parent::prepareInputForAdd($input);

      return $input;
   }

//   /**
//    * @param $params
//    * @param $protocol
//    *
//    * @return array
//    */
//   static function methodListTasktypes($params, $protocol) {
//
//      if (isset ($params['help'])) {
//         return ['help' => 'bool,optional'];
//      }
//
//      if (!Session::getLoginUserID()) {
//         return PluginWebservicesMethodCommon::Error($protocol, WEBSERVICES_ERROR_NOTAUTHENTICATED);
//      }
//
//      $tasks  = new self();
//      $result = $tasks->getTaskTypes();
//
//      if (!Session::haveRight("ticket", CREATE)) {
//         unset($result[0]);// unset ticket option
//      }
//
//      $response = [];
//      foreach ($result as $key => $taskType) {
//         $response[] = ['id' => $key + 1, 'value' => $taskType];
//      }
//
//      return $response;
//   }

   /**
    * @param $metademands_id
    * @param $selected_value
    *
    * @throws \GlpitestSQLError
    * @throws \GlpitestSQLError
    */
   static function showAllTasksDropdown($metademands_id, $selected_value, $display = true) {

      $tasks      = new self();
      $tasks_data = $tasks->getTasks($metademands_id);
      $data       = [Dropdown::EMPTY_VALUE];
      foreach ($tasks_data as $id => $value) {
         if ($value['type'] == PluginMetademandsTask::METADEMAND_TYPE) {
            $value['name'] = Dropdown::getDropdownName('glpi_plugin_metademands_metademands', $value['link_metademands_id']);
            $data[$id]     = $value['name'];
         } else {
            $value['name'] = $value['tickettasks_name'];
            $data[$id]     = $value['name'];
         }
      }

      return Dropdown::showFromArray('plugin_metademands_tasks_id[]', $data, ['value'   => $selected_value,
                                                                              'tree'    => true,
                                                                              'display' => $display]);
   }

   /**
    * @return array
    */
   /**
    * @return array
    */
   function rawSearchOptions() {

      $tab = [];

      $tab[] = [
         'id'   => 'common',
         'name' => self::getTypeName(1)
      ];

      $tab[] = [
         'id'            => '1',
         'table'         => $this->getTable(),
         'field'         => 'name',
         'name'          => __('Name'),
         'datatype'      => 'itemlink',
         'itemlink_type' => $this->getType()
      ];

      $tab[] = [
         'id'       => '30',
         'table'    => $this->getTable(),
         'field'    => 'id',
         'name'     => __('ID'),
         'datatype' => 'number'
      ];

      return $tab;
   }

   /**
    * @return array
    */
   /**
    * @return array
    */
   function getForbiddenStandardMassiveAction() {

      $forbidden = parent::getForbiddenStandardMassiveAction();

      if (!self::canCreate()) {
         $forbidden[] = 'delete';
         $forbidden[] = 'purge';
         $forbidden[] = 'restore';
      }
      $forbidden[] = 'add_transfer_list';
      $forbidden[] = 'move_under';
      $forbidden[] = 'update';
      $forbidden[] = 'merge';
      $forbidden[] = 'clone';
      $forbidden[] = 'amend_comment';

      return $forbidden;
   }

   function getSpecificMassiveActions($checkitem = null) {

      $isadmin = static::canUpdate();
      $actions = parent::getSpecificMassiveActions($checkitem);

      if ($isadmin) {
         $actions['PluginMetademandsTask' . MassiveAction::CLASS_ACTION_SEPARATOR . 'updateBlock'] = _x('button', 'Update block to use', 'metademands');
      }

      return $actions;
   }

   /**
    * @param MassiveAction $ma
    *
    * @return bool|false
    */
   /**
    * @param MassiveAction $ma
    *
    * @return bool|false
    */
   static function showMassiveActionsSubForm(MassiveAction $ma) {

      switch ($ma->getAction()) {

         case "updateBlock" :
            $blocks = [];
            for ($i = 1; $i <= 20; $i++) {
               if (!isset($blocks[$i])) {
                  $blocks[$i] = sprintf(__("Block %s", 'metademands'), $i);
               }
            }
            ksort($blocks);

            Dropdown::showFromArray('block_use', $blocks,
                                    [
                                       'width'    => '100%',
                                       'multiple' => true,
                                    ]);
            echo Html::submit(_x('button', 'Post'), ['name'  => 'massiveaction',
                                                     'class' => 'btn btn-primary']);
            return true;
            break;

      }
      return parent::showMassiveActionsSubForm($ma);
   }

   /**
    * @param MassiveAction $ma
    * @param CommonDBTM    $item
    * @param array         $ids
    *
    * @return nothing|void
    * @since version 0.85
    *
    * @see CommonDBTM::processMassiveActionsForOneItemtype()
    *
    */
   static function processMassiveActionsForOneItemtype(MassiveAction $ma, CommonDBTM $item,
                                                       array         $ids) {

      $task = new PluginMetademandsTask();
      $dbu  = new DbUtils();

      switch ($ma->getAction()) {
         case "updateBlock":
            $input = $ma->getInput();
            foreach ($ma->items as $itemtype => $myitem) {
               foreach ($myitem as $key => $value) {

                  $myvalue['block_use'] = json_encode($input['block_use']);
                  $myvalue['id']        = $key;
                  if ($task->update($myvalue)) {
                     $ma->itemDone($item->getType(), $key, MassiveAction::ACTION_OK);
                  } else {
                     $ma->itemDone($item->getType(), $key, MassiveAction::ACTION_KO);
                  }

               }
            }
            break;
      }
   }

   function cleanDBonPurge() {

      $field = new self();
      $field->deleteByCriteria(['plugin_metademands_tasks_id' => $this->fields['id']]);

      $temp = new PluginMetademandsField();
      $temp->deleteByCriteria(['plugin_metademands_tasks_id' => $this->fields['id']]);

      $temp = new PluginMetademandsTicket_Task();
      $temp->deleteByCriteria(['plugin_metademands_tasks_id' => $this->fields['id']]);

      $temp = new PluginMetademandsTicketTask();
      $temp->deleteByCriteria(['plugin_metademands_tasks_id' => $this->fields['id']]);

      $temp = new PluginMetademandsMetademandTask();
      $temp->deleteByCriteria(['plugin_metademands_tasks_id' => $this->fields['id']]);
   }

}
