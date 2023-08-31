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

/* components/infocom.html.twig */
class __TwigTemplate_08486e05f40c987f53ccfdefea5d6a4f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/infocom.html.twig", 34)->unwrap();
        // line 35
        echo "
<div class=\"asset\">
   ";
        // line 37
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 38
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/infocom.form.php"), "html", null, true);
            echo "\" method=\"post\" data-submit-once>
   ";
        }
        // line 40
        echo "
   ";
        // line 41
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) <= 0)) {
            // line 42
            echo "      ";
            if ((($context["can_create"] ?? null) && (($context["withtemplate"] ?? null) != 2))) {
                // line 43
                echo "         <div class=\"mx-auto my-4\" style=\"width: 400px;\">
               <input type=\"hidden\" name=\"itemtype\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
                echo "\" />
               <button type=\"submit\" class=\"btn btn-primary\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-coins\"></i>
                  <span>";
                // line 48
                echo twig_escape_filter($this->env, __("Enable the financial and administrative information"), "html", null, true);
                echo "</span>
               </button>
         </div>
      ";
            }
            // line 52
            echo "   ";
        } else {
            // line 53
            echo "      ";
            $context["disabled"] = (($context["withtemplate"] ?? null) != 2);
            // line 54
            echo "      ";
            $context["disabled"] = false;
            // line 55
            echo "      ";
            $context["in_modal"] = (array_key_exists("_get", $context) && ((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 55), "0")) : ("0")));
            // line 56
            echo "      <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\" />
      <div class=\"card-body d-flex flex-wrap p-0 ";
            // line 57
            echo (((($context["in_modal"] ?? null) == "1")) ? ("ps-3 me-2") : (""));
            echo "\">
         <div class=\"col-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     ";
            // line 63
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Asset lifecycle"), "fas fa-sync-alt", true], 63, $context, $this->getSourceContext());
            // line 67
            echo "

                     ";
            // line 69
            echo twig_call_macro($macros["fields"], "macro_dateField", ["order_date", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 71
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_date"] ?? null) : null), __("Order date"), ["disabled" =>             // line 73
($context["disabled"] ?? null)]], 69, $context, $this->getSourceContext());
            // line 74
            echo "

                     ";
            // line 76
            echo twig_call_macro($macros["fields"], "macro_dateField", ["buy_date", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 78
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["buy_date"] ?? null) : null), __("Date of purchase"), ["disabled" =>             // line 80
($context["disabled"] ?? null)]], 76, $context, $this->getSourceContext());
            // line 81
            echo "

                     ";
            // line 83
            echo twig_call_macro($macros["fields"], "macro_dateField", ["delivery_date", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 85
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["delivery_date"] ?? null) : null), __("Delivery date"), ["disabled" =>             // line 87
($context["disabled"] ?? null)]], 83, $context, $this->getSourceContext());
            // line 88
            echo "

                     ";
            // line 90
            echo twig_call_macro($macros["fields"], "macro_dateField", ["use_date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 92
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["use_date"] ?? null) : null), __("Startup date"), ["disabled" =>             // line 94
($context["disabled"] ?? null)]], 90, $context, $this->getSourceContext());
            // line 95
            echo "

                     ";
            // line 97
            echo twig_call_macro($macros["fields"], "macro_dateField", ["inventory_date", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 99
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["inventory_date"] ?? null) : null), __("Date of last physical inventory"), ["disabled" =>             // line 101
($context["disabled"] ?? null)]], 97, $context, $this->getSourceContext());
            // line 102
            echo "

                     ";
            // line 104
            echo twig_call_macro($macros["fields"], "macro_dateField", ["decommission_date", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 106
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["decommission_date"] ?? null) : null), __("Decommission date"), ["disabled" =>             // line 108
($context["disabled"] ?? null)]], 104, $context, $this->getSourceContext());
            // line 109
            echo "

                     ";
            // line 112
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Financial and administrative information"), "fas fa-coins"], 112, $context, $this->getSourceContext());
            // line 115
            echo "

                     ";
            // line 117
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Supplier", "suppliers_id", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 120
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["suppliers_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 123
($context["item"] ?? null), "fields", [], "any", false, false, false, 123)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "disabled" =>             // line 124
($context["disabled"] ?? null)]], 117, $context, $this->getSourceContext());
            // line 126
            echo "


                     ";
            // line 129
            echo twig_call_macro($macros["fields"], "macro_textField", ["order_number", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 131
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["order_number"] ?? null) : null), __("Order number"), ["disabled" =>             // line 133
($context["disabled"] ?? null)]], 129, $context, $this->getSourceContext());
            // line 134
            echo "


                     ";
            // line 137
            echo twig_call_macro($macros["fields"], "macro_textField", ["bill", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 139
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["bill"] ?? null) : null), __("Invoice number"), ["disabled" =>             // line 141
($context["disabled"] ?? null)]], 137, $context, $this->getSourceContext());
            // line 142
            echo "

                     

                     ";
            // line 146
            echo twig_call_macro($macros["fields"], "macro_numberField", ["value", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 148
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["value"] ?? null) : null), _x("price", "Value"), ["disabled" =>             // line 151
($context["disabled"] ?? null), "step" => "any"]], 146, $context, $this->getSourceContext());
            // line 154
            echo "

                  
               

                     ";
            // line 159
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 161
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()), ["disabled" =>             // line 163
($context["disabled"] ?? null)]], 159, $context, $this->getSourceContext());
            // line 164
            echo "

                     ";
            // line 167
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Warranty information"), "fas fa-file-contract"], 167, $context, $this->getSourceContext());
            // line 170
            echo "

                     ";
            // line 172
            echo twig_call_macro($macros["fields"], "macro_dateField", ["warranty_date", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 174
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["warranty_date"] ?? null) : null), __("Start date of warranty"), ["disabled" =>             // line 176
($context["disabled"] ?? null)]], 172, $context, $this->getSourceContext());
            // line 177
            echo "

                     ";
            // line 179
            if ((($context["withtemplate"] ?? null) == 2)) {
                // line 180
                echo "                        ";
                if (((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["warranty_duration"] ?? null) : null) ==  -1)) {
                    // line 181
                    echo "                           ";
                    echo twig_escape_filter($this->env, __("Lifelong"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 183
                    echo "                           ";
                    echo twig_escape_filter($this->env, twig_sprintf(_n("%d month", "%d months", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["warranty_duration"] ?? null) : null)), (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["warranty_duration"] ?? null) : null)), "html", null, true);
                    echo "
                        ";
                }
                // line 185
                echo "                     ";
            } else {
                // line 186
                echo "                        ";
                $context["warrantyexpir"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "getWarrantyExpir", [0 => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 186)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["warranty_date"] ?? null) : null), 1 => (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 186)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["warranty_duration"] ?? null) : null), 2 => 0, 3 => true], "method", false, false, false, 186);
                // line 187
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["warranty_duration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,                 // line 189
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["warranty_duration"] ?? null) : null), __("Warranty duration"), ["min" => 0, "max" => 120, "step" => 1, "toadd" => ["-1" => __("Lifelong")], "unit" => "month", "disabled" =>                 // line 197
($context["disabled"] ?? null), "add_field_html" => (("<span class=\"text-muted\">" . twig_sprintf(__("Valid to %s"),                 // line 198
($context["warrantyexpir"] ?? null))) . "</span>")]], 187, $context, $this->getSourceContext());
                // line 200
                echo "
                     ";
            }
            // line 202
            echo "
                     ";
            // line 203
            echo twig_call_macro($macros["fields"], "macro_textField", ["warranty_info", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 205
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 205)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["warranty_info"] ?? null) : null), __("Warranty information"), ["disabled" =>             // line 207
($context["disabled"] ?? null)]], 203, $context, $this->getSourceContext());
            // line 208
            echo "

                     ";
            // line 210
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications")) {
                // line 211
                echo "                        ";
                ob_start();
                // line 212
                echo "                           ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => "Infocom", 1 => (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 212)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null)]);
                // line 213
                echo "                        ";
                $context["alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 214
                echo "
                        ";
                // line 215
                $context["alert_field"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "dropdownAlert", [0 => ["name" => "alert", "value" => (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,                 // line 217
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["alert"] ?? null) : null), "display" => false, "width" => "100%", "class" => "form-select"]], "method", false, false, false, 215);
                // line 222
                echo "
                        ";
                // line 223
                echo twig_call_macro($macros["fields"], "macro_field", ["alert",                 // line 225
($context["alert_field"] ?? null), __("Alarms on financial and administrative information"), ["add_field_html" => (("<span class=\"text-muted\">" .                 // line 227
($context["alert_html"] ?? null)) . "</span>")]], 223, $context, $this->getSourceContext());
                // line 228
                echo "
                     ";
            }
            // line 230
            echo "
                     ";
            // line 231
            $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHookFunction(twig_constant("Glpi\\Plugin\\Hooks::INFOCOM"), ($context["item"] ?? null));
            // line 232
            echo "
                     <div class=\"card-body mx-n2 mb-4  border-top\">
                        ";
            // line 234
            if (($context["can_global_update"] ?? null)) {
                // line 235
                echo "                           <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                              <i class=\"far fa-save\"></i>
                              <span>";
                // line 237
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 240
            echo "
                        ";
            // line 241
            if (($context["can_global_purge"] ?? null)) {
                // line 242
                echo "                           <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\">
                              <i class=\"fas fa-trash-alt\"></i>
                              <span>";
                // line 244
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 247
            echo "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   ";
        }
        // line 255
        echo "
   ";
        // line 256
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 257
            echo "      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </form>
   ";
        }
        // line 260
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/infocom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 260,  355 => 257,  353 => 256,  350 => 255,  340 => 247,  334 => 244,  330 => 242,  328 => 241,  325 => 240,  319 => 237,  315 => 235,  313 => 234,  309 => 232,  307 => 231,  304 => 230,  300 => 228,  298 => 227,  297 => 225,  296 => 223,  293 => 222,  291 => 217,  290 => 215,  287 => 214,  284 => 213,  281 => 212,  278 => 211,  276 => 210,  272 => 208,  270 => 207,  269 => 205,  268 => 203,  265 => 202,  261 => 200,  259 => 198,  258 => 197,  257 => 189,  255 => 187,  252 => 186,  249 => 185,  243 => 183,  237 => 181,  234 => 180,  232 => 179,  228 => 177,  226 => 176,  225 => 174,  224 => 172,  220 => 170,  217 => 167,  213 => 164,  211 => 163,  210 => 161,  209 => 159,  202 => 154,  200 => 151,  199 => 148,  198 => 146,  192 => 142,  190 => 141,  189 => 139,  188 => 137,  183 => 134,  181 => 133,  180 => 131,  179 => 129,  174 => 126,  172 => 124,  171 => 123,  170 => 120,  169 => 117,  165 => 115,  162 => 112,  158 => 109,  156 => 108,  155 => 106,  154 => 104,  150 => 102,  148 => 101,  147 => 99,  146 => 97,  142 => 95,  140 => 94,  139 => 92,  138 => 90,  134 => 88,  132 => 87,  131 => 85,  130 => 83,  126 => 81,  124 => 80,  123 => 78,  122 => 76,  118 => 74,  116 => 73,  115 => 71,  114 => 69,  110 => 67,  107 => 63,  99 => 57,  94 => 56,  91 => 55,  88 => 54,  85 => 53,  82 => 52,  75 => 48,  69 => 45,  65 => 44,  62 => 43,  59 => 42,  57 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
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

