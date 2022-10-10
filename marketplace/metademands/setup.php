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

define('PLUGIN_METADEMANDS_VERSION', '3.2.3');

if (!defined("PLUGIN_METADEMANDS_DIR")) {
   define("PLUGIN_METADEMANDS_DIR", Plugin::getPhpDir("metademands"));
   define("PLUGIN_METADEMANDS_DIR_NOFULL", Plugin::getPhpDir("metademands", false));
   define("PLUGIN_METADEMANDS_WEBDIR", Plugin::getWebDir("metademands"));
}

include_once PLUGIN_METADEMANDS_DIR . "/vendor/autoload.php";

// Init the hooks of the plugins -Needed
function plugin_init_metademands() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['metademands'] = true;
   $PLUGIN_HOOKS['change_profile']['metademands'] = ['PluginMetademandsProfile', 'initProfile'];
   $PLUGIN_HOOKS['add_javascript']['metademands'] = ['scripts/metademands.js'];
   $PLUGIN_HOOKS["javascript"]['metademands']     = [PLUGIN_METADEMANDS_DIR_NOFULL . "/scripts/metademands.js"];
   $PLUGIN_HOOKS['add_css']['metademands']        = ['css/metademands.css'];

   // add minidashboard
   $PLUGIN_HOOKS['dashboard_cards']['metademands'] = ['PluginMetademandsMetademand', 'getMetademandDashboards'];

   $PLUGIN_HOOKS['use_massive_action']['metademands'] = 1;

   if (Session::getLoginUserID()) {

      if (isset($_SESSION['glpiactiveprofile']['interface'])
          && $_SESSION['glpiactiveprofile']['interface'] == 'central') {
         $PLUGIN_HOOKS['add_javascript']['metademands'][] = "lib/redips/redips-drag-min.js";
         $PLUGIN_HOOKS['add_javascript']['metademands'][] = "scripts/plugin_metademands_drag-field-row.js";
      }

      Plugin::registerClass('PluginMetademandsMetademand', ['addtabon' => 'Ticket']);
      Plugin::registerClass('PluginMetademandsForm', ['addtabon' => ['Ticket', 'Problem', 'Change', 'User']]);
      Plugin::registerClass('PluginMetademandsProfile', ['addtabon' => 'Profile']);
      Plugin::registerClass('PluginMetademandsMetademand_Resource', ['addtabon' => 'PluginResourcesContractType']);
      Plugin::registerClass('PluginMetademandsInterticketfollowup',
                            ['notificationtemplates_types' => true]);
      $PLUGIN_HOOKS['item_show']['metademands']  = ['PluginResourcesResource' =>
                                                       ['PluginMetademandsMetademand_Resource', 'redirectFormForResource']];
      $PLUGIN_HOOKS['item_empty']['metademands'] = ['Ticket' =>
                                                       ['PluginMetademandsTicket', 'emptyTicket']];

      $PLUGIN_HOOKS['pre_item_purge']['metademands'] = ['Profile'                       =>
                                                           ['PluginMetademandsProfile', 'purgeProfiles'],
                                                        'TicketTemplateMandatoryField'  =>
                                                           ['PluginMetademandsTicketField', 'post_delete_mandatoryField'],
                                                        'TicketTemplatePredefinedField' =>
                                                           ['PluginMetademandsTicketField', 'post_delete_predefinedField']];

      $PLUGIN_HOOKS['item_update']['metademands'] = ['Ticket'       =>
                                                        ['PluginMetademandsTicket', 'post_update_ticket'],
                                                     'ITILCategory' =>
                                                        ['PluginMetademandsTicketField', 'update_category_mandatoryFields'],
                                                     'ITILCategory' =>
                                                        ['PluginMetademandsTicketField', 'update_category_predefinedFields']];

      $PLUGIN_HOOKS['pre_item_update']['metademands'] = ['Ticket' =>
                                                            ['PluginMetademandsTicket', 'pre_update_ticket']];

      $PLUGIN_HOOKS['item_add']['metademands'] = ['TicketTemplateMandatoryField'  =>
                                                     ['PluginMetademandsTicketField', 'post_add_mandatoryField'],
                                                  'TicketTemplatePredefinedField' =>
                                                     ['PluginMetademandsTicketField', 'post_add_predefinedField'],
                                                  'ITILCategory'                  =>
                                                     ['PluginMetademandsTicketField', 'update_category_mandatoryFields'],
                                                  'ITILCategory'                  =>
                                                     ['PluginMetademandsTicketField', 'update_category_predefinedFields'],
                                                  'Ticket'                        =>
                                                     ['PluginMetademandsTicket', 'post_add_ticket']];

      $PLUGIN_HOOKS['pre_item_add']['metademands'] = ['Ticket' =>
                                                         ['PluginMetademandsTicket', 'pre_add_ticket']];

      if (Session::haveRight("plugin_metademands", READ)) {
         $PLUGIN_HOOKS['menu_toadd']['metademands'] = ['helpdesk' => 'PluginMetademandsMenu'];
      }

      if (Session::haveRight("plugin_metademands", READ)
          && !Plugin::isPluginActive('servicecatalog')) {
         $PLUGIN_HOOKS['helpdesk_menu_entry']['metademands'] = PLUGIN_METADEMANDS_DIR_NOFULL . '/front/wizard.form.php';
         $PLUGIN_HOOKS['helpdesk_menu_entry_icon']['metademands'] = PluginMetademandsMetademand::getIcon();
      }

      if (Session::haveRight("config", UPDATE)) {
         $PLUGIN_HOOKS['config_page']['metademands'] = 'front/config.form.php';
      }

      // Template
      $PLUGIN_HOOKS['tickettemplate']['metademands'] = ['PluginMetademandsTicket', 'getAllowedFields'];

      // Rule
      $PLUGIN_HOOKS['use_rules']['metademands'] = ['RuleTicket'];

      // Notifications
      $PLUGIN_HOOKS['item_get_datas']['metademands'] = ['NotificationTargetTicket' =>
                                                           ['PluginMetademandsTicket', 'addNotificationDatas']];

      if (Plugin::isPluginActive('servicecatalog')) {
         $PLUGIN_HOOKS['servicecatalog']['metademands'] = ['PluginMetademandsServicecatalog'];
      }
   }

   // Import webservice
