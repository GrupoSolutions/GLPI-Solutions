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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_1cc8555b74d300743e27145dccf2a373 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        echo "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\" style=\"display:flex\">
   ";
        // line 46
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        echo "   <div class=\"accordion-item\" style=\"width:100%\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button collapsed \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 52);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 55), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\"  class=\"accordion-collapse  collapse ";
        // line 59
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div  class=\"accordion-body row m-0 mt-n2\" style=\"width:100%\">

            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 64
        if (Session::isMultiEntitiesMode()) {
            // line 65
            echo "               

               ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 67)) {
                // line 68
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["is_recursive"] ?? null) : null), __("Child entities"),                 // line 72
($context["field_options"] ?? null)], 68, $context, $this->getSourceContext());
                // line 73
                echo "
               ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "

            ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 78) != "Ticket")) {
            // line 79
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 81
($context["item"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 83
($context["field_options"] ?? null)], 79, $context, $this->getSourceContext());
            // line 84
            echo "
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 87)) {
            // line 88
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 90
($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["solvedate"] ?? null) : null), __("Resolution date"),             // line 92
($context["field_options"] ?? null)], 88, $context, $this->getSourceContext());
            // line 93
            echo "
            ";
        }
        // line 95
        echo "
            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 96)) {
            // line 97
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["closedate"] ?? null) : null), __("Close date"),             // line 101
($context["field_options"] ?? null)], 97, $context, $this->getSourceContext());
            // line 102
            echo "
            ";
        }
        // line 104
        echo "
            ";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 105) == "Ticket")) {
            // line 106
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 110
($context["field_options"] ?? null));
            // line 111
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 111)) {
                // line 112
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 113
                echo "               ";
            } else {
                // line 114
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 115
                echo "               ";
            }
            // line 116
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,             // line 118
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => ($context["type_params"] ?? null)], "method", false, false, false, 118), _n("Type", "Types", 1),             // line 120
($context["field_options"] ?? null)], 116, $context, $this->getSourceContext());
            // line 121
            echo "
            ";
        }
        // line 123
        echo "
            ";
        // line 124
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "disabled" =>  !(        // line 126
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 128
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 128)) {
            // line 129
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 132
            echo "            ";
        }
        // line 133
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 133) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "itilcategories_id"], "method", false, false, false, 133)) && ((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["itilcategories_id"] ?? null) : null) > 0))) {
            // line 134
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 137
            echo "            ";
        }
        // line 138
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 138) == "Ticket")) {
            // line 139
            echo "               ";
            if (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
                // line 140
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 141
                echo "               ";
            } elseif (((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 141)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
                // line 142
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 143
                echo "               ";
            }
            // line 144
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 144) == "Problem")) {
            // line 145
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 146
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 146) == "Change")) {
            // line 147
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 148
            echo "            ";
        }
        // line 149
        echo "            <span id=\"category_block_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 150
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,         // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null), _n("Departamento", "Categories", 1),         // line 155
($context["cat_params"] ?? null), twig_array_merge(        // line 156
($context["field_options"] ?? null), [])], 150, $context, $this->getSourceContext());
        // line 158
        echo "
            </span>

            ";
        // line 161
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "




            ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 166) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 166) == "Ticket"))) {
            // line 167
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 170
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 170)) ? (_twig_default_filter((($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 172
($context["field_options"] ?? null), ["entity" => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 173
($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 167, $context, $this->getSourceContext());
            // line 177
            echo "
            ";
        }
        // line 179
        echo "

            ";
        // line 181
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 188
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 188) || ((($__internal_compile_15 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 189
        echo "   <div class=\"accordion-item\" style=\"width:100%\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 190
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 191
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 194
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 197), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 201
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\" style=\"text-align:left\">
            ";
        // line 203
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>

   ";
        // line 208
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 208), [0 => "Problem", 1 => "Change"])) {
            // line 209
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 215
            echo "
      ";
            // line 216
            $context["nb_analysis"] = 0;
            // line 217
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 218
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 218) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 219
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 220
                    echo "         ";
                }
                // line 221
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 222) && ((($__internal_compile_17 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 223
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 224
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 225
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 228
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 230
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 231
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 233
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 235
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 238
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 238)) {
                    // line 239
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 240
$context["analysis_field"], (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,                     // line 241
($context["item"] ?? null), "fields", [], "any", false, false, false, 241)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["analysis_field"]] ?? null) : null),                     // line 242
$context["label"], twig_array_merge(                    // line 243
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 239, $context, $this->getSourceContext());
                    // line 247
                    echo "
                  ";
                }
                // line 249
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 254
        echo "
   ";
        // line 255
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 255) == "Change")) {
            // line 256
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 261
            echo "
      ";
            // line 262
            $context["nb_plans"] = 0;
            // line 263
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 264
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 264) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 264)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 265
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 266
                    echo "         ";
                }
                // line 267
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "
      ";
            // line 269
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 269) && ((($__internal_compile_20 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 270
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 271
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 272
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 275
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 277
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 278
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 280
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 282
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 285
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 285)) {
                    // line 286
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 287
$context["plans_field"], (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,                     // line 288
($context["item"] ?? null), "fields", [], "any", false, false, false, 288)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["plans_field"]] ?? null) : null),                     // line 289
$context["label"], twig_array_merge(                    // line 290
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 286, $context, $this->getSourceContext());
                    // line 294
                    echo "
                  ";
                }
                // line 296
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 301
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 321
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 325
        echo twig_escape_filter($this->env, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 325)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 326
        echo twig_escape_filter($this->env, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 326)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 326,  572 => 325,  566 => 322,  562 => 321,  540 => 301,  534 => 297,  528 => 296,  524 => 294,  522 => 290,  521 => 289,  520 => 288,  519 => 287,  517 => 286,  514 => 285,  510 => 284,  505 => 282,  501 => 280,  495 => 278,  493 => 277,  488 => 275,  482 => 272,  478 => 271,  475 => 270,  473 => 269,  470 => 268,  464 => 267,  461 => 266,  458 => 265,  455 => 264,  450 => 263,  448 => 262,  445 => 261,  442 => 256,  440 => 255,  437 => 254,  431 => 250,  425 => 249,  421 => 247,  419 => 243,  418 => 242,  417 => 241,  416 => 240,  414 => 239,  411 => 238,  407 => 237,  402 => 235,  398 => 233,  392 => 231,  390 => 230,  385 => 228,  379 => 225,  375 => 224,  372 => 223,  369 => 222,  363 => 221,  360 => 220,  357 => 219,  354 => 218,  349 => 217,  347 => 216,  344 => 215,  341 => 209,  339 => 208,  331 => 203,  326 => 201,  319 => 197,  313 => 194,  307 => 191,  303 => 190,  300 => 189,  298 => 188,  290 => 183,  285 => 181,  281 => 179,  277 => 177,  275 => 173,  274 => 172,  273 => 170,  271 => 167,  269 => 166,  261 => 161,  256 => 158,  254 => 156,  253 => 155,  252 => 153,  251 => 150,  246 => 149,  243 => 148,  240 => 147,  237 => 146,  234 => 145,  231 => 144,  228 => 143,  225 => 142,  222 => 141,  219 => 140,  216 => 139,  213 => 138,  210 => 137,  207 => 134,  204 => 133,  201 => 132,  198 => 129,  195 => 128,  193 => 126,  192 => 125,  191 => 124,  188 => 123,  184 => 121,  182 => 120,  181 => 118,  179 => 116,  176 => 115,  173 => 114,  170 => 113,  167 => 112,  164 => 111,  162 => 110,  161 => 107,  159 => 106,  157 => 105,  154 => 104,  150 => 102,  148 => 101,  147 => 99,  145 => 97,  143 => 96,  140 => 95,  136 => 93,  134 => 92,  133 => 90,  131 => 88,  129 => 87,  126 => 86,  122 => 84,  120 => 83,  119 => 81,  117 => 79,  115 => 78,  111 => 76,  108 => 75,  104 => 73,  102 => 72,  101 => 70,  99 => 68,  97 => 67,  93 => 65,  91 => 64,  86 => 62,  80 => 59,  73 => 55,  67 => 52,  60 => 47,  58 => 46,  54 => 44,  52 => 43,  50 => 42,  47 => 41,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  40 => 34,  37 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}
{% set field_options = {
   'full_width': true,
   'fields_template': itiltemplate,
   'disabled': (not canupdate),
   'add_field_class': (is_expanded ? 'col-sm-6' : ''),
} %}

