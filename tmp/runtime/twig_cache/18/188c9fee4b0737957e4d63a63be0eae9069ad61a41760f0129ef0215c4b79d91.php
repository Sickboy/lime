<?php

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_ec1051474fdf588409cb1d9cabe4e9ba7a3ab7d98cef091d5392ce0c4939e4d6 extends Twig_Template
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
        $tags = array("if" => 52);
        $filters = array("format" => 58);
        $functions = array("processString" => 30, "gT" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('format'),
                array('processString', 'gT')
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

        // line 23
        echo "
<!-- Welcome Message -->


    <!-- Survey Name -->
    <div class=\"umk-head\">
    <h1 class=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveyname", array()));
        echo " text-center\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveyname", array()));
        echo " >
        ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), 1));
        echo "
    </h1>
    </div>

    <div id=\"umk-welcome\">
    <!-- Survey description -->
    <div class=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "description", array()));
        echo " text-info text-center\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "description", array()));
        echo ">
        ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "description", array()), 1));
        echo "
    </div>
</div>

    <div id=\"umk-welcome\">
    <!-- Welcome text -->
    <div class=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "welcome", array()));
        echo " h4 text-primary\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "welcome", array()));
        echo ">
        ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "welcome", array()), 1));
        echo "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questioncount", array()));
        echo " \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncount", array()));
        echo ">
        <div class='";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questioncounttext", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncounttext", array()));
        echo ">

            ";
        // line 52
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowxquestions", array()) == true)) {
            // line 53
            echo "                ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", array()) < 1)) {
                // line 54
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("There are no questions in this survey."));
                echo "
                ";
            } elseif (($this->getAttribute(            // line 55
($context["aSurveyInfo"] ?? null), "iTotalquestions", array()) == 1)) {
                // line 56
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("There is 1 question in this survey."));
                echo "
                ";
            } else {
                // line 58
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("There are %s questions in this survey."), $this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", array())));
                echo "
              ";
            }
            // line 60
            echo "            ";
        }
        // line 61
        echo "            
        </div>
        </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 61,  132 => 60,  126 => 58,  120 => 56,  118 => 55,  113 => 54,  110 => 53,  107 => 52,  100 => 49,  94 => 48,  87 => 44,  81 => 43,  72 => 37,  66 => 36,  57 => 30,  51 => 29,  43 => 23,);
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


    (¯`·._.·(¯`·._.·  Welcome page ·._.·´¯)·._.·´¯)

    This view is used to render the welcome message in All In One mode.
    TODO: use it for other modes too

    In this file, you have access to the array aSurveyInfo that contains the datas of the current survey
    To see what's inside aSurveyInfo, turn debug mode on and copy the following line to the end of this file:
    {{ dump(aSurveyInfo) }}

#}

<!-- Welcome Message -->


    <!-- Survey Name -->
    <div class=\"umk-head\">
    <h1 class=\"{{ aSurveyInfo.class.surveyname }} text-center\" {{ aSurveyInfo.attr.surveyname }} >
        {{ processString(aSurveyInfo.name,1) }}
    </h1>
    </div>

    <div id=\"umk-welcome\">
    <!-- Survey description -->
    <div class=\"{{ aSurveyInfo.class.description }} text-info text-center\" {{ aSurveyInfo.attr.description }}>
        {{ processString(aSurveyInfo.description,1) }}
    </div>
</div>

    <div id=\"umk-welcome\">
    <!-- Welcome text -->
    <div class=\"{{ aSurveyInfo.class.welcome }} h4 text-primary\" {{ aSurveyInfo.attr.welcome }}>
        {{ processString(aSurveyInfo.welcome,1) }}
    </div>

    <!-- Question count -->
    <div class=\"{{ aSurveyInfo.class.questioncount }} \" {{ aSurveyInfo.attr.questioncount }}>
        <div class='{{ aSurveyInfo.class.questioncounttext }}' {{ aSurveyInfo.attr.questioncounttext }}>

            {# If survey creator set \"show x questions\" in survey setting  #}
            {% if aSurveyInfo.bShowxquestions == true %}
                {% if aSurveyInfo.iTotalquestions < 1 %}
                    {{ gT(\"There are no questions in this survey.\") }}
                {% elseif aSurveyInfo.iTotalquestions == 1  %}
                    {{ gT(\"There is 1 question in this survey.\") }}
                {% else %}
                    {{ gT(\"There are %s questions in this survey.\") | format(aSurveyInfo.iTotalquestions) }}
              {% endif %}
            {% endif %}
            
        </div>
        </div>
  </div>

", "./subviews/messages/welcome.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/messages/welcome.twig");
    }
}
