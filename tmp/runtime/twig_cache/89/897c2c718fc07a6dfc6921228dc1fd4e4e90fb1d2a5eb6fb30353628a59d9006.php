<?php

/* __string_template__baf6aeee7f88a9293b6006ae82235dd8ddbb23b2a1917921b81d8d99460396b3 */
class __TwigTemplate_5cd349b574f1be0668326647747fd695451ed8039841211f2536bb808081f34f extends Twig_Template
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
        $tags = array("set" => 26, "if" => 29, "for" => 286);
        $filters = array("json_encode" => 319);
        $functions = array("registerPackage" => 18, "gT" => 35, "sprintf" => 341, "createUrl" => 344);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('json_encode'),
                array('registerPackage', 'gT', 'sprintf', 'createUrl')
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
        echo "
";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-roboto"));
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-noto"));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-news_cycle"));
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-ubuntu"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-lato"));
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-websafe"));
        echo "

";
        // line 26
        $context["fontOptions"] = "";
        // line 27
        echo "
";
        // line 29
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 30
            echo "    ";
            $context["fontOptions"] = (($context["fontOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 32
        echo "
";
        // line 33
        ob_start();
        // line 34
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Local Server"));
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 43
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
        // line 58
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 61
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 68
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 71
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 72
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 83
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
        // line 93
        echo "
            ";
        // line 95
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-2'>
                    ";
        // line 98
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'>";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Ajax mode"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 111
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 112
            echo "                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 117
        echo "                            </div>
                        </div>
                    </div>
                </div>



                ";
        // line 125
        echo "                <div class='col-sm-12 col-md-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey container"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 139
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 140
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 145
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 151
        echo "                <div class='col-sm-12 col-md-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Hide privacy info"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 165
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 166
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 171
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 177
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Show popups"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 182
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 183
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Popup"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 186
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 187
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("On page"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Off"));
        echo "
                                    </label>
                                    ";
        // line 195
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 196
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                        </label>
                                    ";
        }
        // line 201
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 207
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fix automatically numeric value"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    ";
        // line 214
        echo "                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 215
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 219
        echo "                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 220
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("For expression"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 224
        echo "                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 225
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 227
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 228
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        } else {
            // line 233
            echo "                                    ";
            // line 234
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 236
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Default"));
            echo "
                                    </label>
                                ";
        }
        // line 239
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <!-- Brand Logo -->
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 253
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'>Brandlogo</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 259
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 263
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 266
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 267
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 269
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 272
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 278
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>Brandlogo file</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 282
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 283
            echo "                                    <option value=\"inherit\">Inherit</option>
                                ";
        }
        // line 285
        echo "                                ";
        $context["optgroup"] = "";
        // line 286
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 287
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 288
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 289
                    echo "                                    </optgroup>
                                ";
                }
                // line 291
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 292
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 293
                echo "                                ";
            }
            // line 294
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
        // line 296
        echo "                                    </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 303
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 314
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fruity fonts"));
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 317
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select font:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 319
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_jsonencode_filter($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", array())));
        echo "'>
                                        ";
        // line 320
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
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
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>Save</button>
                </div>
            </div>
        </form>
    </div>

    <div class='row action_hide_on_inherit'>
        ";
        // line 338
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 341
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 344
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 349
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>
                        <input type='hidden' name='surveyid' value='";
        // line 352
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array()));
        echo "' />
                        <input type='hidden' name='templatename' value='";
        // line 353
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 354
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
        return "__string_template__baf6aeee7f88a9293b6006ae82235dd8ddbb23b2a1917921b81d8d99460396b3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 354,  641 => 353,  637 => 352,  631 => 349,  623 => 344,  617 => 341,  612 => 338,  592 => 320,  588 => 319,  583 => 317,  577 => 314,  563 => 303,  554 => 296,  541 => 294,  538 => 293,  536 => 292,  531 => 291,  527 => 289,  524 => 288,  521 => 287,  516 => 286,  513 => 285,  509 => 283,  507 => 282,  501 => 278,  494 => 272,  488 => 269,  484 => 267,  481 => 266,  476 => 263,  469 => 259,  461 => 253,  446 => 239,  440 => 236,  436 => 234,  434 => 233,  428 => 230,  424 => 228,  422 => 227,  417 => 225,  414 => 224,  408 => 220,  405 => 219,  399 => 215,  396 => 214,  389 => 209,  385 => 207,  378 => 201,  372 => 198,  366 => 196,  363 => 195,  358 => 192,  354 => 191,  350 => 190,  345 => 188,  341 => 187,  337 => 186,  332 => 184,  328 => 183,  324 => 182,  316 => 179,  312 => 177,  305 => 171,  299 => 168,  295 => 166,  292 => 165,  287 => 162,  280 => 158,  272 => 153,  268 => 151,  261 => 145,  255 => 142,  251 => 140,  248 => 139,  243 => 136,  236 => 132,  228 => 127,  224 => 125,  215 => 117,  209 => 114,  205 => 112,  202 => 111,  197 => 108,  190 => 104,  182 => 99,  179 => 98,  175 => 95,  172 => 93,  159 => 83,  152 => 79,  144 => 74,  140 => 72,  137 => 71,  133 => 68,  125 => 61,  121 => 58,  103 => 43,  92 => 35,  87 => 34,  85 => 33,  82 => 32,  78 => 30,  76 => 29,  73 => 27,  71 => 26,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  43 => 17,);
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

{{ registerPackage('font-roboto') }}
{{ registerPackage('font-noto') }}
{{ registerPackage('font-news_cycle') }}
{{ registerPackage('font-ubuntu') }}
{{ registerPackage('font-lato') }}
{{ registerPackage('font-websafe') }}

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
                <div class='col-sm-12 col-md-2'>
                    {# Ajaxmode setting #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'>{{ gT(\"Ajax mode\") }}</label>
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
                <div class='col-sm-12 col-md-2'>
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

                {# hideprivacyinfo #}
                <div class='col-sm-12 col-md-2'>
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

                {# Show popups #}
                <div class='col-sm-12 col-md-3'>
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
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <!-- Brand Logo -->
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    {# Brandlogo #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'>Brandlogo</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    {{gT(\"Yes\" )}}
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
                        <label for='simple_edit_options_brandlogofile' class='control-label'>Brandlogo file</label>
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

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>{{ gT(\"Fruity fonts\") }}</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>{{ gT(\"Select font:\") }}</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='{{oParentOptions.packages_to_load|json_encode}}'>
                                        {{ fontOptions }}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>Save</button>
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
                        <input type='hidden' name='surveyid' value='{{ templateConfiguration.sid }}' />
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
", "__string_template__baf6aeee7f88a9293b6006ae82235dd8ddbb23b2a1917921b81d8d99460396b3", "");
    }
}
