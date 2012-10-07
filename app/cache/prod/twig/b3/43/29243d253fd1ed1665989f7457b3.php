<?php

/* AccreditamentiCongressiBundle:Accreditamento:index.html.twig */
class __TwigTemplate_b34329243d253fd1ed1665989f7457b3 extends Twig_Template
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
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>
                    <h2>";
            // line 18
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
            echo "</h2>
                    <span class=\"icon-book\"></span> <a href=\"";
            // line 19
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numeroaccreditamento"), "html", null, true);
            echo "</a><br />
                    <span class=\"icon-road\"></span> ";
            // line 20
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
            echo "<br />
                    ";
            // line 21
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "datainizio")) {
                echo "<span class=\"icon-calendar\"></span> ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br />
                    ";
            // line 22
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "datafine")) {
                echo "<span class=\"icon-calendar\"></span> ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br />
                </td>
                <td>
                    <strong>Obiettivo formativo:</strong> ";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "obiettivoformativo"), "html", null, true);
            echo "<br />
                    <strong>Ore formative:</strong> ";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "oreformative"), "html", null, true);
            echo "<br />
                    <strong>Numero crediti:</strong> ";
            // line 27
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numerocrediti"), "html", null, true);
            echo "<br />
                </td>
                <td>
                    <a href=\"";
            // line 30
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><span class=\"icon-eye-open\"></span></a><br />
                    <a href=\"";
            // line 31
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><span class=\"icon-edit\"></span></a><br />
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
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
        return array (  122 => 35,  111 => 31,  106 => 30,  99 => 27,  94 => 26,  89 => 25,  78 => 22,  69 => 21,  64 => 20,  56 => 19,  51 => 18,  47 => 16,  42 => 15,  29 => 4,  26 => 3,);
    }
}
