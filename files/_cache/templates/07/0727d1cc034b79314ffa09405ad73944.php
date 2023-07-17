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
class __TwigTemplate_05fb80d82e8df26f37131d8c6002f69b extends Template
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
        echo "   ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 55)) {
            // line 56
            echo "   ";
        }
        // line 57
        echo "         ";
        echo twig_include($this->env, $context, "components/itilobject/sla.php");
        echo "

<div id=\"itil-object-container\" class=\" right\">
   ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 60) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 61
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
   ";
        }
        // line 63
        echo "  <div class=\"itil-right-side col-12 ";
        echo twig_escape_filter($this->env, ($context["right_side_cls"] ?? null), "html", null, true);
        echo " mt-0 mt-md-n1 card-footer p-0 rounded-0\" style=\"width:100%\">
         ";
        // line 64
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 64)) {
            // line 65
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
         ";
        }
        // line 67
        echo "         ";
        echo twig_include($this->env, $context, "components/itilobject/fields_panel.html.twig");
        echo "
         ";
        // line 68
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 68)) {
            // line 69
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
         ";
        }
        // line 71
        echo "      </div>
   <div class=\"row d-flex flex-column alin-items-stretch itil-object\">
      ";
        // line 73
        $context["fl_direction"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 73)) ? ("flex-column") : ("flex-column-reverse"));
        // line 74
        echo "      <div class=\"itil-left-side col-12 ";
        echo twig_escape_filter($this->env, ($context["left_side_cls"] ?? null), "html", null, true);
        echo " order-last order-md-first pt-2 pe-2 pe-md-4 d-flex ";
        echo twig_escape_filter($this->env, ($context["fl_direction"] ?? null), "html", null, true);
        echo " border-top border-4\" style=\"width:100%\" >
         ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 75)) {
            // line 76
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            echo "
         ";
        } else {
            // line 78
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            echo "
         ";
        }
        // line 80
        echo "      </div>
    
   </div>

   ";
        // line 84
        if ( !(($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_preview"] ?? null) : null)) {
            // line 85
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/footer.html.twig");
            echo "
   ";
        }
        // line 87
        echo "
   ";
        // line 88
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 88) &&  !(($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_preview"] ?? null) : null))) {
            // line 89
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
   ";
        }
        // line 91
        echo "
</div>

";
        // line 94
        if (($context["ticket_ticket"] ?? null)) {
            // line 95
            echo "   ";
            // line 96
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getFormURL", [], "method", false, false, false, 96), "html", null, true);
            echo "\" class=\"d-none\" id=\"linked_tickets_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"purge\" value=\"1\" />
      <input type=\"hidden\" name=\"tickets_id\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            echo "\" />
   </form>
";
        }
        // line 102
        echo "
";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "requester", 1 => "observer", 2 => "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 105
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 105), "html", null, true);
            echo "\" class=\"d-none\" id=\"addme_as_";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actortype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
<form name=\"massaction_";
        // line 112
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" id=\"massaction_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" method=\"post\"
      action=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        echo "\" data-submit-once>
   <div id=\"massive_container_";
        // line 114
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-md').addClass(\"";
        // line 130
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-right-side').removeClass(\"";
        // line 131
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
        // line 140
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass('col-md');
         \$('.itil-right-side').removeClass(\"";
        // line 144
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
        return array (  326 => 144,  322 => 143,  315 => 141,  309 => 140,  295 => 131,  291 => 130,  284 => 128,  278 => 127,  271 => 123,  260 => 115,  256 => 114,  252 => 113,  246 => 112,  243 => 111,  234 => 108,  229 => 106,  220 => 105,  216 => 104,  213 => 102,  207 => 99,  202 => 97,  195 => 96,  193 => 95,  191 => 94,  186 => 91,  180 => 89,  178 => 88,  175 => 87,  169 => 85,  167 => 84,  161 => 80,  155 => 78,  149 => 76,  147 => 75,  140 => 74,  138 => 73,  134 => 71,  128 => 69,  126 => 68,  121 => 67,  115 => 65,  113 => 64,  108 => 63,  102 => 61,  100 => 60,  93 => 57,  90 => 56,  87 => 55,  83 => 53,  80 => 52,  78 => 51,  76 => 50,  74 => 49,  71 => 48,  69 => 47,  67 => 46,  64 => 45,  62 => 44,  60 => 43,  57 => 42,  55 => 41,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/layout.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\layout.html.twig");
    }
}
