<?php

/* __string_template__e4deb774e55bffe243ac3c0ee4a24df024141d280bc5fc8bca825c19cc68986b */
class __TwigTemplate_6f0a8c50956378d4d86d2b520839103368496811e3d9328f9c38cf04ef0a3c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'nav_bar' => array($this, 'block_nav_bar'),
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
        echo "    <body style=\"padding-top: 90px;\" >
        
        ";
        // line 8
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 11
        echo "
        
        <a href=\"https://ankiety.umk.pl/v3/admin\">Logowanie UMK</a><br><a href=\"#\">Logowanie Gości</a>

        


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
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "__string_template__e4deb774e55bffe243ac3c0ee4a24df024141d280bc5fc8bca825c19cc68986b";
    }

    public function getDebugInfo()
    {
        return array (  83 => 9,  80 => 8,  73 => 4,  71 => 3,  68 => 2,  56 => 11,  54 => 8,  50 => 6,  48 => 2,  45 => 1,);
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
    <body style=\"padding-top: 90px;\" >
        
        {% block nav_bar %}
                    {{ include('./subviews/header/nav_bar.twig') }}
                {% endblock %}

        
        <a href=\"https://ankiety.umk.pl/v3/admin\">Logowanie UMK</a><br><a href=\"#\">Logowanie Gości</a>

        


    </body>
</html>", "__string_template__e4deb774e55bffe243ac3c0ee4a24df024141d280bc5fc8bca825c19cc68986b", "");
    }
}
