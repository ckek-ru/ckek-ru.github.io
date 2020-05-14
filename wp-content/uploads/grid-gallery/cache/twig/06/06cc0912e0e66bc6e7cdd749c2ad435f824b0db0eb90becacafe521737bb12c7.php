<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_7455f47f34410c957c0ea6a0de9fbdb2f1d13ebb61c7675b2b72bd81fd69c789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'figure_before' => array($this, 'block_figure_before'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 12
            echo "\t\theight:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 15
            echo "\t\twidth:auto;
\t";
        } else {
            // line 17
            echo "\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array())))) {
            // line 23
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 25
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (((( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) && ( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0"))) {
            // line 31
            echo "\t\tgg-colorbox
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0"))) {
            // line 35
            echo "\t\tgg-video
\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && (( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) || ($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))))))) {
            // line 39
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) {
            // line 45
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 46
            $context["link"] = true;
            // line 47
            echo "\t";
        } else {
            // line 48
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute($_gallery_, "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($_link_ && $this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 54
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 56
        echo "\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($_link_ == false) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "enabled", array()) == "false"))) {
            // line 57
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 84
        echo "
\t";
        // line 85
        ob_start();
        // line 86
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 87
            echo "\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
                // line 88
                echo "\t\t\t\ticons
\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\tnone
\t\t\t";
            }
            // line 92
            echo "\t\t";
        } else {
            // line 93
            echo "\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
                // line 94
                echo "\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 95
                    echo "\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 101
                    echo "\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t";
            }
            // line 106
            echo "\t\t";
        }
        // line 107
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 108
        echo "
\t\t<FIGURE
\t\t\t";
        // line 110
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 130
        echo ">
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 132
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 133
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 134
        echo "\"
\t\t\t\tstyle=\"
\t\t\t\t";
        // line 136
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3"))) {
            // line 137
            echo "\t\t\t\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\theight:";
            // line 138
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\toverflow:hidden;
\t\t\t\t";
        }
        // line 140
        echo "\">

\t\t\t\t";
        // line 142
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 143
        echo "
\t\t\t\t";
        // line 144
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
            // line 145
            echo "\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
            // line 146
            echo "\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t";
            // line 148
            echo "\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()) == 0)) {
                // line 149
                echo "\t\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = round((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array())));
                // line 150
                echo "\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t";
                $context["width"] = null;
                // line 152
                echo "\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t";
        }
        // line 154
        echo "
\t\t\t\t";
        // line 155
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
            // line 156
            echo "\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
            // line 157
            echo "\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 160
            echo "\t\t\t\t\t";
            // line 161
            echo "\t\t\t\t\t\t";
            // line 162
            echo "\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t\t";
            // line 164
            echo "\t\t\t\t\t";
            // line 165
            echo "\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 3))) {
            // line 168
            echo "\t\t\t\t\t";
            $context["crop"] = 1;
            // line 169
            echo "\t\t\t\t";
        }
        // line 170
        echo "
\t\t\t\t";
        // line 171
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 1)) {
            // line 172
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 173
            echo "\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t";
        // line 175
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 2)) {
            // line 176
            echo "\t\t\t\t\t";
            $context["width"] = null;
            // line 177
            echo "\t\t\t\t";
        }
        // line 178
        echo "

\t\t\t\t<img
\t\t\t\t\t";
        // line 181
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 197
        echo "\t\t\t\t/>
\t\t\t</div>

\t\t\t";
        // line 200
        ob_start();
        // line 201
        echo "\t\t\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 224
        echo "\t\t\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 225
        echo "
\t\t\t<FIGCAPTION
\t\t\t\t";
        // line 227
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 233
        echo ">

\t\t\t\t<div
\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 238
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 239
            echo "\t\t\t\t\t\tvertical-align:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
        }
        // line 240
        echo "\">

\t\t\t\t\t";
        // line 242
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 316
        echo "\t\t\t\t</div>
\t\t\t</FIGCAPTION>

\t\t\t";
        // line 319
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 359
        echo "\t\t</FIGURE>

\t";
        // line 361
        $this->displayBlock('figure_after', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_figure_before($context, array $blocks = array())
    {
        // line 63
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 64
            echo "\t\t\t<a
\t\t\t\t";
            // line 65
            $this->displayBlock('a_attributes', $context, $blocks);
            // line 81
            echo "\t\t\t>
\t\t";
        }
        // line 83
        echo "\t";
    }

    // line 65
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\tid=\"gg-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "-";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
        echo "\"
