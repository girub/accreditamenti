<?php

/* ::backEnd/base.html.twig */
class __TwigTemplate_aeb6ed077d8a88ce9921639a5d112aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'topmenu' => array($this, 'block_topmenu'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topmenu($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elenco_congresso"), "html", null, true);
        echo "\">Admin</a>
            <div class=\"btn-group pull-right\">
                            ";
        // line 15
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 16
            echo "                    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"icon-user\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "
                        <span class=\"caret\"></span>
                    </a>
                            ";
        } else {
            // line 21
            echo "                    <a class=\"btn dropdown-toggle\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">
                        <i class=\"icon-user\"></i> Login
                    </a>
                            ";
        }
        // line 25
        echo "
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Profile</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">logout (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
        echo ")</a></li>
                    </ul>
                </div>

                <div class=\"nav-collapse\">
                    <ul class=\"nav\">
                                ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "                                ";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 37
            echo "                            <li>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_new"), "html", null, true);
            echo "\" id=\"link-crea-nuovo-congresso\">
                                    <span class=\"icon-plus icon-white\"></span>nuovo congresso!
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso"), "html", null, true);
            echo "\">Congressi</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento"), "html", null, true);
            echo "\">Accreditamenti</a>
                            </li>
                                ";
        }
        // line 49
        echo "                        </ul>
                    </div>

                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
";
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::backEnd/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  114 => 49,  108 => 46,  102 => 43,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  75 => 29,  70 => 27,  66 => 25,  58 => 21,  51 => 17,  46 => 15,  30 => 4,  27 => 3,  54 => 14,  48 => 16,  41 => 13,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
