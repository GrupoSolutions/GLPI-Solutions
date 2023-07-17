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

/* components/itilobject/sla.php */
class __TwigTemplate_8730a4823d6d5f90ab1261e10c56cc6c extends Template
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
require('../../../src/db_config.php');

\$sqlTicket = 'SELECT * FROM glpi_tickets where id = \$_SESSION[\"itens_id\"]';

?>
<h4><?php echo \$_SESSION[\"glpiID\"]; ?></h4>
<p><?php echo \$_SESSION[\"glpilistitems['Ticket']\"] ?> </p>";
    }

    public function getTemplateName()
    {
        return "components/itilobject/sla.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
require('../../../src/db_config.php');

\$sqlTicket = 'SELECT * FROM glpi_tickets where id = \$_SESSION[\"itens_id\"]';

?>
<h4><?php echo \$_SESSION[\"glpiID\"]; ?></h4>
<p><?php echo \$_SESSION[\"glpilistitems['Ticket']\"] ?> </p>", "components/itilobject/sla.php", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\sla.php");
    }
}
