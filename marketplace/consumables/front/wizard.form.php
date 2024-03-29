<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 consumables plugin for GLPI
 Copyright (C) 2009-2022 by the consumables Development Team.

 https://github.com/InfotelGLPI/consumables
 -------------------------------------------------------------------------

 LICENSE

 This file is part of consumables.

 consumables is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 consumables is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with consumables. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include('../../../inc/includes.php');
Session::checkLoginUser();

$plugin = new Plugin();

if ($_SESSION['glpiactiveprofile']['interface'] == 'central') {
   Html::header(PluginConsumablesWizard::getTypeName(2), '', "management", "pluginconsumablesmenu");
} else {
   if ($plugin->isActivated('servicecatalog')) {
      PluginServicecatalogMain::showDefaultHeaderHelpdesk(PluginConsumablesWizard::getTypeName(2));
   } else {
      Html::helpHeader(PluginConsumablesWizard::getTypeName(2));
   }
}

if (!empty($_GET['action'])) {
   switch ($_GET['action']) {
      case 'consumablerequest':
         $consumablerequest = new PluginConsumablesRequest();
         $consumablerequest->showConsumableRequest();
         break;
      case 'consumablevalidation':
         echo "<div class='alert alert-secondary'>";
         echo "<i class='thumbnail ti ti-shopping-cart-plus fa-2x'></i>";
         echo "&nbsp;";
         echo __("Consumable validation", "consumables");
         echo "</div>";
         require('../../../assets/php/MovimentacaoPedido.php');
         break;
   }
}

if (Session::getCurrentInterface() != 'central'
    && $plugin->isActivated('servicecatalog')) {

   PluginServicecatalogMain::showNavBarFooter('consumables');
}

if ($_SESSION['glpiactiveprofile']['interface'] == 'central') {
   Html::footer();
} else {
   Html::helpFooter();
}
