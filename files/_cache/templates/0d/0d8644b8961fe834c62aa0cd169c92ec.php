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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_da57746c781a349d7801d4e44b24d190 extends Template
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
        $context["rand_header"] = twig_random($this->env);
        // line 35
        echo "
<div class=\"btn-group\">
   ";
        // line 37
        if (($context["is_debug_active"] ?? null)) {
            // line 38
            echo "      <button class=\"btn btn-outline-danger d-none d-md-block see_debug\" role=\"button\">
         <i class=\"ti ti-bug fa-lg mt-1\" title=\" ";
            // line 39
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 40
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "</span>
         </i>
      </button>
   ";
        }
        // line 44
        echo "
   ";
        // line 45
        if ( !(null === ($context["user"] ?? null))) {
            // line 46
            echo "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 48
            if (($context["is_debug_active"] ?? null)) {
                echo "bg-red-lt";
            }
            echo "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
               ";
            // line 50
            if ( !($context["anonymous"] ?? null)) {
                // line 51
                echo "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 52) &&  !(null === (($__internal_compile_0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : ("")))), "truncate", [0 => 35, 1 => "..."], "method", false, false, false, 52), "html", null, true);
                echo "</div>
                     ";
                // line 53
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
                // line 54
                echo "                     <div class=\"mt-1 small text-muted \"  title=\"";
                echo twig_escape_filter($this->env, ($context["entity_completename"] ?? null), "html", null, true);
                echo "\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 56
                echo twig_escape_filter($this->env, ($context["entity_completename"] ?? null), "html", null, true);
                echo "
                        
                     </div>
                  </div>

                  ";
                // line 61
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,                 // line 62
($context["user"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 65
                echo "
               ";
            }
            // line 67
            echo "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            echo "</h6>

               ";
            // line 71
            if ( !($context["anonymous"] ?? null)) {
                // line 72
                echo "                  ";
                echo twig_include($this->env, $context, "layout/parts/profile_selector.html.twig");
                echo "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 76
                if ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", twig_constant("UPDATE"))) {
                    // line 77
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    echo "\"
                        class=\"dropdown-item ";
                    // line 78
                    if (($context["is_debug_active"] ?? null)) {
                        echo "bg-red-lt";
                    }
                    echo "\"
                        title=\"";
                    // line 79
                    echo twig_escape_filter($this->env, __("Change mode"), "html", null, true);
                    echo "\">
                        <i class=\"ti fa-fw ti-bug debug\"></i>
                        ";
                    // line 81
                    echo twig_escape_filter($this->env, ((($context["is_debug_active"] ?? null)) ? (__("Debug mode enabled")) : (__("Debug mode disabled"))), "html", null, true);
                    echo "
                     </a>
                  ";
                }
                // line 84
                echo "               ";
            }
            // line 85
            echo "
               ";
            // line 87
            echo "
               <div class=\"dropdown-item\">
                  <i class=\"ti fa-fw ti-language\"></i>
                  ";
            // line 90
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["help_url"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-help\"></i>
                  ";
            // line 97
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "
               </a>

               <a href=\"#\" class=\"dropdown-item\" title=\"";
            // line 100
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "\"
                  id=\"show_about_modal_";
            // line 101
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-info-circle\"></i>
                  ";
            // line 103
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "
                  ";
            // line 104
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 105
                echo "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
            }
            // line 109
            echo "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-adjustments-alt\"></i>
                  ";
            // line 115
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "
               </a>
               <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) ? ("?noAUTO=1") : ("")))), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-logout\"></i>
                  ";
            // line 119
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "
               </a>
            </div>
         </div>
      </div>

      <div class=\"modal fade\" id=\"about_modal_";
            // line 125
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
            // line 129
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 130
            echo twig_escape_filter($this->env, __("Close"), "html", null, true);
            echo "\"></button>
               </div>
               <div class=\"modal-body\">
                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
            // line 134
            echo twig_escape_filter($this->env, twig_constant("GLPI_VERSION"), "html", null, true);
            echo "
                     Copyright (C) 2015-";
            // line 135
            echo twig_escape_filter($this->env, twig_constant("GLPI_YEAR"), "html", null, true);
            echo " Teclib' and contributors
                  </a></p>
                  ";
            // line 137
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 138
                echo "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                // line 140
                echo twig_escape_filter($this->env, __("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                echo "\">
                           ";
                // line 141
                echo twig_escape_filter($this->env, twig_sprintf(__("A new version is available: %s."), ($context["founded_new_version"] ?? null)), "html", null, true);
                echo "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
            }
            // line 148
            echo "               </div>
            </div>
         </div>
      </div>

   ";
        } elseif (twig_constant("GLPI_DEMO_MODE")) {
            // line 154
            echo "      <div class=\"dropdown-item\">
         <i class=\"fas fa-fw fa-language\"></i>
         ";
            // line 156
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
      </div>

   ";
        }
        // line 160
        echo "</div>


<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 165
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 167
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").remove().modal(\"show\");
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/user_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 167,  313 => 165,  306 => 160,  299 => 156,  295 => 154,  287 => 148,  277 => 141,  273 => 140,  269 => 138,  267 => 137,  262 => 135,  258 => 134,  251 => 130,  247 => 129,  240 => 125,  231 => 119,  224 => 117,  219 => 115,  212 => 113,  206 => 109,  200 => 105,  198 => 104,  194 => 103,  189 => 101,  185 => 100,  179 => 97,  172 => 95,  164 => 90,  159 => 87,  156 => 85,  153 => 84,  147 => 81,  142 => 79,  136 => 78,  131 => 77,  129 => 76,  121 => 72,  119 => 71,  114 => 69,  110 => 67,  106 => 65,  104 => 62,  103 => 61,  95 => 56,  89 => 54,  87 => 53,  83 => 52,  80 => 51,  78 => 50,  71 => 48,  67 => 46,  65 => 45,  62 => 44,  55 => 40,  51 => 39,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/user_header.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\layout\\parts\\user_header.html.twig");
    }
}
