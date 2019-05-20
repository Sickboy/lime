<?php

/* __string_template__060b2ded45dc4d951df00744e59391f9bb9491f8452907d3f5647c3cc6f88ef2 */
class __TwigTemplate_99d702d2cfba156d4d38f6def14ee0d86c0ed4acf7c81fb6a1eeda7258d29a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'ajaxindicator' => array($this, 'block_ajaxindicator'),
            'pjaxbegin' => array($this, 'block_pjaxbegin'),
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 77);
        $filters = array();
        $functions = array("include" => 74);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
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



        </article>

        ";
        // line 99
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 103
        echo "   

        ";
        // line 105
        $this->displayBlock('themescripts', $context, $blocks);
        // line 110
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

    // line 99
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 100
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 105
    public function block_themescripts($context, array $blocks = array())
    {
        // line 106
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__060b2ded45dc4d951df00744e59391f9bb9491f8452907d3f5647c3cc6f88ef2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 106,  144 => 105,  137 => 100,  134 => 99,  127 => 87,  124 => 86,  117 => 80,  115 => 79,  112 => 78,  105 => 74,  103 => 73,  100 => 72,  93 => 110,  91 => 105,  87 => 103,  85 => 99,  77 => 93,  73 => 90,  70 => 86,  67 => 84,  63 => 82,  60 => 78,  58 => 77,  55 => 76,  53 => 72,  48 => 69,);
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
", "__string_template__060b2ded45dc4d951df00744e59391f9bb9491f8452907d3f5647c3cc6f88ef2", "");
    }
}
