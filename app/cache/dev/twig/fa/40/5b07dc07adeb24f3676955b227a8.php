<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_fa405b07dc07adeb24f3676955b227a8 extends Twig_Template
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
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array($this->getContext($context, "theme"), ));
        // line 2
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => $this->getContext($context, "groupname"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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
