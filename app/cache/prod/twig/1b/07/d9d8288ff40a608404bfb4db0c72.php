<?php

/* AccreditamentiCongressiBundle:Accreditamento:index.html.twig */
class __TwigTemplate_1b07d9d8288ff40a608404bfb4db0c72 extends Twig_Template
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
        echo "<h1>Accreditamento list</h1>
<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Numero_accreditamento</th>
            <th>Titolo</th>
            <th>Luogo</th>
            <th>Data_inizio</th>
            <th>Data_fine</th>
            <th>Ore_formative</th>
            <th>Obiettivo_formativo</th>
            <th>Numero_crediti</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "        <tr>
            <td><a href=\"";
            // line 23
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 24
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numeroaccreditamento"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "datainizio")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 28
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "datafine")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 29
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "oreformative"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "obiettivoformativo"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numerocrediti"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 35
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 38
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        // line 44
        echo "    </tbody>
</table>





<ul>
accreditamento_new
    <li>
        <a href=\"\">
            Create a new entry
        </a>
    </li>

</ul>


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
        return array (  133 => 44,  120 => 38,  113 => 35,  105 => 31,  100 => 30,  95 => 29,  87 => 28,  79 => 27,  74 => 26,  69 => 25,  64 => 24,  56 => 23,  53 => 22,  48 => 21,  29 => 4,  26 => 3,);
    }
}
