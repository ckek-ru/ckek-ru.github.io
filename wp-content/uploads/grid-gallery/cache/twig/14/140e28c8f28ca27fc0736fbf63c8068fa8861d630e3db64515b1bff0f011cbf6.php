<?php

/* @galleries/view.twig */
class __TwigTemplate_84c91d6e7687dc9ef8b1f22d8b5276929d4f05da1e5964a37181c880bd3cda48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/view.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "title", array()), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            ";
        // line 15
        echo "            ";
        // line 28
        echo "
            <li title=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>

            <li>
                <a href=\"";
        // line 37
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 46
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>

            <li class=\"separator\">|</li>

            ";
        // line 60
        echo "
            <li>
                <button class=\"button\" data-button=\"remove\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                    ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
                </button>
            </li>

            <li class=\"separator\">|</li>
            <li>
                <input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
            </li>

            <li style=\"float: right\">
                <button class=\"button button-primary\" data-button=\"sortbtn\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    Ok
                </button>
            </li>

            <li id=\"sortToLi\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"float: right;";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "randomly")) {
            echo " display:none; ";
        }
        echo " }}\">
                ";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
                <select name=\"sortto\" style=\"height: 34px;\">
                    <option value=\"asc\" ";
        // line 83
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()) == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
                    <option value=\"desc\" ";
        // line 84
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()) == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
                </select>
            </li>

            <li title=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 91
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 92
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 93
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 94
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 95
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    ";
        // line 96
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 97
        echo "                    <option value=\"randomly\" ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "randomly")) {
            echo "selected";
        }
        echo ">Randomly</option>
                </select>
            </li>

            ";
        // line 118
        echo "        </ul>
    </section>


    <section class=\"supsystic-bar\" id=\"images-gallery-toolbar\" style=\"padding-right: 15px;\">
        <ul class=\"supsystic-bar-controls\">
        ";
        // line 124
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
            // line 125
            echo "            <li>
                <select name=\"bulkactions\" style=\"height: 34px;\">
                    ";
            // line 127
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 128
                echo "                        <option value=\"add\">Add Category</option>
                    ";
            }
            // line 130
            echo "                    <option value=\"newcat\">Create New Category</option>
                    ";
            // line 131
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 132
                echo "                        <option value=\"delcat\">Delete Category</option>
                        <option value=\"rencat\">Rename Category</option>
                    ";
            }
            // line 135
            echo "                </select>
            </li>

            <li>
                ";
            // line 139
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 140
                echo "                    <select name=\"catactions\" style=\"height: 34px;\">
                        ";
                // line 141
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gallery_, "tags", array()));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 142
                    echo "                            <option value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\">";
                    if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                    echo twig_escape_filter($this->env, $_title_, "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                        <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                    </select>
                ";
            }
            // line 147
            echo "                <input type=\"text\" name=\"newTag\" ";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
            </li>

            <li>
                <button class=\"button button-primary\" data-button=\"allimagetags\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    ";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                </button>
            </li>

        ";
        }
        // line 158
        echo "        </ul>
    </section>


