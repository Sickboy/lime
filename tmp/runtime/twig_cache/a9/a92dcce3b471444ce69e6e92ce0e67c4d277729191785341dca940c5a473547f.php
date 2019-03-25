<?php

/* __string_template__d28d33413a3ec16b33de7d885a736766a9ca43abcc2792b1af1a434253c046e9 */
class __TwigTemplate_f6dcd723a10451cf79a8d222ccd09dd7678c7a10a59446ae72f7088577bdffa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'footer' => array($this, 'block_footer'),
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 2);
        $filters = array();
        $functions = array("include" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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

        // line 1
        echo "<html>
    ";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
        
        ";
        // line 8
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 11
        echo "
        
        ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 20
        echo "   

        ";
        // line 22
        $this->displayBlock('themescripts', $context, $blocks);
        // line 27
        echo "
    </body>
</html>";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "
    ";
    }

    // line 8
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 9
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
        ";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 16
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 17
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 22
    public function block_themescripts($context, array $blocks = array())
    {
        // line 23
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__d28d33413a3ec16b33de7d885a736766a9ca43abcc2792b1af1a434253c046e9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 23,  132 => 22,  125 => 17,  122 => 16,  115 => 14,  112 => 13,  105 => 9,  102 => 8,  95 => 4,  93 => 3,  90 => 2,  84 => 27,  82 => 22,  78 => 20,  75 => 16,  73 => 13,  69 => 11,  67 => 8,  53 => 6,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    {% block head %}
    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}
    {% endblock %}
    <body style=\"padding-top: 90px;\" class=\" {{ aSurveyInfo.class.body }} font-{{  aSurveyInfo.options.font }} lang-{{aSurveyInfo.languagecode}} {{aSurveyInfo.surveyformat}}  {{ aSurveyInfo.attr.body }} >
        
        {% block nav_bar %}
            {{ include('./subviews/header/nav_bar.twig') }}
        {% endblock %}

        
        {% block footer %}
            {{ include('./subviews/footer/footer.twig') }}
        {% endblock %}
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
</html>", "__string_template__d28d33413a3ec16b33de7d885a736766a9ca43abcc2792b1af1a434253c046e9", "");
    }
}
