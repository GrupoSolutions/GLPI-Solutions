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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_fc89f35329986a63c2de63d82e51bd87 extends Template
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
        $context["anonymous"] = (null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"));
        // line 35
        echo "
";
        // line 36
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical");
        // line 37
        echo "
<body class=\"";
        // line 38
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") && ($context["is_vertical"] ?? null))) ? ("navbar-collapsed") : (""));
        echo " ";
        echo ((($context["is_vertical"] ?? null)) ? ("vertical-layout") : ("horizontal-layout"));
        echo " ";
        echo ((($context["is_debug_active"] ?? null)) ? ("debug-active") : (""));
        echo "\">
   ";
        // line 39
        if ((twig_constant_is_defined("SKIP_UPDATES") && ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate") == false))) {
            // line 40
            echo "      <div class=\"banner-need-update\">
         ";
            // line 41
            echo twig_escape_filter($this->env, __("You are bypassing a needed update"), "html", null, true);
            echo "
      </div>
   ";
        }
        // line 44
        echo "   ";
        echo twig_include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        echo "
   ";
        // line 45
        echo twig_include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        echo "

   <div class=\"page\">

      ";
        // line 49
        if (($context["is_vertical"] ?? null)) {
            // line 50
            echo "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
               class=\"navbar-brand navbar-brand-autodark solutions\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 61
            if ( !($context["anonymous"] ?? null)) {
                // line 62
                echo "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 63
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
               </span>
            ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ( !(null === ($context["user"] ?? null))) {
                // line 68
                echo "               ";
                // line 69
                echo "               <div class=\"d-lg-none\">
                  ";
                // line 70
                echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
                echo "
               </div>
            ";
            }
            // line 73
            echo "
            ";
            // line 74
            if ( !($context["anonymous"] ?? null)) {
                // line 75
                echo "               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 77
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
                   </span>
                   ";
                // line 79
                echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
                echo "


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary mb-2 reduce-menu d-none d-md-block menu\">
                        <span class=\"menu-label\">";
                // line 84
                echo twig_escape_filter($this->env, __("Collapse menu"), "html", null, true);
                echo "</span>
                     </button>
                  </p>
               </div>
            ";
            }
            // line 89
            echo "         </div>
      </aside>
      ";
        }
        // line 92
        echo "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 93
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        echo "\">
         <div class=\"container-fluid flex-xl-nowrap pe-xl-0\">
            ";
        // line 95
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) {
            // line 96
            echo "               ";
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "

               <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                  ";
            // line 99
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
               </div>
            ";
        } elseif (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 102
            echo "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
                  class=\"navbar-brand navbar-brand-autodark\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 112
            echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
            echo "
               </div>

               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  ";
            // line 116
            echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
            echo "
                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
            // line 118
            echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
            echo "
                  </span>
               </div>
            ";
        }
        // line 122
        echo "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 124
        echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
        echo "
            </div>
         </div>
      </header>

      ";
        // line 129
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 130
            echo "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 132
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
               ";
            // line 134
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
            </div>
         </div>
      </div>
      ";
        }
        // line 139
        echo "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
            <div class=\"toasters\" style=\"z-index:2000; position:fixed; right:0; bottom:0;\">
";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["novo_chamado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 145
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
         <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id=";
            // line 154
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">

         #";
            // line 156
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
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sem_resposta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 164
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      
      <div class=\"toast-body\">
      <a class=\"toast-text\" href=\"http://localhost/glpi/front/ticket.form.php?id=";
            // line 174
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">
         #";
            // line 175
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
        // line 184
        echo "</div>
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

</script>

";
    }

    public function getTemplateName()
    {
        return "layout/parts/page_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 184,  313 => 175,  309 => 174,  297 => 164,  293 => 163,  280 => 156,  275 => 154,  264 => 145,  260 => 144,  253 => 139,  245 => 134,  240 => 132,  236 => 130,  234 => 129,  226 => 124,  222 => 122,  215 => 118,  210 => 116,  203 => 112,  192 => 106,  186 => 102,  180 => 99,  173 => 96,  171 => 95,  166 => 93,  163 => 92,  158 => 89,  150 => 84,  142 => 79,  137 => 77,  133 => 75,  131 => 74,  128 => 73,  122 => 70,  119 => 69,  117 => 68,  115 => 67,  112 => 66,  106 => 63,  103 => 62,  101 => 61,  91 => 56,  83 => 50,  81 => 49,  74 => 45,  69 => 44,  63 => 41,  60 => 40,  58 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set anonymous = session('glpiactiveprofile') is null %}

{% set is_vertical = user_pref('page_layout') == 'vertical' %}

<body class=\"{{ user_pref('fold_menu') and is_vertical ? 'navbar-collapsed' : '' }} {{ is_vertical ? 'vertical-layout' : 'horizontal-layout' }} {{ is_debug_active ? 'debug-active' : '' }}\">
   {% if constant('SKIP_UPDATES') is defined and call('Update::isDbUpToDate') == false %}
      <div class=\"banner-need-update\">
         {{ __(\"You are bypassing a needed update\") }}
      </div>
   {% endif %}
   {{ include('layout/parts/impersonate_banner.html.twig') }}
   {{ include('components/messages_after_redirect_toasts.html.twig', {'display_container': true}) }}

   <div class=\"page\">

      {% if is_vertical %}
      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"{{ index_path() }}\" accesskey=\"1\" title=\"{{ __('Home') }}\"
               class=\"navbar-brand navbar-brand-autodark solutions\">
               <span class=\"glpi-logo\"></span>
            </a>

            {% if not anonymous %}
               <span class=\"d-none d-lg-inline-block\">
                   {{ include('layout/parts/goto_button.html.twig') }}
               </span>
            {% endif %}

            {% if user is not null %}
               {# There may still be a user logged in without a profile or entity. This is seen when they need to reset their password. #}
               <div class=\"d-lg-none\">
                  {{ include('layout/parts/user_header.html.twig') }}
               </div>
            {% endif %}

            {% if not anonymous %}
               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       {{ include('layout/parts/goto_button.html.twig') }}
                   </span>
                   {{ include('layout/parts/menu.html.twig') }}


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary mb-2 reduce-menu d-none d-md-block menu\">
                        <span class=\"menu-label\">{{ __('Collapse menu') }}</span>
                     </button>
                  </p>
               </div>
            {% endif %}
         </div>
      </aside>
      {% endif %}

      <header class=\"navbar d-print-none sticky-lg-top shadow-sm {{ user_pref('page_layout') == 'vertical' ? 'navbar-light navbar-expand-md' : 'navbar-dark navbar-expand-xl topbar' }}\">
         <div class=\"container-fluid flex-xl-nowrap pe-xl-0\">
            {% if user_pref('page_layout') == 'vertical' %}
               {{ include('layout/parts/breadcrumbs.html.twig') }}

               <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                  {{ include('layout/parts/global_search_form.html.twig') }}
               </div>
            {% elseif user_pref('page_layout') == 'horizontal' %}
               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"{{ index_path() }}\" accesskey=\"1\" title=\"{{ __('Home') }}\"
                  class=\"navbar-brand navbar-brand-autodark\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  {{ include('layout/parts/user_header.html.twig') }}
               </div>

               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  {{ include('layout/parts/menu.html.twig') }}
                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     {{ include('layout/parts/goto_button.html.twig') }}
                  </span>
               </div>
            {% endif %}

            <div class=\"ms-md-4 d-none d-lg-block\">
               {{ include('layout/parts/user_header.html.twig') }}
            </div>
         </div>
      </header>

      {% if user_pref('page_layout') == 'horizontal' %}
      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            {{ include('layout/parts/breadcrumbs.html.twig') }}
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
               {{ include('layout/parts/global_search_form.html.twig') }}
            </div>
         </div>
      </div>
      {% endif %}

      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
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

</script>

", "layout/parts/page_header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\page_header.html.twig");
    }
}
