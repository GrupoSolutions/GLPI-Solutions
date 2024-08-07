<?php
/**
 * ---------------------------------------------------------------------
 * Formcreator is a plugin which allows creation of custom forms of
 * easy access.
 * ---------------------------------------------------------------------
 * LICENSE
 *
 * This file is part of Formcreator.
 *
 * Formcreator is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Formcreator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 * ---------------------------------------------------------------------
 * @copyright Copyright © 2011 - 2021 Teclib'
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @link      https://github.com/pluginsGLPI/formcreator/
 * @link      https://pluginsglpi.github.io/formcreator/
 * @link      http://plugins.glpi-project.org/#/plugin/formcreator
 * ---------------------------------------------------------------------
 */

require_once ('../../../inc/includes.php');

// Check if plugin is activated...
if (!(new Plugin())->isActivated('formcreator')) {
   Html::displayNotFoundError();
}

Session::checkLoginUser();

if (!PluginFormcreatorFormAnswer::canView()) {
   Html::displayRightError();
}

if (Session::getCurrentInterface() == 'helpdesk') {
   Html::helpHeader(__('Service catalog', 'formcreator'));
} else {
   Html::header(
      __('Form Creator', 'formcreator'),
      '',
      'admin',
      PluginFormcreatorForm::class
   );
}
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if(isset($_SESSION['chamadoCriado']) && $_SESSION['chamadoCriado'] > 0) {
   $numeroChamado = $_SESSION['chamadoCriado'];
   // Gerar o código JavaScript para exibir o SweetAlert
?>
   <script>
         Swal.fire({
         title: "Chamado Criado!",
         html: "<p>Número do Chamado: #" + <?php echo $numeroChamado;?> + "<br><a href='/front/ticket.form.php?id=<?php echo $numeroChamado;?>'>Ir para o Chamado</a></p>",
         icon: "success"
         });
   </script>
         <?php
   // Limpar o valor da sessão após usar
   unset($_SESSION['chamadoCriado']);
}
Search::show(PluginFormcreatorCommon::getFormanswerItemtype());

if (Session::getCurrentInterface() == 'helpdesk') {
   Html::helpFooter();
} else {
   Html::footer();
}