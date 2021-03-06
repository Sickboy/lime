<?php

/* /survey/questions/answer/arrays/array/no_dropdown/answer.twig */
class __TwigTemplate_e273d7a71d5deea04af1a02522c555070ef7993dd31f0a20fd4d84275ade3add extends Twig_Template
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
        $tags = array("if" => 34);
        $filters = array();
        $functions = array("gT" => 37);

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

        // line 14
        echo "<!-- Array -->

<!-- answer -->
<table class=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " table table-bordered table-hover table-array-radio\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\"  style='width: ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;' />
        
            ";
        // line 22
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sColumns"] ?? null));
        echo "
        
    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
            
                ";
        // line 29
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sHeaders"] ?? null));
        echo "
            
        </tr>
    </thead>
    <tbody>
         ";
        // line 34
        if ((($context["anscount"] ?? null) == 0)) {
            // line 35
            echo "            <tr>
                <th class=\"answertext\">
                     ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Error: This question has no answers."));
            echo "
                </th>
            </tr>
         ";
        }
        // line 41
        echo "        
            ";
        // line 43
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "
        
    </tbody>
</table>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/array/no_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  92 => 41,  85 => 37,  81 => 35,  79 => 34,  70 => 29,  60 => 22,  55 => 19,  48 => 17,  43 => 14,);
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
 * array array, no dropdown, Html
 *
 * @var \$sColumns   : the columns, generated with the view columns/col.php
 * @var \$sHeaders   : the headers, generated with the view rows/cell/thead.php
 * @var \$sRows      : the rows, generated with the view rows/answer_row.php
 *
 * @var \$extraclass

 *
 */
#}
<!-- Array -->

<!-- answer -->
<table class=\"{{ coreClass }} table table-bordered table-hover table-array-radio\" role=\"group\" aria-labelledby=\"ls-question-text-{{ basename }}\">
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\"  style='width: {{ answerwidth }}%;' />
        
            {# columns/col.php #}
            {{sColumns }}
        
    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
            
                {# rows/cell/thead.php #}
                {{ sHeaders }}
            
        </tr>
    </thead>
    <tbody>
         {% if anscount==0 %}
            <tr>
                <th class=\"answertext\">
                     {{ gT('Error: This question has no answers.') }}
                </th>
            </tr>
         {% endif %}
        
            {# rows/answer_row.php #}
            {{ sRows }}
        
    </tbody>
</table>
<!-- end of answer -->
", "/survey/questions/answer/arrays/array/no_dropdown/answer.twig", "/var/www/html/ankiety/v3/application/views/survey/questions/answer/arrays/array/no_dropdown/answer.twig");
    }
}
