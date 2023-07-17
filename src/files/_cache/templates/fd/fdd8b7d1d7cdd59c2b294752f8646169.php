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

/* central/lists/itemtype_count.html.twig */
class __TwigTemplate_94a80bdfe3a549c06046fe22133f573f extends Template
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
        // line 51
        echo "
<div class=\"card\">
   <div class=\"card-body\">
      <div class=\"card-title d-flex justify-content-between\">
         ";
        // line 55
        echo twig_call_macro($macros["_self"], "macro_link_or_text", [($context["title"] ?? null)], 55, $context, $this->getSourceContext());
        echo "

         ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", true, true, false, 57)) {
            // line 58
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", false, false, false, 58), "btn btn-sm btn-outline-secondary"], 58, $context, $this->getSourceContext());
            echo "
         ";
        }
        // line 60
        echo "      </div>

      ";
        // line 62
        if (array_key_exists("subtitle", $context)) {
            // line 63
            echo "         <div class=\"card-subtitle\">
            ";
            // line 64
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [($context["subtitle"] ?? null)], 64, $context, $this->getSourceContext());
            echo "
         </div>
      ";
        }
        // line 67
        echo "   </div>


   <ul class=\"list-group list-group-flush\">
      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "         ";
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [$context["item"], "list-group-item list-group-item-action d-flex justify-content-between align-items-center"], 72, $context, $this->getSourceContext());
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "   </ul>
</div>
";
    }

    // line 34
    public function macro_link_or_text($__value__ = null, $__anchor_class__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "anchor_class" => $__anchor_class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 35)) {
                // line 36
                echo "      <a class=\"";
                echo twig_escape_filter($this->env, ($context["anchor_class"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
   ";
            }
            // line 38
            echo "         <span>
            ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", true, true, false, 39)) {
                // line 40
                echo "               <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", false, false, false, 40), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 42
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "text", [], "any", false, false, false, 42), "html", null, true);
            echo "
         </span>
         ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", true, true, false, 44)) {
                // line 45
                echo "            <span class=\"badge bg-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", false, false, false, 45), "html", null, true);
                echo "</span>
         ";
            }
            // line 47
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 47)) {
                // line 48
                echo "      </a>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "central/lists/itemtype_count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  150 => 47,  144 => 45,  142 => 44,  136 => 42,  130 => 40,  128 => 39,  125 => 38,  117 => 36,  114 => 35,  100 => 34,  94 => 74,  85 => 72,  81 => 71,  75 => 67,  69 => 64,  66 => 63,  64 => 62,  60 => 60,  54 => 58,  52 => 57,  47 => 55,  41 => 51,  38 => 33,);
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

{% macro link_or_text(value, anchor_class = '') %}
   {% if value.link is defined %}
      <a class=\"{{ anchor_class }}\" href=\"{{ value.link }}\">
   {% endif %}
         <span>
            {% if value.icon is defined %}
               <i class=\"{{ value.icon }}\"></i>
            {% endif %}
            {{ value.text }}
         </span>
         {% if value.count is defined %}
            <span class=\"badge bg-secondary\">{{ value.count }}</span>
         {% endif %}
   {% if value.link is defined %}
      </a>
   {% endif %}
{% endmacro %}

<div class=\"card\">
   <div class=\"card-body\">
      <div class=\"card-title d-flex justify-content-between\">
         {{ _self.link_or_text(title) }}

         {% if title.button is defined %}
            {{ _self.link_or_text(title.button, 'btn btn-sm btn-outline-secondary') }}
         {% endif %}
      </div>

      {% if subtitle is defined %}
         <div class=\"card-subtitle\">
            {{ _self.link_or_text(subtitle) }}
         </div>
      {% endif %}
   </div>


   <ul class=\"list-group list-group-flush\">
      {% for item in items %}
         {{ _self.link_or_text(item, 'list-group-item list-group-item-action d-flex justify-content-between align-items-center') }}
      {% endfor %}
   </ul>
</div>
", "central/lists/itemtype_count.html.twig", "C:\\wamp64\\www\\glpi\\templates\\central\\lists\\itemtype_count.html.twig");
    }
}
