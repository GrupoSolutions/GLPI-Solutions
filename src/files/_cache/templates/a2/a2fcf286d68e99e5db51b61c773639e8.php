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

/* pages/self-service/home.html.twig */
class __TwigTemplate_fa21f950e2f28faa01413ea593896854 extends Template
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
        if (twig_length_filter($this->env, ($context["password_alert"] ?? null))) {
            // line 35
            echo "   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            ";
            // line 41
            echo twig_escape_filter($this->env, ($context["password_alert"] ?? null), "html", null, true);
            echo "
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
            echo " \">
            ";
            // line 47
            echo twig_escape_filter($this->env, __("Update my password"), "html", null, true);
            echo "
         </a>
      </div>
   </div>
";
        }
        // line 52
        echo "
<table class=\"central\">
   ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        echo "
</table>

";
        // line 57
        $context["optional_grid_item_keys"] = [0 => "survey_list", 1 => "reminder_list", 2 => "rss_feed", 3 => "kb_popular", 4 => "kb_recent", 5 => "kb_lastupdate"];
        // line 60
        $context["grid_items"] = [0 =>         // line 61
($context["ticket_summary"] ?? null)];
        // line 63
        echo "
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["optional_grid_item_keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["optional_grid_item_key"]) {
            // line 65
            echo "   ";
            $context["item_content"] = (($__internal_compile_0 = $context) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["optional_grid_item_key"]] ?? null) : null);
            // line 66
            echo "   ";
            if ( !twig_test_empty(($context["item_content"] ?? null))) {
                // line 67
                echo "      ";
                $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 => (("<div class=\"card\">" .                 // line 68
($context["item_content"] ?? null)) . "</div>")]);
                // line 70
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optional_grid_item_key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
";
        // line 73
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 74
($context["grid_items"] ?? null)], false);
        // line 75
        echo "
        <div class=\"toasters\" style=\"z-index:2000; position:fixed; right:0; bottom:0;\">
";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["novo_chamado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
         <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id=";
            // line 87
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">

         #";
            // line 89
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " - Novo Chamado 
         </a>
      </div>
      <audio id=\"myAudsio\" src=\"../sound/sound_c.ogg\"></a>
      
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sem_resposta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 97
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      
      <div class=\"toast-body\">
      <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id=";
            // line 107
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">
         #";
            // line 108
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo " - Aguardando Resposta
      </a>
      </div>
     

      <a style=\"display:none;\" id=\"audio\" onclick=\"play()\" src=\"../sound/sound_c.ogg\"></a>

   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "</div>
<script src=\"/glpi/lib/howler.js/dist/howler.js\"></script>
<script type=\"text/javascript\">

\$(function() {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function(toastEl) {
    return new bootstrap.Toast(toastEl);
  })
  console.log(toastList);
  toastList.forEach(toast => toast.show());
  if(toastList.length > 0){
   var sound = new Howl({
   src: ['../sound/sound_c.ogg']
   });
   sound.play(); 
  }
  
})

</script>";
    }

    public function getTemplateName()
    {
        return "pages/self-service/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 117,  172 => 108,  168 => 107,  156 => 97,  152 => 96,  139 => 89,  134 => 87,  123 => 78,  119 => 77,  115 => 75,  113 => 74,  112 => 73,  109 => 72,  102 => 70,  100 => 68,  98 => 67,  95 => 66,  92 => 65,  88 => 64,  85 => 63,  83 => 61,  82 => 60,  80 => 57,  74 => 54,  70 => 52,  62 => 47,  58 => 46,  50 => 41,  42 => 35,  40 => 34,  37 => 33,);
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

{% if password_alert|length %}
   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            {{ password_alert }}
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"{{ path('/front/updatepassword.php') }} \">
            {{ __('Update my password') }}
         </a>
      </div>
   </div>
{% endif %}

<table class=\"central\">
   {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::DISPLAY_CENTRAL')) }}
</table>

{% set optional_grid_item_keys = [
   'survey_list', 'reminder_list', 'rss_feed', 'kb_popular', 'kb_recent', 'kb_lastupdate'
] %}
{% set grid_items = [
   ticket_summary
] %}

{% for optional_grid_item_key in optional_grid_item_keys %}
   {% set item_content = _context[optional_grid_item_key] %}
   {% if item_content is not empty %}
      {% set grid_items = grid_items|merge([
         '<div class=\"card\">' ~ item_content ~ '</div>'
      ]) %}
   {% endif %}
{% endfor %}

{{ include('components/masonry_grid.html.twig', {
   'grid_items': grid_items,
}, with_context = false) }}
        <div class=\"toasters\" style=\"z-index:2000; position:fixed; right:0; bottom:0;\">
{% for i in novo_chamado %}
   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
         <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id={{ i }}\">

         #{{ i }} - Novo Chamado 
         </a>
      </div>
      <audio id=\"myAudsio\" src=\"../sound/sound_c.ogg\"></a>
      
   </div>
{% endfor %}
{% for j in sem_resposta %}
   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      
      <div class=\"toast-body\">
      <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id={{ j }}\">
         #{{ j }} - Aguardando Resposta
      </a>
      </div>
     

      <a style=\"display:none;\" id=\"audio\" onclick=\"play()\" src=\"../sound/sound_c.ogg\"></a>

   </div>
{% endfor %}
</div>
<script src=\"/glpi/lib/howler.js/dist/howler.js\"></script>
<script type=\"text/javascript\">

\$(function() {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function(toastEl) {
    return new bootstrap.Toast(toastEl);
  })
  console.log(toastList);
  toastList.forEach(toast => toast.show());
  if(toastList.length > 0){
   var sound = new Howl({
   src: ['../sound/sound_c.ogg']
   });
   sound.play(); 
  }
  
})

</script>", "pages/self-service/home.html.twig", "C:\\wamp64\\www\\glpi\\templates\\pages\\self-service\\home.html.twig");
    }
}