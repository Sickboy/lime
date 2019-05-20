<?php

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_1b25f359207d8dab7690ccb53f29f60b664c110492eb52bd40f45610c0aeb189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("./subviews/content/submit.twig", "./subviews/content/submit_preview.twig", 20);
        $this->blocks = array(
            'endtext' => array($this, 'block_endtext'),
            'printanswer' => array($this, 'block_printanswer'),
            'publicstatistics' => array($this, 'block_publicstatistics'),
            'endurl' => array($this, 'block_endurl'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./subviews/content/submit.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 29);
        $filters = array();
        $functions = array("gT" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('gT')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_endtext($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Did Not Save"));
        echo " </strong>
        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have not been recorded. This survey is not yet active."));
        echo "
    </div>
    ";
        // line 25
        $this->displayParentBlock("endtext", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_printanswer($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "show", array()) == true)) {
            // line 30
            echo "        <!--  Link to Print Answer Preview -->
        <div class=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdiva", array()));
            echo " disabled\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdiv", array()));
            echo ">
            <a href=\"#\" title=\" ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: This link only works if the survey is activated."));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivaa", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivaa", array()));
            echo ">
                ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Print your answers."));
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 38
    public function block_publicstatistics($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "show", array()) == true)) {
            // line 41
            echo "        <!-- Link to Public statistics -->
        <div class=\"";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivb", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivb", array()));
            echo ">
            <a href=\"#\" title=\" ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: This link only works if the survey is activated."));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivba", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivba", array()));
            echo ">
                ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("View the statistics for this survey."));
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 49
    public function block_endurl($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array())) {
            // line 51
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrlDescription", array()));
            echo "
        ";
            // line 52
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "autoredirect", array()) == "Y")) {
                // line 53
                echo "            <small class=\"text-info\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: Automatically loading the end URL works only if the survey is activated."));
                echo "</small>
        ";
            }
            // line 55
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  157 => 53,  155 => 52,  148 => 51,  145 => 50,  142 => 49,  133 => 44,  125 => 43,  119 => 42,  116 => 41,  113 => 40,  111 => 39,  108 => 38,  99 => 33,  91 => 32,  85 => 31,  82 => 30,  79 => 29,  77 => 28,  74 => 27,  68 => 25,  63 => 23,  58 => 22,  55 => 21,  11 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Submit Preview Content  ·._.·´¯)·._.·´¯)

    TODO: this file should be merged with layout_submit,
    adding the warning message \"Your survey responses have not been recorded. This survey is not yet active.\" to  aSurveyInfo.errorHtml.messages

    NOTE: This content is included inside mainrow.twig
    NOTE: see layout_global.twig for more infos
#}
{% extends \"./subviews/content/submit.twig\" %}
{% block endtext %}
    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">{{ gT(\"Did Not Save\") }} </strong>
        {{ gT(\"Your survey responses have not been recorded. This survey is not yet active.\") }}
    </div>
    {{ parent() }}
{% endblock %}
{% block printanswer %}
    {#  Link to Print Answer Preview #}
    {% if (aSurveyInfo.aCompleted.aPrintAnswers.show == true) %}
        <!--  Link to Print Answer Preview -->
        <div class=\"{{ aSurveyInfo.class.submitwrapperdiva }} disabled\" {{ aSurveyInfo.attr.submitwrapperdiv }}>
            <a href=\"#\" title=\" {{ gT(\"Note: This link only works if the survey is activated.\") }}\" class=\"{{ aSurveyInfo.class.submitwrapperdivaa }}\" {{ aSurveyInfo.attr.submitwrapperdivaa }}>
                {{ gT(\"Print your answers.\") }}
            </a>
        </div>
    {% endif %}
{% endblock %}
{% block publicstatistics %}
    {# Link to Public statistics #}
    {% if (aSurveyInfo.aCompleted.aPublicStatistics.show == true) %}
        <!-- Link to Public statistics -->
        <div class=\"{{ aSurveyInfo.class.submitwrapperdivb }}\" {{ aSurveyInfo.attr.submitwrapperdivb }}>
            <a href=\"#\" title=\" {{ gT(\"Note: This link only works if the survey is activated.\") }}\" class=\"{{ aSurveyInfo.class.submitwrapperdivba }}\" {{ aSurveyInfo.attr.submitwrapperdivba }}>
                {{ gT(\"View the statistics for this survey.\") }}
            </a>
        </div>
    {% endif %}
{% endblock %}
{% block endurl %}
    {% if (aSurveyInfo.aCompleted.sSurveylsUrl) %}
        <a href=\"{{ aSurveyInfo.aCompleted.sSurveylsUrl }}\">{{ aSurveyInfo.aCompleted.sSurveylsUrlDescription }}
        {% if(aSurveyInfo.autoredirect == \"Y\") %}
            <small class=\"text-info\">{{ gT(\"Note: Automatically loading the end URL works only if the survey is activated.\") }}</small>
        {% endif %}
        </a>
    {% endif %}
{% endblock %}

", "./subviews/content/submit_preview.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/submit_preview.twig");
    }
}