\t\t\t\t\tclass=\"gg-link ";
        // line 67
        if (isset($context["aClass"])) { $_aClass_ = $context["aClass"]; } else { $_aClass_ = null; }
        echo twig_escape_filter($this->env, trim($_aClass_), "html", null, true);
        echo " ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on") && ($_index_ > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t\t\thref=\"";
        // line 68
        if (isset($context["aHref"])) { $_aHref_ = $context["aHref"]; } else { $_aHref_ = null; }
        echo twig_escape_filter($this->env, htmlspecialchars_decode(trim($_aHref_)), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"";
        // line 69
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 70
        if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
        echo twig_escape_filter($this->env, trim($_aTitle_), "html", null, true);
        echo "\"
\t\t\t\t\t";
        // line 71
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_link_ == false))) {
            // line 72
            echo "\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\trel=\"";
            if (isset($context["aRel"])) { $_aRel_ = $context["aRel"]; } else { $_aRel_ = null; }
            echo twig_escape_filter($this->env, $_aRel_, "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (($_link_ == true)) {
            // line 77
            echo "\t\t\t\t\t\tdata-type=\"link\"
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\tstyle=\"border-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t\t\t";
    }

    // line 110
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\tclass=\"grid-gallery-caption
\t\t\t\t";
        // line 112
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on") && ($_index_ > 0))) {
            echo " hidden-item ";
        }
        // line 113
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "mouse_shadow", array()) == "1") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 114
            echo "\t\t\t\t\tshadow-show
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "mouse_shadow", array()) == "2") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 117
            echo "\t\t\t\t shadow-hide
\t\t\t\t";
        }
        // line 118
        echo "\"
\t\t\t\tdata-grid-gallery-type=\"";
        // line 119
        if (isset($context["galleryType"])) { $_galleryType_ = $context["galleryType"]; } else { $_galleryType_ = null; }
        echo twig_escape_filter($this->env, trim($_galleryType_), "html", null, true);
        echo "\"
\t\t\t\tstyle=\"display:none;";
        // line 120
        if (isset($context["figureStyle"])) { $_figureStyle_ = $context["figureStyle"]; } else { $_figureStyle_ = null; }
        echo twig_escape_filter($this->env, trim($_figureStyle_), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 121
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true")) {
            // line 122
            echo "\t\t\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 124
                echo "\t\t\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 129
            echo "\t\t\t\t";
        }
        // line 130
        echo "\t\t\t";
    }

    // line 181
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 182
        echo "\t\t\t\t\tsrc=\"";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
        if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "id", array()), $_width_, $_height_, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 183
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ((twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array()) == " "))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 184
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-description=\"";
        // line 185
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-caption=\"";
        // line 186
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()));
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\t\t\tdata-title=\"";
        // line 187
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 189
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array())))) {
            // line 190
            echo "\t\t\t\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array())))) {
            // line 193
            echo "\t\t\t\t\theight:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\"
\t\t\t\t\t";
    }

    // line 201
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 202
        echo "\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 203
            echo "\t\t\t\t\t\tfont-family:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 204
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 205
                echo "\t\t\t\t\t\t\tbackground-color:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\t";
                // line 208
                echo "\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t";
        } else {
            // line 213
            echo "\t\t\t\t\t\tcolor:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 214
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 215
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\ttext-align:";
            // line 216
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 217
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 218
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 219
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t";
        }
        // line 223
        echo "\t\t\t\t";
    }

    // line 227
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 228
        echo "\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 229
            echo "\t\t\t\t\t\tdata-alpha=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, trim((($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\tdata-alpha=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"";
        // line 232
        if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
        echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
        echo "\"
