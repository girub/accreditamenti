<?php

/* AccreditamentiCongressiBundle:Congresso:elencoCongressi.html.twig */
class __TwigTemplate_492b148902e5485e195f25be91e8c7df extends Twig_Template
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
<h2>Pagina elenco congressi</h2>

    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "congressi"));
        foreach ($context['_seq'] as $context["_key"] => $context["congresso"]) {
            // line 8
            echo "
     ";
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamenti_congresso", array("id" => $this->getAttribute($this->getContext($context, "congresso"), "id"))), "html", null, true);
            echo "\" id=\"link_accreditamenti_congresso";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "congresso"), "id"), "html", null, true);
            echo "\">
";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "congresso"), "titolo"), "html", null, true);
            echo "
    </a>
    <BR>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "congresso"), "descrizione"), "html", null, true);
            echo "
    <hr/>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['congresso'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:elencoCongressi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  48 => 11,  41 => 10,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
