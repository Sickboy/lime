<?php

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_cb3e677476da47edb800d7828576c8bd2d33f16ba00b46c6311cc6ed9ee92fde extends Twig_Template
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
        $tags = array("set" => 23, "if" => 29);
        $filters = array();
        $functions = array("gT" => 31, "include" => 72);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 21
        echo "
";
        // line 23
        $context["aNavigator"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array());
        // line 24
        echo "
<div class=\"umk-question-wrapper\" style=\"background-color:white; \">
<div class=\"umk-navigator-wrap\">


           ";
        // line 29
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", array()) == true)) {
            // line 30
            echo "    <!-- Exit and clear survey -->
        <a href=\"#\" data-limesurvey-submit='{ \"clearall\":\"clearall\" }'  data-confirmedby='{ \"confirm-clearall\":\"confirm\" }' data-confirmlabel='";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please confirm you want to clear your response?"));
            echo "' class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "clearalllink", array()));
            echo " animate  btn btn-lg btn-danger' style=\"float: left;\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "clearalllink", array()));
            echo ">
            ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Exit and clear survey"));
            echo "
        </a>
    
";
        }
        // line 36
        echo "        


<!-- PRESENT THE NAVIGATOR -->
        ";
        // line 41
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMovePrev", array()), "show", array())) {
            // line 42
            echo "            <!-- Button previous -->
            <button ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonprev", array()));
            echo " accesskey=\"p\" class=\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonprev", array()));
            echo " btn btn-lg btn-default \" >
                ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Previous"));
            echo "
            </button>
        ";
        }
        // line 47
        echo "    

  

        ";
        // line 52
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", array()), "show", array())) {
            // line 53
            echo "

            ";
            // line 56
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", array()), "value", array()) == "movesubmit")) {
                // line 57
                echo "                <!-- Button submit -->
                <button ";
                // line 58
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonsubmit", array()));
                echo " accesskey=\"n\" class=\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonsubmit", array()));
                echo " btn btn-lg btn-primary\">
                    ";
                // line 59
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Submit"));
                echo "
                </button>
            ";
            } else {
                // line 62
                echo "                <!-- Button Next -->
                <button ";
                // line 63
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonnext", array()));
                echo " accesskey=\"n\" class=\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonnext", array()));
                echo " btn btn-lg btn-primary \" >
                    ";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Next"));
                echo "
                </button>
            ";
            }
            // line 67
            echo "       
        ";
        }
        // line 69
        echo "   
</div></div>
<!-- Extra navigator part -->
";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/navigator_complement.twig"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 72,  155 => 69,  151 => 67,  145 => 64,  137 => 63,  134 => 62,  128 => 59,  120 => 58,  117 => 57,  114 => 56,  110 => 53,  107 => 52,  101 => 47,  95 => 44,  87 => 43,  84 => 42,  81 => 41,  75 => 36,  68 => 32,  60 => 31,  57 => 30,  55 => 29,  48 => 24,  46 => 23,  43 => 21,);
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
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.



    (¯`·._.·(¯`·._.· Navigator  ·._.·´¯)·._.·´¯)

    Render the navigator: Previous, Next, Submit, Load, Save
    All needed datas are inside aSurveyInfo.aNavigator
    If you want to see what is availabe in aNavigator, turn debug mode on in application/config.php, and move out of comments the following line:
    {{ dump(aSurveyInfo.aNavigator) }}
#}

{# create a shortcut for aSurveyInfo.aNavigator #}
{% set aNavigator = aSurveyInfo.aNavigator %}

<div class=\"umk-question-wrapper\" style=\"background-color:white; \">
<div class=\"umk-navigator-wrap\">


           {% if aSurveyInfo.bShowClearAll == true  %}
    <!-- Exit and clear survey -->
        <a href=\"#\" data-limesurvey-submit='{ \"clearall\":\"clearall\" }'  data-confirmedby='{ \"confirm-clearall\":\"confirm\" }' data-confirmlabel='{{gT(\"Please confirm you want to clear your response?\" )}}' class='{{ aSurveyInfo.class.clearalllink }} animate  btn btn-lg btn-danger' style=\"float: left;\" {{ aSurveyInfo.attr.clearalllink }}>
            {{gT(\"Exit and clear survey\" )}}
        </a>
    
{% endif %}
        


<!-- PRESENT THE NAVIGATOR -->
        {# Previous button must be set to ON in survey settings (and it's not shown in first page, in All in One survey mode, etc) #}
        {% if aNavigator.aMovePrev.show %}
            <!-- Button previous -->
            <button {{ aSurveyInfo.attr.navigatorbuttonprev }} accesskey=\"p\" class=\" {{ aNavigator.disabled }} {{ aSurveyInfo.class.navigatorbuttonprev }} btn btn-lg btn-default \" >
                {{ gT(\"Previous\") }}
            </button>
        {% endif %}
    

  

        {# Next button is not always shown (last page, all in one mode, etc) #}
        {% if aNavigator.aMoveNext.show %}


            {# On last page, Next button become submit button. #}
            {% if aNavigator.aMoveNext.value == \"movesubmit\" %}
                <!-- Button submit -->
                <button {{ aSurveyInfo.attr.navigatorbuttonsubmit }} accesskey=\"n\" class=\" {{ aNavigator.disabled }} {{ aSurveyInfo.class.navigatorbuttonsubmit }} btn btn-lg btn-primary\">
                    {{ gT(\"Submit\") }}
                </button>
            {% else %}
                <!-- Button Next -->
                <button {{ aSurveyInfo.attr.navigatorbuttonnext }} accesskey=\"n\" class=\" {{ aNavigator.disabled }} {{ aSurveyInfo.class.navigatorbuttonnext }} btn btn-lg btn-primary \" >
                    {{ gT(\"Next\") }}
                </button>
            {% endif %}
       
        {% endif %}
   
</div></div>
<!-- Extra navigator part -->
{{ include('./subviews/navigation/navigator_complement.twig') }}
", "./subviews/navigation/navigator.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/navigation/navigator.twig");
    }
}