";
    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        // line 165
        echo "    ";
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/view.twig", 165);
        // line 166
        echo "
    ";
        // line 167
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (( !array_key_exists("gallery", $context) || (null === $_gallery_))) {
            // line 168
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 170
            echo "        ";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (twig_test_empty($this->getAttribute($_gallery_, "photos", array()))) {
                // line 171
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 173
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 175
                if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo $_importTypes_->getshow("1000", $this->getAttribute($_gallery_, "id", array()));
                echo "
            </h2>
        ";
            } else {
                // line 178
                echo "            ";
                $context["view"] = $this->loadTemplate("@ui/type.twig", "@galleries/view.twig", 178);
                // line 179
                echo "            ";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                $context["entity"] = array("images" => $this->getAttribute($_gallery_, "photos", array()));
                // line 180
                echo "            ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["sliderSettings"] = $_settings_;
                // line 181
                echo "
            ";
                // line 182
                if (isset($context["viewType"])) { $_viewType_ = $context["viewType"]; } else { $_viewType_ = null; }
                if (($_viewType_ == "block")) {
                    // line 183
                    echo "                ";
                    if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo $_view_->getblock_view($_entity_);
                    echo "
            ";
                }
                // line 185
                echo "
            ";
                // line 186
                if (isset($context["viewType"])) { $_viewType_ = $context["viewType"]; } else { $_viewType_ = null; }
                if (($_viewType_ == "list")) {
                    // line 187
                    echo "                ";
                    if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
                    if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                    echo $_view_->getlist_view($_entity_, $_sliderSettings_, $this->getAttribute($_gallery_, "id", array()));
                    echo "
            ";
                }
                // line 189
                echo "        ";
            }
            // line 190
            echo "    ";
        }
        // line 191
        echo "
    <div id=\"importDialog\" title=\"";
        // line 192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 193
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_importTypes_->getshow(400, $this->getAttribute($_gallery_, "id", array()));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 198
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 211
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 240
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 247
        echo "            ";
        ob_start();
        // line 248
        echo "                border-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 249
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_environment_, "isPro", array(), "method") && $this->getAttribute($_settings_, "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 250
            echo "                    ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 251
                echo "                        background-color:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 253
            echo "                ";
        } else {
            // line 254
            echo "                    color:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
                    background-color:";
            // line 255
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
                    font-size:";
            // line 256
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 257
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 258
                echo "                        text-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 260
            echo "                    ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 261
                echo "                        ";
                // line 262
                echo "                        bottom:0;
                    ";
            }
            // line 264
            echo "                ";
        }
        // line 265
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 266
        echo "
            ";
        // line 267
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "icons", array()), "enabled", array()) == "false")) {
            // line 268
            echo "                ";
            if (isset($context["effects"])) { $_effects_ = $context["effects"]; } else { $_effects_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_effects_);
            foreach ($context['_seq'] as $context["type"] => $context["name"]) {
                // line 269
                echo "                    ";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (($_type_ == "direction-aware")) {
                    // line 270
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right ? Left</div>
                                <div class=\"box__left\">Left ? Right</div>
                                <div class=\"box__top\">Top ? Bottom</div>
                                <div class=\"box__bottom\">Bottom ? Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 278
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 281
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } elseif (($_type_ == "3d-cube")) {
                    // line 285
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
                    // line 296
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                    // line 298
                    if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                    echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                    echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                    // line 300
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 306
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } else {
                    // line 310
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 311
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                    // line 312
                    if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                    echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                    echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\">
                                    <span>";
                    // line 314
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "</span>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                    // line 318
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                }
                // line 322
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
            ";
        } else {
            // line 325
            echo "                <div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
            // line 327
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 351
            echo "                </div>
            ";
        }
        // line 353
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 356
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 357
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 360
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 361
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 364
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 365
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 368
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 369
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 327
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 328
        echo "                        ";
        if (isset($context["iconsWithCaptionsEffects"])) { $_iconsWithCaptionsEffects_ = $context["iconsWithCaptionsEffects"]; } else { $_iconsWithCaptionsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsWithCaptionsEffects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 329
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 330
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 331
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 337
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 339
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 340
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 346
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 350,  794 => 346,  784 => 340,  779 => 339,  773 => 337,  763 => 331,  758 => 330,  752 => 329,  746 => 328,  743 => 327,  733 => 369,  728 => 368,  721 => 365,  716 => 364,  709 => 361,  704 => 360,  697 => 357,  692 => 356,  687 => 353,  683 => 351,  681 => 327,  675 => 325,  671 => 323,  665 => 322,  658 => 318,  650 => 314,  644 => 312,  639 => 311,  633 => 310,  626 => 306,  616 => 300,  610 => 298,  604 => 296,  588 => 285,  581 => 281,  574 => 278,  561 => 270,  557 => 269,  551 => 268,  548 => 267,  545 => 266,  542 => 265,  539 => 264,  535 => 262,  533 => 261,  529 => 260,  522 => 258,  519 => 257,  512 => 256,  507 => 255,  501 => 254,  498 => 253,  491 => 251,  487 => 250,  483 => 249,  477 => 248,  474 => 247,  471 => 240,  469 => 211,  464 => 209,  451 => 199,  447 => 198,  442 => 196,  434 => 193,  430 => 192,  427 => 191,  424 => 190,  421 => 189,  411 => 187,  408 => 186,  405 => 185,  397 => 183,  394 => 182,  391 => 181,  387 => 180,  383 => 179,  380 => 178,  372 => 175,  367 => 173,  363 => 171,  359 => 170,  353 => 168,  350 => 167,  347 => 166,  344 => 165,  341 => 164,  333 => 158,  325 => 153,  310 => 147,  305 => 144,  292 => 142,  287 => 141,  284 => 140,  281 => 139,  275 => 135,  270 => 132,  267 => 131,  264 => 130,  260 => 128,  257 => 127,  253 => 125,  250 => 124,  242 => 118,  231 => 97,  221 => 96,  214 => 95,  207 => 94,  200 => 93,  193 => 92,  186 => 91,  181 => 89,  177 => 88,  167 => 84,  160 => 83,  155 => 81,  146 => 80,  133 => 70,  124 => 64,  118 => 60,  109 => 49,  101 => 46,  92 => 40,  84 => 37,  76 => 32,  70 => 29,  67 => 28,  65 => 15,  52 => 9,  44 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/view.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/view.twig");
    }
}
