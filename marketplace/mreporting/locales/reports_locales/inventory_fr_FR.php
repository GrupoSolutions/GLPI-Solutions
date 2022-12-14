<?php

/**
 * -------------------------------------------------------------------------
 * Mreporting plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Mreporting.
 *
 * Mreporting is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Mreporting is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Mreporting. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2003-2022 by Mreporting plugin team.
 * @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/pluginsGLPI/mreporting
 * -------------------------------------------------------------------------
 */

global $LANG;

$LANG['plugin_mreporting']['Inventory'] = [

   'title' => "Inventaire",

   'reportHbarComputersByOS' => [
      'title'    => "Ordinateurs par OS",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportPieComputersByOS' => [
      'title'    => "Ordinateurs par OS",
      'desc'     => "Camenbert",
      'category' => "OS",
   ],

   'reportHbarComputersByFabricant' => [
      'title'    => "Ordinateurs par fabricant",
      'desc'     => "Barres",
      'category' => "Fabricant",
   ],

   'reportPieComputersByFabricant' => [
      'title'    => "Ordinateurs par fabricant",
      'desc'     => "Camembert",
      'category' => "Fabricant",
   ],

   'reportHbarComputersByType' => [
      'title'    => "Ordinateurs par type",
      'desc'     => "Barres",
      'category' => "Type",
   ],

   'reportPieComputersByType' => [
      'title'    => "Ordinateurs par type",
      'desc'     => "Camembert",
      'category' => "Type",
   ],

   'reportHbarComputersByStatus' => [
      'title'    => "Ordinateurs par statut",
      'desc'     => "Barres",
      'category' => "Statut",
   ],

   'reportHbarPrintersByStatus' => [
      'title'    => "Imprimantes par statut",
      'desc'     => "Barres",
      'category' => "Statut",
   ],

   'reportHbarWindows' => [
      'title'    => "R??partition des versions de Windows dans le parc",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportHbarLinux' => [
      'title'    => "D??tail des versions de Linux dans le parc",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportHbarLinuxDistro' => [
      'title'    => "R??partition des distributions de Linux dans le parc",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportHbarMac' => [
      'title'    => "D??tail des versions de Mac OS X dans le parc",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportHbarMacFamily' => [
      'title'    => "R??partition des versions de Mac OS X dans le parc",
      'desc'     => "Barres",
      'category' => "OS",
   ],

   'reportHbarComputersByAge' => [
      'title'    => "Ordinateurs par &acirc;ge",
      'desc'     => "Barres",
      'category' => "Inventaire",
   ],

   'reportPieComputersByAge' => [
      'title'    => "Ordinateurs par &acirc;ge",
      'desc'     => "Camembert",
      'category' => "Inventaire",
   ],

   'reportHbarFusionInventory' => [
      'title'    => "R??partition version agent FusionInventory",
      'desc'     => "Barres",
      'category' => "Agent",
   ],

   'reportPieFusionInventory' => [
      'title'    => "R??partition version agent FusionInventory",
      'desc'     => "Camembert",
      'category' => "Agent",
   ],

   'reportHbarMonitors' => [
      'title'    => "R??partition du nombre d'??crans par ordinateur",
      'desc'     => "Barres",
      'category' => "Inventaire",
   ],

    'reportHbarComputersByEntity' => [
      'title'    => "R??partition du nombre d'ordinateurs par entit??s",
      'desc'     => "Barres",
      'category' => "Entit??",
    ],

];
