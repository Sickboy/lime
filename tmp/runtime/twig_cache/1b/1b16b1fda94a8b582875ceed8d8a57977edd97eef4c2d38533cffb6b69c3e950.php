<?php

/* __string_template__1f1c091ba714e61e7e9458ac4accc792acc0289f270b7f4369f7209cc845d15f */
class __TwigTemplate_fe71501e8a04259838beb64b392ccd8989abfef710294115a213583344e3d657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("layout_global.twig", "__string_template__1f1c091ba714e61e7e9458ac4accc792acc0289f270b7f4369f7209cc845d15f", 17);
        $this->blocks = array(
            'ajaxindicator' => array($this, 'block_ajaxindicator'),
            'pjaxbegin' => array($this, 'block_pjaxbegin'),
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'pjaxend' => array($this, 'block_pjaxend'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_global.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 21, "if" => 30, "set" => 27, "include" => 28);
        $filters = array();
        $functions = array("registerScript" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set', 'include'),
                array(),
                array('registerScript')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_ajaxindicator($context, array $blocks = array())
    {
    }

    // line 19
    public function block_pjaxbegin($context, array $blocks = array())
    {
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    ";
        if ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array())) {
            echo " 
        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
        basicThemeScripts.initGlobal(); 
        ", "POS_END"));
            // line 36
            echo "
    ";
        }
    }

    // line 21
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array())) {
            echo " 
            ";
            // line 23
            $this->displayParentBlock("nav_bar", $context, $blocks);
            echo "
        ";
        }
        // line 25
        echo "    ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 28
        echo "        ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__1f1c091ba714e61e7e9458ac4accc792acc0289f270b7f4369f7209cc845d15f", 28)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 29
        echo "    ";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array())) {
            echo " 
        ";
            // line 41
            $this->displayParentBlock("footer", $context, $blocks);
            echo "
    ";
        }
    }

    // line 44
    public function block_pjaxend($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__1f1c091ba714e61e7e9458ac4accc792acc0289f270b7f4369f7209cc845d15f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  133 => 41,  128 => 40,  125 => 39,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  108 => 25,  103 => 23,  98 => 22,  95 => 21,  89 => 36,  82 => 31,  77 => 30,  74 => 26,  71 => 21,  68 => 20,  63 => 19,  58 => 18,  11 => 17,);
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

    (¯`·._.·(¯`·._.· Print Answers Layout  ·._.·´¯)·._.·´¯)

    This is the layout that will be used to print the answers. 

#}
{% extends 'layout_global.twig' %}
{% block ajaxindicator %}{% endblock %}
{% block pjaxbegin %}{% endblock %}
{% block body %}
    {% block nav_bar %}
        {% if (not aSurveyInfo.printPdf) %} 
            {{ parent() }}
        {% endif %}
    {% endblock %}
    {% block content %}
        {% set sViewContent =  './subviews/content/' ~ aSurveyInfo.include_content ~ '.twig' %}
        {% include './subviews/content/outerframe.twig' with {'include_content': sViewContent } %}
    {% endblock %}
    {% if (not aSurveyInfo.printPdf) %} 
        {{ registerScript(\"BasicThemeScripts\", \"
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
        basicThemeScripts.initGlobal(); 
        \", \"POS_END\") }}
    {% endif %}
{% endblock %}
{% block footer %}
    {% if (not aSurveyInfo.printPdf) %} 
        {{ parent() }}
    {% endif %}
{% endblock %}
{% block pjaxend %}{% endblock %}
", "__string_template__1f1c091ba714e61e7e9458ac4accc792acc0289f270b7f4369f7209cc845d15f", "");
    }
}
