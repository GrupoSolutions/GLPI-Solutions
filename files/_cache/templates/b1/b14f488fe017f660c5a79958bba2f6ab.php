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

/* layout/parts/notification_header.html.twig */
class __TwigTemplate_24c537a7d2c8457305fed1a29d1d8d3d extends Template
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
        // line 1
        echo "
      <script src=\"../assets/css/fa6.js\" crossorigin=\"anonymous\"></script>

<i class=\"fa-regular fa-bell fa-xl\"></i>   
<span class='badge badge-secondary' title='teste'>";
        // line 5
        echo twig_escape_filter($this->env, ($context["qtd"] ?? null), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "layout/parts/notification_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/notification_header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\notification_header.html.twig");
    }
}
