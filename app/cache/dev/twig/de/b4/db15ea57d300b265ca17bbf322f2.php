<?php

/* AccreditamentiCongressiBundle:Risposta:newEcm.html.twig */
class __TwigTemplate_deb4db15ea57d300b265ca17bbf322f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backEnd/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backEnd/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Risposta creation</h1>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_ecm_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta", array("domanda_id" => $this->getContext($context, "domanda_id"))), "html", null, true);
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Risposta:newEcm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  40 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
