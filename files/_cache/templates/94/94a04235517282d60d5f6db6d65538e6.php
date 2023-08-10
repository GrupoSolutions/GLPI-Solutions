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

/* components/itilobject/fields/status.html.twig */
class __TwigTemplate_1648cdb00f5f9ed8ff0e875a97f09f4e extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/status.html.twig", 34)->unwrap();
        // line 35
        if (($context["canupdate"] ?? null)) {
            // line 36
            echo "   ";
            ob_start();
            // line 37
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdownStatus", [0 => twig_array_merge(["value" =>             // line 38
($context["status"] ?? null), "value_calculation" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 39
($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), "showtype" => "allowed", "width" => "100%", "display" => false],             // line 43
($context["field_options"] ?? null))], "method", false, false, false, 37);
            echo "

      ";
            // line 45
            $context["validation_class"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 45);
            // line 46
            echo "      ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 47
                echo "         ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [0 => ($context["item"] ?? null), 1 => "status"], "method", false, false, false, 47), "html", null, true);
                echo "
      ";
            }
            // line 49
            echo "   ";
            $context["status_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 51
            echo "   ";
            $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ["center" => true]);
            // line 52
            echo "   ";
            ob_start();
            // line 53
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["status"] ?? null) : null)], "method", false, false, false, 53);
            echo "
      ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatus", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 54), "html", null, true);
            echo "
      

      ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canReopen", [], "method", false, false, false, 57)) {
                // line 58
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getLinkURL", [], "method", false, false, false, 58), "html", null, true);
                echo "&amp;_openfollowup=1\"
            class=\"btn btn-ghost-secondary\">
            <i class=\"far fa-folder-open\"></i>
            <span>";
                // line 61
                echo twig_escape_filter($this->env, __("Reopen"), "html", null, true);
                echo "</span>
         </a>
      ";
            }
            // line 64
            echo "   ";
            $context["status_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 66
        echo "
";
        // line 67
        echo twig_call_macro($macros["fields"], "macro_field", ["status",         // line 69
($context["status_field"] ?? null), __("Status"),         // line 71
($context["field_options"] ?? null)], 67, $context, $this->getSourceContext());
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 72,  112 => 71,  111 => 69,  110 => 67,  107 => 66,  103 => 64,  97 => 61,  90 => 58,  88 => 57,  82 => 54,  77 => 53,  74 => 52,  71 => 51,  67 => 49,  61 => 47,  58 => 46,  56 => 45,  51 => 43,  50 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}
{% if canupdate %}
   {% set status_field %}
      {{ item.dropdownStatus({
         'value': status,
         'value_calculation': item.fields['status'],
         'showtype': 'allowed',
         'width': '100%',
         'display': false
      }|merge(field_options))|raw }}

      {% set validation_class = item.getValidationClassInstance() %}
      {% if validation_class is not null %}
         {{ validation_class.alertValidation(item, 'status') }}
      {% endif %}
   {% endset %}
{% else %}
   {% set field_options = field_options|merge({'center': true}) %}
   {% set status_field %}
      {{ item.getStatusIcon(item.fields['status'])|raw }}
      {{ item.getStatus(item.fields['status']) }}
      

      {% if item.canReopen() %}
         <a href=\"{{ item.getLinkURL() }}&amp;_openfollowup=1\"
            class=\"btn btn-ghost-secondary\">
            <i class=\"far fa-folder-open\"></i>
            <span>{{ __('Reopen') }}</span>
         </a>
      {% endif %}
   {% endset %}
{% endif %}

{{ fields.field(
   'status',
   status_field,
   __('Status'),
   field_options
) }}
", "components/itilobject/fields/status.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\fields\\status.html.twig");
    }
}
