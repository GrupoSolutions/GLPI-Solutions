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
 * Class PluginMetademandsServicecatalog
 */
class PluginMetademandsServicecatalog extends CommonGLPI {

   static $rightname = 'plugin_metademands';

   var $dohistory = false;

   /**
    * @return bool
    * @throws \GlpitestSQLError
    */
   static function canUse() {

      $config = new PluginMetademandsConfig();
      $config->getFromDB(1);
      if ($config->getField('display_buttonlist_servicecatalog') == 0) {
         return false;
      }
      $metademands = PluginMetademandsWizard::selectMetademands();
      return (Session::haveRight(self::$rightname, READ) && (count($metademands) > 0));
   }

   /**
    * @return string
    */
   static function getMenuTitle() {

      $config = new PluginMetademandsConfig();
      $config->getFromDB(1);
      if (!empty($config->getField('title_servicecatalog'))) {
         return $config->getField('title_servicecatalog');
      }
      return __('Create a', 'servicecatalog')  ." ". __('advanced request', 'metademands');
   }

   /**
    * @return string
    */
   static function getMenuLink() {
      global $CFG_GLPI;

      return PLUGIN_METADEMANDS_WEBDIR . "/front/wizard.form.php?step=".PluginMetademandsMetademand::STEP_INIT;
   }

   /**
    * @return string
    */
   static function getNavBarLink() {
      global $CFG_GLPI;

      return PLUGIN_METADEMANDS_DIR_NOFULL . "/front/wizard.form.php?step=".PluginMetademandsMetademand::STEP_INIT;
   }

   /**
    * @return string
    */
   static function getMenuLogo() {

      $config = new PluginMetademandsConfig();
      $config->getFromDB(1);
      if (!empty($config->getField('fa_servicecatalog'))) {
         return "fas ".$config->getField('fa_servicecatalog');
      }
      return PluginMetademandsMetademand::getIcon();
   }


   /**
    * @return string
    * @throws \GlpitestSQLError
    */
   static function getMenuComment() {

      $config = new PluginMetademandsConfig();
      $config->getFromDB(1);
      if (!empty($config->getField('comment_servicecatalog'))) {
         return $config->getField('comment_servicecatalog');
      }

      $list        = "";
      $metademands = PluginMetademandsWizard::selectMetademands(" LIMIT 3");

      foreach ($metademands as $id => $name) {
         $list .= $name . '<br>';
      }
      $list .= "(...)";
      return $list;
   }

   /**
    * @return string
    */
   static function getLinkList() {
//      return __('Select the advanced request', 'metademands');
   }

   /**
    * @param $type
    * @param $category_id
    *
    * @return string or bool
    */
   static function getLinkURL($type, $category_id) {
      global $CFG_GLPI;

      $dbu   = new DbUtils();
      $metas = $dbu->getAllDataFromTable('glpi_plugin_metademands_metademands',
                                         ["`is_active`"         => 1,
                                          "`is_deleted`"         => 0,
                                          "`type`"              => $type]);
      $cats       = [];

      foreach ($metas as $meta) {
         $categories = [];
         if (isset($meta['itilcategories_id'])) {
            if (is_array(json_decode($meta['itilcategories_id'], true))) {
               $categories = $meta['itilcategories_id'];
            } else {
               $array      = [$meta['itilcategories_id']];
               $categories = json_encode($array);
            }
         }
         $cats[$meta['id']] = json_decode($categories);
      }

      $meta_concerned = 0;
      foreach ($cats as $meta => $meta_cats) {
         if (in_array($category_id, $meta_cats)) {
            $meta_concerned = $meta;
         }
      }

      if (!empty($meta_concerned)) {
//         $meta = reset($metas);
         //Redirect if not linked to a resource contract type
         if (!$dbu->countElementsInTable("glpi_plugin_metademands_metademands_resources",
                                         ["plugin_metademands_metademands_id" => $meta_concerned])) {

            return PLUGIN_METADEMANDS_WEBDIR . "/front/wizard.form.php?metademands_id=" . $meta_concerned . "&tickets_id=0&step=".PluginMetademandsMetademand::STEP_SHOW;

         }
      }
      return false;
   }

