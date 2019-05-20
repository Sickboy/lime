<?php

/* ./subviews/header/progress_bar.twig */
class __TwigTemplate_c0899074954862eedf689d495b3abdf5b66f972621f935328c8991c7d082892a extends Twig_Template
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
        $tags = array("if" => 2, "set" => 8);
        $filters = array();
        $functions = array("registerPublicCssFile" => 7, "intval" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('registerPublicCssFile', 'intval')
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

        // line 2
        if ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array())) {
            // line 3
            echo "    <!-- Top container -->
    <div class=\"";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "topcontainer", array()));
            echo " space-col\"  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "topcontainer", array()));
            echo " >
        <div class=\"";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "topcontent", array()));
            echo " container-fluid\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "topcontent", array()));
            echo " >
            ";
            // line 6
            if (((($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) != "A") && $this->getAttribute(($context["aSurveyInfo"] ?? null), "showprogress", array(), "any", true, true)) && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "showprogress", array()) == "Y"))) {
                // line 7
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPublicCssFile("lime-progress.css"));
                echo "
                ";
                // line 8
                $context["progressValue"] = ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "total", array()) > 0)) ? (intval(((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "currentstep", array()) - 1) / $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", array()), "total", array())) * 100))) : (0));
                // line 9
                echo "                <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "progress", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "progress", array()));
                echo ">
                    <div class=\"";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "progressbar", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "progressbar", array()));
                echo " role=\"progressbar\" aria-valuenow=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em; width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
                echo "%;\">
                        ";
                // line 11
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["progressValue"] ?? null));
                echo "%
                    </div>
                </div>
            ";
            }
            // line 15
            echo "        </div> <!-- must hide it without javascript -->
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/progress_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  86 => 11,  76 => 10,  69 => 9,  67 => 8,  62 => 7,  60 => 6,  54 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# do not show on \"completed/thank you page\" page #}
{% if not aSurveyInfo.aCompleted %}
    <!-- Top container -->
    <div class=\"{{ aSurveyInfo.class.topcontainer  }} space-col\"  {{ aSurveyInfo.attr.topcontainer  }} >
        <div class=\"{{ aSurveyInfo.class.topcontent  }} container-fluid\" {{ aSurveyInfo.attr.topcontent  }} >
            {% if aSurveyInfo.format != 'A' and aSurveyInfo.showprogress is defined and aSurveyInfo.showprogress == 'Y' %}
                {{  registerPublicCssFile('lime-progress.css') }}
                {% set progressValue  = ( aSurveyInfo.progress.total > 0 ) ? intval( (aSurveyInfo.progress.currentstep - 1) / aSurveyInfo.progress.total * 100 ) : 0 %}
                <div class=\"{{ aSurveyInfo.class.progress  }}\" {{ aSurveyInfo.attr.progress  }}>
                    <div class=\"{{ aSurveyInfo.class.progressbar  }}\" {{ aSurveyInfo.attr.progressbar  }} role=\"progressbar\" aria-valuenow=\"{{ progressValue }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em; width: {{ progressValue }}%;\">
                        {{ progressValue }}%
                    </div>
                </div>
            {% endif %}
        </div> <!-- must hide it without javascript -->
    </div>
{% endif %}
", "./subviews/header/progress_bar.twig", "/var/www/html/ankiety/v3/upload/themes/survey/extends_fruity_umk-/views/subviews/header/progress_bar.twig");
    }
}
