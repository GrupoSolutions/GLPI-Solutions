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

/* components/search/display_data.html.twig */
class __TwigTemplate_b10e8de7aeeb74eb4a083caa7f686f30 extends Template
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
        $context["is_ajax"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null)));
        // line 35
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (_twig_default_filter(($context["fluid_search"] ?? null), true)) : (true));
        // line 36
        if ( !($context["is_ajax"] ?? null)) {
            // line 37
            echo "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 39
        echo "
";
        // line 41
        $context["normalized_itemtype"] = twig_replace_filter(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 42
        echo "
<form id=\"massform";
        // line 43
        echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
        echo "\" method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        echo "\"
      data-search-itemtype=\"";
        // line 44
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype"] ?? null) : null), "html", null, true);
        echo "\" data-start=\"";
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "\" data-count=\"";
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "\" data-limit=\"";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         ";
        // line 47
        if (((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display_type"] ?? null) : null) == twig_constant("Search::GLOBAL_SEARCH"))) {
            // line 48
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
            echo "</h2>

            ";
            // line 50
            if ((($context["count"] ?? null) > (($context["start"] ?? null) + twig_constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                // line 51
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"far fa-eye\"></i>
                  ";
                // line 53
                echo twig_escape_filter($this->env, __("View all"), "html", null, true);
                echo "
               </a>
            ";
            }
            // line 56
            echo "         ";
        } else {
            // line 57
            echo "            ";
            echo twig_include($this->env, $context, "components/search/controls.html.twig");
            echo "
         ";
        }
        // line 59
        echo "      </div>

      ";
        // line 61
        if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["as_map"] ?? null) : null) == 0)) {
            // line 62
            echo "         ";
            echo twig_include($this->env, $context, "components/search/table.html.twig");
            echo "
      ";
        }
        // line 64
        echo "      ";
        if ((($context["count"] ?? null) > 0)) {
            // line 65
            echo "         ";
            if ((((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_type"] ?? null) : null) != twig_constant("Search::GLOBAL_SEARCH")) && ((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["as_map"] ?? null) : null) == 0))) {
                // line 66
                echo "            <div class=\"card-footer search-footer\">
               ";
                // line 67
                echo twig_include($this->env, $context, "components/pager.html.twig");
                echo "
            </div>
         ";
            }
            // line 70
            echo "      ";
        } elseif (((($__internal_compile_8 = (($__internal_compile_9 = ($context["data"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["search"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["as_map"] ?? null) : null) == 1)) {
            // line 71
            echo "         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            ";
            // line 72
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 75
        echo "   </div>
</form>

";
        // line 78
        if ( !($context["is_ajax"] ?? null)) {
            // line 79
            echo "   </div>

   ";
            // line 81
            if (((($__internal_compile_10 = (($__internal_compile_11 = ($context["data"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["search"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as_map"] ?? null) : null) == 0)) {
                // line 82
                echo "      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform";
                // line 85
                echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
                echo "\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
      </script>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/search/display_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 85,  159 => 82,  157 => 81,  153 => 79,  151 => 78,  146 => 75,  140 => 72,  137 => 71,  134 => 70,  128 => 67,  125 => 66,  122 => 65,  119 => 64,  113 => 62,  111 => 61,  107 => 59,  101 => 57,  98 => 56,  92 => 53,  86 => 51,  84 => 50,  78 => 48,  76 => 47,  64 => 44,  58 => 43,  55 => 42,  53 => 41,  50 => 39,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set is_ajax = data['searchform_id'] is defined and data['searchform_id'] is not null %}
{% set fluid_search = fluid_search|default(true) %}
{% if not is_ajax %}
   <div class=\"ajax-container search-display-data\">
{% endif %}

{# Remove namespace separators for use in HTML attributes #}
{% set normalized_itemtype = itemtype|replace({'\\\\': ''}) %}

<form id=\"massform{{ normalized_itemtype }}\" method=\"get\" action=\"{{ path('front/massiveaction.php') }}\"
      data-search-itemtype=\"{{ data['itemtype'] }}\" data-start=\"{{ start }}\" data-count=\"{{ count }}\" data-limit=\"{{ limit }}\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         {% if data['display_type'] == constant('Search::GLOBAL_SEARCH') %}
            <h2>{{ itemtype|itemtype_name }}</h2>

            {% if count > (start + constant('Search::GLOBAL_DISPLAY_COUNT')) %}
               <a href=\"{{ href }}\">
                  <i class=\"far fa-eye\"></i>
                  {{ __('View all') }}
               </a>
            {% endif %}
         {% else %}
            {{ include('components/search/controls.html.twig') }}
         {% endif %}
      </div>

      {% if data['search']['as_map'] == 0 %}
         {{ include('components/search/table.html.twig') }}
      {% endif %}
      {% if count > 0 %}
         {% if data['display_type'] != constant('Search::GLOBAL_SEARCH') and data['search']['as_map'] == 0 %}
            <div class=\"card-footer search-footer\">
               {{ include('components/pager.html.twig') }}
            </div>
         {% endif %}
      {% elseif data['search']['as_map'] == 1 %}
         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            {{ __('No item found') }}
         </div>
      {% endif %}
   </div>
</form>

{% if not is_ajax %}
   </div>

   {% if data['search']['as_map'] == 0 %}
      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform{{ normalized_itemtype }}\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
      </script>
   {% endif %}
{% endif %}
", "components/search/display_data.html.twig", "/var/www/html/glpi/templates/components/search/display_data.html.twig");
    }
}