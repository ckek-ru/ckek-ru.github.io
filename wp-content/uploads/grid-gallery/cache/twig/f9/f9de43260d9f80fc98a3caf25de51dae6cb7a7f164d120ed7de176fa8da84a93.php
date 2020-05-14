<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_bf2017f465ece9737592b578619823b9cff0ce26023fcd7a86fe38e17d739061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/shortcode/gallery.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if ((array_key_exists("gallery", $context) &&  !twig_test_empty($_gallery_))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<div
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 184
            echo ">

\t\t";
            // line 186
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == "true") || ($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == null))) {
                // line 187
                echo "\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (((($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_name", array()) == "default") || ($this->getAttribute($_environment_, "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == null))) {
                    // line 188
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 197
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 198
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_name", array()), "html", null, true);
                    echo "\" style=\"color: ";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "background", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 199
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_items", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 200
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 205
                echo "\t\t";
            }
            // line 206
            echo "
\t\t";
            // line 207
            $this->displayBlock('photos_before', $context, $blocks);
            // line 209
            echo "
\t\t";
            // line 210
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) {
                // line 211
                echo "            <div id=\"social-share-html\" style=\"display:none;\">
                ";
                // line 212
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "html", array());
                echo "
                ";
                // line 214
                echo "            </div>
        ";
            }
            // line 216
            echo "
        <div id=\"gallery-sharing-top\"></div>
\t\t<div
\t\t\t";
            // line 219
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 222
            echo ">

\t\t\t";
            // line 224
            $this->displayBlock('photos', $context, $blocks);
            // line 231
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</div>
        <div id=\"gallery-sharing-bottom\"></div>

\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 238
            $this->displayBlock('photos_after', $context, $blocks);
            // line 240
            echo "\t</div>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 242
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
                echo " / ";
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon { color: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
            echo " !important; background: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon:hover { color: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
            echo " !important; background: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .hi-icon { width: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; height: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 18
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "title", array()), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 19
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 20
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 21
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()), "html", null, true);
        echo "\"
\t\t\tdata-icons=\"";
        // line 22
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\tdata-preloader = \"";
        // line 23
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 24
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 25
            echo " \t\t\t\tdata-width=\"auto\"
 \t\t\t";
        } else {
            // line 27
            echo " \t\t\t\tdata-width=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 1)) {
                echo "%";
            }
            echo "\"
 \t\t\t";
        }
        // line 29
        echo "\t\t\tdata-height=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 30
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "padding", array()), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 31
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "enabled", array()) == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 32
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "duration", array()))) {
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "duration", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 33
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "enabled", array()) == "false"))) {
            // line 34
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\tdata-popup-theme = ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0") && ($_mobile_ != "true"))) {
            // line 39
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 40
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "fadeOut", array()), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if (((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_mobile_ != "true")) && ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 43
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if (((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && ($_mobile_ != "true")) && ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 46
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3")) {
            // line 49
            echo "\t\t\t\t\tdata-columns-number = ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array()), "columns", array()), "number", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "captions", array()) == "on")) {
            // line 52
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\tdata-popup-image-text = \"";
        // line 55
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array()), "title")) : ("title")), "html", null, true);
        echo "\"

\t\t\t\t";
        // line 57
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 60
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t";
        // line 63
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 65
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 66
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")));
        // line 70
        echo "\t\t\tdata-popup-i18n-words = \"";
        if (isset($context["popup_i18n_words"])) { $_popup_i18n_words_ = $context["popup_i18n_words"]; } else { $_popup_i18n_words_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($_popup_i18n_words_));
        echo "\"

            data-popup-slideshow = \"";
        // line 72
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 73
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 74
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 75
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 76
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "background", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 77
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-history=\"";
        // line 78
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "disableHistory", array()), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 79
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo (($this->getAttribute($_settings_, "fullscreen", array())) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 80
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 81
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 82
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-is-mobile=\"";
        // line 83
        if (isset($context["isMobile"])) { $_isMobile_ = $context["isMobile"]; } else { $_isMobile_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("isMobile", $context)) ? (_twig_default_filter($_isMobile_, "0")) : ("0")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 84
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false")), "html", null, true);
        echo "\" ";
        // line 85
        echo "\t\t\tdata-hide-long-tltp-title=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo ((($this->getAttribute($_settings_, "hideLongTooltipTitles", array()) == "on")) ? ("1") : ("0"));
        echo "\"
\t\t\tdata-caption-disabled-on-mobile=\"";
        // line 86
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 87
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) {
            // line 88
            echo "\t\t\t\tdata-polaroid-animation=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 89
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 90
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3")) {
            // line 93
            echo "\t\t\t\tdata-responsive-colums=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array()), "")) : (""))));
            echo "\"
\t\t\t";
        }
        // line 95
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array()), "enabled", array()) == "true"))) {
            // line 96
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_settings_, "horizontalScroll", array())));
            echo "\"
