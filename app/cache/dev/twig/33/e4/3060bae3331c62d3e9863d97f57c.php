<?php

/* AccreditamentiCongressiBundle:Accreditamento:compilaEcm.html.twig */
class __TwigTemplate_33e43060bae3331c62d3e9863d97f57c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontEnd/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontEnd/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Compila il questionario ECM</h2>

  
    
    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("controlla_questionario_ecm", array("accreditamento_id" => $this->getContext($context, "accreditamento_id"), "anagrafica_id" => $this->getContext($context, "anagrafica_id"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "formDomande"));
        echo "
        <button type=\"submit\">invio</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:compilaEcm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  29 => 4,  26 => 3,);
    }
}
