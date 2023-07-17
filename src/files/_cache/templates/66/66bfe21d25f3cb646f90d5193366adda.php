<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/timeline/new_form.html.twig */
class __TwigTemplate_87159d0beea9157a3bf64bf91efaf5b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["users_id"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID");
        // line 35
        echo "
<div class=\"itil-timeline\">
   <div class=\"timeline-item ITILContent\">
      <div class=\"row\">
         <div class=\"col-auto d-flex flex-column picture-block\">
            ";
        // line 40
        echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        echo "
         </div>
         <div class=\"col-12 col-sm content-block\">
            <div class=\"d-flex\">
               <div class=\"d-none d-md-block\">
                  <strong>";
        // line 45
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null));
        echo "</strong>
               </div>
            </div>
            <span class=\"mt-2 timeline-content left card\">
               <div class=\"card-body\">
                  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 50)) {
            // line 51
            echo "                     <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 52
            ob_start();
            // line 53
            echo "                           <span class=\"ms-1\">
                              ";
            // line 54
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletename", [0 => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null))]);
            // line 56
            echo "
                           </span>
                        ";
            $context["entitybadge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
                        ";
            // line 60
            echo twig_sprintf(__("%1\$s will be added in entity %2\$s"), twig_get_attribute($this->env, $this->source,             // line 61
($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 61),             // line 62
($context["entitybadge"] ?? null));
            // line 63
            echo "
                     </div>
                  ";
        }
        // line 66
        echo "
                  ";
        // line 67
        echo twig_include($this->env, $context, "components/itilobject/timeline/simple_form.html.twig", ["no_form" => true]);
        // line 69
        echo "
               </div>
            </span>
         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/new_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 69,  98 => 67,  95 => 66,  90 => 63,  88 => 62,  87 => 61,  86 => 60,  83 => 59,  78 => 56,  76 => 55,  75 => 54,  72 => 53,  70 => 52,  67 => 51,  65 => 50,  57 => 45,  49 => 40,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set users_id = session('glpiID') %}

<div class=\"itil-timeline\">
   <div class=\"timeline-item ITILContent\">
      <div class=\"row\">
         <div class=\"col-auto d-flex flex-column picture-block\">
            {{ include('components/user/picture.html.twig', {'users_id': users_id}, with_context = false) }}
         </div>
         <div class=\"col-12 col-sm content-block\">
            <div class=\"d-flex\">
               <div class=\"d-none d-md-block\">
                  <strong>{{ get_item_link('User', users_id) }}</strong>
               </div>
            </div>
            <span class=\"mt-2 timeline-content left card\">
               <div class=\"card-body\">
                  {% if item.isNewItem() %}
                     <div class=\"alert alert-info\" role=\"alert\">
                        {% set entitybadge %}
                           <span class=\"ms-1\">
                              {{ call('Entity::badgeCompletename', [
                                 get_item_name('Entity', item.fields['entities_id'])
                              ])|raw }}
                           </span>
                        {% endset %}

                        {{ __('%1\$s will be added in entity %2\$s')|format(
                           item.getTypeName(1),
                           entitybadge
                        )|raw }}
                     </div>
                  {% endif %}

                  {{ include('components/itilobject/timeline/simple_form.html.twig', {
                     'no_form': true
                  }) }}
               </div>
            </span>
         </div>
      </div>
   </div>
</div>
", "components/itilobject/timeline/new_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\new_form.html.twig");
    }
}
