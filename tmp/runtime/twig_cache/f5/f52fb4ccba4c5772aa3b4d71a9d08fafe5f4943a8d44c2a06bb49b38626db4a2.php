<?php

/* /survey/questions/answer/listradio/columns/column_header.twig */
class __TwigTemplate_63cc4bd2cf04b728c93e8ec0e909065e0c413372f6c6420bde75c7a2d16f7668 extends Twig_Template
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

        // line 9
        echo "<!-- on small screen, each column is full widht, so it look like a single colunm-->
<ul class=\"list-unstyled col-sm-";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["iColumnWidth"] ?? null));
        echo " col-xs-12\">
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/columns/column_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  43 => 9,);
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
/**
 * Multiple Choice Html : column containing item row
 * This view is used only if user set more than one column in the question attribute.
 *
 * @var \$iColumnWidth
 */
 #}
<!-- on small screen, each column is full widht, so it look like a single colunm-->
<ul class=\"list-unstyled col-sm-{{ iColumnWidth }} col-xs-12\">
", "/survey/questions/answer/listradio/columns/column_header.twig", "/var/www/html/lime/application/views/survey/questions/answer/listradio/columns/column_header.twig");
    }
}
