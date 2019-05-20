<?php

/* ./subviews/registration/register_message.twig */
class __TwigTemplate_c96c29c3036ddc3a0467d1261962b73f6d06e5b41e7cbcd54e8d26e94ec8c729 extends Twig_Template
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
        $tags = array("if" => 18, "for" => 31);
        $filters = array();
        $functions = array("gT" => 19, "empty" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array('gT', 'empty')
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
";
        // line 18
        if (($context["registerSuccess"] ?? null)) {
            // line 19
            echo "    <p ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermessageb", array()));
            echo " >";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Thank you for registering. You will receive an email shortly."));
            echo "</p>
";
        } else {
            // line 21
            echo "    ";
            if (($context["sStartDate"] ?? null)) {
                // line 22
                echo "    <p ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermessagea", array()));
                echo " > ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("You may register for this survey but you have to wait for the {{sStartDate}} before starting the survey."));
                echo "</p>
    ";
            } else {
                // line 24
                echo "    <p  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermessageb", array()));
                echo " >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("You may register for this survey if you wish to take part."));
                echo "</p>
    ";
            }
            // line 26
            echo "    <p  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermessagec", array()));
            echo " >";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Enter your details below, and an email containing the link to participate in this survey will be sent immediately."));
            echo "</p>
";
        }
        // line 28
        echo "
";
        // line 29
        if ( !empty($this->getAttribute(($context["aSurveyInfo"] ?? null), "aErrors", array()))) {
            // line 30
            echo "    <ul class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdivbul", array()));
            echo " alert alert-danger list-unstyled' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdivbul", array()));
            echo ">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "aErrors", array()));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 32
                echo "            <li>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["error"]);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>
";
        }
        // line 36
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  108 => 34,  99 => 32,  95 => 31,  88 => 30,  86 => 29,  83 => 28,  75 => 26,  67 => 24,  59 => 22,  56 => 21,  48 => 19,  46 => 18,  43 => 17,);
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

    (¯`·._.·(¯`·._.· Registration message._.·´¯)·._.·´¯)

    If there is a message on the registration page, like \"Survey has not started, or Register now! here it is displayed

#}

{% if registerSuccess %}
    <p {{ aSurveyInfo.attr.registermessageb }} >{{ gT(\"Thank you for registering. You will receive an email shortly.\") }}</p>
{% else %}
    {% if sStartDate %}
    <p {{ aSurveyInfo.attr.registermessagea }} > {{ gT(\"You may register for this survey but you have to wait for the {{sStartDate}} before starting the survey.\") }}</p>
    {% else %}
    <p  {{ aSurveyInfo.attr.registermessageb }} >{{ gT(\"You may register for this survey if you wish to take part.\") }}</p>
    {% endif %}
    <p  {{ aSurveyInfo.attr.registermessagec }} >{{ gT(\"Enter your details below, and an email containing the link to participate in this survey will be sent immediately.\") }}</p>
{% endif %}

{% if  not empty(aSurveyInfo.aErrors) %}
    <ul class='{{ aSurveyInfo.class.maincoldivdivbul }} alert alert-danger list-unstyled' {{ aSurveyInfo.attr.maincoldivdivbul }}>
        {% for  key, error in aSurveyInfo.aErrors%}
            <li>{{ error }}</li>
        {% endfor %}
    </ul>
{% endif %}
</div>", "./subviews/registration/register_message.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/registration/register_message.twig");
    }
}
