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

/* @formcreator/field/glpiselectfield.html.twig */
class __TwigTemplate_cb637e312ec791cc7f361b1f299eefa9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "@formcreator/pages/question.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/glpiselectfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/glpiselectfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/glpiselectfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownObjectSubType", ["itemtype", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), _n("GLPI object", "GLPI objects", 1, "formcreator"), ["on_change" => "plugin_formcreator.changeQuestionType(this)", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 35, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 46, $context, $this->getSourceContext());
        // line 53
        echo "

    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["show_empty", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["show_empty"] ?? null) : null), __("Show empty", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 55, $context, $this->getSourceContext());
        // line 62
        echo "

    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 64), "itemtype", [], "array", true, true, false, 64) && ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["itemtype"] ?? null) : null) != "0"))) {
            // line 65
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), "default_values", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 65, $context, $this->getSourceContext());
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 75, $context, $this->getSourceContext());
            // line 78
            echo "
    ";
        }
        // line 80
        echo "
     ";
        // line 81
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 81, $context, $this->getSourceContext());
        // line 84
        echo "

    ";
        // line 87
        echo "    ";
        if (((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["_is_tree"] ?? null) : null) == "1")) {
            // line 88
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["itemtype"] ?? null) : null), "show_tree_root", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_tree_root"] ?? null) : null), __("Subtree root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 88, $context, $this->getSourceContext());
            // line 96
            echo "

        ";
            // line 98
            echo twig_call_macro($macros["fields"], "macro_numberField", ["show_tree_depth", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_show_tree_depth"] ?? null) : null), __("Limit subtree depth", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 98, $context, $this->getSourceContext());
            // line 105
            echo "

        ";
            // line 107
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["selectable_tree_root", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 109
($context["item"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_tree_root_selectable"] ?? null) : null), __("Selectable root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 107, $context, $this->getSourceContext());
            // line 114
            echo "

        ";
            // line 116
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 116, $context, $this->getSourceContext());
            // line 119
            echo "
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 122), "itemtype", [], "array", true, true, false, 122) && ((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_is_entity_restrict"] ?? null) : null) == "1"))) {
            // line 123
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownEntityRestrict", ["entity_restrict", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_entity_restrict"] ?? null) : null), __("Entity restriction", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 123, $context, $this->getSourceContext());
            // line 130
            echo "

        ";
            // line 132
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 132, $context, $this->getSourceContext());
            // line 135
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/field/glpiselectfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 135,  149 => 132,  145 => 130,  143 => 125,  141 => 123,  139 => 122,  136 => 121,  132 => 119,  130 => 116,  126 => 114,  124 => 109,  123 => 107,  119 => 105,  117 => 100,  116 => 98,  112 => 96,  110 => 91,  109 => 89,  107 => 88,  104 => 87,  100 => 84,  98 => 81,  95 => 80,  91 => 78,  88 => 75,  84 => 73,  82 => 68,  81 => 66,  79 => 65,  77 => 64,  73 => 62,  71 => 57,  70 => 55,  66 => 53,  64 => 48,  63 => 46,  59 => 44,  57 => 37,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/glpiselectfield.html.twig", "C:\\wamp64\\www\\glpi\\marketplace\\formcreator\\templates\\field\\glpiselectfield.html.twig");
    }
}
