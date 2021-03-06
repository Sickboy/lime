<?php

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_760ca3a6517b48698983d859d865c9edf6654d8865d479b5aca5bc209d224da3 extends Twig_Template
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
        echo "
<!-- List Radio -->

<!-- answer -->
";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sTimer"] ?? null));
        echo "

<div class=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " row\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">
    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "
</div>
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["name"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 21
($context["name"] ?? null)), "disabled" => true)), "method"));
        // line 24
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  67 => 21,  66 => 20,  60 => 17,  54 => 15,  49 => 13,  43 => 9,);
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
 * List Radio Html
 *
 * @var \$name
 * @var \$value
 */
#}

<!-- List Radio -->

<!-- answer -->
{{ sTimer }}

<div class=\"{{ coreClass }} row\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-{{ name }}\">
    {# rows/answer_row.php #}
    {{ sRows }}
</div>
{# Value for expression manager javascript (use id) ; no need to submit #}
{{ C.Html.hiddenField(\"java\"~name,value,({
    'id' : \"java\"~name,
    'disabled' : true,
}))
}}
<!-- end of answer -->
", "/survey/questions/answer/listradio/answer.twig", "/var/www/html/lime/application/views/survey/questions/answer/listradio/answer.twig");
    }
}
