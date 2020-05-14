<?php

/* @galleries/settings.twig */
class __TwigTemplate_9d6566fad113b12d6934ba447243c8d5d260b593c12cbebfd501607b0478d95a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'area' => array($this, 'block_area'),
            'openByLink' => array($this, 'block_openByLink'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'icons' => array($this, 'block_icons'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $this->getAttribute($_gallery_, "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
            ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
            ";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
            ";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "
        </a>
        ";
        // line 59
        $this->displayBlock('tabs', $context, $blocks);
        // line 60
        echo "    </h2>
";
    }

    // line 59
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 63
    public function block_preview($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "watermark", array(), "any", true, true)) {
            // line 65
            echo "        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute($_settings_, "watermark", array()), array("galleryId" => $this->getAttribute($_gallery_, "id", array())));
            // line 66
            echo "        ";
            if (isset($context["settingsWatermark"])) { $_settingsWatermark_ = $context["settingsWatermark"]; } else { $_settingsWatermark_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", $_settingsWatermark_)), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 69);
        // line 70
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 81
        echo "
                <li title=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 83
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 91
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <a class=\"button button-primary\" target=\"_blank\"
                       href=\"";
        // line 99
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-eye\"></i>
                        ";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 113
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if ( !twig_test_empty($this->getAttribute($_gallery_, "photos", array()))) {
            // line 114
            echo "            <div style=\"
            ";
            // line 115
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array())))) {
                // line 116
                echo "                width:";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array()), "html", null, true);
                echo "px;
            ";
            }
            // line 118
            echo "            margin: 10px auto;
            max-width: 380px;
            clear:both;
            \">
                <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\">
                   ";
            // line 123
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 124
            echo "
                    ";
            // line 125
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
                // line 126
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
                // line 127
                echo "                    ";
            }
            // line 128
            echo "
                    ";
            // line 129
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
                // line 130
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
                // line 131
                echo "                    ";
            }
            // line 132
            echo "
                    ";
            // line 133
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3"))) {
                // line 134
                echo "                        ";
                $context["crop"] = 1;
                // line 135
                echo "                    ";
            } else {
                // line 136
                echo "                        ";
                $context["height"] = null;
                // line 137
                echo "                    ";
            }
            // line 138
            echo "
                    ";
            // line 139
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 140
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["cropQuality"] = $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "cropQuality", array());
                // line 141
                echo "                    ";
            } else {
                // line 142
                echo "                        ";
                $context["cropQuality"] = null;
                // line 143
                echo "                    ";
            }
            // line 144
            echo "                    <img src=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            if (isset($context["crop"])) { $_crop_ = $context["crop"]; } else { $_crop_ = null; }
            if (isset($context["cropQuality"])) { $_cropQuality_ = $context["cropQuality"]; } else { $_cropQuality_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), $_width_, $_height_, $_crop_, $_cropQuality_)), "html", null, true);
            echo "\" data-src=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute($_gallery_, "title", array())), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo $this->getAttribute($_gallery_, "title", array());
            echo "\" style=\"width: auto; height: auto;\"/>
                    <figcaption style=\"";
            // line 145
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
            echo "\">
                        <div style=\"display: table; height: 100%; width: 100%;\">
                            <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                <span>Gallery by Supsystic</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        ";
        } else {
            // line 155
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 157
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 161
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($_gallery_, "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\">
            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 173
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 179);
        // line 180
        echo "    ";
        $context["f"] = $this;
        // line 181
        echo "
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 183
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo $_form_->getopen("post", $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()), "_wpnonce" => $__wpnonce_)), "method"), array("id" => "form-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 184
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_settings_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 185
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 186
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 187
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>

        <div data-tab=\"area\">
            ";
        // line 190
        $this->displayBlock('area', $context, $blocks);
        // line 313
        echo "
            ";
        // line 314
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 458
        echo "
            ";
        // line 459
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 497
        echo "
            <div class=\"load-more-button-preview\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 500
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 502
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 505
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 506
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 515
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")), $_form_->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        // line 516
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

            ";
        // line 522
        $this->displayBlock('border', $context, $blocks);
        // line 567
        echo "
            ";
        // line 568
        $this->displayBlock('shadow', $context, $blocks);
        // line 634
        echo "
            ";
        // line 635
        $this->displayBlock('popup', $context, $blocks);
        // line 910
        echo "
            ";
        // line 911
        $this->displayBlock('preload', $context, $blocks);
        // line 963
        echo "        </div>

        ";
        // line 965
        $this->displayBlock('post', $context, $blocks);
        // line 982
        echo "
        <div data-tab=\"overlay\">
            <table class=\"form-table\" name=\"captions\">
                <thead>
                    ";
        // line 987
        echo "                    ";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 1016
        echo "                    ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1023
        echo "                    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1024
        echo "                    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1025
        echo "
                    ";
        // line 1027
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["enableCaptions"])) { $_enableCaptions_ = $context["enableCaptions"]; } else { $_enableCaptions_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), ((($_form_->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), (($_enableCaptions_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) . $_form_->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), (($_enableCaptions_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1047
        echo "

                    ";
        // line 1050
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), ($_form_->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")) . $_form_->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"))), "chooseEffect");
        // line 1062
        echo "

                    ";
        // line 1065
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")), $_form_->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1073
        echo "

                    ";
        // line 1076
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["polaroidIsEnable"])) { $_polaroidIsEnable_ = $context["polaroidIsEnable"]; } else { $_polaroidIsEnable_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")), $_form_->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), $_polaroidIsEnable_, array("style" => "width: auto;")), "polaroid-effect");
        // line 1084
        echo "

                    ";
        // line 1087
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")), $_form_->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1095
        echo "

                    ";
        // line 1098
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")), $_form_->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1106
        echo "

                    ";
        // line 1109
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")), $_form_->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width");
        // line 1117
        echo "

                    ";
        // line 1120
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1127
        echo "

                    ";
        // line 1130
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")), $_form_->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1137
        echo "

                    ";
        // line 1140
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1148
        echo "

                    ";
        // line 1151
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), ($_form_->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1165
        echo "

                    ";
        // line 1168
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")), $_form_->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1176
        echo "

                    ";
        // line 1179
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")), $_form_->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1187
        echo "

                    ";
        // line 1190
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["fontList"])) { $_fontList_ = $context["fontList"]; } else { $_fontList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")), $_form_->getselectv("thumbnail[overlay][font_family]", $_fontList_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1198
        echo "


                    ";
        // line 1202
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")), $_form_->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1210
        echo "

                    ";
        // line 1213
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")), $_form_->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1220
        echo "

                    ";
        // line 1223
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")), $_form_->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1230
        echo "
                </thead>
            </table>

            <div class=\"separator\"></div>

            ";
        // line 1236
        $this->displayBlock('icons', $context, $blocks);
        // line 1363
        echo "        </div>

        ";
        // line 1365
        $this->displayBlock('categories', $context, $blocks);
        // line 1396
        echo "
        ";
        // line 1397
        $this->displayBlock('watermark', $context, $blocks);
        // line 1412
        echo "
        ";
        // line 1413
        $this->displayBlock('form', $context, $blocks);
        // line 1415
        echo "
        ";
        // line 1416
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1418
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1421
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1425
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1426
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1432
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute($_preset_, "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1434
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1437
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1439
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1446
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1450
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1455
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1457
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1460
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1469
        echo "
                ";
        // line 1470
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ($this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 1471
            echo "                    ";
            if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
            $context["bigImageThemes"] = twig_array_merge($_bigImageThemes_, array("theme_1_pro" => "Fullscreen popup"));
            // line 1472
            echo "                ";
        }
        // line 1473
        echo "
                ";
        // line 1474
        if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_bigImageThemes_);
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1475
            echo "                    <div class=\"grid-gallery-caption\">
                        <img data-name=\"";
            // line 1476
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" data-val=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1477
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $_value_), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                             title=\"";
            // line 1478
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1480
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1484
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1488
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1490
        if (isset($context["effects"])) { $_effects_ = $context["effects"]; } else { $_effects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_effects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1491
            echo "                    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "direction-aware")) {
                // line 1492
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1500
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1503
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } elseif (($_type_ == "3d-cube")) {
                // line 1507
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1518
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1520
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1522
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1528
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1532
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1533
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1534
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1537
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1542
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1546
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1547
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1548
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
        // line 1550
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1574
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1578
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1580
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1583
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1655
        echo "

                ";
        // line 1657
        if (isset($context["shadowPresets"])) { $_shadowPresets_ = $context["shadowPresets"]; } else { $_shadowPresets_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_shadowPresets_);
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1658
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1659
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1660
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1661
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1664
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1668
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1691
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1695
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1699
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1699);
        // line 1700
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1701
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_importTypes_->getshow(400, $this->getAttribute($_gallery_, "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1704
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1705
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1706
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1709
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1711
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1718
        $this->displayBlock('modals', $context, $blocks);
    }

    // line 190
    public function block_area($context, array $blocks = array())
    {
        // line 191
        echo "                <table class=\"form-table\" name=\"area\">
                    <thead>
                        ";
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")), $_form_->getselect("area[grid]", array(0 => "Fixed", 1 => "Vertical", 2 => "Horizontal", 3 => "Fixed Columns"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 194
        echo "
        \t\t\t\t
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 200
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 206
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 210
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), ((((((((((((($_form_->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")), "responsive-columns");
        // line 219
        echo "

                        ";
        // line 223
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 224
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), $_form_->getinput("text", "title", $this->getAttribute($_gallery_, "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 226
        echo "

                        ";
        // line 228
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow($this->getAttribute($_environment_, "translate", array(0 => "Gallery Position"), "method"), $_form_->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        // line 229
        echo "


                        ";
        // line 232
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), ($_form_->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "distance");
        // line 234
        echo "

                        ";
        // line 236
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), ($_form_->getinput("number", "area[width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        // line 238
        echo "

                        ";
        // line 241
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")), $_form_->getcheckbox("fullscreen", "1", (($this->getAttribute($_settings_, "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "enabled");
        // line 248
        echo "

                        ";
        // line 250
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), ($_form_->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $_form_->getspan("", "pixels")), "area-padding");
        // line 251
        echo "

                        ";
        // line 258
        echo "
                        ";
        // line 259
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), ($_form_->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        // line 261
        echo "


                        ";
        // line 264
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), ($_form_->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        // line 266
        echo "

                        ";
        // line 268
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), ($_form_->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        // line 270
        echo "
                   
                        ";
        // line 273
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 285
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["qualityList"])) { $_qualityList_ = $context["qualityList"]; } else { $_qualityList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")), $_form_->getselect("thumbnail[cropQuality]", $_qualityList_, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 292
        echo "

                        ";
        // line 294
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")), $_form_->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo");
        // line 295
        echo "

                        ";
        // line 297
        $this->displayBlock('openByLink', $context, $blocks);
        // line 305
        echo "

                        ";
        // line 307
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 309
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 297
    public function block_openByLink($context, array $blocks = array())
    {
        // line 298
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link", $_form_->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 303
        echo "
                        ";
    }

    // line 307
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 308
        echo "                        ";
    }

    // line 314
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 315
        echo "                <table class=\"form-table\">
                    <thead>
                    ";
        // line 317
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), ((($_form_->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) . $_form_->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        // line 321
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 324
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "pluginInstalled", array())) {
            // line 325
            echo "                        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()))) {
                // line 326
                echo "

                            ";
                // line 328
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")), $_form_->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 333
                echo "

                            ";
                // line 335
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")), $_form_->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                // line 336
                echo "

                            ";
                // line 338
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 347
                echo "

                            ";
                // line 349
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                // line 350
                echo "

                            ";
                // line 352
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 353
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")), $_form_->getcheckbox("socialSharing[imageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                // line 354
                echo "

                            ";
                // line 356
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 366
                echo "

                            ";
                // line 368
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 377
                echo "

                            ";
                // line 379
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 388
                echo "

                            ";
                // line 390
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                // line 391
                echo "

                            ";
                // line 393
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 394
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")), $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                // line 395
                echo "

                            ";
                // line 397
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 407
                echo "

                            ";
                // line 409
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 418
                echo "

                            ";
                // line 420
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 429
                echo "

                        ";
            } else {
                // line 432
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 434
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 437
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 438
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 442
            echo "                    ";
        } else {
            // line 443
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 445
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 447
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 448
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 449
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 454
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 459
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 460
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 462
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 463
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["horizontalScrollEnabled"])) { $_horizontalScrollEnabled_ = $context["horizontalScrollEnabled"]; } else { $_horizontalScrollEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), ((($_form_->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (($_horizontalScrollEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) . $_form_->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (($_horizontalScrollEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        // line 467
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 470
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")), $_form_->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        // line 471
        echo "

                        ";
        // line 473
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")), $_form_->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 489
        echo "

                        ";
        // line 491
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 493
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 491
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 492
        echo "                        ";
    }

    // line 522
    public function block_border($context, array $blocks = array())
    {
        // line 523
        echo "                <table class=\"form-table\" name=\"border\">
                    <thead>
                        ";
        // line 525
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 536
        echo "
                        ";
        // line 552
        echo "
                        ";
        // line 553
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["borderTypes"])) { $_borderTypes_ = $context["borderTypes"]; } else { $_borderTypes_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), ($_form_->getselect("thumbnail[border][type]", $_borderTypes_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) . $_form_->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        // line 555
        echo "

                        ";
        // line 557
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")), $_form_->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        // line 558
        echo "

                        ";
        // line 560
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), ($_form_->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "border-width");
        // line 562
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 568
    public function block_shadow($context, array $blocks = array())
    {
        // line 569
        echo "                <table class=\"form-table\" name=\"shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 574
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 578
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 579
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 580
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 581
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 592
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 599
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 603
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 604
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 606
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 607
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 609
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 610
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 616
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")), $_form_->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        // line 617
        echo "

                        ";
        // line 619
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")), $_form_->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        // line 620
        echo "

                        ";
        // line 622
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")), $_form_->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        // line 623
        echo "

                        ";
        // line 625
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")), $_form_->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        // line 626
        echo "

                        ";
        // line 628
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")), $_form_->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        // line 629
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 635
    public function block_popup($context, array $blocks = array())
    {
        // line 636
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 639
        echo "                        ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 640
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["popUpEnabled"])) { $_popUpEnabled_ = $context["popUpEnabled"]; } else { $_popUpEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), ((($_form_->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), (($_popUpEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) . $_form_->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), (($_popUpEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 659
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 663
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), (($_form_->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) . $_form_->gethidden("box[type]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()))) . $_form_->gethidden("box[theme]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 678
        echo "

                        ";
        // line 681
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")), $_form_->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 688
        echo "

                        ";
        // line 691
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")), $_form_->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")));
        // line 703
        echo "

                        ";
        // line 706
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 730
        echo "
                        ";
        // line 732
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")), $_form_->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 739
        echo "

                        ";
        // line 741
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")), $_form_->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute($_settings_, "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 747
        echo "

                        ";
        // line 750
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("box[background]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 757
        echo "
                        
                        ";
        // line 760
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 779
        echo "

                        ";
        // line 782
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")), $_form_->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 790
        echo "

                        ";
        // line 793
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")), $_form_->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 801
        echo "

                        ";
        // line 804
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")), $_form_->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 813
        echo "

                        ";
        // line 816
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")), $_form_->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 824
        echo "

                        ";
        // line 827
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), ((($_form_->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) . $_form_->getspan("", "x")) . $_form_->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) . $_form_->getspan("", "pixels")), "box-popupsize");
        // line 843
        echo "


                        ";
        // line 847
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")), $_form_->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 855
        echo "

                        ";
        // line 858
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 906
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 706
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 707
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 710
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 712
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 716
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 726
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 858
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 859
        echo "                            ";
        // line 860
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", ((($_form_->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) . $_form_->getspan("", "x")) . $_form_->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) . $_form_->getspan("", "pixels")));
        // line 875
        echo "

                            ";
        // line 878
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay", $_form_->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 887
        echo "
                            
                            ";
        // line 890
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd", $_form_->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 903
        echo "

                        ";
    }

    // line 911
    public function block_preload($context, array $blocks = array())
    {
        // line 912
        echo "                <table class=\"form-table\" name=\"preload\">
                    <thead>
                        ";
        // line 914
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 915
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["preloadEnabled"])) { $_preloadEnabled_ = $context["preloadEnabled"]; } else { $_preloadEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), ((($_form_->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (($_preloadEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) . $_form_->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (($_preloadEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        // line 919
        echo "
                    </thead>
                ";
        // line 921
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ( !$this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 922
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 926
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 928
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 932
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 935
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 945
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 949
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 951
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 955
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 956
            if (isset($context["piconImg"])) { $_piconImg_ = $context["piconImg"]; } else { $_piconImg_ = null; }
            echo twig_escape_filter($this->env, $_piconImg_, "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 961
        echo "                </table>
            ";
    }

    // line 965
    public function block_post($context, array $blocks = array())
    {
        // line 966
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 968
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 971
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 976
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 977
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1236
    public function block_icons($context, array $blocks = array())
    {
        // line 1237
        echo "                <table class=\"form-table\" name=\"icons\">
                    <thead>
                        ";
        // line 1239
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1240
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["iconsEnabled"])) { $_iconsEnabled_ = $context["iconsEnabled"]; } else { $_iconsEnabled_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), ((($_form_->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (($_iconsEnabled_) ? (array("checked" => "checked")) : (array())))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) . $_form_->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (($_iconsEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1244
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 1247
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), ($_form_->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")) . $_form_->gethidden("icons[effect]", $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), array("id" => "iconsEffectName"))));
        // line 1250
        echo "
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsColor\">
                                    ";
        // line 1254
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1258
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsHoverColor\">
                                    ";
        // line 1264
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1268
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundColor\">
                                    ";
        // line 1274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1278
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundHoverColor\">
                                    ";
        // line 1284
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1288
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsSize\">
                                    ";
        // line 1294
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1298
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsMargin\">
                                    ";
        // line 1304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1308
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsOverlay\">
                                    ";
        // line 1314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
                                    <option value=\"true\" ";
        // line 1319
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "true");
        echo ">
                                        ";
        // line 1320
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"false\" ";
        // line 1322
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "false");
        echo ">
                                        ";
        // line 1323
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayColor\">
                                    ";
        // line 1331
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1335
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayTransparency\">
                                    ";
        // line 1341
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
                                    <option value=\"0\" ";
        // line 1346
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
                                    <option value=\"1\" ";
        // line 1347
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
                                    <option value=\"2\" ";
        // line 1348
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
                                    <option value=\"3\" ";
        // line 1349
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
                                    <option value=\"4\" ";
        // line 1350
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
                                    <option value=\"5\" ";
        // line 1351
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 5);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
                                    <option value=\"6\" ";
        // line 1352
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
                                    <option value=\"7\" ";
        // line 1353
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
                                    <option value=\"8\" ";
        // line 1354
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
                                    <option value=\"9\" ";
        // line 1355
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
                                    <option value=\"10\" ";
        // line 1356
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
    }

    // line 1365
    public function block_categories($context, array $blocks = array())
    {
        // line 1366
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1368
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1375
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1376
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1379
        $this->displayBlock('pagination', $context, $blocks);
        // line 1394
        echo "            </div>
        ";
    }

    // line 1379
    public function block_pagination($context, array $blocks = array())
    {
        // line 1380
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1381
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1388
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1389
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1397
    public function block_watermark($context, array $blocks = array())
    {
        // line 1398
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1400
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1403
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1406
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1407
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1413
    public function block_form($context, array $blocks = array())
    {
        // line 1414
        echo "        ";
    }

    // line 1550
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1551
        echo "                        ";
        if (isset($context["iconsWithCaptionsEffects"])) { $_iconsWithCaptionsEffects_ = $context["iconsWithCaptionsEffects"]; } else { $_iconsWithCaptionsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsWithCaptionsEffects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1552
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1553
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1554
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1560
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1562
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1563
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1569
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1573
        echo "                    ";
    }

    // line 1718
    public function block_modals($context, array $blocks = array())
    {
        // line 1719
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1721
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1738
        echo "            ";
        if (isset($context["iconsEffects"])) { $_iconsEffects_ = $context["iconsEffects"]; } else { $_iconsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsEffects_);
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1739
            echo "                <div class=\"hi-icon-wrap ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["length"])) { $_length_ = $context["length"]; } else { $_length_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $_name_, 0, ($_length_ - 1)), "html", null, true);
            echo " ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background: no-repeat; overflow: hidden;\" data-background-src=\"holder.js/150x150?theme=industrial&text=\\t\">
                    <a href=\"#\" class=\"hi-icon icon-link\" data-effect=\"";
            // line 1740
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $_name_), "html", null, true);
            echo "\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1743
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1746
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1747
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1750
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1751
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 1754
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 1755
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 1758
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 1759
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 3
    public function getlabel($__label__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <label for=\"";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            echo twig_escape_filter($this->env, $_for_, "html", null, true);
            echo "\">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2725 => 4,  2712 => 3,  2703 => 1759,  2698 => 1758,  2691 => 1755,  2686 => 1754,  2679 => 1751,  2674 => 1750,  2667 => 1747,  2662 => 1746,  2657 => 1743,  2644 => 1740,  2631 => 1739,  2625 => 1738,  2623 => 1721,  2618 => 1719,  2615 => 1718,  2611 => 1573,  2601 => 1569,  2591 => 1563,  2586 => 1562,  2580 => 1560,  2570 => 1554,  2565 => 1553,  2559 => 1552,  2553 => 1551,  2550 => 1550,  2546 => 1414,  2543 => 1413,  2533 => 1407,  2529 => 1406,  2523 => 1403,  2517 => 1400,  2513 => 1398,  2510 => 1397,  2500 => 1389,  2496 => 1388,  2489 => 1384,  2483 => 1381,  2480 => 1380,  2477 => 1379,  2472 => 1394,  2470 => 1379,  2463 => 1376,  2459 => 1375,  2452 => 1371,  2446 => 1368,  2442 => 1366,  2439 => 1365,  2426 => 1356,  2420 => 1355,  2414 => 1354,  2408 => 1353,  2402 => 1352,  2392 => 1351,  2386 => 1350,  2380 => 1349,  2374 => 1348,  2368 => 1347,  2362 => 1346,  2354 => 1341,  2344 => 1335,  2337 => 1331,  2326 => 1323,  2320 => 1322,  2315 => 1320,  2309 => 1319,  2301 => 1314,  2291 => 1308,  2284 => 1304,  2274 => 1298,  2267 => 1294,  2257 => 1288,  2250 => 1284,  2240 => 1278,  2233 => 1274,  2223 => 1268,  2216 => 1264,  2206 => 1258,  2199 => 1254,  2193 => 1250,  2189 => 1247,  2184 => 1244,  2179 => 1240,  2176 => 1239,  2172 => 1237,  2169 => 1236,  2159 => 977,  2155 => 976,  2147 => 971,  2141 => 968,  2137 => 966,  2134 => 965,  2129 => 961,  2120 => 956,  2115 => 955,  2108 => 951,  2103 => 949,  2097 => 945,  2087 => 935,  2080 => 932,  2073 => 928,  2068 => 926,  2062 => 922,  2059 => 921,  2055 => 919,  2049 => 915,  2046 => 914,  2042 => 912,  2039 => 911,  2033 => 903,  2028 => 890,  2024 => 887,  2019 => 878,  2015 => 875,  2010 => 860,  2008 => 859,  2005 => 858,  1998 => 726,  1995 => 716,  1988 => 712,  1983 => 710,  1978 => 707,  1975 => 706,  1968 => 906,  1965 => 858,  1961 => 855,  1956 => 847,  1951 => 843,  1946 => 827,  1942 => 824,  1937 => 816,  1933 => 813,  1928 => 804,  1924 => 801,  1919 => 793,  1915 => 790,  1910 => 782,  1906 => 779,  1901 => 760,  1897 => 757,  1892 => 750,  1888 => 747,  1884 => 741,  1880 => 739,  1875 => 732,  1872 => 730,  1869 => 706,  1865 => 703,  1860 => 691,  1856 => 688,  1851 => 681,  1847 => 678,  1842 => 663,  1837 => 659,  1831 => 640,  1827 => 639,  1823 => 636,  1820 => 635,  1812 => 629,  1808 => 628,  1804 => 626,  1800 => 625,  1796 => 623,  1792 => 622,  1788 => 620,  1784 => 619,  1780 => 617,  1776 => 616,  1767 => 610,  1760 => 609,  1755 => 607,  1748 => 606,  1743 => 604,  1736 => 603,  1729 => 599,  1719 => 592,  1712 => 588,  1702 => 581,  1695 => 580,  1691 => 579,  1684 => 578,  1677 => 574,  1670 => 569,  1667 => 568,  1659 => 562,  1655 => 560,  1651 => 558,  1647 => 557,  1643 => 555,  1638 => 553,  1635 => 552,  1632 => 536,  1630 => 525,  1626 => 523,  1623 => 522,  1619 => 492,  1616 => 491,  1609 => 493,  1607 => 491,  1603 => 489,  1599 => 473,  1595 => 471,  1591 => 470,  1586 => 467,  1580 => 463,  1577 => 462,  1573 => 460,  1570 => 459,  1563 => 454,  1555 => 449,  1551 => 448,  1547 => 447,  1542 => 445,  1538 => 443,  1535 => 442,  1528 => 438,  1524 => 437,  1518 => 434,  1514 => 432,  1509 => 429,  1505 => 420,  1501 => 418,  1497 => 409,  1493 => 407,  1489 => 397,  1485 => 395,  1480 => 394,  1477 => 393,  1473 => 391,  1470 => 390,  1466 => 388,  1462 => 379,  1458 => 377,  1454 => 368,  1450 => 366,  1446 => 356,  1442 => 354,  1437 => 353,  1434 => 352,  1430 => 350,  1427 => 349,  1423 => 347,  1419 => 338,  1415 => 336,  1411 => 335,  1407 => 333,  1403 => 328,  1399 => 326,  1395 => 325,  1392 => 324,  1387 => 321,  1382 => 317,  1378 => 315,  1375 => 314,  1371 => 308,  1368 => 307,  1363 => 303,  1359 => 298,  1356 => 297,  1349 => 309,  1347 => 307,  1343 => 305,  1341 => 297,  1337 => 295,  1333 => 294,  1329 => 292,  1323 => 285,  1320 => 273,  1316 => 270,  1312 => 268,  1308 => 266,  1304 => 264,  1299 => 261,  1295 => 259,  1292 => 258,  1288 => 251,  1284 => 250,  1280 => 248,  1275 => 241,  1271 => 238,  1267 => 236,  1263 => 234,  1259 => 232,  1254 => 229,  1249 => 228,  1245 => 226,  1241 => 224,  1238 => 223,  1234 => 219,  1230 => 210,  1222 => 206,  1212 => 200,  1208 => 199,  1201 => 194,  1197 => 193,  1193 => 191,  1190 => 190,  1186 => 1718,  1176 => 1711,  1171 => 1709,  1164 => 1706,  1160 => 1705,  1156 => 1704,  1148 => 1701,  1143 => 1700,  1141 => 1699,  1134 => 1695,  1127 => 1691,  1102 => 1668,  1092 => 1664,  1085 => 1661,  1071 => 1660,  1057 => 1659,  1054 => 1658,  1049 => 1657,  1045 => 1655,  1043 => 1583,  1037 => 1580,  1032 => 1578,  1026 => 1574,  1024 => 1550,  1019 => 1548,  1016 => 1547,  1010 => 1546,  1003 => 1542,  989 => 1537,  982 => 1534,  977 => 1533,  971 => 1532,  964 => 1528,  954 => 1522,  948 => 1520,  942 => 1518,  926 => 1507,  919 => 1503,  912 => 1500,  899 => 1492,  895 => 1491,  890 => 1490,  885 => 1488,  879 => 1484,  869 => 1480,  863 => 1478,  854 => 1477,  846 => 1476,  843 => 1475,  838 => 1474,  835 => 1473,  832 => 1472,  828 => 1471,  825 => 1470,  822 => 1469,  820 => 1460,  814 => 1457,  809 => 1455,  801 => 1450,  794 => 1446,  784 => 1439,  779 => 1437,  772 => 1434,  766 => 1432,  761 => 1430,  753 => 1426,  748 => 1425,  741 => 1421,  735 => 1418,  729 => 1416,  726 => 1415,  724 => 1413,  721 => 1412,  719 => 1397,  716 => 1396,  714 => 1365,  710 => 1363,  708 => 1236,  700 => 1230,  695 => 1223,  691 => 1220,  686 => 1213,  682 => 1210,  677 => 1202,  672 => 1198,  666 => 1190,  662 => 1187,  657 => 1179,  653 => 1176,  648 => 1168,  644 => 1165,  639 => 1151,  635 => 1148,  630 => 1140,  626 => 1137,  621 => 1130,  617 => 1127,  612 => 1120,  608 => 1117,  603 => 1109,  599 => 1106,  594 => 1098,  590 => 1095,  585 => 1087,  581 => 1084,  576 => 1076,  572 => 1073,  567 => 1065,  563 => 1062,  558 => 1050,  554 => 1047,  548 => 1027,  545 => 1025,  541 => 1024,  537 => 1023,  534 => 1016,  531 => 987,  525 => 982,  523 => 965,  519 => 963,  517 => 911,  514 => 910,  512 => 635,  509 => 634,  507 => 568,  504 => 567,  502 => 522,  494 => 516,  491 => 515,  478 => 506,  474 => 505,  465 => 502,  460 => 500,  455 => 497,  453 => 459,  450 => 458,  448 => 314,  445 => 313,  443 => 190,  436 => 187,  431 => 186,  426 => 185,  421 => 184,  413 => 183,  409 => 182,  406 => 181,  403 => 180,  400 => 179,  397 => 178,  389 => 173,  376 => 166,  366 => 165,  360 => 161,  353 => 157,  349 => 155,  335 => 145,  319 => 144,  316 => 143,  313 => 142,  310 => 141,  306 => 140,  303 => 139,  300 => 138,  297 => 137,  294 => 136,  291 => 135,  288 => 134,  285 => 133,  282 => 132,  279 => 131,  275 => 130,  272 => 129,  269 => 128,  266 => 127,  262 => 126,  259 => 125,  256 => 124,  254 => 123,  247 => 118,  240 => 116,  237 => 115,  234 => 114,  231 => 113,  223 => 108,  213 => 101,  206 => 99,  197 => 93,  190 => 91,  181 => 85,  175 => 83,  171 => 82,  168 => 81,  162 => 70,  159 => 69,  156 => 68,  149 => 66,  144 => 65,  140 => 64,  137 => 63,  132 => 59,  127 => 60,  125 => 59,  120 => 57,  112 => 52,  104 => 47,  96 => 42,  88 => 37,  74 => 31,  66 => 29,  57 => 27,  54 => 8,  51 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