\t\t\t";
        }
        // line 98
        echo "
            ";
        // line 99
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array());
        // line 100
        echo "            ";
        if (isset($context["imageSharingButPos"])) { $_imageSharingButPos_ = $context["imageSharingButPos"]; } else { $_imageSharingButPos_ = null; }
        $context["imageSharingWrapperClass"] = ($_imageSharingButPos_ . " ");
        // line 101
        echo "            ";
        if (isset($context["imageSharingButPos"])) { $_imageSharingButPos_ = $context["imageSharingButPos"]; } else { $_imageSharingButPos_ = null; }
        if ((($_imageSharingButPos_ == "top") || ($_imageSharingButPos_ == "bottom"))) {
            // line 102
            echo "                ";
            if (isset($context["imageSharingWrapperClass"])) { $_imageSharingWrapperClass_ = $context["imageSharingWrapperClass"]; } else { $_imageSharingWrapperClass_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["imageSharingWrapperClass"] = ($_imageSharingWrapperClass_ . $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()));
            // line 103
            echo "            ";
        } else {
            // line 104
            echo "                    ";
            if (isset($context["imageSharingWrapperClass"])) { $_imageSharingWrapperClass_ = $context["imageSharingWrapperClass"]; } else { $_imageSharingWrapperClass_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["imageSharingWrapperClass"] = (($_imageSharingWrapperClass_ . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()));
            // line 106
            echo "            ";
        }
        // line 107
        echo "
            ";
        // line 118
        echo "
            ";
        // line 119
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array()), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "enabled", array()), "position" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array())), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 127
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 135
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method")));
        // line 144
        echo "\t\t\tdata-social-sharing = \"";
        if (isset($context["socialSharing"])) { $_socialSharing_ = $context["socialSharing"]; } else { $_socialSharing_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($_socialSharing_));
        echo "\"

\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 147
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "1")) {
            // line 148
            echo "\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t";
        }
        // line 152
        echo "
\t\t\t\t";
        // line 153
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "thumbs", array()), "enable", array()) == "1")) {
            // line 154
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 156
        echo "
\t\t\t\t";
        // line 157
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ((($this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute($_environment_, "isPro", array(), "method") == false))) {
            // line 158
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 160
        echo "
\t\t\t\t";
        // line 161
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "openByLink", array()) == "on")) {
            // line 162
            echo "\t\t\t\t    hidden-item
                ";
        }
        // line 164
        echo "
