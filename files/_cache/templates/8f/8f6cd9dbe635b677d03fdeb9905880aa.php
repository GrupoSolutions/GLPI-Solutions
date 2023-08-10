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

/* @formcreator/pages/form.html.twig */
class __TwigTemplate_5ca42863944da3938cf4376582256cb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/form.html.twig", 32)->unwrap();
        // line 33
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/pages/form.html.twig", 33)->unwrap();
        // line 31
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@formcreator/pages/form.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) {
            // line 37
            echo "        ";
            $context["language"] = "";
            // line 38
            echo "        ";
            $context["iconColor"] = "#999999";
            // line 39
            echo "        ";
            $context["bgColor"] = "#E7E7E7";
            // line 40
            echo "    ";
        } else {
            // line 41
            echo "        ";
            $context["language"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["language"] ?? null) : null);
            // line 42
            echo "        ";
            $context["iconColor"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["icon_color"] ?? null) : null);
            // line 43
            echo "        ";
            $context["bgColor"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["background_color"] ?? null) : null);
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",         // line 48
($context["item"] ?? null), __("Name"),         // line 50
($context["withtemplate"] ?? null), ["required" => true]], 46, $context, $this->getSourceContext());
        // line 52
        echo "

    ";
        // line 54
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["is_active"] ?? null) : null), __("Active"), ["required" => true]], 54, $context, $this->getSourceContext());
        echo "

    ";
        // line 56
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PluginFormcreatorCategory", "plugin_formcreator_categories_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["plugin_formcreator_categories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PluginFormcreatorCategory")], 56, $context, $this->getSourceContext());
        // line 61
        echo "

    ";
        // line 63
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["helpdesk_home", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["helpdesk_home"] ?? null) : null), __("Direct access on homepage", "formcreator")], 63, $context, $this->getSourceContext());
        echo "

    ";
        // line 65
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownFontAwesomeIconField", ["icon", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["icon"] ?? null) : null), __("Icon", "formcreator")], 65, $context, $this->getSourceContext());
        echo "

    ";
        // line 67
        echo twig_call_macro($macros["fields"], "macro_colorField", ["icon_color", ($context["iconColor"] ?? null), __("Icon color")], 67, $context, $this->getSourceContext());
        echo "

    ";
        // line 69
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownLanguageField", ["language", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 71
($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["icon"] ?? null) : null), __("Language", "formcreator"), ["display_emptychoice" => true, "emptylabel" => (("--- " . __("All languages", "formcreator")) . " ---"), "value" =>         // line 76
($context["language"] ?? null)]], 69, $context, $this->getSourceContext());
        // line 78
        echo "

    ";
        // line 80
        echo twig_call_macro($macros["fields"], "macro_colorField", ["background_color", ($context["bgColor"] ?? null), __("Background color", "formcreator")], 80, $context, $this->getSourceContext());
        echo "

    ";
        // line 82
        echo twig_call_macro($macros["fields"], "macro_textField", ["description", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["description"] ?? null) : null), __("Description")], 82, $context, $this->getSourceContext());
        echo "

    ";
        // line 84
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["content"] ?? null) : null), _n("Header", "Headers", 1, "formcreator"), ["enable_richtext" => true]], 84, $context, $this->getSourceContext());
        echo "

    ";
        // line 86
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_default", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["is_default"] ?? null) : null), __("Default form in service catalog", "formcreator")], 86, $context, $this->getSourceContext());
        echo "

    ";
        // line 88
        $context["tooltip"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => __("If set to 'no', this form won't be shown for self-services users. They will still be able to access this form through its URL.", "formcreator"), 1 => ["display" => false]]);
        // line 95
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 95)) {
            // line 96
            echo "        ";
            $context["visible"] = 1;
            // line 97
            echo "    ";
        } else {
            // line 98
            echo "        ";
            $context["visible"] = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_visible"] ?? null) : null);
            // line 99
            echo "    ";
        }
        // line 100
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_visible", ($context["visible"] ?? null), __("Visible", "formcreator"), ["add_field_html" => ($context["tooltip"] ?? null)]], 100, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 100,  162 => 99,  159 => 98,  156 => 97,  153 => 96,  150 => 95,  148 => 88,  143 => 86,  138 => 84,  133 => 82,  128 => 80,  124 => 78,  122 => 76,  121 => 71,  120 => 69,  115 => 67,  110 => 65,  105 => 63,  101 => 61,  99 => 59,  98 => 56,  93 => 54,  89 => 52,  87 => 50,  86 => 48,  85 => 46,  82 => 45,  79 => 44,  76 => 43,  73 => 42,  70 => 41,  67 => 40,  64 => 39,  61 => 38,  58 => 37,  55 => 36,  51 => 35,  46 => 31,  44 => 33,  42 => 32,  35 => 31,);
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

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% import '@formcreator/components/form/fields_macros.html.twig' as formcreatorFields %}

{% block form_fields %}
    {% if item.isNewItem() %}
        {% set language = '' %}
        {% set iconColor = '#999999' %}
        {% set bgColor = '#E7E7E7' %}
    {% else %}
        {% set language = item.fields['language'] %}
        {% set iconColor = item.fields['icon_color'] %}
        {% set bgColor = item.fields['background_color'] %}
    {% endif %}

    {{ fields.autoNameField(
        'name',
        item,
        __('Name'),
    withtemplate,
    { required: true }
    ) }}

    {{ fields.dropdownYesNo('is_active', item.fields['is_active'], __('Active'), { required: true }) }}

    {{ fields.dropdownField(
        'PluginFormcreatorCategory',
        'plugin_formcreator_categories_id',
        item.fields['plugin_formcreator_categories_id'],
        'PluginFormcreatorCategory'|itemtype_name
    ) }}

    {{ fields.dropdownYesNo('helpdesk_home', item.fields['helpdesk_home'], __('Direct access on homepage', 'formcreator')) }}

    {{ formcreatorFields.dropdownFontAwesomeIconField('icon', item.fields['icon'], __('Icon', 'formcreator')) }}

    {{ fields.colorField('icon_color', iconColor, __('Icon color')) }}

    {{ formcreatorFields.dropdownLanguageField(
        'language',
        item.fields['icon'],
        __('Language', 'formcreator'),
        {
            'display_emptychoice': true,
            'emptylabel':  '--- ' ~ __('All languages', 'formcreator') ~ ' ---',
            'value': language,
        }
    ) }}

    {{ fields.colorField('background_color', bgColor, __('Background color', 'formcreator')) }}

    {{ fields.textField('description', item.fields['description'], __('Description')) }}

    {{ fields.textareaField('content', item.fields['content'], _n('Header', 'Headers', 1, 'formcreator'), { 'enable_richtext': true }) }}

    {{ fields.dropdownYesNo('is_default', item.fields['is_default'], __('Default form in service catalog', 'formcreator')) }}

    {% set tooltip = call('Html::showToolTip',
        [__(
            \"If set to 'no', this form won't be shown for self-services users. They will still be able to access this form through its URL.\",
            'formcreator'
        ),
        { display: false }
    ]) %}
    {% if item.isNewItem() %}
        {% set visible = 1 %}
    {% else %}
        {% set visible = item.fields['is_visible'] %}
    {% endif %}
    {{ fields.dropdownYesNo('is_visible', visible, __('Visible', 'formcreator'), { 'add_field_html': tooltip }) }}
{% endblock %}
", "@formcreator/pages/form.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/form.html.twig");
    }
}
