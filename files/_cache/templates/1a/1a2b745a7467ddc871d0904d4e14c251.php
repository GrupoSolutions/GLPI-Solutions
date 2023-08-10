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

/* @formcreator/components/form/form_taglist.html.twig */
class __TwigTemplate_1675277933523d291e527f47d6d15fb9 extends Template
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
        // line 30
        echo "
";
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/form_taglist.html.twig", 31)->unwrap();
        // line 32
        echo "
<div class=\"card-body d-flex flex-wrap\">
    <div class=\"col-12 col-xxl-";
        // line 34
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
        <div class=\"row flex-row align-items-start flex-grow-1\">
            <div class=\"row flex-row\">
                <table class=\"table\">
                    <tr><th colspan=\"5\">";
        // line 39
        echo twig_escape_filter($this->env, __("List of available tags"), "html", null, true);
        echo "</th></tr>
                    <tr>
                        <th colspan=\"2\">";
        // line 41
        echo twig_escape_filter($this->env, _n("Question", "Questions", 1, "formcreator"), "html", null, true);
        echo "</th>
                        <th>";
        // line 42
        echo twig_escape_filter($this->env, __("Title"), "html", null, true);
        echo "</th>
                        <th>";
        // line 43
        echo twig_escape_filter($this->env, _n("Answer", "Answers", 1, "formcreator"), "html", null, true);
        echo "</th>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, _n("Section", "Sections", 1, "formcreator"), "html", null, true);
        echo "</th>
                    </tr>
                    <tr>
                        <td colspan=\"2\"><strong>";
        // line 47
        echo twig_escape_filter($this->env, __("Full form", "formcreator"), "html", null, true);
        echo "</strong></td>
                        <td>-</td>
                        <td><strong>##FULLFORM##</strong></td>
                        <td>-</td>
                    </tr>
                     ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "                        <tr>
                            <td colspan=\"2\"><strong>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "question", [], "any", false, false, false, 54), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "answer", [], "any", false, false, false, 56), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "section", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    ";
        $context["sections"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::getQuestionsFromFormBySection", [0 => ($context["item"] ?? null)]);
        // line 61
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["sectionName"] => $context["questions"]) {
            // line 62
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["questions"]);
            foreach ($context['_seq'] as $context["questionId"] => $context["questionName"]) {
                // line 63
                echo "                            <tr>
                                <td colspan=\"2\">";
                // line 64
                echo twig_escape_filter($this->env, $context["questionName"], "html", null, true);
                echo "</td>
                                <td>##question_";
                // line 65
                echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                echo "##</td>
                                <td>##answer_";
                // line 66
                echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                echo "##</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, $context["sectionName"], "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['questionId'], $context['questionName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sectionName'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </table>
            </div> ";
        // line 73
        echo "        </div> ";
        // line 74
        echo "        </div> ";
        // line 75
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@formcreator/components/form/form_taglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 75,  161 => 74,  159 => 73,  156 => 71,  150 => 70,  141 => 67,  137 => 66,  133 => 65,  129 => 64,  126 => 63,  121 => 62,  116 => 61,  113 => 60,  104 => 57,  100 => 56,  96 => 55,  92 => 54,  89 => 53,  85 => 52,  77 => 47,  71 => 44,  67 => 43,  63 => 42,  59 => 41,  54 => 39,  46 => 34,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 # Formcreator is a plugin which allows creation of custom forms of
 # easy access.
 # ---------------------------------------------------------------------
 # LICENSE
 #
 # This file is part of Formcreator.
 #
 # Formcreator is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # Formcreator is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 # ---------------------------------------------------------------------
 # @copyright Copyright © 2011 - 2021 Teclib'
 # @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 # @link      https://github.com/pluginsGLPI/formcreator/
 # @link      https://pluginsglpi.github.io/formcreator/
 # @link      http://plugins.glpi-project.org/#/plugin/formcreator
 # ---------------------------------------------------------------------
 #}

{% import 'components/form/fields_macros.html.twig' as fields %}

<div class=\"card-body d-flex flex-wrap\">
    <div class=\"col-12 col-xxl-{{ item_has_pictures ? '9' : '12' }} flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
        <div class=\"row flex-row align-items-start flex-grow-1\">
            <div class=\"row flex-row\">
                <table class=\"table\">
                    <tr><th colspan=\"5\">{{ __('List of available tags') }}</th></tr>
                    <tr>
                        <th colspan=\"2\">{{ _n('Question', 'Questions', 1, 'formcreator') }}</th>
                        <th>{{ __('Title') }}</th>
                        <th>{{ _n('Answer', 'Answers', 1, 'formcreator') }}</th>
                        <th>{{ _n('Section', 'Sections', 1, 'formcreator') }}</th>
                    </tr>
                    <tr>
                        <td colspan=\"2\"><strong>{{ __('Full form', 'formcreator') }}</strong></td>
                        <td>-</td>
                        <td><strong>##FULLFORM##</strong></td>
                        <td>-</td>
                    </tr>
                     {% for tag in extra_tags %}
                        <tr>
                            <td colspan=\"2\"><strong>{{ tag.question }}</strong></td>
                            <td>{{ tag.title }}</td>
                            <td><strong>{{ tag.answer }}</strong></td>
                            <td>{{ tag.section }}</td>
                        </tr>
                    {% endfor %}
                    {% set sections = call('PluginFormcreatorQuestion::getQuestionsFromFormBySection', [item]) %}
                    {% for sectionName, questions in sections %}
                        {% for questionId, questionName in questions %}
                            <tr>
                                <td colspan=\"2\">{{ questionName }}</td>
                                <td>##question_{{ questionId }}##</td>
                                <td>##answer_{{ questionId }}##</td>
                                <td>{{ sectionName }}</td>
                            </tr>
                        {% endfor %}
                    {% endfor %}
                </table>
            </div> {# .row #}
        </div> {# .row #}
        </div> {# .flex-row #}
    </div>
", "@formcreator/components/form/form_taglist.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/components/form/form_taglist.html.twig");
    }
}
