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

/* layout/parts/saved_searches_list.html.twig */
class __TwigTemplate_a71a58a498792306b8e2614a59271557 extends Template
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
        if ((twig_length_filter($this->env, ($context["saved_searches"] ?? null)) == 0)) {
            // line 35
            echo "   <div class=\"alert alert-info\" role=\"alert\">
      ";
            // line 36
            echo twig_escape_filter($this->env, __("You have not recorded any saved searches yet"), "html", null, true);
            echo "
   </div>
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["saved_searches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 41
            echo "   <div class=\"savedsearches-item list-group-item search-line d-flex align-items-center pe-1 ";
            echo (((($context["active"] ?? null) == (($__internal_compile_0 = $context["search"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null))) ? ("active") : (""));
            echo "\"
         data-id=\"";
            // line 42
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["search"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            echo "\">
      <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("SavedSearch"), "html", null, true);
            echo "?action=load&amp;id=";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["search"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\"
         class=\"d-block saved-searches-link text-truncate\">
         ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_3 = $context["search"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null)), "html", null, true);
            echo "
      </a>
      <div class=\"";
            // line 47
            echo ((((($__internal_compile_4 = $context["search"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_default"] ?? null) : null) > 0)) ? ("") : ("list-group-item-actions"));
            echo " ms-auto default-ctrl\">
         <i class=\"";
            // line 48
            echo ((((($__internal_compile_5 = $context["search"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_default"] ?? null) : null) > 0)) ? ("fas") : ("far"));
            echo " fa-star fa-xs mark-default me-1\"
            title=\"";
            // line 49
            echo twig_escape_filter($this->env, ((((($__internal_compile_6 = $context["search"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_default"] ?? null) : null) > 0)) ? (__("Default search")) : (__("mark as default"))), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            role=\"button\"></i>
      </div>
      <div class=\"d-flex flex-nowrap align-items-center\">
         ";
            // line 54
            if (((($__internal_compile_7 = $context["search"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_private"] ?? null) : null) == 1)) {
                // line 55
                echo "         <i class=\"ti ti-lock fa-xs text-muted me-1\" title=\"";
                echo twig_escape_filter($this->env, __("private"), "html", null, true);
                echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"></i>
         ";
            }
            // line 58
            echo "         <span class=\"badge\">
            ";
            // line 59
            echo (($__internal_compile_8 = $context["search"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["count"] ?? null) : null);
            echo "
         </span>
      </div>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "layout/parts/saved_searches_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 59,  104 => 58,  97 => 55,  95 => 54,  87 => 49,  83 => 48,  79 => 47,  74 => 45,  67 => 43,  63 => 42,  58 => 41,  54 => 40,  51 => 39,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% if saved_searches|length == 0 %}
   <div class=\"alert alert-info\" role=\"alert\">
      {{ __('You have not recorded any saved searches yet') }}
   </div>
{% endif %}

{% for search in saved_searches %}
   <div class=\"savedsearches-item list-group-item search-line d-flex align-items-center pe-1 {{ active == search['id'] ? 'active' : '' }}\"
         data-id=\"{{ search['id'] }}\">
      <a href=\"{{ 'SavedSearch'|itemtype_search_path }}?action=load&amp;id={{ search['id'] }}\"
         class=\"d-block saved-searches-link text-truncate\">
         {{ search['name']|verbatim_value }}
      </a>
      <div class=\"{{ search['is_default'] > 0 ? '' : 'list-group-item-actions' }} ms-auto default-ctrl\">
         <i class=\"{{ search['is_default'] > 0 ? 'fas' : 'far' }} fa-star fa-xs mark-default me-1\"
            title=\"{{ search['is_default'] > 0 ? __('Default search') : __('mark as default') }}\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            role=\"button\"></i>
      </div>
      <div class=\"d-flex flex-nowrap align-items-center\">
         {% if search['is_private'] == 1 %}
         <i class=\"ti ti-lock fa-xs text-muted me-1\" title=\"{{ __('private') }}\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"></i>
         {% endif %}
         <span class=\"badge\">
            {{ search['count']|raw }}
         </span>
      </div>
   </div>
{% endfor %}
", "layout/parts/saved_searches_list.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\saved_searches_list.html.twig");
    }
}
