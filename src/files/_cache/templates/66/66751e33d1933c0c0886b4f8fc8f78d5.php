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

/* components/itilobject/layout.html.twig */
class __TwigTemplate_6be3c71fb53f3f8765091140900dca6e extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 36
        echo "
";
        // line 37
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 38
        $context["is_collapsed"] = ((($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["collapsed"] ?? null) : null) == "true");
        // line 39
        $context["is_expanded"] = ((($__internal_compile_1 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expanded"] ?? null) : null) == "true");
        // line 40
        $context["collapsed_cls"] = ((($context["is_collapsed"] ?? null)) ? ("right-collapsed") : (""));
        // line 41
        $context["expanded_cls"] = (((($context["is_expanded"] ?? null) == "true")) ? ("right-expanded") : (""));
        // line 42
        echo "
";
        // line 43
        $context["left_regular_cls"] = "col-xl-8 col-md-10";
        // line 44
        $context["right_regular_cls"] = "col-xl-4 col-md-2";
        // line 45
        echo "
";
        // line 46
        $context["left_expanded_cls"] = "col-xxl-4 col-md-4";
        // line 47
        $context["right_expanded_cls"] = "col-xxl-8 col-md-8";
        // line 48
        echo "
";
        // line 49
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 50
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 51
        if (($context["is_expanded"] ?? null)) {
            // line 52
            echo "    ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 53
            echo "    ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 55
        echo "

<div id=\"itil-object-container\" class=\" right-collapsed\">
   ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 58) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 59
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
   ";
        }
        // line 61
        echo "
   <div class=\"row d-flex flex-column alin-items-stretch itil-object\">
      ";
        // line 63
        $context["fl_direction"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 63)) ? ("flex-column") : ("flex-column-reverse"));
        // line 64
        echo "      <div class=\"itil-left-side col-12 ";
        echo twig_escape_filter($this->env, ($context["left_side_cls"] ?? null), "html", null, true);
        echo " order-last order-md-first pt-2 pe-2 pe-md-4 d-flex ";
        echo twig_escape_filter($this->env, ($context["fl_direction"] ?? null), "html", null, true);
        echo " border-top border-4\">
         ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) {
            // line 66
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            echo "
         ";
        } else {
            // line 68
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            echo "
         ";
        }
        // line 70
        echo "      </div>
      <div class=\"itil-right-side col-12 ";
        // line 71
        echo twig_escape_filter($this->env, ($context["right_side_cls"] ?? null), "html", null, true);
        echo " mt-0 mt-md-n1 card-footer p-0 rounded-0\">
         ";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 72)) {
            // line 73
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
         ";
        }
        // line 75
        echo "         ";
        echo twig_include($this->env, $context, "components/itilobject/fields_panel.html.twig");
        echo "
         ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 76)) {
            // line 77
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
         ";
        }
        // line 79
        echo "      </div>
   </div>

   ";
        // line 82
        if ( !(($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_preview"] ?? null) : null)) {
            // line 83
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/footer.html.twig");
            echo "
   ";
        }
        // line 85
        echo "
   ";
        // line 86
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 86) &&  !(($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_preview"] ?? null) : null))) {
            // line 87
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
   ";
        }
        // line 89
        echo "
</div>

";
        // line 92
        if (($context["ticket_ticket"] ?? null)) {
            // line 93
            echo "   ";
            // line 94
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getFormURL", [], "method", false, false, false, 94), "html", null, true);
            echo "\" class=\"d-none\" id=\"linked_tickets_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"purge\" value=\"1\" />
      <input type=\"hidden\" name=\"tickets_id\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            echo "\" />
   </form>
";
        }
        // line 100
        echo "
";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "requester", 1 => "observer", 2 => "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 103
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 103), "html", null, true);
            echo "\" class=\"d-none\" id=\"addme_as_";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actortype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
<form name=\"massaction_";
        // line 110
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" id=\"massaction_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" method=\"post\"
      action=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        echo "\" data-submit-once>
   <div id=\"massive_container_";
        // line 112
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 126
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-md').addClass(\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-right-side').removeClass(\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
         \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
      } else {
         // Decrease right-side panel
         \$('#itil-object-container').removeClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 139
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass('col-md');
         \$('.itil-right-side').removeClass(\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
         \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$('#itil-object-container').addClass('right-collapsed');

        // Hide all accordion item
        \$('#itil-data .accordion-collapse').removeClass('show');
        \$('#itil-data .accordion-button').addClass('collapsed');

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$('#itil-object-container').removeClass('right-collapsed');
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById('itil-data')
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        saveFieldPanelState();
    });
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        saveFieldPanelState();
    });

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
        itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

        \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
                'itil_layout': itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$('#' + item_id).addClass('show');
            } else {
                \$('#' + item_id).removeClass('show');
            }
        });
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 142,  315 => 141,  308 => 139,  302 => 138,  288 => 129,  284 => 128,  277 => 126,  271 => 125,  264 => 121,  253 => 113,  249 => 112,  245 => 111,  239 => 110,  236 => 109,  227 => 106,  222 => 104,  213 => 103,  209 => 102,  206 => 100,  200 => 97,  195 => 95,  188 => 94,  186 => 93,  184 => 92,  179 => 89,  173 => 87,  171 => 86,  168 => 85,  162 => 83,  160 => 82,  155 => 79,  149 => 77,  147 => 76,  142 => 75,  136 => 73,  134 => 72,  130 => 71,  127 => 70,  121 => 68,  115 => 66,  113 => 65,  106 => 64,  104 => 63,  100 => 61,  94 => 59,  92 => 58,  87 => 55,  83 => 53,  80 => 52,  78 => 51,  76 => 50,  74 => 49,  71 => 48,  69 => 47,  67 => 46,  64 => 45,  62 => 44,  60 => 43,  57 => 42,  55 => 41,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set rand = random() %}
{% set main_rand = rand %}

