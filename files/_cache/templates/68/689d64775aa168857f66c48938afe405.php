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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_22a45b7b2728ea87028ef7f81022716e extends Template
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
<span class=\"badge text-wrap d-none d-md-block\">
   ";
        // line 35
        ob_start();
        // line 36
        echo "      <span title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"far fa-clock me-1\"></i>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
   ";
        // line 42
        if ((($context["users_id"] ?? null) > 0)) {
            // line 43
            echo "      ";
            ob_start();
            // line 44
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 45
($context["users_id"] ?? null), "enable_anonymization" =>             // line 46
($context["anonym_user"] ?? null)], false);
            // line 47
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
      ";
            // line 50
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 52
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 54
        echo "</span>

";
        // line 56
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 57
            echo "   <span class=\"badge text-wrap ms-1 d-none d-md-block\">
      ";
            // line 58
            ob_start();
            // line 59
            echo "         <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"far fa-clock me-1\"></i>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "
         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "
      ";
            // line 65
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 66
            echo "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_editor"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 67
            echo "      ";
            ob_start();
            // line 68
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 69
($context["users_id_editor"] ?? null), "enable_anonymization" =>             // line 70
($context["anonym_editor"] ?? null)], false);
            // line 71
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "
      ";
            // line 74
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  129 => 73,  125 => 71,  123 => 70,  122 => 69,  120 => 68,  117 => 67,  114 => 66,  112 => 65,  109 => 64,  103 => 61,  97 => 59,  95 => 58,  92 => 57,  90 => 56,  86 => 54,  80 => 52,  75 => 50,  72 => 49,  68 => 47,  66 => 46,  65 => 45,  63 => 44,  60 => 43,  58 => 42,  55 => 41,  49 => 38,  43 => 36,  41 => 35,  37 => 33,);
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

<span class=\"badge text-wrap d-none d-md-block\">
   {% set date_span %}
      <span title=\"{{ date_creation|formatted_datetime }}\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"far fa-clock me-1\"></i>{{ date_creation|relative_datetime }}
      </span>
   {% endset %}

   {% if users_id > 0 %}
      {% set creator_span %}
         {{ include('components/user/link_with_tooltip.html.twig', {
            'users_id': users_id,
            'enable_anonymization': anonym_user
         }, with_context = false) }}
      {% endset %}

      {{ __('Created: %1\$s by %2\$s')|format(date_span, creator_span)|raw }}
   {% else %}
      {{ __('Created: %1\$s')|format(date_span)|raw }}
   {% endif %}
</span>

{% if users_id_editor > 0 and date_creation != date_mod %}
   <span class=\"badge text-wrap ms-1 d-none d-md-block\">
      {% set date_span %}
         <span title=\"{{ date_mod|formatted_datetime }}\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"far fa-clock me-1\"></i>{{ date_mod|relative_datetime }}
         </span>
      {% endset %}

      {% set is_current_editor = (users_id_editor == session('glpiID')) %}
      {% set anonym_editor = (get_current_interface() == 'helpdesk' and not is_current_editor and entity_config('anonymize_support_agents', session('glpiactive_entity')) != constant('Entity::ANONYMIZE_DISABLED')) %}
      {% set editor_span %}
         {{ include('components/user/link_with_tooltip.html.twig', {
            'users_id': users_id_editor,
            'enable_anonymization': anonym_editor
         }, with_context = false) }}
      {% endset %}

      {{ __('Last update: %1\$s by %2\$s')|format(date_span, editor_span)|raw }}
   </span>
{% endif %}
", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\itilobject\\timeline\\timeline_item_header_badges.html.twig");
    }
}
