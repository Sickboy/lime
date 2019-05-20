<?php

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_584dceb4a4cfa8c6ad56e86ee8f8bda35ebbf82fa2fd03a8d52a797da2663a4d extends Twig_Template
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
        $filters = array("format" => 31);
        $functions = array("processString" => 7, "gT" => 27);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('format'),
                array('processString', 'gT')
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
<!-- Welcome Message -->
<div id=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "welcomecontainer", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "welcomecontainer", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "welcomecontainer", array()));
        echo ">

    <!-- Survey Name -->
    <h1 class=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveyname", array()));
        echo " text-center\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveyname", array()));
        echo " >
        ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), 1));
        echo "
    </h1>

    <!-- Survey description -->
    <div class=\"";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "description", array()));
        echo " text-info text-center\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "description", array()));
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "description", array()), 1));
        echo "
    </div>

    <!-- Welcome text -->
    <div class=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "welcome", array()));
        echo " h4 text-primary\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "welcome", array()));
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "welcome", array()), 1));
        echo "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questioncount", array()));
        echo " text-muted\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncount", array()));
        echo ">
        <div class='";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questioncounttext", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncounttext", array()));
        echo ">

            ";
        // line 25
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowxquestions", array()) == true)) {
            // line 26
            echo "                ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", array()) < 1)) {
                // line 27
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("There are no questions in this survey."));
                echo "
                ";
            } elseif (($this->getAttribute(            // line 28
($context["aSurveyInfo"] ?? null), "iTotalquestions", array()) == 1)) {
                // line 29
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("There is 1 question in this survey."));
                echo "
                ";
            } else {
                // line 31
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("There are %s questions in this survey."), $this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", array())));
                echo "
              ";
            }
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 34,  134 => 33,  128 => 31,  122 => 29,  120 => 28,  115 => 27,  112 => 26,  109 => 25,  102 => 22,  96 => 21,  89 => 17,  83 => 16,  76 => 12,  70 => 11,  63 => 7,  57 => 6,  47 => 3,  43 => 1,);
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
<!-- Welcome Message -->
<div id=\"{{ aSurveyInfo.id.welcomecontainer }}\" class=\"{{ aSurveyInfo.class.welcomecontainer }}\" {{ aSurveyInfo.attr.welcomecontainer }}>

    <!-- Survey Name -->
    <h1 class=\"{{ aSurveyInfo.class.surveyname }} text-center\" {{ aSurveyInfo.attr.surveyname }} >
        {{ processString(aSurveyInfo.name,1) }}
    </h1>

    <!-- Survey description -->
    <div class=\"{{ aSurveyInfo.class.description }} text-info text-center\" {{ aSurveyInfo.attr.description }}>
        {{ processString(aSurveyInfo.description,1) }}
    </div>

    <!-- Welcome text -->
    <div class=\"{{ aSurveyInfo.class.welcome }} h4 text-primary\" {{ aSurveyInfo.attr.welcome }}>
        {{ processString(aSurveyInfo.welcome,1) }}
    </div>

    <!-- Question count -->
    <div class=\"{{ aSurveyInfo.class.questioncount }} text-muted\" {{ aSurveyInfo.attr.questioncount }}>
        <div class='{{ aSurveyInfo.class.questioncounttext }}' {{ aSurveyInfo.attr.questioncounttext }}>

            {# If survey creator set \"show x questions\" in survey setting  #}
            {% if aSurveyInfo.bShowxquestions == true %}
                {% if aSurveyInfo.iTotalquestions < 1 %}
                    {{ gT(\"There are no questions in this survey.\") }}
                {% elseif aSurveyInfo.iTotalquestions == 1  %}
                    {{ gT(\"There is 1 question in this survey.\") }}
                {% else %}
                    {{ gT(\"There are %s questions in this survey.\") | format(aSurveyInfo.iTotalquestions) }}
              {% endif %}
            {% endif %}
        </div>
  </div>
</div>
", "./subviews/messages/welcome.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_fruity_umk-/views/subviews/messages/welcome.twig");
    }
}
