<?php

/* AccreditamentiCongressiBundle:Accreditamento:index.html.twig */
class __TwigTemplate_1b07d9d8288ff40a608404bfb4db0c72 extends Twig_Template
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
<h1>Accreditamento list</h1>

<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th>Accreditamento</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>
                    <h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
            echo "</h2>
                    <span class=\"icon-book\"></span> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numeroaccreditamento"), "html", null, true);
            echo "</a><br />
                    <span class=\"icon-road\"></span> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogo"), "html", null, true);
            echo "<br />
                    ";
            // line 21
            if ($this->getAttribute($this->getContext($context, "entity"), "datainizio")) {
                echo "<span class=\"icon-calendar\"></span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainizio"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br />
                    ";
            // line 22
            if ($this->getAttribute($this->getContext($context, "entity"), "datafine")) {
                echo "<span class=\"icon-calendar\"></span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafine"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br />
                </td>
                <td>
                    <strong>Obiettivo formativo:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "obiettivoformativo"), "html", null, true);
            echo "<br />
                    <strong>Ore formative:</strong> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "oreformative"), "html", null, true);
            echo "<br />
                    <strong>Numero crediti:</strong> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocrediti"), "html", null, true);
            echo "<br />
                </td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><span class=\"icon-eye-open\"></span></a><br />
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><span class=\"icon-edit\"></span></a><br />
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carica_iscritti", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Carica gli iscritti al congresso</a><br />
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  106 => 36,  98 => 31,  94 => 30,  88 => 27,  84 => 26,  80 => 25,  71 => 22,  64 => 21,  60 => 20,  54 => 19,  50 => 18,  46 => 16,  42 => 15,  29 => 4,  26 => 3,);
    }
}