//   $PLUGIN_HOOKS['webservices']['metademands']                   = 'plugin_metademands_registerMethods';
   $PLUGIN_HOOKS['timeline_actions']['metademands']              = ['PluginMetademandsMetademandValidation',
                                                                    'showActionsForm'];

   //Add another actions into answer
   $PLUGIN_HOOKS['timeline_answer_actions']['metademands'] = ['PluginMetademandsInterticketfollowup',
                                                                 'addToTimeline'];
   $PLUGIN_HOOKS['show_in_timeline']['metademands'] = ['PluginMetademandsInterticketfollowup',
                                                          'getlistItems'];
   $PLUGIN_HOOKS['plugin_datainjection_populate']['metademands'] = 'plugin_datainjection_populate_metademands';

}

/**
 * Get the name and the version of the plugin - Needed
 *e
 * @return array
 */
function plugin_version_metademands() {

   return [
      'name'         => _n('Meta-Demand', 'Meta-Demands', 2, 'metademands'),
      'version'      => PLUGIN_METADEMANDS_VERSION,
      'author'       => "<a href='http://blogglpi.infotel.com'>Infotel</a>",
      'license'      => 'GPLv2+',
      'homepage'     => 'https://github.com/InfotelGLPI/metademands',
      'requirements' => [
         'glpi' => [
            'min' => '10.0',
            'max' => '11.0',
            'dev' => false
         ]
      ]];
}

/**
 * @return bool
 */
function plugin_metademands_check_prerequisites() {

   if (!is_readable(__DIR__ . '/vendor/autoload.php') || !is_file(__DIR__ . '/vendor/autoload.php')) {
      echo "Run composer install --no-dev in the plugin directory<br>";
      return false;
   }

   return true;
}
