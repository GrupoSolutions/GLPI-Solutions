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

/* components/itilobject/timeline/main_description.html.twig */
class __TwigTemplate_efb7a7c6e374d9b312ae3d9d1d94ba8e extends Template
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
        $context["users_id"] = ((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_recipient"] ?? null) : null) > 0)) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_id_recipient"] ?? null) : null)) : (0));
        // line 35
        $context["entry_rand"] = twig_random($this->env);
        // line 36
        echo "
<div class=\"timeline-item mb-3 ITILContent\"
     data-itemtype=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 38), "html", null, true);
        echo "\" data-items-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
        echo "\">
   <div class=\"row\">
      <div class=\"col-auto d-flex flex-column \">
         ";
        // line 41
        echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        echo "
      </div>
      <div class=\"col-12 col-sm\">
         <span class=\"mt-2 timeline-content left card\">
            <div class=\"card-body\">
               <div class=\"d-flex timeline-header\">
                  <div class=\"d-flex creator\">
                     ";
        // line 48
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 49
($context["users_id"] ?? null), "date_creation" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date_creation"] ?? null) : null), "date_mod" => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date_mod"] ?? null) : null), "users_id_editor" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_lastupdater"] ?? null) : null), "anonym_user" =>         // line 53
($context["anonym_user"] ?? null)], false);
        // line 54
        echo "
                  </div>

                  ";
        // line 57
        if (($context["canupdate"] ?? null)) {
            // line 58
            echo "                    <div class=\"dropdown ms-auto timeline-item-buttons\">
                        <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 59
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas ti ti-dots-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 62
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
                            <li><a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                            <i class=\"fa-fw ti ti-edit\"></i>
                            <span>";
            // line 65
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
                            </a></li>
                        </ul>
                    </div>
                  ";
        }
        // line 70
        echo "
                  <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
                     <i class=\"ti ti-x\"></i>
                  </button>
               </div>

               <div class=\"read-only-content\">
                  ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "name"], "method", false, false, false, 77)) {
            // line 78
            echo "                     <div class=\"card-title card-header mx-n3 mt-n3\">
                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null)), "html", null, true);
            echo "
                     </div>
                  ";
        }
        // line 82
        echo "                  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "content"], "method", false, false, false, 82)) {
            // line 83
            echo "                     ";
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 86
            echo "
                  ";
        }
        // line 88
        echo "               </div>
               <div class=\"edit-content collapse\">
                  <div class=\"ajax-content\"></div>
               </div>
            </div>
         </span>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/main_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 88,  129 => 86,  126 => 83,  123 => 82,  117 => 79,  114 => 78,  112 => 77,  103 => 70,  95 => 65,  89 => 62,  83 => 59,  80 => 58,  78 => 57,  73 => 54,  71 => 53,  70 => 52,  69 => 51,  68 => 50,  67 => 49,  66 => 48,  56 => 41,  48 => 38,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set users_id = (item.fields['users_id_recipient'] > 0 ? item.fields['users_id_recipient'] : 0) %}
{% set entry_rand = random() %}

<div class=\"timeline-item mb-3 ITILContent\"
     data-itemtype=\"{{ item.getType() }}\" data-items-id=\"{{ item.fields['id'] }}\">
   <div class=\"row\">
      <div class=\"col-auto d-flex flex-column \">
         {{ include('components/user/picture.html.twig', {'users_id': users_id}, with_context = false) }}
      </div>
      <div class=\"col-12 col-sm\">
         <span class=\"mt-2 timeline-content left card\">
            <div class=\"card-body\">
               <div class=\"d-flex timeline-header\">
                  <div class=\"d-flex creator\">
                     {{ include('components/itilobject/timeline/timeline_item_header_badges.html.twig', {
                        'users_id': users_id,
                        'date_creation': item.fields['date_creation'],
                        'date_mod': item.fields['date_mod'],
                        'users_id_editor': item.fields['users_id_lastupdater'],
                        'anonym_user': anonym_user,
                     }, with_context = false) }}
                  </div>

                  {% if canupdate %}
                    <div class=\"dropdown ms-auto timeline-item-buttons\">
                        <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-{{ entry_rand }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas ti ti-dots-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-{{ entry_rand }}\">
                            <li><a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                            <i class=\"fa-fw ti ti-edit\"></i>
                            <span>{{ __('Edit') }}</span>
                            </a></li>
                        </ul>
                    </div>
                  {% endif %}

                  <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
                     <i class=\"ti ti-x\"></i>
                  </button>
               </div>

               <div class=\"read-only-content\">
                  {% if not itiltemplate.isHiddenField('name') %}
                     <div class=\"card-title card-header mx-n3 mt-n3\">
                        {{ item.fields['name']|verbatim_value }}
                     </div>
                  {% endif %}
                  {% if not itiltemplate.isHiddenField('content') %}
                     {{ item.fields['content']|enhanced_html({
                        'user_mentions': true,
                        'images_gallery': true
                     }) }}
                  {% endif %}
               </div>
               <div class=\"edit-content collapse\">
                  <div class=\"ajax-content\"></div>
               </div>
            </div>
         </span>
      </div>
   </div>
</div>
", "components/itilobject/timeline/main_description.html.twig", "C:\\wamp64\\www\\glpi05\\templates\\components\\itilobject\\timeline\\main_description.html.twig");
    }
}
