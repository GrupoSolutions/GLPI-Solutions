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

/* components/form/item_device.html.twig */
class __TwigTemplate_65a8a704b4d88dea49b7bf082aacace4 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/item_device.html.twig", 34)->unwrap();
        // line 35
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false)))));
        // line 36
        $context["bg"] = "";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) {
            // line 38
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        echo "
<div class=\"asset ";
        // line 41
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 42
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        echo "

   ";
        // line 44
        $context["params"] = (($context["params"]) ?? ([]));
        // line 45
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 46)];
        // line 48
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <script>
                     function showField(item) {
                        \$(\"#\" + item).prop(\"type\", \"text\");
                     }
                     function hideField(item) {
                        \$(\"#\" + item).prop(\"type\", \"password\");
                     }
                     function copyToClipboard(item) {
                        showField(item);
                        \$(\"#\" + item).select();
                        try {
                           document.execCommand(\"copy\");
                        } catch (e) {
                           alert(\"Copy to clipboard failed'\");
                        }
                        hideField(item);
                     }
                  </script>

                  ";
        // line 73
        $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ($context["params"] ?? null));
        // line 74
        echo "
                  <input type=\"hidden\" name=";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1"), "html", null, true);
        echo " value=";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1")] ?? null) : null), "html", null, true);
        echo ">



                  ";
        // line 79
        if (($context["item1"] ?? null)) {
            // line 80
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 81
($context["item"] ?? null), "itemtype_1"), twig_get_attribute($this->env, $this->source,             // line 82
($context["item1"] ?? null), "getLink", [], "method", false, false, false, 82), twig_get_attribute($this->env, $this->source,             // line 83
($context["item1"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 83),             // line 84
($context["field_options"] ?? null)], 80, $context, $this->getSourceContext());
            // line 85
            echo "
                  ";
        } else {
            // line 87
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["", __("No associated item"), __("Itemtype"),             // line 91
($context["field_options"] ?? null)], 87, $context, $this->getSourceContext());
            // line 92
            echo "
                  ";
        }
        // line 94
        echo "
                  ";
        // line 95
        if (($context["device"] ?? null)) {
            // line 96
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 97
($context["item"] ?? null), "itemtype_2"), twig_get_attribute($this->env, $this->source,             // line 98
($context["device"] ?? null), "getLink", [], "method", false, false, false, 98), _n("Component", "Components", 1),             // line 100
($context["field_options"] ?? null)], 96, $context, $this->getSourceContext());
            // line 101
            echo "
                  ";
        } else {
            // line 103
            echo "                     ";
            $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [0 => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")]);
            // line 104
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 105
($context["dropdown_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 106
($context["item"] ?? null), "items_id_2"), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")] ?? null) : null), _n("Component", "Components", 1),             // line 109
($context["field_options"] ?? null)], 104, $context, $this->getSourceContext());
            // line 110
            echo "
                  ";
        }
        // line 112
        echo "
                  ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["specificities_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["specificities"]) {
            // line 114
            echo "                     ";
            if ((($__internal_compile_2 = $context["specificities"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canread"] ?? null) : null)) {
                // line 115
                echo "
                        ";
                // line 116
                if (twig_get_attribute($this->env, $this->source, $context["specificities"], "tooltip", [], "array", true, true, false, 116)) {
                    // line 117
                    echo "                           ";
                    $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ["helper" => (($__internal_compile_3 = $context["specificities"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tooltip"] ?? null) : null)]);
                    // line 118
                    echo "                        ";
                }
                // line 119
                echo "
                        ";
                // line 120
                if (((($__internal_compile_4 = $context["specificities"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["datatype"] ?? null) : null) == "dropdown")) {
                    // line 121
                    echo "                           ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [0 => (($__internal_compile_5 = $context["specificities"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field"] ?? null) : null)]);
                    // line 122
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [                    // line 123
($context["dropdown_itemtype"] ?? null), (($__internal_compile_6 =                     // line 124
$context["specificities"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field"] ?? null) : null), (($__internal_compile_7 =                     // line 125
$context["specificities"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["value"] ?? null) : null), (($__internal_compile_8 =                     // line 126
$context["specificities"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), twig_array_merge((($__internal_compile_9 =                     // line 127
$context["specificities"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_options"] ?? null) : null), ($context["field_options"] ?? null))], 122, $context, $this->getSourceContext());
                    // line 128
                    echo "
                        ";
                } else {
                    // line 130
                    echo "                           ";
                    if ((($__internal_compile_10 = $context["specificities"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["protected"] ?? null) : null)) {
                        // line 131
                        echo "
                              ";
                        // line 132
                        ob_start(function () { return ''; });
                        // line 133
                        echo "                                 &nbsp;<i class=\"far fa-eye pointer disclose\" onmousedown=\"showField('";
                        echo twig_escape_filter($this->env, ((($__internal_compile_11 = $context["specificities"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["field"] ?? null) : null) . (($__internal_compile_12 = $context["specificities"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["rand"] ?? null) : null)), "html", null, true);
                        echo "')\"
                                 onmouseup=\"hideField('";
                        // line 134
                        echo twig_escape_filter($this->env, ((($__internal_compile_13 = $context["specificities"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["field"] ?? null) : null) . (($__internal_compile_14 = $context["specificities"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["rand"] ?? null) : null)), "html", null, true);
                        echo "')\"
                                 onmouseout=\"hideField('";
                        // line 135
                        echo twig_escape_filter($this->env, ((($__internal_compile_15 = $context["specificities"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["field"] ?? null) : null) . (($__internal_compile_16 = $context["specificities"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["rand"] ?? null) : null)), "html", null, true);
                        echo "')\"></i>
                                 &nbsp;<i class=\"fa fa-paste pointer disclose\" onclick=\"copyToClipboard('";
                        // line 136
                        echo twig_escape_filter($this->env, ((($__internal_compile_17 = $context["specificities"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["field"] ?? null) : null) . (($__internal_compile_18 = $context["specificities"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["rand"] ?? null) : null)), "html", null, true);
                        echo "')\"></i>
                              ";
                        $context["btn_group"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 138
                        echo "
                              ";
                        // line 139
                        echo twig_call_macro($macros["fields"], "macro_passwordField", [(($__internal_compile_19 =                         // line 140
$context["specificities"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["field"] ?? null) : null), (($__internal_compile_20 =                         // line 141
$context["specificities"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["value"] ?? null) : null), ((($__internal_compile_21 =                         // line 142
$context["specificities"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["label"] ?? null) : null) . ($context["btn_group"] ?? null)), twig_array_merge(                        // line 143
($context["field_options"] ?? null), ["id" => (($__internal_compile_22 = $context["specificities"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["protected_field_id"] ?? null) : null)])], 139, $context, $this->getSourceContext());
                        // line 144
                        echo "
                           ";
                    } else {
                        // line 146
                        echo "                              ";
                        echo twig_call_macro($macros["fields"], "macro_textField", [(($__internal_compile_23 =                         // line 147
$context["specificities"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["field"] ?? null) : null), (($__internal_compile_24 =                         // line 148
$context["specificities"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["value"] ?? null) : null), (($__internal_compile_25 =                         // line 149
$context["specificities"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["label"] ?? null) : null),                         // line 150
($context["field_options"] ?? null)], 146, $context, $this->getSourceContext());
                        // line 151
                        echo "
                           ";
                    }
                    // line 153
                    echo "                        ";
                }
                // line 154
                echo "                     ";
            }
            // line 155
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specificities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
                  ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 157)) {
            // line 158
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 160
($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["serial"] ?? null) : null), __("Serial number"),             // line 162
($context["field_options"] ?? null)], 158, $context, $this->getSourceContext());
            // line 163
            echo "
                  ";
        }
        // line 165
        echo "
                  ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "otherserial"], "method", false, false, false, 166)) {
            // line 167
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 169
($context["item"] ?? null), __("Inventory number"), 0,             // line 172
($context["field_options"] ?? null)], 167, $context, $this->getSourceContext());
            // line 173
            echo "
                  ";
        }
        // line 175
        echo "
                  ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 176)) {
            // line 177
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 182
($context["field_options"] ?? null), ["entity" => (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 183
($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["entities_id"] ?? null) : null)])], 177, $context, $this->getSourceContext());
            // line 185
            echo "
                  ";
        }
        // line 187
        echo "
                  ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 188)) {
            // line 189
            echo "                     ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 189), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 189))) => 1]) : ([]));
            // line 190
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 195
($context["field_options"] ?? null), ["entity" => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 196
($context["item"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "condition" =>             // line 197
($context["condition"] ?? null)])], 190, $context, $this->getSourceContext());
            // line 199
            echo "
                  ";
        }
        // line 201
        echo "
                  ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 202)) {
            // line 203
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 206
($context["item"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 208
($context["field_options"] ?? null), ["entity" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 209
($context["item"] ?? null), "fields", [], "any", false, false, false, 209)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["entities_id"] ?? null) : null), "right" => "all"])], 203, $context, $this->getSourceContext());
            // line 212
            echo "
                  ";
        }
        // line 214
        echo "
                  ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id"], "method", false, false, false, 215)) {
            // line 216
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 219
($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), twig_array_merge(            // line 221
($context["field_options"] ?? null), ["entity" => (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 222
($context["item"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]])], 216, $context, $this->getSourceContext());
            // line 225
            echo "
                  ";
        }
        // line 227
        echo "               </div> ";
        // line 228
        echo "            </div> ";
        // line 229
        echo "         </div> ";
        // line 230
        echo "      </div> ";
        // line 231
        echo "   </div> ";
        // line 232
        echo "

   ";
        // line 234
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "components/form/item_device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 234,  366 => 232,  364 => 231,  362 => 230,  360 => 229,  358 => 228,  356 => 227,  352 => 225,  350 => 222,  349 => 221,  348 => 219,  346 => 216,  344 => 215,  341 => 214,  337 => 212,  335 => 209,  334 => 208,  333 => 206,  331 => 203,  329 => 202,  326 => 201,  322 => 199,  320 => 197,  319 => 196,  318 => 195,  317 => 193,  315 => 190,  312 => 189,  310 => 188,  307 => 187,  303 => 185,  301 => 183,  300 => 182,  299 => 180,  297 => 177,  295 => 176,  292 => 175,  288 => 173,  286 => 172,  285 => 169,  283 => 167,  281 => 166,  278 => 165,  274 => 163,  272 => 162,  271 => 160,  269 => 158,  267 => 157,  264 => 156,  258 => 155,  255 => 154,  252 => 153,  248 => 151,  246 => 150,  245 => 149,  244 => 148,  243 => 147,  241 => 146,  237 => 144,  235 => 143,  234 => 142,  233 => 141,  232 => 140,  231 => 139,  228 => 138,  223 => 136,  219 => 135,  215 => 134,  210 => 133,  208 => 132,  205 => 131,  202 => 130,  198 => 128,  196 => 127,  195 => 126,  194 => 125,  193 => 124,  192 => 123,  190 => 122,  187 => 121,  185 => 120,  182 => 119,  179 => 118,  176 => 117,  174 => 116,  171 => 115,  168 => 114,  164 => 113,  161 => 112,  157 => 110,  155 => 109,  154 => 107,  153 => 106,  152 => 105,  150 => 104,  147 => 103,  143 => 101,  141 => 100,  140 => 98,  139 => 97,  137 => 96,  135 => 95,  132 => 94,  128 => 92,  126 => 91,  124 => 87,  120 => 85,  118 => 84,  117 => 83,  116 => 82,  115 => 81,  113 => 80,  111 => 79,  102 => 75,  99 => 74,  97 => 73,  70 => 48,  68 => 46,  66 => 45,  64 => 44,  59 => 42,  55 => 41,  52 => 40,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/item_device.html.twig", "/var/www/html/glpi/templates/components/form/item_device.html.twig");
    }
}
