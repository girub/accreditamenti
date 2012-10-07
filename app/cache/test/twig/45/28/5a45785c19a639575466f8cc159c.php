<?php

/* AccreditamentiCongressiBundle:Congresso:mostraTutti.html.twig */
class __TwigTemplate_45285a45785c19a639575466f8cc159c extends Twig_Template
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
        echo "<h1>Congresso list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
            echo "</td>
            <td>
                <ul>
<!--
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
-->
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:mostraTutti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  80 => 33,  68 => 27,  61 => 23,  53 => 18,  49 => 17,  46 => 16,  42 => 15,  29 => 4,  26 => 3,);
    }
}
