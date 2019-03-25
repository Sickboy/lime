<?php

/* ./subviews/navigation/language_changer_top_menu.twig */
class __TwigTemplate_368ca471d17db11e26eb2685bf78445fa60cbd677c342739e62f025e54095693 extends Twig_Template
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
        $tags = array("if" => 28, "set" => 31, "for" => 50);
        $filters = array();
        $functions = array("gT" => 44, "registerScript" => 62);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array(),
                array('gT', 'registerScript')
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

        // line 24
        echo "


";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", array()), "show", array()) == true)) {
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["aLCD"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", array()), "datas", array());
            // line 32
            echo "
     <li class=\"";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctli", array()));
            echo " nav-item\">
        <a class=\"";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctla", array()));
            echo " nav-link animate\" href=\"./admin\">
            Zaloguj się
        </a>
    </li>

    <!-- Language Changer, top menu version -->
    <li class=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctli", array()));
            echo " dropdown\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctli", array()));
            echo " >
        <a class=\"";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctla", array()));
            echo " dropdown-toggle animate\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctla", array()));
            echo " >

            ";
            // line 44
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Language:"));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aLCD"] ?? null), "aListLang", array()), $this->getAttribute(($context["aLCD"] ?? null), "sSelected", array()), array(), "array"));
            echo "
            <span class=\"";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctspan", array()));
            echo " caret\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctspan", array()));
            echo " ></span>
        </a>

        <ul class=\"";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctdropdown", array()));
            echo " dropdown-menu\" id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "lctdropdown", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctdropdown", array()));
            echo " >
            ";
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aLCD"] ?? null), "aListLang", array()));
            foreach ($context['_seq'] as $context["value"] => $context["lang"]) {
                // line 51
                echo "                <li class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctdropdownli", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctdropdownli", array()));
                echo ">
                    <a href='#' data-limesurvey-lang='";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["value"]);
                echo "' class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctdropdownlia", array()));
                echo " animate\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lctdropdownlia", array()));
                echo ">
                        ";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT($context["lang"]));
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </ul>
    </li>

";
        }
        // line 61
        echo "
";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts-TopLanguageChanger", (("basicThemeScripts.initTopMenuLanguageChanger('." . $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lctdropdownlia", array())) . "', 'form#limesurvey'); "), "POS_POSTSCRIPT"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  144 => 61,  138 => 57,  128 => 53,  120 => 52,  113 => 51,  108 => 50,  100 => 48,  92 => 45,  85 => 44,  78 => 41,  72 => 40,  63 => 34,  59 => 33,  56 => 32,  53 => 31,  50 => 29,  48 => 28,  43 => 24,);
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

    (¯`·._.·(¯`·._.·  Language Changer for Top Menu ·._.·´¯)·._.·´¯)

    Show a language changer inside the top menu

    It's a typical bootstrap dropdown button.
    @see: http://getbootstrap.com/components/#dropdowns

    @var array  aSurveyInfo.alanguageChangerDatas.aListLang :  contains the list of available languages for this survey, 'language_code' => 'language name'
    @var string aSurveyInfo.alanguageChangerDatas.sSelected :  the language code of the selected language

    The language change is done via javascript
#}



{# There is many condition where the language changer should not be shown. Eg: there is only one language available #}
{% if  aSurveyInfo.alanguageChanger.show == true %}

    {#  we set a shortcut for aSurveyInfo.alanguageChangerDatas #}
    {% set aLCD  = aSurveyInfo.alanguageChanger.datas %}

     <li class=\"{{ aSurveyInfo.class.lctli }} nav-item\">
        <a class=\"{{ aSurveyInfo.class.lctla }} nav-link animate\" href=\"./admin\">
            Zaloguj się
        </a>
    </li>

    <!-- Language Changer, top menu version -->
    <li class=\"{{ aSurveyInfo.class.lctli }} dropdown\" {{ aSurveyInfo.attr.lctli }} >
        <a class=\"{{ aSurveyInfo.class.lctla }} dropdown-toggle animate\" {{ aSurveyInfo.attr.lctla }} >

            {# NOTE:  {{gT( aLCD.aListLang[aLCD.sSelected] )}}: retreives the language name of the selected language and translates it #}
            {{ gT(\"Language:\") }} {{ aLCD.aListLang[aLCD.sSelected] }}
            <span class=\"{{ aSurveyInfo.class.lctspan }} caret\" {{ aSurveyInfo.attr.lctspan }} ></span>
        </a>

        <ul class=\"{{ aSurveyInfo.class.lctdropdown }} dropdown-menu\" id=\"{{ aSurveyInfo.id.lctdropdown }}\" {{ aSurveyInfo.attr.lctdropdown }} >
            {# List of available languages.  #}
            {% for value, lang in aLCD.aListLang %}
                <li class=\"{{ aSurveyInfo.class.lctdropdownli }}\" {{ aSurveyInfo.attr.lctdropdownli }}>
                    <a href='#' data-limesurvey-lang='{{ value }}' class=\"{{ aSurveyInfo.class.lctdropdownlia }} animate\" {{ aSurveyInfo.attr.lctdropdownlia }}>
                        {{gT( lang )}}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </li>

{% endif %}

{{ registerScript(\"BasicThemeScripts-TopLanguageChanger\", \"basicThemeScripts.initTopMenuLanguageChanger('.\" ~ aSurveyInfo.class.lctdropdownlia ~ \"', 'form#limesurvey'); \", \"POS_POSTSCRIPT\") }}

", "./subviews/navigation/language_changer_top_menu.twig", "/var/www/html/ankiety/v3/themes/survey/vanilla/views/subviews/navigation/language_changer_top_menu.twig");
    }
}
