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

/* generic_show_form.html.twig */
class __TwigTemplate_c5c45d8dda2933cf04f206ad831ba90f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
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
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "

   ";
        // line 44
        $context["rand"] = twig_random($this->env);
        // line 45
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 46
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 48
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 48);
        // line 49
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 51)];
        // line 53
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 55
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 59
        $this->displayBlock('form_fields', $context, $blocks);
        // line 442
        echo "               </div> ";
        // line 443
        echo "            </div> ";
        // line 444
        echo "         </div> ";
        // line 445
        echo "      </div>
      ";
        // line 446
        if (($context["item_has_pictures"] ?? null)) {
            // line 447
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 449
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 453
        echo "   </div> ";
        // line 454
        echo "
   ";
        // line 455
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 456
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 458
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 459
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 460
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 462
        echo "
   ";
        // line 463
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 464
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 465
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 468
        echo "</div>
";
    }

    // line 59
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["name"], "method", false, false, false, 60)) {
            // line 61
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 63
($context["item"] ?? null), (((            // line 64
($context["item_type"] ?? null) == "Contact")) ? (__("Patrimônio")) : (__("Patrimônio"))),             // line 65
($context["withtemplate"] ?? null), twig_array_merge(            // line 66
($context["field_options"] ?? null), ["required" => true, "upper" => true])], 61, $context, $this->getSourceContext());
            // line 70
            echo "
                     
                     ";
        }
        // line 73
        echo "
                     

                     ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 76)) {
            // line 77
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 78
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 78, $context, $this->getSourceContext());
                // line 80
                echo "
                        ";
            } else {
                // line 82
                echo "                        ";
            }
            // line 83
            echo "                     ";
        }
        // line 84
        echo "
                     ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["states_id"], "method", false, false, false, 85)) {
            // line 86
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 86), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 86))) => 1]) : ([]));
            // line 87
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 90
($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 92
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 93
($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 94
($context["condition"] ?? null), "required" => true])], 87, $context, $this->getSourceContext());
            // line 97
            echo "
                     ";
        }
        // line 99
        echo "
                     ";
        // line 100
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 100);
        // line 101
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["fk"] ?? null)], "method", false, false, false, 101)) {
            // line 102
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 103
($context["item_type"] ?? null),             // line 104
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 107
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 102, $context, $this->getSourceContext());
            // line 110
            echo "
                     ";
        }
        // line 112
        echo "
                     ";
        // line 113
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_helpdesk_visible"], "method", false, false, false, 113))) {
            // line 114
            echo "                        ";
            // line 115
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 119
($context["field_options"] ?? null)], 115, $context, $this->getSourceContext());
            // line 120
            echo "
                     ";
        }
        // line 122
        echo "
                     ";
        // line 123
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 123)) : ([]));
        // line 124
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 125
            echo "                        ";
            ob_start(function () { return ''; });
            // line 126
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 128
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "
                        ";
            // line 133
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 135
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 133, $context, $this->getSourceContext());
            // line 137
            echo "

                        ";
            // line 139
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 139, $context, $this->getSourceContext());
            echo " ";
            // line 140
            echo "                     ";
        }
        // line 141
        echo "
                     ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 142)) {
            // line 143
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 146
($context["item"] ?? null), "fields", [], "any", false, false, false, 146)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 148
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 149
($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null), "required" => true])], 143, $context, $this->getSourceContext());
            // line 152
            echo "
                     ";
        }
        // line 154
        echo "
                     ";
        // line 155
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["item_type"], "method", false, false, false, 155))) {
            // line 156
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 158
($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["Computer", "NetworkEquipment", "Printer", "Peripheral", "Phone"], twig_array_merge(            // line 163
($context["field_options"] ?? null), ["required" => true])], 156, $context, $this->getSourceContext());
            // line 166
            echo "
                     ";
        }
        // line 168
        echo "
                     ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_domaincreation"], "method", false, false, false, 169)) {
            // line 170
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 170, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 172
        echo "
                     ";
        // line 173
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 173);
        // line 174
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 174);
        // line 175
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["type_fk"] ?? null)], "method", false, false, false, 175)) {
            // line 176
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 177
($context["type_itemtype"] ?? null),             // line 178
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 179
($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1), twig_array_merge(            // line 181
($context["field_options"] ?? null), ["required" => true])], 176, $context, $this->getSourceContext());
            // line 184
            echo "
                     ";
        }
        // line 186
        echo "
                     ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["usertitles_id"], "method", false, false, false, 187)) {
            // line 188
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 191
($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 193
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 188, $context, $this->getSourceContext());
            // line 196
            echo "
                     ";
        }
        // line 198
        echo "
                     ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["phone"], "method", false, false, false, 199)) {
            // line 200
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 202
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 204
($context["withtemplate"] ?? null),             // line 205
($context["field_options"] ?? null)], 200, $context, $this->getSourceContext());
            // line 206
            echo "
                     ";
        }
        // line 208
        echo "

                     ";
        // line 210
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["email"], "method", false, false, false, 210)) {
            // line 211
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 213
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 215
($context["withtemplate"] ?? null), twig_array_merge(            // line 216
($context["field_options"] ?? null), ["required" => true])], 211, $context, $this->getSourceContext());
            // line 219
            echo "
                     ";
        }
        // line 221
        echo "
                     ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["address"], "method", false, false, false, 222)) {
            // line 223
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 223, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 225
        echo "
                     ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["postalcode"], "method", false, false, false, 226)) {
            // line 227
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 229
($context["item"] ?? null), __("Postal code"),             // line 231
($context["withtemplate"] ?? null), twig_array_merge(            // line 232
($context["field_options"] ?? null), ["required" => true])], 227, $context, $this->getSourceContext());
            // line 236
            echo "
                        
                     ";
        }
        // line 239
        echo "
                     ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["town"], "method", false, false, false, 240)) {
            // line 241
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 243
($context["item"] ?? null), "Cidadezinha",             // line 245
($context["withtemplate"] ?? null), twig_array_merge(            // line 246
($context["field_options"] ?? null), ["required" => true])], 241, $context, $this->getSourceContext());
            // line 250
            echo "
                     ";
        }
        // line 252
        echo "
                     ";
        // line 254
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["postcode"], "method", false, false, false, 254)) {
            // line 255
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 257
($context["item"] ?? null), __("Postal code"),             // line 259
($context["withtemplate"] ?? null),             // line 260
($context["field_options"] ?? null)], 255, $context, $this->getSourceContext());
            // line 261
            echo "
                     ";
        }
        // line 263
        echo "
                     ";
        // line 264
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 265
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 267
($context["item"] ?? null), _x("location", "State"),             // line 269
($context["withtemplate"] ?? null),             // line 270
($context["field_options"] ?? null)], 265, $context, $this->getSourceContext());
            // line 271
            echo "
                     ";
        }
        // line 273
        echo "
                     ";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["country"], "method", false, false, false, 274)) {
            // line 275
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 277
($context["item"] ?? null), __("Country"),             // line 279
($context["withtemplate"] ?? null),             // line 280
($context["field_options"] ?? null)], 275, $context, $this->getSourceContext());
            // line 281
            echo "
                     ";
        }
        // line 283
        echo "
                     ";
        // line 284
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_expiration"], "method", false, false, false, 284)) {
            // line 285
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 286
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 286)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 286, $context, $this->getSourceContext());
                // line 289
                echo "
                        ";
            } else {
                // line 291
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 291)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 291, $context, $this->getSourceContext());
                // line 294
                echo "
                        ";
            }
            // line 296
            echo "                     ";
        }
        // line 297
        echo "
                     ";
        // line 298
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["ref"], "method", false, false, false, 298)) {
            // line 299
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 301
($context["item"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 303
($context["field_options"] ?? null)], 299, $context, $this->getSourceContext());
            // line 304
            echo "
                     ";
        }
        // line 306
        echo "   

                     ";
        // line 308
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["manufacturers_id"], "method", false, false, false, 308)) {
            // line 309
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 312
($context["item"] ?? null), "fields", [], "any", false, false, false, 312)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 313
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))), twig_array_merge(            // line 314
($context["field_options"] ?? null), ["required" => true])], 309, $context, $this->getSourceContext());
            // line 318
            echo "
                     ";
        }
        // line 320
        echo "
                 
                     ";
        // line 322
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 322);
        // line 323
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 323);
        // line 324
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["model_fk"] ?? null)], "method", false, false, false, 324)) {
            // line 325
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 326
($context["model_itemtype"] ?? null),             // line 327
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 328
($context["item"] ?? null), "fields", [], "any", false, false, false, 328)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 330
($context["field_options"] ?? null), ["required" => true])], 325, $context, $this->getSourceContext());
            // line 333
            echo "
                     ";
        }
        // line 335
        echo "
                     ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["serial"], "method", false, false, false, 336)) {
            // line 337
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 339
($context["item"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 341
($context["field_options"] ?? null), ["required" => true])], 337, $context, $this->getSourceContext());
            // line 344
            echo "
                     ";
        }
        // line 346
        echo "

                     ";
        // line 348
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["users_id"], "method", false, false, false, 348)) {
            // line 349
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 352
($context["item"] ?? null), "fields", [], "any", false, false, false, 352)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 354
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 355
($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 349, $context, $this->getSourceContext());
            // line 358
            echo "
                     ";
        }
        // line 360
        echo "
                     

                     ";
        // line 363
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["size"], "method", false, false, false, 363)) {
            // line 364
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 366
($context["item"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 368
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 364, $context, $this->getSourceContext());
            // line 372
            echo "
                     ";
        }
        // line 374
        echo "
                    
                     ";
        // line 376
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 376)) {
            // line 377
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 379
($context["item"] ?? null), "fields", [], "any", false, false, false, 379)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 381
($context["field_options"] ?? null)], 377, $context, $this->getSourceContext());
            // line 382
            echo "
                     ";
        }
        // line 384
        echo "

                     ";
        // line 386
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["alarm_threshold"], "method", false, false, false, 386)) {
            // line 387
            echo "                        ";
            ob_start(function () { return ''; });
            // line 388
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", ["alarm_threshold", twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 389
($context["item"] ?? null), "fields", [], "any", false, false, false, 389)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 390
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 396
($context["params"] ?? null))]);
            // line 397
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 398
            echo "                        ";
            ob_start(function () { return ''; });
            // line 399
            echo "                           <span class=\"text-muted\">
                              ";
            // line 400
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [($context["item_type"] ?? null), (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 400)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 401
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 403
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 405
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 407
($context["field_options"] ?? null), ["add_field_html" =>             // line 408
($context["last_alert_html"] ?? null)])], 403, $context, $this->getSourceContext());
            // line 410
            echo "
                     ";
        }
        // line 412
        echo "

                     ";
        // line 414
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["begin_date"], "method", false, false, false, 414)) {
            // line 415
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 417
($context["item"] ?? null), "fields", [], "any", false, false, false, 417)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 419
($context["field_options"] ?? null)], 415, $context, $this->getSourceContext());
            // line 420
            echo "
                     ";
        }
        // line 422
        echo "
                     ";
        // line 423
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["pictures"], "method", false, false, false, 423)) {
            // line 424
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 424, $context, $this->getSourceContext());
            // line 427
            echo "
                     ";
        }
        // line 429
        echo "
                     ";
        // line 430
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 430)) {
            // line 431
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 433
($context["item"] ?? null), "fields", [], "any", false, false, false, 433)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 435
($context["field_options"] ?? null)], 431, $context, $this->getSourceContext());
            // line 436
            echo "
                     ";
        }
        // line 438
        echo "
                     ";
        // line 439
        $this->displayBlock('more_fields', $context, $blocks);
        // line 441
        echo "                  ";
    }

    // line 439
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 440
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 440,  737 => 439,  733 => 441,  731 => 439,  728 => 438,  724 => 436,  722 => 435,  721 => 433,  719 => 431,  717 => 430,  714 => 429,  710 => 427,  707 => 424,  705 => 423,  702 => 422,  698 => 420,  696 => 419,  695 => 417,  693 => 415,  691 => 414,  687 => 412,  683 => 410,  681 => 408,  680 => 407,  679 => 405,  677 => 403,  673 => 401,  671 => 400,  668 => 399,  665 => 398,  662 => 397,  660 => 396,  659 => 390,  658 => 389,  656 => 388,  653 => 387,  651 => 386,  647 => 384,  643 => 382,  641 => 381,  640 => 379,  638 => 377,  636 => 376,  632 => 374,  628 => 372,  626 => 368,  625 => 366,  623 => 364,  621 => 363,  616 => 360,  612 => 358,  610 => 355,  609 => 354,  608 => 352,  606 => 349,  604 => 348,  600 => 346,  596 => 344,  594 => 341,  593 => 339,  591 => 337,  589 => 336,  586 => 335,  582 => 333,  580 => 330,  579 => 328,  578 => 327,  577 => 326,  575 => 325,  572 => 324,  569 => 323,  567 => 322,  563 => 320,  559 => 318,  557 => 314,  556 => 313,  555 => 312,  553 => 309,  551 => 308,  547 => 306,  543 => 304,  541 => 303,  540 => 301,  538 => 299,  536 => 298,  533 => 297,  530 => 296,  526 => 294,  523 => 291,  519 => 289,  516 => 286,  513 => 285,  511 => 284,  508 => 283,  504 => 281,  502 => 280,  501 => 279,  500 => 277,  498 => 275,  496 => 274,  493 => 273,  489 => 271,  487 => 270,  486 => 269,  485 => 267,  483 => 265,  481 => 264,  478 => 263,  474 => 261,  472 => 260,  471 => 259,  470 => 257,  468 => 255,  465 => 254,  462 => 252,  458 => 250,  456 => 246,  455 => 245,  454 => 243,  452 => 241,  450 => 240,  447 => 239,  442 => 236,  440 => 232,  439 => 231,  438 => 229,  436 => 227,  434 => 226,  431 => 225,  425 => 223,  423 => 222,  420 => 221,  416 => 219,  414 => 216,  413 => 215,  412 => 213,  410 => 211,  408 => 210,  404 => 208,  400 => 206,  398 => 205,  397 => 204,  396 => 202,  394 => 200,  392 => 199,  389 => 198,  385 => 196,  383 => 194,  382 => 193,  381 => 191,  379 => 188,  377 => 187,  374 => 186,  370 => 184,  368 => 181,  367 => 179,  366 => 178,  365 => 177,  363 => 176,  360 => 175,  357 => 174,  355 => 173,  352 => 172,  346 => 170,  344 => 169,  341 => 168,  337 => 166,  335 => 163,  334 => 158,  332 => 156,  330 => 155,  327 => 154,  323 => 152,  321 => 149,  320 => 148,  319 => 146,  317 => 143,  315 => 142,  312 => 141,  309 => 140,  306 => 139,  302 => 137,  300 => 135,  299 => 133,  296 => 132,  292 => 130,  283 => 128,  279 => 127,  276 => 126,  273 => 125,  270 => 124,  268 => 123,  265 => 122,  261 => 120,  259 => 119,  258 => 117,  256 => 115,  254 => 114,  252 => 113,  249 => 112,  245 => 110,  243 => 108,  242 => 107,  241 => 105,  240 => 104,  239 => 103,  237 => 102,  234 => 101,  232 => 100,  229 => 99,  225 => 97,  223 => 94,  222 => 93,  221 => 92,  220 => 90,  218 => 87,  215 => 86,  213 => 85,  210 => 84,  207 => 83,  204 => 82,  200 => 80,  197 => 78,  194 => 77,  192 => 76,  187 => 73,  182 => 70,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 468,  157 => 465,  154 => 464,  152 => 463,  149 => 462,  143 => 460,  141 => 459,  136 => 458,  130 => 456,  128 => 455,  125 => 454,  123 => 453,  116 => 449,  112 => 447,  110 => 446,  107 => 445,  105 => 444,  103 => 443,  101 => 442,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\generic_show_form.html.twig");
    }
}
