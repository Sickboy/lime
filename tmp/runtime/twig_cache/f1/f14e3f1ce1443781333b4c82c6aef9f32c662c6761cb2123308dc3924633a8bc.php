<?php

/* ./subviews/messages/no_js_alert.twig */
class __TwigTemplate_9a7fa78f348456c77370756c686bac42c9ef62d550f26ba91caf32a41d1a3d8f extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 23);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
                array()
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

        // line 17
        echo "

<!-- No JavaScript alert -->
<div class='";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "nojs", array()));
        echo " alert alert-danger '  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "nojs", array()));
        echo " data-type='checkjavascript'>
    ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Caution: JavaScript execution is disabled in your browser or for this website. You may not be able to answer all questions in this survey. Please, verify your browser parameters."));
        // line 24
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/no_js_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  54 => 21,  48 => 20,  43 => 17,);
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

    (¯`·._.·(¯`·._.· No JavaScript Alert  ·._.·´¯)·._.·´¯)

    If JavaScript is not enabled, this alert will appear on the screen.

#}


<!-- No JavaScript alert -->
<div class='{{ aSurveyInfo.class.nojs  }} alert alert-danger '  {{ aSurveyInfo.attr.nojs  }} data-type='checkjavascript'>
    {{
        \"Caution: JavaScript execution is disabled in your browser or for this website. You may not be able to answer all questions in this survey. Please, verify your browser parameters.\"
        | t
    }}
</div>
", "./subviews/messages/no_js_alert.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_umk2017/views/subviews/messages/no_js_alert.twig");
    }
}
