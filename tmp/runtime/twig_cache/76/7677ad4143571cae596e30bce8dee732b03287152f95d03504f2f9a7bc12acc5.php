<?php

/* __string_template__cc6743e43cc353e42184571d37cecd9c1b45eb55ccb5d0c6e570ed9219215be9 */
class __TwigTemplate_ed7d1b937fd58096eb1624e91a71d578fbbb1c3a45b30e21c87d7e81d08aaa58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'ajaxindicator' => array($this, 'block_ajaxindicator'),
            'pjaxbegin' => array($this, 'block_pjaxbegin'),
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 5, "if" => 9, "set" => 47, "include" => 48);
        $filters = array();
        $functions = array("include" => 7, "registerScript" => 55);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set', 'include'),
                array(),
                array('include', 'registerScript')
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

<!DOCTYPE html>
<html lang=\"";
        // line 4
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
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo "  font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
        ";
        // line 10
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 11
            echo "            ";
            $this->displayBlock('ajaxindicator', $context, $blocks);
            // line 15
            echo "            
        ";
        }
        // line 17
        echo "
        ";
        // line 19
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 23
        echo "       

        ";
        // line 26
        echo "        <article>

            <div id=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "            </div>

        </article>
        ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 73
        echo "   

        ";
        // line 75
        $this->displayBlock('themescripts', $context, $blocks);
        // line 80
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "
    ";
    }

    // line 11
    public function block_ajaxindicator($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
        echo "
            ";
    }

    // line 19
    public function block_pjaxbegin($context, array $blocks = array())
    {
        // line 20
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
                ";
        // line 32
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 35
        echo "
                ";
        // line 37
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 40
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
                ";
        // line 52
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig"));
        echo "

                ";
        // line 55
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END"));
        // line 60
        echo "

            ";
    }

    // line 32
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 33
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 37
    public function block_progress($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/progress_bar.twig"));
        echo "
                ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "                    ";
        // line 47
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 48
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__cc6743e43cc353e42184571d37cecd9c1b45eb55ccb5d0c6e570ed9219215be9", 48)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 49
        echo "                ";
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 69
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 70
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 75
    public function block_themescripts($context, array $blocks = array())
    {
        // line 76
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__cc6743e43cc353e42184571d37cecd9c1b45eb55ccb5d0c6e570ed9219215be9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 76,  276 => 75,  269 => 70,  266 => 69,  259 => 67,  256 => 66,  252 => 49,  249 => 48,  246 => 47,  244 => 43,  241 => 42,  234 => 38,  231 => 37,  224 => 33,  221 => 32,  215 => 60,  207 => 55,  201 => 52,  198 => 50,  196 => 42,  192 => 40,  189 => 37,  186 => 35,  183 => 32,  180 => 30,  177 => 29,  170 => 20,  167 => 19,  160 => 13,  158 => 12,  155 => 11,  148 => 7,  146 => 6,  143 => 5,  136 => 80,  134 => 75,  130 => 73,  127 => 69,  125 => 66,  120 => 63,  118 => 29,  114 => 28,  110 => 26,  106 => 23,  103 => 19,  100 => 17,  96 => 15,  93 => 11,  91 => 10,  74 => 9,  72 => 5,  58 => 4,  53 => 1,);
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

<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>
    {% block head %}
    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}
    {% endblock %}
    <body style=\"padding-top: 90px;\" class=\" {{ aSurveyInfo.class.body }}  font-{{  aSurveyInfo.options.font }} lang-{{aSurveyInfo.languagecode}} {{aSurveyInfo.surveyformat}} {% if( aSurveyInfo.options.brandlogo == \"on\") %}brand-logo{%endif%}\" {{ aSurveyInfo.attr.body }} >
        {% if (aSurveyInfo.options.ajaxmode == \"on\" and aSurveyInfo.printPdf != 1) %}
            {% block ajaxindicator %}
            {# In vanilla, this file is empty, we keep it to have a common layout between all core themes #}
            {{ include('./subviews/navigation/ajax_indicator.twig') }}
            {% endblock %}
            
        {% endif %}

        {# This used for the pjax system #}
        {% block pjaxbegin %}
            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        {% endblock %}       

        {# Ajaxify cannot handle an element that is a direct child of body, so => create simple wrapper section #}
        <article>

            <div id=\"{{ aSurveyInfo.id.dynamicreload }}\">
            {% block body %}

                {# Bootstrap Navigation Bar: the top menu #}
                {% block nav_bar %}
                    {{ include('./subviews/header/nav_bar.twig') }}
                {% endblock %}

                {# Top Container: in this template, it contains only  #}
                {% block progress %}
                    {{ include('./subviews/header/progress_bar.twig') }}
                {% endblock %}

                <!-- Outer Frame Container -->
                {% block content %}
                    {#
                        Content depends on the action (survey, questions, register, assesments, submit, etc)
                        Action are in ./subviews/content/
                    #}
                    {% set sViewContent =  './subviews/content/' ~ aSurveyInfo.include_content ~ '.twig' %}
                    {% include './subviews/content/outerframe.twig' with {'include_content': sViewContent } %}
                {% endblock %}

                {# Bootstrap alert modal #}
                {{ include('./subviews/messages/bootstrap_alert_modal.twig') }}

                {# Basic ThemeScript options  #}
                {{ registerScript(\"BasicThemeScripts\", \"
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                \", \"POS_END\") }}

            {% endblock %}
            </div>

        </article>
        {% block footer %}
            {{ include('./subviews/footer/footer.twig') }}
        {% endblock %}
        {% block pjaxend %}
            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        {% endblock %}   

        {% block themescripts %}
            <script>
                window.basicThemeScripts.init();
            </script>
        {% endblock %}
        
    </body>
</html>
", "__string_template__cc6743e43cc353e42184571d37cecd9c1b45eb55ccb5d0c6e570ed9219215be9", "");
    }
}
