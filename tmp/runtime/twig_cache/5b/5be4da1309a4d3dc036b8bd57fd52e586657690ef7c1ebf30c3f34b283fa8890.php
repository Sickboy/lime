<?php

/* ./subviews/navigation/ajax_indicator.twig */
class __TwigTemplate_63c75dd7a5676fb98da171bf86135cdb4ca66f475cac8dc12f4a4fb7f654c756 extends Twig_Template
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

        // line 1
        echo "<script>
    \$.ajaxSetup({
        beforeSend:function(){
            // show gif here, eg:
            \$(\"#ajax-loading\").show();
        },
        complete:function(){
            // hide gif here, eg:
            \$(\"#ajax-loading\").hide();
        }
    });
</script>
<div id=\"ajax-loading\" hidden></div>";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/ajax_indicator.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    \$.ajaxSetup({
        beforeSend:function(){
            // show gif here, eg:
            \$(\"#ajax-loading\").show();
        },
        complete:function(){
            // hide gif here, eg:
            \$(\"#ajax-loading\").hide();
        }
    });
</script>
<div id=\"ajax-loading\" hidden></div>", "./subviews/navigation/ajax_indicator.twig", "/var/www/html/lime/upload/themes/survey/umk2017/views/subviews/navigation/ajax_indicator.twig");
    }
}
