<?php

/* ./subviews/content/submit.twig */
class __TwigTemplate_b8d1daafd5e0c755b747fe457343ed121468a2f6af607a33b73d6a6937307308 extends Twig_Template
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
        $tags = array("block" => 34, "if" => 35);
        $filters = array();
        $functions = array("include" => 29, "gT" => 36);

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
    ";
        // line 31
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
        echo "
    <div class=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapper", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapper", array()));
        echo ">
        <div class='";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrappertext", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertext", array()));
        echo ">
            ";
        // line 34
        $this->displayBlock('endtext', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('assessments', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('printanswer', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('publicstatistics', $context, $blocks);
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sPluginHTML", array()));
        echo "

            ";
        // line 77
        $this->displayBlock('endurl', $context, $blocks);
        // line 83
        echo "        </div>
    </div>
</form> <!-- main form -->
";
    }

    // line 34
    public function block_endtext($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "showDefault", array()) == true)) {
            // line 36
            echo "                <p ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertextpa", array()));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Thank you!"));
            echo "</p>
                <p ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrappertextpb", array()));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have been recorded."));
            echo "</p>
            ";
        } else {
            // line 39
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sEndText", array()));
            echo "
            ";
        }
        // line 41
        echo "            ";
    }

    // line 43
    public function block_assessments($context, array $blocks = array())
    {
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAssessments", array()), "show", array())) {
            // line 46
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/assessments.twig"));
            echo "
            ";
        }
        // line 48
        echo "            ";
    }

    // line 50
    public function block_printanswer($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "show", array()) == true)) {
            // line 53
            echo "                <!--  Link to Print Answer Preview -->
                <div class=\"";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdiva", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdiv", array()));
            echo ">
                    <a href=\"";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "sUrl", array()));
            echo "\" title=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "sTitle", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivaa", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivaa", array()));
            echo ">
                        ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Print your answers."));
            echo "
                    </a>
                </div>
            ";
        }
        // line 60
        echo "            ";
    }

    // line 62
    public function block_publicstatistics($context, array $blocks = array())
    {
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "show", array()) == true)) {
            // line 65
            echo "                <!-- Link to Public statistics -->
                <div class=\"";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivb", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivb", array()));
            echo ">
                    <a href=\"";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "sUrl", array()));
            echo "\" title=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "sTitle", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivba", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivba", array()));
            echo ">
                        ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("View the statistics for this survey."));
            echo "
                    </a>
                </div>
            ";
        }
        // line 72
        echo "            ";
    }

    // line 77
    public function block_endurl($context, array $blocks = array())
    {
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array())) {
            // line 80
            echo "                <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrlDescription", array()));
            echo "</a>
            ";
        }
        // line 82
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
        return array (  250 => 82,  242 => 80,  239 => 79,  237 => 78,  234 => 77,  230 => 72,  223 => 68,  213 => 67,  207 => 66,  204 => 65,  201 => 64,  199 => 63,  196 => 62,  192 => 60,  185 => 56,  175 => 55,  169 => 54,  166 => 53,  163 => 52,  161 => 51,  158 => 50,  154 => 48,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  136 => 41,  130 => 39,  123 => 37,  116 => 36,  113 => 35,  110 => 34,  103 => 83,  101 => 77,  95 => 75,  92 => 73,  90 => 62,  87 => 61,  85 => 50,  82 => 49,  80 => 43,  77 => 42,  75 => 34,  69 => 33,  63 => 32,  58 => 31,  54 => 29,  51 => 28,  48 => 26,);
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
    {# This will display the script and the hidden inputs needed for Expression Manager #}
    {{ aSurveyInfo.EM.ScriptsAndHiddenInputs  }}
    <div class=\"{{ aSurveyInfo.class.submitwrapper }}\" {{ aSurveyInfo.attr.submitwrapper }}>
        <div class='{{ aSurveyInfo.class.submitwrappertext }}' {{ aSurveyInfo.attr.submitwrappertext }}>
            {% block endtext %}
            {% if (aSurveyInfo.aCompleted.showDefault == true) %}
                <p {{ aSurveyInfo.attr.submitwrappertextpa }}>{{ gT(\"Thank you!\") }}</p>
                <p {{ aSurveyInfo.attr.submitwrappertextpb }}>{{ gT(\"Your survey responses have been recorded.\") }}</p>
            {% else %}
                {{ aSurveyInfo.aCompleted.sEndText }}
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
                    <a href=\"{{ aSurveyInfo.aCompleted.aPublicStatistics.sUrl }}\" title={{ aSurveyInfo.aCompleted.aPublicStatistics.sTitle }} class=\"{{ aSurveyInfo.class.submitwrapperdivba }}\" {{ aSurveyInfo.attr.submitwrapperdivba }}>
                        {{ gT(\"View the statistics for this survey.\") }}
                    </a>
                </div>
            {% endif %}
            {% endblock %}

            {# Before LS3 Master, this should be replace by a Twig block logic #}
            {{ aSurveyInfo.aCompleted.sPluginHTML }}

            {% block endurl %}
            {# NOTE: not very clear what the old replacement keyword {URL} was doing  #}
            {% if (aSurveyInfo.aCompleted.sSurveylsUrl) %}
                <a href=\"{{ aSurveyInfo.aCompleted.sSurveylsUrl }}\">{{ aSurveyInfo.aCompleted.sSurveylsUrlDescription }}</a>
            {% endif %}
            {% endblock %}
        </div>
    </div>
</form> <!-- main form -->
", "./subviews/content/submit.twig", "/var/www/html/lime/themes/survey/vanilla/views/subviews/content/submit.twig");
    }
}
