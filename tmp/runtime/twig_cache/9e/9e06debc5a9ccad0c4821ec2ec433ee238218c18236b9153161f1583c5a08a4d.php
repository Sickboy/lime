<?php

/* ./subviews/content/mainrow.twig */
class __TwigTemplate_dd7839905666b31764051ac97f0b80b324cfd7460cf5dbf804e9cafa73aaa8c9 extends Twig_Template
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
        $tags = array("if" => 28);
        $filters = array();
        $functions = array("include" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo "
<!-- Main Row -->
<div id=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "mainrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "mainrow", array()));
        echo " >
    <!-- Main Col -->
    <div class=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincol", array()));
        echo " col-centered  space-col\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "maincol", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincol", array()));
        echo ">

        ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/warnings.twig"));
        echo "
            ";
        // line 25
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/justsaved.twig"));
        echo "

            ";
        // line 28
        echo "            ";
        if ((($context["include_content"] ?? null) != "./subviews/content/")) {
            // line 29
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, ($context["include_content"] ?? null)));
            echo "
            ";
        }
        // line 31
        echo "

    </div> <!-- main col -->
</div> <!-- main row -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/mainrow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  79 => 29,  76 => 28,  70 => 25,  65 => 23,  63 => 22,  54 => 19,  47 => 17,  43 => 15,);
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

    (¯`·._.·(¯`·._.· Main Row  ·._.·´¯)·._.·´¯)

#}

<!-- Main Row -->
<div id=\"{{ aSurveyInfo.id.mainrow }}\" {{ aSurveyInfo.attr.mainrow }} >
    <!-- Main Col -->
    <div class=\"{{ aSurveyInfo.class.maincol }} col-centered  space-col\" id=\"{{ aSurveyInfo.id.maincol }}\" {{ aSurveyInfo.attr.maincol }}>

        {# This is the main block that will be replaced/extended by other layouts#}
            {# Include the various Warnings (preview mode, unanswered mandatory questions, etc) #}
            {{ include('./subviews/messages/warnings.twig') }}
            {# Include the just saved success #}
            {{ include('./subviews/messages/justsaved.twig') }}

            {# Wich file to include for content is decided inside the layout #}
            {% if(include_content) != \"./subviews/content/\" %}
                {{ include(include_content) }}
            {% endif %}


    </div> <!-- main col -->
</div> <!-- main row -->
", "./subviews/content/mainrow.twig", "/var/www/html/ankiety/v3/themes/survey/umk2/views/subviews/content/mainrow.twig");
    }
}
