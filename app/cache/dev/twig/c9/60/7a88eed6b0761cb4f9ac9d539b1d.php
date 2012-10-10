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
            'topmenu' => array($this, 'block_topmenu'),
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ruiantwitterbootstrap/css/bootstrapv2.css"), "html", null, true);
        echo "\">
   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js\" type=\"text/javascript\"></script>

    </head>
    <body>

        
        ";
        // line 20
        $this->displayBlock('topmenu', $context, $blocks);
        // line 22
        echo "        
        <br><br><br><br>
        <div class=\"container\">
            ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 26
            echo "                <div class=\"alert\">
                    <button class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 31
        echo "        </div>

        <br><br><br>

        
        <div class=\"container\">
            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        ";
        // line 40
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "                    </div>
                    <div class=\"span8\">
                        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
        <!-- Some code -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ruiantwitterbootstrap/js/bootstrapv2.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_topmenu($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        // line 41
        echo "                            <h3>Sidebar</h3>
                            <div class=\"well\">
                                Ciao mondo!
                            </div>
                        ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "                            <h1>Wellcome to Accreditamenti!</h1>
                        ";
    }

    // line 56
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
        return array (  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  103 => 57,  101 => 56,  92 => 48,  69 => 28,  65 => 26,  63 => 25,  56 => 20,  44 => 11,  40 => 10,  37 => 9,  35 => 8,  23 => 1,  125 => 35,  114 => 49,  108 => 60,  102 => 43,  94 => 51,  91 => 37,  88 => 46,  86 => 40,  75 => 31,  70 => 27,  66 => 25,  58 => 22,  51 => 17,  46 => 15,  30 => 6,  27 => 3,  54 => 14,  48 => 16,  41 => 13,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
