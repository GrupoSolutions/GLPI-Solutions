<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 resources plugin for GLPI
 Copyright (C) 2009-2022 by the resources Development Team.

 https://github.com/InfotelGLPI/resources
 -------------------------------------------------------------------------

 LICENSE

 This file is part of resources.

 resources is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 resources is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with resources. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/**
 * Class PluginResourcesResourceInjection
 */
class PluginResourcesResourceInjection extends PluginResourcesResource
   implements PluginDatainjectionInjectionInterface {

   /**
    * Return the table used to store this object
    *
    * @param string $classname Force class (to avoid late_binding on inheritance)
    *
    * @return string
    **/
   static function getTable($classname = null) {

      $parenttype = get_parent_class();
      return $parenttype::getTable();

   }

   /**
    * @return bool
    */
   function isPrimaryType() {
      return true;
   }

   /**
    * @return array
    */
   function connectedTo() {
      return [];
   }

   /**
    * @param string $primary_type
    *
    * @return array|\the
    */
   function getOptions($primary_type = '') {

      $tab = Search::getOptions(get_parent_class($this));

      //Specific to location
      $tab[12]['linkfield'] = 'locations_id';

      //$blacklist = PluginDatainjectionCommonInjectionLib::getBlacklistedOptions();
      //Remove some options because some fields cannot be imported
      $notimportable = [8, 16, 18, 19, 31, 32, 33, 34, 80];
      $options['ignore_fields'] = $notimportable;
      $options['displaytype'] = ["dropdown"       => [3, 11, 12, 17, 21, 22, 23, 24, 25, 26, 37, 40, 41, 42, 43],
                                 "user"           => [4, 10, 14, 27],
                                 "multiline_text" => [7],
                                 "date"           => [5, 6, 9],
                                 "bool"           => [13, 15],
                                 "decimal"        => [20]];

      $tab = PluginDatainjectionCommonInjectionLib::addToSearchOptions($tab, $options, $this);

      return $tab;
   }

   /**
    * Standard method to delete an object into glpi
    * WILL BE INTEGRATED INTO THE CORE IN 0.80
    * @param fields fields to add into glpi
    * @param options options used during creation
    */
   function deleteObject($values = [], $options = []) {
      $lib = new PluginDatainjectionCommonInjectionLib($this, $values, $options);
      $lib->deleteObject();
      return $lib->getInjectionResults();
   }

   /**
    * Standard method to add an object into glpi
    * WILL BE INTEGRATED INTO THE CORE IN 0.80
    * @param values fields to add into glpi
    * @param options options used during creation
    * @return an array of IDs of newly created objects : for example array(Computer=>1, Networkport=>10)
    */
   function addOrUpdateObject($values = [], $options = []) {
      $lib = new PluginDatainjectionCommonInjectionLib($this, $values, $options);
      $lib->processAddOrUpdate();
      return $lib->getInjectionResults();
   }

}

