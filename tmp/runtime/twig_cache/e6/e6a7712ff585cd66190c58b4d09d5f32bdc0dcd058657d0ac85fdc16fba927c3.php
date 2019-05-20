<?php

/* ./subviews/privacy/privacy_text.twig */
class __TwigTemplate_1fe27c8b3c19436fa3b412d3953934cbcb6d3e5e9a49ae75f63908f9bea40746 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 17
        echo "
<!-- Privacy message -->
<br/>
<div class=\"row\">
    <div class=\"limit-text-window ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydatasectextbody", array()));
        echo "\">
        ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice", array()));
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <label for=\"datasecurity_accepted\" class=\"control-label ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydataseccheckboxlabel", array()));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", array()));
        echo "</label>
        &nbsp;<input required class=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydataseccheckbox", array()));
        echo "\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  61 => 27,  53 => 22,  49 => 21,  43 => 17,);
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

    (¯`·._.·(¯`·._.· Privacy with modal ·._.·´¯)·._.·´¯)

    Show the privacy message and the data security message will be available in a modal

#}

<!-- Privacy message -->
<br/>
<div class=\"row\">
    <div class=\"limit-text-window {{ aSurveyInfo.class.privacydatasectextbody }}\">
        {{ aSurveyInfo.datasecurity_notice }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <label for=\"datasecurity_accepted\" class=\"control-label {{ aSurveyInfo.class.privacydataseccheckboxlabel }}\">{{ aSurveyInfo.datasecurity_notice_label }}</label>
        &nbsp;<input required class=\"{{ aSurveyInfo.class.privacydataseccheckbox }}\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
    </div>
</div>
", "./subviews/privacy/privacy_text.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/privacy/privacy_text.twig");
    }
}
