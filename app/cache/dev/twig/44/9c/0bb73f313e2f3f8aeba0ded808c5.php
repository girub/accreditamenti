<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_449c0bb73f313e2f3f8aeba0ded808c5 extends Twig_Template
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
        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  18 => 1,  48 => 8,  34 => 5,  33 => 6,  36 => 6,  21 => 2,  39 => 7,  25 => 4,  32 => 5,  19 => 2,  17 => 1,  46 => 11,  28 => 1,  24 => 11,  22 => 6,  20 => 2,  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  108 => 60,  103 => 57,  101 => 56,  94 => 51,  92 => 48,  88 => 46,  86 => 40,  75 => 31,  69 => 28,  65 => 26,  63 => 25,  58 => 22,  56 => 20,  35 => 8,  30 => 6,  23 => 3,  76 => 26,  70 => 23,  61 => 17,  54 => 13,  50 => 12,  44 => 11,  40 => 8,  37 => 6,  31 => 3,  29 => 4,  26 => 3,);
    }
}
