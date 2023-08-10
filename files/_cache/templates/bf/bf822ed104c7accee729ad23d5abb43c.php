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

/* @formcreator/components/form/section_design.html.twig */
class __TwigTemplate_22c2101f8c14f40389427ad49d108793 extends Template
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
        // line 30
        echo "
";
        // line 31
        $context["lastSectionOrder"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCommon::getMax", [0 => ($context["item"] ?? null), 1 => ["plugin_formcreator_forms_id" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["plugin_formcreator_forms_id"] ?? null) : null)], 2 => "order"]);
        // line 32
        echo "
<li class=\"plugin_formcreator_section\" data-itemtype=\"PluginFormcreatorSection\" data-id=\"";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
        echo "\">
    ";
        // line 34
        $context["conditionsCount"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::countForItem", [0 => ($context["item"] ?? null)]);
        // line 35
        echo "    <a href=\"#\" onclick=\"plugin_formcreator.showSectionForm(";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["plugin_formcreator_forms_id"] ?? null) : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
        echo ")\">
        ";
        // line 37
        echo "        <sup class=\"plugin_formcreator_conditions_count\" title=\"";
        echo twig_escape_filter($this->env, __("Count of conditions", "formcreator"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["conditionsCount"] ?? null), "html", null, true);
        echo "</sup>
        ";
        // line 38
        if (twig_test_empty((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null))) {
            // line 39
            echo "            ";
            $context["name"] = (("(" . (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null)) . ")");
            // line 40
            echo "        ";
        } else {
            // line 41
            echo "            ";
            $context["name"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Toolbox\\Sanitizer::unsanitize", [0 => (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null)]);
            // line 42
            echo "        ";
        }
        // line 43
        echo "        <span data-field=\"name\">";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span>
    </a>

    ";
        // line 47
        echo "    <span class='form_control pointer'>
    <i class=\"far fa-trash-alt\" onclick=\"plugin_formcreator.deleteSection(this)\"></i>
    </span>

    ";
        // line 52
        echo "    <span class='form_control pointer'>
    <i class=\"far fa-clone\" onclick=\"plugin_formcreator.duplicateSection(this)\"></i>
    </span>

    ";
        // line 57
        echo "    ";
        if (((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["order"] ?? null) : null) < ($context["lastSectionOrder"] ?? null))) {
            // line 58
            echo "        ";
            $context["display"] = "initial";
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["display"] = "none";
            // line 61
            echo "    ";
        }
        // line 62
        echo "    <span class=\"form_control pointer moveDown\" style=\"display: ";
        echo twig_escape_filter($this->env, ($context["display"] ?? null), "html", null, true);
        echo "\">
      <i class=\"fas fa-sort-down\" onclick=\"plugin_formcreator.moveSection(this, 'down')\"></i>
    </span>

    ";
        // line 67
        echo "    ";
        if (((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["order"] ?? null) : null) > 1)) {
            // line 68
            echo "        ";
            $context["display"] = "initial";
            // line 69
            echo "    ";
        } else {
            // line 70
            echo "        ";
            $context["display"] = "none";
            // line 71
            echo "    ";
        }
        // line 72
        echo "    <span class=\"form_control pointer moveUp\" style=\"display: ";
        echo twig_escape_filter($this->env, ($context["display"] ?? null), "html", null, true);
        echo "\">
    <i class=\"fas fa-sort-up\" onclick=\"plugin_formcreator.moveSection(this, 'up')\"></i>
    </span>

    ";
        // line 77
        echo "    ";
        $context["columns"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("constant", [0 => "PluginFormcreatorSection::COLUMNS"]);
        // line 78
        echo "    <div class=\"grid-stack grid-stack-";
        echo twig_escape_filter($this->env, ($context["columns"] ?? null), "html", null, true);
        echo "\" data-gs-animate=\"yes\" data-gs-width=\"";
        echo twig_escape_filter($this->env, ($context["columns"] ?? null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null), "html", null, true);
        echo "\"></div>

    ";
        // line 81
        echo "    <div class=\"plugin_formcreator_question\">
        <a href=\"#\" onclick=\"plugin_formcreator.showQuestionForm(";
        // line 82
        echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
        echo ");\">
            <i class=\"fas fa-plus\"></i>&nbsp;";
        // line 83
        echo twig_escape_filter($this->env, __("Add a question", "formcreator"), "html", null, true);
        echo "
        </a>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            plugin_formcreator.initGridStack(";
        // line 88
        echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null), "html", null, true);
        echo ");
         });
    </script>
