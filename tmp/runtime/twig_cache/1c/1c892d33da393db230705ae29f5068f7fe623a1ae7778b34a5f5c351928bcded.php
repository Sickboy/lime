<?php

/* ./subviews/registration/register_error.twig */
class __TwigTemplate_270a6728a550692a2034db21b861571887d224821c2f3d5a88739613b7c6fb01 extends Twig_Template
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
        $tags = array("if" => 18, "for" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 1
        echo "
";
        // line 18
        if ( !twig_test_empty($this->getAttribute(($context["aSurveyInfo"] ?? null), "errors", array()))) {
            // line 19
            echo "    <ul class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerul", array()));
            echo " alert alert-danger list-unstyled' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerul", array()));
            echo " >
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                echo "            <!-- Error Html warnings -->
                <li ";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerulli", array()));
                echo " >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["error"]);
                echo "</li>
                <br/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  62 => 22,  59 => 21,  55 => 20,  48 => 19,  46 => 18,  43 => 1,);
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

    (¯`·._.·(¯`·._.· Registration errors._.·´¯)·._.·´¯)

    If there where errors on registration show them here

#}
{% if aSurveyInfo.errors is not empty %}
    <ul class='{{ aSurveyInfo.class.registerul }} alert alert-danger list-unstyled' {{ aSurveyInfo.attr.registerul }} >
        {% for error in aSurveyInfo.errors  %}
            <!-- Error Html warnings -->
                <li {{ aSurveyInfo.attr.registerulli }} >{{ error }}</li>
                <br/>
        {% endfor %}
    </ul>
{% endif %}
", "./subviews/registration/register_error.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/registration/register_error.twig");
    }
}
