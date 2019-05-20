<?php

/* ./subviews/content/submit.twig */
class __TwigTemplate_79bce1ca4fd681241895dab7d3b889f142620bee6ee9ba5732e2b40f7373c660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'endtext' => array($this, 'block_endtext'),
            'assessments' => array($this, 'block_assessments'),
            'printanswer' => array($this, 'block_printanswer'),
            'publicstatistics' => array($this, 'block_publicstatistics'),
            'endurl' => array($this, 'block_endurl'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 36, "if" => 37);
        $filters = array();
        $functions = array("include" => 29, "gT" => 38);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
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

        // line 26
        echo "
";
        // line 28
        echo "<!-- main form -->
";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/start_form.twig"));
        echo "
<div class=\"umk-question-wrapper \">
    <div  class=\"umk-head umk-head-q \">
    ";
        // line 33
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
        echo "
    <div class=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapper", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapper", array()));
        echo ">
        <div class='";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrappertext", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertext", array()));
        echo ">
            ";
        // line 36
        $this->displayBlock('endtext', $context, $blocks);
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('assessments', $context, $blocks);
        // line 51
        echo "
            ";
        // line 52
        $this->displayBlock('printanswer', $context, $blocks);
        // line 63
        echo "
            ";
        // line 64
        $this->displayBlock('publicstatistics', $context, $blocks);
        // line 75
        echo "
            ";
        // line 77
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sPluginHTML", array()));
        echo "

            ";
        // line 79
        $this->displayBlock('endurl', $context, $blocks);
        // line 85
        echo "        </div>
    </div>
        </div>
</div>
</form> <!-- main form -->
";
    }

    // line 36
    public function block_endtext($context, array $blocks = array())
    {
        // line 37
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "showDefault", array()) == true)) {
            // line 38
            echo "                <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Thank you!"));
            echo "</p>
                <p>";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have been recorded."));
            echo "</p>
            ";
        } else {
            // line 41
            echo "                <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sEndText", array()));
            echo "</p>
            ";
        }
        // line 43
        echo "            ";
    }

    // line 45
    public function block_assessments($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAssessments", array()), "show", array())) {
            // line 48
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/assessments.twig"));
            echo "
            ";
        }
        // line 50
        echo "            ";
    }

    // line 52
    public function block_printanswer($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "show", array()) == true)) {
            // line 55
            echo "                <!--  Link to Print Answer Preview -->
                <div class=\"";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdiva", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdiv", array()));
            echo ">
                    <a href=\"";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "sUrl", array()));
            echo "\" title=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "sTitle", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivaa", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivaa", array()));
            echo ">
                       <p> ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Print your answers."));
            echo " </p>
                    </a>
                </div>
            ";
        }
        // line 62
        echo "            ";
    }

    // line 64
    public function block_publicstatistics($context, array $blocks = array())
    {
        // line 65
        echo "            ";
        // line 66
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "show", array()) == true)) {
            // line 67
            echo "                <!-- Link to Public statistics -->
                <div class=\"";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivb", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivb", array()));
            echo ">
                    <a href=\"";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "sUrl", array()));
            echo "\" title=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "sTitle", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivba", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivba", array()));
            echo ">
                       <p> ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("View the statistics for this survey."));
            echo " </p>
                    </a>
                </div>
            ";
        }
        // line 74
        echo "            ";
    }

    // line 79
    public function block_endurl($context, array $blocks = array())
    {
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array())) {
            // line 82
            echo "               <p> <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrlDescription", array()));
            echo "</a> </p>
            ";
        }
        // line 84
        echo "            ";
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 84,  242 => 82,  239 => 81,  237 => 80,  234 => 79,  230 => 74,  223 => 70,  213 => 69,  207 => 68,  204 => 67,  201 => 66,  199 => 65,  196 => 64,  192 => 62,  185 => 58,  175 => 57,  169 => 56,  166 => 55,  163 => 54,  161 => 53,  158 => 52,  154 => 50,  148 => 48,  145 => 47,  143 => 46,  140 => 45,  136 => 43,  130 => 41,  125 => 39,  120 => 38,  117 => 37,  114 => 36,  105 => 85,  103 => 79,  97 => 77,  94 => 75,  92 => 64,  89 => 63,  87 => 52,  84 => 51,  82 => 45,  79 => 44,  77 => 36,  71 => 35,  65 => 34,  60 => 33,  54 => 29,  51 => 28,  48 => 26,);
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

    (¯`·._.·(¯`·._.· Submit Content  ·._.·´¯)·._.·´¯)

    This page is displayed after user submits the survey.
    It could be, visually, very different (no header, etc).

    It shows the end text, assessments, print answer, and statistics.

    Data are in: aSurveyInfo.aCompleted and aSurveyInfo.aAssessments.
    To show this data, turn debug mode on and copy the following line to the end of the <body> element in this file:
    {{ dump(aSurveyInfo.aCompleted ) }}

    NOTE: This content is included inside mainrow.twig
    NOTE: see layout_global.twig for more infos
