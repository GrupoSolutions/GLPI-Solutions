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
class __TwigTemplate_a756c06850c2d556ce379dd1e5aed226 extends Template
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
        $context["glpiID"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID");
        // line 36
        echo "
";
        // line 37
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical");
        // line 38
        echo "
<body class=\"";
        // line 39
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") && ($context["is_vertical"] ?? null))) ? ("navbar-collapsed") : (""));
        echo " ";
        echo ((($context["is_vertical"] ?? null)) ? ("vertical-layout") : ("horizontal-layout"));
        echo " ";
        echo ((($context["is_debug_active"] ?? null)) ? ("debug-active") : (""));
        echo "\">
   ";
        // line 40
        if ((twig_constant_is_defined("SKIP_UPDATES") && ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate") == false))) {
            // line 41
            echo "      <div class=\"banner-need-update\">
         ";
            // line 42
            echo twig_escape_filter($this->env, __("You are bypassing a needed update"), "html", null, true);
            echo "
      </div>
   ";
        }
        // line 45
        echo "   ";
        echo twig_include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        echo "
   ";
        // line 46
        echo twig_include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        echo "

   <div class=\"page\">

      ";
        // line 50
        if (($context["is_vertical"] ?? null)) {
            // line 51
            echo "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
               class=\"navbar-brand\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 62
            if ( !($context["anonymous"] ?? null)) {
                // line 63
                echo "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 64
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
               </span>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ( !(null === ($context["user"] ?? null))) {
                // line 69
                echo "               ";
                // line 70
                echo "               <div class=\"d-lg-none\">
                  ";
                // line 71
                echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
                echo "
               </div>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ( !($context["anonymous"] ?? null)) {
                // line 76
                echo "               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 78
                echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
                echo "
                   </span>
                   ";
                // line 80
                echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
                echo "


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary  ";
                // line 84
                echo ((($context["is_debug_active"] ?? null)) ? ("mb-4") : ("mb-2"));
                echo " reduce-menu d-none d-md-block\">
                        <span class=\"menu-label\">";
                // line 85
                echo twig_escape_filter($this->env, __("Collapse menu"), "html", null, true);
                echo "</span>
                     </button>
                  </p>
               </div>
            ";
            }
            // line 90
            echo "         </div>
      </aside>
      ";
        }
        // line 93
        echo "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 94
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        echo "\">
         <div class=\"container-fluid flex-xl-nowrap pe-xl-0\">
            ";
        // line 96
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) {
            // line 97
            echo "               ";
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "
               <link rel=\"stylesheet\" href=\"/glpi/assets/css/toastr.min.css\">
               <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\" type=\"text/javascript\"></script>
               <script src=\"../assets/css/fa6.js\" crossorigin=\"anonymous\"></script>
               ";
            // line 101
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("allow_search_global")) {
                // line 102
                echo "                  <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                     <script>
                        const id = ";
                // line 104
                echo twig_escape_filter($this->env, ($context["glpiID"] ?? null), "html", null, true);
                echo "
                        console.log(id);
                        var request = \$.ajax({
                           type: \"POST\",
                           data: {
                              'id': id,

                           },
                           url: \"/glpi/assets/php/ajax/buscaTickets.php\",
                           data: 'JSON',
                           success: function(response){
                              console.log(response);
                              //Aqui ele atribui a quantidade de itens no array
                              var sino = document.getElementById(\"qtdNotificacao\");
                              var divDropdown = document.getElementById('myDropdown');
                              sino.innerText = response.length;
                              for(var elemento of response){
                                 var link = document.createElement('a');

                                 link.href = `/glpi/front/ticket.form?id=\${elemento[\"id\"]}`;
                                 link.textContent = `\${elemento[\"id\"]} - \${elemento[\"status\"]}`;

                                 divDropdown.appendChild(link);

                                 toastr[\"info\"](`\${elemento[\"id\"]} - \${elemento[\"status\"]}`, \"HelpDesk\");
                                 toastr.options = {
                                    \"closeButton\": true,
                                    \"debug\": false,
                                    \"newestOnTop\": true,
                                    \"progressBar\": true,
                                    \"positionClass\": \"toast-top-right\",
                                    \"preventDuplicates\": false,
                                    \"onclick\": function(){window.location.href=`/glpi/front/ticket.form?id=\${elemento[\"id\"]}`;},
                                    \"showDuration\": \"300\",
                                    \"hideDuration\": \"1000\",
                                    \"timeOut\": \"5000\",
                                    \"extendedTimeOut\": \"1000\",
                                    \"showEasing\": \"swing\",
                                    \"hideEasing\": \"linear\",
                                    \"showMethod\": \"fadeIn\",
                                    \"hideMethod\": \"fadeOut\"
                                 }
                              }
                           },
                           error: function(err) {
                              console.error(\"Erro na requisição AJAX:\" + err);
                           }
                        });
                     </script> 
                    <style>
                    .dropbtn {
                        background-color: #FFF;
                        padding: 16px;
                        font-size: 16px;
                        border: none;
                        cursor: pointer;
                        z-index: 500;
                        }

                        .dropbtn:hover, .dropbtn:focus {
                        background-color: #FFF;
                        }

                        .dropdown {
                        position: relative;
                        display: inline-block;
                        }

                        .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f1f1f1;
                        min-width: 260px;
                        overflow: auto;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                        }

                        .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        }

                        .dropdown a:hover {background-color: #ddd;}

                        .show {display: block;}
                    </style>
                        <div class=\"dropdown\">
                        <i onclick=\"myFunction()\" class=\"fa-regular fa-bell fa-xl\"></i>   
                        <span class='badge' style=\"background:#f76707;margin-bottom:10px;\" id='qtdNotificacao'>0</span>
                        <div id=\"myDropdown\" class=\"dropdown-content\">
                        <span style=\"text-align:center; margin:65px\">Lista de Notificações</span>
                        </div>
                        </div>

                        <script>
                        /* When the user clicks on the button, 
                        toggle between hiding and showing the dropdown content */
                        function myFunction() {
                        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
                        }

                        // Close the dropdown if the user clicks outside of it
                        window.onclick = function(event) {
                        if (!event.target.matches('.fa-bell')) {
                           var dropdowns = document.getElementsByClassName(\"dropdown-content\");
                           var i;
                           for (i = 0; i < dropdowns.length; i++) {
                              var openDropdown = dropdowns[i];
                              if (openDropdown.classList.contains('show')) {
                              openDropdown.classList.remove('show');
                              }
                           }
                        }
                        }
                        </script>

                    
                     ";
                // line 225
                echo "                  </div>
               ";
            }
            // line 227
            echo "
            ";
        } elseif (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 229
            echo "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
                  class=\"navbar-brand\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 239
            echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
            echo "
               </div>

               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  ";
            // line 243
            echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
            echo "
                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
            // line 245
            echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
            echo "
                  </span>
               </div>
            ";
        }
        // line 249
        echo "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 251
        echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
        echo "
            </div>
         </div>
      </header>

      ";
        // line 256
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 257
            echo "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 259
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "
            ";
            // line 260
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("allow_search_global")) {
                // line 261
                echo "               <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
                  ";
                // line 262
                echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
                echo "
               </div>
            ";
            }
            // line 265
            echo "         </div>
      </div>
      ";
        }
        // line 268
        echo "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
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
        return array (  397 => 268,  392 => 265,  386 => 262,  383 => 261,  381 => 260,  377 => 259,  373 => 257,  371 => 256,  363 => 251,  359 => 249,  352 => 245,  347 => 243,  340 => 239,  329 => 233,  323 => 229,  319 => 227,  315 => 225,  192 => 104,  188 => 102,  186 => 101,  178 => 97,  176 => 96,  171 => 94,  168 => 93,  163 => 90,  155 => 85,  151 => 84,  144 => 80,  139 => 78,  135 => 76,  133 => 75,  130 => 74,  124 => 71,  121 => 70,  119 => 69,  117 => 68,  114 => 67,  108 => 64,  105 => 63,  103 => 62,  93 => 57,  85 => 51,  83 => 50,  76 => 46,  71 => 45,  65 => 42,  62 => 41,  60 => 40,  52 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/page_header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\page_header.html.twig");
    }
}
