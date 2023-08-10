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
class __TwigTemplate_b8553a88e91868ca8bcd7af562175c3f extends Template
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
        echo "
";
        // line 36
        if (($context["canupdate"] ?? null)) {
            // line 37
            echo "   ";
            ob_start();
            // line 38
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdownStatus", [0 => twig_array_merge(["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["item"] ?? null), "input", [], "any", false, true, false, 39), "status", [], "array", true, true, false, 39)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["status"] ?? null) : null))) : ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null))), "value_calculation" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["status"] ?? null) : null), "showtype" => "allowed", "width" => "100%", "display" => false],             // line 44
($context["field_options"] ?? null))], "method", false, false, false, 38);
            echo "

      ";
            // line 46
            $context["validation_class"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 46);
            // line 47
            echo "      ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 48
                echo "         ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [0 => ($context["item"] ?? null), 1 => "status"], "method", false, false, false, 48), "html", null, true);
                echo "
      ";
            }
            // line 50
            echo "   ";
            $context["status_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 52
            echo "   ";
            $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ["center" => true]);
            // line 53
            echo "   ";
            ob_start();
            // line 54
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null)], "method", false, false, false, 54);
            echo "
      ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatus", [0 => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null)], "method", false, false, false, 55), "html", null, true);
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
        return array (  116 => 72,  114 => 71,  113 => 69,  112 => 67,  109 => 66,  105 => 64,  99 => 61,  92 => 58,  90 => 57,  85 => 55,  80 => 54,  77 => 53,  74 => 52,  70 => 50,  64 => 48,  61 => 47,  59 => 46,  54 => 44,  53 => 40,  52 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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
         'value': item.input['status']|default(item.fields['status']),
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
", "components/itilobject/fields/status.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/status.html.twig");
    }
}
