<?php

/* ./subviews/content/printanswers.twig */
class __TwigTemplate_c25a6f34e102c22eb3383c0b5b6bb08bad8d06701283cef41292d7cff787847d extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array();
        $functions = array("include" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 17
        echo "<section> 
        ";
        // line 18
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1)) {
            echo " 
            ";
            // line 19
            echo " 
            ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
            echo " 
        ";
        }
        // line 21
        echo " 
 
        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/printanswers/printanswers_head.twig"));
        echo " 
        ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/printanswers/printanswers_table.twig"));
        echo " 
        ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/printanswers/printanswers_foot.twig"));
        echo " 
    </section>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/printanswers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  66 => 24,  62 => 23,  58 => 21,  53 => 20,  50 => 19,  46 => 18,  43 => 17,);
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
 
    (¯`·._.·(¯`·._.· Print answers Layout  ·._.·´¯)·._.·´¯) 
 
    This file displays the page shown to user when a participant registers for taking a survey. 
 
    NOTE: see layout_main.twig for more infos 
#}<section> 
        {% if (aSurveyInfo.printPdf != 1) %} 
            {# This will display the script and the hidden inputs needed for Expression Manager #} 
            {{ aSurveyInfo.EM.ScriptsAndHiddenInputs  }} 
        {% endif %} 
 
        {{ include('./subviews/printanswers/printanswers_head.twig') }} 
        {{ include('./subviews/printanswers/printanswers_table.twig') }} 
        {{ include('./subviews/printanswers/printanswers_foot.twig') }} 
    </section>
", "./subviews/content/printanswers.twig", "/var/www/html/ankiety/v3/themes/survey/umk2017/views/subviews/content/printanswers.twig");
    }
}
