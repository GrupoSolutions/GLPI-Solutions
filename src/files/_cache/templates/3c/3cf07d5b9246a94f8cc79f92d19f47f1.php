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

/* components/itilobject/timeline/approbation_form.html.twig */
class __TwigTemplate_be653482cae60dcf12a8fc60c76ef801 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/approbation_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [], "method", false, false, false, 36) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canApprove", [], "method", false, false, false, 36)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), 1 => twig_constant("CommonITILObject::CLOSED")], "method", false, false, false, 36))) {
            // line 37
            echo "<div class=\"timeline-item mb-3\">
   <div class=\"row\">
      <div class=\"col-auto d-none d-md-block\">
         ";
            // line 40
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            echo "
      </div>
      <div class=\"col\">
         <div class=\"row timeline-content t-left card mt-4\">
            <form name=\"form\" method=\"post\" action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ItilFollowup"), "html", null, true);
            echo "\" data-submit-once>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"requesttypes_id\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\" />

               <div class=\"card-header\">
                  ";
            // line 52
            echo twig_escape_filter($this->env, __("Approval of the solution"), "html", null, true);
            echo "
               </div>
               <div class=\"card-body\">
                  ";
            // line 55
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", "", __("Comments"), ["full_width" => true, "helper" => __("Optional when approved"), "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "is_horizontal" => false]], 55, $context, $this->getSourceContext());
            // line 67
            echo "
               </div>

               <div class=\"card-footer\">
                  <button class=\"btn btn-icon btn-outline-danger me-2\" name=\"add_reopen\">
                     <i class=\"ti ti-x\"></i>
                     <span>";
            // line 73
            echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
            echo "</span>
                  </button>

                  <button class=\"btn btn-icon btn-outline-success\" name=\"add_close\">
                     <i class=\"ti ti-check\"></i>
                     <span>";
            // line 78
            echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
            echo "</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/approbation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 78,  98 => 73,  90 => 67,  88 => 55,  82 => 52,  76 => 49,  72 => 48,  68 => 47,  64 => 46,  59 => 44,  52 => 40,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}

{% if item.isSolved() and item.canApprove() and item.isAllowedStatus(item.fields['status'], constant('CommonITILObject::CLOSED')) %}
<div class=\"timeline-item mb-3\">
   <div class=\"row\">
      <div class=\"col-auto d-none d-md-block\">
         {{ include('components/user/picture.html.twig', {'users_id': session('glpiID')}, with_context = false) }}
      </div>
      <div class=\"col\">
         <div class=\"row timeline-content t-left card mt-4\">
            <form name=\"form\" method=\"post\" action=\"{{ 'ItilFollowup'|itemtype_form_path }}\" data-submit-once>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
               <input type=\"hidden\" name=\"itemtype\" value=\"{{ item.getType() }}\" />
               <input type=\"hidden\" name=\"items_id\" value=\"{{ item.fields['id'] }}\" />
               <input type=\"hidden\" name=\"requesttypes_id\" value=\"{{ item.fields['id'] }}\" />

               <div class=\"card-header\">
                  {{ __('Approval of the solution') }}
               </div>
               <div class=\"card-body\">
                  {{ fields.textareaField(
                     'content',
                     '',
                     __('Comments'),
                     {
                        'full_width': true,
                        'helper': __('Optional when approved'),
                        'enable_richtext': true,
                        'enable_fileupload': true,
                        'enable_mentions': true,
                        'is_horizontal': false,
                     }
                  ) }}
               </div>

               <div class=\"card-footer\">
                  <button class=\"btn btn-icon btn-outline-danger me-2\" name=\"add_reopen\">
                     <i class=\"ti ti-x\"></i>
                     <span>{{ __('Refuse') }}</span>
                  </button>

                  <button class=\"btn btn-icon btn-outline-success\" name=\"add_close\">
                     <i class=\"ti ti-check\"></i>
                     <span>{{ __('Approve') }}</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
{% endif %}
", "components/itilobject/timeline/approbation_form.html.twig", "C:\\wamp64\\www\\glpi05\\templates\\components\\itilobject\\timeline\\approbation_form.html.twig");
    }
}
