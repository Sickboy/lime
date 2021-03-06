<?php

/* ./subviews/content/userforms.twig */
class __TwigTemplate_cc3386b9db702f98a28d0feb1f03acecca45bde7f3e46903d170b3e87a297c21 extends Twig_Template
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
        $tags = array("set" => 26, "include" => 27);
        $filters = array();
        $functions = array("include" => 30);

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

        // line 18
        echo "
<!-- Main Row -->
<div id=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "mainrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "mainrow", array()));
        echo ">

    <!-- Main Col -->
    <div class=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincol", array()));
        echo " col-centered \" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "maincol", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincol", array()));
        echo ">

        <div class='";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "sType", array()));
        echo "-page' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldiv", array()));
        echo ">
                ";
        // line 26
        $context["sUserformContent"] = (("./subviews/logincomponents/" . $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "sType", array())) . ".twig");
        // line 27
        echo "                ";
        $this->loadTemplate(($context["sUserformContent"] ?? null), "./subviews/content/userforms.twig", 27)->display($context);
        // line 28
        echo "        </div>

        ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig"));
        echo "

    </div> <!-- main col -->
</div> <!-- main row -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/userforms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  75 => 28,  72 => 27,  70 => 26,  64 => 25,  55 => 23,  47 => 20,  43 => 18,);
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

    (¯`·._.·(¯`·._.· User Forms Layout  ·._.·´¯)·._.·´¯)

    This file renders the user forms such as: token (survey participant), and register.

    NOTE: see layout_global.twig for more infos
#}

<!-- Main Row -->
<div id=\"{{ aSurveyInfo.id.mainrow }}\" {{ aSurveyInfo.attr.mainrow }}>

    <!-- Main Col -->
    <div class=\"{{ aSurveyInfo.class.maincol }} col-centered \" id=\"{{ aSurveyInfo.id.maincol }}\" {{ aSurveyInfo.attr.maincol }}>

        <div class='{{aSurveyInfo.aForm.sType}}-page' {{ aSurveyInfo.attr.maincoldiv }}>
                {% set sUserformContent =  './subviews/logincomponents/' ~ aSurveyInfo.aForm.sType ~ '.twig' %}
                {% include sUserformContent %}
        </div>

        {{ include('./subviews/navigation/language_changer_form.twig') }}

    </div> <!-- main col -->
</div> <!-- main row -->
", "./subviews/content/userforms.twig", "/var/www/html/ankiety/v3/themes/survey/umk2/views/subviews/content/userforms.twig");
    }
}
