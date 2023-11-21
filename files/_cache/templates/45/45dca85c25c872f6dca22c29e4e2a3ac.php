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

/* components/debug/debug_toolbar.html.twig */
class __TwigTemplate_8f906651d3c424182016eaee6e77301a extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["rand"] = ((array_key_exists("rand", $context)) ? (_twig_default_filter(($context["rand"] ?? null), twig_random($this->env))) : (twig_random($this->env)));
        // line 35
        echo "
";
        // line 46
        echo "
<div id=\"debug-toolbar\" class=\"position-fixed bottom-0 w-100 card\" tabindex=\"0\">
   <div class=\"resize-handle mt-n2\" style=\"cursor: row-resize; height: 10px; z-index: 1030\"></div>
   <div class=\"d-flex flex-row align-items-center\">
      <div class=\"debug-toolbar-badge d-flex\">
         <button type=\"button\" class=\"btn btn-icon border-0 px-3 opacity-100 debug-logo\" onclick=\"GLPI.Debug.showDebugToolbar();\" disabled>
            <i class=\"ti ti-bug\"></i>
         </button>
      </div>
      <div class=\"debug-toolbar-content d-flex w-100 justify-content-between align-items-center\">
         <ul class=\"debug-toolbar-widgets nav nav-tabs align-items-center border-0\" data-bs-toggle=\"tabs\">
            ";
        // line 57
        echo twig_call_macro($macros["_self"], "macro_widget_button", ["server_performance", "Server performance", "ti ti-clock-play"], 57, $context, $this->getSourceContext());
        echo "
            ";
        // line 58
        echo twig_call_macro($macros["_self"], "macro_widget_button", ["sql", "SQL Requests", "ti ti-database"], 58, $context, $this->getSourceContext());
        echo "
            ";
        // line 59
        echo twig_call_macro($macros["_self"], "macro_widget_button", ["requests", "HTTP Requests", "ti ti-refresh"], 59, $context, $this->getSourceContext());
        echo "
            ";
        // line 60
        echo twig_call_macro($macros["_self"], "macro_widget_button", ["client_performance", "Client performance", "ti ti-brand-javascript"], 60, $context, $this->getSourceContext());
        echo "
         </ul>
         <div class=\"debug-toolbar-controls\">
            <div class=\"debug-toolbar-control\">
               <button type=\"button\" class=\"btn btn-icon border-0 p-1\" name=\"toggle_content_area\" onclick=\"GLPI.Debug.toggleExtraContentArea();\">
                  <i class=\"ti ti-square-arrow-up\"></i>
               </button>
               <button type=\"button\" class=\"btn btn-icon border-0 p-1\" title=\"";
        // line 67
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\" onclick=\"GLPI.Debug.hideDebugToolbar();\">
                  <i class=\"ti ti-square-x\"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
   <div id=\"debug-toolbar-expanded-content\" class=\"w-100 card d-none pe-2\">
   </div>
</div>
<script>
    \$(document).on('ready', () => {
        window.GLPI.Debug.init(";
        // line 79
        echo json_encode(($context["debug_info"] ?? null));
        echo ");
    });
</script>
";
    }

    // line 36
    public function macro_widget_button($__id__ = null, $__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 37
            echo "   <li class=\"debug-toolbar-widget d-inline-block p-2\" data-glpi-debug-widget-id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      <button type=\"button\" class=\"btn btn-icon border-0 p-1\" title=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"tab\">
         ";
            // line 39
            if ((($context["icon"] ?? null) != null)) {
                // line 40
                echo "            <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " me-1\"></i>
         ";
            }
            // line 42
            echo "         <span class=\"debug-text\"></span>
      </button>
   </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/debug/debug_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  130 => 40,  128 => 39,  124 => 38,  119 => 37,  104 => 36,  96 => 79,  81 => 67,  71 => 60,  67 => 59,  63 => 58,  59 => 57,  46 => 46,  43 => 35,  41 => 34,  38 => 33,);
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
 # @copyright 2015-2023 Teclib' and contributors.
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

{% set rand = rand|default(random()) %}

{% macro widget_button(id, title, icon = null) %}
   <li class=\"debug-toolbar-widget d-inline-block p-2\" data-glpi-debug-widget-id=\"{{ id }}\">
      <button type=\"button\" class=\"btn btn-icon border-0 p-1\" title=\"{{ title }}\" data-bs-toggle=\"tab\">
         {% if icon != null %}
            <i class=\"{{ icon }} me-1\"></i>
         {% endif %}
         <span class=\"debug-text\"></span>
      </button>
   </li>
{% endmacro %}

<div id=\"debug-toolbar\" class=\"position-fixed bottom-0 w-100 card\" tabindex=\"0\">
   <div class=\"resize-handle mt-n2\" style=\"cursor: row-resize; height: 10px; z-index: 1030\"></div>
   <div class=\"d-flex flex-row align-items-center\">
      <div class=\"debug-toolbar-badge d-flex\">
         <button type=\"button\" class=\"btn btn-icon border-0 px-3 opacity-100 debug-logo\" onclick=\"GLPI.Debug.showDebugToolbar();\" disabled>
            <i class=\"ti ti-bug\"></i>
         </button>
      </div>
      <div class=\"debug-toolbar-content d-flex w-100 justify-content-between align-items-center\">
         <ul class=\"debug-toolbar-widgets nav nav-tabs align-items-center border-0\" data-bs-toggle=\"tabs\">
            {{ _self.widget_button('server_performance', 'Server performance', 'ti ti-clock-play') }}
            {{ _self.widget_button('sql', 'SQL Requests', 'ti ti-database') }}
            {{ _self.widget_button('requests', 'HTTP Requests', 'ti ti-refresh') }}
            {{ _self.widget_button('client_performance', 'Client performance', 'ti ti-brand-javascript') }}
         </ul>
         <div class=\"debug-toolbar-controls\">
            <div class=\"debug-toolbar-control\">
               <button type=\"button\" class=\"btn btn-icon border-0 p-1\" name=\"toggle_content_area\" onclick=\"GLPI.Debug.toggleExtraContentArea();\">
                  <i class=\"ti ti-square-arrow-up\"></i>
               </button>
               <button type=\"button\" class=\"btn btn-icon border-0 p-1\" title=\"{{ __('Close') }}\" onclick=\"GLPI.Debug.hideDebugToolbar();\">
                  <i class=\"ti ti-square-x\"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
   <div id=\"debug-toolbar-expanded-content\" class=\"w-100 card d-none pe-2\">
   </div>
</div>
<script>
    \$(document).on('ready', () => {
        window.GLPI.Debug.init({{ debug_info|json_encode|raw }});
    });
</script>
", "components/debug/debug_toolbar.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\debug\\debug_toolbar.html.twig");
    }
}
