<?php

/* __string_template__2e1491dc50e93cbcbbb81b6035271396400f87d0a599770dfe345fd88da3b096 */
class __TwigTemplate_5871d84967c6eed7835d7e8a397197bee06b1f26e115dd3d3b46ea73b3cc9472 extends Twig_Template
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
        $tags = array("set" => 24, "if" => 26, "for" => 246);
        $filters = array();
        $functions = array("gT" => 87, "sprintf" => 297, "createUrl" => 300);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
                array('gT', 'sprintf', 'createUrl')
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
        // line 23
        echo "
";
        // line 24
        $context["bootswatchOption"] = "";
        // line 26
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 27
            echo "    ";
            $context["bootswatchOption"] = (($context["bootswatchOption"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 30
        ob_start();
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["bootswatchOption"] ?? null));
        echo "
<option value=\"css/variations/basic.min.css\">
    Basic Bootstrap</option>
<option value=\"css/variations/cerulean.min.css\">
    Cerulean</option>
<option value=\"css/variations/cosmos.min.css\">
    Cosmos</option>
<option value=\"css/variations/cyborg.min.css\">
    Cyborg</option>
<option value=\"css/variations/darkly.min.css\">
    Darkly</option>
<option value=\"css/variations/flatly.min.css\">
    Flatly</option>
<option value=\"css/variations/journal.min.css\">
    Journal</option>
<option value=\"css/variations/lumen.min.css\">
    Lumen</option>
<option value=\"css/variations/paper.min.css\">
    Paper</option>
<option value=\"css/variations/readable.min.css\">
    Readable</option>
<option value=\"css/variations/sandstone.min.css\">
    Sandstone</option>
<option value=\"css/variations/simplex.min.css\">
    Simplex</option>
<option value=\"css/variations/slate.min.css\">
    Slate</option>
<option value=\"css/variations/spacelab.min.css\">
    Spacelab</option>
<option value=\"css/variations/superhero.min.css\">
    Superhero</option>
<option value=\"css/variations/united.min.css\">
    United</option>
<option value=\"css/variations/yeti.min.css\">
    Yeti</option>
";
        $context["bootswatchOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 67
        echo "

";
        // line 72
        echo "<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 74
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 81
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 84
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 85
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 96
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
        // line 106
        echo "
            ";
        // line 108
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-2 col-lg-2'>
                    ";
        // line 111
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'>";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Ajax mode"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 124
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 125
            echo "                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        ";
            // line 127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 130
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-12 col-md-3 col-lg-3'>
                    ";
        // line 137
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Show popups"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Popup"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 145
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 147
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("On page"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Off"));
        echo "
                                    </label>
                                    ";
        // line 154
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 155
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                        </label>
                                    ";
        }
        // line 160
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 166
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fix automatically numeric value"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    ";
        // line 173
        echo "                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 178
        echo "                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("For expression"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 183
        echo "                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 186
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 187
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 189
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        } else {
            // line 192
            echo "                                    ";
            // line 193
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 195
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Default"));
            echo "
                                    </label>
                                ";
        }
        // line 198
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
        // line 212
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'>Brandlogo</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 222
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 225
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 226
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 228
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 231
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 237
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>Brandlogo file</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 241
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 242
            echo "                                    <option value=\"inherit\">Inherit</option>
                                ";
        }
        // line 244
        echo "
                                ";
        // line 245
        $context["optgroup"] = "";
        // line 246
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 247
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 248
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 249
                    echo "                                    </optgroup>
                                ";
                }
                // line 251
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 252
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 253
                echo "                                ";
            }
            // line 254
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
        // line 256
        echo "                                    </optgroup>

                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 264
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
                        <div class='panel-heading'>Bootstrap theme</div>
                        <div class='panel-body'>
                            ";
        // line 276
        echo "                            <div class='form-group row'>
                                <label for='simple_edit_cssframework' class='control-label'>Bootswatch theme</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_cssframework' name='cssframework'>
                                        ";
        // line 280
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["bootswatchOption"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class='row action_hide_on_inherit'>
        ";
        // line 294
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 297
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 300
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 305
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='";
        // line 309
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 310
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
        return "__string_template__2e1491dc50e93cbcbbb81b6035271396400f87d0a599770dfe345fd88da3b096";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 310,  520 => 309,  513 => 305,  505 => 300,  499 => 297,  494 => 294,  478 => 280,  472 => 276,  458 => 264,  448 => 256,  435 => 254,  432 => 253,  430 => 252,  425 => 251,  421 => 249,  418 => 248,  415 => 247,  410 => 246,  408 => 245,  405 => 244,  401 => 242,  399 => 241,  393 => 237,  386 => 231,  380 => 228,  376 => 226,  373 => 225,  368 => 222,  361 => 218,  353 => 212,  338 => 198,  332 => 195,  328 => 193,  326 => 192,  320 => 189,  316 => 187,  314 => 186,  309 => 184,  306 => 183,  300 => 179,  297 => 178,  291 => 174,  288 => 173,  281 => 168,  277 => 166,  270 => 160,  264 => 157,  258 => 155,  255 => 154,  250 => 151,  246 => 150,  242 => 149,  237 => 147,  233 => 146,  229 => 145,  224 => 143,  220 => 142,  216 => 141,  208 => 138,  205 => 137,  197 => 130,  191 => 127,  187 => 125,  184 => 124,  179 => 121,  172 => 117,  164 => 112,  161 => 111,  157 => 108,  154 => 106,  141 => 96,  134 => 92,  126 => 87,  122 => 85,  119 => 84,  115 => 81,  107 => 74,  104 => 72,  100 => 67,  61 => 31,  59 => 30,  55 => 27,  53 => 26,  51 => 24,  48 => 23,  43 => 17,);
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



