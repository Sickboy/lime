<?php

/* __string_template__50c689c3b2b526d62c74b2b807bb87aecadf0df66f34c7a0a06217b479034136 */
class __TwigTemplate_d45140b58e35deebc31d1f5fd65ff82b78d8e57a85d728994a2eacf7958afb97 extends Twig_Template
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
        $tags = array("for" => 36, "set" => 37);
        $filters = array();
        $functions = array("include" => 38);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set'),
                array(),
                array('include')
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

        // line 20
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "sitename", array()));
        echo " - ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
        echo "</title>
    </head>
    <body>
        <div id=\"limesurvey\">
            <h1>";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
        echo "</h1>

            <div class=\"survey-description\">";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_description", array()));
        echo "</div>

            <div class=\"survey-welcome\">";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_welcometext", array()));
        echo "</div>

            <p class=\"x-questions\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "therearexquestions", array()));
        echo "</p>

            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["print"] ?? null), "groups", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 37
            echo "                ";
            $context["groupTemplate"] = "./subviews/print/print_group.twig";
            // line 38
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, ($context["groupTemplate"] ?? null)));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "privacy", array()));
        echo "
            
            <p class=\"submit-by\">
                ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "end", array()));
        echo "<br />
                ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "submit_by", array()));
        echo "<br />
                ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "fax_to", array()));
        echo "<br />
                ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "submit_text", array()));
        echo "<br />
                ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "thanks", array()));
        echo "<br />
            </p>

        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "__string_template__50c689c3b2b526d62c74b2b807bb87aecadf0df66f34c7a0a06217b479034136";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  131 => 41,  128 => 40,  111 => 38,  108 => 37,  91 => 36,  86 => 34,  81 => 32,  76 => 30,  71 => 28,  62 => 24,  46 => 21,  43 => 20,);
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

    (¯`·._.·(¯`·._.· Print Layout  ·._.·´¯)·._.·´¯)

    This is the layout that will be used to print the survey to pdf
    If you're creating your own template, remember there is no obligation to respect the current file flow of this template.
    This is different from the old LimeSurvey template engine, where you had to provide every one of the pstpl files.
    Here, you must have a file called layout_global.twig (called from SurveyRuntimeHelper::run() ).
    Other than that, you're free to organize your files and inclusions as you want.
#}
<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <title>{{print.sitename}} - {{ aSurveyInfo.surveyls_title }}</title>
    </head>
    <body>
        <div id=\"limesurvey\">
            <h1>{{ aSurveyInfo.surveyls_title }}</h1>

            <div class=\"survey-description\">{{ aSurveyInfo.surveyls_description }}</div>

            <div class=\"survey-welcome\">{{ aSurveyInfo.surveyls_welcometext }}</div>

            <p class=\"x-questions\">{{print.therearexquestions}}</p>

            {% for group in print.groups %}
                {% set groupTemplate = './subviews/print/print_group.twig' %}
                {{ include(groupTemplate) }}
            {% endfor %}

            {{print.privacy}}
            
            <p class=\"submit-by\">
                {{print.end}}<br />
                {{print.submit_by}}<br />
                {{print.fax_to}}<br />
                {{print.submit_text}}<br />
                {{print.thanks}}<br />
            </p>

        </div>
    </body>
</html>
", "__string_template__50c689c3b2b526d62c74b2b807bb87aecadf0df66f34c7a0a06217b479034136", "");
    }
}
