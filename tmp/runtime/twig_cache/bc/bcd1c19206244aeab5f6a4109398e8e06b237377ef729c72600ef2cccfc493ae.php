<?php

/* ./subviews/navigation/question_index_buttons.twig */
class __TwigTemplate_ee8c8bbf94c21ad6341442d177a849c456b676ef20606c3b93ce8923c907a263 extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array();
        $functions = array("include" => 10);

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

        // line 7
        echo "
<div class=\"col-sm-6 index-wrapper\">
    ";
        // line 9
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "G")) {
            // line 10
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/question_index_groups_buttons.twig"));
            echo "
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "S")) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/question_index_questions_buttons.twig"));
            echo "
    ";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  43 => 7,);
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
    This file is part of LimeSurvey
    Copyright (C) 2007-2018 The LimeSurvey Project Team

    Show the question index in navigator
#}

<div class=\"col-sm-6 index-wrapper\">
    {% if aSurveyInfo.format == 'G' %}
        {{ include('./subviews/navigation/question_index_groups_buttons.twig') }}
    {% endif %}

    {% if aSurveyInfo.format == 'S' %}
        {{ include('./subviews/navigation/question_index_questions_buttons.twig') }}
    {% endif %}
</div>
", "./subviews/navigation/question_index_buttons.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/navigation/question_index_buttons.twig");
    }
}
