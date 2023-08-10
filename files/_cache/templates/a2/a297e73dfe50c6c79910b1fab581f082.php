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
class __TwigTemplate_d45148080cda8df7b0ff280735a2a724 extends Template
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["novo_chamado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      <div class=\"toast-body\">
         <a class=\"toast-text\" href=\"/front/ticket.form.php?id=";
            // line 88
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">

         #";
            // line 90
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
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sem_resposta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 98
            echo "   <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" style=\"padding: 5px 15px;\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
      
   
      <div class=\"toast-header\">
      <img src=\"http://cdn.onlinewebfonts.com/svg/img_423551.png\" style=\"filter: invert(100%)\" width=\"18\"/>
         <strong class=\"me-auto\" style=\"margin-left:10px;\">HelpDesk</strong>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
      </div>
      
      <div class=\"toast-body\">
      <a class=\"toast-text\" href=\"/front/ticket.form.php?id=";
            // line 108
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">
         #";
            // line 109
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
        // line 118
        echo "</div>
<script src=\"lib/howler.js/dist/howler.js\"></script>
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
        return "pages/self-service/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 118,  173 => 109,  169 => 108,  157 => 98,  153 => 97,  140 => 90,  135 => 88,  124 => 79,  120 => 78,  115 => 75,  113 => 74,  112 => 73,  109 => 72,  102 => 70,  100 => 68,  98 => 67,  95 => 66,  92 => 65,  88 => 64,  85 => 63,  83 => 61,  82 => 60,  80 => 57,  74 => 54,  70 => 52,  62 => 47,  58 => 46,  50 => 41,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/self-service/home.html.twig", "/var/www/html/glpi/templates/pages/self-service/home.html.twig");
    }
}
