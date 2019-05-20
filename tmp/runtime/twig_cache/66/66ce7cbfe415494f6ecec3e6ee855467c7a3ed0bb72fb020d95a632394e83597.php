<?php

/* ./subviews/printanswers/printanswers_head.twig */
class __TwigTemplate_260265e6ef0a7ae5f5cec7928639caf5decf67312196e3e06c24389b2a3fb8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 20);
        $filters = array();
        $functions = array("include" => 21, "gT" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('include', 'gT')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "
";
        // line 19
        echo "
";
        // line 20
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) == 1)) {
            echo " 
";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/printanswers/printanswers_style.twig"));
            echo "
<style> 
    body{ 
        font-size: 11pt;
        line-height: 80%; 
    } 
    div{
        margin: 0;
        padding: 0;
    }
    .question-container-printanswers{
        line-height: 125%;
    }
</style> 
";
        }
        // line 37
        echo "<div class=\"container\">
    ";
        // line 38
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1)) {
            echo " 
        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "printAnswersHeadFormUrl", array()), 1 => "post"), "method"));
            echo "
                    ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Export these responses as PDF:"));
            echo " <button class=\"btn btn-default\" type=\"submit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("PDF export"));
            echo "</button>
                ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "endForm", array()));
            echo "
            </div>
            <div class=\"col-sm-6\">
                ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "printAnswersHeadFormQueXMLUrl", array()), 1 => "post"), "method"));
            echo "
                    ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Export these responses to QXML:"));
            echo " <button class=\"btn btn-default\" type=\"submit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("queXMLPDF export"));
            echo "</button>
                ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "endForm", array()));
            echo "
            </div>
        </div>
        <div class=\"row\">
        <br/>
        </div>
    ";
        }
        // line 55
        echo "


";
    }

    public function getTemplateName()
    {
        return "./subviews/printanswers/printanswers_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 55,  106 => 48,  100 => 47,  96 => 46,  90 => 43,  84 => 42,  80 => 41,  74 => 38,  71 => 37,  53 => 21,  49 => 20,  46 => 19,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Registration form._.·´¯)·._.·´¯)

    This is the head for the printanswers table.
    It is used for the rendering of the responses at the end of the survey.

#}

{% if (aSurveyInfo.printPdf == 1) %} 
{{ include('./subviews/printanswers/printanswers_style.twig') }}
<style> 
    body{ 
        font-size: 11pt;
        line-height: 80%; 
    } 
    div{
        margin: 0;
        padding: 0;
    }
    .question-container-printanswers{
        line-height: 125%;
    }
</style> 
{% endif %}
{# {{dump(aSurveyInfo.groupArray)}} #}
<div class=\"container\">
    {% if (aSurveyInfo.printPdf != 1) %} 
        <div class=\"row\">
            <div class=\"col-sm-6\">
                {{ C.Html.form(aSurveyInfo.printAnswersHeadFormUrl, 'post') }}
                    {{ gT(\"Export these responses as PDF:\") }} <button class=\"btn btn-default\" type=\"submit\">{{ gT(\"PDF export\") }}</button>
                {{ C.Html.endForm }}
            </div>
            <div class=\"col-sm-6\">
                {{ C.Html.form(aSurveyInfo.printAnswersHeadFormQueXMLUrl, 'post') }}
                    {{ gT(\"Export these responses to QXML:\") }} <button class=\"btn btn-default\" type=\"submit\">{{ gT(\"queXMLPDF export\") }}</button>
                {{ C.Html.endForm }}
            </div>
        </div>
        <div class=\"row\">
        <br/>
        </div>
    {% endif %}



", "./subviews/printanswers/printanswers_head.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/printanswers/printanswers_head.twig");
    }
}
