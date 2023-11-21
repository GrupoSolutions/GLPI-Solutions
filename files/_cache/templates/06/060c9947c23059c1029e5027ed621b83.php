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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_c11af0956f736573e6306d65620ac781 extends Template
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
        $context["links"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34), "links", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["links"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["links"] ?? null) : null)) : ((($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["menu"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["links"] ?? null) : null)));
        // line 35
        $context["lists_itemtype"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35), "lists_itemtype", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["lists_itemtype"] ?? null) : null)))) ? ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["lists_itemtype"] ?? null) : null)) : ((($__internal_compile_8 = (($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["menu"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["content"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["lists_itemtype"] ?? null) : null)));
        // line 36
        if (twig_test_empty(($context["lists_itemtype"] ?? null))) {
            // line 37
            echo "    ";
            $context["lists_itemtype"] = ($context["item"] ?? null);
        }
        // line 39
        echo "
";
        // line 41
        echo "<ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">

";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 43)) {
            // line 44
            echo "<li class=\"nav-item\">
   <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_12 = ($context["links"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["add"] ?? null) : null)), "html", null, true);
            echo "\" class=\"btn btn-icon btn-sm btn-secondary me-1 pe-2 adicionar\" title=\"";
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 47
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 51
        echo "
";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "search", [], "array", true, true, false, 52)) {
            // line 53
            echo "
";
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "lists", [], "array", true, true, false, 56)) {
            // line 57
            echo "
";
        }
        // line 59
        echo "
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 61
            echo "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 62
                echo "   ";
            } elseif (($context["type"] == "template")) {
                // line 63
                echo "
   ";
            } elseif ((            // line 64
$context["type"] == "showall")) {
                // line 65
                echo "
   ";
            } elseif ((            // line 66
$context["type"] == "summary")) {
                // line 67
                echo "
   ";
            } elseif ((            // line 68
$context["type"] == "summary_kanban")) {
                // line 69
                echo "    
   ";
            } elseif ((            // line 70
$context["type"] == "transfer_list")) {
                // line 71
                echo "   ";
            } elseif (($context["type"] == "config")) {
                // line 72
                echo "      
   ";
            } else {
                // line 74
                echo "    
   ";
            }
            // line 76
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/context_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 78,  138 => 76,  134 => 74,  130 => 72,  127 => 71,  125 => 70,  122 => 69,  120 => 68,  117 => 67,  115 => 66,  112 => 65,  110 => 64,  107 => 63,  104 => 62,  101 => 61,  97 => 60,  94 => 59,  90 => 57,  88 => 56,  85 => 55,  81 => 53,  79 => 52,  76 => 51,  69 => 47,  62 => 45,  59 => 44,  57 => 43,  53 => 41,  50 => 39,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/context_links.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\context_links.html.twig");
    }
}