{% set itil_layout    = user_pref('itil_layout', true) %}
{% set headers_states = itil_layout['items'] %}

<div class=\"accordion open accordion-flush\" id=\"itil-data\" style=\"display:flex\">
   {% set main_show = headers_states['item-main'] is not defined or headers_states['item-main'] == \"true\" ? true : false %}
   <div class=\"accordion-item\" style=\"width:100%\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button collapsed \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                {{ item.getStatusIcon(item.fields['status'])|raw }}
            </span>
            <span class=\"item-title\">
                {{ item.getTypeName(1) }}
            </span>
         </button>
      </h2>
      <div id=\"item-main\"  class=\"accordion-collapse  collapse {{ main_show ? \"show\" : \"\" }}\" aria-labelledby=\"heading-main-item\">
         <div  class=\"accordion-body row m-0 mt-n2\" style=\"width:100%\">

            {{ call_plugin_hook('pre_item_form', {\"item\": item, 'options': params}) }}

            {% if is_multi_entities_mode() %}
               

               {% if item.isField('is_recursive') %}
                  {{ fields.dropdownYesNo(
                     'is_recursive',
                     item.fields['is_recursive'],
                     __('Child entities'),
                     field_options
                  ) }}
               {% endif %}
            {% endif %}


            {% if item.getType() != 'Ticket' %}
               {{ fields.datetimeField(
                  'time_to_resolve',
                  item.fields['time_to_resolve'],
                  __('Time to resolve'),
                  field_options
               ) }}
            {% endif %}

            {% if item.isSolved(true) %}
               {{ fields.datetimeField(
               'solvedate',
               item.fields['solvedate'],
               __('Resolution date'),
               field_options
            ) }}
            {% endif %}

            {% if item.isClosed() %}
               {{ fields.datetimeField(
               'closedate',
               item.fields['closedate'],
               __('Close date'),
               field_options
            ) }}
            {% endif %}

            {% if item.getType() == 'Ticket' %}
               {% set type_params = {
                  'value': item.fields['type'],
                  'width': '100%',
                  'display': false
               }|merge(field_options) %}
               {% if item.isNewItem() %}
                  {% set type_params = type_params|merge({'on_change': 'this.form.submit()',}) %}
               {% else %}
                  {% set type_params = type_params|merge({'on_change': 'reloadCategory()',}) %}
               {% endif %}
               {{ fields.field(
                  'type',
                  item.dropdownType('type', type_params),
                  _n('Type', 'Types', 1),
                  field_options
               ) }}
            {% endif %}

            {% set cat_params = field_options|merge({
               'entity': item.fields['entities_id'],
               'disabled': (not (canupdate or can_requester)),
            }) %}
            {% if item.isNewItem() %}
               {% set cat_params = cat_params|merge({
                  'on_change': 'this.form.submit()',
               }) %}
            {% endif %}
            {% if not item.isNewItem() and itiltemplate.isMandatoryField('itilcategories_id') and item.fields['itilcategories_id'] > 0 %}
               {% set cat_params = cat_params|merge({
                  'display_emptychoice': false
               }) %}
            {% endif %}
            {% if item.getType() == 'Ticket' %}
               {% if item.fields['type'] == constant('Ticket::INCIDENT_TYPE') %}
                  {% set cat_params = cat_params|merge({'condition': {'is_incident': 1}}) %}
               {% elseif item.fields['type'] == constant('Ticket::DEMAND_TYPE') %}
                  {% set cat_params = cat_params|merge({'condition': {'is_request': 1}}) %}
               {% endif %}
            {% elseif item.getType() == 'Problem' %}
               {% set cat_params = cat_params|merge({'condition': {'is_problem': 1}}) %}
            {% elseif item.getType() == 'Change' %}
               {% set cat_params = cat_params|merge({'condition': {'is_change': 1}}) %}
            {% endif %}
            <span id=\"category_block_{{ rand }}\">
            {{ fields.dropdownField(
               'ITILCategory',
               'itilcategories_id',
               item.fields['itilcategories_id'],
               _n('Departamento', 'Categories', 1),
               cat_params,
               field_options|merge({
                           })
            ) }}
            </span>

            {{ include('components/itilobject/fields/status.html.twig') }}




            {% if item.isNewItem() and item.getType() == 'Ticket' %}
               {{ fields.dropdownField(
                  'Contract',
                  '_contracts_id',
                  params['_contracts_id']|default(0),
                  'Contract'|itemtype_name,
                  field_options|merge({
                     'entity': item.fields['entities_id'],
                     'width': '100%',
                     'hide_if_no_elements': true
                  })
               ) }}
            {% endif %}


            {{ include('components/itilobject/fields/global_validation.html.twig') }}

            {{ call_plugin_hook('post_item_form', {\"item\": item, 'options': params}) }}
         </div>
      </div>
   </div>

   {% set actors_show = headers_states['actors'] is not defined or headers_states['actors'] == \"true\" ? true : false %}
   <div class=\"accordion-item\" style=\"width:100%\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"{{ __('Actors') }}\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button {{ actors_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                {{ __('Actors') }}
            </span>
            <span class=\"badge bg-secondary ms-2\">
               {{ item.countActors() }}
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse {{ actors_show ? \"show\" : \"\" }}\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\" style=\"text-align:left\">
            {{ include('components/itilobject/actors/main.html.twig') }}
         </div>
      </div>
   </div>

   {% if item.getType() in ['Problem', 'Change'] %}
      {% set analysis_fields = {
         'impactcontent': __('Impacts'),
         'causecontent': __('Causes'),
         'symptomcontent': __('Symptoms'),
         'controlistcontent': __('Control list'),
      } %}

      {% set nb_analysis = 0 %}
      {% for analysis_field, label in analysis_fields %}
         {% if item.isField(analysis_field) and item.fields[analysis_field]|trim|length > 0 %}
            {% set nb_analysis = nb_analysis + 1 %}
         {% endif %}
      {% endfor %}
      {% set analysis_show = headers_states['analysis'] is defined and headers_states['analysis'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"{{ __(\"Analysis\") }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ analysis_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    {{ __(\"Analysis\") }}
               </span>
               {% if nb_analysis > 0 %}
                  <span class=\"badge bg-secondary ms-2\">{{ nb_analysis }}</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse {{ analysis_show ? \"show\" : \"\" }}\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               {% for analysis_field, label in analysis_fields %}
                  {% if item.isField(analysis_field) %}
                     {{ fields.textareaField(
                        analysis_field,
                        item.fields[analysis_field],
                        label,
                        field_options|merge({
                           'enable_richtext': true,
                           'is_horizontal': false,
                        })
                     ) }}
                  {% endif %}
               {% endfor %}
            </div>
         </div>
      </div>
   {% endif %}

   {% if item.getType() == 'Change' %}
      {% set plans_fields = {
         'rolloutplancontent': __('Deployment plan'),
         'backoutplancontent': __('Backup plan'),
         'checklistcontent': __('Checklist'),
      } %}

      {% set nb_plans = 0 %}
      {% for plans_field, label in plans_fields %}
         {% if item.isField(plans_field) and item.fields[plans_field]|trim|length > 0 %}
            {% set nb_plans = nb_plans + 1 %}
         {% endif %}
      {% endfor %}

      {% set plans_show = headers_states['plans'] is defined and headers_states['plans'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"{{ __(\"Plans\") }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ plans_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    {{ __(\"Plans\") }}
               </span>
               {% if nb_plans > 0 %}
                  <span class=\"badge bg-secondary ms-2\">{{ nb_plans }}</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse {{ plans_show ? \"show\" : \"\" }}\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               {% for plans_field, label in plans_fields %}
                  {% if item.isField(plans_field) %}
                     {{ fields.textareaField(
                        plans_field,
                        item.fields[plans_field],
                        label,
                        field_options|merge({
                           'enable_richtext': true,
                           'is_horizontal': false,
                        })
                     ) }}
                  {% endif %}
               {% endfor %}
            </div>
         </div>
      </div>
   {% endif %}

    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_{{ rand }} .field-container').load(
        '{{ path(\"ajax/dropdownTicketCategories.php\") }}',
        {
            'type': type,
            'entity_restrict': {{ item.fields['entities_id'] }},
            'value': {{ item.fields['itilcategories_id'] }},
        }
    );
};
</script>
", "components/itilobject/fields_panel.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\fields_panel.html.twig");
    }
}
