<?php

/* ./subviews/registration/register_success.twig */
class __TwigTemplate_81b1610b843ccf6261612c81b24a112f1747dad76e321821cc343d086b5898af extends Twig_Template
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
        $filters = array();
        $functions = array("gT" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('gT')
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
        echo "<div class=\"row\">
    <div class='";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccessblock", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccessblock", array()));
        echo " >
        <ul class='";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslist", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslist", array()));
        echo ">
            <li class='";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistitem", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistitem", array()));
        echo ">
                <div class=\"row\">
                    <div class='";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistlabel", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistlabel", array()));
        echo ">
                        ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("First name"));
        echo "
                    </div>
                    <div class='";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistcontent", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistcontent", array()));
        echo ">
                        ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sFirstName", array()));
        echo "
                    </div>
                </div>
            </li>
            <li class='";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistitem", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistitem", array()));
        echo ">
                <div class=\"row\">
                    <div class='";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistlabel", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistlabel", array()));
        echo ">
                        ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Last name"));
        echo "

                    </div>
                    <div class='";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistcontent", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistcontent", array()));
        echo ">
                        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sLastName", array()));
        echo "

                    </div>
                </div>
            </li>
            <li class='";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistitem", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistitem", array()));
        echo ">
                <div class=\"row\">
                    <div class='";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistlabel", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistlabel", array()));
        echo ">
                        ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Email address"));
        echo "

                    </div>
                    <div class='";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "registersuccesslistcontent", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "registersuccesslistcontent", array()));
        echo ">
                        ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sEmail", array()));
        echo "

                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  141 => 32,  135 => 29,  129 => 28,  122 => 26,  114 => 21,  108 => 20,  102 => 17,  96 => 16,  89 => 14,  82 => 10,  76 => 9,  71 => 7,  65 => 6,  58 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class='{{ aSurveyInfo.class.registersuccessblock }}' {{ aSurveyInfo.attr.registersuccessblock }} >
        <ul class='{{ aSurveyInfo.class.registersuccesslist }}' {{ aSurveyInfo.attr.registersuccesslist }}>
            <li class='{{ aSurveyInfo.class.registersuccesslistitem }}' {{ aSurveyInfo.attr.registersuccesslistitem }}>
                <div class=\"row\">
                    <div class='{{ aSurveyInfo.class.registersuccesslistlabel }}' {{ aSurveyInfo.attr.registersuccesslistlabel }}>
                        {{ gT(\"First name\") }}
                    </div>
                    <div class='{{ aSurveyInfo.class.registersuccesslistcontent }}' {{ aSurveyInfo.attr.registersuccesslistcontent }}>
                        {{ aSurveyInfo.sFirstName }}
                    </div>
                </div>
            </li>
            <li class='{{ aSurveyInfo.class.registersuccesslistitem }}' {{ aSurveyInfo.attr.registersuccesslistitem }}>
                <div class=\"row\">
                    <div class='{{ aSurveyInfo.class.registersuccesslistlabel }}' {{ aSurveyInfo.attr.registersuccesslistlabel }}>
                        {{ gT(\"Last name\") }}

                    </div>
                    <div class='{{ aSurveyInfo.class.registersuccesslistcontent }}' {{ aSurveyInfo.attr.registersuccesslistcontent }}>
                        {{ aSurveyInfo.sLastName }}

                    </div>
                </div>
            </li>
            <li class='{{ aSurveyInfo.class.registersuccesslistitem }}' {{ aSurveyInfo.attr.registersuccesslistitem }}>
                <div class=\"row\">
                    <div class='{{ aSurveyInfo.class.registersuccesslistlabel }}' {{ aSurveyInfo.attr.registersuccesslistlabel }}>
                        {{ gT(\"Email address\") }}

                    </div>
                    <div class='{{ aSurveyInfo.class.registersuccesslistcontent }}' {{ aSurveyInfo.attr.registersuccesslistcontent }}>
                        {{ aSurveyInfo.sEmail }}

                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
", "./subviews/registration/register_success.twig", "/var/www/html/ankiety/v3/upload/themes/survey/umk2017/views/subviews/registration/register_success.twig");
    }
}
