<?php

/* __string_template__5c3242898c59c5c0a5161c222e6414d98182bf6356ad6f8161b7b5152207c8b2 */
class __TwigTemplate_d7eb6e0932dc6bdb039c1fd92db31645d47a606288d606899143ac7062d2a9d2 extends Twig_Template
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
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 77, "set" => 114, "include" => 115);
        $filters = array();
        $functions = array("include" => 74, "registerScript" => 122);

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

        // line 69
        echo "
<!DOCTYPE html>
<html>
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    <body>
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
        echo "
        ";
        // line 86
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 90
        echo "       

        ";
        // line 93
        echo "        <article>

            <div id=\"";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "            </div>


        </article>

        ";
        // line 135
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 139
        echo "   

        ";
        // line 141
        $this->displayBlock('themescripts', $context, $blocks);
        // line 146
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

    // line 86
    public function block_pjaxbegin($context, array $blocks = array())
    {
        // line 87
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "
                ";
        // line 99
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 102
        echo "
                ";
        // line 104
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 107
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "
                ";
        // line 119
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig"));
        echo "

                ";
        // line 122
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END"));
        // line 127
        echo "

            ";
    }

    // line 99
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 100
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 104
    public function block_progress($context, array $blocks = array())
    {
        // line 105
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/progress_bar.twig"));
        echo "
                ";
    }

    // line 109
    public function block_content($context, array $blocks = array())
    {
        // line 110
        echo "                    ";
        // line 114
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 115
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__5c3242898c59c5c0a5161c222e6414d98182bf6356ad6f8161b7b5152207c8b2", 115)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 116
        echo "                ";
    }

    // line 135
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 136
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 141
    public function block_themescripts($context, array $blocks = array())
    {
        // line 142
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__5c3242898c59c5c0a5161c222e6414d98182bf6356ad6f8161b7b5152207c8b2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 142,  236 => 141,  229 => 136,  226 => 135,  222 => 116,  219 => 115,  216 => 114,  214 => 110,  211 => 109,  204 => 105,  201 => 104,  194 => 100,  191 => 99,  185 => 127,  177 => 122,  171 => 119,  168 => 117,  166 => 109,  162 => 107,  159 => 104,  156 => 102,  153 => 99,  150 => 97,  147 => 96,  140 => 87,  137 => 86,  130 => 80,  128 => 79,  125 => 78,  118 => 74,  116 => 73,  113 => 72,  106 => 146,  104 => 141,  100 => 139,  98 => 135,  91 => 130,  89 => 96,  85 => 95,  81 => 93,  77 => 90,  74 => 86,  71 => 84,  67 => 82,  64 => 78,  62 => 77,  59 => 76,  57 => 72,  52 => 69,);
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
<html>
    {% block head %}
    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}
    {% endblock %}
    <body>
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
", "__string_template__5c3242898c59c5c0a5161c222e6414d98182bf6356ad6f8161b7b5152207c8b2", "");
    }
}
