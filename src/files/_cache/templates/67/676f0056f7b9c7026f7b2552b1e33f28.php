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

/* components/form/snmpcredential.html.twig */
class __TwigTemplate_c864389d6a902b6834a0f56953b46a43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/snmpcredential.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "components/form/snmpcredential.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["snmpversion", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["snmpversion"] ?? null) : null), [0 => "-----", 1 => "1", 2 => "2c", 3 => "3"], __("SNMP version"), ["required" => true]], 39, $context, $this->getSourceContext());
        // line 47
        echo "

   ";
        // line 49
        echo twig_call_macro($macros["fields"], "macro_textField", ["community", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["community"] ?? null) : null), __("Community"), ["add_field_attribs" => ["data-snmp-version" => "1"]]], 49, $context, $this->getSourceContext());
        // line 58
        echo "

   ";
        // line 60
        echo twig_call_macro($macros["fields"], "macro_textField", ["username", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 62
($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["username"] ?? null) : null), _n("User", "Users", Session::getPluralNumber()), ["add_field_attribs" => ["data-snmp-version" => "3"]]], 60, $context, $this->getSourceContext());
        // line 69
        echo "

   ";
        // line 71
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 71, $context, $this->getSourceContext());
        echo "

   ";
        // line 73
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["authentication", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["authentication"] ?? null) : null), [0 => "-----", 1 => "MD5", 2 => "SHA"], __("Encryption protocol for authentication "), ["add_field_attribs" => ["data-snmp-version" => "3"]]], 73, $context, $this->getSourceContext());
        // line 83
        echo "

   ";
        // line 85
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 85, $context, $this->getSourceContext());
        echo "

   ";
        // line 87
        echo twig_call_macro($macros["fields"], "macro_passwordField", ["auth_passphrase", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["auth_passphrase"] ?? null) : null), __("Password"), ["add_field_attribs" => ["data-snmp-version" => "3"]]], 87, $context, $this->getSourceContext());
        // line 96
        echo "

   ";
        // line 98
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 98, $context, $this->getSourceContext());
        echo "

   ";
        // line 100
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["encryption", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["encryption"] ?? null) : null), [0 => "-----", 1 => "DES", 2 => "AES128", 3 => "Triple-DES"], __("Encryption protocol for data"), ["add_field_attribs" => ["data-snmp-version" => "3"]]], 100, $context, $this->getSourceContext());
        // line 110
        echo "

   ";
        // line 112
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 112, $context, $this->getSourceContext());
        echo "

   ";
        // line 114
        echo twig_call_macro($macros["fields"], "macro_passwordField", ["priv_passphrase", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["priv_passphrase"] ?? null) : null), __("Password"), ["add_field_attribs" => ["data-snmp-version" => "3"]]], 114, $context, $this->getSourceContext());
        // line 123
        echo "

   <script>

      const filterFormForSNMPVersion = (version) => {
         // Hide all elements with data-snmp-version attribute by default
         \$('.form-field[data-snmp-version]').hide();
         if (version === '1' || version === '2') {
            \$('.form-field[data-snmp-version=\"1\"]').show();
         } else if (version === '3') {
            \$('.form-field[data-snmp-version=\"3\"]').show();
         }
      }
      filterFormForSNMPVersion(\$('select[name=\"snmpversion\"]').val());
      // If there is already a snmpversion selected, show the corresponding elements
      \$('select[name=\"snmpversion\"]').on('change', (e) => {
         const selection = \$(e.currentTarget).val();
         filterFormForSNMPVersion(selection);
      });
   </script>
";
    }

    public function getTemplateName()
    {
        return "components/form/snmpcredential.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 123,  119 => 116,  118 => 114,  113 => 112,  109 => 110,  107 => 102,  106 => 100,  101 => 98,  97 => 96,  95 => 89,  94 => 87,  89 => 85,  85 => 83,  83 => 75,  82 => 73,  77 => 71,  73 => 69,  71 => 62,  70 => 60,  66 => 58,  64 => 51,  63 => 49,  59 => 47,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/snmpcredential.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\form\\snmpcredential.html.twig");
    }
}
