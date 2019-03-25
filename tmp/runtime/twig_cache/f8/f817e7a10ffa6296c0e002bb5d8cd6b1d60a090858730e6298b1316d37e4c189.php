<?php

/* __string_template__231283d56dbab19f156c1a5b9789a9b724fff6dc9535292e3ecd7e6a0bb83050 */
class __TwigTemplate_b5ecdfc3fb8bf4902619407619ceaa4a1dddb77c29902f02509a984056d3c313 extends Twig_Template
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
        $tags = array("set" => 17, "if" => 32, "for" => 752);
        $filters = array("capitalize" => 1082);
        $functions = array("json_decode" => 17, "registerPackage" => 19, "registerScriptFile" => 26, "registerCssFile" => 27, "gT" => 262, "sprintf" => 1082, "createUrl" => 1133);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('capitalize'),
                array('json_decode', 'registerPackage', 'registerScriptFile', 'registerCssFile', 'gT', 'sprintf', 'createUrl')
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
        $context["aOptions"] = LS_Twig_Extension::json_decode($this->getAttribute(($context["templateConfiguration"] ?? null), "options", array()));
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-roboto"));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-noto"));
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-news_cycle"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-ubuntu"));
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-lato"));
        echo "
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-websafe"));
        echo "

";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScriptFile((($context["optionsPath"] ?? null) . "/spectrum.js")));
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerCssFile((($context["optionsPath"] ?? null) . "/spectrum.css")));
        echo "

