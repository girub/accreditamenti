<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_82290568c4ede2b547e2ac27f7c360d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  103 => 57,  101 => 56,  92 => 48,  69 => 28,  65 => 26,  63 => 25,  56 => 20,  44 => 8,  40 => 10,  37 => 9,  35 => 8,  23 => 1,  125 => 35,  114 => 49,  108 => 60,  102 => 43,  94 => 51,  91 => 37,  88 => 46,  86 => 40,  75 => 31,  70 => 27,  66 => 25,  58 => 22,  51 => 17,  46 => 15,  30 => 4,  27 => 3,  54 => 14,  48 => 16,  41 => 7,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
