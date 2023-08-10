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

/* components/form/link_existing_or_new.html.twig */
class __TwigTemplate_98c29e4889d8879b07a706bcf0ce2dba extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/link_existing_or_new.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["rand"] = ((array_key_exists("rand", $context)) ? (_twig_default_filter(($context["rand"] ?? null), twig_random($this->env))) : (twig_random($this->env)));
        // line 37
        echo "<div class=\"firstbloc\">
   <form id=\"";
        // line 38
        echo twig_escape_filter($this->env, ((twig_lower_filter($this->env, ($context["link_itemtype"] ?? null)) . "_form") . ($context["rand"] ?? null)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ((twig_lower_filter($this->env, ($context["link_itemtype"] ?? null)) . "_form") . ($context["rand"] ?? null)), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["link_itemtype"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 39
        echo twig_call_macro($macros["fields"], "macro_largeTitle", [twig_sprintf(__("Add a %s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["target_itemtype"] ?? null)))], 39, $context, $this->getSourceContext());
        echo "
      ";
        // line 40
        echo twig_call_macro($macros["fields"], "macro_hiddenField", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null)), ($context["source_items_id"] ?? null), "", ["no_label" => true]], 40, $context, $this->getSourceContext());
        // line 42
        echo "
      ";
        // line 43
        $context["primary_dropdown_itemtype"] = ((twig_get_attribute($this->env, $this->source, ($context["dropdown_options"] ?? null), "itemtype", [], "array", true, true, false, 43)) ? (_twig_default_filter((($__internal_compile_0 = ($context["dropdown_options"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), ($context["target_itemtype"] ?? null))) : (($context["target_itemtype"] ?? null)));
        // line 44
        echo "      <div class=\"d-flex\">
         <div class=\"col-auto\">
            ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["primary_dropdown_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["primary_dropdown_itemtype"] ?? null)), "", "", twig_array_merge(["no_label" => true, "field_class" => ""],         // line 49
($context["dropdown_options"] ?? null))], 46, $context, $this->getSourceContext());
        echo "
            ";
        // line 50
        if (array_key_exists("ajax_dropdown", $context)) {
            // line 51
            echo "               ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => (($__internal_compile_1 =             // line 52
($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["toobserve"] ?? null) : null), 1 => (($__internal_compile_2 = (($__internal_compile_3 =             // line 53
($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["toupdate"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), 2 => (($__internal_compile_4 =             // line 54
($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["url"] ?? null) : null), 3 => (($__internal_compile_5 =             // line 55
($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["params"] ?? null) : null)]);
            // line 57
            echo "            ";
        }
        // line 58
        echo "            ";
        if (array_key_exists("ajax_dropdown", $context)) {
            // line 59
            echo "               <span id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["toupdate"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
            echo "\">
                  ";
            // line 60
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_8 = (($__internal_compile_9 = ($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["toupdate"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["itemtype"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($__internal_compile_10 = (($__internal_compile_11 = ($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["toupdate"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["itemtype"] ?? null) : null)), "", "", twig_array_merge(["no_label" => true, "field_class" => ""], (($__internal_compile_12 = (($__internal_compile_13 =             // line 63
($context["ajax_dropdown"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["toupdate"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["params"] ?? null) : null))], 60, $context, $this->getSourceContext());
            echo "
               </span>
            ";
        }
        // line 66
        echo "         </div>
         <div class=\"col-auto\">
            <button class=\"btn btn-primary ms-1\" type=\"submit\" name=\"add\">
               <i class=\"ti ti-link\"></i>
               <span>";
        // line 70
        echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
        echo "</span>
            </button>
         </div>
         <div class=\"col-auto ms-4\">
            ";
        // line 74
        if (($context["create_link"] ?? null)) {
            // line 75
            echo "               ";
            $context["target_form_path"] = (((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["target_itemtype"] ?? null)) . "?_") . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null))) . "=") . ($context["source_items_id"] ?? null));
            // line 76
            echo "               ";
            $context["create_url"] = ((twig_get_attribute($this->env, $this->source, ($context["create_link"] ?? null), "url", [], "array", true, true, false, 76)) ? ((($__internal_compile_14 = ($context["create_link"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["url"] ?? null) : null)) : (($context["target_form_path"] ?? null)));
            // line 77
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, ($context["create_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                  <i class=\"ti ti-plus\"></i>
                  <span>";
            // line 79
            echo twig_escape_filter($this->env, twig_sprintf(__("Create a %s from this %s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["target_itemtype"] ?? null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["source_itemtype"] ?? null))), "html", null, true);
            echo "</span>
               </a>
            ";
        }
        // line 82
        echo "         </div>
      </div>
      ";
        // line 84
        echo twig_call_macro($macros["fields"], "macro_hiddenField", ["_glpi_csrf_token", Session::getNewCSRFToken()], 84, $context, $this->getSourceContext());
        echo "
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/form/link_existing_or_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 84,  138 => 82,  132 => 79,  126 => 77,  123 => 76,  120 => 75,  118 => 74,  111 => 70,  105 => 66,  99 => 63,  98 => 60,  93 => 59,  90 => 58,  87 => 57,  85 => 55,  84 => 54,  83 => 53,  82 => 52,  80 => 51,  78 => 50,  74 => 49,  73 => 46,  69 => 44,  67 => 43,  64 => 42,  62 => 40,  58 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/link_existing_or_new.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\form\\link_existing_or_new.html.twig");
    }
}
