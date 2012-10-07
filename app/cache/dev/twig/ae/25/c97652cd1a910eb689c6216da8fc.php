<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ae25c97652cd1a910eb689c6216da8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  25 => 4,  32 => 5,  19 => 2,  17 => 1,  46 => 11,  28 => 1,  24 => 11,  22 => 6,  20 => 2,  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  108 => 60,  103 => 57,  101 => 56,  94 => 51,  92 => 48,  88 => 46,  86 => 40,  75 => 31,  69 => 28,  65 => 26,  63 => 25,  58 => 22,  56 => 20,  35 => 8,  30 => 6,  23 => 3,  76 => 26,  70 => 23,  61 => 17,  54 => 13,  50 => 12,  44 => 11,  40 => 8,  37 => 6,  31 => 5,  29 => 4,  26 => 3,);
    }
}