\t\t\t\t";
    }

    // line 242
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 243
        echo "\t\t\t\t\t\t";
        // line 244
        echo "\t\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 245
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 246
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["length"])) { $_length_ = $context["length"]; } else { $_length_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), 0, ($_length_ - 1)), "html", null, true);
            echo " ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-margin=\"";
            // line 247
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t";
            // line 249
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())))) {
                // line 250
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 251
                ob_start();
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["youtube"])) { $_youtube_ = $context["youtube"]; } else { $_youtube_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()), $_youtube_), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 254
                    $context["videoSource"] = "youtube";
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) {
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["vimeoPattern"])) { $_vimeoPattern_ = $context["vimeoPattern"]; } else { $_vimeoPattern_ = null; }
                    if (isset($context["vimeoReplace"])) { $_vimeoReplace_ = $context["vimeoReplace"]; } else { $_vimeoReplace_ = null; }
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()), $_vimeoPattern_, $_vimeoReplace_)) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 257
                    $context["videoSource"] = "vimeo";
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 261
                echo "\t\t\t\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 262
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 263
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 264
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 265
                ob_start();
                // line 266
                echo "\t\t\t\t\t\t\t\t\t\tmargin-left:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t\tmargin-right:";
                // line 267
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 269
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 270
                if (isset($context["videoUrl"])) { $_videoUrl_ = $context["videoUrl"]; } else { $_videoUrl_ = null; }
                echo twig_escape_filter($this->env, trim($_videoUrl_), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-id=\"gg-";
                // line 271
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 272
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, trim($_aTitle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 273
                if (isset($context["videoIcon"])) { $_videoIcon_ = $context["videoIcon"]; } else { $_videoIcon_ = null; }
                echo twig_escape_filter($this->env, $_videoIcon_, "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 274
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\tstyle=\"";
                // line 276
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_iconStyle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-video-source=\"";
                // line 277
                if (isset($context["videoSource"])) { $_videoSource_ = $context["videoSource"]; } else { $_videoSource_ = null; }
                echo twig_escape_filter($this->env, $_videoSource_, "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1")) {
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t";
                // line 288
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 290
            echo "
\t\t\t\t\t\t\t\t";
            // line 291
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) {
                // line 292
                echo "\t\t\t\t\t\t\t\t\t<a title=\"";
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, trim($_aTitle_), "html", null, true);
                echo "\" data-id=\"gg-";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\" href=\"";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($_settings_, "openByLink", array()) == "on")) {
                    echo " ";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && ($this->getAttribute($_settings_, "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_iconStyle_), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 294
            echo "
\t\t\t\t\t\t\t\t";
            // line 295
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (( !array_key_exists("videoUrl", $context) && ( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()))))) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t<a title=\"";
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, trim($_aTitle_), "html", null, true);
                echo "\" data-id=\"gg-";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\" href=\"";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_iconStyle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 297
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_link_ == false))) {
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 299
                echo ">Open in pop-up window</a>
\t\t\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 303
        echo "
\t\t\t\t\t\t";
        // line 304
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 305
            echo "\t\t\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 306
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore\" style=\"font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 309
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 313
                echo "\t\t\t\t\t\t\t";
            }
            // line 314
            echo "\t\t\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t\t";
    }

    // line 319
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 320
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 321
            echo "
\t\t\t\t\t";
            // line 322
            ob_start();
            // line 323
            echo "\t\t\t\t\t\tcolor:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 324
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 325
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 326
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 327
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 328
                echo "\t\t\t\t\t\t\ttext-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 331
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 334
            echo "\t\t\t\t\t\tvertical-align:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 336
            echo "
