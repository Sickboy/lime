<?php

/* ./subviews/content/load.twig */
class __TwigTemplate_a7fffb72fbf1a662f5c9aa4ba6af58822f10c50760875ab12cc4df3398dcb567 extends Twig_Template
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
        $tags = array("if" => 46, "for" => 48, "set" => 59);
        $filters = array();
        $functions = array("gT" => 37, "count" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('gT', 'count')
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

        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
        echo "

    <div class=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savemessage", array()));
        echo " well clearfix\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savemessage", array()));
        echo ">
        <div class=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savemessagetitle", array()));
        echo " h2\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savemessagetitle", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Load unfinished survey"));
        echo "</div>
        <div class=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savemessagetext", array()));
        echo " text-info\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savemessagetext", array()));
        echo ">
            <p ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savemessagetextp", array()));
        echo " > ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("You can load a survey that you have previously saved from this screen."));
        echo " </p>
            <p ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savemessagetextpb", array()));
        echo " > ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Type in the 'name' you used to save the survey, and the password."));
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadform", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadform", array()));
        echo ">

        ";
        // line 46
        if ((LS_Twig_Extension::safecount($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", array()), "aErrors", array())) > 0)) {
            // line 47
            echo "            <ul class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadformul", array()));
            echo " alert alert-danger list-unstyled \" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadformul", array()));
            echo " >
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", array()), "aErrors", array()));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 49
                echo "                    <li ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadformulli", array()));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["error"]);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </ul>
        ";
        }
        // line 53
        echo "
        ";
        // line 59
        echo "        ";
        $context["htmlOptions"] = array("id" => "form-load", "name" => "form-load", "class" => $this->getAttribute($this->getAttribute(        // line 62
($context["aSurveyInfo"] ?? null), "class", array()), "loadformform", array()));
        // line 65
        echo "
        ";
        // line 71
        echo "        <!-- Save Form -->
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 73
($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(        // line 74
($context["aSurveyInfo"] ?? null), "surveyUrl", array()), 1 => "post", 2 =>         // line 76
($context["htmlOptions"] ?? null)), "method"));
        // line 78
        echo "
            <!-- Hidden fields  -->
            ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", array()), "sHiddenField", array()));
        echo "

            <!-- Name and Password -->
            <div class=\"";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveform", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveform", array()));
        echo ">

                <!-- Saved name  -->
                <div class=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrow", array()));
        echo " row form-group \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrow", array()));
        echo ">
                    <label class=\"";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrowlabel", array()));
        echo " control-label col-sm-3 \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrowlabel", array()));
        echo ">
                        ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Saved name:"));
        echo "
                        <small class=\"";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrowlabelsmall", array()));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrowlabelsmall", array()));
        echo " ></small>
                        <span class=\"";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrowlabelspan", array()));
        echo " sr-only text-danger asterisk\"  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrowlabelspan", array()));
        echo " >";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo "<span>
                    </label>
                    <div class=\"";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrowcol", array()));
        echo " col-sm-7 input-cell\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrowcol", array()));
        echo ">
                        <input class=\"";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformrowcolinput", array()));
        echo " form-control\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformrowcolinput", array()));
        echo " id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "saveformrowcolinput", array()));
        echo "\" >
                    </div>
                </div>

                <!-- Password -->
                <div class=\"";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "passwordrow", array()));
        echo " row form-group \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "passwordrow", array()));
        echo ">
                    <label class='";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "passwordrowcol", array()));
        echo " control-label col-sm-3 '  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "passwordrowcol", array()));
        echo " >
                        ";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Password:"));
        echo "
                        <small class=\"";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "passwordrowcolsmall", array()));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "passwordrowcolsmall", array()));
        echo "></small>
                        <span class=\"";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "passwordrowcolspan", array()));
        echo " sr-only text-danger asterisk\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "passwordrowcolspan", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo "<span>
                    </label>

                    <div class='";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "passwordrowinput", array()));
        echo " col-sm-7'>
                        <input class='form-control' ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "passwordrowinputi", array()));
        echo " >
                    </div>
                </div>

                ";
        // line 110
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", array()), "aCaptcha", array()), "show", array())) {
            // line 111
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharow", array()));
            echo " row form-group ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharow", array()));
            echo ">
                        <label class='";
            // line 113
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharowlabel", array()));
            echo " control-label col-sm-3 '  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowlabel", array()));
            echo ">
                            ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Security question:"));
            echo "
                        </label>
                        <div class='";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharowcol", array()));
            echo " col-sm-7 ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowcol", array()));
            echo ">
                            <div class='";
            // line 117
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharowcoldiv", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowcoldiv", array()));
            echo ">
                                <div class='";
            // line 118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharowcoldivdiv", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowcoldivdiv", array()));
            echo " >
                                    <img src=\"";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", array()), "aCaptcha", array()), "sImageUrl", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowcoldivdivimg", array()));
            echo " />
                                </div>
                                <input id=\"";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "captcharowcoldivinput", array()));
            echo "\" class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "captcharowcoldivinput", array()));
            echo " form-control' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "captcharowcoldivinput", array()));
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 126
        echo "
                <!-- load button -->
                <div class='";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadrow", array()));
        echo " row form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadrow", array()));
        echo ">
                    <div class='";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadrowcol", array()));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadrowcol", array()));
        echo ">
                        <button class='";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadrowcolbutton", array()));
        echo " btn btn-default' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadrowcolbutton", array()));
        echo " >
                            ";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Load now"));
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "returntosurvey", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "returntosurvey", array()));
        echo ">
            <div class=\"";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "returntosurveydiv", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "returntosurveydiv", array()));
        echo ">
                <a href=\"";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "returntosurveydiva", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "returntosurveydiva", array()));
        echo "  >";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Return to survey"));
        echo "</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/load.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 140,  347 => 139,  341 => 138,  331 => 131,  325 => 130,  319 => 129,  313 => 128,  309 => 126,  297 => 121,  290 => 119,  284 => 118,  278 => 117,  272 => 116,  267 => 114,  261 => 113,  255 => 112,  252 => 111,  250 => 110,  243 => 106,  239 => 105,  229 => 102,  223 => 101,  219 => 100,  213 => 99,  207 => 98,  195 => 93,  189 => 92,  180 => 90,  174 => 89,  170 => 88,  164 => 87,  158 => 86,  150 => 83,  144 => 80,  140 => 78,  138 => 76,  137 => 74,  136 => 73,  135 => 72,  132 => 71,  129 => 65,  127 => 62,  125 => 59,  122 => 53,  118 => 51,  107 => 49,  103 => 48,  96 => 47,  94 => 46,  87 => 44,  78 => 40,  72 => 39,  66 => 38,  58 => 37,  52 => 36,  46 => 34,  43 => 32,);
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

    (¯`·._.·(¯`·._.· Save page Content  ·._.·´¯)·._.·´¯)

    This file displays the page shown to a respondent when they save the survey to complete it later.

    Depending on survey config, a navigator allowing user to change his response can be shown, and a end url

    Form data are in: aSurveyInfo.aLoadForm (errors, css classes, captcha, etc)
    To show this data, turn debug mode on and copy the following line to the end of the <body> element in this file:
    {{ dump(aSurveyInfo.aLoadForm ) }} )

    (¯`·._.·(¯`·._.·  Advanced ·._.·´¯)·._.·´¯)

    The form is generated using the Yii function CHtml::form. You must keep it to get the CRSF token.
    Inputs are also generated using the Yii function CHtml. Eg: input textField is generated via CHtml::textField
    You can replace those inputs by pure Html (<input type=\"text\" ... />), just be sure to use the correct options (id, classes, required, etc)
    @see: http://www.yiiframework.com/wiki/48/by-example-chtml/ , http://www.yiiframework.com/doc/api/1.1/CHtml

    NOTE: see layout_global.twig for more infos
    NOTE: This content is included inside mainrow.twig
#}

    {# This will display the script and the hidden inputs needed for Expression Manager #}
    {{ aSurveyInfo.EM.ScriptsAndHiddenInputs  }}

    <div class=\"{{ aSurveyInfo.class.savemessage }} well clearfix\" {{ aSurveyInfo.attr.savemessage }}>
        <div class=\"{{ aSurveyInfo.class.savemessagetitle }} h2\" {{ aSurveyInfo.attr.savemessagetitle }}>{{ gT(\"Load unfinished survey\") }}</div>
        <div class=\"{{ aSurveyInfo.class.savemessagetext }} text-info\" {{ aSurveyInfo.attr.savemessagetext }}>
            <p {{ aSurveyInfo.attr.savemessagetextp }} > {{ gT(\"You can load a survey that you have previously saved from this screen.\") }} </p>
            <p {{ aSurveyInfo.attr.savemessagetextpb }} > {{ gT(\"Type in the 'name' you used to save the survey, and the password.\") }} </p>
        </div>
    </div>

    <div class=\"{{ aSurveyInfo.class.loadform }}\" {{ aSurveyInfo.attr.loadform }}>

        {% if count(aSurveyInfo.aLoadForm.aErrors) > 0 %}
            <ul class=\"{{ aSurveyInfo.class.loadformul }} alert alert-danger list-unstyled \" {{ aSurveyInfo.attr.loadformul }} >
                {% for key,error in aSurveyInfo.aLoadForm.aErrors %}
                    <li {{ aSurveyInfo.attr.loadformulli }}>{{ error }}</li>
                {% endfor %}
            </ul>
        {% endif %}

        {#
            array of attributes of the form tag.
            To add a new attribute, just add an entry:
            'attribute' : 'value',
        #}
        {% set htmlOptions = {
                'id'          : 'form-load',
                'name'        : 'form-load',
                'class'       :  aSurveyInfo.class.loadformform,
            }
        %}

        {#
            It generates the opening form tag and the CRSF token
            It uses the Yii fuction CHtml::form
            @see: http://www.yiiframework.com/doc/api/1.1/CHtml#form-detail
        #}
        <!-- Save Form -->
        {{
            C.Html.form(
                ( aSurveyInfo.surveyUrl ),
                'post',
                (htmlOptions)
            )
        }}
            <!-- Hidden fields  -->
            {{  aSurveyInfo.aLoadForm.sHiddenField }}

            <!-- Name and Password -->
            <div class=\"{{ aSurveyInfo.class.saveform }}\" {{ aSurveyInfo.attr.saveform }}>

                <!-- Saved name  -->
                <div class=\"{{ aSurveyInfo.class.saveformrow }} row form-group \" {{ aSurveyInfo.attr.saveformrow }}>
                    <label class=\"{{ aSurveyInfo.class.saveformrowlabel }} control-label col-sm-3 \" {{ aSurveyInfo.attr.saveformrowlabel }}>
                        {{ gT(\"Saved name:\") }}
                        <small class=\"{{ aSurveyInfo.class.saveformrowlabelsmall }} text-danger asterisk fa fa-asterisk pull-left small\" {{ aSurveyInfo.attr.saveformrowlabelsmall }} ></small>
                        <span class=\"{{ aSurveyInfo.class.saveformrowlabelspan }} sr-only text-danger asterisk\"  {{ aSurveyInfo.attr.saveformrowlabelspan }} >{{ gT(\"Mandatory\") }}<span>
                    </label>
                    <div class=\"{{ aSurveyInfo.class.saveformrowcol }} col-sm-7 input-cell\" {{ aSurveyInfo.attr.saveformrowcol }}>
                        <input class=\"{{ aSurveyInfo.class.saveformrowcolinput }} form-control\" {{ aSurveyInfo.attr.saveformrowcolinput }} id=\"{{ aSurveyInfo.id.saveformrowcolinput }}\" >
                    </div>
                </div>

                <!-- Password -->
                <div class=\"{{ aSurveyInfo.class.passwordrow }} row form-group \" {{ aSurveyInfo.attr.passwordrow }}>
                    <label class='{{ aSurveyInfo.class.passwordrowcol }} control-label col-sm-3 '  {{ aSurveyInfo.attr.passwordrowcol }} >
                        {{ gT(\"Password:\") }}
                        <small class=\"{{ aSurveyInfo.class.passwordrowcolsmall }} text-danger asterisk fa fa-asterisk pull-left small\" {{ aSurveyInfo.attr.passwordrowcolsmall }}></small>
                        <span class=\"{{ aSurveyInfo.class.passwordrowcolspan }} sr-only text-danger asterisk\" {{ aSurveyInfo.attr.passwordrowcolspan }}>{{ gT(\"Mandatory\") }}<span>
                    </label>

                    <div class='{{ aSurveyInfo.class.passwordrowinput }} col-sm-7'>
                        <input class='form-control' {{ aSurveyInfo.attr.passwordrowinputi }} >
                    </div>
                </div>

                {% if aSurveyInfo.aLoadForm.aCaptcha.show %}
                    <!-- Captcha -->
                    <div class='{{ aSurveyInfo.class.captcharow }} row form-group ' {{ aSurveyInfo.attr.captcharow }}>
                        <label class='{{ aSurveyInfo.class.captcharowlabel }} control-label col-sm-3 '  {{ aSurveyInfo.attr.captcharowlabel }}>
                            {{ gT(\"Security question:\") }}
                        </label>
                        <div class='{{ aSurveyInfo.class.captcharowcol }} col-sm-7 ' {{ aSurveyInfo.attr.captcharowcol }}>
                            <div class='{{ aSurveyInfo.class.captcharowcoldiv }}' {{ aSurveyInfo.attr.captcharowcoldiv }}>
                                <div class='{{ aSurveyInfo.class.captcharowcoldivdiv }}' {{ aSurveyInfo.attr.captcharowcoldivdiv }} >
                                    <img src=\"{{ aSurveyInfo.aLoadForm.aCaptcha.sImageUrl }}\" {{ aSurveyInfo.attr.captcharowcoldivdivimg }} />
                                </div>
                                <input id=\"{{ aSurveyInfo.id.captcharowcoldivinput }}\" class='{{ aSurveyInfo.class.captcharowcoldivinput }} form-control' {{ aSurveyInfo.attr.captcharowcoldivinput }} />
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- load button -->
                <div class='{{ aSurveyInfo.class.loadrow }} row form-group ' {{ aSurveyInfo.attr.loadrow }}>
                    <div class='{{ aSurveyInfo.class.loadrowcol }} col-sm-7 col-md-offset-3 ' {{ aSurveyInfo.attr.loadrowcol }}>
                        <button class='{{ aSurveyInfo.class.loadrowcolbutton }} btn btn-default' {{ aSurveyInfo.attr.loadrowcolbutton }} >
                            {{ gT(\"Load now\") }}
                        </button>
                    </div>
                </div>
            </div>


        <div class='{{ aSurveyInfo.class.returntosurvey }}' {{ aSurveyInfo.attr.returntosurvey }}>
            <div class=\"{{ aSurveyInfo.class.returntosurveydiv }}\" {{ aSurveyInfo.attr.returntosurveydiv }}>
                <a href=\"{{ aSurveyInfo.surveyUrl }}\" class=\"{{ aSurveyInfo.class.returntosurveydiva }}\" {{ aSurveyInfo.attr.returntosurveydiva }}  >{{ gT(\"Return to survey\") }}</a>
            </div>
        </div>
    </div>
", "./subviews/content/load.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/load.twig");
    }
}
