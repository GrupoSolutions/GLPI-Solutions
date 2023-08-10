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

/* components/itilobject/linked_tickets.html.twig */
class __TwigTemplate_616d058b9ab9f279e6e87066b0501b41 extends Template
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
<input type=\"hidden\" name=\"_link[tickets_id_1]\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" />

";
        // line 36
        $context["linked_tickets"] = twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [0 => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)], "method", false, false, false, 36);
        // line 37
        if (twig_length_filter($this->env, ($context["linked_tickets"] ?? null))) {
            // line 38
            echo "<div class=\"card\">
   <div class=\"list-group list-group-flush list-group-hoverable\">
      ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["linked_tickets"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 41
                echo "      ";
                $context["new_ticket"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Ticket", (($__internal_compile_2 = $context["linked"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tickets_id"] ?? null) : null));
                // line 42
                echo "      <div class=\"list-group-item\">
         <div class=\"row\">
            <div class=\"col-auto\">
               ";
                // line 45
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::getLinkName", [0 => (($__internal_compile_3 =                 // line 46
$context["linked"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["link"] ?? null) : null), 1 => twig_get_attribute($this->env, $this->source,                 // line 47
$context["linked"], "tickets_id_1", [], "array", true, true, false, 47), 2 => true]);
                // line 49
                echo "
            </div>
            <div class=\"col text-truncate\">
               <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_4 = $context["linked"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)), "html", null, true);
                echo "\" class=\"col-9 overflow-hidden text-nowrap\">
                  ";
                // line 53
                echo twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "getStatusIcon", [0 => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null)], "method", false, false, false, 53);
                echo "
                  <span title=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null)), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\">
                     ";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null)), "html", null, true);
                echo "
                  </span>
                  (";
                // line 57
                echo twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo ")
               </a>
            </div>

            ";
                // line 61
                if (($context["canupdate"] ?? null)) {
                    // line 62
                    echo "               <div class=\"col-auto\">
                  <button type=\"submit\"
                          form=\"linked_tickets_";
                    // line 64
                    echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
                    echo "\"
                          name=\"id\"
                          value=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"
                          class=\"btn btn-sm btn-ghost-danger\"
                          title=\"";
                    // line 68
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                          data-bs-toggle=\"tooltip\">
                     <i class=\"fas fa-unlink\"></i>
                  </button>
               </div>
            ";
                }
                // line 74
                echo "         </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['linked'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "   </div>
</div>
";
        }
        // line 80
        echo "
";
        // line 81
        if ((($context["canupdate"] ?? null) &&  !(($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["template_preview"] ?? null) : null))) {
            // line 82
            echo "   ";
            $context["has_pending_link"] = (twig_length_filter($this->env, (($__internal_compile_10 = (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_link"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["tickets_id_2"] ?? null) : null)) > 0);
            // line 83
            echo "   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary ";
            // line 84
            echo ((($context["has_pending_link"] ?? null)) ? ("d-none") : (""));
            echo "\" type=\"button\"
               data-bs-toggle=\"collapse\" data-bs-target=\"#link_ticket_dropdowns\"
               aria-expanded=\"false\" aria-controls=\"link_ticket_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 88
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "</span>
      </button>

      <span class=\"collapse ";
            // line 91
            echo ((($context["has_pending_link"] ?? null)) ? ("show") : (""));
            echo "\" id=\"link_ticket_dropdowns\">
         ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "dropdownLinks", [0 => "_link[link]", 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 94
($context["params"] ?? null), "_link", [], "array", false, true, false, 94), "link", [], "array", true, true, false, 94) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 94)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["link"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 94)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["link"] ?? null) : null)) : (""))], "method", false, false, false, 92), "html", null, true);
            // line 95
            echo "

         ";
            // line 97
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown", [0 => ["name" => "_link[tickets_id_2]", "used" => [0 => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)], "displaywith" => [0 => "id"], "display" => false, "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 102
($context["params"] ?? null), "_link", [], "array", false, true, false, 102), "tickets_id_2", [], "array", true, true, false, 102) &&  !(null === (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 102)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["tickets_id_2"] ?? null) : null)))) ? ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 102)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tickets_id_2"] ?? null) : null)) : (""))]], "method", false, false, false, 97);
            // line 103
            echo "
      </span>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/linked_tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 103,  173 => 102,  172 => 99,  171 => 97,  167 => 95,  165 => 94,  164 => 92,  160 => 91,  154 => 88,  147 => 84,  144 => 83,  141 => 82,  139 => 81,  136 => 80,  131 => 77,  123 => 74,  114 => 68,  109 => 66,  104 => 64,  100 => 62,  98 => 61,  91 => 57,  86 => 55,  82 => 54,  78 => 53,  74 => 52,  69 => 49,  67 => 47,  66 => 46,  65 => 45,  60 => 42,  57 => 41,  53 => 40,  49 => 38,  47 => 37,  45 => 36,  40 => 34,  37 => 33,);
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

