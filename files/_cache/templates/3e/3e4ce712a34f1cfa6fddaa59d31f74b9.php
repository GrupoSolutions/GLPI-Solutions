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
class __TwigTemplate_1206e44ce76377ecea69a8fc30b920a4 extends Template
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
        // line 609
        echo "               </div> ";
        // line 610
        echo "            </div> ";
        // line 611
        echo "         </div> ";
        // line 612
        echo "      </div>
      ";
        // line 613
        if (($context["item_has_pictures"] ?? null)) {
            // line 614
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 616
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 620
        echo "   </div> ";
        // line 621
        echo "
   ";
        // line 622
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 623
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 625
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 626
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 627
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 629
        echo "
   ";
        // line 630
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 631
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 632
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 635
        echo "</div>
";
    }

    // line 59
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 60)) {
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
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 74)) {
            // line 75
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 77
($context["item"] ?? null), __("First name"),             // line 79
($context["withtemplate"] ?? null),             // line 80
($context["field_options"] ?? null)], 75, $context, $this->getSourceContext());
            // line 81
            echo "
                     ";
        }
        // line 83
        echo "
                     ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 84)) {
            // line 85
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 86
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 86, $context, $this->getSourceContext());
                // line 88
                echo "
                        ";
            } else {
                // line 90
                echo "                        ";
            }
            // line 91
            echo "                     ";
        }
        // line 92
        echo "
                     ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 93)) {
            // line 94
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 94), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 94))) => 1]) : ([]));
            // line 95
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 100
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 101
($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 102
($context["condition"] ?? null), "required" => true])], 95, $context, $this->getSourceContext());
            // line 105
            echo "
                     ";
        }
        // line 107
        echo "
                     ";
        // line 108
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 108);
        // line 109
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 109)) {
            // line 110
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 111
($context["item_type"] ?? null),             // line 112
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 115
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 110, $context, $this->getSourceContext());
            // line 118
            echo "
                     ";
        }
        // line 120
        echo "
                     ";
        // line 121
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 121))) {
            // line 122
            echo "                        ";
            // line 123
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 127
($context["field_options"] ?? null)], 123, $context, $this->getSourceContext());
            // line 128
            echo "
                     ";
        }
        // line 130
        echo "
                     ";
        // line 131
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 131)) : ([]));
        // line 132
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 133
            echo "                        ";
            ob_start(function () { return ''; });
            // line 134
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 136
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo "
                        ";
            // line 141
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 143
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 141, $context, $this->getSourceContext());
            // line 145
            echo "

                        ";
            // line 147
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 147, $context, $this->getSourceContext());
            echo " ";
            // line 148
            echo "                     ";
        }
        // line 149
        echo "
                     ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 150)) {
            // line 151
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 154
($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 156
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 157
($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null), "required" => true])], 151, $context, $this->getSourceContext());
            // line 160
            echo "
                     ";
        }
        // line 162
        echo "
                     ";
        // line 163
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 163))) {
            // line 164
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 166
($context["item"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"], twig_array_merge(            // line 171
($context["field_options"] ?? null), ["required" => true])], 164, $context, $this->getSourceContext());
            // line 174
            echo "
                     ";
        }
        // line 176
        echo "
                     ";
        // line 177
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 177)) {
            // line 178
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 178)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 178, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 180
        echo "
                     ";
        // line 181
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 181);
        // line 182
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 182);
        // line 183
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 183)) {
            // line 184
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 185
($context["type_itemtype"] ?? null),             // line 186
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 187
($context["item"] ?? null), "fields", [], "any", false, false, false, 187)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1), twig_array_merge(            // line 189
($context["field_options"] ?? null), ["required" => true])], 184, $context, $this->getSourceContext());
            // line 192
            echo "
                     ";
        }
        // line 194
        echo "
                     ";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 195)) {
            // line 196
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 199
($context["item"] ?? null), "fields", [], "any", false, false, false, 199)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 201
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 202
($context["item"] ?? null), "fields", [], "any", false, false, false, 202)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 196, $context, $this->getSourceContext());
            // line 204
            echo "
                     ";
        }
        // line 206
        echo "
                    ";
        // line 216
        echo "
                     ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 217)) {
            // line 218
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 220
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 222
($context["withtemplate"] ?? null),             // line 223
($context["field_options"] ?? null)], 218, $context, $this->getSourceContext());
            // line 224
            echo "
                     ";
        }
        // line 226
        echo "
                     ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 227)) {
            // line 228
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 230
($context["item"] ?? null), __("Phone 2"),             // line 232
($context["withtemplate"] ?? null),             // line 233
($context["field_options"] ?? null)], 228, $context, $this->getSourceContext());
            // line 234
            echo "
                     ";
        }
        // line 236
        echo "
                     ";
        // line 237
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 237)) {
            // line 238
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 240
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 242
($context["withtemplate"] ?? null),             // line 243
($context["field_options"] ?? null)], 238, $context, $this->getSourceContext());
            // line 244
            echo "
                     ";
        }
        // line 246
        echo "
                     ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 247)) {
            // line 248
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 250
($context["item"] ?? null), __("Mobile phone"),             // line 252
($context["withtemplate"] ?? null),             // line 253
($context["field_options"] ?? null)], 248, $context, $this->getSourceContext());
            // line 254
            echo "
                     ";
        }
        // line 256
        echo "
                     ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 257)) {
            // line 258
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 260
($context["item"] ?? null), __("Fax"),             // line 262
($context["withtemplate"] ?? null),             // line 263
($context["field_options"] ?? null)], 258, $context, $this->getSourceContext());
            // line 264
            echo "
                     ";
        }
        // line 266
        echo "
                     ";
        // line 267
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 267)) {
            // line 268
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 270
($context["item"] ?? null), __("Website"),             // line 272
($context["withtemplate"] ?? null),             // line 273
($context["field_options"] ?? null)], 268, $context, $this->getSourceContext());
            // line 274
            echo "
                     ";
        }
        // line 276
        echo "
                     ";
        // line 277
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 277)) {
            // line 278
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 280
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 282
($context["withtemplate"] ?? null), twig_array_merge(            // line 283
($context["field_options"] ?? null), ["required" => true])], 278, $context, $this->getSourceContext());
            // line 286
            echo "
                     ";
        }
        // line 288
        echo "
                     ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 289)) {
            // line 290
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 290)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 290, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 292
        echo "
                     ";
        // line 293
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 293)) {
            // line 294
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 296
($context["item"] ?? null), __("Postal code"),             // line 298
($context["withtemplate"] ?? null),             // line 299
($context["field_options"] ?? null)], 294, $context, $this->getSourceContext());
            // line 300
            echo "
                        
                     ";
        }
        // line 303
        echo "
                     ";
        // line 304
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 304)) {
            // line 305
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 307
($context["item"] ?? null), "Cidadezinha",             // line 309
($context["withtemplate"] ?? null),             // line 310
($context["field_options"] ?? null)], 305, $context, $this->getSourceContext());
            // line 311
            echo "
                     ";
        }
        // line 313
        echo "
                     ";
        // line 315
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 315)) {
            // line 316
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 318
($context["item"] ?? null), __("Postal code"),             // line 320
($context["withtemplate"] ?? null),             // line 321
($context["field_options"] ?? null)], 316, $context, $this->getSourceContext());
            // line 322
            echo "
                     ";
        }
        // line 324
        echo "
                     ";
        // line 325
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 326
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 328
($context["item"] ?? null), _x("location", "State"),             // line 330
($context["withtemplate"] ?? null),             // line 331
($context["field_options"] ?? null)], 326, $context, $this->getSourceContext());
            // line 332
            echo "
                     ";
        }
        // line 334
        echo "
                     ";
        // line 335
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 335)) {
            // line 336
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 338
($context["item"] ?? null), __("Country"),             // line 340
($context["withtemplate"] ?? null),             // line 341
($context["field_options"] ?? null)], 336, $context, $this->getSourceContext());
            // line 342
            echo "
                     ";
        }
        // line 344
        echo "
                     ";
        // line 345
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 345)) {
            // line 346
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 347
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 347)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 347, $context, $this->getSourceContext());
                // line 350
                echo "
                        ";
            } else {
                // line 352
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 352)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 352, $context, $this->getSourceContext());
                // line 355
                echo "
                        ";
            }
            // line 357
            echo "                     ";
        }
        // line 358
        echo "
                     ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 359)) {
            // line 360
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 362
($context["item"] ?? null), "fields", [], "any", false, false, false, 362)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 364
($context["field_options"] ?? null)], 360, $context, $this->getSourceContext());
            // line 365
            echo "
                     ";
        }
        // line 367
        echo "
                    ";
        // line 379
        echo "     

                     ";
        // line 381
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 381)) {
            // line 382
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 385
($context["item"] ?? null), "fields", [], "any", false, false, false, 385)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 386
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))), twig_array_merge(            // line 387
($context["field_options"] ?? null), ["required" => true])], 382, $context, $this->getSourceContext());
            // line 391
            echo "
                     ";
        }
        // line 393
        echo "
                     ";
        // line 406
        echo "
                     ";
        // line 407
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 407);
        // line 408
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 408);
        // line 409
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 409)) {
            // line 410
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 411
($context["model_itemtype"] ?? null),             // line 412
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 413
($context["item"] ?? null), "fields", [], "any", false, false, false, 413)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 415
($context["field_options"] ?? null), ["required" => true])], 410, $context, $this->getSourceContext());
            // line 418
            echo "
                     ";
        }
        // line 420
        echo "
                     ";
        // line 430
        echo "
                     ";
        // line 431
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 431)) {
            // line 432
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 434
($context["item"] ?? null), "fields", [], "any", false, false, false, 434)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 436
($context["field_options"] ?? null), ["required" => true])], 432, $context, $this->getSourceContext());
            // line 439
            echo "
                     ";
        }
        // line 441
        echo "
                     ";
        // line 451
        echo "
                     ";
        // line 461
        echo "
                   

                     ";
        // line 464
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 464)) {
            // line 465
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 468
($context["item"] ?? null), "fields", [], "any", false, false, false, 468)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 470
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 471
($context["item"] ?? null), "fields", [], "any", false, false, false, 471)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 465, $context, $this->getSourceContext());
            // line 474
            echo "
                     ";
        }
        // line 476
        echo "
                     

                     ";
        // line 479
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 479)) {
            // line 480
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 482
($context["item"] ?? null), "fields", [], "any", false, false, false, 482)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 484
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 480, $context, $this->getSourceContext());
            // line 488
            echo "
                     ";
        }
        // line 490
        echo "
                     ";
        // line 500
        echo "
                     ";
        // line 513
        echo "
                     ";
        // line 522
        echo "
                     ";
        // line 532
        echo "
                     ";
        // line 533
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 533)) {
            // line 534
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 536
($context["item"] ?? null), "fields", [], "any", false, false, false, 536)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 538
($context["field_options"] ?? null)], 534, $context, $this->getSourceContext());
            // line 539
            echo "
                     ";
        }
        // line 541
        echo "

                     ";
        // line 543
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 543)) {
            // line 544
            echo "                        ";
            ob_start(function () { return ''; });
            // line 545
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 546
($context["item"] ?? null), "fields", [], "any", false, false, false, 546)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 547
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 553
($context["params"] ?? null))]);
            // line 554
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 555
            echo "                        ";
            ob_start(function () { return ''; });
            // line 556
            echo "                           <span class=\"text-muted\">
                              ";
            // line 557
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 557)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 558
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 560
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 562
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 564
($context["field_options"] ?? null), ["add_field_html" =>             // line 565
($context["last_alert_html"] ?? null)])], 560, $context, $this->getSourceContext());
            // line 567
            echo "
                     ";
        }
        // line 569
        echo "

                     ";
        // line 571
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 571)) {
            // line 572
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 574
($context["item"] ?? null), "fields", [], "any", false, false, false, 574)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 576
($context["field_options"] ?? null)], 572, $context, $this->getSourceContext());
            // line 577
            echo "
                     ";
        }
        // line 579
        echo "
                     ";
        // line 589
        echo "
                     ";
        // line 590
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 590)) {
            // line 591
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 591, $context, $this->getSourceContext());
            // line 594
            echo "
                     ";
        }
        // line 596
        echo "
                     ";
        // line 597
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 597)) {
            // line 598
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 600
($context["item"] ?? null), "fields", [], "any", false, false, false, 600)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 602
($context["field_options"] ?? null)], 598, $context, $this->getSourceContext());
            // line 603
            echo "
                     ";
        }
        // line 605
        echo "
                     ";
        // line 606
        $this->displayBlock('more_fields', $context, $blocks);
        // line 608
        echo "                  ";
    }

    // line 606
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 607
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
        return array (  860 => 607,  856 => 606,  852 => 608,  850 => 606,  847 => 605,  843 => 603,  841 => 602,  840 => 600,  838 => 598,  836 => 597,  833 => 596,  829 => 594,  826 => 591,  824 => 590,  821 => 589,  818 => 579,  814 => 577,  812 => 576,  811 => 574,  809 => 572,  807 => 571,  803 => 569,  799 => 567,  797 => 565,  796 => 564,  795 => 562,  793 => 560,  789 => 558,  787 => 557,  784 => 556,  781 => 555,  778 => 554,  776 => 553,  775 => 547,  774 => 546,  772 => 545,  769 => 544,  767 => 543,  763 => 541,  759 => 539,  757 => 538,  756 => 536,  754 => 534,  752 => 533,  749 => 532,  746 => 522,  743 => 513,  740 => 500,  737 => 490,  733 => 488,  731 => 484,  730 => 482,  728 => 480,  726 => 479,  721 => 476,  717 => 474,  715 => 471,  714 => 470,  713 => 468,  711 => 465,  709 => 464,  704 => 461,  701 => 451,  698 => 441,  694 => 439,  692 => 436,  691 => 434,  689 => 432,  687 => 431,  684 => 430,  681 => 420,  677 => 418,  675 => 415,  674 => 413,  673 => 412,  672 => 411,  670 => 410,  667 => 409,  664 => 408,  662 => 407,  659 => 406,  656 => 393,  652 => 391,  650 => 387,  649 => 386,  648 => 385,  646 => 382,  644 => 381,  640 => 379,  637 => 367,  633 => 365,  631 => 364,  630 => 362,  628 => 360,  626 => 359,  623 => 358,  620 => 357,  616 => 355,  613 => 352,  609 => 350,  606 => 347,  603 => 346,  601 => 345,  598 => 344,  594 => 342,  592 => 341,  591 => 340,  590 => 338,  588 => 336,  586 => 335,  583 => 334,  579 => 332,  577 => 331,  576 => 330,  575 => 328,  573 => 326,  571 => 325,  568 => 324,  564 => 322,  562 => 321,  561 => 320,  560 => 318,  558 => 316,  555 => 315,  552 => 313,  548 => 311,  546 => 310,  545 => 309,  544 => 307,  542 => 305,  540 => 304,  537 => 303,  532 => 300,  530 => 299,  529 => 298,  528 => 296,  526 => 294,  524 => 293,  521 => 292,  515 => 290,  513 => 289,  510 => 288,  506 => 286,  504 => 283,  503 => 282,  502 => 280,  500 => 278,  498 => 277,  495 => 276,  491 => 274,  489 => 273,  488 => 272,  487 => 270,  485 => 268,  483 => 267,  480 => 266,  476 => 264,  474 => 263,  473 => 262,  472 => 260,  470 => 258,  468 => 257,  465 => 256,  461 => 254,  459 => 253,  458 => 252,  457 => 250,  455 => 248,  453 => 247,  450 => 246,  446 => 244,  444 => 243,  443 => 242,  442 => 240,  440 => 238,  438 => 237,  435 => 236,  431 => 234,  429 => 233,  428 => 232,  427 => 230,  425 => 228,  423 => 227,  420 => 226,  416 => 224,  414 => 223,  413 => 222,  412 => 220,  410 => 218,  408 => 217,  405 => 216,  402 => 206,  398 => 204,  396 => 202,  395 => 201,  394 => 199,  392 => 196,  390 => 195,  387 => 194,  383 => 192,  381 => 189,  380 => 187,  379 => 186,  378 => 185,  376 => 184,  373 => 183,  370 => 182,  368 => 181,  365 => 180,  359 => 178,  357 => 177,  354 => 176,  350 => 174,  348 => 171,  347 => 166,  345 => 164,  343 => 163,  340 => 162,  336 => 160,  334 => 157,  333 => 156,  332 => 154,  330 => 151,  328 => 150,  325 => 149,  322 => 148,  319 => 147,  315 => 145,  313 => 143,  312 => 141,  309 => 140,  305 => 138,  296 => 136,  292 => 135,  289 => 134,  286 => 133,  283 => 132,  281 => 131,  278 => 130,  274 => 128,  272 => 127,  271 => 125,  269 => 123,  267 => 122,  265 => 121,  262 => 120,  258 => 118,  256 => 116,  255 => 115,  254 => 113,  253 => 112,  252 => 111,  250 => 110,  247 => 109,  245 => 108,  242 => 107,  238 => 105,  236 => 102,  235 => 101,  234 => 100,  233 => 98,  231 => 95,  228 => 94,  226 => 93,  223 => 92,  220 => 91,  217 => 90,  213 => 88,  210 => 86,  207 => 85,  205 => 84,  202 => 83,  198 => 81,  196 => 80,  195 => 79,  194 => 77,  192 => 75,  190 => 74,  187 => 73,  182 => 70,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 635,  157 => 632,  154 => 631,  152 => 630,  149 => 629,  143 => 627,  141 => 626,  136 => 625,  130 => 623,  128 => 622,  125 => 621,  123 => 620,  116 => 616,  112 => 614,  110 => 613,  107 => 612,  105 => 611,  103 => 610,  101 => 609,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "/var/www/html/glpi/templates/generic_show_form.html.twig");
    }
}