</li>
";
    }

    public function getTemplateName()
    {
        return "@formcreator/components/form/section_design.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 88,  164 => 83,  160 => 82,  157 => 81,  147 => 78,  144 => 77,  136 => 72,  133 => 71,  130 => 70,  127 => 69,  124 => 68,  121 => 67,  113 => 62,  110 => 61,  107 => 60,  104 => 59,  101 => 58,  98 => 57,  92 => 52,  86 => 47,  79 => 43,  76 => 42,  73 => 41,  70 => 40,  67 => 39,  65 => 38,  58 => 37,  51 => 35,  49 => 34,  45 => 33,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 # Formcreator is a plugin which allows creation of custom forms of
 # easy access.
 # ---------------------------------------------------------------------
 # LICENSE
 #
 # This file is part of Formcreator.
 #
 # Formcreator is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # Formcreator is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 # ---------------------------------------------------------------------
 # @copyright Copyright © 2011 - 2021 Teclib'
 # @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 # @link      https://github.com/pluginsGLPI/formcreator/
 # @link      https://pluginsglpi.github.io/formcreator/
 # @link      http://plugins.glpi-project.org/#/plugin/formcreator
 # ---------------------------------------------------------------------
 #}

{% set lastSectionOrder = call('PluginFormcreatorCommon::getMax', [item, { 'plugin_formcreator_forms_id': item.fields['plugin_formcreator_forms_id']}, 'order']) %}

<li class=\"plugin_formcreator_section\" data-itemtype=\"PluginFormcreatorSection\" data-id=\"{{ item.fields['id'] }}\">
    {% set conditionsCount = call('PluginFormcreatorCondition::countForItem', [item]) %}
    <a href=\"#\" onclick=\"plugin_formcreator.showSectionForm({{ item.fields['plugin_formcreator_forms_id'] }}, {{ item.fields['id'] }})\">
        {# TODO : Show count of conditions #}
        <sup class=\"plugin_formcreator_conditions_count\" title=\"{{ __('Count of conditions', 'formcreator') }}\">{{ conditionsCount }}</sup>
        {% if item.fields['name'] is empty %}
            {% set name = '(' ~ item.fields['id'] ~ ')' %}
        {% else %}
            {% set name = call('Glpi\\\\Toolbox\\\\Sanitizer::unsanitize', [item.fields['name']]) %}
        {% endif %}
        <span data-field=\"name\">{{ name }}</span>
    </a>

    {# Delete a section #}
    <span class='form_control pointer'>
    <i class=\"far fa-trash-alt\" onclick=\"plugin_formcreator.deleteSection(this)\"></i>
    </span>

    {# Clone a section #}
    <span class='form_control pointer'>
    <i class=\"far fa-clone\" onclick=\"plugin_formcreator.duplicateSection(this)\"></i>
    </span>

    {# Move down a section #}
    {% if item.fields['order'] < lastSectionOrder %}
        {% set display = 'initial' %}
    {% else %}
        {% set display = 'none' %}
    {% endif %}
    <span class=\"form_control pointer moveDown\" style=\"display: {{ display }}\">
      <i class=\"fas fa-sort-down\" onclick=\"plugin_formcreator.moveSection(this, 'down')\"></i>
    </span>

    {# Move up a section #}
    {% if item.fields['order'] > 1 %}
        {% set display = 'initial' %}
    {% else %}
        {% set display = 'none' %}
    {% endif %}
    <span class=\"form_control pointer moveUp\" style=\"display: {{ display }}\">
    <i class=\"fas fa-sort-up\" onclick=\"plugin_formcreator.moveSection(this, 'up')\"></i>
    </span>

    {# Section content #}
    {% set columns = call('constant', ['PluginFormcreatorSection::COLUMNS']) %}
    <div class=\"grid-stack grid-stack-{{ columns }}\" data-gs-animate=\"yes\" data-gs-width=\"{{ columns }}\" data-id=\"{{ item.fields['id'] }}\"></div>

    {# Add a question #}
    <div class=\"plugin_formcreator_question\">
        <a href=\"#\" onclick=\"plugin_formcreator.showQuestionForm({{ item.fields['id'] }});\">
            <i class=\"fas fa-plus\"></i>&nbsp;{{ __('Add a question', 'formcreator') }}
        </a>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            plugin_formcreator.initGridStack({{ item.fields['id'] }});
         });
    </script>
</li>
", "@formcreator/components/form/section_design.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/components/form/section_design.html.twig");
    }
}
