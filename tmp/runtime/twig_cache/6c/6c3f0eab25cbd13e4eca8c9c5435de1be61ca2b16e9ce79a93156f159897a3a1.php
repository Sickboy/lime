<?php

/* ./subviews/registration/register_head.twig */
class __TwigTemplate_0e2102430a0e871e55727b5a124b7b0ad58326a66ad907d5c2efbbfcd6bca4d0 extends Twig_Template
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

        // line 17
        echo "
<span class=\"warning-text\">";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "registration", array()), "head", array()));
        echo "</span>


<div id=\"umk-wrap\">
    <div class=\"umk-head\"><p>Rejestracja do ankiety</p></div>
    <div id=\"umk-welcome\">
        
";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  43 => 17,);
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

    (¯`·._.·(¯`·._.· Registration head·._.·´¯)·._.·´¯)

    This file generates the top container for the participant registration page.

#}

<span class=\"warning-text\">{{aSurveyInfo.registration.head}}</span>


<div id=\"umk-wrap\">
    <div class=\"umk-head\"><p>Rejestracja do ankiety</p></div>
    <div id=\"umk-welcome\">
        
", "./subviews/registration/register_head.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/registration/register_head.twig");
    }
}
