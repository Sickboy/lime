<?php

/* ./subviews/navigation/save_buttons.twig */
class __TwigTemplate_536203f9965ef88d946e015026e7b728249c1fc7fcafaa963d16f61d4fbb3abc extends Twig_Template
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
        $tags = array("if" => 6);
        $filters = array();
        $functions = array("gT" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('gT')
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

        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y")) {
            // line 7
            echo "    <button ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadbutton", array()));
            echo " accesskey=\"l\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadbutton", array()));
            echo " action--ls-button-submit btn btn-default\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Load unfinished survey"));
            echo "</button>
";
        }
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y")) {
            // line 10
            echo "<button ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savebutton", array()));
            echo " nameaccesskey=\"s\" class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savebutton", array()));
            echo " action--ls-button-submit btn btn-default'>
    ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Resume later"));
            echo "
</button>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/save_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  57 => 10,  55 => 9,  45 => 7,  43 => 6,);
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
    This file render the load or save buttons without javascript needed
#}
{% if aSurveyInfo.aNavigator.load.show == \"Y\" %}
    <button {{ aSurveyInfo.attr.loadbutton }} accesskey=\"l\" class=\"{{ aSurveyInfo.class.loadbutton }} action--ls-button-submit btn btn-default\">{{ gT(\"Load unfinished survey\") }}</button>
{% endif %}
{% if aSurveyInfo.aNavigator.save.show == \"Y\" %}
<button {{ aSurveyInfo.attr.savebutton }} nameaccesskey=\"s\" class='{{ aSurveyInfo.class.savebutton }} action--ls-button-submit btn btn-default'>
    {{ gT('Resume later') }}
</button>
{% endif %}
", "./subviews/navigation/save_buttons.twig", "/var/www/html/ankiety/v3/themes/survey/umk2/views/subviews/navigation/save_buttons.twig");
    }
}
