<?php

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_779ce02e68694159e3409f215904e9110e9a92e187a3ce2a385bc5e47e5afbd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'anonymous' => array($this, 'block_anonymous'),
            'datasecurity' => array($this, 'block_datasecurity'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 21, "block" => 22);
        $filters = array();
        $functions = array("gT" => 25, "include" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
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

        // line 18
        echo "
<!-- Privacy message -->
<div id=\"umk-welcome\">
        ";
        // line 21
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "hideprivacyinfo", array()) == "off")) {
            // line 22
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 38
            echo "        ";
        }
        // line 39
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 46
        echo "<br><br><br>
</div>
<br>";
    }

    // line 22
    public function block_anonymous($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "anonymized", array()) == "Y")) {
            // line 24
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacyhead", array()));
            echo " h4 text-primary \" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacyhead", array()));
            echo ">
                    ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("This survey is anonymous."));
            echo "
                </div>
                <div>
                        <p>";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it."));
            // line 30
            echo "</p><p>
                        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses."));
            // line 33
            echo "</p>
                
                </div>
                ";
        }
        // line 37
        echo "            ";
    }

    // line 39
    public function block_datasecurity($context, array $blocks = array())
    {
        // line 40
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 1)) {
            // line 41
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig"));
            echo "
            ";
        } elseif (($this->getAttribute(        // line 42
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 2)) {
            // line 43
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig"));
            echo "
            ";
        }
        // line 45
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  116 => 43,  114 => 42,  109 => 41,  106 => 40,  103 => 39,  99 => 37,  93 => 33,  91 => 31,  88 => 30,  86 => 28,  80 => 25,  73 => 24,  70 => 23,  67 => 22,  61 => 46,  58 => 39,  55 => 38,  52 => 22,  50 => 21,  45 => 18,);
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

    (¯`·._.·(¯`·._.· Privacy ·._.·´¯)·._.·´¯)

    Show the privacy message (in All in One Mode)
    see: allinone_mode_welcome_privacy.twig

#}

<!-- Privacy message -->
<div id=\"umk-welcome\">
        {% if (aSurveyInfo.options.hideprivacyinfo == \"off\" ) %}
            {% block anonymous %}
                {% if (aSurveyInfo.anonymized == \"Y\") %}
                <div class=\"{{ aSurveyInfo.class.privacyhead }} h4 text-primary \" {{ aSurveyInfo.attr.privacyhead }}>
                    {{ gT(\"This survey is anonymous.\") }}
                </div>
                <div>
                        <p>{{
                            gT(\"The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.\")
                        }}</p><p>
                        {{
                            gT(\"If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses.\")
                        }}</p>
                
                </div>
                {% endif %}
            {% endblock %}
        {% endif %}
        {% block datasecurity %}
            {% if (aSurveyInfo.showsurveypolicynotice == 1) %}
                {{include('./subviews/privacy/privacy_text.twig')}}
            {% elseif (aSurveyInfo.showsurveypolicynotice == 2) %}
                {{include( './subviews/privacy/privacy_modal.twig')}}
            {% endif %}
        {% endblock %}
<br><br><br>
</div>
<br>", "./subviews/privacy/privacy.twig", "/var/www/html/ankiety/v3/themes/survey/umk2/views/subviews/privacy/privacy.twig");
    }
}
