<?php

/* ./subviews/printanswers/printanswers_table.twig */
class __TwigTemplate_d0b3e4fa85191a7d615a093987c7830699dada1d8c4ee429a0bf025c8cdbf0d9 extends Twig_Template
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
        $tags = array("if" => 2, "for" => 10, "set" => 23);
        $filters = array();
        $functions = array("gT" => 5, "include" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('gT', 'include')
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
        echo "
";
        // line 2
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1)) {
            echo " 
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h2>";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey name (ID):"));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
            echo " (";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", array()));
            echo ")</h2>
        </div>
    </div>
";
        }
        // line 8
        echo " 

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "groupArray", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["groupid"] => $context["group"]) {
            // line 11
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) == 1)) {
                echo " 
    <br pagebreak=\"true\" /> 
    ";
            }
            // line 14
            echo "    <groupsection class=\"groupSection\"> 
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["group"], "group_name", array()));
            echo " (";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["group"], "gid", array()));
            echo ")</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"container-fluid col-xs-11 col-md-10 col-xs-offset-1 col-md-offset-2\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "answerArray", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["questionId"] => $context["question"]) {
                // line 23
                echo "                ";
                $context["questionTemplate"] = (("./subviews/printanswers/question_types/template_" . $this->getAttribute($context["question"], "questionclass", array())) . ".twig");
                // line 24
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, ($context["questionTemplate"] ?? null)));
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['questionId'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo " 
            </div>
        </div>
    </groupsection> 
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupid'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "







";
    }

    public function getTemplateName()
    {
        return "./subviews/printanswers/printanswers_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 30,  143 => 25,  126 => 24,  123 => 23,  106 => 22,  96 => 17,  91 => 14,  84 => 11,  67 => 10,  63 => 8,  52 => 5,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if (aSurveyInfo.printPdf != 1) %} 
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h2>{{ gT(\"Survey name (ID):\") }} {{aSurveyInfo.surveyls_title}} ({{aSurveyInfo.sid}})</h2>
        </div>
    </div>
{% endif %} 

{% for groupid,group in aSurveyInfo.groupArray %}
    {% if (aSurveyInfo.printPdf == 1) %} 
    <br pagebreak=\"true\" /> 
    {% endif %}
    <groupsection class=\"groupSection\"> 
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>{{group.group_name}} ({{group.gid}})</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"container-fluid col-xs-11 col-md-10 col-xs-offset-1 col-md-offset-2\">
                {% for questionId,question in group.answerArray %}
                {% set questionTemplate = './subviews/printanswers/question_types/template_' ~ question.questionclass ~ '.twig' %}
                {{ include(questionTemplate) }}
                {% endfor %} 
            </div>
        </div>
    </groupsection> 
{% endfor %}








", "./subviews/printanswers/printanswers_table.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/printanswers/printanswers_table.twig");
    }
}
