<?php

/* grid-gallery.twig */
class __TwigTemplate_b298067e67c2a49751b45f4ad8ee2d625adda523736d365a57344cf88cda15d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alerts' => array($this, 'block_alerts'),
            'header' => array($this, 'block_header'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'table' => array($this, 'block_table'),
            'notes' => array($this, 'block_notes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wraper\">

    ";
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('alerts', $context, $blocks);
        // line 10
        echo "
    <div class=\"supsystic-plugin\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        <section class=\"supsystic-content\">
            <nav class=\"supsystic-navigation supsystic-sticky\" style=\"top: 0px;\">
                <ul>
                    <li class=\"supsystic-sticky ";
        // line 20
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "overview")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 21
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "overview"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-info\"></i>
                            ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li ";
        // line 26
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ((($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "galleries") && ($this->getAttribute($this->getAttribute($_request_, "query", array()), "action", array()) == "showPresets"))) {
            echo "class=\"active\" ";
        }
        echo ">
                        <a id=\"btn-add-new\" href=\"";
        // line 27
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New Gallery")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"supsystic-sticky ";
        // line 32
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (((($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "galleries") || (null === $this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()))) && ($this->getAttribute($this->getAttribute($_request_, "query", array()), "action", array()) != "showPresets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 33
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-archive\"></i>
                            ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "
                        </a>
                    </li>


                    <li class=\"supsystic-sticky ";
        // line 40
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "settings")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 41
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "settings"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-gear\"></i>
                            ";
        // line 43
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Settings"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>
                    
                    ";
        // line 47
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ($this->getAttribute($_environment_, "getModule", array(0 => "license"), "method")) {
            // line 48
            echo "                        <li class=\"supsystic-sticky ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "license")) {
                echo "active";
            }
            echo "\">
                            <a href=\"";
            // line 49
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "license"), "method"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-hand-o-right\"></i>
                                ";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("License")), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 55
        echo "\t\t\t\t\t
\t\t\t\t\t<li class=\"supsystic-sticky ";
        // line 56
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (($this->getAttribute($this->getAttribute($_request_, "query", array()), "module", array()) == "featuredplugins")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 57
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "featuredplugins"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-heart\"></i>
                            ";
        // line 59
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Featured Plugins"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>

                    ";
        // line 64
        echo "                    ";
        // line 70
        echo "
                    ";
        // line 72
        echo "                    ";
        // line 117
        echo "
                    ";
        // line 126
        echo "                </ul>
            </nav>
            <div class=\"supsystic-container supsystic-item supsystic-panel\">
                ";
        // line 129
        $this->displayBlock('preview', $context, $blocks);
        // line 130
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "                <div class=\"clear\"></div>
                ";
        // line 132
        $this->displayBlock('table', $context, $blocks);
        // line 133
        echo "            </div>
        </section>
    </div>

    <!-- Modal loading overlay -->
    <div class=\"gg-modal-loading-overlay\"></div>
    <div class=\"gg-modal-loading-object\">
        <p>
            <span id=\"loading-text\">Loading</span>
            <img src=\"";
        // line 142
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_environment_, "config", array()), "get", array(0 => "admin_url"), "method") . "/images/wpspin_light.gif"), "html", null, true);
        echo "\" alt=\"\"
                 title=\"";
        // line 143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading")), "html", null, true);
        echo "\"/>
        </p>
    </div>

    ";
        // line 147
        $this->displayBlock('notes', $context, $blocks);
        // line 148
        echo "</div>
";
    }

    // line 9
    public function block_alerts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"supsystic-breadcrumbs\">
                Gallery by Supsystic
            </div>
        ";
    }

    // line 129
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
    }

    // line 132
    public function block_table($context, array $blocks = array())
    {
    }

    // line 147
    public function block_notes($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grid-gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 147,  253 => 132,  248 => 130,  243 => 129,  236 => 13,  233 => 12,  228 => 9,  223 => 148,  221 => 147,  214 => 143,  209 => 142,  198 => 133,  196 => 132,  193 => 131,  190 => 130,  188 => 129,  183 => 126,  180 => 117,  178 => 72,  175 => 70,  173 => 64,  165 => 59,  159 => 57,  152 => 56,  149 => 55,  142 => 51,  136 => 49,  128 => 48,  125 => 47,  117 => 43,  111 => 41,  104 => 40,  96 => 35,  90 => 33,  83 => 32,  77 => 29,  71 => 27,  64 => 26,  58 => 23,  52 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  32 => 9,  29 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "grid-gallery.twig", "/home/user1013/data/www/ckek.ru/wp-content/plugins/gallery-by-supsystic/app/templates/grid-gallery.twig");
    }
}
