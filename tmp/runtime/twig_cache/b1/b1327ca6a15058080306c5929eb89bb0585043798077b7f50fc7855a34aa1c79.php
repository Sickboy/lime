<?php

/* ./subviews/survey/question_subviews/survey_question_help.twig */
class __TwigTemplate_f7eb8ce2fc1d239f73a9c5ab5e247ef0f2514dbd5e5a17d73bd2774fc5ad2c8a extends Twig_Template
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
        $filters = array("raw" => 24);
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
<!-- Survey question help -->
<div >
    ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "show", array())) {
            // line 23
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lsquestionhelp", array()));
            echo "\">
           ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "text", array()));
            echo "
        </div>
    ";
        } else {
            // line 27
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "text", array()));
            echo "
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/survey_question_help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  61 => 27,  55 => 24,  50 => 23,  48 => 22,  43 => 19,);
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



    (¯`·._.·(¯`·._.· Survey Question Help  ·._.·´¯)·._.·´¯)

    The additional question help as entered by the survey creator in question editing
    NOTE: see views/subviews/survey/question.twig comments for more infos
#}

<!-- Survey question help -->
<div >
    {% if aQuestion.help.show %}
        <div class=\"{{ aSurveyInfo.class.lsquestionhelp }}\">
           {{ aQuestion.help.text | raw }}
        </div>
    {% else %}
          {{ aQuestion.help.text | raw }}
    {% endif %}
</div>
", "./subviews/survey/question_subviews/survey_question_help.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/survey/question_subviews/survey_question_help.twig");
    }
}
