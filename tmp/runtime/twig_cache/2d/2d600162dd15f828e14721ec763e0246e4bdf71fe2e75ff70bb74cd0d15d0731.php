<?php

/* ./subviews/registration/register_form.twig */
class __TwigTemplate_81d373adf28f04ce9c23f4597ba1321bc49dde42a3a14d0cf39cc9b46c8664de extends Twig_Template
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
        $tags = array("for" => 53, "set" => 55, "if" => 56);
        $filters = array("raw" => 98);
        $functions = array("include" => 26, "gT" => 30, "renderCaptcha" => 70);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('raw'),
                array('include', 'gT', 'renderCaptcha')
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
";
        // line 18
        echo "
<div class=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerform", array()));
        echo " row\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerform", array()));
        echo ">
    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sRegisterFormUrl", array()), 1 => "post", 2 => array("id" => "limesurvey", "role" => "form", "class" => "form")), "method"));
        echo "

    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "registerform", array()), "hiddeninputs", array()));
        echo "

    <div class='";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcol", array()));
        echo " col-md-8 col-md-offset-2' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcol", array()));
        echo ">
        <div class=\"ls-js-hidden form-group row\">
            ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer.twig"));
        echo "
        </div>
        ";
        // line 29
        echo "        <div class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrow", array()));
        echo " form-group row' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrow", array()));
        echo ">
            <label for='register_firstname' class='";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrowlabel", array()));
        echo " control-label '>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("First name:"));
        echo "</label>
            <div class=\"\">
                ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_firstname", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sFirstName", array()), 2 => array("id" => "register_firstname", "class" => "form-control")), "method"));
        echo "
            </div>
        </div>

        ";
        // line 37
        echo "        <div class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrowb", array()));
        echo " form-group row' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowb", array()));
        echo ">
            <label ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowblabel", array()));
        echo "  class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrowblabel", array()));
        echo " control-label '>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Last name:"));
        echo "</label>
            <div ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowbdiv", array()));
        echo " >
                ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_lastname", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sLastName", array()), 2 => array("id" => "register_lastname", "class" => "form-control")), "method"));
        echo "
            </div>
        </div>

        ";
        // line 45
        echo "        <div class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrowc", array()));
        echo " form-group row' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowc", array()));
        echo ">
            <label ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowclabel", array()));
        echo " class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcolrowclabel", array()));
        echo "  control-label'> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Email address:"));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
        echo "</label>
            <div ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowcdiv", array()));
        echo "  >
                ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_email", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sEmail", array()), 2 => array("id" => "register_email", "class" => "form-control input-sm", "required" => true)), "method"));
        echo "
            </div>
        </div>

        ";
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "aExtraAttributes", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["aExtraAttribute"]) {
            // line 54
            echo "            <div class=' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformextras", array()));
            echo " form-group row' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformextras", array()));
            echo " >
                ";
            // line 55
            $context["registerKey"] = ("register_" . $context["key"]);
            // line 56
            echo "                <label for=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["registerKey"] ?? null));
            echo "\" class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformextraslabel", array()));
            echo " control-label '> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["aExtraAttribute"], "caption", array()));
            echo " ";
            if (($this->getAttribute($context["aExtraAttribute"], "mandatory", array()) == "Y")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
            }
            echo "</label>
                <div ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcolrowcdiv", array()));
            echo " >
                    ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => ($context["registerKey"] ?? null), 1 => $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAttribute", array()), $context["key"], array(), "array"), 2 => array("id" => "register_{\$key}", "class" => "form-control input-sm")), "method"));
            echo "
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aExtraAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        ";
        // line 64
        echo "        ";
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bCaptcha", array())) {
            // line 65
            echo "            <div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptcha", array()));
            echo " form-group row ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptcha", array()));
            echo ">
                <label class='";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchalabel", array()));
            echo " control-label ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchalabel", array()));
            echo " >";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please solve the following equation:"));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
            echo "</label>
                <div ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchadiv", array()));
            echo ">
                    <div class='";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchadivb", array()));
            echo " input-group' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchadivb", array()));
            echo ">
                        <div class='";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchadivc", array()));
            echo " control-label' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchadivc", array()));
            echo ">
                            ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", array(), "method"));
            echo "
                            <!-- TODO: Problems with reload and name getting empty/not in POST. -->
                            <a href=\"#\" class=\"btn btn-sm btn-default\" onclick=\"window.location.reload();\" id=\"reloadCaptcha\" title=\"";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Reload captcha"));
            echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                        </div>
                        <input class='";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchainput", array()));
            echo " form-control' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchainput", array()));
            echo " >
                    </div>
                </div>
            </div>
        ";
        }
        // line 79
        echo "
        ";
        // line 81
        echo "        <div class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registermandatoryinfo", array()));
        echo " row' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermandatoryinfo", array()));
        echo " >
                ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fields marked with an asterisk are mandatory."));
        echo "
        </div>

        ";
        // line 86
        echo "        <div class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersave", array()));
        echo " form-group row' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersave", array()));
        echo " >
            <div class='";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersavediv", array()));
        echo " col-md-offset-7' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersavediv", array()));
        echo " >
                ";
        // line 88
        $context["continue"] = gT("Continue", "unescaped");
        // line 89
        echo "                <button ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersavedivbutton", array()));
        echo "  class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersavedivbutton", array()));
        echo " btn btn-default' >
                    ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["continue"] ?? null));
        echo "
                </button>
            </div>
        </div>

        ";
        // line 96
        echo "    </div>
    <div class='";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcoladdidtions", array()));
        echo " col-md-8 col-md-offset-2' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcoladdidtions", array()));
        echo ">
        ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "formAdditions", array()));
        echo "
    </div>

    ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "endForm", array()));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 101,  328 => 98,  322 => 97,  319 => 96,  311 => 90,  304 => 89,  302 => 88,  296 => 87,  289 => 86,  283 => 82,  276 => 81,  273 => 79,  263 => 74,  258 => 72,  253 => 70,  247 => 69,  241 => 68,  237 => 67,  227 => 66,  220 => 65,  217 => 64,  214 => 62,  196 => 58,  192 => 57,  179 => 56,  177 => 55,  170 => 54,  152 => 53,  145 => 48,  141 => 47,  131 => 46,  124 => 45,  117 => 40,  113 => 39,  105 => 38,  98 => 37,  91 => 32,  84 => 30,  77 => 29,  72 => 26,  65 => 24,  60 => 22,  55 => 20,  49 => 19,  46 => 18,  43 => 1,);
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
{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Registration form._.·´¯)·._.·´¯)

    This is the registration form for participant registration on a survey.

