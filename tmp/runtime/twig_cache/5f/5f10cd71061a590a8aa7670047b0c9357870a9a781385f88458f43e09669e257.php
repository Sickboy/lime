<?php

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_4aae9a03e62ab93cc33ba6998512f8c58fff3a34ed66463445ff5c761f3182b1 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<!-- Bootstrap Navigation Bar -->
";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbar", array())) {
            // line 3
            echo "    <div id=\"umk-header\">
        <div id=\"umk-logo\"></div>
        <div id=\"umk-surveyname\">";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()));
            echo "</div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Bootstrap Navigation Bar -->
{% if(aSurveyInfo.class.navbar) %}
    <div id=\"umk-header\">
        <div id=\"umk-logo\"></div>
        <div id=\"umk-surveyname\">{{ aSurveyInfo.name }}</div>
    </div>
{% endif %}
", "./subviews/header/nav_bar.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_fruity_umk-/views/subviews/header/nav_bar.twig");
    }
}
