<?php

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_346e99209e80b0461772d5cc459bd13e48f1b86b20e5e2704cb1926c32e2b620 extends Twig_Template
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
        $tags = array("if" => 25);
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

        // line 15
        echo "
<!-- List Dropdown -->

<!-- answer-->
<div class=\"form-inline\">
    <div class=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " form-group\">
        <select
                class=\"form-control list-question-select\"
                name=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                id=\"answer";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                ";
        // line 25
        if (($context["dropdownSize"] ?? null)) {
            echo " size=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dropdownSize"] ?? null));
            echo " ";
        }
        // line 26
        echo "                aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
        >
                ";
        // line 29
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sOptions"] ?? null));
        echo "
        </select>
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sOther"] ?? null));
        echo "

        ";
        // line 35
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["name"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 36
($context["name"] ?? null)), "disabled" => "disabled")), "method"));
        // line 39
        echo "
    </div>
</div>
<!-- end of answer  -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  90 => 36,  88 => 35,  82 => 32,  76 => 29,  70 => 26,  64 => 25,  60 => 24,  56 => 23,  50 => 20,  43 => 15,);
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
 * List DropDown select Html
 *
 * @var \$sOptions         : the select options, generated with the view item_options.php
 * @var \$sOther           : the other input field, generated with the view item_noanswer.php
 *
 * @var \$name
 * @var \$dropdownSize
 * @var \$checkconditionFunction
 * @var \$select_show_hide
 *
 */
#}

<!-- List Dropdown -->

<!-- answer-->
<div class=\"form-inline\">
    <div class=\"{{ coreClass }} form-group\">
        <select
                class=\"form-control list-question-select\"
                name=\"{{ name }}\"
                id=\"answer{{ name }}\"
                {% if dropdownSize %} size={{ dropdownSize }} {% endif %}
                aria-labelledby=\"ls-question-text-{{ basename }}\"
        >
                {# rows/option.php #}
                {{ sOptions }}
        </select>
            {# rows/othertext.php #}
            {{ sOther }}

        {# Value for expression manager javascript (use id) ; no need to submit #}
        {{ C.Html.hiddenField(\"java\"~name,value,({
            'id' : \"java\"~name,
            'disabled' : \"disabled\",
        }))
        }}
    </div>
</div>
<!-- end of answer  -->
", "/survey/questions/answer/list_dropdown/answer.twig", "/var/www/html/lime/application/views/survey/questions/answer/list_dropdown/answer.twig");
    }
}