#}

<div class=\"{{ aSurveyInfo.class.registerform }} row\" {{ aSurveyInfo.attr.registerform }}>
    {{ C.Html.form(aSurveyInfo.sRegisterFormUrl,'post',({'id' : 'limesurvey', 'role' : 'form', 'class' : 'form'})) }}

    {{aSurveyInfo.registerform.hiddeninputs}}

    <div class='{{ aSurveyInfo.class.registerformcol }} col-md-8 col-md-offset-2' {{ aSurveyInfo.attr.registerformcol }}>
        <div class=\"ls-js-hidden form-group row\">
            {{ include('./subviews/navigation/language_changer.twig') }}
        </div>
        {# Participants first name #}
        <div class='{{ aSurveyInfo.class.registerformcolrow }} form-group row' {{ aSurveyInfo.attr.registerformcolrow }}>
            <label for='register_firstname' class='{{ aSurveyInfo.class.registerformcolrowlabel }} control-label '>{{ gT(\"First name:\") }}</label>
            <div class=\"\">
                {{ C.Html.textField('register_firstname', aSurveyInfo.sFirstName, ({'id' : 'register_firstname','class' : 'form-control'})) }}
            </div>
        </div>

        {# Participants last name #}
        <div class='{{ aSurveyInfo.class.registerformcolrowb }} form-group row' {{ aSurveyInfo.attr.registerformcolrowb }}>
            <label {{ aSurveyInfo.attr.registerformcolrowblabel }}  class='{{ aSurveyInfo.class.registerformcolrowblabel }} control-label '>{{ gT(\"Last name:\") }}</label>
            <div {{ aSurveyInfo.attr.registerformcolrowbdiv }} >
                {{ C.Html.textField('register_lastname', aSurveyInfo.sLastName, ({'id' : 'register_lastname', 'class' : 'form-control'})) }}
            </div>
        </div>

        {# Participants email #}
        <div class='{{ aSurveyInfo.class.registerformcolrowc }} form-group row' {{ aSurveyInfo.attr.registerformcolrowc }}>
            <label {{ aSurveyInfo.attr.registerformcolrowclabel }} class='{{ aSurveyInfo.class.registerformcolrowclabel }}  control-label'> {{ gT(\"Email address:\") }} {{ include('./subviews/registration/required.twig') }}</label>
            <div {{ aSurveyInfo.attr.registerformcolrowcdiv }}  >
                {{ C.Html.textField('register_email', aSurveyInfo.sEmail, ({'id' : 'register_email','class' : 'form-control input-sm','required' : true})) }}
            </div>
        </div>

        {# Loop to add extra attributes #}
        {% for key, aExtraAttribute in aSurveyInfo.aExtraAttributes  %}
            <div class=' {{ aSurveyInfo.class.registerformextras }} form-group row' {{ aSurveyInfo.attr.registerformextras }} >
                {% set registerKey = \"register_\" ~ key %}
                <label for=\"{{ registerKey }}\" class='{{ aSurveyInfo.class.registerformextraslabel }} control-label '> {{ aExtraAttribute.caption }} {% if aExtraAttribute.mandatory == 'Y' %}{{ include('./subviews/registration/required.twig') }}{% endif %}</label>
                <div {{ aSurveyInfo.attr.registerformcolrowcdiv }} >
                    {{ C.Html.textField(registerKey, aSurveyInfo.aAttribute[key],({'id' : \"register_{\$key}\",'class' : 'form-control input-sm'})) }}
                </div>
            </div>
        {% endfor %}

        {# Captcha box #}
        {% if aSurveyInfo.bCaptcha %}
            <div class='{{ aSurveyInfo.class.registerformcaptcha }} form-group row ' {{ aSurveyInfo.attr.registerformcaptcha }}>
                <label class='{{ aSurveyInfo.class.registerformcaptchalabel }} control-label ' {{ aSurveyInfo.attr.registerformcaptchalabel }} >{{ gT(\"Please solve the following equation:\") }} {{ include('./subviews/registration/required.twig') }}</label>
                <div {{ aSurveyInfo.attr.registerformcaptchadiv }}>
                    <div class='{{ aSurveyInfo.class.registerformcaptchadivb }} input-group' {{ aSurveyInfo.attr.registerformcaptchadivb }}>
                        <div class='{{ aSurveyInfo.class.registerformcaptchadivc }} control-label' {{ aSurveyInfo.attr.registerformcaptchadivc }}>
                            {{ renderCaptcha().renderOut() }}
                            <!-- TODO: Problems with reload and name getting empty/not in POST. -->
                            <a href=\"#\" class=\"btn btn-sm btn-default\" onclick=\"window.location.reload();\" id=\"reloadCaptcha\" title=\"{{ gT(\"Reload captcha\") }}\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                        </div>
                        <input class='{{ aSurveyInfo.class.registerformcaptchainput }} form-control' {{ aSurveyInfo.attr.registerformcaptchainput }} >
                    </div>
                </div>
            </div>
        {% endif %}

        {# Mandatory information #}
        <div class='{{ aSurveyInfo.class.registermandatoryinfo }} row' {{ aSurveyInfo.attr.registermandatoryinfo }} >
                {{ gT('Fields marked with an asterisk are mandatory.')}}
        </div>

        {# Submit register button #}
        <div class='{{ aSurveyInfo.class.registersave }} form-group row' {{ aSurveyInfo.attr.registersave }} >
            <div class='{{ aSurveyInfo.class.registersavediv }} col-md-offset-7' {{ aSurveyInfo.attr.registersavediv }} >
                {% set continue = gT(\"Continue\",'unescaped') %}
                <button {{ aSurveyInfo.attr.registersavedivbutton }}  class='{{ aSurveyInfo.class.registersavedivbutton }} btn btn-default' >
                    {{ continue }}
                </button>
            </div>
        </div>

        {# If there is additional form parts, a.e. trhough a plugin render it out here #}
    </div>
    <div class='{{ aSurveyInfo.class.registerformcoladdidtions }} col-md-8 col-md-offset-2' {{ aSurveyInfo.attr.registerformcoladdidtions }}>
        {{ aSurveyInfo.formAdditions | raw  }}
    </div>

    {{ C.Html.endForm }}
</div>
", "./subviews/registration/register_form.twig", "/var/www/html/ankiety/v3/upload/themes/survey/umk2017/views/subviews/registration/register_form.twig");
    }
}
