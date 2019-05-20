<?php

/* ./subviews/header/head.twig */
class __TwigTemplate_d36eac02172b28e42040ebb5f6de898a920d41065a43dbbed6ec74e5a772ec02 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array();
        $functions = array("registerScript" => 4, "processString" => 18, "imageSrc" => 21, "include" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('registerScript', 'processString', 'imageSrc', 'include')
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
        // line 3
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", array())) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateConfirmLanguage", (("\$.extend(LSvar.lang," . $this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", array())) . ")"), "POS_BEGIN"));
            echo "
";
        }
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateActionLink", "activateActionLink();", "POS_POSTSCRIPT"));
        echo "
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateConfirmButton", "activateConfirmButton();", "POS_POSTSCRIPT"));
        echo "

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />

    ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "metas", array()));
        echo "

    <title>
        ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()), 1));
        echo "
    </title>

    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::imageSrc("./files/favicon.ico"));
        echo "\" />
    <script type=\"text/javascript\">
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
    </script>
    ";
        // line 28
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on")) {
            // line 29
            echo "        <script type=\"text/javascript\">
            var ajaxHandler = new AjaxSubmitObject();
            \$(document).on('ready', function () {
                ajaxHandler.bindActions();
            });
        </script>
    ";
        }
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateInit", "LSvar= LSvar || {};", "POS_HEAD"));
        echo "
    ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) != "off"))) {
            // line 39
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateRealFixNumAuto", (("LSvar.bFixNumAuto = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) == "enable")) ? (1) : (0))) . ";"), "POS_HEAD"));
            echo "
        ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateRealNumRealValue", (("LSvar.bNumRealValue = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) == "disable")) ? (1) : (0))) . ";"), "POS_HEAD"));
            echo "
    ";
        }
        // line 42
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/custom_header.twig"));
        echo "

    ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/google_analytics.twig"));
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  122 => 42,  117 => 40,  112 => 39,  110 => 38,  105 => 37,  103 => 36,  94 => 29,  91 => 28,  82 => 21,  76 => 18,  70 => 15,  59 => 7,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
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

{% if(aSurveyInfo.jYesNo) %}
    {{ registerScript('activateConfirmLanguage',\"\$.extend(LSvar.lang,\" ~ aSurveyInfo.jYesNo ~ \")\", \"POS_BEGIN\") }}
{% endif %}
{{ registerScript('activateActionLink',\"activateActionLink();\", \"POS_POSTSCRIPT\") }}
{{ registerScript('activateConfirmButton',\"activateConfirmButton();\", \"POS_POSTSCRIPT\") }}

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />

    {{ aSurveyInfo.metas }}

    <title>
        {{ processString(aSurveyInfo.surveyls_title,1) }}
    </title>

    <link rel=\"shortcut icon\" href=\"{{ imageSrc('./files/favicon.ico') }}\" />
    <script type=\"text/javascript\">
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
    </script>
    {# Ajax mode #}
    {% if(aSurveyInfo.options.ajaxmode == \"on\") %}
        <script type=\"text/javascript\">
            var ajaxHandler = new AjaxSubmitObject();
            \$(document).on('ready', function () {
                ajaxHandler.bindActions();
            });
        </script>
    {% endif %}
    {# LSvar update with  #}
    {{ registerScript(\"LSvarTemplateInit\",\"LSvar= LSvar || {};\",\"POS_HEAD\") }}
    {% if(aSurveyInfo.options.fixnumauto and aSurveyInfo.options.fixnumauto != \"off\") %}
        {{ registerScript(\"LSvarTemplateRealFixNumAuto\",\"LSvar.bFixNumAuto = \"~(aSurveyInfo.options.fixnumauto == \"enable\" ? 1 : 0)~\";\",\"POS_HEAD\") }}
        {{ registerScript(\"LSvarTemplateRealNumRealValue\",\"LSvar.bNumRealValue = \"~(aSurveyInfo.options.fixnumauto == \"disable\" ? 1 : 0)~\";\",\"POS_HEAD\") }}
    {% endif %}
    {{ include('./subviews/header/custom_header.twig') }}

    {{ include('./subviews/header/google_analytics.twig') }}
</head>
", "./subviews/header/head.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_fruity_umk-/views/subviews/header/head.twig");
    }
}