\t\t\t\t";
        // line 165
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on")) {
            // line 166
            echo "\t\t\t\t    one-photo
                ";
        }
        // line 168
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 170
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 171
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "height", array()), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 172
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "height", array()) != "auto") && ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "height", array()) != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 173
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "1") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "left"))) {
            // line 174
            echo "\t\t\t\t\tfloat: left;
\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "2") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "right"))) {
            // line 177
            echo "\t\t\t\t\tfloat:right;
\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "center")) {
            // line 180
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 183
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($_settings_, "fullscreen", array()), "enabled", array())) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 207
    public function block_photos_before($context, array $blocks = array())
    {
        // line 208
        echo "\t\t";
    }

    // line 219
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 220
        echo "\t\t\t\tid=\"photos-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 224
    public function block_photos($context, array $blocks = array())
    {
        // line 225
        echo "\t\t\t    ";
        $context["i"] = 0;
        // line 226
        echo "\t\t\t\t";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gallery_, "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 227
            echo "\t\t\t\t\t";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $this->loadTemplate("@galleries/shortcode/helpers.twig", "@galleries/shortcode/gallery.twig", 227)->display(array("gallery" => $_gallery_, "photo" => $_photo_, "settings" => $_settings_, "index" => $_i_));
            // line 228
            echo "\t\t\t\t    ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 229
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "\t\t\t";
    }

    // line 238
    public function block_photos_after($context, array $blocks = array())
    {
        // line 239
        echo "\t\t";
    }

    // line 108
    public function getgetSocialSharingWrapperClass($__position__ = null, $__horizontalAlign__ = null, $__verticalAlign__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $__position__,
            "horizontalAlign" => $__horizontalAlign__,
            "verticalAlign" => $__verticalAlign__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 109
            echo "                ";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $context["class"] = ($_position_ . " ");
            // line 110
            echo "                ";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            if ((($_position_ == "top") || ($_position_ == "bottom"))) {
                // line 111
                echo "                    ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if (isset($context["horizontalAlign"])) { $_horizontalAlign_ = $context["horizontalAlign"]; } else { $_horizontalAlign_ = null; }
                $context["class"] = ($_class_ . $_horizontalAlign_);
                // line 112
                echo "                ";
            } else {
                // line 113
                echo "                        ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if (isset($context["verticalAlign"])) { $_verticalAlign_ = $context["verticalAlign"]; } else { $_verticalAlign_ = null; }
                $context["class"] = (($_class_ . "vertical ") . $_verticalAlign_);
                // line 115
                echo "                ";
            }
            // line 116
            echo "                ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "
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
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 116,  810 => 115,  805 => 113,  802 => 112,  797 => 111,  793 => 110,  789 => 109,  775 => 108,  771 => 239,  768 => 238,  764 => 230,  758 => 229,  754 => 228,  747 => 227,  741 => 226,  738 => 225,  735 => 224,  726 => 220,  723 => 219,  719 => 208,  716 => 207,  704 => 183,  699 => 180,  695 => 179,  691 => 177,  687 => 176,  683 => 174,  680 => 173,  673 => 172,  668 => 171,  663 => 170,  659 => 168,  655 => 166,  652 => 165,  649 => 164,  645 => 162,  642 => 161,  639 => 160,  635 => 158,  632 => 157,  629 => 156,  625 => 154,  622 => 153,  619 => 152,  615 => 150,  611 => 148,  608 => 147,  600 => 144,  598 => 135,  597 => 127,  595 => 119,  592 => 118,  589 => 107,  586 => 106,  581 => 104,  578 => 103,  573 => 102,  569 => 101,  565 => 100,  562 => 99,  559 => 98,  552 => 96,  548 => 95,  541 => 93,  537 => 92,  531 => 90,  526 => 89,  520 => 88,  517 => 87,  512 => 86,  506 => 85,  502 => 84,  497 => 83,  490 => 82,  485 => 81,  480 => 80,  475 => 79,  470 => 78,  465 => 77,  460 => 76,  455 => 75,  450 => 74,  445 => 73,  440 => 72,  433 => 70,  431 => 69,  428 => 68,  422 => 66,  419 => 65,  412 => 63,  409 => 62,  403 => 60,  400 => 59,  393 => 57,  387 => 55,  384 => 54,  380 => 52,  376 => 51,  369 => 49,  365 => 48,  361 => 46,  356 => 45,  352 => 43,  347 => 42,  341 => 40,  338 => 39,  333 => 38,  326 => 36,  322 => 34,  319 => 33,  309 => 32,  300 => 31,  295 => 30,  285 => 29,  274 => 27,  270 => 25,  267 => 24,  262 => 23,  257 => 22,  252 => 21,  247 => 20,  242 => 19,  237 => 18,  231 => 17,  228 => 16,  224 => 13,  211 => 10,  200 => 9,  186 => 8,  172 => 7,  169 => 6,  165 => 5,  162 => 4,  147 => 242,  143 => 240,  141 => 238,  132 => 231,  130 => 224,  126 => 222,  124 => 219,  119 => 216,  115 => 214,  110 => 212,  107 => 211,  104 => 210,  101 => 209,  99 => 207,  96 => 206,  93 => 205,  88 => 202,  81 => 200,  76 => 199,  68 => 198,  65 => 197,  54 => 188,  49 => 187,  46 => 186,  42 => 184,  40 => 16,  36 => 14,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/gallery.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/gallery.twig");
    }
}
