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

/* @formcreator/pages/question_for_form.html.twig */
class __TwigTemplate_e2d516f640eb297e2a20835c021352d7 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/question_for_form.html.twig", 31)->unwrap();
        // line 32
        echo "
<div id=\"plugin_formcreator_form\" class=\"asset plugin_formcreator_form_design\" data-itemtype=\"PluginFormcreatorForm\" data-id=\"";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\">
   ";
        // line 34
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "
    <ol>
        ";
        // line 36
        $context["sections"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorSection::getSectionsFromForm", [0 => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)]);
        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 38
            echo "            ";
            $this->loadTemplate("@formcreator/components/form/section_design.html.twig", "@formcreator/pages/question_for_form.html.twig", 38)->display(twig_array_merge($context, ["item" => $context["section"]]));
            // line 39
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        ";
        // line 42
        echo "        <li class=\"plugin_formcreator_section not-sortable\">
            <a href=\"#\" onclick=\"plugin_formcreator.showSectionForm(";
        // line 43
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
        echo ");\">
                <i class=\"fas fa-plus\"></i>&nbsp;
                ";
        // line 45
        echo twig_escape_filter($this->env, __("Add a section", "formcreator"), "html", null, true);
        echo "
            </a>
        </li>
    </ol>
</div>
<div class=\"card-body d-flex flex-wrap\">
    <div class=\"col-12 col-xxl-";
        // line 51
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
                <div class=\"row flex-row\">
                    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Condition to show the submit button", "formcreator")], 55, $context, $this->getSourceContext());
        echo "

                    ";
        // line 57
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["show_rule", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["show_rule"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEnumShowrule", [], "method", false, false, false, 57), "", ["no_label" => true, "on_change" => "plugin_formcreator_toggleCondition(this);"]], 57, $context, $this->getSourceContext());
        echo "
                    ";
        // line 58
        $context["conditions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getConditionsFromItem", [0 => ($context["item"] ?? null)]);
        // line 59
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conditions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 60
            echo "                        ";
            echo twig_include($this->env, $context, "@formcreator/components/form/condition.html.twig");
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div> ";
        // line 63
        echo "            </div> ";
        // line 64
        echo "        </div> ";
        // line 65
        echo "    </div>
</div>
";
        // line 67
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/question_for_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  170 => 65,  168 => 64,  166 => 63,  164 => 62,  147 => 60,  129 => 59,  127 => 58,  123 => 57,  118 => 55,  111 => 51,  102 => 45,  97 => 43,  94 => 42,  91 => 40,  77 => 39,  74 => 38,  56 => 37,  54 => 36,  49 => 34,  45 => 33,  42 => 32,  40 => 31,  37 => 30,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}

<div id=\"plugin_formcreator_form\" class=\"asset plugin_formcreator_form_design\" data-itemtype=\"PluginFormcreatorForm\" data-id=\"{{ item.fields['id'] }}\">
   {{ include('components/form/header.html.twig') }}
    <ol>
        {% set sections = call('PluginFormcreatorSection::getSectionsFromForm', [item.fields['id']]) %}
        {% for section in sections %}
            {% include '@formcreator/components/form/section_design.html.twig' with {'item': section} %}
        {% endfor %}

        {# add a section #}
        <li class=\"plugin_formcreator_section not-sortable\">
            <a href=\"#\" onclick=\"plugin_formcreator.showSectionForm({{ item.fields['id'] }});\">
                <i class=\"fas fa-plus\"></i>&nbsp;
                {{ __('Add a section', 'formcreator') }}
            </a>
        </li>
    </ol>
</div>
<div class=\"card-body d-flex flex-wrap\">
    <div class=\"col-12 col-xxl-{{ item_has_pictures ? '9' : '12' }} flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
                <div class=\"row flex-row\">
                    {{ fields.smallTitle(__('Condition to show the submit button', 'formcreator')) }}

                    {{ fields.dropdownArrayField('show_rule', item.fields['show_rule'], item.getEnumShowrule(), '', { 'no_label': true, 'on_change': 'plugin_formcreator_toggleCondition(this);' }) }}
                    {% set conditions = call('PluginFormcreatorCondition::getConditionsFromItem', [item]) %}
                    {% for condition in conditions %}
                        {{ include('@formcreator/components/form/condition.html.twig') }}
                    {% endfor %}
                </div> {# .row #}
            </div> {# .row #}
        </div> {# .flex-row #}
    </div>
</div>
{{ include('components/form/buttons.html.twig') }}
", "@formcreator/pages/question_for_form.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/question_for_form.html.twig");
    }
}
