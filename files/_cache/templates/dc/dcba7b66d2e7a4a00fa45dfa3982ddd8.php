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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_c289b01f285998ce73557c91ea8282cc extends Template
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
";
    }

    // line 34
    public function macro_confirm($__modal_title__ = "", $__modal_body__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "   ";
            $context["options"] = twig_array_merge(["buttons" => ["cancel" => ["label" => ((twig_get_attribute($this->env, $this->source,             // line 38
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 38)) ? (_twig_default_filter((($__internal_compile_0 = ($context["options"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["cancel_label"] ?? null) : null), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((twig_get_attribute($this->env, $this->source,             // line 39
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 39)) ? (_twig_default_filter((($__internal_compile_1 = ($context["options"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["cancel_event"] ?? null) : null), "")) : (""))], "confirm" => ["label" => ((twig_get_attribute($this->env, $this->source,             // line 42
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 42)) ? (_twig_default_filter((($__internal_compile_2 = ($context["options"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["confirm_label"] ?? null) : null), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((twig_get_attribute($this->env, $this->source,             // line 43
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 43)) ? (_twig_default_filter((($__internal_compile_3 = ($context["options"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["confirm_event"] ?? null) : null), "")) : ("")), "class" => "ms-auto"]]],             // line 47
($context["options"] ?? null));
            // line 48
            echo "
   ";
            // line 49
            echo twig_call_macro($macros["_self"], "macro_modal", [($context["modal_title"] ?? null), ($context["modal_body"] ?? null), ($context["options"] ?? null)], 49, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_modal($__modal_title__ = null, $__modal_body__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 53
            echo "   ";
            $context["rand"] = twig_random($this->env);
            // line 54
            echo "   ";
            $context["options"] = twig_array_merge(["id" => ("modal" .             // line 55
($context["rand"] ?? null)), "rand" =>             // line 56
($context["rand"] ?? null), "buttons" => [], "modal_classes" => ""],             // line 59
($context["options"] ?? null));
            // line 60
            echo "
   <div class=\"modal fade ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "modal_classes", [], "any", false, false, false, 61), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">";
            // line 65
            echo twig_escape_filter($this->env, ($context["modal_title"] ?? null), "html", null, true);
            echo "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 66
            echo twig_escape_filter($this->env, _x("button", "Close"), "html", null, true);
            echo "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
            // line 69
            echo ($context["modal_body"] ?? null);
            echo "
            </div>
            <div class=\"modal-footer\">
               ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = ($context["options"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["buttons"] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 73
                echo "                  <button type=\"button\" class=\"btn ";
                echo (((($__internal_compile_5 = ($context["options"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["primary"] ?? null) : null)) ? ("btn-primary") : ("btn-outline-secondary"));
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 73)) ? (_twig_default_filter((($__internal_compile_6 = $context["button"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\"
                          id=\"";
                // line 74
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 74)) ? (_twig_default_filter((($__internal_compile_7 = $context["button"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 74) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 74)))) : (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 74) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 74)))), "html", null, true);
                echo "\" data-bs-dismiss=\"modal\">
                     ";
                // line 75
                echo ((twig_get_attribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 75)) ? (_twig_default_filter((($__internal_compile_8 = $context["button"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), "")) : (""));
                echo "
                  </button>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["buttons"] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 85
                echo "         \$('#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 85), "html", null, true);
                echo "').on('click', '#";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 85)) ? (_twig_default_filter((($__internal_compile_10 = $context["button"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 85) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 85)))) : (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 85) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 85)))), "html", null, true);
                echo "', function (event) {
            ";
                // line 86
                echo ((twig_get_attribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 86)) ? (_twig_default_filter((($__internal_compile_11 = $context["button"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["event"] ?? null) : null), "return true;")) : ("return true;"));
                echo "
         });
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      });
   </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/modals_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 89,  212 => 86,  205 => 85,  188 => 84,  180 => 78,  163 => 75,  159 => 74,  152 => 73,  135 => 72,  129 => 69,  123 => 66,  119 => 65,  110 => 61,  107 => 60,  105 => 59,  104 => 56,  103 => 55,  101 => 54,  98 => 53,  83 => 52,  72 => 49,  69 => 48,  67 => 47,  66 => 43,  65 => 42,  64 => 39,  63 => 38,  61 => 35,  46 => 34,  41 => 51,  38 => 33,);
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

{% macro confirm(modal_title = '', modal_body = '', options = {}) %}
   {% set options = {
      'buttons': {
         'cancel': {
            'label': options['cancel_label']|default(_x('button', 'Cancel')),
            'event': options['cancel_event']|default('')
         },
         'confirm': {
            'label': options['confirm_label']|default(_x('button', 'Ok')),
            'event': options['confirm_event']|default(''),
            'class': 'ms-auto'
         }
      },
   }|merge(options) %}

   {{ _self.modal(modal_title, modal_body, options) }}
{% endmacro %}

{% macro modal(modal_title, modal_body, options = {}) %}
   {% set rand = random() %}
   {% set options = {
      'id': 'modal' ~ rand,
      'rand': rand,
      'buttons': [],
      'modal_classes': ''
   }|merge(options) %}

   <div class=\"modal fade {{ options.modal_classes }}\" id=\"{{ options.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">{{ modal_title }}</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ _x('button', 'Close') }}\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               {{ modal_body|raw }}
            </div>
            <div class=\"modal-footer\">
               {% for button in options['buttons'] %}
                  <button type=\"button\" class=\"btn {{ options['primary'] ? 'btn-primary' : 'btn-outline-secondary' }} {{ button['class']|default('') }}\"
                          id=\"{{ button['id']|default(options.id ~ '_btn_' ~ (loop.index0)) }}\" data-bs-dismiss=\"modal\">
                     {{ button['label']|default('')|raw }}
                  </button>
               {% endfor %}
            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         {% for button in options['buttons'] %}
         \$('#{{ options.id }}').on('click', '#{{ button['id']|default(options.id ~ '_btn_' ~ (loop.index0)) }}', function (event) {
            {{ (button['event']|default('return true;'))|raw }}
         });
         {% endfor %}
      });
   </script>
{% endmacro %}
", "components/form/modals_macros.html.twig", "/var/www/html/glpi/templates/components/form/modals_macros.html.twig");
    }
}
