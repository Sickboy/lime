<?php

/* __string_template__11f1236ca2263e9342308322dda9f4e50356028e094b6a2ac56190a2f10e8afc */
class __TwigTemplate_9183946f0cc29402491715a8594e493d2c03219e0a775912bdad93d54727f438 extends Twig_Template
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
        $tags = array("block" => 72, "if" => 76, "set" => 115, "include" => 116);
        $filters = array();
        $functions = array("image" => 84, "include" => 74, "registerScript" => 123);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set', 'include'),
                array(),
                array('image', 'include', 'registerScript')
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

        // line 69
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 71
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
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
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
        // line 77
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 78
            echo "            ";
            $this->displayBlock('ajaxindicator', $context, $blocks);
            // line 82
            echo "            
        ";
        }
        // line 84
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/logo.svg", "alt-text for my file", array("class" => "myclass")));
        echo "

        ";
        // line 87
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 91
        echo "       

        ";
        // line 94
        echo "        <article>

            <div id=\"";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "            </div>

        </article>
        ";
        // line 134
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 141
        echo "   

        ";
        // line 143
        $this->displayBlock('themescripts', $context, $blocks);
        // line 148
        echo "        
    </body>
</html>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "
    ";
    }

    // line 78
    public function block_ajaxindicator($context, array $blocks = array())
    {
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
        echo "
            ";
    }

    // line 87
    public function block_pjaxbegin($context, array $blocks = array())
    {
        // line 88
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        // line 98
        echo "
                ";
        // line 100
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 103
        echo "
                ";
        // line 105
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 108
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "
                ";
        // line 120
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig"));
        echo "

                ";
        // line 123
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END"));
        // line 128
        echo "

            ";
    }

    // line 100
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 101
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 105
    public function block_progress($context, array $blocks = array())
    {
        // line 106
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/progress_bar.twig"));
        echo "
                ";
    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        // line 115
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 116
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__11f1236ca2263e9342308322dda9f4e50356028e094b6a2ac56190a2f10e8afc", 116)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 117
        echo "                ";
    }

    // line 134
    public function block_footer($context, array $blocks = array())
    {
        // line 135
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 137
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 138
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 143
    public function block_themescripts($context, array $blocks = array())
    {
        // line 144
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__11f1236ca2263e9342308322dda9f4e50356028e094b6a2ac56190a2f10e8afc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 144,  278 => 143,  271 => 138,  268 => 137,  261 => 135,  258 => 134,  254 => 117,  251 => 116,  248 => 115,  246 => 111,  243 => 110,  236 => 106,  233 => 105,  226 => 101,  223 => 100,  217 => 128,  209 => 123,  203 => 120,  200 => 118,  198 => 110,  194 => 108,  191 => 105,  188 => 103,  185 => 100,  182 => 98,  179 => 97,  172 => 88,  169 => 87,  162 => 80,  160 => 79,  157 => 78,  150 => 74,  148 => 73,  145 => 72,  138 => 148,  136 => 143,  132 => 141,  129 => 137,  127 => 134,  122 => 131,  120 => 97,  116 => 96,  112 => 94,  108 => 91,  105 => 87,  99 => 84,  95 => 82,  92 => 78,  90 => 77,  73 => 76,  71 => 72,  57 => 71,  53 => 69,);
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

    (¯`·._.·(¯`·._.· Global Layout  ·._.·´¯)·._.·´¯)

    This is the global layout that will be used to displayed most pages (less the error page)
    If you're creating your own template, remember there is no obligation to respect the current file flow of this template.
    This is different from the old LimeSurvey template engine, where you had to provide every one of the pstpl files.
    Here, you must have a file called main_layout.twig (called from SurveyRuntimeHelper::run() ).
    Other than that, you're free to organize your files and inclusions as you want.



    (¯`·._.·(¯`·._.· Bootstrap ·._.·´¯)·._.·´¯)

    LimeSurvey uses Bootstrap.
    See: https://getbootstrap.com

    This template is an instance of Bootswatch Theme Flatly.
    See: https://bootswatch.com/



    (¯`·._.·(¯`·._.· Twig Engine  ·._.·´¯)·._.·´¯)

    The template engine uses Twig.
    See: http://twig.sensiolabs.org/

    The main variable is aSurveyInfo. It's an array containing the main information about the survey.
    aSurveyInfo also contains other needed arrays, such as aNavigator, or aQuestionGroups (which contain aQuestions), etc.

    If you want to see what is availabe in aSurveyInfo, turn debug mode on in application/config.php, and copy the following line to the end of the <body> element below:
    {{ dump(aSurveyInfo) }}

    To echo a variable, just insert                      : {{ variable }}
    To translate a string, just insert                   : {{gT( string )}}

    NOTE: aSurveyInfo should be cleaned to remove the unnecessary data.


    (¯`·._.·(¯`·._.· Twig Engine: advanced  ·._.·´¯)·._.·´¯)

    For security reason, Twig is in a sandBox.
    About sandBox, see: http://twig.sensiolabs.org/doc/2.x/api.html#sandbox-extension

    Available functions/Object Methods are defined in internal.php: components => twigRenderer
    Eg:
         Functions : 'include', 'dump', 'flatEllipsizeText', 'getLanguageData', 'array_flip', 'array_intersect_key', 'registerPublicCssFile', 'getAllQuestionClasses', 'getShowqnumcode', 'intval'

         Methods   :
                    - CHtml::textfield() (and: form, link, emailField, beginForm, endForm, dropDownList,htmlButton)
                    - Survey::getAllLanguages()
                    - LSHttpRequest::getParam()

    If you need to add simple functions or static methods, just add them to internal.php.
    If you need to add complex process, use application/core/LS_Twig_Extension.php (more help/comments there)


    NOTE: Feel free to ask for functions, variables, etc, that you feel are missing - https://bugs.limesurvey.org/my_view_page.php
#}

<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>
    {% block head %}
    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}
    {% endblock %}
    <body style=\"padding-top: 90px;\" class=\" {{ aSurveyInfo.class.body }} font-{{  aSurveyInfo.options.font }} lang-{{aSurveyInfo.languagecode}} {{aSurveyInfo.surveyformat}} {% if( aSurveyInfo.options.brandlogo == \"on\") %}brand-logo{%endif%}\" {{ aSurveyInfo.attr.body }} >
        {% if (aSurveyInfo.options.ajaxmode == \"on\" and aSurveyInfo.printPdf != 1) %}
            {% block ajaxindicator %}
            {# In vanilla, this file is empty, we keep it to have a common layout between all core themes #}
            {{ include('./subviews/navigation/ajax_indicator.twig') }}
            {% endblock %}
            
        {% endif %}
        {{ image('./files/logo.svg', 'alt-text for my file', {\"class\": \"myclass\"}) }}

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
", "__string_template__11f1236ca2263e9342308322dda9f4e50356028e094b6a2ac56190a2f10e8afc", "");
    }
}
