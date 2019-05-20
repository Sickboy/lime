<?php

/* ./subviews/survey/question_subviews/question_text_content.twig */
class __TwigTemplate_ddebc795e1cf057eb07b250f3235d20442f2e50d1d2e81b6382412a673b43224 extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array("raw" => 44);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

";
        // line 22
        if (($this->getAttribute(($context["aQuestion"] ?? null), "mandatory", array()) != "")) {
            // line 23
            echo "    <!-- Add a visual information + just Mandatory string for aria : can be improved -->
        <small class=\"text-danger fa fa-asterisk small\" ></small>
    
";
        }
        // line 27
        echo "
";
        // line 29
        if ($this->getAttribute(($context["aShow"] ?? null), "question_number", array())) {
            // line 30
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "number", array()));
            echo "
    
";
        }
        // line 33
        echo "
";
        // line 35
        if ($this->getAttribute(($context["aShow"] ?? null), "question_code", array())) {
            // line 36
            echo "   
        ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", array()));
            echo "
   
";
        }
        // line 40
        echo "
";
        // line 42
        echo "
 
       ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "text", array()));
        echo "
    

";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/question_text_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  84 => 42,  81 => 40,  75 => 37,  72 => 36,  70 => 35,  67 => 33,  60 => 30,  58 => 29,  55 => 27,  49 => 23,  47 => 22,  43 => 19,);
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



    (¯`·._.·(¯`·._.· Question Text Content  ·._.·´¯)·._.·´¯)

    This file render the quetion text content.
    NOTE: see views/subviews/survey/question.twig comments for more infos
#}


{# If the question is mandatory, the asterisk will be shown  #}
{% if aQuestion.mandatory != '' %}
    <!-- Add a visual information + just Mandatory string for aria : can be improved -->
        <small class=\"text-danger fa fa-asterisk small\" ></small>
    
{% endif %}

{# If the question number is to be shown (set in survey settings) #}
{% if (aShow.question_number) %}
        {{ aQuestion.number }}
    
{% endif %}

{# If the question code is to be shown (set in survey settings) #}
{% if (aShow.question_code) %}
   
        {{ aQuestion.code }}
   
{% endif %}

{# The question text as entered by the survey creator in question editing #}

 
       {{ aQuestion.text | raw }}
    

", "./subviews/survey/question_subviews/question_text_content.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/survey/question_subviews/question_text_content.twig");
    }
}
