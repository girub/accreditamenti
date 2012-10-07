<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b67df6a55f6037921cc6caac6f3eee87 extends Twig_Template
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
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_security.target_path"), "method");
            // line 7
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  34 => 5,  33 => 6,  36 => 6,  21 => 3,  39 => 7,  25 => 4,  32 => 5,  19 => 2,  17 => 1,  46 => 11,  28 => 1,  24 => 11,  22 => 6,  20 => 1,  154 => 56,  149 => 49,  146 => 48,  138 => 41,  135 => 40,  131 => 21,  128 => 20,  123 => 8,  117 => 6,  108 => 60,  103 => 57,  101 => 56,  94 => 51,  92 => 48,  88 => 46,  86 => 40,  75 => 31,  69 => 28,  65 => 26,  63 => 25,  58 => 22,  56 => 20,  35 => 8,  30 => 6,  23 => 3,  76 => 26,  70 => 23,  61 => 17,  54 => 13,  50 => 12,  44 => 11,  40 => 8,  37 => 6,  31 => 3,  29 => 4,  26 => 3,);
    }
}
