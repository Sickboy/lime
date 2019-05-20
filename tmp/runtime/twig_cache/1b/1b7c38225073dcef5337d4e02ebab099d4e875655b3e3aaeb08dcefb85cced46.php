<?php

/* ./subviews/survey/group_subviews/group_container.twig */
class __TwigTemplate_c81394974032941a5aba8e4a123fcdbf30cc5079c677e3c2d37d90b67365d184 extends Twig_Template
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
        $tags = array("for" => 37, "if" => 42);
        $filters = array();
        $functions = array("include" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 20
        echo "
<div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "groupcontainer", array()));
        echo " space-col\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "groupcontainer", array()));
        echo ">

    ";
        // line 24
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/survey/group_subviews/group_name.twig"));
        echo "
</div>
<div class=\"group-description\">
    ";
        // line 28
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/survey/group_subviews/group_desc.twig"));
        echo "
</div>
    ";
        // line 35
        echo "
    <!-- PRESENT THE QUESTIONS -->
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aGroup"] ?? null), "aQuestions", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aQuestion"]) {
            // line 38
            echo "         ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/survey/question_container.twig"));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aQuestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <!-- Hidden inputs -->
    ";
        // line 42
        if (($this->getAttribute(($context["aGroup"] ?? null), "show_last_group", array()) == true)) {
            // line 43
            echo "        <input type='hidden' name='lastgroup' value='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aGroup"] ?? null), "lastgroup", array()));
            echo "' id='lastgroup' />
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (($this->getAttribute(($context["aGroup"] ?? null), "show_last_answer", array()) == true)) {
            // line 47
            echo "        <input type='hidden' name='lastanswer' value='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aGroup"] ?? null), "lastanswer", array()));
            echo "' id='lastanswer' />
    ";
        }
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  121 => 47,  119 => 46,  116 => 45,  110 => 43,  108 => 42,  104 => 40,  87 => 38,  70 => 37,  66 => 35,  60 => 28,  53 => 24,  46 => 21,  43 => 20,);
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



    (¯`·._.·(¯`·._.· Group Container  ·._.·´¯)·._.·´¯)


    The container div itself could often change from a template to another, so we clearly separate it.
    NOTE: see views/subviews/survey/group.twig comments for more infos
#}

<div class=\"{{ aSurveyInfo.class.groupcontainer }} space-col\" {{ aSurveyInfo.attr.groupcontainer }}>

    {# Group Name #}
    {{ include('./subviews/survey/group_subviews/group_name.twig') }}
</div>
<div class=\"group-description\">
    {# Group Description #}
    {{ include('./subviews/survey/group_subviews/group_desc.twig') }}
</div>
    {#
        PRESENT THE QUESTIONS

        This is the main part. It will render each question for this group
     #}

    <!-- PRESENT THE QUESTIONS -->
    {% for  aQuestion in aGroup.aQuestions %}
         {{ include('./subviews/survey/question_container.twig') }}
    {% endfor %}

    <!-- Hidden inputs -->
    {% if aGroup.show_last_group == true %}
        <input type='hidden' name='lastgroup' value='{{ aGroup.lastgroup }}' id='lastgroup' />
    {% endif %}

    {% if aGroup.show_last_answer == true %}
        <input type='hidden' name='lastanswer' value='{{ aGroup.lastanswer }}' id='lastanswer' />
    {% endif %}
</div>
", "./subviews/survey/group_subviews/group_container.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_umk2017/views/subviews/survey/group_subviews/group_container.twig");
    }
}
