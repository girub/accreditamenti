<?php

/* ::base.html.twig */
class __TwigTemplate_c9607a88eed6b0761cb4f9ac9d539b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ruiantwitterbootstrap/css/bootstrapv2.css"), "html", null, true);
        echo "\">
   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js\" type=\"text/javascript\"></script>


        <script>
            \$(document).ready(function(){
                console.log('qwertyuiop');
            });
        </script>


    </head>
    <body>







<div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"/\">Admin</a>
          

           <div class=\"btn-group pull-right\">
            


     ";
        // line 45
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 46
            echo "            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"icon-user\"></i> ";
            // line 47
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "user"), "html", null, true);
            echo "
              <span class=\"caret\"></span>
            </a>
    ";
        } else {
            // line 51
            echo "            <a class=\"btn dropdown-toggle\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">
              <i class=\"icon-user\"></i> Login
             
            </a>
    ";
        }
        // line 56
        echo "


            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Profile</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Sign Out</a></li>
            </ul>
          </div>


          <div class=\"nav-collapse\">
            <ul class=\"nav\">
               ";
        // line 69
        $this->displayBlock('menu', $context, $blocks);
        // line 70
        echo "                        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 71
            echo "                            <li>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_new"), "html", null, true);
            echo "\" id=\"link-crea-nuovo-congresso\">
                                    <span class=\"icon-plus icon-white\"></span>nuovo congresso!
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso"), "html", null, true);
            echo "\">Congressi</a>
                            </li>

                            <li>
                                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento"), "html", null, true);
            echo "\">Accreditamenti</a>
                            </li>
                          
                     
                        ";
        }
        // line 86
        echo "            </ul>
          </div>
            <!--/.nav-collapse -->
        </div>
      </div>
    </div>















        <div class=\"container\">
            ";
        // line 108
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 109
            echo "                <div class=\"alert\">
                    <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 111
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 114
        echo "        </div>

<br>><br><br>

        <div class=\"container\">
            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                        ";
        // line 122
        $this->displayBlock('sidebar', $context, $blocks);
        // line 128
        echo "                    </div>
                    <div class=\"span10\">
                        ";
        // line 130
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "                    </div>
                </div>
            </div>
        </div>


  





        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "
        <!-- Some code -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ruiantwitterbootstrap/js/bootstrapv2.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 69
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 122
    public function block_sidebar($context, array $blocks = array())
    {
        // line 123
        echo "                            <h3>Sidebar</h3>
                            <div class=\"well\">
                                Ciao mondo!
                            </div>
                        ";
    }

    // line 130
    public function block_body($context, array $blocks = array())
    {
    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 143,  266 => 130,  258 => 123,  255 => 122,  250 => 69,  245 => 6,  239 => 5,  230 => 147,  225 => 144,  223 => 143,  209 => 131,  207 => 130,  203 => 128,  201 => 122,  191 => 114,  184 => 111,  180 => 109,  177 => 108,  153 => 86,  145 => 81,  138 => 77,  130 => 72,  127 => 71,  123 => 70,  121 => 69,  111 => 62,  103 => 56,  94 => 51,  86 => 47,  83 => 46,  80 => 45,  40 => 8,  35 => 7,  33 => 6,  23 => 1,  29 => 5,  26 => 3,);
    }
}
