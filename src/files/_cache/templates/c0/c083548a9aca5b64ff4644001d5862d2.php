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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_9798f369e177d71099282ad66f44ccc1 extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [0 => ($context["item"] ?? null)]);
        // line 35
        $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) . "::getById"), [0 => (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)]);
        // line 36
        $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [0 => ($context["pending_item"] ?? null)])) : (false));
        // line 37
        $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pendingreasons_id"] ?? null) : null)])) : (false));
        // line 38
        echo "
";
        // line 39
        if (($context["pending_reason"] ?? null)) {
            // line 40
            echo "   <span class=\"badge bg-blue-lt\">
      <i class=\"fas fa-pause me-1\"></i>
      ";
            // line 42
            echo twig_sprintf(__("Pending: %s"), twig_get_attribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 42));
            echo "

      ";
            // line 44
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [0 =>             // line 45
($context["item"] ?? null), 1 =>             // line 46
($context["pending_item"] ?? null)])) {
                // line 48
                echo "         ";
                $context["next_bump"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 48);
                // line 49
                echo "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 50
                    echo "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [0 => ($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 54
                echo "
         ";
                // line 55
                $context["resolve"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 55);
                // line 56
                echo "         ";
                if (($context["resolve"] ?? null)) {
                    // line 57
                    echo "            <i class=\"fas fa-stop ms-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [0 => ($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 60
                echo "      ";
            }
            // line 61
            echo "   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 61,  96 => 60,  89 => 57,  86 => 56,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  69 => 49,  66 => 48,  64 => 46,  63 => 45,  62 => 44,  57 => 42,  53 => 40,  51 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set pending_reason_item_parent = call(\"PendingReason_Item::getForItem\", [item]) %}
{% set pending_item = call(entry['type'] ~ \"::getById\", [entry_i['id']]) %}
{% set pending_reason_item = pending_item ? call(\"PendingReason_Item::getForItem\", [pending_item]) : false %}
{% set pending_reason = pending_reason_item ? call(\"PendingReason::getById\", [pending_reason_item.fields['pendingreasons_id']]) : false %}

{% if pending_reason  %}
   <span class=\"badge bg-blue-lt\">
      <i class=\"fas fa-pause me-1\"></i>
      {{ __(\"Pending: %s\")|format(pending_reason.getLink())|raw }}

      {% if call(\"PendingReason_Item::isLastPendingForItem\", [
         item,
         pending_item
      ]) %}
         {% set next_bump = pending_reason_item_parent.getNextFollowupDate() %}
         {% if next_bump %}

            <i class=\"fas fa-clock ms-2\" title=\"{{ __(\"Next automatic follow-up scheduled on %s\")|format(call(\"Html::convDate\", [next_bump])) }}\"
               data-bs-toggle=\"tooltip\"></i>
         {% endif %}

         {% set resolve = pending_reason_item_parent.getAutoResolvedate() %}
         {% if resolve %}
            <i class=\"fas fa-stop ms-2\" title=\"{{ __(\"Automatic resolution scheduled on %s\")|format(call(\"Html::convDate\", [next_bump])) }}\"
               data-bs-toggle=\"tooltip\"></i>
         {% endif %}
      {% endif %}
   </span>
{% endif %}
", "components/itilobject/timeline/pending_reasons_messages.html.twig", "C:\\wamp64\\www\\glpi05\\templates\\components\\itilobject\\timeline\\pending_reasons_messages.html.twig");
    }
}
