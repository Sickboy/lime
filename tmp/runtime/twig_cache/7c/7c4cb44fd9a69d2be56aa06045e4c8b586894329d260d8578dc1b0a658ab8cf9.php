<?php

/* ./subviews/registration/register_form.twig */
class __TwigTemplate_df8a4d9244a7233233d1d9232d68d656d88dcad403954875e0cab21a5ece714e extends Twig_Template
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
        $tags = array("for" => 41, "set" => 42, "if" => 43);
        $filters = array("raw" => 82);
        $functions = array("gT" => 25, "include" => 36, "renderCaptcha" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('raw'),
                array('gT', 'include', 'renderCaptcha')
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
        echo "<div id=\"umk-welcome\">
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sRegisterFormUrl", array()), 1 => "post", 2 => array("id" => "limesurvey", "role" => "form", "class" => "form")), "method"));
        echo "

    ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "registerform", array()), "hiddeninputs", array()));
        echo "

    
        ";
        // line 25
        echo "            <label for='register_firstname' class='control-label '>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("First name:"));
        echo "</label>
                ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_firstname", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sFirstName", array()), 2 => array("id" => "register_firstname", "class" => "form-control")), "method"));
        echo "
            
        

        ";
        // line 31
        echo "            <label class=' control-label '>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Last name:"));
        echo "</label>
                ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_lastname", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sLastName", array()), 2 => array("id" => "register_lastname", "class" => "form-control")), "method"));
        echo "
            

        ";
        // line 36
        echo "            <label class='  control-label'> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Email address:"));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
        echo "</label>
                ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "register_email", 1 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "sEmail", array()), 2 => array("id" => "register_email", "class" => "form-control input-sm", "required" => true)), "method"));
        echo "
           

        ";
        // line 41
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
            // line 42
            echo "                ";
            $context["registerKey"] = ("register_" . $context["key"]);
            // line 43
            echo "                <label for=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["registerKey"] ?? null));
            echo "\" class='ontrol-label '> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["aExtraAttribute"], "caption", array()));
            echo " ";
            if (($this->getAttribute($context["aExtraAttribute"], "mandatory", array()) == "Y")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
            }
            echo "</label>
                    ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => ($context["registerKey"] ?? null), 1 => $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAttribute", array()), $context["key"], array(), "array"), 2 => array("id" => "register_{\$key}", "class" => "form-control input-sm")), "method"));
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aExtraAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bCaptcha", array())) {
            // line 50
            echo "                <label class='control-label '>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please solve the following equation:"));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/registration/required.twig"));
            echo "</label>
                <div ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchadiv", array()));
            echo ">
                    <div class='";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchadivb", array()));
            echo " input-group' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchadivb", array()));
            echo ">
                        <div class='control-label'>
                            ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", array(), "method"));
            echo "
                            <!-- TODO: Problems with reload and name getting empty/not in POST. -->
                            <a href=\"#\" class=\"btn btn-sm btn-default\" onclick=\"window.location.reload();\" id=\"reloadCaptcha\" title=\"";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Reload captcha"));
            echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                        </div>
                        <input class='";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcaptchainput", array()));
            echo " form-control' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcaptchainput", array()));
            echo " >
                    </div>
                </div>
            </div>
        ";
        }
        // line 63
        echo "
        ";
        // line 65
        echo "        <div class='' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registermandatoryinfo", array()));
        echo " >
                ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fields marked with an asterisk are mandatory."));
        echo "
        </div>

        ";
        // line 70
        echo "        <div class='' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersave", array()));
        echo " >
            <div class='col-md-offset-7' ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersavediv", array()));
        echo " >
                ";
        // line 72
        $context["continue"] = gT("Continue", "unescaped");
        // line 73
        echo "                <button ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersavedivbutton", array()));
        echo "  class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersavedivbutton", array()));
        echo " btn btn-default' >
                    ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["continue"] ?? null));
        echo "
                </button>
            </div>
        </div>

        ";
        // line 80
        echo "    </div>
    <div class='";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registerformcoladdidtions", array()));
        echo " col-md-8 col-md-offset-2' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registerformcoladdidtions", array()));
        echo ">
        ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "formAdditions", array()));
        echo "
    </div>

    ";
        // line 85
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
        return array (  244 => 85,  238 => 82,  232 => 81,  229 => 80,  221 => 74,  214 => 73,  212 => 72,  208 => 71,  203 => 70,  197 => 66,  192 => 65,  189 => 63,  179 => 58,  174 => 56,  169 => 54,  162 => 52,  158 => 51,  151 => 50,  148 => 49,  145 => 47,  128 => 44,  117 => 43,  114 => 42,  96 => 41,  90 => 37,  83 => 36,  77 => 32,  72 => 31,  65 => 26,  60 => 25,  54 => 21,  49 => 19,  46 => 18,  43 => 1,);
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
<div id=\"umk-welcome\">
    {{ C.Html.form(aSurveyInfo.sRegisterFormUrl,'post',({'id' : 'limesurvey', 'role' : 'form', 'class' : 'form'})) }}

    {{aSurveyInfo.registerform.hiddeninputs}}

    
        {# Participants first name #}
            <label for='register_firstname' class='control-label '>{{ gT(\"First name:\") }}</label>
                {{ C.Html.textField('register_firstname', aSurveyInfo.sFirstName, ({'id' : 'register_firstname','class' : 'form-control'})) }}
            
        

        {# Participants last name #}
            <label class=' control-label '>{{ gT(\"Last name:\") }}</label>
                {{ C.Html.textField('register_lastname', aSurveyInfo.sLastName, ({'id' : 'register_lastname', 'class' : 'form-control'})) }}
            

        {# Participants email #}
            <label class='  control-label'> {{ gT(\"Email address:\") }} {{ include('./subviews/registration/required.twig') }}</label>
                {{ C.Html.textField('register_email', aSurveyInfo.sEmail, ({'id' : 'register_email','class' : 'form-control input-sm','required' : true})) }}
           

        {# Loop to add extra attributes #}
        {% for key, aExtraAttribute in aSurveyInfo.aExtraAttributes  %}
                {% set registerKey = \"register_\" ~ key %}
                <label for=\"{{ registerKey }}\" class='ontrol-label '> {{ aExtraAttribute.caption }} {% if aExtraAttribute.mandatory == 'Y' %}{{ include('./subviews/registration/required.twig') }}{% endif %}</label>
                    {{ C.Html.textField(registerKey, aSurveyInfo.aAttribute[key],({'id' : \"register_{\$key}\",'class' : 'form-control input-sm'})) }}
            
        {% endfor %}

        {# Captcha box #}
        {% if aSurveyInfo.bCaptcha %}
                <label class='control-label '>{{ gT(\"Please solve the following equation:\") }} {{ include('./subviews/registration/required.twig') }}</label>
                <div {{ aSurveyInfo.attr.registerformcaptchadiv }}>
                    <div class='{{ aSurveyInfo.class.registerformcaptchadivb }} input-group' {{ aSurveyInfo.attr.registerformcaptchadivb }}>
                        <div class='control-label'>
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
        <div class='' {{ aSurveyInfo.attr.registermandatoryinfo }} >
                {{ gT('Fields marked with an asterisk are mandatory.')}}
        </div>

        {# Submit register button #}
        <div class='' {{ aSurveyInfo.attr.registersave }} >
            <div class='col-md-offset-7' {{ aSurveyInfo.attr.registersavediv }} >
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
", "./subviews/registration/register_form.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/registration/register_form.twig");
    }
}