\t\t\t\t\t";
            // line 337
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 338
                echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"caption-with-";
                // line 339
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\tstyle=\"";
                // line 340
                if (isset($context["captionStyle"])) { $_captionStyle_ = $context["captionStyle"]; } else { $_captionStyle_ = null; }
                echo twig_escape_filter($this->env, $_captionStyle_, "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-alpha=\"";
                // line 341
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 343
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
                    // line 344
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 345
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 346
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 350
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 351
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 354
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t";
        }
        // line 358
        echo "\t\t\t";
    }

    // line 361
    public function block_figure_after($context, array $blocks = array())
    {
        // line 362
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 363
            echo "\t\t\t</a>
\t\t";
        }
        // line 365
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1323 => 365,  1319 => 363,  1315 => 362,  1312 => 361,  1308 => 358,  1305 => 357,  1300 => 354,  1293 => 351,  1288 => 350,  1280 => 349,  1273 => 346,  1268 => 345,  1260 => 344,  1257 => 343,  1251 => 341,  1246 => 340,  1236 => 339,  1233 => 338,  1229 => 337,  1226 => 336,  1219 => 334,  1214 => 331,  1210 => 330,  1203 => 328,  1200 => 327,  1195 => 326,  1188 => 325,  1183 => 324,  1177 => 323,  1175 => 322,  1172 => 321,  1168 => 320,  1165 => 319,  1161 => 315,  1158 => 314,  1155 => 313,  1147 => 309,  1138 => 307,  1134 => 306,  1130 => 305,  1127 => 304,  1124 => 303,  1120 => 301,  1116 => 299,  1112 => 298,  1108 => 297,  1085 => 296,  1082 => 295,  1079 => 294,  1042 => 292,  1039 => 291,  1036 => 290,  1032 => 288,  1029 => 286,  1026 => 285,  1023 => 283,  1021 => 282,  1017 => 280,  1013 => 279,  1008 => 277,  1003 => 276,  1000 => 275,  995 => 274,  990 => 273,  985 => 272,  977 => 271,  972 => 270,  969 => 269,  963 => 267,  957 => 266,  955 => 265,  952 => 264,  949 => 263,  946 => 262,  943 => 261,  936 => 259,  933 => 258,  931 => 257,  923 => 256,  920 => 255,  918 => 254,  911 => 253,  907 => 252,  905 => 251,  902 => 250,  899 => 249,  893 => 247,  884 => 246,  881 => 245,  877 => 244,  875 => 243,  872 => 242,  865 => 232,  859 => 231,  852 => 229,  848 => 228,  845 => 227,  841 => 223,  838 => 222,  833 => 219,  830 => 218,  825 => 217,  820 => 216,  813 => 215,  808 => 214,  802 => 213,  799 => 212,  794 => 209,  791 => 208,  784 => 205,  781 => 204,  775 => 203,  771 => 202,  768 => 201,  763 => 195,  756 => 193,  752 => 192,  745 => 190,  742 => 189,  736 => 187,  725 => 186,  714 => 185,  703 => 184,  692 => 183,  683 => 182,  680 => 181,  676 => 130,  673 => 129,  670 => 128,  666 => 126,  659 => 124,  655 => 123,  652 => 122,  649 => 121,  644 => 120,  639 => 119,  636 => 118,  632 => 117,  628 => 116,  624 => 114,  620 => 113,  614 => 112,  611 => 111,  608 => 110,  600 => 79,  596 => 77,  592 => 76,  585 => 74,  581 => 72,  577 => 71,  572 => 70,  567 => 69,  562 => 68,  551 => 67,  542 => 66,  539 => 65,  535 => 83,  531 => 81,  529 => 65,  526 => 64,  522 => 63,  519 => 62,  514 => 361,  510 => 359,  508 => 319,  503 => 316,  501 => 242,  497 => 240,  490 => 239,  487 => 238,  480 => 233,  478 => 227,  474 => 225,  471 => 224,  468 => 201,  466 => 200,  461 => 197,  459 => 181,  454 => 178,  451 => 177,  448 => 176,  445 => 175,  442 => 174,  439 => 173,  436 => 172,  433 => 171,  430 => 170,  427 => 169,  424 => 168,  421 => 167,  418 => 166,  415 => 165,  413 => 164,  411 => 163,  409 => 162,  407 => 161,  405 => 160,  402 => 159,  400 => 158,  397 => 157,  393 => 156,  390 => 155,  387 => 154,  384 => 153,  381 => 152,  378 => 151,  375 => 150,  371 => 149,  367 => 148,  365 => 147,  362 => 146,  358 => 145,  355 => 144,  352 => 143,  350 => 142,  346 => 140,  339 => 138,  333 => 137,  330 => 136,  326 => 134,  322 => 133,  319 => 132,  315 => 130,  313 => 110,  309 => 108,  306 => 107,  303 => 106,  300 => 105,  293 => 103,  285 => 101,  281 => 100,  278 => 99,  271 => 97,  264 => 95,  259 => 94,  255 => 93,  252 => 92,  248 => 90,  244 => 88,  240 => 87,  236 => 86,  234 => 85,  231 => 84,  228 => 62,  226 => 61,  223 => 60,  218 => 57,  213 => 56,  206 => 54,  201 => 53,  199 => 52,  196 => 51,  187 => 48,  184 => 47,  182 => 46,  176 => 45,  172 => 44,  170 => 43,  167 => 42,  162 => 39,  158 => 38,  155 => 37,  151 => 35,  147 => 34,  144 => 33,  140 => 31,  135 => 30,  133 => 29,  130 => 28,  122 => 25,  115 => 23,  111 => 22,  109 => 21,  106 => 20,  98 => 17,  94 => 15,  90 => 14,  83 => 12,  79 => 11,  75 => 9,  72 => 8,  56 => 7,  53 => 6,  47 => 5,  34 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/helpers.twig");
    }
}
