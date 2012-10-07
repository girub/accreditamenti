<?php

/* AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig */
class __TwigTemplate_57baff9d361e6a3a2f617b8b3f032a62 extends Twig_Template
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
        echo "<h1>Benvenuto - compila Anagrafica</h1>

qui devo far compilare l'anagrafica all'iscritto che è appena entrato inserendo il suo codice fiscale


<h1>Anagrafica creation</h1>

<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_create", array("accreditamento_id" => $this->getContext($context, "accreditamento_id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>



";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  44 => 12,  38 => 11,  29 => 4,  26 => 3,);
    }
}
