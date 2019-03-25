<?php

/* /survey/questions/answer/boilerplate/answer.twig */
class __TwigTemplate_cc6c73543055fbfb47a9963ec00ea161a5a169d54f36a30c76fb05dfec7f44ec extends Twig_Template
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

        // line 7
        echo "<!-- boilerplate -->
<!-- Did we need really something ? Why not return an empty string ? -->
<!-- answer -->
<input class=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " boilerplate hidden\" type=\"hidden\" name=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" id=\"answer";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" value=\"\" />
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/boilerplate/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 7,);
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
 * Boilerplate Html
 * @var \$name
 */
#}
<!-- boilerplate -->
<!-- Did we need really something ? Why not return an empty string ? -->
<!-- answer -->
<input class=\"{{ coreClass }} boilerplate hidden\" type=\"hidden\" name=\"{{ name }}\" id=\"answer{{ name }}\" value=\"\" />
<!-- end of answer -->
", "/survey/questions/answer/boilerplate/answer.twig", "/var/www/html/ankiety/v3/application/views/survey/questions/answer/boilerplate/answer.twig");
    }
}
