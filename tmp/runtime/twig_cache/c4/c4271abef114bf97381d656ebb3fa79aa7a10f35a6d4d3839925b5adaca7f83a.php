<?php

/* ./subviews/survey/question_subviews/answers.twig */
class __TwigTemplate_90e00a1b36950eb5fa101f4e783557d2af6190305f5e087f8c25cdcd33d1853d extends Twig_Template
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
        $filters = array("raw" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 21
        echo "
<!-- Answer -->

    ";
        // line 25
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "answer", array()));
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/answers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  43 => 21,);
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



    (¯`·._.·(¯`·._.· Answers  ·._.·´¯)·._.·´¯)

    The rendering of the answers: the input elements the survey respondent interacts with.
    The container div itself could often change from a template to another, so we clearly separate it.
    NOTE: see views/subviews/survey/question.twig comments for more infos

#}

<!-- Answer -->

    {# NOTE: If you want to customize the question rendering, use a question theme #}
    {{ aQuestion.answer | raw }}

", "./subviews/survey/question_subviews/answers.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_umk2017/views/subviews/survey/question_subviews/answers.twig");
    }
}
