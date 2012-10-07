<?php

/* AccreditamentiCongressiBundle:Accreditamento:loginAccreditamento.html.twig */
class __TwigTemplate_890ce2e79c68aab5977350e6c684c441 extends Twig_Template
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
        echo "<h1>Entra in accreditamento</h1>

Inserire il proprio codice fiscale (senza spazi)
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_iscritto", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "

    <input type=\"submit\"  value=\"Accedi\"/>
</form>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:loginAccreditamento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
