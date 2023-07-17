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
class __TwigTemplate_2478d4f25c79d9cdb8e1a1ccea682d2f extends Template
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
        // line 607
        echo "               </div> ";
        // line 608
        echo "            </div> ";
        // line 609
        echo "         </div> ";
        // line 610
        echo "      </div>
      ";
        // line 611
        if (($context["item_has_pictures"] ?? null)) {
            // line 612
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 614
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 618
        echo "   </div> ";
        // line 619
        echo "
   ";
        // line 620
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 621
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 623
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 624
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 625
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 627
        echo "
   ";
        // line 628
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 629
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 630
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 633
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
        // line 72
        echo "
                     ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 73)) {
            // line 74
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 76
($context["item"] ?? null), __("First name"),             // line 78
($context["withtemplate"] ?? null),             // line 79
($context["field_options"] ?? null)], 74, $context, $this->getSourceContext());
            // line 80
            echo "
                     ";
        }
        // line 82
        echo "
                     ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 83)) {
            // line 84
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 85
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 85, $context, $this->getSourceContext());
                // line 87
                echo "
                        ";
            } else {
                // line 89
                echo "                        ";
            }
            // line 90
            echo "                     ";
        }
        // line 91
        echo "
                     ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 92)) {
            // line 93
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 93), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 93))) => 1]) : ([]));
            // line 94
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 99
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 101
($context["condition"] ?? null), "required" => true])], 94, $context, $this->getSourceContext());
            // line 104
            echo "
                     ";
        }
        // line 106
        echo "
                     ";
        // line 107
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 107);
        // line 108
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 108)) {
            // line 109
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 110
($context["item_type"] ?? null),             // line 111
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 112
($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 114
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 115
($context["item"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 109, $context, $this->getSourceContext());
            // line 117
            echo "
                     ";
        }
        // line 119
        echo "
                     ";
        // line 120
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 120))) {
            // line 121
            echo "                        ";
            // line 122
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 124
($context["item"] ?? null), "fields", [], "any", false, false, false, 124)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 126
($context["field_options"] ?? null)], 122, $context, $this->getSourceContext());
            // line 127
            echo "
                     ";
        }
        // line 129
        echo "
                     ";
        // line 130
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 130)) : ([]));
        // line 131
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 132
            echo "                        ";
            ob_start();
            // line 133
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 135
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo "
                        ";
            // line 140
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 142
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 140, $context, $this->getSourceContext());
            // line 144
            echo "

                        ";
            // line 146
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 146, $context, $this->getSourceContext());
            echo " ";
            // line 147
            echo "                     ";
        }
        // line 148
        echo "
                     ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 149)) {
            // line 150
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 155
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 156
($context["item"] ?? null), "fields", [], "any", false, false, false, 156)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null), "required" => true])], 150, $context, $this->getSourceContext());
            // line 159
            echo "
                     ";
        }
        // line 161
        echo "
                     ";
        // line 162
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 162))) {
            // line 163
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 165
($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"], twig_array_merge(            // line 170
($context["field_options"] ?? null), ["required" => true])], 163, $context, $this->getSourceContext());
            // line 173
            echo "
                     ";
        }
        // line 175
        echo "
                     ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 176)) {
            // line 177
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 177)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 177, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 179
        echo "
                     ";
        // line 180
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 180);
        // line 181
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 181);
        // line 182
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 182)) {
            // line 183
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 184
($context["type_itemtype"] ?? null),             // line 185
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 186
($context["item"] ?? null), "fields", [], "any", false, false, false, 186)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1), twig_array_merge(            // line 188
($context["field_options"] ?? null), ["required" => true])], 183, $context, $this->getSourceContext());
            // line 191
            echo "
                     ";
        }
        // line 193
        echo "
                     ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 194)) {
            // line 195
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 198
($context["item"] ?? null), "fields", [], "any", false, false, false, 198)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 200
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 201
($context["item"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 195, $context, $this->getSourceContext());
            // line 203
            echo "
                     ";
        }
        // line 205
        echo "
                    ";
        // line 215
        echo "
                     ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 216)) {
            // line 217
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 219
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 221
($context["withtemplate"] ?? null),             // line 222
($context["field_options"] ?? null)], 217, $context, $this->getSourceContext());
            // line 223
            echo "
                     ";
        }
        // line 225
        echo "
                     ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 226)) {
            // line 227
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 229
($context["item"] ?? null), __("Phone 2"),             // line 231
($context["withtemplate"] ?? null),             // line 232
($context["field_options"] ?? null)], 227, $context, $this->getSourceContext());
            // line 233
            echo "
                     ";
        }
        // line 235
        echo "
                     ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 236)) {
            // line 237
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 239
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 241
($context["withtemplate"] ?? null),             // line 242
($context["field_options"] ?? null)], 237, $context, $this->getSourceContext());
            // line 243
            echo "
                     ";
        }
        // line 245
        echo "
                     ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 246)) {
            // line 247
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 249
($context["item"] ?? null), __("Mobile phone"),             // line 251
($context["withtemplate"] ?? null),             // line 252
($context["field_options"] ?? null)], 247, $context, $this->getSourceContext());
            // line 253
            echo "
                     ";
        }
        // line 255
        echo "
                     ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 256)) {
            // line 257
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 259
($context["item"] ?? null), __("Fax"),             // line 261
($context["withtemplate"] ?? null),             // line 262
($context["field_options"] ?? null)], 257, $context, $this->getSourceContext());
            // line 263
            echo "
                     ";
        }
        // line 265
        echo "
                     ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 266)) {
            // line 267
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 269
($context["item"] ?? null), __("Website"),             // line 271
($context["withtemplate"] ?? null),             // line 272
($context["field_options"] ?? null)], 267, $context, $this->getSourceContext());
            // line 273
            echo "
                     ";
        }
        // line 275
        echo "
                     ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 276)) {
            // line 277
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 279
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 281
($context["withtemplate"] ?? null), twig_array_merge(            // line 282
($context["field_options"] ?? null), ["required" => true])], 277, $context, $this->getSourceContext());
            // line 285
            echo "
                     ";
        }
        // line 287
        echo "
                     ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 288)) {
            // line 289
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 289, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 291
        echo "
                     ";
        // line 292
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 292)) {
            // line 293
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 295
($context["item"] ?? null), __("Postal code"),             // line 297
($context["withtemplate"] ?? null),             // line 298
($context["field_options"] ?? null)], 293, $context, $this->getSourceContext());
            // line 299
            echo "
                     ";
        }
        // line 301
        echo "
                     ";
        // line 302
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 302)) {
            // line 303
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 305
($context["item"] ?? null), __("City"),             // line 307
($context["withtemplate"] ?? null),             // line 308
($context["field_options"] ?? null)], 303, $context, $this->getSourceContext());
            // line 309
            echo "
                     ";
        }
        // line 311
        echo "
                     ";
        // line 313
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 313)) {
            // line 314
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 316
($context["item"] ?? null), __("Postal code"),             // line 318
($context["withtemplate"] ?? null),             // line 319
($context["field_options"] ?? null)], 314, $context, $this->getSourceContext());
            // line 320
            echo "
                     ";
        }
        // line 322
        echo "
                     ";
        // line 323
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 324
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 326
($context["item"] ?? null), _x("location", "State"),             // line 328
($context["withtemplate"] ?? null),             // line 329
($context["field_options"] ?? null)], 324, $context, $this->getSourceContext());
            // line 330
            echo "
                     ";
        }
        // line 332
        echo "
                     ";
        // line 333
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 333)) {
            // line 334
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 336
($context["item"] ?? null), __("Country"),             // line 338
($context["withtemplate"] ?? null),             // line 339
($context["field_options"] ?? null)], 334, $context, $this->getSourceContext());
            // line 340
            echo "
                     ";
        }
        // line 342
        echo "
                     ";
        // line 343
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 343)) {
            // line 344
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 345
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 345, $context, $this->getSourceContext());
                // line 348
                echo "
                        ";
            } else {
                // line 350
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 350)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 350, $context, $this->getSourceContext());
                // line 353
                echo "
                        ";
            }
            // line 355
            echo "                     ";
        }
        // line 356
        echo "
                     ";
        // line 357
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 357)) {
            // line 358
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 360
($context["item"] ?? null), "fields", [], "any", false, false, false, 360)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 362
($context["field_options"] ?? null)], 358, $context, $this->getSourceContext());
            // line 363
            echo "
                     ";
        }
        // line 365
        echo "
                    ";
        // line 377
        echo "     

                     ";
        // line 379
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 379)) {
            // line 380
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 383
($context["item"] ?? null), "fields", [], "any", false, false, false, 383)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 384
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))), twig_array_merge(            // line 385
($context["field_options"] ?? null), ["required" => true, "upper" => true])], 380, $context, $this->getSourceContext());
            // line 389
            echo "
                     ";
        }
        // line 391
        echo "
                     ";
        // line 404
        echo "
                     ";
        // line 405
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 405);
        // line 406
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 406);
        // line 407
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 407)) {
            // line 408
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 409
($context["model_itemtype"] ?? null),             // line 410
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 411
($context["item"] ?? null), "fields", [], "any", false, false, false, 411)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 413
($context["field_options"] ?? null), ["required" => true])], 408, $context, $this->getSourceContext());
            // line 416
            echo "
                     ";
        }
        // line 418
        echo "
                     ";
        // line 428
        echo "
                     ";
        // line 429
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 429)) {
            // line 430
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 432
($context["item"] ?? null), "fields", [], "any", false, false, false, 432)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 434
($context["field_options"] ?? null), ["required" => true])], 430, $context, $this->getSourceContext());
            // line 437
            echo "
                     ";
        }
        // line 439
        echo "
                     ";
        // line 449
        echo "
                     ";
        // line 459
        echo "
                   

                     ";
        // line 462
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 462)) {
            // line 463
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 466
($context["item"] ?? null), "fields", [], "any", false, false, false, 466)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 468
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 469
($context["item"] ?? null), "fields", [], "any", false, false, false, 469)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 463, $context, $this->getSourceContext());
            // line 472
            echo "
                     ";
        }
        // line 474
        echo "
                     

                     ";
        // line 477
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 477)) {
            // line 478
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 480
($context["item"] ?? null), "fields", [], "any", false, false, false, 480)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 482
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 478, $context, $this->getSourceContext());
            // line 486
            echo "
                     ";
        }
        // line 488
        echo "
                     ";
        // line 498
        echo "
                     ";
        // line 511
        echo "
                     ";
        // line 520
        echo "
                     ";
        // line 530
        echo "
                     ";
        // line 531
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 531)) {
            // line 532
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 534
($context["item"] ?? null), "fields", [], "any", false, false, false, 534)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 536
($context["field_options"] ?? null)], 532, $context, $this->getSourceContext());
            // line 537
            echo "
                     ";
        }
        // line 539
        echo "

                     ";
        // line 541
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 541)) {
            // line 542
            echo "                        ";
            ob_start();
            // line 543
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 544
($context["item"] ?? null), "fields", [], "any", false, false, false, 544)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 545
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 551
($context["params"] ?? null))]);
            // line 552
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 553
            echo "                        ";
            ob_start();
            // line 554
            echo "                           <span class=\"text-muted\">
                              ";
            // line 555
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 555)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 556
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 558
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 560
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 562
($context["field_options"] ?? null), ["add_field_html" =>             // line 563
($context["last_alert_html"] ?? null)])], 558, $context, $this->getSourceContext());
            // line 565
            echo "
                     ";
        }
        // line 567
        echo "

                     ";
        // line 569
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 569)) {
            // line 570
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 572
($context["item"] ?? null), "fields", [], "any", false, false, false, 572)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 574
($context["field_options"] ?? null)], 570, $context, $this->getSourceContext());
            // line 575
            echo "
                     ";
        }
        // line 577
        echo "
                     ";
        // line 587
        echo "
                     ";
        // line 588
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 588)) {
            // line 589
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 589, $context, $this->getSourceContext());
            // line 592
            echo "
                     ";
        }
        // line 594
        echo "
                     ";
        // line 595
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 595)) {
            // line 596
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 598
($context["item"] ?? null), "fields", [], "any", false, false, false, 598)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 600
($context["field_options"] ?? null)], 596, $context, $this->getSourceContext());
            // line 601
            echo "
                     ";
        }
        // line 603
        echo "
                     ";
        // line 604
        $this->displayBlock('more_fields', $context, $blocks);
        // line 606
        echo "                  ";
    }

    // line 604
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 605
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
        return array (  858 => 605,  854 => 604,  850 => 606,  848 => 604,  845 => 603,  841 => 601,  839 => 600,  838 => 598,  836 => 596,  834 => 595,  831 => 594,  827 => 592,  824 => 589,  822 => 588,  819 => 587,  816 => 577,  812 => 575,  810 => 574,  809 => 572,  807 => 570,  805 => 569,  801 => 567,  797 => 565,  795 => 563,  794 => 562,  793 => 560,  791 => 558,  787 => 556,  785 => 555,  782 => 554,  779 => 553,  776 => 552,  774 => 551,  773 => 545,  772 => 544,  770 => 543,  767 => 542,  765 => 541,  761 => 539,  757 => 537,  755 => 536,  754 => 534,  752 => 532,  750 => 531,  747 => 530,  744 => 520,  741 => 511,  738 => 498,  735 => 488,  731 => 486,  729 => 482,  728 => 480,  726 => 478,  724 => 477,  719 => 474,  715 => 472,  713 => 469,  712 => 468,  711 => 466,  709 => 463,  707 => 462,  702 => 459,  699 => 449,  696 => 439,  692 => 437,  690 => 434,  689 => 432,  687 => 430,  685 => 429,  682 => 428,  679 => 418,  675 => 416,  673 => 413,  672 => 411,  671 => 410,  670 => 409,  668 => 408,  665 => 407,  662 => 406,  660 => 405,  657 => 404,  654 => 391,  650 => 389,  648 => 385,  647 => 384,  646 => 383,  644 => 380,  642 => 379,  638 => 377,  635 => 365,  631 => 363,  629 => 362,  628 => 360,  626 => 358,  624 => 357,  621 => 356,  618 => 355,  614 => 353,  611 => 350,  607 => 348,  604 => 345,  601 => 344,  599 => 343,  596 => 342,  592 => 340,  590 => 339,  589 => 338,  588 => 336,  586 => 334,  584 => 333,  581 => 332,  577 => 330,  575 => 329,  574 => 328,  573 => 326,  571 => 324,  569 => 323,  566 => 322,  562 => 320,  560 => 319,  559 => 318,  558 => 316,  556 => 314,  553 => 313,  550 => 311,  546 => 309,  544 => 308,  543 => 307,  542 => 305,  540 => 303,  538 => 302,  535 => 301,  531 => 299,  529 => 298,  528 => 297,  527 => 295,  525 => 293,  523 => 292,  520 => 291,  514 => 289,  512 => 288,  509 => 287,  505 => 285,  503 => 282,  502 => 281,  501 => 279,  499 => 277,  497 => 276,  494 => 275,  490 => 273,  488 => 272,  487 => 271,  486 => 269,  484 => 267,  482 => 266,  479 => 265,  475 => 263,  473 => 262,  472 => 261,  471 => 259,  469 => 257,  467 => 256,  464 => 255,  460 => 253,  458 => 252,  457 => 251,  456 => 249,  454 => 247,  452 => 246,  449 => 245,  445 => 243,  443 => 242,  442 => 241,  441 => 239,  439 => 237,  437 => 236,  434 => 235,  430 => 233,  428 => 232,  427 => 231,  426 => 229,  424 => 227,  422 => 226,  419 => 225,  415 => 223,  413 => 222,  412 => 221,  411 => 219,  409 => 217,  407 => 216,  404 => 215,  401 => 205,  397 => 203,  395 => 201,  394 => 200,  393 => 198,  391 => 195,  389 => 194,  386 => 193,  382 => 191,  380 => 188,  379 => 186,  378 => 185,  377 => 184,  375 => 183,  372 => 182,  369 => 181,  367 => 180,  364 => 179,  358 => 177,  356 => 176,  353 => 175,  349 => 173,  347 => 170,  346 => 165,  344 => 163,  342 => 162,  339 => 161,  335 => 159,  333 => 156,  332 => 155,  331 => 153,  329 => 150,  327 => 149,  324 => 148,  321 => 147,  318 => 146,  314 => 144,  312 => 142,  311 => 140,  308 => 139,  304 => 137,  295 => 135,  291 => 134,  288 => 133,  285 => 132,  282 => 131,  280 => 130,  277 => 129,  273 => 127,  271 => 126,  270 => 124,  268 => 122,  266 => 121,  264 => 120,  261 => 119,  257 => 117,  255 => 115,  254 => 114,  253 => 112,  252 => 111,  251 => 110,  249 => 109,  246 => 108,  244 => 107,  241 => 106,  237 => 104,  235 => 101,  234 => 100,  233 => 99,  232 => 97,  230 => 94,  227 => 93,  225 => 92,  222 => 91,  219 => 90,  216 => 89,  212 => 87,  209 => 85,  206 => 84,  204 => 83,  201 => 82,  197 => 80,  195 => 79,  194 => 78,  193 => 76,  191 => 74,  189 => 73,  186 => 72,  182 => 70,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 633,  157 => 630,  154 => 629,  152 => 628,  149 => 627,  143 => 625,  141 => 624,  136 => 623,  130 => 621,  128 => 620,  125 => 619,  123 => 618,  116 => 614,  112 => 612,  110 => 611,  107 => 610,  105 => 609,  103 => 608,  101 => 607,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
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

{% set bg = '' %}
{% if item.isDeleted() %}
   {% set bg = 'asset-deleted' %}
{% endif %}

<div class=\"asset {{ bg }}\">
   {{ include('components/form/header.html.twig') }}

   {% set rand = random() %}
   {% set params  = params ?? [] %}
   {% set target       = params['target'] ?? item.getFormURL() %}
   {% set withtemplate = params['withtemplate'] ?? '' %}
   {% set item_type = item.getType() %}
   {% set item_has_pictures = item.hasItemtypeOrModelPictures() %}
   {% set field_options = {
       'locked_fields': item.getLockedFields(),
   } %}

   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-{{ item_has_pictures ? '9' : '12' }} flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  {% block form_fields %}
                     {% if item.isField('name') %}
                        {{ fields.autoNameField(
                           'name',
                           item,
                           (item_type == 'Contact' ? __('Patrimônio') : __('Patrimônio')),
                           withtemplate,
                           field_options|merge({
                              required:true,
                              upper:true,
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('firstname') %}
                        {{ fields.autoNameField(
                           'firstname',
                           item,
                           __('First name'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('is_active') %}
                        {% if withtemplate is not empty or withtemplate == 1 %}
                           {{ fields.hiddenField('is_active', item.fields['is_active'], __('Is active'), {
                              'add_field_html': __('No')
                           }) }}
                        {% else %}
                        {% endif %}
                     {% endif %}

                     {% if item.isField('states_id') %}
                        {% set condition = item.getType() in config('state_types') ? {('is_visible_' ~ item.getType()|lower): 1} : {} %}
                        {{ fields.dropdownField(
                           'State',
                           'states_id',
                           item.fields['states_id'],
                           __('Status'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': condition,
                              'required':true,
                           })
                        ) }}
                     {% endif %}

                     {% set fk = item.getForeignKeyField() %}
                     {% if item.isField(fk) %}
                        {{ fields.dropdownField(
                           item_type,
                           fk,
                           item.fields[fk],
                           __('As child of'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                           })
                        ) }}
                     {% endif %}

                     {% if item_type != 'SoftwareLicense' and item.isField('is_helpdesk_visible') %}
                        {# TODO Drop unused 'is_helpdesk_visible' field in SoftwareLicense schema? #}
                        {{ fields.checkboxField(
                           'is_helpdesk_visible',
                           item.fields['is_helpdesk_visible'],
                           __('Associable to a ticket'),
                           field_options
                        ) }}
                     {% endif %}

                     {% set dc_breadcrumbs = item is usingtrait('Glpi\\\\Features\\\\DCBreadcrumb') ? item.getDcBreadcrumb() : [] %}
                     {% if dc_breadcrumbs|length > 0 %}
                        {% set dc_breadcrumbs %}
                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              {% for dc_item in dc_breadcrumbs|reverse %}
                                 <li class=\"breadcrumb-item text-nowrap\">{{ dc_item|raw }}</li>
                              {% endfor %}
                           </ol>
                        {% endset %}

                        {{ fields.htmlField(
                           '',
                           dc_breadcrumbs,
                           __('Data center position'),
                        ) }}

                        {{ fields.nullField() }} {# set an empty space in front of dc breadcrumb #}
                     {% endif %}

                     {% if item.isField('locations_id') %}
                        {{ fields.dropdownField(
                           'Location',
                           'locations_id',
                           item.fields['locations_id'],
                           'Location'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'required':true
                           })
                        ) }}
                     {% endif %}

                     {% if item_type == 'Unmanaged' and item.isField('item_type') %}
                        {{ fields.dropdownArrayField(
                            'item_type',
                            item.fields['itemtype'],
                            _n('Type', 'Types', 1),
                            [
                                'Computer', 'NetworkEquipment', 'Printer', 'Peripheral', 'Phone'
                            ],
                            field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('date_domaincreation') %}
                        {{ fields.datetimeField('date_domaincreation', item.fields['date_domaincreation'], __('Registration date')) }}
                     {% endif %}

                     {% set type_itemtype = item.getTypeClass() %}
                     {% set type_fk = item.getTypeForeignKeyField() %}
                     {% if item.isField(type_fk) %}
                        {{ fields.dropdownField(
                           type_itemtype,
                           type_fk,
                           item.fields[type_fk],
                           _n('Type', 'Types', 1),
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('usertitles_id') %}
                        {{ fields.dropdownField(
                           'UserTitle',
                           'usertitles_id',
                           item.fields['usertitles_id'],
                           'UserTitle'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                           })
                        ) }}
                     {% endif %}

                    {# {% if item.isField('registration_number') %}
                        {{ fields.autoNameField(
                           'registration_number',
                           item,
                           (item_type starts with 'User' ? _x('user', 'Administrative number') : _x('infocom', 'Administrative number')),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %} #}

                     {% if item.isField('phone') %}
                        {{ fields.autoNameField(
                           'phone',
                           item,
                           'Phone'|itemtype_name,
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('phone2') %}
                        {{ fields.autoNameField(
                           'phone2',
                           item,
                           __('Phone 2'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('phonenumber') %}
                        {{ fields.autoNameField(
                           'phonenumber',
                           item,
                           'Phone'|itemtype_name,
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('mobile') %}
                        {{ fields.autoNameField(
                           'mobile',
                           item,
                           __('Mobile phone'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('fax') %}
                        {{ fields.autoNameField(
                           'fax',
                           item,
                           __('Fax'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('website') %}
                        {{ fields.autoNameField(
                           'website',
                           item,
                           __('Website'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('email') %}
                        {{ fields.autoNameField(
                           'email',
                           item,
                           _n('Email', 'Emails', 1),
                           withtemplate,
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('address') %}
                        {{ fields.textareaField('address', item.fields['address'], __('Address')) }}
                     {% endif %}

                     {% if item.isField('postalcode') %}
                        {{ fields.autoNameField(
                           'postalcode',
                           item,
                           __('Postal code'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('town') %}
                        {{ fields.autoNameField(
                           'town',
                           item,
                           __('City'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {# Post code field named differently for Suppliers. Placed after town to maintain field order from 9.5)#}
                     {% if item.isField('postcode') %}
                        {{ fields.autoNameField(
                           'postcode',
                           item,
                           __('Postal code'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item_type == 'Supplier' or item_type == 'Contact' %}
                        {{ fields.autoNameField(
                           'state',
                           item,
                           _x('location', 'State'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('country') %}
                        {{ fields.autoNameField(
                           'country',
                           item,
                           __('Country'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('date_expiration') %}
                        {% if item_type == 'Certificate' %}
                           {{ fields.dateField('date_expiration', item.fields['date_expiration'], __('Expiration date'), {
                              'helper': __('Empty for infinite'),
                              'checkIsExpired': true
                           }) }}
                        {% else %}
                           {{ fields.datetimeField('date_expiration', item.fields['date_expiration'], __('Expiration date'), {
                              'helper': __('Empty for infinite'),
                              'checkIsExpired': true
                           }) }}
                        {% endif %}
                     {% endif %}

                     {% if item.isField('ref') %}
                        {{ fields.textField(
                           'ref',
                           item.fields['ref'],
                           __('Reference'),
                           field_options
                        ) }}
                     {% endif %}

                    {# {% if item.isField('users_id_tech') %}
                        {{ fields.dropdownField(
                           'User',
                           'users_id_tech',
                           item.fields['users_id_tech'],
                           __('Technician in charge of the hardware'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'right': 'own_ticket',
                           })
                        ) }}
                     {% endif %} #}     

                     {% if item.isField('manufacturers_id') %}
                        {{ fields.dropdownField(
                           'Manufacturer',
                           'manufacturers_id',
                           item.fields['manufacturers_id'],
                           (item_type starts with 'Software' ? __('Publisher') : 'Manufacturer'|itemtype_name),
                           field_options|merge({
                              required:true,
                              upper:true
                           })
                        ) }}
                     {% endif %}

                     {#{% if item.isField('groups_id_tech') %}
                        {{ fields.dropdownField(
                           'Group',
                           'groups_id_tech',
                           item.fields['groups_id_tech'],
                           __('Group in charge of the hardware'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': {'is_assign': 1},
                           })
                        ) }}
                     {% endif %}#}

                     {% set model_itemtype = item.getModelClass() %}
                     {% set model_fk = item.getModelForeignKeyField() %}
                     {% if item.isField(model_fk) %}
                        {{ fields.dropdownField(
                           model_itemtype,
                           model_fk,
                           item.fields[model_fk],
                           _n('Model', 'Models', 1),
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {#{% if item_type != 'SoftwareLicense' and item.isField('contact_num') %}
                        TODO Drop unused 'contact_num' field in Software License schema? 
                        {{ fields.textField(
                           'contact_num',
                           item.fields['contact_num'],
                           __('Alternate username number'),
                           field_options
                        ) }}
                     {% endif %} #}

                     {% if item.isField('serial') %}
                        {{ fields.textField(
                           'serial',
                           item.fields['serial'],
                           __('Serial number'),
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {#{% if item_type != 'SoftwareLicense' and item.isField('contact') %}
                        {# TODO Drop unused 'contact' field in Software License schema?
                        {{ fields.textField(
                           'contact',
                           item.fields['contact'],
                           __('Alternate username'),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('otherserial') %}
                        {{ fields.autoNameField(
                           'otherserial',
                           item,
                           __('Inventory number'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}#}

                   

                     {% if item.isField('users_id') %}
                        {{ fields.dropdownField(
                           'User',
                           'users_id',
                           item.fields['users_id'],
                           'User'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'right': 'all',
                           })
                        ) }}
                     {% endif %}

                     

                     {% if item.isField('size') %}
                        {{ fields.numberField(
                           'size',
                           item.fields['size'],
                           __('Size'),
                           field_options|merge({
                              'min': 0,
                              'step': 1
                           }),
                        ) }}
                     {% endif %}

                     {#{% if item.isField('networks_id') %}
                        {{ fields.dropdownField(
                           'Network',
                           'networks_id',
                           item.fields['networks_id'],
                           _n('Network', 'Networks', 1),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('groups_id') %}
                        {{ fields.dropdownField(
                           'Group',
                           'groups_id',
                           item.fields['groups_id'],
                           'Group'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': {'is_itemgroup': 1},
                           })
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('uuid') %}
                        {{ fields.textField(
                           'uuid',
                           item.fields['uuid'],
                           __('UUID'),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('version') %}
                        {{ fields.autoNameField(
                           'version',
                           item,
                           _n('Version', 'Versions', 1),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}#}

                     {% if item.isField('comment') %}
                        {{ fields.textareaField(
                           'comment',
                           item.fields['comment'],
                           _n('Comment', 'Comments', get_plural_number()),
                           field_options
                        ) }}
                     {% endif %}


                     {% if item.isField('alarm_threshold') %}
                        {% set dd_alarm_treshold %}
                           {% do call('Dropdown::showNumber', ['alarm_threshold', {
                              'value': item.fields['alarm_threshold'],
                              'rand': rand,
                              'width': '100%',
                              'min': 0,
                              'max': 100,
                              'step': 1,
                              'toadd': {'-1': __('Never')}
                           }|merge(params)]) %}
                        {% endset %}
                        {% set last_alert_html %}
                           <span class=\"text-muted\">
                              {% do call('Alert::displayLastAlert', [item_type, item.fields['id']]) %}
                           </span>
                        {% endset %}
                        {{ fields.htmlField(
                           'alarm_threshold',
                           dd_alarm_treshold,
                           __('Alert threshold'),
                           field_options|merge({
                               add_field_html: last_alert_html
                            })
                        ) }}
                     {% endif %}


                     {% if item.isField('begin_date') %}
                        {{ fields.dateField(
                            'begin_date',
                            item.fields['begin_date'],
                            __('Start date'),
                            field_options
                        ) }}
                     {% endif %}

                     {#{% if item.isField('autoupdatesystems_id') %}
                        {{ fields.dropdownField(
                           'AutoUpdateSystem',
                           'autoupdatesystems_id',
                           item.fields['autoupdatesystems_id'],
                           'AutoUpdateSystem'|itemtype_name,
                           field_options
                        ) }}
                     {% endif %}#}

                     {% if item.isField('pictures') %}
                        {{ fields.fileField('pictures', null, _n('Picture', 'Pictures', get_plural_number()), {
                           'onlyimages': true,
                           'multiple': true,
                        }) }}
                     {% endif %}

                     {% if item.isField('is_active') %}
                        {{ fields.dropdownYesNo(
                            'is_active',
                            item.fields['is_active'],
                            __('Active'),
                            field_options
                        ) }}
                     {% endif %}

                     {% block more_fields %}
                     {% endblock %}
                  {% endblock %}
               </div> {# .row #}
            </div> {# .row #}
         </div> {# .flex-row #}
      </div>
      {% if item_has_pictures %}
         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               {{ include('components/form/pictures.html.twig', {'gallery_type': ''}) }}
            </div>
         </div>
      {% endif %}
   </div> {# .card-body #}

   {% if item_type == 'Contract' %}
      {{ include('components/form/support_hours.html.twig') }}
   {% endif %}
   {{ include('components/form/buttons.html.twig') }}
   {% if no_inventory_footer is not defined or no_inventory_footer == false %}
      {{ include('components/form/inventory_info.html.twig') }}
   {% endif %}

   {% if params['formfooter'] is null or params['formfooter'] == true %}
      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         {{ include('components/form/dates.html.twig') }}
      </div>
   {% endif %}
</div>
", "generic_show_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\generic_show_form.html.twig");
    }
}