";
        // line 30
        $context["animationOptions"] = "";
        // line 32
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 33
            echo "    ";
            $context["animationOptions"] = (($context["animationOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 36
        ob_start();
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
<optgroup label=\"Attention Seekers\">
    <option value=\"bounce\">bounce</option>
    <option value=\"flash\">
        flash</option>
    <option value=\"pulse\">
        pulse</option>
    <option value=\"rubberBand\">
        rubberBand</option>
    <option value=\"shake\">
        shake</option>
    <option value=\"swing\">
        swing</option>
    <option value=\"tada\">
        tada</option>
    <option value=\"wobble\">
        wobble</option>
    <option value=\"jello\">
        jello</option>
</optgroup>

<optgroup label=\"Bouncing Entrances\">
    <option value=\"bounceIn\">bounceIn</option >
    <option value=\"bounceInDown\">bounceInDown</option>
    <option value=\"bounceInLeft\">
        bounceInLeft</option>
    <option value=\"bounceInRight\">
        bounceInRight</option>
    <option value=\"bounceInUp\">
        bounceInUp</option>
</optgroup>

<optgroup label=\"Bouncing Exits\">
    <option value=\"bounceOut\">bounceOut</option >
    <option value=\"bounceOutDown\">bounceOutDown</option>
    <option value=\"bounceOutLeft\">
        bounceOutLeft</option>
    <option value=\"bounceOutRight\">
        bounceOutRight</option>
    <option value=\"bounceOutUp\">
        bounceOutUp</option>
</optgroup>

<optgroup label=\"Fading Entrances\">
    <option value=\"fadeIn\">fadeIn</option >
    <option value=\"fadeInDown\">fadeInDown</option>
    <option value=\"fadeInDownBig\">
        fadeInDownBig</option>
    <option value=\"fadeInLeft\">
        fadeInLeft</option>
    <option value=\"fadeInLeftBig\">
        fadeInLeftBig</option>
    <option value=\"fadeInRight\">
        fadeInRight</option>
    <option value=\"fadeInRightBig\">
        fadeInRightBig</option>
    <option value=\"fadeInUp\">
        fadeInUp</option>
    <option value=\"fadeInUpBig\">
        fadeInUpBig</option>
</optgroup>

<optgroup label=\"Fading Exits\">
    <option value=\"fadeOut\">fadeOut</option >
    <option value=\"fadeOutDown\">fadeOutDown</option>
    <option value=\"fadeOutDownBig\">
        fadeOutDownBig</option>
    <option value=\"fadeOutLeft\">
        fadeOutLeft</option>
    <option value=\"fadeOutLeftBig\">
        fadeOutLeftBig</option>
    <option value=\"fadeOutRight\">
        fadeOutRight</option>
    <option value=\"fadeOutRightBig\">
        fadeOutRightBig</option>
    <option value=\"fadeOutUp\">
        fadeOutUp</option>
    <option value=\"fadeOutUpBig\">
        fadeOutUpBig</option>
</optgroup>

<optgroup label=\"Flippers\">
    <option value=\"flip\">flip</option >
    <option value=\"flipInX\">flipInX</option>
    <option value=\"flipInY\">
        flipInY</option>
    <option value=\"flipOutX\">
        flipOutX</option>
    <option value=\"flipOutY\">
        flipOutY</option>
</optgroup>

<optgroup label=\"Lightspeed\">
    <option value=\"lightSpeedIn\">lightSpeedIn</option >
    <option value=\"lightSpeedOut\">lightSpeedOut</option>
</optgroup>

<optgroup label=\"Rotating Entrances\">
    <option value=\"rotateIn\">rotateIn</option >
    <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
    <option value=\"rotateInDownRight\">
        rotateInDownRight</option>
    <option value=\"rotateInUpLeft\">
        rotateInUpLeft</option>
    <option value=\"rotateInUpRight\">
        rotateInUpRight</option>
</optgroup>

<optgroup label=\"Rotating Exits\">
    <option value=\"rotateOut\">rotateOut</option >
    <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
    <option value=\"rotateOutDownRight\">
        rotateOutDownRight</option>
    <option value=\"rotateOutUpLeft\">
        rotateOutUpLeft</option>
    <option value=\"rotateOutUpRight\">
        rotateOutUpRight</option>
</optgroup>

<optgroup label=\"Sliding Entrances\">
    <option value=\"slideInUp\">slideInUp</option >
    <option value=\"slideInDown\">slideInDown</option>
    <option value=\"slideInLeft\">
        slideInLeft</option>
    <option value=\"slideInRight\">
        slideInRight</option>
</optgroup>

<optgroup label=\"Sliding Exits\">
    <option value=\"slideOutUp\">slideOutUp</option >
    <option value=\"slideOutDown\">slideOutDown</option>
    <option value=\"slideOutLeft\">
        slideOutLeft</option>
    <option value=\"slideOutRight\">
        slideOutRight</option>
</optgroup>

<optgroup label=\"Zoom Entrances\">
    <option value=\"zoomIn\">zoomIn</option >
    <option value=\"zoomInDown\">zoomInDown</option>
    <option value=\"zoomInLeft\">
        zoomInLeft</option>
    <option value=\"zoomInRight\">
        zoomInRight</option>
    <option value=\"zoomInUp\">
        zoomInUp</option>
</optgroup>

<optgroup label=\"Zoom Exits\">
    <option value=\"zoomOut\">zoomOut</option >
    <option value=\"zoomOutDown\">zoomOutDown</option>
    <option value=\"zoomOutLeft\">
        zoomOutLeft</option>
    <option value=\"zoomOutRight\">
        zoomOutRight</option>
    <option value=\"zoomOutUp\">
        zoomOutUp</option>
</optgroup>

<optgroup label=\"Specials\">
    <option value=\"hinge\">hinge</option >
    <option value=\"jackInTheBox\">jackInTheBox</option>
    <option value=\"rollIn\">
        rollIn</option>
    <option value=\"rollOut\">
        rollOut</option>
</optgroup>
";
        $context["animationOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 205
        echo "
";
        // line 207
        $context["fruityOptions"] = "";
        // line 208
        echo "
";
        // line 210
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 211
            echo "    ";
            $context["fruityOptions"] = (($context["fruityOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 213
        echo "
";
        // line 215
        ob_start();
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
<option value=\"css/variations/sea_green.css\">Sea Green</option>
<option value=\"css/variations/apple_blossom.css\">Apple Blossom</option>
<option value=\"css/variations/bay_of_many.css\">Bay of Many</option>
<option value=\"css/variations/black_pearl.css\">Black Pearl</option>
<option value=\"css/variations/free_magenta.css\">Free Magenta</option>
<option value=\"css/variations/purple_tentacle.css\">Purple Tentacle</option>
<option value=\"css/variations/sunset_orange.css\">Sunset Orange</option>
<option value=\"css/variations/skyline_blue.css\">Skyline Blue</option>
";
        $context["fruityOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
";
        // line 227
        $context["checkIconOptions"] = "";
        // line 228
        echo "
";
        // line 230
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 231
            echo "    ";
            $context["checkIconOptions"] = (($context["checkIconOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 233
        echo "
";
        // line 234
        ob_start();
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
<option value=\"f00c\"> <i class=\"fa fa-check\"></i> Check </option>
<option value=\"f058\"> <i class=\"fa fa-check-circle\"></i> Check circle </option>
<option value=\"f14a\"> <i class=\"fa fa-check-square\"></i> Check square </option>
<option value=\"f111\"> <i class=\"fa fa-circle\"></i> Circle </option>
<option value=\"f067\"> <i class=\"fa fa-plus\"></i> Plus </option>
<option value=\"f0c8\"> <i class=\"fa fa-square\"></i> Square </option>
<option value=\"f005\"> <i class=\"fa fa-star\"></i> Star </option>
<option value=\"f00d\"> <i class=\"fa fa-times\"></i> Times </option>
<option value=\"f069\"> <i class=\"fa fa-asterisk\"></i> Asterisk </option>
<option value=\"f061\"> <i class=\"fa fa-arrow-right\"></i> Arrow right </option>
<option value=\"f138\"> <i class=\"fa fa-chevron-circle-right\"></i> Chevron circle right </option>
<option value=\"f1d0\"> <i class=\"fa fa-resistance\"></i> Resistance </option>
";
        $context["checkIconOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 249
        echo "
";
        // line 251
        $context["fontOptions"] = "";
        // line 252
        echo "

";
        // line 255
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 256
            echo "    ";
            $context["fontOptions"] = (($context["fontOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 258
        echo "

";
        // line 260
        ob_start();
        // line 261
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 262
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Local Server"));
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 270
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("User browser"));
        echo "\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
";
        $context["fontOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 285
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 288
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 295
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 298
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 299
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 306
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 310
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
            echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            ";
        }
        // line 320
        echo "
            ";
        // line 322
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4 col-lg-2'>

                    ";
        // line 326
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'> ";
        // line 327
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Ajax mode"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 332
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 336
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 339
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 340
            echo "                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        ";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 345
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 351
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 353
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey container"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 362
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 365
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 366
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 368
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 371
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 377
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionborder' class='control-label'>";
        // line 379
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question borders"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='on' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 384
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='off' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 388
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>

                                ";
        // line 392
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 393
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questionborder' value='inherit' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                        ";
            // line 395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 398
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 404
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questioncontainershadow' class='control-label'>";
        // line 406
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question shadow"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='on' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 411
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='off' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 415
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 418
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 419
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questioncontainershadow' value='inherit' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                        ";
            // line 421
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 424
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 431
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 433
        echo "                <div class='col-sm-12 col-md-4 col-lg-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 435
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Show popups"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 438
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 439
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 440
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Popup"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 442
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 443
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 444
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("On page"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 446
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 447
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 448
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Off"));
        echo "
                                    </label>
                                    ";
        // line 451
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 452
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 454
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                        </label>
                                    ";
        }
        // line 457
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 463
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>";
        // line 465
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fix automatically numeric value"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    ";
        // line 470
        echo "                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 471
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 475
        echo "                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 476
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("For expression"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 480
        echo "                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 481
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 483
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 484
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 486
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        } else {
            // line 489
            echo "                                    ";
            // line 490
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 492
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Default"));
            echo "
                                    </label>
                                ";
        }
        // line 495
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            ";
        // line 503
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 505
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_zebrastriping' class='control-label'>";
        // line 507
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Zebra-striped questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='on' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 512
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='off' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 516
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 519
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 520
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='zebrastriping' value='inherit' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                        ";
            // line 522
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 525
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 530
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_stickymatrixheaders' class='control-label'>";
        // line 532
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Sticky array headers"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='on' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 537
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='off' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 541
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 544
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 545
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='stickymatrixheaders' value='inherit' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                        ";
            // line 547
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 550
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 555
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_greyoutselected' class='control-label'>";
        // line 557
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Dim answered array rows"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='on' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 562
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='off' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 566
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 569
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 570
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='greyoutselected' value='inherit' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                        ";
            // line 572
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 575
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 580
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 582
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Hide privacy info"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 587
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 591
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 594
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 595
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 597
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 600
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 605
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_crosshover' class='control-label'>";
        // line 607
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cross-hover in matrix questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='on' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 612
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='off' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 616
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 619
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 620
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='crosshover' value='inherit' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                        ";
            // line 622
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 625
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <div class='row action_hide_on_inherit'>

                ";
        // line 638
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodybackgroundcolor' class='control-label'>";
        // line 640
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"bodybackgroundcolor_picker\" data-value=\"";
        // line 643
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"bodybackgroundcolor\" data-inheritvalue=\"";
        // line 645
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" value=\"inherit\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_bodybackgroundcolor\" data-id=\"bodybackgroundcolor\" />
                            ";
        // line 646
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 647
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 651
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 657
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fontcolor' class='control-label'>";
        // line 659
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Font color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"fontcolor_picker\" data-value=\"";
        // line 662
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"fontcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 664
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_fontcolor\" data-id=\"fontcolor\" />
                            ";
        // line 665
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 666
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 670
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 675
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionbackgroundcolor' class='control-label'>";
        // line 677
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"questionbackgroundcolor_picker\" data-value=\"";
        // line 680
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"questionbackgroundcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 682
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_questionbackgroundcolor\" data-id=\"questionbackgroundcolor\" />
                            ";
        // line 683
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 684
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 688
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 693
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkicon' class='control-label'>";
        // line 695
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Check icon"));
        echo "</label>
                        <div class=\"input-group\">
                            <select name=\"checkicon\" value=\"\" class=\"selector_option_value_field form-control simple_edit_options_checkicon\" data-id=\"checkicon\" >
                                ";
        // line 698
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
                            </select>
                            <div class=\"input-group-addon selector__checkicon-preview\">
                                ( <i class=\"fa\" data-inheritvalue=\"";
        // line 701
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo "\" style=\" background-color: #328637; color: white; width: 16px; height: 16px;  padding: 3px; font-size: 11px; \">
                                    &#x";
        // line 702
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo ";
                                </i> )
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

             <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 717
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimage' class='control-label'>";
        // line 718
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='on' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 723
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='off' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 727
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 730
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 731
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='backgroundimage' value='inherit' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                        ";
            // line 733
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 736
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-8 col-md-6'>
                    ";
        // line 743
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimagefile' class='control-label'>";
        // line 744
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"backgroundimage\" id='simple_edit_options_backgroundimagefile' name='backgroundimagefile'>
                                ";
        // line 747
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 748
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 750
        echo "
                                ";
        // line 751
        $context["optgroup"] = "";
        // line 752
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 753
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 754
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 755
                    echo "                                    </optgroup>
                                ";
                }
                // line 757
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 758
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 759
                echo "                                ";
            }
            // line 760
            echo "                                        <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 762
        echo "                                    </optgroup>

                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_backgroundimagefile\"> ";
        // line 770
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 776
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'> ";
        // line 777
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 782
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 786
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 789
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 790
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 792
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 795
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 801
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>";
        // line 802
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 805
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 806
            echo "                                    <option value=\"inherit\">Inherit</option>
                                ";
        }
        // line 808
        echo "                                ";
        $context["optgroup"] = "";
        // line 809
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 810
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 811
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 812
                    echo "                                    </optgroup>
                                ";
                }
                // line 814
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 815
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 816
                echo "                                ";
            }
            // line 817
            echo "                                        <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 819
        echo "                                    </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 826
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    <div class='form-group row'>
                        ";
        // line 836
        echo "                        <label for='simple_edit_options_animatebody' class='control-label'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate body"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 841
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 845
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 848
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 849
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                        ";
            // line 851
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 854
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 860
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimation' class='control-label'>";
        // line 861
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Body animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimation' name='bodyanimation'>
                                ";
        // line 864
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 871
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimationduration' class='control-label'>";
        // line 872
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimationduration' name='bodyanimationduration' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 882
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatequestion' class='control-label'>";
        // line 883
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate question"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 888
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 892
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 895
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 896
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                        ";
            // line 898
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 901
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 907
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimation' class='control-label'>";
        // line 908
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimation' name='questionanimation'>
                                ";
        // line 911
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 918
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimationduration' class='control-label'>";
        // line 919
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimationduration' name='questionanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 928
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 931
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatealert' class='control-label'>";
        // line 932
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate alert"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 937
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 941
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 944
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 945
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                        ";
            // line 947
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 950
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 956
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimation' class='control-label'>";
        // line 957
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimation' name='alertanimation'>
                                ";
        // line 960
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 967
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimationduration' class='control-label'>";
        // line 968
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimationduration' name='alertanimationduration'/>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 977
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 980
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatecheckbox' class='control-label'>";
        // line 981
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate checkbox"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 986
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 990
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 993
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 994
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                        ";
            // line 996
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 999
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 1005
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimation' class='control-label'>";
        // line 1006
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimation' name='checkboxanimation'>
                                ";
        // line 1009
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 1016
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimationduration' class='control-label'>";
        // line 1017
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimationduration' name='checkboxanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 1026
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 1029
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animateradio' class='control-label'>";
        // line 1030
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate radio buttons"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 1035
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 1039
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 1042
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 1043
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                        ";
            // line 1045
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 1048
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 1054
        echo "                <div class='col-sm-10 col-md-6'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimation' class='control-label'>";
        // line 1057
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Radio button animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimation' name='radioanimation'>
                                ";
        // line 1060
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                ";
        // line 1066
        echo "                <div class='col-sm-2'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimationduration' class='control-label'>";
        // line 1069
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimationduration' name='radioanimationduration' />
                        </div>
                    </div>
                </div>
            </div>            
            <div class='row ls-space margin top-15 bottom-15 action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1082
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s fonts"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 1085
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select font:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 1087
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", array()));
        echo "'>
                                        ";
        // line 1088
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>
            ";
        // line 1101
        echo "            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s variations"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo " </div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_add_css' class='control-label'>";
        // line 1107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select variation:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_add_css' name='cssframework' data-inheritvalue='";
        // line 1109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "files_css", array()));
        echo "'>
                                        ";
        // line 1110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>";
        // line 1120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save"));
        echo " </button>
                </div>
            </div>
        </form>
    </div>
    <div class='row action_hide_on_inherit'>
        ";
        // line 1127
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 1130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 1133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 1138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='";
        // line 1142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 1143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "id", array()));
        echo "' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__231283d56dbab19f156c1a5b9789a9b724fff6dc9535292e3ecd7e6a0bb83050";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1869 => 1143,  1865 => 1142,  1858 => 1138,  1850 => 1133,  1844 => 1130,  1839 => 1127,  1830 => 1120,  1817 => 1110,  1813 => 1109,  1808 => 1107,  1802 => 1104,  1797 => 1101,  1782 => 1088,  1778 => 1087,  1773 => 1085,  1767 => 1082,  1751 => 1069,  1746 => 1066,  1738 => 1060,  1732 => 1057,  1727 => 1054,  1720 => 1048,  1714 => 1045,  1710 => 1043,  1707 => 1042,  1702 => 1039,  1695 => 1035,  1687 => 1030,  1684 => 1029,  1680 => 1026,  1669 => 1017,  1666 => 1016,  1657 => 1009,  1651 => 1006,  1648 => 1005,  1641 => 999,  1635 => 996,  1631 => 994,  1628 => 993,  1623 => 990,  1616 => 986,  1608 => 981,  1605 => 980,  1601 => 977,  1590 => 968,  1587 => 967,  1578 => 960,  1572 => 957,  1569 => 956,  1562 => 950,  1556 => 947,  1552 => 945,  1549 => 944,  1544 => 941,  1537 => 937,  1529 => 932,  1526 => 931,  1522 => 928,  1511 => 919,  1508 => 918,  1499 => 911,  1493 => 908,  1490 => 907,  1483 => 901,  1477 => 898,  1473 => 896,  1470 => 895,  1465 => 892,  1458 => 888,  1450 => 883,  1447 => 882,  1435 => 872,  1432 => 871,  1423 => 864,  1417 => 861,  1414 => 860,  1407 => 854,  1401 => 851,  1397 => 849,  1394 => 848,  1389 => 845,  1382 => 841,  1373 => 836,  1361 => 826,  1352 => 819,  1339 => 817,  1336 => 816,  1334 => 815,  1329 => 814,  1325 => 812,  1322 => 811,  1319 => 810,  1314 => 809,  1311 => 808,  1307 => 806,  1305 => 805,  1299 => 802,  1296 => 801,  1289 => 795,  1283 => 792,  1279 => 790,  1276 => 789,  1271 => 786,  1264 => 782,  1256 => 777,  1253 => 776,  1245 => 770,  1235 => 762,  1222 => 760,  1219 => 759,  1217 => 758,  1212 => 757,  1208 => 755,  1205 => 754,  1202 => 753,  1197 => 752,  1195 => 751,  1192 => 750,  1186 => 748,  1184 => 747,  1178 => 744,  1175 => 743,  1167 => 736,  1161 => 733,  1157 => 731,  1154 => 730,  1149 => 727,  1142 => 723,  1134 => 718,  1131 => 717,  1114 => 702,  1110 => 701,  1104 => 698,  1098 => 695,  1094 => 693,  1088 => 688,  1082 => 684,  1080 => 683,  1076 => 682,  1071 => 680,  1065 => 677,  1061 => 675,  1055 => 670,  1049 => 666,  1047 => 665,  1043 => 664,  1038 => 662,  1032 => 659,  1028 => 657,  1021 => 651,  1015 => 647,  1013 => 646,  1009 => 645,  1004 => 643,  998 => 640,  994 => 638,  980 => 625,  974 => 622,  970 => 620,  967 => 619,  962 => 616,  955 => 612,  947 => 607,  943 => 605,  937 => 600,  931 => 597,  927 => 595,  924 => 594,  919 => 591,  912 => 587,  904 => 582,  900 => 580,  894 => 575,  888 => 572,  884 => 570,  881 => 569,  876 => 566,  869 => 562,  861 => 557,  857 => 555,  851 => 550,  845 => 547,  841 => 545,  838 => 544,  833 => 541,  826 => 537,  818 => 532,  814 => 530,  808 => 525,  802 => 522,  798 => 520,  795 => 519,  790 => 516,  783 => 512,  775 => 507,  771 => 505,  768 => 503,  759 => 495,  753 => 492,  749 => 490,  747 => 489,  741 => 486,  737 => 484,  735 => 483,  730 => 481,  727 => 480,  721 => 476,  718 => 475,  712 => 471,  709 => 470,  702 => 465,  698 => 463,  691 => 457,  685 => 454,  679 => 452,  676 => 451,  671 => 448,  667 => 447,  663 => 446,  658 => 444,  654 => 443,  650 => 442,  645 => 440,  641 => 439,  637 => 438,  629 => 435,  625 => 433,  622 => 431,  614 => 424,  608 => 421,  604 => 419,  601 => 418,  596 => 415,  589 => 411,  581 => 406,  577 => 404,  570 => 398,  564 => 395,  560 => 393,  557 => 392,  551 => 388,  544 => 384,  536 => 379,  532 => 377,  525 => 371,  519 => 368,  515 => 366,  512 => 365,  507 => 362,  500 => 358,  492 => 353,  488 => 351,  481 => 345,  475 => 342,  471 => 340,  468 => 339,  463 => 336,  456 => 332,  448 => 327,  445 => 326,  440 => 322,  437 => 320,  424 => 310,  417 => 306,  409 => 301,  405 => 299,  402 => 298,  398 => 295,  390 => 288,  386 => 285,  368 => 270,  357 => 262,  352 => 261,  350 => 260,  346 => 258,  342 => 256,  340 => 255,  336 => 252,  334 => 251,  331 => 249,  314 => 235,  312 => 234,  309 => 233,  305 => 231,  303 => 230,  300 => 228,  298 => 227,  295 => 226,  282 => 216,  280 => 215,  277 => 213,  273 => 211,  271 => 210,  268 => 208,  266 => 207,  263 => 205,  92 => 37,  90 => 36,  86 => 33,  84 => 32,  82 => 30,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
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

    (¯`·._.·(¯`·._.· Default survey template options ._.·´¯)·._.·´¯)

    This is the form for the option parameters of the basic default template.

#}
{% set aOptions = json_decode(templateConfiguration.options)  %}

{{ registerPackage('font-roboto') }}
{{ registerPackage('font-noto') }}
{{ registerPackage('font-news_cycle') }}
{{ registerPackage('font-ubuntu') }}
{{ registerPackage('font-lato') }}
{{ registerPackage('font-websafe') }}

{{registerScriptFile(optionsPath ~ '/spectrum.js')}}
{{registerCssFile(optionsPath ~ '/spectrum.css')}}

{# The animation options are pulled from animate.css #}
{% set animationOptions = '' %}
{# For surveyspecific settings add an inherit option #}
{% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
    {% set animationOptions = animationOptions ~ '<option value = \"inherit\" > Inherit</option>' %}
{% endif %}
{# List of possible animation of animate.css #}
{% set animationOptions %}
{{animationOptions}}
<optgroup label=\"Attention Seekers\">
    <option value=\"bounce\">bounce</option>
    <option value=\"flash\">
        flash</option>
    <option value=\"pulse\">
        pulse</option>
    <option value=\"rubberBand\">
        rubberBand</option>
    <option value=\"shake\">
        shake</option>
    <option value=\"swing\">
        swing</option>
    <option value=\"tada\">
        tada</option>
    <option value=\"wobble\">
        wobble</option>
    <option value=\"jello\">
        jello</option>
</optgroup>

<optgroup label=\"Bouncing Entrances\">
    <option value=\"bounceIn\">bounceIn</option >
    <option value=\"bounceInDown\">bounceInDown</option>
    <option value=\"bounceInLeft\">
        bounceInLeft</option>
    <option value=\"bounceInRight\">
        bounceInRight</option>
    <option value=\"bounceInUp\">
        bounceInUp</option>
</optgroup>

<optgroup label=\"Bouncing Exits\">
    <option value=\"bounceOut\">bounceOut</option >
    <option value=\"bounceOutDown\">bounceOutDown</option>
    <option value=\"bounceOutLeft\">
        bounceOutLeft</option>
    <option value=\"bounceOutRight\">
        bounceOutRight</option>
    <option value=\"bounceOutUp\">
        bounceOutUp</option>
</optgroup>

<optgroup label=\"Fading Entrances\">
    <option value=\"fadeIn\">fadeIn</option >
    <option value=\"fadeInDown\">fadeInDown</option>
    <option value=\"fadeInDownBig\">
        fadeInDownBig</option>
    <option value=\"fadeInLeft\">
        fadeInLeft</option>
    <option value=\"fadeInLeftBig\">
        fadeInLeftBig</option>
    <option value=\"fadeInRight\">
        fadeInRight</option>
    <option value=\"fadeInRightBig\">
        fadeInRightBig</option>
    <option value=\"fadeInUp\">
        fadeInUp</option>
    <option value=\"fadeInUpBig\">
        fadeInUpBig</option>
</optgroup>

<optgroup label=\"Fading Exits\">
    <option value=\"fadeOut\">fadeOut</option >
    <option value=\"fadeOutDown\">fadeOutDown</option>
    <option value=\"fadeOutDownBig\">
        fadeOutDownBig</option>
    <option value=\"fadeOutLeft\">
        fadeOutLeft</option>
    <option value=\"fadeOutLeftBig\">
        fadeOutLeftBig</option>
    <option value=\"fadeOutRight\">
        fadeOutRight</option>
    <option value=\"fadeOutRightBig\">
        fadeOutRightBig</option>
    <option value=\"fadeOutUp\">
        fadeOutUp</option>
    <option value=\"fadeOutUpBig\">
        fadeOutUpBig</option>
</optgroup>

<optgroup label=\"Flippers\">
    <option value=\"flip\">flip</option >
    <option value=\"flipInX\">flipInX</option>
    <option value=\"flipInY\">
        flipInY</option>
    <option value=\"flipOutX\">
        flipOutX</option>
    <option value=\"flipOutY\">
        flipOutY</option>
</optgroup>

<optgroup label=\"Lightspeed\">
    <option value=\"lightSpeedIn\">lightSpeedIn</option >
    <option value=\"lightSpeedOut\">lightSpeedOut</option>
</optgroup>

<optgroup label=\"Rotating Entrances\">
    <option value=\"rotateIn\">rotateIn</option >
    <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
    <option value=\"rotateInDownRight\">
        rotateInDownRight</option>
    <option value=\"rotateInUpLeft\">
        rotateInUpLeft</option>
    <option value=\"rotateInUpRight\">
        rotateInUpRight</option>
</optgroup>

<optgroup label=\"Rotating Exits\">
    <option value=\"rotateOut\">rotateOut</option >
    <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
    <option value=\"rotateOutDownRight\">
        rotateOutDownRight</option>
    <option value=\"rotateOutUpLeft\">
        rotateOutUpLeft</option>
    <option value=\"rotateOutUpRight\">
        rotateOutUpRight</option>
</optgroup>

<optgroup label=\"Sliding Entrances\">
    <option value=\"slideInUp\">slideInUp</option >
    <option value=\"slideInDown\">slideInDown</option>
    <option value=\"slideInLeft\">
        slideInLeft</option>
    <option value=\"slideInRight\">
        slideInRight</option>
</optgroup>

<optgroup label=\"Sliding Exits\">
    <option value=\"slideOutUp\">slideOutUp</option >
    <option value=\"slideOutDown\">slideOutDown</option>
    <option value=\"slideOutLeft\">
        slideOutLeft</option>
    <option value=\"slideOutRight\">
        slideOutRight</option>
</optgroup>

<optgroup label=\"Zoom Entrances\">
    <option value=\"zoomIn\">zoomIn</option >
    <option value=\"zoomInDown\">zoomInDown</option>
    <option value=\"zoomInLeft\">
        zoomInLeft</option>
    <option value=\"zoomInRight\">
        zoomInRight</option>
    <option value=\"zoomInUp\">
        zoomInUp</option>
</optgroup>

<optgroup label=\"Zoom Exits\">
    <option value=\"zoomOut\">zoomOut</option >
    <option value=\"zoomOutDown\">zoomOutDown</option>
    <option value=\"zoomOutLeft\">
        zoomOutLeft</option>
    <option value=\"zoomOutRight\">
        zoomOutRight</option>
    <option value=\"zoomOutUp\">
        zoomOutUp</option>
</optgroup>

<optgroup label=\"Specials\">
    <option value=\"hinge\">hinge</option >
    <option value=\"jackInTheBox\">jackInTheBox</option>
    <option value=\"rollIn\">
        rollIn</option>
    <option value=\"rollOut\">
        rollOut</option>
</optgroup>
{% endset %}

{# The default template offers the variety of styles #}
{% set fruityOptions = '' %}

{# For surveyspecific settings add an inherit option #}
{% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
    {% set fruityOptions = fruityOptions ~ '<option value = \"inherit\" > Inherit</option>' %}
{% endif %}

{# List of Bootswatch styles #}
{% set fruityOptions %}
{{fruityOptions}}
<option value=\"css/variations/sea_green.css\">Sea Green</option>
<option value=\"css/variations/apple_blossom.css\">Apple Blossom</option>
<option value=\"css/variations/bay_of_many.css\">Bay of Many</option>
<option value=\"css/variations/black_pearl.css\">Black Pearl</option>
<option value=\"css/variations/free_magenta.css\">Free Magenta</option>
<option value=\"css/variations/purple_tentacle.css\">Purple Tentacle</option>
<option value=\"css/variations/sunset_orange.css\">Sunset Orange</option>
<option value=\"css/variations/skyline_blue.css\">Skyline Blue</option>
{% endset %}

{% set checkIconOptions = '' %}

{# Selecting different check icons #}
{% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
    {% set checkIconOptions = checkIconOptions ~ '<option value = \"inherit\" > Inherit</option>' %}
{% endif %}

{% set checkIconOptions %}
{{checkIconOptions}}
<option value=\"f00c\"> <i class=\"fa fa-check\"></i> Check </option>
<option value=\"f058\"> <i class=\"fa fa-check-circle\"></i> Check circle </option>
<option value=\"f14a\"> <i class=\"fa fa-check-square\"></i> Check square </option>
<option value=\"f111\"> <i class=\"fa fa-circle\"></i> Circle </option>
<option value=\"f067\"> <i class=\"fa fa-plus\"></i> Plus </option>
<option value=\"f0c8\"> <i class=\"fa fa-square\"></i> Square </option>
<option value=\"f005\"> <i class=\"fa fa-star\"></i> Star </option>
<option value=\"f00d\"> <i class=\"fa fa-times\"></i> Times </option>
<option value=\"f069\"> <i class=\"fa fa-asterisk\"></i> Asterisk </option>
<option value=\"f061\"> <i class=\"fa fa-arrow-right\"></i> Arrow right </option>
<option value=\"f138\"> <i class=\"fa fa-chevron-circle-right\"></i> Chevron circle right </option>
<option value=\"f1d0\"> <i class=\"fa fa-resistance\"></i> Resistance </option>
{% endset %}

{# The default template offers the variety of styles #}
{% set fontOptions = '' %}


{# For surveyspecific settings add an inherit option #}
{% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
    {% set fontOptions = fontOptions ~ '<option value = \"inherit\" > Inherit</option>' %}
{% endif %}


{% set fontOptions %}
    {{fontOptions}}
    <optgroup  label=\"{{ gT(\"Local Server\") }}\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"{{ gT(\"User browser\") }}\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
{% endset %}

<div class=\"container-fluid\" style=\"position:relative\">
    {# Small loading animation to give the scripts time to parse and render the correct values #}
    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        {# Begin template option form #}
        <form class='form action_update_options_string_form' action=''>

            {# If this is a surveyspecific settings page, offer the possibility to do a full inheritance of the parent template #}
            {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>{{gT(\"Inherit everything\" )}}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    {{ gT(\"No\") }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            {% endif %}

            {# First settings row #}
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4 col-lg-2'>

                    {# Ajaxmode setting #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'> {{ gT(\"Ajax mode\") }} </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {# Container #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> {{ gT(\"Survey container\") }} </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {# Question Border #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionborder' class='control-label'>{{ gT(\"Question borders\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='on' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='off' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    {{ gT(\"No\") }}
                                </label>

                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questionborder' value='inherit' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {# Question Shadow #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questioncontainershadow' class='control-label'>{{ gT(\"Question shadow\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='on' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='off' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questioncontainershadow' value='inherit' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {# Third settings row #}
            <div class='row action_hide_on_inherit'>
                {# Show popups #}
                <div class='col-sm-12 col-md-4 col-lg-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' {{ showpopups_disabled_qtip }}>{{ gT(\"Show popups\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" {{ showpopups_disabled }}>
                                        <input type='radio' name='showpopups' value='1' {{ showpopups_disabled }} class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        {{ gT(\"Popup\") }}
                                    </label>
                                    <label class=\"btn btn-default\" {{ showpopups_disabled }}>
                                        <input type='radio' name='showpopups' value='0' {{ showpopups_disabled }} class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        {{ gT(\"On page\") }}
                                    </label>
                                    <label class=\"btn btn-default\" {{ showpopups_disabled }}>
                                        <input type='radio' name='showpopups' value='-1' {{ showpopups_disabled }} class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        {{ gT(\"Off\") }}
                                    </label>
                                    {# If this is a root template setting, don't show the inherit button #}
                                    {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                        <label class=\"btn btn-default\" {{ showpopups_disabled }}>
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            {{ gT(\"Inherit\") }}
                                        </label>
                                    {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {# Fix num auto (and real num value) #}
                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>{{ gT(\"Fix automatically numeric value\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    {# bFixNumAuto : 1 and bNumRealValue : 0 #}
                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    {# bFixNumAuto : 0 and bNumRealValue : 0 #}
                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    {{ gT(\"For expression\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    {# bFixNumAuto : 0 and bNumRealValue : 1 #}
                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% else %}
                                    {# Since added after theme distribution and don't want reset : use empty value for leave default #}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        {{ gT(\"Default\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            {# Third settings row #}
            <div class='row action_hide_on_inherit'>
                {# zebrastriping #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_zebrastriping' class='control-label'>{{ gT(\"Zebra-striped questions\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='on' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='off' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='zebrastriping' value='inherit' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                {# stickymatrixheaders #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_stickymatrixheaders' class='control-label'>{{ gT(\"Sticky array headers\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='on' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='off' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='stickymatrixheaders' value='inherit' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                {# greyoutselected #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_greyoutselected' class='control-label'>{{ gT(\"Dim answered array rows\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='on' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='off' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='greyoutselected' value='inherit' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                {# hideprivacyinfo #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>{{ gT(\"Hide privacy info\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                {# crosshover #}
                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_crosshover' class='control-label'>{{ gT(\"Cross-hover in matrix questions\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='on' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='off' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='crosshover' value='inherit' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <div class='row action_hide_on_inherit'>

                {# Background Color #}
                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodybackgroundcolor' class='control-label'>{{ gT(\"Background color\") }}</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"bodybackgroundcolor_picker\" data-value=\"{{oParentOptions.bodybackgroundcolor}}\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"bodybackgroundcolor\" data-inheritvalue=\"{{oParentOptions.bodybackgroundcolor}}\" value=\"inherit\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_bodybackgroundcolor\" data-id=\"bodybackgroundcolor\" />
                            {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            {% endif %}

                        </div>
                    </div>
                </div>

                {# Font Color #}
                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fontcolor' class='control-label'>{{ gT(\"Font color\") }}</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"fontcolor_picker\" data-value=\"{{oParentOptions.fontcolor}}\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"fontcolor\" value=\"inherit\" data-inheritvalue=\"{{oParentOptions.fontcolor}}\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_fontcolor\" data-id=\"fontcolor\" />
                            {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

                {# Question Background Color #}
                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionbackgroundcolor' class='control-label'>{{ gT(\"Question background color\") }}</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"questionbackgroundcolor_picker\" data-value=\"{{oParentOptions.questionbackgroundcolor}}\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"questionbackgroundcolor\" value=\"inherit\" data-inheritvalue=\"{{oParentOptions.questionbackgroundcolor}}\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_questionbackgroundcolor\" data-id=\"questionbackgroundcolor\" />
                            {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

                {# Check icon #}
                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkicon' class='control-label'>{{ gT(\"Check icon\") }}</label>
                        <div class=\"input-group\">
                            <select name=\"checkicon\" value=\"\" class=\"selector_option_value_field form-control simple_edit_options_checkicon\" data-id=\"checkicon\" >
                                {{checkIconOptions}}
                            </select>
                            <div class=\"input-group-addon selector__checkicon-preview\">
                                ( <i class=\"fa\" data-inheritvalue=\"{{ oParentOptions.checkicon }}\" style=\" background-color: #328637; color: white; width: 16px; height: 16px;  padding: 3px; font-size: 11px; \">
                                    &#x{{ oParentOptions.checkicon }};
                                </i> )
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

             <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Background image #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimage' class='control-label'>{{ gT(\"Background image\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='on' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='off' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='backgroundimage' value='inherit' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-8 col-md-6'>
                    {#  Background image file selector #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimagefile' class='control-label'>{{ gT(\"Background image file\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"backgroundimage\" id='simple_edit_options_backgroundimagefile' name='backgroundimagefile'>
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <option value=\"inherit\">{{ gT(\"Inherit\") }}</option>
                                {% endif %}

                                {% set optgroup = '' %}
                                {% for image in templateConfiguration.imageFileList %}
                                {% if image.group != optgroup %}
                                {% if optgroup != '' %}
                                    </optgroup>
                                {% endif %}
                                    <optgroup label=\"{{image.group}}\">
                                {% set optgroup = image.group %}
                                {% endif %}
                                        <option data-lightbox-src=\"{{image.preview}}\" value=\"{{image.filepath}}\">{{image.filename}}</option>
                                {% endfor %}
                                    </optgroup>

                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_backgroundimagefile\"> {{ gT('Preview image')}}</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Brandlogo #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'> {{ gT(\"Logo\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    {#  Brandlogo file selector #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>{{ gT(\"Logo file\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <option value=\"inherit\">Inherit</option>
                                {% endif %}
                                {% set optgroup = '' %}
                                {% for image in templateConfiguration.imageFileList %}
                                {% if image.group != optgroup %}
                                {% if optgroup != '' %}
                                    </optgroup>
                                {% endif %}
                                    <optgroup label=\"{{image.group}}\">
                                {% set optgroup = image.group %}
                                {% endif %}
                                        <option data-lightbox-src=\"{{image.preview}}\" value=\"{{image.filepath}}\">{{image.filename}}</option>
                                {% endfor %}
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> {{ gT('Preview image')}}</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    <div class='form-group row'>
                        {# Animate body On/Off #}
                        <label for='simple_edit_options_animatebody' class='control-label'>{{ gT(\"Animate body\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    {# Animate body -> Animation type #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimation' class='control-label'>{{ gT(\"Body animation\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimation' name='bodyanimation'>
                                {{animationOptions}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    {# Animate body -> Animation type duration #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimationduration' class='control-label'>{{ gT(\"Duration\") }}</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimationduration' name='bodyanimationduration' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Animate question -> On/Off #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_animatequestion' class='control-label'>{{ gT(\"Animate question\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    {# Animate question -> Animation type #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimation' class='control-label'>{{ gT(\"Question animation\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimation' name='questionanimation'>
                                {{animationOptions}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    {# Animate question -> Animation type #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimationduration' class='control-label'>{{ gT(\"Duration\") }}</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimationduration' name='questionanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            {# Animate alert #}
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Animate alert -> On/Off #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_animatealert' class='control-label'>{{ gT(\"Animate alert\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    {# Animate alert -> Animation options #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimation' class='control-label'>{{ gT(\"Alert animation\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimation' name='alertanimation'>
                                {{animationOptions}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    {# Animate alert -> Animation options #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimationduration' class='control-label'>{{ gT(\"Duration\") }}</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimationduration' name='alertanimationduration'/>
                        </div>
                    </div>
                </div>
            </div>

            {# Animate checkbox #}
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Animate alert -> On/Off #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_animatecheckbox' class='control-label'>{{ gT(\"Animate checkbox\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    {# Animate alert -> Animation options #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimation' class='control-label'>{{ gT(\"Alert animation\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimation' name='checkboxanimation'>
                                {{animationOptions}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    {# Animate alert -> Animation options #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimationduration' class='control-label'>{{ gT(\"Duration\") }}</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimationduration' name='checkboxanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            {# Animate radio #}
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Animate alert -> On/Off #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_animateradio' class='control-label'>{{ gT(\"Animate radio buttons\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    {{ gT(\"Yes\") }}
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    {{ gT(\"No\") }}
                                </label>
                                {# If this is a root template setting, don't show the inherit button #}
                                {% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                        {{ gT(\"Inherit\") }}
                                    </label>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {# Animate alert -> Animation options #}
                <div class='col-sm-10 col-md-6'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimation' class='control-label'>{{ gT(\"Radio button animation\") }}</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimation' name='radioanimation'>
                                {{animationOptions}}
                            </select>
                        </div>
                    </div>
                </div>
                {# Animate alert -> Animation options #}
                <div class='col-sm-2'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimationduration' class='control-label'>{{ gT(\"Duration\") }}</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimationduration' name='radioanimationduration' />
                        </div>
                    </div>
                </div>
            </div>            
            <div class='row ls-space margin top-15 bottom-15 action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>{{ sprintf( gT(\"%s fonts\"), templateConfiguration.template_name)|capitalize }}</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>{{ gT(\"Select font:\") }}</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='{{oParentOptions.packages_to_load}}'>
                                        {{ fontOptions }}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>
            {# Fruity variation #}
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>{{ sprintf( gT(\"%s variations\"), templateConfiguration.template_name)|capitalize }} </div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_add_css' class='control-label'>{{ gT(\"Select variation:\") }}</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_add_css' name='cssframework' data-inheritvalue='{{oParentOptions.files_css}}'>
                                        {{fruityOptions}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>{{ gT(\"Save\") }} </button>
                </div>
            </div>
        </form>
    </div>
    <div class='row action_hide_on_inherit'>
        {# Upload an image #}
        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    {{ sprintf( gT(\"Upload an image (maximum size: %d MB):\"), (templateConfiguration.maxFileSize/1024/1024) ) }}
                </div>
                <div class=\"col-sm-6\">
                {{ C.Html.form(createUrl('/admin/themes/sa/upload'), 'post', { 'id' : 'upload_frontend', 'name' : 'upload_frontend', 'enctype' :'multipart/form-data' }) }}
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            {{ gT(\"Upload\") }}
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='{{ templateConfiguration.template_name }}' />
                        <input type='hidden' name='templateconfig' value='{{ templateConfiguration.id }}' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "__string_template__231283d56dbab19f156c1a5b9789a9b724fff6dc9535292e3ecd7e6a0bb83050", "");
    }
}
