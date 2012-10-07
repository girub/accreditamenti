<?php

/* AccreditamentiCongressiBundle:Accreditamento:caricaIscritti.html.twig */
class __TwigTemplate_6d9ed7a67a6eba1e3c815aee586be26c extends Twig_Template
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
        echo "<h1>Accreditamento -- carica iscritti</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("upload_iscritti", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "

    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:caricaIscritti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
