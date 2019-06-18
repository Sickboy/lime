<?php

/* /survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig */
class __TwigTemplate_f41035b0bfd3339eb473d18b5e85f13918d7c45dae059018d09fc639a9fc24a9 extends Twig_Template
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
        $tags = array("if" => 15);
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

        // line 13
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answers-list radio-list ";
        if (($context["odd"] ?? null)) {
            echo " ls-odd";
        } else {
            echo " ls-even";
        }
        // line 16
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo "\" role=\"radiogroup\"  aria-labelledby=\"answertext";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only";
        }
        echo "\">
        ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertext"] ?? null));
        echo "
        
        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 22
($context["myfname"] ?? null)), "disabled" => true)), "method"));
        // line 25
        echo "
    </th>
    
        ";
        // line 29
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_tds"] ?? null));
        echo "
    
    ";
        // line 31
        if (($context["right_exists"] ?? null)) {
            // line 32
            echo "        <th class='answertextright information-item";
            if ((($context["answerwidth"] ?? null) == 0)) {
                echo " sr-only";
            }
            echo "'>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertextright"] ?? null));
            echo "</th>
    ";
        }
        // line 34
        echo "    
        ";
        // line 36
        echo "         ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["no_answer_td"] ?? null));
        echo "
    
</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  103 => 34,  93 => 32,  91 => 31,  85 => 29,  80 => 25,  78 => 22,  76 => 21,  71 => 18,  63 => 17,  55 => 16,  47 => 15,  43 => 13,);
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
 * Generate a row for the table
 *
 * @var \$answer_tds      : the cells of each row, generated with the view rows/cells/*.php
 * @var \$myfname
 * @var \$answertext
 * @var \$value
 * @var \$right_exists
 * @var \$answertextright
 */
#}

<!-- answer_row -->
<tr id=\"javatbd{{ myfname }}\" class=\"answers-list radio-list {% if odd %} ls-odd{% else %} ls-even{% endif %}{%
 if error %} ls-error-mandatory has-error{% endif %}\" role=\"radiogroup\"  aria-labelledby=\"answertext{{ myfname }}\">
    <th id=\"answertext{{ myfname }}\" class=\"answertext control-label{% if answerwidth==0 %} sr-only{% endif %}\">
        {{ answertext }}
        
        {# Value for expression manager javascript (use id) ; no need to submit #}
        {{ C.Html.hiddenField(\"java\"~myfname,value,({
            'id' : \"java\"~myfname,
            'disabled' : true,
        }))
        }}
    </th>
    
        {# Defined in answer_td view #}
        {{ answer_tds }}
    
    {% if right_exists %}
        <th class='answertextright information-item{% if answerwidth==0 %} sr-only{% endif %}'>{{ answertextright }}</th>
    {% endif %}
    
        {# No answer should come after right text at bipolar question #}
         {{ no_answer_td }}
    
</tr>
<!-- end of answer_row -->
", "/survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", "/var/www/html/ankiety/v3/application/views/survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig");
    }
}
