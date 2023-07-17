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

/* components/form/flags.html.twig */
class __TwigTemplate_20d597aca716d64e5a8fc4b7e5edca37 extends Template
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
        $context["flags"] = ["have_serial" => __("Serial"), "have_parallel" => __("Parallel"), "have_usb" => __("USB"), "have_ethernet" => __("Ethernet"), "have_wifi" => __("Wifi"), "have_micro" => __("Microphone"), "have_subd" => __("Sub-D"), "have_bnc" => __("BNC"), "have_dvi" => __("DVI"), "have_pivot" => __("Pivot"), "have_hdmi" => __("HDMI"), "have_displayport" => __("DisplayPort")];
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flags"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 49
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["field"]], "method", false, false, false, 49)) {
                // line 50
                echo "      <div class=\"m-2\">
         <label class=\"form-check\">
            <input type=\"hidden\" name=\"";
                // line 52
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\" value=\"0\" />
            <input class=\"form-check-input\"
                   type=\"checkbox\"
                   name=\"";
                // line 55
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\"
                   ";
                // line 56
                if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["field"]] ?? null) : null) == 1)) {
                    echo "checked=\"checked\"";
                }
                // line 57
                echo "                   value=\"1\" />
            <span class=\"form-check-label\">
               ";
                // line 59
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
            </span>
         </label>
      </div>
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "components/form/flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 59,  67 => 57,  63 => 56,  59 => 55,  53 => 52,  49 => 50,  46 => 49,  42 => 48,  40 => 34,  37 => 33,);
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

{% set flags = {
   'have_serial'      : __('Serial'),
   'have_parallel'    : __('Parallel'),
   'have_usb'         : __('USB'),
   'have_ethernet'    : __('Ethernet'),
   'have_wifi'        : __('Wifi'),
   'have_micro'       : __('Microphone'),
   'have_subd'        : __('Sub-D'),
   'have_bnc'         : __('BNC'),
   'have_dvi'         : __('DVI'),
   'have_pivot'       : __('Pivot'),
   'have_hdmi'        : __('HDMI'),
   'have_displayport' : __('DisplayPort'),
} %}
{% for field, label in flags %}
   {% if item.isField(field) %}
      <div class=\"m-2\">
         <label class=\"form-check\">
            <input type=\"hidden\" name=\"{{ field }}\" value=\"0\" />
            <input class=\"form-check-input\"
                   type=\"checkbox\"
                   name=\"{{ field }}\"
                   {% if item.fields[field] == 1 %}checked=\"checked\"{% endif %}
                   value=\"1\" />
            <span class=\"form-check-label\">
               {{ label }}
            </span>
         </label>
      </div>
   {% endif %}
{% endfor %}
", "components/form/flags.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\form\\flags.html.twig");
    }
}
