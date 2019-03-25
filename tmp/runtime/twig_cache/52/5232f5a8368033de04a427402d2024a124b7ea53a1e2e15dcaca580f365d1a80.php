<?php

/* /survey/questions/answer/listradio/rows/answer_row_other.twig */
class __TwigTemplate_3ac004a4ef75400d9e009c4378c05ba3a92b64509f028d6fc9a7ce1465dde3ec extends Twig_Template
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
        $functions = array("gT" => 42);

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

        // line 18
        echo "
<!-- answer_row_other -->
<li id='javatbd";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "' class='answer-item radio-text-item form-inline' role='group' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo " >
    <!-- Checkbox + label -->
    <div class=\"form-group othertext-label-checkox-container radio-item\">
        <input
        type=\"radio\"
        value=\"-oth-\"
        name=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        id=\"SOTH";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkedState"] ?? null));
        echo "
        onclick=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkconditionFunction"] ?? null));
        echo "(this.value, this.name, this.type)\"
        />

        <label for=\"SOTH";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" class=\"control-label label-radio\" id=\"label-id-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["othertext"] ?? null));
        echo "</label>
    </div>

    <!-- comment -->
    <div class=\"form-group text-item other-text-item\">
        <input
        type=\"text\"
        class=\"form-control ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo " input-sm\"
        id=\"answer";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext\"
        name=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "other\"
        title=\"";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Other"));
        echo "\"
        ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_other"] ?? null));
        echo "
        onkeyup=\"if(\$.trim(\$(this).val())!=''){ \$('#SOTH";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "').click(); };\"
        aria-labelledby=\"label-id-";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        />
    </div>
</li>
<!-- end of answer_row_other -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row_other.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  76 => 32,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  47 => 20,  43 => 18,);
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
 * List radio Html : item 'other' row
 *
 * @var \$name
 * @var \$answer_other
 * @var \$sDisplayStyle
 * @var \$sDisable
 * @var \$myfname
 * @var \$othertext
 * @var \$checkedState
 * @var \$kpclass
 * @var \$sValue
 * @var \$oth_checkconditionFunction
 * @var \$checkconditionFunction
 */
#}

<!-- answer_row_other -->
<li id='javatbd{{ myfname }}' class='answer-item radio-text-item form-inline' role='group' {{ sDisplayStyle }} >
    <!-- Checkbox + label -->
    <div class=\"form-group othertext-label-checkox-container radio-item\">
        <input
        type=\"radio\"
        value=\"-oth-\"
        name=\"{{ name }}\"
        id=\"SOTH{{ name }}\"
        {{ checkedState }}
        onclick=\"{{ checkconditionFunction }}(this.value, this.name, this.type)\"
        />

        <label for=\"SOTH{{ name }}\" class=\"control-label label-radio\" id=\"label-id-{{ name }}\">{{ othertext }}</label>
    </div>

    <!-- comment -->
    <div class=\"form-group text-item other-text-item\">
        <input
        type=\"text\"
        class=\"form-control {{ kpclass }} input-sm\"
        id=\"answer{{ name }}othertext\"
        name=\"{{ name }}other\"
        title=\"{{ gT('Other') }}\"
        {{ answer_other }}
        onkeyup=\"if(\$.trim(\$(this).val())!=''){ \$('#SOTH{{ name }}').click(); };\"
        aria-labelledby=\"label-id-{{ name }}\"
        />
    </div>
</li>
<!-- end of answer_row_other -->
", "/survey/questions/answer/listradio/rows/answer_row_other.twig", "/var/www/html/ankiety/v3/application/views/survey/questions/answer/listradio/rows/answer_row_other.twig");
    }
}
