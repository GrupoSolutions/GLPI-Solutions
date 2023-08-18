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

/* components/form/header.html.twig */
class __TwigTemplate_ba9f483e809077aec3aee58044d18470 extends Template
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
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34)));
        // line 35
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canedit"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["withtemplate"] ?? null) : null)) : (""));
        // line 37
        $context["rand"] = twig_random($this->env);
        // line 38
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formtitle"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 38)));
        // line 39
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 39)));
        // line 40
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["noid"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["noid"] ?? null) : null)) : (false));
        // line 41
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41), "id", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)) : ( -1));
        // line 42
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["formoptions"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formoptions"] ?? null) : null)) : (""));
        // line 43
        $context["currentPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", [0 => "_route_params"], "method", false, false, false, 43);
        // line 44
        $context["entity_id"] = 0;
        // line 45
        $context["entity_name"] = "";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 46)) {
            // line 47
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47) == "Entity") && ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null) == 0))) {
                // line 48
                echo "      ";
                $context["entity_id"] = null;
                // line 49
                echo "   ";
            } else {
                // line 50
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null)))) ? ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 51
                echo "   ";
            }
            // line 52
            echo "
   ";
            // line 53
            if (Session::isMultiEntitiesMode()) {
                // line 54
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54));
                // line 55
                echo "   ";
            }
        }
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null)], "method", false, false, false, 57)) {
            // line 58
            echo "<form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
      action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
   <div id=\"massive_container_";
            // line 60
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
</form>

";
            // line 64
            if (((((((($context["nametype"] ?? null) == "Computador") || (($context["nametype"] ?? null) == "Monitor")) || (($context["nametype"] ?? null) == "Impressora")) || (($context["nametype"] ?? null) == "Telefone")) || (($context["nametype"] ?? null) == "Dispositivo")) || (($context["nametype"] ?? null) == "Dispositivo de rede"))) {
                // line 65
                echo "   ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "   
      <script src=\"/glpi108/assets/css/fa6.js\"></script>
   <form method='post' name='useditemsexport_form\$rand' id='useditemsexport_form\$rand' action=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/marketplace/useditemsexport/inc/termounit.php"), "html", null, true);
                    echo "\">
      <table class='row '>
      <tr class='row'>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-pdf fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Devolução</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"tipo\" value=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                    echo "\"/>
         </td>
         <td class=\"col\" >
            <button type='submit' name='generate' class=\"btn btn-primary\" style=\"display:inline-grid;\">
               <i class=\"fa-sharp fa-solid fa-file-circle-info fa-xl mt-3\"></i>
               <span class=\"mt-3\">Termo de Manutenção</span>
            </button>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"acao\" value=\"manutencao\"/>
         </td>
      </tr>
   </table>
   </form>
   <form method='post' action=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/marketplace/useditemsexport/inc/aer.php"), "html", null, true);
                    echo "\">
   <td class=\"col\">
            <p> Gerar AR
            <input type='submit' name='aer' value=\"Gerar\" class='submit'>
            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 94
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" />
            <input type=\"hidden\" name=\"acao\" value=\"ar\"/>
         </td>
   </form>
   ";
                }
                // line 99
                echo "   
";
            }
            // line 101
            echo "

<form name=\"asset_form\" method=\"post\" action=\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
            echo "\" />

";
        }
        // line 107
        echo "   <div id=\"mainformtable\">
      ";
        // line 108
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["template_name"] ?? null) : null));
        // line 109
        echo "      ";
        if (((($context["withtemplate"] ?? null) == 2) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 109))) {
            // line 110
            echo "         <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
         ";
            // line 111
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
            // line 112
            echo "      ";
        } elseif ((($context["withtemplate"] ?? null) == 1)) {
            // line 113
            echo "         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 114
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 114)) {
            // line 115
            echo "         ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
            // line 116
            echo "      ";
        } else {
            // line 117
            echo "         ";
            if (((($context["noid"] ?? null) == false) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (twig_length_filter($this->env, ($context["nametype"] ?? null)) == 0)))) {
                // line 118
                echo "            ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null));
                // line 119
                echo "         ";
            }
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 122
        if (( !array_key_exists("no_header", $context) || (($context["no_header"] ?? null) == false))) {
            // line 123
            echo "         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            ";
            // line 124
            if ((($context["withtemplate"] ?? null) == 1)) {
                // line 125
                echo "               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
                echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
                echo "\"
                  name=\"template_name\" id=\"textfield_template_name";
                // line 126
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                  value=\"";
                // line 127
                echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
                echo "\" />
            ";
            }
            // line 129
            echo "            <h3 class=\"card-title d-flex align-items-center ps-4\">
               ";
            // line 130
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 130);
            // line 131
            echo "               ";
            if ((twig_length_filter($this->env, ($context["icon"] ?? null)) > 0)) {
                // line 132
                echo "                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"";
                // line 133
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-2x\"></i>
                  </div>
               ";
            }
            // line 136
            echo "               <span>
               ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 137) > 0)) {
                // line 138
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
                echo " 
               ";
            } else {
                // line 140
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo "
               ";
            }
            // line 142
            echo "               
               </span>
               
               ";
            // line 145
            if (($context["header_toolbar"] ?? null)) {
                // line 146
                echo "                  <div class=\"d-inline-block toolbar ms-2\">
                     ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                    // line 148
                    echo "                        ";
                    echo $context["raw_element"];
                    echo "
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                  </div>
               ";
            }
            // line 152
            echo "            </h3>
            
            ";
            // line 154
            $context["single_actions_ms_auto"] = true;
            // line 155
            echo "            
           
            ";
            // line 157
            echo twig_include($this->env, $context, "components/form/single-action.html.twig");
            echo "
         </div>
      ";
        }
        // line 160
        echo "
      ";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 164
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 164), "request", [0 => "in_modal"], "method", false, false, false, 164) == true)) {
            // line 165
            echo "      
      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 165,  346 => 164,  341 => 161,  338 => 160,  332 => 157,  328 => 155,  326 => 154,  322 => 152,  318 => 150,  309 => 148,  305 => 147,  302 => 146,  300 => 145,  295 => 142,  289 => 140,  281 => 138,  279 => 137,  276 => 136,  270 => 133,  267 => 132,  264 => 131,  262 => 130,  259 => 129,  254 => 127,  250 => 126,  245 => 125,  243 => 124,  240 => 123,  238 => 122,  235 => 121,  232 => 120,  229 => 119,  226 => 118,  223 => 117,  220 => 116,  217 => 115,  215 => 114,  212 => 113,  209 => 112,  207 => 111,  202 => 110,  199 => 109,  197 => 108,  194 => 107,  188 => 104,  182 => 103,  178 => 101,  174 => 99,  166 => 94,  159 => 90,  150 => 84,  140 => 77,  136 => 76,  125 => 68,  121 => 66,  118 => 65,  116 => 64,  110 => 61,  106 => 60,  102 => 59,  95 => 58,  93 => 57,  89 => 55,  86 => 54,  84 => 53,  81 => 52,  78 => 51,  75 => 50,  72 => 49,  69 => 48,  66 => 47,  64 => 46,  62 => 45,  60 => 44,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\form\\header.html.twig");
    }
}
