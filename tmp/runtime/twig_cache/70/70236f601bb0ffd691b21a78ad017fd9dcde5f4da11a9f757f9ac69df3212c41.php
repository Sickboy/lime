<?php

/* /survey/questions/answer/yesno/buttons/item.twig */
class __TwigTemplate_73cec9acb9c6a07bfe5c34a6e6d00a72bab2095599fc0df6f867adeb92895507 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array("gT" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 13
        echo "<ul class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " list-unstyled btn-group btn-group-justified\" data-toggle=\"buttons\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <!-- Yes -->
    <li id=\"javatbd";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\" class=\"button-item form-group btn btn-primary ";
        if (($context["yChecked"] ?? null)) {
            echo "active";
        }
        echo "\">
        <input
            type=\"radio\"
            name=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\"
            value=\"Y\"
            ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["yChecked"] ?? null));
        echo "
        />
        <label for=\"answer";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\">
            <span class=\"fa fa-check ls-icon\" aria-hidden=\"true\"></span> ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
        </label>
    </li>
    <!-- No -->
    <li id=\"javatbd";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\" class=\"button-item form-group btn btn-primary ";
        if (($context["nChecked"] ?? null)) {
            echo "active";
        }
        echo "\">
        <input
            type=\"radio\"
            name=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\"
            value=\"N\"
            ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["nChecked"] ?? null));
        echo "
        />
        <label for=\"answer";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\">
            <span class=\"fa fa-ban ls-icon\" aria-hidden=\"true\"></span> ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
        </label>
    </li>

    <!-- No answer -->
    ";
        // line 42
        if (($context["noAnswer"] ?? null)) {
            // line 43
            echo "        <li id=\"javatbd";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
            echo "\" class=\"button-item form-group btn btn-primary ";
            if (($context["naChecked"] ?? null)) {
                echo "active";
            }
            echo "\">
            <input
                type=\"radio\"
                name=\"";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
            echo "\"
                id=\"answer";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
            echo "\"
                value=\"\"
                ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["naChecked"] ?? null));
            echo "
            />
            <label for=\"answer";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
            echo "\">
                <span class=\"fa fa-circle-thin ls-icon\" aria-hidden=\"true\"></span> ";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No answer"));
            echo "
            </label>
        </li>
    ";
        }
        // line 56
        echo "</ul>
";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["name"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 59
($context["name"] ?? null)), "disabled" => true)), "method"));
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/yesno/buttons/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  164 => 59,  163 => 58,  160 => 56,  153 => 52,  149 => 51,  144 => 49,  139 => 47,  135 => 46,  124 => 43,  122 => 42,  114 => 37,  110 => 36,  105 => 34,  100 => 32,  96 => 31,  86 => 28,  79 => 24,  75 => 23,  70 => 21,  65 => 19,  61 => 18,  51 => 15,  43 => 13,);
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
/**
 * Yes / No Question, buttons item Html
 *
 * @var \$name                           \$ia[1]
 * @var \$yChecked
 * @var \$nChecked
 * @var \$naChecked
 * @var \$noAnswer
 * @var \$value                          \$_SESSION['survey_'.Yii::app()->getConfig('surveyID')][\$name]
 */
#}
<ul class=\"{{ coreClass }} list-unstyled btn-group btn-group-justified\" data-toggle=\"buttons\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-{{ basename }}\">
    <!-- Yes -->
    <li id=\"javatbd{{ name }}Y\" class=\"button-item form-group btn btn-primary {% if yChecked %}active{% endif %}\">
        <input
            type=\"radio\"
            name=\"{{ name }}\"
            id=\"answer{{ name }}Y\"
            value=\"Y\"
            {{ yChecked }}
        />
        <label for=\"answer{{ name }}Y\">
            <span class=\"fa fa-check ls-icon\" aria-hidden=\"true\"></span> {{ gT('Yes') }}
        </label>
    </li>
    <!-- No -->
    <li id=\"javatbd{{ name }}N\" class=\"button-item form-group btn btn-primary {% if nChecked %}active{% endif %}\">
        <input
            type=\"radio\"
            name=\"{{ name }}\"
            id=\"answer{{ name }}N\"
            value=\"N\"
            {{ nChecked }}
        />
        <label for=\"answer{{ name }}N\">
            <span class=\"fa fa-ban ls-icon\" aria-hidden=\"true\"></span> {{ gT('No') }}
        </label>
    </li>

    <!-- No answer -->
    {% if noAnswer %}
        <li id=\"javatbd{{ name }}\" class=\"button-item form-group btn btn-primary {% if naChecked %}active{% endif %}\">
            <input
                type=\"radio\"
                name=\"{{ name }}\"
                id=\"answer{{ name }}\"
                value=\"\"
                {{ naChecked }}
            />
            <label for=\"answer{{ name }}\">
                <span class=\"fa fa-circle-thin ls-icon\" aria-hidden=\"true\"></span> {{ gT('No answer') }}
            </label>
        </li>
    {% endif %}
</ul>
{# Value for expression manager javascript (use id) ; no need to submit #}
{{ C.Html.hiddenField(\"java\"~name,value,({
    'id' : \"java\"~name,
    'disabled' : true,
}))
}}
", "/survey/questions/answer/yesno/buttons/item.twig", "/var/www/html/lime/application/views/survey/questions/answer/yesno/buttons/item.twig");
    }
}