<div class=\"asset\">
   {% if can_edit or can_create %}
      <form action=\"{{ path('front/infocom.form.php') }}\" method=\"post\" data-submit-once>
   {% endif %}

   {% if infocom.fields['id'] <= 0 %}
      {% if can_create and withtemplate != 2 %}
         <div class=\"mx-auto my-4\" style=\"width: 400px;\">
               <input type=\"hidden\" name=\"itemtype\" value=\"{{ item.getType() }}\" />
               <input type=\"hidden\" name=\"items_id\" value=\"{{ item.fields['id'] }}\" />
               <button type=\"submit\" class=\"btn btn-primary\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-coins\"></i>
                  <span>{{ __('Enable the financial and administrative information') }}</span>
               </button>
         </div>
      {% endif %}
   {% else %}
      {% set disabled = (withtemplate != 2) %}
      {% set disabled = false %}
      {% set in_modal = _get is defined and _get._in_modal|default(\"0\") %}
      <input type=\"hidden\" name=\"id\" value=\"{{ infocom.fields['id'] }}\" />
      <div class=\"card-body d-flex flex-wrap p-0 {{ in_modal == \"1\" ? \"ps-3 me-2\" : \"\" }}\">
         <div class=\"col-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     {# ## LIFECYCLE PART ## #}
                     {{ fields.largeTitle(
                        __('Asset lifecycle'),
                        'fas fa-sync-alt',
                        true
                     ) }}

                     {{ fields.dateField(
                        'order_date',
                        infocom.fields['order_date'],
                        __('Order date'),
                        {'disabled': disabled}
                     ) }}

                     {{ fields.dateField(
                        'buy_date',
                        infocom.fields['buy_date'],
                        __('Date of purchase'),
                        {'disabled': disabled}
                     ) }}

                     {{ fields.dateField(
                        'delivery_date',
                        infocom.fields['delivery_date'],
                        __('Delivery date'),
                        {'disabled': disabled}
                     ) }}

                     {{ fields.dateField(
                        'use_date',
                        infocom.fields['use_date'],
                        __('Startup date'),
                        {'disabled': disabled}
                     ) }}

                     {{ fields.dateField(
                        'inventory_date',
                        infocom.fields['inventory_date'],
                        __('Date of last physical inventory'),
                        {'disabled': disabled}
                     ) }}

                     {{ fields.dateField(
                        'decommission_date',
                        infocom.fields['decommission_date'],
                        __('Decommission date'),
                        {'disabled': disabled}
                     ) }}

                     {# ## FINANCIAL PART ## #}
                     {{ fields.largeTitle(
                        __('Financial and administrative information'),
                        'fas fa-coins'
                     ) }}

                     {{ fields.dropdownField(
                        'Supplier',
                        'suppliers_id',
                        infocom.fields['suppliers_id'],
                        'Supplier'|itemtype_name,
                        {
                           'entity'  : item.fields['entities_id'],
                           'disabled': disabled
                        }
                     ) }}


                     {{ fields.textField(
                        'order_number',
                        infocom.fields['order_number'],
                        __('Order number'),
                        {'disabled': disabled}
                     ) }}


                     {{ fields.textField(
                        'bill',
                        infocom.fields['bill'],
                        __('Invoice number'),
                        {'disabled': disabled}
                     ) }}

                     

                     {{ fields.numberField(
                        'value',
                        infocom.fields['value'],
                        _x('price', 'Value'),
                        {
                            'disabled': disabled,
                            'step': 'any',
                        }
                     ) }}

                  
               

                     {{ fields.textareaField(
                        'comment',
                        infocom.fields['comment'],
                        _n('Comment', 'Comments', get_plural_number()),
                        {'disabled': disabled}
                     ) }}

                     {# ## WARRANTY PART ## #}
                     {{ fields.largeTitle(
                        __('Warranty information'),
                        'fas fa-file-contract'
                     ) }}

                     {{ fields.dateField(
                        'warranty_date',
                        infocom.fields['warranty_date'],
                        __('Start date of warranty'),
                        {'disabled': disabled}
                     ) }}

                     {% if withtemplate == 2 %}
                        {% if infocom.fields['warranty_duration'] == -1 %}
                           {{ __('Lifelong') }}
                        {% else %}
                           {{ _n('%d month', '%d months', infocom.fields['warranty_duration'])|format(infocom.fields['warranty_duration']) }}
                        {% endif %}
                     {% else %}
                        {% set warrantyexpir = infocom.getWarrantyExpir(infocom.fields['warranty_date'], infocom.fields['warranty_duration'], 0, true) %}
                        {{ fields.dropdownNumberField(
                           'warranty_duration',
                           infocom.fields['warranty_duration'],
                           __('Warranty duration'),
                           {
                              'min'            : 0,
                              'max'            : 120,
                              'step'           : 1,
                              'toadd'          : {'-1': __('Lifelong')},
                              'unit'           : 'month',
                              'disabled'       : disabled,
                              'add_field_html' : '<span class=\"text-muted\">' ~ __('Valid to %s')|format(warrantyexpir) ~ '</span>'
                           }
                        ) }}
                     {% endif %}

                     {{ fields.textField(
                        'warranty_info',
                        infocom.fields['warranty_info'],
                        __('Warranty information'),
                        {'disabled': disabled}
                     ) }}

                     {% if config('use_notifications') %}
                        {% set alert_html %}
                           {% do call('Alert::displayLastAlert', ['Infocom', infocom.fields['id']]) %}
                        {% endset %}

                        {% set alert_field = infocom.dropdownAlert({
                              'name'   : 'alert',
                              'value'  : infocom.fields['alert'],
                              'display': false,
                              'width'  : '100%',
                              'class'  : 'form-select'
                           }) %}

                        {{ fields.field(
                           'alert',
                           alert_field,
                           __('Alarms on financial and administrative information'),
                           {'add_field_html': '<span class=\"text-muted\">' ~ alert_html ~ '</span>'}
                        ) }}
                     {% endif %}

                     {% do call_plugin_hook_func(constant('Glpi\\\\Plugin\\\\Hooks::INFOCOM'), item) %}

                     <div class=\"card-body mx-n2 mb-4  border-top\">
                        {% if can_global_update %}
                           <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                              <i class=\"far fa-save\"></i>
                              <span>{{ _x('button', 'Save') }}</span>
                           </button>
                        {% endif %}

                        {% if can_global_purge %}
                           <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\">
                              <i class=\"fas fa-trash-alt\"></i>
                              <span>{{ _x('button', 'Delete permanently') }}</span>
                           </button>
                        {% endif %}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   {% endif %}

   {% if can_edit or can_create %}
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
   </form>
   {% endif %}
</div>
", "components/infocom.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\infocom.html.twig");
    }
}
