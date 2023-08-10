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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_b09ff39e8554db6fcfbdd7417672ae46 extends Template
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
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = ((($context["is_expanded"] ?? null)) ? (($context["right_expanded_cls"] ?? null)) : ("col-md"));
        // line 36
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 37
        if (($context["is_expanded"] ?? null)) {
            // line 38
            echo "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 39
            echo "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 40
            echo "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 42
        echo "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
   <div class=\"form-buttons ";
        // line 45
        echo twig_escape_filter($this->env, ($context["form_btns_cls"] ?? null), "html", null, true);
        echo " d-flex ms-auto ms-md-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-md-block position-absolute top-0 start-0\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, __("Toggle panels width"), "html", null, true);
        echo "\">
           
         </span>

         ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 51)) {
            // line 52
            echo "            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                  title=\"";
            // line 53
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "\">
               <i class=\"fas fa-plus\"></i>
               <span class=\"d-none d-md-block\">";
            // line 55
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
            </button>
         ";
        } else {
            // line 58
            echo "
            <div class=\"btn-group\" role=\"group\">
               ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 60)) {
                // line 61
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 61)) {
                    // line 62
                    echo "                     <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                           title=\"";
                    // line 63
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "\">
                        <i class=\"fas fa-trash-restore-alt\"></i>
                        <span class=\"d-none d-md-block\">";
                    // line 65
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "</span>
                     </button>

                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                           title=\"";
                    // line 69
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                           onclick=\"return confirm('";
                    // line 70
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span class=\"d-none d-md-block\">";
                    // line 72
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 75
                    echo "                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                           title=\"";
                    // line 76
                    echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                    echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  ";
                }
                // line 81
                echo "               ";
            }
            // line 82
            echo "
               ";
            // line 83
            if (($context["canupdate"] ?? null)) {
                // line 84
                echo "                  ";
                echo twig_include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 86
                echo "
               ";
            }
            // line 88
            echo "
               ";
            // line 89
            $context["is_locked"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 89) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 90
            echo "               ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 91
            echo "               ";
            if (($context["display_save_btn"] ?? null)) {
                // line 92
                echo "                  <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                        title=\"";
                // line 93
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "\">
                     <i class=\"far fa-save\"></i>
                     <span class=\"d-none d-md-block\">";
                // line 95
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>
               ";
            }
            // line 98
            echo "            </div>

         ";
        }
        // line 101
        echo "      </div>
      <div class=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["timeline_btns_cls"] ?? null), "html", null, true);
        echo " ps-3 timeline-buttons\">
         ";
        // line 103
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 103)) {
            // line 104
            echo "            ";
            $context["default_action_data"] = twig_first($this->env, ($context["timeline_itemtypes"] ?? null));
            // line 105
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 105) && (($context["default_action_data"] ?? null) != false))) {
                // line 106
                echo "               ";
                if ((twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)) > 1)) {
                    // line 107
                    echo "                  <div class=\"btn-group me-2 main-actions\" style=\"";
                    echo (((($context["load_kb_sol"] ?? null) > 0)) ? ("display:none;") : (""));
                    echo "\">
               ";
                } else {
                    // line 109
                    echo "                  ";
                    // line 110
                    echo "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 112
                echo "                  <button class=\"btn btn-primary answer-action\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 112), "html", null, true);
                echo "-block\">
                     <i class=\"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 113), "html", null, true);
                echo "\"></i>
                     <span>";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 114), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 117
                $context["main_actions_itemtypes"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 117) || (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 117) != true)); });
                // line 118
                echo "                  ";
                if ((twig_length_filter($this->env, ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 119
                    echo "                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"visually-hidden\">";
                    // line 120
                    echo twig_escape_filter($this->env, __("View other actions"), "html", null, true);
                    echo "</span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["main_actions_itemtypes"] ?? null));
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
                    foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                        // line 124
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124) > 0)) {
                            // line 125
                            echo "                            <li><a class=\"dropdown-item action-";
                            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                            echo " answer-action\" href=\"#\"
                                data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                            // line 126
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 126), "html", null, true);
                            echo "-block\">
                                <i class=\"";
                            // line 127
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 127), "html", null, true);
                            echo "\"></i>
                                <span>";
                            // line 128
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 128), "html", null, true);
                            echo "</span>
                            </a></li>
                            ";
                        }
                        // line 131
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "                    </ul>
                  ";
                }
                // line 134
                echo "               </div>
            ";
            }
            // line 136
            echo "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 138
            echo ((array_key_exists("legacy_timeline_actions", $context)) ? (_twig_default_filter(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            echo "
            </ul>
            ";
            // line 140
            echo twig_include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
            echo "
         ";
        }
        // line 142
        echo "     </div>

      
   </div>
</div>

";
        // line 148
        $context["openfollowup"] = (((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 148) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false));
        // line 149
        $context["timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 150
        echo "
<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();

      // hide answer button after clicking on it
      \$(this).closest(\".main-actions\").hide();
   });

   // when close button of new answer block is clicked, show again the new answer button
   \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
      \$(\"#itil-footer .main-actions\").show();
   });

   var scrollToTimelineStart = function() {
      // small delay to be sure all content is loaded
      // otherwise, height of answer html may not be taken in account by document height
      setTimeout(() => {
         // scroll body to ensure we are at bottom (useful for responsive display)
         \$('html, body').animate({
            scrollTop: ";
        // line 171
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "\$(document).height()
         }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
               scrollTop: ";
        // line 176
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "timeline.prop('scrollHeight')
            }, 'slow');
         });
      }, 200);
   };

   ";
        // line 182
        if (($context["openfollowup"] ?? null)) {
            // line 183
            echo "      // trigger for reopen, show followup form in timeline
      var myCollapse = document.getElementById('new-ITILFollowup-block')
      var bsCollapse = new bootstrap.Collapse(myCollapse);
      bsCollapse.show();

      scrollToTimelineStart();
   ";
        }
        // line 190
        echo "});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 190,  374 => 183,  372 => 182,  363 => 176,  355 => 171,  332 => 150,  330 => 149,  328 => 148,  320 => 142,  315 => 140,  310 => 138,  306 => 136,  302 => 134,  298 => 132,  284 => 131,  278 => 128,  274 => 127,  270 => 126,  265 => 125,  262 => 124,  245 => 123,  239 => 120,  236 => 119,  233 => 118,  231 => 117,  225 => 114,  221 => 113,  216 => 112,  212 => 110,  210 => 109,  204 => 107,  201 => 106,  198 => 105,  195 => 104,  193 => 103,  189 => 102,  186 => 101,  181 => 98,  175 => 95,  170 => 93,  167 => 92,  164 => 91,  161 => 90,  159 => 89,  156 => 88,  152 => 86,  149 => 84,  147 => 83,  144 => 82,  141 => 81,  133 => 76,  130 => 75,  124 => 72,  119 => 70,  115 => 69,  108 => 65,  103 => 63,  100 => 62,  97 => 61,  95 => 60,  91 => 58,  85 => 55,  80 => 53,  77 => 52,  75 => 51,  68 => 47,  63 => 45,  58 => 42,  54 => 40,  51 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/footer.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\footer.html.twig");
    }
}
