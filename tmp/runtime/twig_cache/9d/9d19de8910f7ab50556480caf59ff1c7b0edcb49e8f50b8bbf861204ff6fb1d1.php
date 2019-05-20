<?php

/* ./subviews/content/clearall.twig */
class __TwigTemplate_6e55224b030ed26bb573373a441ad115b605238be31364f9f788fa23ca67e013 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("gT" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 18
        echo "<div class=\"umk-question-wrapper \">
    <div  class=\"umk-head umk-head-q \">
<div class='";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "clearall", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "clearall", array()));
        echo ">
    <div class=\" ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "clearalldiv", array()));
        echo " \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "clearalldiv", array()));
        echo ">
        <p>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Answers cleared"));
        echo "</p>
        <p><a href=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", array()));
        echo "\"  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "clearalla", array()));
        echo " style=\"float: center;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Restart this survey"));
        echo "</a>
        </p>
    </div>
</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./subviews/content/clearall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  59 => 22,  53 => 21,  47 => 20,  43 => 18,);
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

    (¯`·._.·(¯`·._.· Clear All Content  ·._.·´¯)·._.·´¯)

    This file displays the page shown to a respondent when they have cleared the survey (only show \"Restart this survey\")

    NOTE: This content is included inside mainrow.twig
#}
<div class=\"umk-question-wrapper \">
    <div  class=\"umk-head umk-head-q \">
<div class='{{ aSurveyInfo.class.clearall }}' {{ aSurveyInfo.attr.clearall }}>
    <div class=\" {{ aSurveyInfo.class.clearalldiv }} \" {{ aSurveyInfo.attr.clearalldiv }}>
        <p>{{ gT(\"Answers cleared\") }}</p>
        <p><a href=\"{{ aSurveyInfo.surveyUrl }}\"  {{ aSurveyInfo.attr.clearalla }} style=\"float: center;\">{{ gT(\"Restart this survey\") }}</a>
        </p>
    </div>
</div>
    </div>
</div>", "./subviews/content/clearall.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/clearall.twig");
    }
}
