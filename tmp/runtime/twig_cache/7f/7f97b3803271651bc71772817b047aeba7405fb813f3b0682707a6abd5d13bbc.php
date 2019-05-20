<?php

/* ./subviews/content/register.twig */
class __TwigTemplate_4d91e621ec8982dfe736f0477a5e9e4ab90299c0b5f1fb016388dcdfd650d410 extends Twig_Template
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
        $tags = array("set" => 33, "include" => 34);
        $filters = array();
        $functions = array("include" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include'),
                array(),
                array('include')
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
        echo "    <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "register", array()));
        echo " container\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "register", array()));
        echo ">
        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
        echo "

        <div class=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerrow", array()));
        echo " row\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerrow", array()));
        echo ">
            <div>
            ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/register_head.twig"));
        echo "
                <div >
                    ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/register_message.twig"));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/register_error.twig"));
        echo "

        ";
        // line 33
        $context["sViewContent"] = (("./subviews/registration/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "registration_view", array())) . ".twig");
        // line 34
        echo "        ";
        $this->loadTemplate(($context["sViewContent"] ?? null), "./subviews/content/register.twig", 34)->display($context);
        // line 35
        echo "
    </div>
    <input type='hidden' class='hidemenubutton'/>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  82 => 34,  80 => 33,  75 => 31,  68 => 27,  63 => 25,  56 => 23,  50 => 21,  43 => 19,);
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

    (¯`·._.·(¯`·._.· Registration Content  ·._.·´¯)·._.·´¯)

    This file displays the page shown to user when a participant registers for taking a survey.
    
    NOTE: This content is included inside mainrow.twig
    NOTE: see layout_global.twig for more infos
#}
    <div class=\"{{ aSurveyInfo.class.register }} container\" {{ aSurveyInfo.attr.register }}>
        {# This will display the script and the hidden inputs needed for Expression Manager #}
        {{ aSurveyInfo.EM.ScriptsAndHiddenInputs  }}

        <div class=\"{{ aSurveyInfo.class.registerrow }} row\" {{ aSurveyInfo.attr.registerrow }}>
            <div>
            {{ include('./subviews/registration/register_head.twig') }}
                <div >
                    {{ include('./subviews/registration/register_message.twig') }}
                </div>
            </div>
        </div>
        {{ include('./subviews/registration/register_error.twig') }}

        {% set sViewContent =  './subviews/registration/' ~ aSurveyInfo.registration_view ~ '.twig' %}
        {% include sViewContent %}

    </div>
    <input type='hidden' class='hidemenubutton'/>
", "./subviews/content/register.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/register.twig");
    }
}
