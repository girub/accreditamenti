<?php

/* ::frontEnd/base.html.twig */
class __TwigTemplate_40dea064b602b96716077d5b215f51b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_sidebar($context, array $blocks = array())
    {
        echo "<h3>FrontEnd</h3>";
    }

    public function getTemplateName()
    {
        return "::frontEnd/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  94 => 29,  87 => 27,  81 => 25,  75 => 23,  72 => 22,  68 => 20,  64 => 18,  62 => 17,  57 => 15,  54 => 14,  50 => 13,  44 => 11,  40 => 10,  34 => 7,  29 => 4,  26 => 3,);
    }
}
