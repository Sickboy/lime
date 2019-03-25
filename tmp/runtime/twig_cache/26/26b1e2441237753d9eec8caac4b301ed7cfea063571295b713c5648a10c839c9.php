<?php

/* __string_template__53a46e3d2aced8d0ea45ce6f2ad57ab6f7b6bcdddd1f06cb2d51c91a5ed3425a */
class __TwigTemplate_cbab40f6addc17b7ff33d14a3a7e2cbb8f61df8e4c869f6150b7b20d2414165e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("layout_global.twig", "__string_template__53a46e3d2aced8d0ea45ce6f2ad57ab6f7b6bcdddd1f06cb2d51c91a5ed3425a", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_global.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "__string_template__53a46e3d2aced8d0ea45ce6f2ad57ab6f7b6bcdddd1f06cb2d51c91a5ed3425a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 18,);
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

    (¯`·._.·(¯`·._.· User Forms Layout  ·._.·´¯)·._.·´¯)

    This file renders the user forms such as: token (survey participant), and register.
    => it is a direct child of layout_global
    NOTE: see layout_global.twig for more infos
#}
{% extends \"layout_global.twig\" %}
", "__string_template__53a46e3d2aced8d0ea45ce6f2ad57ab6f7b6bcdddd1f06cb2d51c91a5ed3425a", "");
    }
}
