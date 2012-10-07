<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9f30e892c98fd2d710083127c1f0bb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  74 => 23,  65 => 17,  57 => 13,  53 => 12,  46 => 9,  42 => 8,  39 => 7,  32 => 5,  29 => 4,  26 => 3,);
    }
}
