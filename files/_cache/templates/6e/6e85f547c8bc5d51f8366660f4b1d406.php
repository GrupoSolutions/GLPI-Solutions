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

/* components/itilobject/actors/assign_to_me.html.twig */
class __TwigTemplate_774f898b58dbbfe1712618048a8981ed extends Template
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
<button type=\"submit\"
        form=\"addme_as_";
        // line 35
        echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
        echo "\"
        name=\"id\"
        value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\"
        class=\"btn btn-icon btn-sm btn-ghost-secondary float-end mt-1 ms-1\"
        title=\"";
        // line 39
        echo twig_escape_filter($this->env, __("Associate myself"), "html", null, true);
        echo "\"
        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
   <i class=\"fas fa-male\"></i>
</button>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/assign_to_me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 39,  48 => 37,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<button type=\"submit\"
        form=\"addme_as_{{ actortype }}_{{ main_rand }}\"
        name=\"id\"
        value=\"{{ item.fields['id'] }}\"
        class=\"btn btn-icon btn-sm btn-ghost-secondary float-end mt-1 ms-1\"
        title=\"{{ __('Associate myself') }}\"
        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
   <i class=\"fas fa-male\"></i>
</button>
", "components/itilobject/actors/assign_to_me.html.twig", "/var/www/html/glpi/templates/components/itilobject/actors/assign_to_me.html.twig");
    }
}