#}

{# include the form opening tag #}
<!-- main form -->
{{ include('./subviews/header/start_form.twig') }}
<div class=\"umk-question-wrapper \">
    <div  class=\"umk-head umk-head-q \">
    {# This will display the script and the hidden inputs needed for Expression Manager #}
    {{ aSurveyInfo.EM.ScriptsAndHiddenInputs  }}
    <div class=\"{{ aSurveyInfo.class.submitwrapper }}\" {{ aSurveyInfo.attr.submitwrapper }}>
        <div class='{{ aSurveyInfo.class.submitwrappertext }}' {{ aSurveyInfo.attr.submitwrappertext }}>
            {% block endtext %}
            {% if (aSurveyInfo.aCompleted.showDefault == true) %}
                <p>{{ gT(\"Thank you!\") }}</p>
                <p>{{ gT(\"Your survey responses have been recorded.\") }}</p>
            {% else %}
                <p>{{ aSurveyInfo.aCompleted.sEndText }}</p>
            {% endif %}
            {% endblock %}

            {% block assessments %}
            {# Assessments #}
            {% if (aSurveyInfo.aAssessments.show) %}
                {{ include('./subviews/messages/assessments.twig') }}
            {% endif %}
            {% endblock %}

            {% block printanswer %}
            {#  Link to Print Answer Preview #}
            {% if (aSurveyInfo.aCompleted.aPrintAnswers.show == true) %}
                <!--  Link to Print Answer Preview -->
                <div class=\"{{ aSurveyInfo.class.submitwrapperdiva }}\" {{ aSurveyInfo.attr.submitwrapperdiv }}>
                    <a href=\"{{ aSurveyInfo.aCompleted.aPrintAnswers.sUrl }}\" title={{ aSurveyInfo.aCompleted.aPrintAnswers.sTitle }} class=\"{{ aSurveyInfo.class.submitwrapperdivaa }}\" {{ aSurveyInfo.attr.submitwrapperdivaa }}>
                       <p> {{ gT(\"Print your answers.\") }} </p>
                    </a>
                </div>
            {% endif %}
            {% endblock %}

            {% block publicstatistics %}
            {# Link to Public statistics #}
            {% if (aSurveyInfo.aCompleted.aPublicStatistics.show == true) %}
                <!-- Link to Public statistics -->
                <div class=\"{{ aSurveyInfo.class.submitwrapperdivb }}\" {{ aSurveyInfo.attr.submitwrapperdivb }}>
                    <a href=\"{{ aSurveyInfo.aCompleted.aPublicStatistics.sUrl }}\" title={{ aSurveyInfo.aCompleted.aPublicStatistics.sTitle }} class=\"{{ aSurveyInfo.class.submitwrapperdivba }}\" {{ aSurveyInfo.attr.submitwrapperdivba }}>
                       <p> {{ gT(\"View the statistics for this survey.\") }} </p>
                    </a>
                </div>
            {% endif %}
            {% endblock %}

            {# Before LS3 Master, this should be replace by a Twig block logic #}
            {{ aSurveyInfo.aCompleted.sPluginHTML }}

            {% block endurl %}
            {# NOTE: not very clear what the old replacement keyword {URL} was doing  #}
            {% if (aSurveyInfo.aCompleted.sSurveylsUrl) %}
               <p> <a href=\"{{ aSurveyInfo.aCompleted.sSurveylsUrl }}\">{{ aSurveyInfo.aCompleted.sSurveylsUrlDescription }}</a> </p>
            {% endif %}
            {% endblock %}
        </div>
    </div>
        </div>
</div>
</form> <!-- main form -->
", "./subviews/content/submit.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/submit.twig");
    }
}
