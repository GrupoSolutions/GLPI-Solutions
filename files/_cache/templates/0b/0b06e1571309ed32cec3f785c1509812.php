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

/* components/search/display_data.html.twig */
class __TwigTemplate_4c7f517a2ffcc21f32f809ec3fc83a2b extends Template
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
        $context["is_ajax"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null)));
        // line 35
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (_twig_default_filter(($context["fluid_search"] ?? null), true)) : (true));
        // line 36
        if ( !($context["is_ajax"] ?? null)) {
            // line 37
            echo "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 39
        echo "
";
        // line 41
        $context["normalized_itemtype"] = twig_replace_filter(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 42
        echo "
";
        // line 43
        if (($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)) != "Chamado")) {
            // line 44
            echo "<form id=\"massform";
            echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
            echo "\" method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
            echo "\"
      data-search-itemtype=\"";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype"] ?? null) : null), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
            echo "\" data-count=\"";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" data-limit=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         ";
            // line 48
            if (((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display_type"] ?? null) : null) == twig_constant("Search::GLOBAL_SEARCH"))) {
                // line 49
                echo "            <h2>";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
                echo "</h2>

            ";
                // line 51
                if ((($context["count"] ?? null) > (($context["start"] ?? null) + twig_constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                    // line 52
                    echo "               <a href=\"";
                    echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                    echo "\">
                  <i class=\"far fa-eye\"></i>
                  ";
                    // line 54
                    echo twig_escape_filter($this->env, __("View all"), "html", null, true);
                    echo "
               </a>
            ";
                }
                // line 57
                echo "         ";
            } else {
                // line 58
                echo "            ";
                echo twig_include($this->env, $context, "components/search/controls.html.twig");
                echo "
         ";
            }
            // line 60
            echo "      </div>

      <pre>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
            echo "</pre>
      ";
            // line 63
            if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["as_map"] ?? null) : null) == 0)) {
                // line 64
                echo "         ";
                echo twig_include($this->env, $context, "components/search/table.html.twig");
                echo "
      ";
            }
            // line 66
            echo "      ";
            if ((($context["count"] ?? null) > 0)) {
                // line 67
                echo "         ";
                if ((((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_type"] ?? null) : null) != twig_constant("Search::GLOBAL_SEARCH")) && ((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["as_map"] ?? null) : null) == 0))) {
                    // line 68
                    echo "            <div class=\"card-footer search-footer\">
               ";
                    // line 69
                    echo twig_include($this->env, $context, "components/pager.html.twig");
                    echo "
            </div>
         ";
                }
                // line 72
                echo "      ";
            } elseif (((($__internal_compile_8 = (($__internal_compile_9 = ($context["data"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["search"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["as_map"] ?? null) : null) == 1)) {
                // line 73
                echo "         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            ";
                // line 74
                echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
                echo "
         </div>
      ";
            }
            // line 77
            echo "   </div>
</form>
";
        }
        // line 80
        if ( !($context["is_ajax"] ?? null)) {
            // line 81
            echo "   </div>

   ";
            // line 83
            if (((($__internal_compile_10 = (($__internal_compile_11 = ($context["data"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["search"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as_map"] ?? null) : null) == 0)) {
                // line 84
                echo "      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform";
                // line 87
                echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
                echo "\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
      </script>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/search/display_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  166 => 84,  164 => 83,  160 => 81,  158 => 80,  153 => 77,  147 => 74,  144 => 73,  141 => 72,  135 => 69,  132 => 68,  129 => 67,  126 => 66,  120 => 64,  118 => 63,  114 => 62,  110 => 60,  104 => 58,  101 => 57,  95 => 54,  89 => 52,  87 => 51,  81 => 49,  79 => 48,  67 => 45,  60 => 44,  58 => 43,  55 => 42,  53 => 41,  50 => 39,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/display_data.html.twig", "C:\\wamp64\\www\\glpi108\\templates\\components\\search\\display_data.html.twig");
    }
}
