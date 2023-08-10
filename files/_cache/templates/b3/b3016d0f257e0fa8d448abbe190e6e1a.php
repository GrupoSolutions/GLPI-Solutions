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

/* @formcreator/pages/form_formanswerproperties.html.twig */
class __TwigTemplate_034256c05a0bd35ea55df525722023bc extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 32)->unwrap();
        // line 33
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 33)->unwrap();
        // line 31
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_textField", ["formanswer_name", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["formanswer_name"] ?? null) : null), __("Answers title", "formcreator")], 36, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/form_formanswerproperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 36,  51 => 35,  46 => 31,  44 => 33,  42 => 32,  35 => 31,);
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
    {{ fields.textField('formanswer_name', item.fields['formanswer_name'], __('Answers title', 'formcreator')) }}
{% endblock %}
", "@formcreator/pages/form_formanswerproperties.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/form_formanswerproperties.html.twig");
    }
}
