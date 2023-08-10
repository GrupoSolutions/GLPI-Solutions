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

/* components/itilobject/layoutfirst.html.twig */
class __TwigTemplate_927ed89e04212cb0fc8a408cc1848afa extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 36
        echo "
";
        // line 37
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 38
        $context["is_collapsed"] = ((($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["collapsed"] ?? null) : null) == "true");
        // line 39
        $context["is_expanded"] = ((($__internal_compile_1 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expanded"] ?? null) : null) == "true");
        // line 40
        $context["collapsed_cls"] = ((($context["is_collapsed"] ?? null)) ? ("right-collapsed") : (""));
        // line 41
        $context["expanded_cls"] = (((($context["is_expanded"] ?? null) == "true")) ? ("right-expanded") : (""));
        // line 42
        echo "
";
        // line 43
        $context["left_regular_cls"] = "col-xl-8 col-md-10";
        // line 44
        $context["right_regular_cls"] = "col-xl-4 col-md-2";
        // line 45
        echo "
";
        // line 46
        $context["left_expanded_cls"] = "col-xxl-4 col-md-4";
        // line 47
        $context["right_expanded_cls"] = "col-xxl-8 col-md-8";
        // line 48
        echo "
";
        // line 49
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 50
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 51
        if (($context["is_expanded"] ?? null)) {
            // line 52
            echo "    ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 53
            echo "    ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 55
        echo "   ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 55)) {
            // line 56
            echo "   ";
        }
        // line 57
        echo "
<div id=\"itil-object-container\" class=\" right\">
   ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 59) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
   ";
        }
        // line 62
        echo "  <div class=\"itil-right-side col-12 ";
        echo twig_escape_filter($this->env, ($context["right_side_cls"] ?? null), "html", null, true);
        echo " mt-0 mt-md-n1 card-footer p-0 rounded-0\" style=\"width:100%\">
         ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) {
            // line 64
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
         ";
        }
        // line 66
        echo "         ";
        echo twig_include($this->env, $context, "components/itilobject/fields_panel.html.twig");
        echo "
         ";
        // line 67
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 67)) {
            // line 68
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
         ";
        }
        // line 70
        echo "      </div>";
    }

    public function getTemplateName()
    {
        return "components/itilobject/layoutfirst.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 70,  125 => 68,  123 => 67,  118 => 66,  112 => 64,  110 => 63,  105 => 62,  99 => 60,  97 => 59,  93 => 57,  90 => 56,  87 => 55,  83 => 53,  80 => 52,  78 => 51,  76 => 50,  74 => 49,  71 => 48,  69 => 47,  67 => 46,  64 => 45,  62 => 44,  60 => 43,  57 => 42,  55 => 41,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/layoutfirst.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\layoutfirst.html.twig");
    }
}
