<?php

/* ./subviews/survey/question_container.twig */
class __TwigTemplate_70c901e1a1fb3a4ec483c63509db9c8877c53be788851669c41712790f30e79d extends Twig_Template
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
        $filters = array();
        $functions = array("include" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 20
        echo "<!-- Question ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "qid", array()));
        echo "  -->
<div ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "attributes", array()));
        echo " class=\"\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncontainer", array()));
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/survey/question.twig"));
        echo "
</div>
<!-- End of question  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "qid", array()));
        echo "  -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  54 => 22,  48 => 21,  43 => 20,);
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



    (¯`·._.·(¯`·._.· Question Container  ·._.·´¯)·._.·´¯)

    The div containing the question is one of tag that could often change from a template to another
    Different classes, options, etc
    So we separate it
#}
<!-- Question {{ aQuestion.qid  }}  -->
<div {{ aQuestion.attributes }} class=\"\" {{ aSurveyInfo.attr.questioncontainer }}>
    {{ include('./subviews/survey/question.twig') }}
</div>
<!-- End of question  {{ aQuestion.qid  }}  -->
", "./subviews/survey/question_container.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_umk2017/views/subviews/survey/question_container.twig");
    }
}
