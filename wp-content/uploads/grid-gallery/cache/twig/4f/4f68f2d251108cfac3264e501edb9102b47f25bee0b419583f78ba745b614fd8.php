<?php

/* @ui/type.twig */
class __TwigTemplate_ca333b955a2a53826fdb7269e8df5f3d1713051a290235a99c14eb0a6fd886fa extends Twig_Template
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
        // line 39
        echo "
";
        // line 52
        echo "
";
        // line 82
        echo "
";
        // line 115
        echo "
";
        // line 158
        echo "
";
    }

    // line 1
    public function getlist_view($__entities__ = null, $__sliderSettings__ = null, $__galleryId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["view"] = $this;
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "    <tr class=\"ui-jqgrid-labels-custom\" role=\"rowheader\">
        <th scope=\"col\" id=\"check-all\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            <input type=\"checkbox\" id=\"checkAll\" class=\"gg-checkbox\">
        </th>
        <th scope=\"col\" id=\"icon\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"title\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"date\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date")), "html", null, true);
            echo "
        </th>
    </tr>
    ";
            $context["head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
    <table id=\"ui-jqgrid-htable-img\" class=\"ui-jqgrid-htable\" style=\"margin: 7px 0 7px -5px; width: 100%;\">
        <thead class=\"jqgrid-head-nav\">
        ";
            // line 22
            if (isset($context["head"])) { $_head_ = $context["head"]; } else { $_head_ = null; }
            echo twig_escape_filter($this->env, $_head_, "html", null, true);
            echo "
        </thead>
        <tfoot>
        ";
            // line 25
            if (isset($context["head"])) { $_head_ = $context["head"]; } else { $_head_ = null; }
            echo twig_escape_filter($this->env, $_head_, "html", null, true);
            echo "
        </tfoot>
        <tbody id=\"the-list\" data-sortable data-container=\"list\">
        ";
            // line 28
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 29
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                echo $_view_->getlist_folder($_folder_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo $_view_->getlist_image($_image_, $_sliderSettings_, $_galleryId_);
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 34
                echo "            ";
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
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

    // line 40
    public function getblock_view($__entities__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            $context["view"] = $this;
            // line 42
            echo "    <ul class=\"sg-photos\" data-sortable data-container=\"block\">
        ";
            // line 43
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 44
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                echo $_view_->getblock_folder($_folder_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 47
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $_view_->getblock_image($_image_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </ul>
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

    // line 53
    public function getblock_folder($__folder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <li data-droppable class=\"gg-list-item\" data-entity data-entity-id=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 55
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_folder_));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 0;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a href=\"";
            // line 60
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "block")), "method"), "html", null, true);
            echo "\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     alt=\"\" width=\"150\" height=\"150\"/>

                <div style=\"position: absolute; top: 55px; left: 55px; color: #bdc3c7;\">
                    <i class=\"fa fa-folder-open-o\" style=\"font-size: 5em;\"></i>
                </div>

                <div class=\"gg-folder-photos\">
                    <i class=\"fa fa-picture-o\"></i> <span class=\"gg-folder-photos-num\">";
            // line 69
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())), "html", null, true);
            echo "</span>
                </div>
            </a>

            <p>
                <span class=\"folder-title\">";
            // line 74
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_folder_, "title", array())), "html", null, true);
            echo "</span>
                <small>
                    ";
            // line 76
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "date", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 83
    public function getblock_image($__image__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    <li class=\"gg-list-item\" data-entity data-entity-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"photo\"
        data-entity-info=\"";
            // line 85
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_image_));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 10;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a data-colorbox href=\"";
            // line 90
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\">
                ";
            // line 91
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 92
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 93
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 94
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 95
                    echo "                    ";
                } else {
                    // line 96
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 97
                    echo "                    ";
                }
                // line 98
                echo "                ";
            } else {
                // line 99
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 100
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <img class=\"supsystic-lazy\" data-original=\"";
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\" alt=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\" width=\"150\"
                     style=\"min-height:150px;max-height:150px;\"/>
            </a>

            <p title=\"";
            // line 106
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\">
                ";
            // line 107
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "
                <small>
                    ";
            // line 109
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "dateFormatted", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 116
    public function getlist_folder($__folder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    <tr data-droppable data-entity data-entity-id=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 118
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_folder_));
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 121
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($_folder_, "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"folder[]\" id=\"cb-select-";
            // line 122
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\"
                   data-observable>
        </th>
        <td class=\"column-icon media-icon\" style=\"position: relative;\">
            <a href=\"";
            // line 126
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\"
               data-colorbox>
                <img width=\"60\" height=\"60\"
                     src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     class=\"attachment-80x60 supsystic-lazy\" alt=\"";
            // line 130
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "title", array()), "html", null, true);
            echo "\">
            </a>

            <div style=\"position: absolute; top: 20px; left: 31px; color: #bdc3c7; z-index: 100;\">
                <i class=\"fa fa-folder-open-o\" style=\"font-size: 3em;\"></i>
            </div>
        </td>
        <td class=\"title column-title\">
            <strong>
                <a href=\"";
            // line 139
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\">
                    <span class=\"folder-title\">";
            // line 140
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_title_string_filter($this->env, $this->getAttribute($_folder_, "title", array()));
            echo "</span>
                </a>
            </strong>

            <p>
                <span class=\"gg-folder-photos-num\">
                    ";
            // line 146
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())), "html", null, true);
            echo "
                </span>
                ";
            // line 148
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())) == 1)) {
                // line 149
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photo")), "html", null, true);
                echo "
                ";
            } else {
                // line 151
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photos")), "html", null, true);
                echo "
                ";
            }
            // line 153
            echo "            </p>
        </td>
        <td class=\"date column-date\">";
            // line 155
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "date", array()), "html", null, true);
            echo "</td>
    </tr>
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

    // line 159
    public function getlist_image($__image__ = null, $__sliderSettings__ = null, $__galleryId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            $context["nonProMsg"] = "Available in PRO";
            // line 161
            echo "    <tr data-entity data-entity-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-settings=\"";
            if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_sliderSettings_));
            echo "\" data-entity-type=\"photo\" data-entity-info=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_image_));
            echo "\" class=\"ggImgInfoRow\">
        <th scope=\"row\" class=\"check-column ggImgVertMoveCol\">
            <i class=\"fa fa-arrows-v ggImgVerticalMove\" aria-hidden=\"true\"></i>
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 165
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"image[]\" id=\"cb-select-";
            // line 166
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-observable>
        </th>
        <td class=\"column-icon media-icon\">
            <a href=\"";
            // line 169
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\" data-colorbox>
                ";
            // line 170
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 171
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 172
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 173
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 174
                    echo "                    ";
                } else {
                    // line 175
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 176
                    echo "                    ";
                }
                // line 177
                echo "                ";
            } else {
                // line 178
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 179
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 180
                echo "                ";
            }
            // line 181
            echo "                <img width=\"75\" height=\"75\" data-original=\"";
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\"
                     class=\"attachment-thumbnail supsystic-lazy\" alt=\"";
            // line 182
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\">
            </a>
        </td>
        <td class=\"title column-title\">
            <form id=\"photo-editor-";
            // line 186
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"photo-editor attachment-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\">
                <strong data-tabcontent=\".tabcontent-";
            // line 187
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
                    <a href=\"#photo-caption-";
            // line 188
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button active\">
                        ";
            // line 189
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-captionEffect-";
            // line 191
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 192
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption effect")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-seo-";
            // line 194
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 195
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-link-";
            // line 197
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 198
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-video-";
            // line 200
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 201
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-tags-";
            // line 203
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 204
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-linked-images-";
            // line 206
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 207
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked images")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-crop-";
            // line 209
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 210
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop")), "html", null, true);
            echo "
                    </a>
                    <a data-image-id=\"";
            // line 212
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-attachment-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\"
                       class=\"add-new-h2 button replace-image\">
                        ";
            // line 214
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replace image")), "html", null, true);
            echo "
                    </a>
                </strong>

                <p id=\"photo-caption-";
            // line 218
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
                    <input type=\"text\" name=\"caption\" value=\"";
            // line 219
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "caption", array());
            echo "\"
                           placeholder=\"";
            // line 220
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "\"/>
                </p>

                <p id=\"photo-captionEffect-";
            // line 223
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display:none;\">
                    <button class=\"button selectCaptionEffectBtn\" data-id=\"";
            // line 224
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</button>
                    <input type=\"text\" class=\"captionEffectVal\" name=\"captionEffect\" data-id=\"";
            // line 225
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_sliderSettings_, "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_sliderSettings_, "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
            echo "\" style=\"display: none;\" />
                </p>

                <p id=\"photo-seo-";
            // line 228
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display: none\">
                    <input type=\"text\" name=\"description\" value=\"";
            // line 229
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "description", array());
            echo "\"
                           style=\"width: 40%;\"
                           placeholder=\"";
            // line 231
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "\"/>
                    <input type=\"text\" name=\"alt\" value=\"";
            // line 232
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()))) {
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()) == " ")) {
                    echo "";
                } else {
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()), "html", null, true);
                }
            } else {
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"
                           style=\"width: 40%;\"
                           placeholder=\"";
            // line 234
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alternative text")), "html", null, true);
            echo "\"/>
                </p>

                <p id=\"photo-link-";
            // line 237
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display: none\">
                    <input
                            type=\"text\"
                            name=\"link\"
                            value=\"";
            // line 241
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "external_link", array()), "html", null, true);
            echo "\"
                            style=\"width: 50%;\"
                            placeholder=\"";
            // line 243
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("http://example.com/")), "html", null, true);
            echo "\"
                            />
                    <label style=\"border: 1px solid #9D9D9D;padding: 5px;\">
                        <input
                                type=\"checkbox\"
                                name=\"target\"
                                value=\"_blank\"
                                ";
            // line 250
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "target", array()) == "_blank")) {
                // line 251
                echo "                                    checked=\"checked\"
                                ";
            }
            // line 253
            echo "                                />
                        ";
            // line 254
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open in new window")), "html", null, true);
            echo "
                    </label>
                    <label style=\"border: 1px solid #9D9D9D;padding: 5px; margin-left: 5px;\">
                        <input
                                type=\"checkbox\"
                                name=\"rel\"
                                value=\"nofollow\"
                                ";
            // line 261
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "rel", array()) == "nofollow")) {
                // line 262
                echo "                                    checked=\"checked\"
                                ";
            }
            // line 264
            echo "                                />
                        ";
            // line 265
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add nofollow attribute")), "html", null, true);
            echo "
                    </label>
                </p>

                <p id=\"photo-video-";
            // line 269
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display: none; width: 350px;\">
                    <input
                            type=\"text\"
                            ";
            // line 272
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if ($this->getAttribute($_environment_, "isPro", array(), "method")) {
                // line 273
                echo "                                name=\"video\"
                                value=\"";
                // line 274
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "video", array()), "html", null, true);
                echo "\"
                            ";
            } else {
                // line 276
                echo "                                disabled=\"disabled\"
                                style=\"width: 200px;\"
                            ";
            }
            // line 279
            echo "                            placeholder=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video URL")), "html", null, true);
            echo "\"
                            >
                    ";
            // line 281
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 282
                echo "                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=video&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 284
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
                            </a>
                        </span>
                    ";
            }
            // line 288
            echo "                </p>

                <p id=\"photo-tags-";
            // line 290
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display:none;\">
                    ";
            // line 291
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 292
                echo "                        <input type=\"text\" style=\"width: 60%; margin-left:4px;\" disabled placeholder=\"Categories\">
                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=imagescategories&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 295
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
                            </a>
                        </span>
                    ";
            } else {
                // line 299
                echo "                        <input type=\"text\" class=\"gg-tags\" id=\"tags-";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" data-id=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\"
                               value=\"";
                // line 300
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_join_filter($this->getAttribute($_image_, "tags", array()), ",");
                echo "\">
                    ";
            }
            // line 302
            echo "                </p>

                <p id=\"photo-linked-images-";
            // line 304
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display:none;\">
                    ";
            // line 305
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 306
                echo "                        <button class=\"button disabled\" disabled>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=linked_images&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 309
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
                            </a>
                        </span>
                    ";
            } else {
                // line 313
                echo "                        <button class=\"button selectLinkedImages\" data-id=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                        <input type=\"text\" name=\"linkedImages\" data-id=\"";
                // line 314
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" value=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "linkedImages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "linkedImages", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"display: none;\" />
                    ";
            }
            // line 316
            echo "                </p>

                <p id=\"photo-crop-";
            // line 318
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" style=\"display:none; margin: 0;\">
                    <label style=\"margin-left: 5px;\">Image crop position: </label>
                    ";
            // line 320
            $context["cropPositionList"] = array("left-top" => "Top Left", "center-top" => "Top Center", "right-top" => "Top Right", "left-center" => "Center Left", "center-center" => "Center Center", "right-center" => "Center Right", "left-bottom" => "Bottom Left", "center-bottom" => "Bottom Center", "right-bottom" => "Bottom Right");
            // line 331
            echo "                    <select name=\"cropPosition\">
                        ";
            // line 332
            if (isset($context["cropPositionList"])) { $_cropPositionList_ = $context["cropPositionList"]; } else { $_cropPositionList_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_cropPositionList_);
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 333
                echo "                            <option value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (((($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "cropPosition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "cropPosition", array()), "center-center")) : ("center-center")) == $_value_)) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo twig_escape_filter($this->env, $_title_, "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                    </select>
                </p>

                <input name=\"replace_attachment_id\" id=\"replace_attachment_id_";
            // line 338
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"image_id\" value=\"";
            // line 339
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"attachment_id\" value=\"";
            // line 340
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"gallery_id\" value=\"";
            // line 341
            if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
            echo twig_escape_filter($this->env, $_galleryId_, "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"action\" value=\"grid-gallery\" type=\"hidden\"/>
                <input name=\"route[module]\" value=\"photos\" type=\"hidden\"/>
                <input name=\"route[action]\" value=\"updateAttachment\" type=\"hidden\"/>
            </form>
        </td>
        <td class=\"date column-date\" style=\"text-align: center;\">";
            // line 347
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "dateFormatted", array()), "html", null, true);
            echo "</td>
    </tr>
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
        return "@ui/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1125 => 347,  1115 => 341,  1110 => 340,  1105 => 339,  1100 => 338,  1095 => 335,  1076 => 333,  1071 => 332,  1068 => 331,  1066 => 320,  1057 => 318,  1053 => 316,  1044 => 314,  1034 => 313,  1026 => 309,  1019 => 306,  1016 => 305,  1008 => 304,  1004 => 302,  998 => 300,  989 => 299,  981 => 295,  976 => 292,  973 => 291,  965 => 290,  961 => 288,  953 => 284,  949 => 282,  946 => 281,  940 => 279,  935 => 276,  929 => 274,  926 => 273,  923 => 272,  913 => 269,  906 => 265,  903 => 264,  899 => 262,  896 => 261,  886 => 254,  883 => 253,  879 => 251,  876 => 250,  866 => 243,  860 => 241,  849 => 237,  843 => 234,  826 => 232,  822 => 231,  816 => 229,  808 => 228,  797 => 225,  788 => 224,  780 => 223,  774 => 220,  769 => 219,  761 => 218,  754 => 214,  745 => 212,  740 => 210,  735 => 209,  730 => 207,  725 => 206,  720 => 204,  715 => 203,  710 => 201,  705 => 200,  700 => 198,  695 => 197,  690 => 195,  685 => 194,  680 => 192,  675 => 191,  670 => 189,  665 => 188,  660 => 187,  652 => 186,  644 => 182,  638 => 181,  635 => 180,  632 => 179,  628 => 178,  625 => 177,  622 => 176,  619 => 175,  616 => 174,  613 => 173,  609 => 172,  605 => 171,  602 => 170,  597 => 169,  587 => 166,  579 => 165,  564 => 161,  561 => 160,  547 => 159,  528 => 155,  524 => 153,  518 => 151,  512 => 149,  509 => 148,  503 => 146,  493 => 140,  487 => 139,  474 => 130,  465 => 126,  454 => 122,  446 => 121,  439 => 118,  433 => 117,  421 => 116,  399 => 109,  393 => 107,  388 => 106,  376 => 102,  373 => 101,  370 => 100,  366 => 99,  363 => 98,  360 => 97,  357 => 96,  354 => 95,  351 => 94,  347 => 93,  343 => 92,  340 => 91,  335 => 90,  326 => 85,  320 => 84,  308 => 83,  286 => 76,  280 => 74,  271 => 69,  257 => 60,  248 => 55,  242 => 54,  230 => 53,  214 => 50,  203 => 48,  198 => 47,  195 => 46,  184 => 44,  179 => 43,  176 => 42,  173 => 41,  161 => 40,  144 => 36,  138 => 35,  136 => 34,  124 => 32,  117 => 31,  106 => 29,  101 => 28,  94 => 25,  87 => 22,  82 => 19,  75 => 15,  69 => 12,  63 => 9,  56 => 4,  53 => 3,  50 => 2,  36 => 1,  31 => 158,  28 => 115,  25 => 82,  22 => 52,  19 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ui/type.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Ui/views/type.twig");
    }
}
