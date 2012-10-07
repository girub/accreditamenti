<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_e17c21cab61eb39a407416b33c9331fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_id_, array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  18 => 1,  37 => 6,  31 => 4,  24 => 3,  21 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}
