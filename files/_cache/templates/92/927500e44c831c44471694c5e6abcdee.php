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

/* components/itilobject/slat.php */
class __TwigTemplate_a560ce09e17f34dffbcd5256ee7ef4cc extends Template
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
        echo "<?php
echo \"<h1 style='font-size:22px; text-align:center; margin-top:50px'>TESTE</h1>\";
echo \"<script>alert('F');</script>\";
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/slat.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/slat.php", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\slat.php");
    }
}
