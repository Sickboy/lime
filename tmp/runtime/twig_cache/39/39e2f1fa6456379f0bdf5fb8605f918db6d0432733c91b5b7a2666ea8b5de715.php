<?php

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_2fe9f79786776fcfc157630e8c7a42b21b842f1da100c4aa13382cc444985623 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 19
        echo "

<div id=\"umk-header\">
    <div id=\"umk-logo\"></div>
    <div id=\"umk-surveyname\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
        echo "</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  43 => 19,);
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

    (¯`·._.·(¯`·._.· Bootstrap Navigation Bar ·._.·´¯)·._.·´¯)

    This file renders a typical bootstrap navigation bar.
    See: https://getbootstrap.com/components/#navbar

    For the survey navigator (\"Next\", \"Back\", etc.), see: navigation/navigator.twig
#}


<div id=\"umk-header\">
    <div id=\"umk-logo\"></div>
    <div id=\"umk-surveyname\">{{ aSurveyInfo.surveyls_title }}</div>
</div>

", "./subviews/header/nav_bar.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/header/nav_bar.twig");
    }
}
