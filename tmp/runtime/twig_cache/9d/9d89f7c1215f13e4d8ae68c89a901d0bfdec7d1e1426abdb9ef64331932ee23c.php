<?php

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_e1690fcdf6bf248422c50c5f8f7bf703ae281268d2b6c905aa2720809981521e extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array();
        $functions = array("image" => 34, "include" => 44);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('image', 'include')
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

        // line 19
        echo "
<!-- Bootstrap Navigation Bar -->
";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbar", array())) {
            // line 22
            echo "<div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbar", array()));
            echo " navbar-fixed-top\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbar", array()));
            echo ">
    <div class=\"";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbarheader", array()));
            echo "  \" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbarheader", array()));
            echo " >
        <button type=\"button\" class=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbartoggle", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbartoggle", array()));
            echo "  >
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        ";
            // line 32
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
                // line 33
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbarbrand", array()));
                echo " logo-container hidden-xs\"  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbarbrand", array()));
                echo "  >
                ";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogofile", array()), $this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), array("class" => "logo img-responsive")));
                echo "
            </div>
        ";
            } else {
                // line 37
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbarbrand", array()));
                echo "\"  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbarbrand", array()));
                echo " >
                ";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()));
                echo "
            </div>
        ";
            }
            // line 41
            echo "    </div>
    <div id=\"";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "navbar", array()));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbarcollapse", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbarcollapse", array()));
            echo " >
        <ul class=\"";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navbarlink", array()));
            echo " navbar-right\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navbarlink", array()));
            echo ">
            ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/save_links.twig"));
            echo "
            ";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/clearall_links.twig"));
            echo "
            ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/question_index_menu.twig"));
            echo "
            ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig"));
            echo "
        </ul>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  128 => 46,  124 => 45,  120 => 44,  114 => 43,  106 => 42,  103 => 41,  97 => 38,  90 => 37,  84 => 34,  77 => 33,  74 => 32,  62 => 24,  56 => 23,  49 => 22,  47 => 21,  43 => 19,);
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

    (¯`·._.·(¯`·._.· Bootstrap Navigation Bar ·._.·´¯)·._.·´¯)

    This file renders a typical bootstrap navigation bar.
    See: https://getbootstrap.com/components/#navbar

    For the survey navigator (\"Next\", \"Back\", etc.), see: navigation/navigator.twig
#}

<!-- Bootstrap Navigation Bar -->
{% if(aSurveyInfo.class.navbar) %}
<div class=\"{{ aSurveyInfo.class.navbar }} navbar-fixed-top\" {{ aSurveyInfo.attr.navbar }}>
    <div class=\"{{ aSurveyInfo.class.navbarheader }}  \" {{ aSurveyInfo.attr.navbarheader }} >
        <button type=\"button\" class=\"{{ aSurveyInfo.class.navbartoggle }}\" {{ aSurveyInfo.attr.navbartoggle }}  >
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        {# Logo option #}
        {% if( aSurveyInfo.options.brandlogo == \"on\") %}
            <div class=\"{{ aSurveyInfo.class.navbarbrand }} logo-container hidden-xs\"  {{ aSurveyInfo.attr.navbarbrand }}  >
                {{ image(aSurveyInfo.options.brandlogofile, aSurveyInfo.name, {\"class\": \"logo img-responsive\"}) }}
            </div>
        {% else %}
            <div class=\"{{ aSurveyInfo.class.navbarbrand }}\"  {{ aSurveyInfo.attr.navbarbrand }} >
                {{ aSurveyInfo.name }}
            </div>
        {% endif %}
    </div>
    <div id=\"{{ aSurveyInfo.id.navbar }}\" class=\"{{ aSurveyInfo.class.navbarcollapse }}\" {{ aSurveyInfo.attr.navbarcollapse }} >
        <ul class=\"{{ aSurveyInfo.class.navbarlink }} navbar-right\" {{ aSurveyInfo.attr.navbarlink }}>
            {{ include('./subviews/navigation/save_links.twig') }}
            {{ include('./subviews/navigation/clearall_links.twig') }}
            {{ include('./subviews/navigation/question_index_menu.twig') }}
            {{ include('./subviews/navigation/language_changer_top_menu.twig') }}
        </ul>
    </div>
</div>
{% endif %}
", "./subviews/header/nav_bar.twig", "/var/www/html/lime/upload/themes/survey/radajakociksztacenia4mobile_tooltips/views/subviews/header/nav_bar.twig");
    }
}