{#
    The default template offers the variety of the basic bootswatch styles
#}

{% set bootswatchOption = '' %}
{# For surveyspecific settings add an inherit option #}
{% if templateConfiguration.sid is not empty or templateConfiguration.gsid is not empty %}
    {% set bootswatchOption = bootswatchOption ~ '<option value = \"inherit\" > Inherit</option>' %}
{% endif %}
{# List of Bootswatch styles #}
{% set bootswatchOption %}
{{bootswatchOption}}
<option value=\"css/variations/basic.min.css\">
    Basic Bootstrap</option>
<option value=\"css/variations/cerulean.min.css\">
    Cerulean</option>
<option value=\"css/variations/cosmos.min.css\">
    Cosmos</option>
<option value=\"css/variations/cyborg.min.css\">
    Cyborg</option>
<option value=\"css/variations/darkly.min.css\">
    Darkly</option>
<option value=\"css/variations/flatly.min.css\">
    Flatly</option>
<option value=\"css/variations/journal.min.css\">
    Journal</option>
<option value=\"css/variations/lumen.min.css\">
    Lumen</option>
<option value=\"css/variations/paper.min.css\">
    Paper</option>
<option value=\"css/variations/readable.min.css\">
    Readable</option>
<option value=\"css/variations/sandstone.min.css\">
    Sandstone</option>
<option value=\"css/variations/simplex.min.css\">
    Simplex</option>
<option value=\"css/variations/slate.min.css\">
    Slate</option>
<option value=\"css/variations/spacelab.min.css\">
    Spacelab</option>
<option value=\"css/variations/superhero.min.css\">
    Superhero</option>
<option value=\"css/variations/united.min.css\">
    United</option>
<option value=\"css/variations/yeti.min.css\">
    Yeti</option>
{% endset %}


{#
    The options page
#}
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
                                    {{ gT(\"Yes\" ) }}
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
                <div class='col-sm-12 col-md-2 col-lg-2'>
                    {# Ajaxmode setting #}
                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'>{{ gT(\"Ajax mode\") }}</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    {{ gT(\"Yes\" ) }}
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

                <div class='col-sm-12 col-md-3 col-lg-3'>
                    {# Show popups #}
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
                        <div class='panel-heading'>Bootstrap theme</div>
                        <div class='panel-body'>
                            {# Bootstrap Bootswatch theme #}
                            <div class='form-group row'>
                                <label for='simple_edit_cssframework' class='control-label'>Bootswatch theme</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_cssframework' name='cssframework'>
                                        {{bootswatchOption}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
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
", "__string_template__2e1491dc50e93cbcbbb81b6035271396400f87d0a599770dfe345fd88da3b096", "");
    }
}