   static function getList() {
      global $CFG_GLPI;

//      $metademands = PluginMetademandsWizard::selectMetademands();
//      if (Plugin::isPluginActive("servicecatalog")
//          && ($plugin->getInfo('servicecatalog')["version"] >= "1.6.0")) {
//
//         echo "<script>$(document).ready(function() {
//                 $('#click').click(function() {
//                      window.location.href = '" . $CFG_GLPI['root_doc'] . "/plugins/servicecatalog/front/main.form.php';
//                 });
//            });</script>";
//
//         foreach ($metademands as $id => $name) {
//
//            $meta = new PluginMetademandsMetademand();
//            if ($meta->getFromDB($id)) {
//               echo '<div class="menusc-normal visitedchildbg menusc-link-normal sc-widget" >';
//               echo "<a class='bt-buttons' href='" . $CFG_GLPI['root_doc'] . "/plugins/metademands/front/wizard.form.php?metademands_id=" . $id . "&step=".PluginMetademandsMetademand::STEP_SHOW."'>";
//               $fasize = "fa-6x";
//               echo "<div class='center'>";
//               $icon = "fa-share-alt";
//               if (!empty($meta->fields['icon'])) {
//                  $icon = $meta->fields['icon'];
//               }
//               echo "<i class='bt-interface fa-menu-sc fas $icon $fasize'></i>";//$style
//               echo "</div>";
//
//               echo "</a><br>";
//               echo "<a class='bt-buttons center' href='" . $CFG_GLPI['root_doc'] . "/plugins/metademands/front/wizard.form.php?metademands_id=" . $id . "&step=".PluginMetademandsMetademand::STEP_SHOW."'>";
//               echo "<p style=\"margin-top:0px\">";
//               if (empty($name = PluginMetademandsMetademand::displayField($id,'name'))) {
//                  $name = $meta->getName();
//               }
//               echo $name;
//               echo "<br>";
//
//               echo "<em><span style=\"font-weight: normal;font-size: 11px;padding-left:5px\">";
//               if (!empty($meta->fields['comment'])) {
//                  if (empty($comment = PluginMetademandsMetademand::displayField($id,'comment'))) {
//                     $comment = $meta->fields['comment'];
//                  }
//                  echo $comment;
//               }
//               echo "</span></em>";
//
//               echo "</p></a></div>";
//            }
//         }
//      } else {
//         echo '<li>';
//         echo "<a class='bt-back' title='" . __('Back') . "' href='" . $CFG_GLPI['root_doc'] . "/plugins/servicecatalog/front/main.form.php'></a>";
//         echo '</li>';
//
//         foreach ($metademands as $id => $name) {
//
//            $meta = new PluginMetademandsMetademand();
//            if ($meta->getFromDB($id)) {
//               echo '<li>';
//               echo "<a class='bt-list-advancedrequest' href='" . $CFG_GLPI['root_doc'] . "/plugins/metademands/front/wizard.form.php?metademands_id=" . $id . "&step=".PluginMetademandsMetademand::STEP_SHOW."'>";
//               echo "</a>";
//               echo "<a class='bt-buttons' style='display: block;width: 100%; height: 100%;' href='" . $CFG_GLPI['root_doc'] . "/plugins/metademands/front/wizard.form.php?metademands_id=" . $id . "&step=".PluginMetademandsMetademand::STEP_SHOW."'>";
//               echo "<p>";
//               if (empty($name = PluginMetademandsMetademand::displayField($id,'name'))) {
//                  $name = $meta->getName();
//               }
//               echo Html::resume_text($name, 30);
//               echo "<br><em><span style=\"font-weight: normal;font-size: 11px;padding-left:5px\">";
//               if (empty($comment = PluginMetademandsMetademand::displayField($id,'comment'))) {
//                  $comment = $meta->fields['comment'];
//               }
//               echo $comment;
//               echo "</span></em>";
//               echo "</p></a></li>";
//            }
//         }
//      }
//
//
//      if (count($metademands) == 0) {
//         echo '<div class="bt-feature bt-col-sm-5 bt-col-md-2">';
//         echo '<h5 class="bt-title">';
//         echo '<span class="de-em">' . __('No advanced request found', 'metademands') . '</span></h5></a>';
//         echo '</div>';
//         echo '</div>';
//      }
   }
}