{% set itil_layout = user_pref('itil_layout', true) %}
{% set is_collapsed = itil_layout['collapsed'] == \"true\" %}
{% set is_expanded  = itil_layout['expanded'] == \"true\" %}
{% set collapsed_cls = (is_collapsed ? \"right-collapsed\" : \"\") %}
{% set expanded_cls  = (is_expanded == \"true\" ? \"right-expanded\" : \"\") %}

{% set left_regular_cls = \"col-xl-8 col-md-10\" %}
{% set right_regular_cls = \"col-xl-4 col-md-2\" %}

{% set left_expanded_cls = \"col-xxl-4 col-md-4\" %}
{% set right_expanded_cls = \"col-xxl-8 col-md-8\" %}

{% set left_side_cls = left_regular_cls %}
{% set right_side_cls = right_regular_cls %}
{% if is_expanded %}
    {% set left_side_cls = left_expanded_cls %}
    {% set right_side_cls = right_expanded_cls %}
{% endif %}


<div id=\"itil-object-container\" class=\" right-collapsed\">
   {% if item.isNewItem and not params['template_preview'] %}
      {{ include('components/itilobject/mainform_open.html.twig') }}
   {% endif %}

   <div class=\"row d-flex flex-column alin-items-stretch itil-object\">
      {% set fl_direction = (item.isNewItem ? 'flex-column' : 'flex-column-reverse') %}
      <div class=\"itil-left-side col-12 {{ left_side_cls }} order-last order-md-first pt-2 pe-2 pe-md-4 d-flex {{ fl_direction }} border-top border-4\">
         {% if item.isNewItem() %}
            {{ include('components/itilobject/timeline/new_form.html.twig') }}
         {% else %}
            {{ include('components/itilobject/timeline/timeline.html.twig') }}
         {% endif %}
      </div>
      <div class=\"itil-right-side col-12 {{ right_side_cls }} mt-0 mt-md-n1 card-footer p-0 rounded-0\">
         {% if not item.isNewItem() %}
            {{ include('components/itilobject/mainform_open.html.twig') }}
         {% endif %}
         {{ include('components/itilobject/fields_panel.html.twig') }}
         {% if not item.isNewItem() %}
            {{ include('components/itilobject/mainform_close.html.twig') }}
         {% endif %}
      </div>
   </div>

   {% if not params['template_preview'] %}
      {{ include('components/itilobject/footer.html.twig') }}
   {% endif %}

   {% if not item.isNewItem() and not params['template_preview'] %}
      {{ include('components/itilobject/mainform_close.html.twig') }}
   {% endif %}

</div>

{% if ticket_ticket %}
   {# Common form fields for ticket_ticket purge action #}
   <form method=\"POST\" action=\"{{ ticket_ticket.getFormURL() }}\" class=\"d-none\" id=\"linked_tickets_{{ main_rand }}\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
      <input type=\"hidden\" name=\"purge\" value=\"1\" />
      <input type=\"hidden\" name=\"tickets_id\" value=\"{{ item.fields['id'] }}\" />
   </form>
{% endif %}

{# Common form fields for \"addme_as_actor\" action #}
{% for actortype in ['requester', 'observer', 'assign'] %}
   <form method=\"POST\" action=\"{{ item.getFormURL() }}\" class=\"d-none\" id=\"addme_as_{{ actortype }}_{{ main_rand }}\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"{{ actortype }}\" />
   </form>
{% endfor %}

<form name=\"massaction_{{ rand }}\" id=\"massaction_{{ rand }}\" method=\"post\"
      action=\"{{ path('/front/massiveaction.php') }}\" data-submit-once>
   <div id=\"massive_container_{{ rand }}\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"{{ left_regular_cls }}\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"{{ left_regular_cls }}\").addClass(\"{{ left_expanded_cls }}\");
         \$('.itil-footer .timeline-buttons').removeClass(\"{{ left_regular_cls }}\").addClass(\"{{ left_expanded_cls }}\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-md').addClass(\"{{ right_expanded_cls }}\");
         \$('.itil-right-side').removeClass(\"{{ right_regular_cls }}\").addClass(\"{{ right_expanded_cls }}\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
         \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
      } else {
         // Decrease right-side panel
         \$('#itil-object-container').removeClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"{{ left_expanded_cls }}\").addClass(\"{{ left_regular_cls }}\");
         \$('.itil-footer .timeline-buttons').removeClass(\"{{ left_expanded_cls }}\").addClass(\"{{ left_regular_cls }}\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"{{ right_expanded_cls }}\").addClass('col-md');
         \$('.itil-right-side').removeClass(\"{{ right_expanded_cls }}\").addClass(\"{{ right_regular_cls }}\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
         \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$('#itil-object-container').addClass('right-collapsed');

        // Hide all accordion item
        \$('#itil-data .accordion-collapse').removeClass('show');
        \$('#itil-data .accordion-button').addClass('collapsed');

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$('#itil-object-container').removeClass('right-collapsed');
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById('itil-data')
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        saveFieldPanelState();
    });
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        saveFieldPanelState();
    });

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
        itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

        \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
                'itil_layout': itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$('#' + item_id).addClass('show');
            } else {
                \$('#' + item_id).removeClass('show');
            }
        });
    }
});
</script>
", "components/itilobject/layout.html.twig", "C:\\wamp64\\www\\glpi05\\templates\\components\\itilobject\\layout.html.twig");
    }
}