<input type=\"hidden\" name=\"_link[tickets_id_1]\" value=\"{{ item.fields['id'] }}\" />

{% set linked_tickets = ticket_ticket.getLinkedTicketsTo(item.fields['id']) %}
{% if linked_tickets|length %}
<div class=\"card\">
   <div class=\"list-group list-group-flush list-group-hoverable\">
      {% for id, linked in linked_tickets %}
      {% set new_ticket = get_item('Ticket', linked['tickets_id']) %}
      <div class=\"list-group-item\">
         <div class=\"row\">
            <div class=\"col-auto\">
               {{ call('Ticket_Ticket::getLinkName', [
                  linked['link'],
                  linked['tickets_id_1'] is defined,
                  true
               ])|raw }}
            </div>
            <div class=\"col text-truncate\">
               <a href=\"{{ 'Ticket'|itemtype_form_path(linked['tickets_id']) }}\" class=\"col-9 overflow-hidden text-nowrap\">
                  {{ new_ticket.getStatusIcon(new_ticket.fields['status'])|raw }}
                  <span title=\"{{ new_ticket.fields['name']|verbatim_value }}\" data-bs-toggle=\"tooltip\">
                     {{ new_ticket.fields['name']|verbatim_value }}
                  </span>
                  ({{ new_ticket.fields['id'] }})
               </a>
            </div>

            {% if canupdate %}
               <div class=\"col-auto\">
                  <button type=\"submit\"
                          form=\"linked_tickets_{{ main_rand }}\"
                          name=\"id\"
                          value=\"{{ id }}\"
                          class=\"btn btn-sm btn-ghost-danger\"
                          title=\"{{ _x('button', 'Delete permanently') }}\"
                          data-bs-toggle=\"tooltip\">
                     <i class=\"fas fa-unlink\"></i>
                  </button>
               </div>
            {% endif %}
         </div>
      </div>
      {% endfor %}
   </div>
</div>
{% endif %}

{% if canupdate and not params['template_preview'] %}
   {% set has_pending_link = params['_link']['tickets_id_2']|length > 0 %}
   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary {{ has_pending_link ? 'd-none' : '' }}\" type=\"button\"
               data-bs-toggle=\"collapse\" data-bs-target=\"#link_ticket_dropdowns\"
               aria-expanded=\"false\" aria-controls=\"link_ticket_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"fas fa-plus\"></i>
         <span>{{ __('Add') }}</span>
      </button>

      <span class=\"collapse {{ has_pending_link ? \"show\" : \"\" }}\" id=\"link_ticket_dropdowns\">
         {{ ticket_ticket.dropdownLinks(
            '_link[link]',
            params['_link']['link'] ?? ''
         ) }}

         {{ item.dropdown({
            'name': '_link[tickets_id_2]',
            'used': [item.fields['id']],
            'displaywith': ['id'],
            'display': false,
            'value': params['_link']['tickets_id_2'] ?? '',
         })|raw }}
      </span>
   </div>
{% endif %}
", "components/itilobject/linked_tickets.html.twig", "/var/www/html/glpi/templates/components/itilobject/linked_tickets.html.twig");
    }
}
