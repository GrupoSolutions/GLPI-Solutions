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

/* components/rss_feed.html.twig */
class __TwigTemplate_cd634010fa10b1a0106a8e20fac6ed80 extends Template
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
<div class=\"firstbloc\">
   ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["rss_feed"] ?? null), "error", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["rss_feed"] ?? null), "error", [], "any", false, false, false, 35)))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, __("Error retrieving RSS feed"), "html", null, true);
            echo "
   ";
        }
        // line 38
        echo "   <table class=\"table table-striped table-hover\">
      <thead>
         <tr>
            <th colspan=\"3\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rss_feed"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</th>
         </tr>
      </thead>
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rss_feed"] ?? null), "items", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["rss_item"]) {
            // line 45
            echo "         <tr class=\"tab_bg_1\">
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss_item"], "timestamp", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            <td>
               ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["rss_item"], "link", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, $context["rss_item"], "link", [], "any", false, false, false, 48)))) {
                // line 49
                echo "                  <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss_item"], "link", [], "any", false, false, false, 49), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss_item"], "title", [], "any", false, false, false, 49), "html", null, true);
                echo "</a>
               ";
            } else {
                // line 51
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss_item"], "title", [], "any", false, false, false, 51), "html", null, true);
                echo "
               ";
            }
            // line 53
            echo "            </td>
            <td>
               ";
            // line 55
            $context["rand"] = twig_random($this->env);
            // line 56
            echo "               ";
            $context["preview"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml(twig_get_attribute($this->env, $this->source, $context["rss_item"], "content", [], "any", false, false, false, 56));
            // line 57
            echo "               ";
            $context["preview"] = (((twig_length_filter($this->env, ($context["preview"] ?? null)) > 1000)) ? ((twig_slice($this->env, ($context["preview"] ?? null), 0, 1000) . " (...)")) : (($context["preview"] ?? null)));
            // line 58
            echo "               <span id=\"rssitem";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"pointer\">";
            echo twig_escape_filter($this->env, ($context["preview"] ?? null), "html", null, true);
            echo "</span>
               ";
            // line 59
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_get_attribute($this->env, $this->source, $context["rss_item"], "content", [], "any", false, false, false, 59), 1 => ["applyto" => ("rssitem" .             // line 60
($context["rand"] ?? null)), "display" => true]]);
            // line 63
            echo "            </td>
         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rss_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/rss_feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 66,  110 => 63,  108 => 60,  107 => 59,  100 => 58,  97 => 57,  94 => 56,  92 => 55,  88 => 53,  82 => 51,  74 => 49,  72 => 48,  67 => 46,  64 => 45,  60 => 44,  54 => 41,  49 => 38,  43 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/rss_feed.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\rss_feed.html.twig");
    }
}
