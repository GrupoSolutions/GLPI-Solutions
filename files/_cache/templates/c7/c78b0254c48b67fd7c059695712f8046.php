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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_7adb60a59af352c69a568fa91343b12f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            echo "   ";
            $context["css_files"] = [["path" => "public/lib/base.css"], ["path" => (("css/palettes/" .             // line 38
($context["theme"] ?? null)) . ".scss")]];
            // line 40
            echo "   ";
        }
        // line 42
        if ( !array_key_exists("js_files", $context)) {
            // line 43
            echo "   ";
            $context["js_files"] = [["path" => "public/lib/base.js"], ["path" => "js/common.js"]];
        }
        // line 48
        echo "
";
        // line 49
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center\">
         ";
        // line 53
        $context["style"] = null;
        // line 54
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 55
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 56
            echo "         ";
        }
        // line 57
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 58
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 59
            echo "         ";
        }
        // line 60
        echo "
         <div class=\"container-tight mt-5\" ";
        // line 61
        if ( !(null === ($context["style"] ?? null))) {
            echo " style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <div class=\"text-center\">
               <div class=\"col-md mb-4 mt-5\">
                  <span class=\"glpi-logo\" title=\"Ativo\"></span>
                  <img src=\"pics/logos/logo-GLPI-250-black.png\" style=\"width:400px;\"/>
               </div>
            </div>
            <div class=\"card card-md\">
               <div class=\"card-body\">
               ";
        // line 70
        $this->displayBlock('content_block', $context, $blocks);
        // line 71
        echo "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 75
        $this->displayBlock('footer_block', $context, $blocks);
        // line 76
        echo "            </div>
         </div>
      </div>
   </div>

   ";
        // line 81
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 82
        echo "</body>
</html>
";
    }

    // line 70
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 81
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 81,  140 => 75,  134 => 70,  128 => 82,  126 => 81,  119 => 76,  117 => 75,  111 => 71,  109 => 70,  93 => 61,  90 => 60,  87 => 59,  84 => 58,  81 => 57,  78 => 56,  75 => 55,  72 => 54,  70 => 53,  63 => 49,  60 => 48,  56 => 43,  54 => 42,  51 => 40,  49 => 38,  47 => 36,  45 => 35,  43 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\page_card_notlogged.html.twig");
    }
}
