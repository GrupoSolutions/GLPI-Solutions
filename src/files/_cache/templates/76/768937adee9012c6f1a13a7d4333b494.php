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
class __TwigTemplate_0f0a22c8bda647bbae9e8dfc21393c94 extends Template
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
        // line 601
        echo "               </div> ";
        // line 602
        echo "            </div> ";
        // line 603
        echo "         </div> ";
        // line 604
        echo "      </div>
      ";
        // line 605
        if (($context["item_has_pictures"] ?? null)) {
            // line 606
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 608
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 612
        echo "   </div> ";
        // line 613
        echo "
   ";
        // line 614
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 615
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 617
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 618
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 619
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 621
        echo "
   ";
        // line 622
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 623
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 624
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 627
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
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 76)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 85)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 101)) {
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
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 113))) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 142)) {
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
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 155))) {
            // line 156
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 158
($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"], twig_array_merge(            // line 163
($context["field_options"] ?? null), ["required" => true])], 156, $context, $this->getSourceContext());
            // line 166
            echo "
                     ";
        }
        // line 168
        echo "
                     ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 169)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 175)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 187)) {
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
        // line 208
        echo "
                     ";
        // line 209
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 209)) {
            // line 210
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 212
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 214
($context["withtemplate"] ?? null),             // line 215
($context["field_options"] ?? null)], 210, $context, $this->getSourceContext());
            // line 216
            echo "
                     ";
        }
        // line 218
        echo "
                     ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 219)) {
            // line 220
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 222
($context["item"] ?? null), __("Phone 2"),             // line 224
($context["withtemplate"] ?? null),             // line 225
($context["field_options"] ?? null)], 220, $context, $this->getSourceContext());
            // line 226
            echo "
                     ";
        }
        // line 228
        echo "
                     ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 229)) {
            // line 230
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 232
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 234
($context["withtemplate"] ?? null),             // line 235
($context["field_options"] ?? null)], 230, $context, $this->getSourceContext());
            // line 236
            echo "
                     ";
        }
        // line 238
        echo "
                     ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 239)) {
            // line 240
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 242
($context["item"] ?? null), __("Mobile phone"),             // line 244
($context["withtemplate"] ?? null),             // line 245
($context["field_options"] ?? null)], 240, $context, $this->getSourceContext());
            // line 246
            echo "
                     ";
        }
        // line 248
        echo "
                     ";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 249)) {
            // line 250
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 252
($context["item"] ?? null), __("Fax"),             // line 254
($context["withtemplate"] ?? null),             // line 255
($context["field_options"] ?? null)], 250, $context, $this->getSourceContext());
            // line 256
            echo "
                     ";
        }
        // line 258
        echo "
                     ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 259)) {
            // line 260
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 262
($context["item"] ?? null), __("Website"),             // line 264
($context["withtemplate"] ?? null),             // line 265
($context["field_options"] ?? null)], 260, $context, $this->getSourceContext());
            // line 266
            echo "
                     ";
        }
        // line 268
        echo "
                     ";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 269)) {
            // line 270
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 272
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 274
($context["withtemplate"] ?? null), twig_array_merge(            // line 275
($context["field_options"] ?? null), ["required" => true])], 270, $context, $this->getSourceContext());
            // line 278
            echo "
                     ";
        }
        // line 280
        echo "
                     ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 281)) {
            // line 282
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 282)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 282, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 284
        echo "
                     ";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 285)) {
            // line 286
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 288
($context["item"] ?? null), __("Postal code"),             // line 290
($context["withtemplate"] ?? null),             // line 291
($context["field_options"] ?? null)], 286, $context, $this->getSourceContext());
            // line 292
            echo "
                        
                     ";
        }
        // line 295
        echo "
                     ";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 296)) {
            // line 297
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 299
($context["item"] ?? null), "Cidadezinha",             // line 301
($context["withtemplate"] ?? null),             // line 302
($context["field_options"] ?? null)], 297, $context, $this->getSourceContext());
            // line 303
            echo "
                     ";
        }
        // line 305
        echo "
                     ";
        // line 307
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 307)) {
            // line 308
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 310
($context["item"] ?? null), __("Postal code"),             // line 312
($context["withtemplate"] ?? null),             // line 313
($context["field_options"] ?? null)], 308, $context, $this->getSourceContext());
            // line 314
            echo "
                     ";
        }
        // line 316
        echo "
                     ";
        // line 317
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 318
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 320
($context["item"] ?? null), _x("location", "State"),             // line 322
($context["withtemplate"] ?? null),             // line 323
($context["field_options"] ?? null)], 318, $context, $this->getSourceContext());
            // line 324
            echo "
                     ";
        }
        // line 326
        echo "
                     ";
        // line 327
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 327)) {
            // line 328
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 330
($context["item"] ?? null), __("Country"),             // line 332
($context["withtemplate"] ?? null),             // line 333
($context["field_options"] ?? null)], 328, $context, $this->getSourceContext());
            // line 334
            echo "
                     ";
        }
        // line 336
        echo "
                     ";
        // line 337
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 337)) {
            // line 338
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 339
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 339, $context, $this->getSourceContext());
                // line 342
                echo "
                        ";
            } else {
                // line 344
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 344)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 344, $context, $this->getSourceContext());
                // line 347
                echo "
                        ";
            }
            // line 349
            echo "                     ";
        }
        // line 350
        echo "
                     ";
        // line 351
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 351)) {
            // line 352
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 354
($context["item"] ?? null), "fields", [], "any", false, false, false, 354)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 356
($context["field_options"] ?? null)], 352, $context, $this->getSourceContext());
            // line 357
            echo "
                     ";
        }
        // line 359
        echo "
                    ";
        // line 371
        echo "     

                     ";
        // line 373
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 373)) {
            // line 374
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 377
($context["item"] ?? null), "fields", [], "any", false, false, false, 377)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 378
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))), twig_array_merge(            // line 379
($context["field_options"] ?? null), ["required" => true])], 374, $context, $this->getSourceContext());
            // line 383
            echo "
                     ";
        }
        // line 385
        echo "
                     ";
        // line 398
        echo "
                     ";
        // line 399
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 399);
        // line 400
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 400);
        // line 401
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 401)) {
            // line 402
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 403
($context["model_itemtype"] ?? null),             // line 404
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 405
($context["item"] ?? null), "fields", [], "any", false, false, false, 405)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 407
($context["field_options"] ?? null), ["required" => true])], 402, $context, $this->getSourceContext());
            // line 410
            echo "
                     ";
        }
        // line 412
        echo "
                     ";
        // line 422
        echo "
                     ";
        // line 423
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 423)) {
            // line 424
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 426
($context["item"] ?? null), "fields", [], "any", false, false, false, 426)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 428
($context["field_options"] ?? null), ["required" => true])], 424, $context, $this->getSourceContext());
            // line 431
            echo "
                     ";
        }
        // line 433
        echo "
                     ";
        // line 443
        echo "
                     ";
        // line 453
        echo "
                   

                     ";
        // line 456
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 456)) {
            // line 457
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 460
($context["item"] ?? null), "fields", [], "any", false, false, false, 460)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 462
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 463
($context["item"] ?? null), "fields", [], "any", false, false, false, 463)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 457, $context, $this->getSourceContext());
            // line 466
            echo "
                     ";
        }
        // line 468
        echo "
                     

                     ";
        // line 471
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 471)) {
            // line 472
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 474
($context["item"] ?? null), "fields", [], "any", false, false, false, 474)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 476
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 472, $context, $this->getSourceContext());
            // line 480
            echo "
                     ";
        }
        // line 482
        echo "
                     ";
        // line 492
        echo "
                     ";
        // line 505
        echo "
                     ";
        // line 514
        echo "
                     ";
        // line 524
        echo "
                     ";
        // line 525
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 525)) {
            // line 526
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 528
($context["item"] ?? null), "fields", [], "any", false, false, false, 528)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 530
($context["field_options"] ?? null)], 526, $context, $this->getSourceContext());
            // line 531
            echo "
                     ";
        }
        // line 533
        echo "

                     ";
        // line 535
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 535)) {
            // line 536
            echo "                        ";
            ob_start(function () { return ''; });
            // line 537
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 538
($context["item"] ?? null), "fields", [], "any", false, false, false, 538)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 539
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 545
($context["params"] ?? null))]);
            // line 546
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 547
            echo "                        ";
            ob_start(function () { return ''; });
            // line 548
            echo "                           <span class=\"text-muted\">
                              ";
            // line 549
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 549)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 550
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 552
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 554
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 556
($context["field_options"] ?? null), ["add_field_html" =>             // line 557
($context["last_alert_html"] ?? null)])], 552, $context, $this->getSourceContext());
            // line 559
            echo "
                     ";
        }
        // line 561
        echo "

                     ";
        // line 563
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 563)) {
            // line 564
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 566
($context["item"] ?? null), "fields", [], "any", false, false, false, 566)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 568
($context["field_options"] ?? null)], 564, $context, $this->getSourceContext());
            // line 569
            echo "
                     ";
        }
        // line 571
        echo "
                     ";
        // line 581
        echo "
                     ";
        // line 582
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 582)) {
            // line 583
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 583, $context, $this->getSourceContext());
            // line 586
            echo "
                     ";
        }
        // line 588
        echo "
                     ";
        // line 589
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 589)) {
            // line 590
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 592
($context["item"] ?? null), "fields", [], "any", false, false, false, 592)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 594
($context["field_options"] ?? null)], 590, $context, $this->getSourceContext());
            // line 595
            echo "
                     ";
        }
        // line 597
        echo "
                     ";
        // line 598
        $this->displayBlock('more_fields', $context, $blocks);
        // line 600
        echo "                  ";
    }

    // line 598
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 599
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
        return array (  847 => 599,  843 => 598,  839 => 600,  837 => 598,  834 => 597,  830 => 595,  828 => 594,  827 => 592,  825 => 590,  823 => 589,  820 => 588,  816 => 586,  813 => 583,  811 => 582,  808 => 581,  805 => 571,  801 => 569,  799 => 568,  798 => 566,  796 => 564,  794 => 563,  790 => 561,  786 => 559,  784 => 557,  783 => 556,  782 => 554,  780 => 552,  776 => 550,  774 => 549,  771 => 548,  768 => 547,  765 => 546,  763 => 545,  762 => 539,  761 => 538,  759 => 537,  756 => 536,  754 => 535,  750 => 533,  746 => 531,  744 => 530,  743 => 528,  741 => 526,  739 => 525,  736 => 524,  733 => 514,  730 => 505,  727 => 492,  724 => 482,  720 => 480,  718 => 476,  717 => 474,  715 => 472,  713 => 471,  708 => 468,  704 => 466,  702 => 463,  701 => 462,  700 => 460,  698 => 457,  696 => 456,  691 => 453,  688 => 443,  685 => 433,  681 => 431,  679 => 428,  678 => 426,  676 => 424,  674 => 423,  671 => 422,  668 => 412,  664 => 410,  662 => 407,  661 => 405,  660 => 404,  659 => 403,  657 => 402,  654 => 401,  651 => 400,  649 => 399,  646 => 398,  643 => 385,  639 => 383,  637 => 379,  636 => 378,  635 => 377,  633 => 374,  631 => 373,  627 => 371,  624 => 359,  620 => 357,  618 => 356,  617 => 354,  615 => 352,  613 => 351,  610 => 350,  607 => 349,  603 => 347,  600 => 344,  596 => 342,  593 => 339,  590 => 338,  588 => 337,  585 => 336,  581 => 334,  579 => 333,  578 => 332,  577 => 330,  575 => 328,  573 => 327,  570 => 326,  566 => 324,  564 => 323,  563 => 322,  562 => 320,  560 => 318,  558 => 317,  555 => 316,  551 => 314,  549 => 313,  548 => 312,  547 => 310,  545 => 308,  542 => 307,  539 => 305,  535 => 303,  533 => 302,  532 => 301,  531 => 299,  529 => 297,  527 => 296,  524 => 295,  519 => 292,  517 => 291,  516 => 290,  515 => 288,  513 => 286,  511 => 285,  508 => 284,  502 => 282,  500 => 281,  497 => 280,  493 => 278,  491 => 275,  490 => 274,  489 => 272,  487 => 270,  485 => 269,  482 => 268,  478 => 266,  476 => 265,  475 => 264,  474 => 262,  472 => 260,  470 => 259,  467 => 258,  463 => 256,  461 => 255,  460 => 254,  459 => 252,  457 => 250,  455 => 249,  452 => 248,  448 => 246,  446 => 245,  445 => 244,  444 => 242,  442 => 240,  440 => 239,  437 => 238,  433 => 236,  431 => 235,  430 => 234,  429 => 232,  427 => 230,  425 => 229,  422 => 228,  418 => 226,  416 => 225,  415 => 224,  414 => 222,  412 => 220,  410 => 219,  407 => 218,  403 => 216,  401 => 215,  400 => 214,  399 => 212,  397 => 210,  395 => 209,  392 => 208,  389 => 198,  385 => 196,  383 => 194,  382 => 193,  381 => 191,  379 => 188,  377 => 187,  374 => 186,  370 => 184,  368 => 181,  367 => 179,  366 => 178,  365 => 177,  363 => 176,  360 => 175,  357 => 174,  355 => 173,  352 => 172,  346 => 170,  344 => 169,  341 => 168,  337 => 166,  335 => 163,  334 => 158,  332 => 156,  330 => 155,  327 => 154,  323 => 152,  321 => 149,  320 => 148,  319 => 146,  317 => 143,  315 => 142,  312 => 141,  309 => 140,  306 => 139,  302 => 137,  300 => 135,  299 => 133,  296 => 132,  292 => 130,  283 => 128,  279 => 127,  276 => 126,  273 => 125,  270 => 124,  268 => 123,  265 => 122,  261 => 120,  259 => 119,  258 => 117,  256 => 115,  254 => 114,  252 => 113,  249 => 112,  245 => 110,  243 => 108,  242 => 107,  241 => 105,  240 => 104,  239 => 103,  237 => 102,  234 => 101,  232 => 100,  229 => 99,  225 => 97,  223 => 94,  222 => 93,  221 => 92,  220 => 90,  218 => 87,  215 => 86,  213 => 85,  210 => 84,  207 => 83,  204 => 82,  200 => 80,  197 => 78,  194 => 77,  192 => 76,  187 => 73,  182 => 70,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 627,  157 => 624,  154 => 623,  152 => 622,  149 => 621,  143 => 619,  141 => 618,  136 => 617,  130 => 615,  128 => 614,  125 => 613,  123 => 612,  116 => 608,  112 => 606,  110 => 605,  107 => 604,  105 => 603,  103 => 602,  101 => 601,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\generic_show_form.html.twig");
    }
}
