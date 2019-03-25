<?php

/* ./subviews/navigation/language_changer_form.twig */
class __TwigTemplate_f30108c282779577e168b3a5ecad5b41a79a9971d491485f769b91de1f7a0ab7 extends Twig_Template
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
        $functions = array("include" => 8);

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

        // line 7
        echo "<form method=\"get\">
    ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer.twig"));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,);
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
    Copyright (C) 2018 The LimeSurvey Project Team
    This file render the language changer out of limesurvey form when no form is required (example survey listing)
    This file can be added for a no javascript solution to change language when not inside limesurvey form
#}
<form method=\"get\">
    {{ include('./subviews/navigation/language_changer.twig') }}
</form>
", "./subviews/navigation/language_changer_form.twig", "/var/www/html/lime/upload/themes/survey/radajakociksztacenia4mobile_tooltips/views/subviews/navigation/language_changer_form.twig");
    }
}
