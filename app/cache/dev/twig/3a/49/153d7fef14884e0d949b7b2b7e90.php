<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_3a49153d7fef14884e0d949b7b2b7e90 extends Twig_Template
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
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => $this->getContext($context, "email")), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  48 => 8,  39 => 10,  34 => 5,  46 => 11,  24 => 11,  20 => 1,  36 => 6,  25 => 4,  21 => 3,  33 => 6,  28 => 4,  22 => 3,  19 => 2,  17 => 1,  76 => 26,  70 => 23,  61 => 17,  54 => 13,  50 => 12,  31 => 6,  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  108 => 60,  103 => 57,  101 => 56,  94 => 51,  92 => 48,  88 => 46,  86 => 40,  75 => 31,  69 => 28,  65 => 26,  63 => 25,  58 => 22,  56 => 20,  44 => 9,  40 => 8,  37 => 6,  35 => 8,  30 => 6,  23 => 3,  29 => 4,  26 => 3,);
    }
}
