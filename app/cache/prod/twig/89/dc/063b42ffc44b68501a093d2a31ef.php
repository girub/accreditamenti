<?php

/* AccreditamentiCongressiBundle:Accreditamento:show.html.twig */
class __TwigTemplate_89dc063b42ffc44b68501a093d2a31ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Accreditamento ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento"), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to the list
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 22
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_new", array("accreditamento_id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. ecm
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_customer_satisfaction_new", array("accreditamento_id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. CS
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" href=\"#myModal\"> <span class=\"icon-trash icon-white\"></span> Cancella</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"modal hide\" id=\"myModal\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Attenzione stai eliminando un accreditamento</h3>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>
            <form action=\"";
        // line 46
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 47
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_delete_form_);
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Elimina</button>
            </form>
        </div>
    </div>
    
    <h2>Congresso</h2>
    <table class=\"table table-striped table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Titolo congresso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href=\"";
        // line 62
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($this->getAttribute($_entity_, "congresso"), "id"))), "html", null, true);
        echo "\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "congresso"), "html", null, true);
        echo "</a></td>
            </tr>
        </tbody>
    </table>

    ";
        // line 67
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_entity_, "getQuestionarioecm", array(), "method")) > 0)) {
            // line 68
            echo "        <h2>Questionari</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 77
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "getQuestionarioecm", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 78
                echo "                    <tr>
                        <td>";
                // line 79
                if (isset($context["questionario"])) { $_questionario_ = $context["questionario"]; } else { $_questionario_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_questionario_, "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 80
                if (isset($context["questionario"])) { $_questionario_ = $context["questionario"]; } else { $_questionario_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_show", array("id" => $this->getAttribute($_questionario_, "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 83
            echo "            </tbody>
        </table>
    ";
        }
        // line 86
        echo "    
    <h1>Accreditamento</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 93
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero_accreditamento</th>
                <td>";
        // line 97
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numeroaccreditamento"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 101
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Luogo</th>
                <td>";
        // line 105
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 109
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 113
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ore_formative</th>
                <td>";
        // line 117
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "oreformative"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obiettivo_formativo</th>
                <td>";
        // line 121
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "obiettivoformativo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero_crediti</th>
                <td>";
        // line 125
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numerocrediti"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 125,  238 => 121,  230 => 117,  222 => 113,  214 => 109,  206 => 105,  198 => 101,  190 => 97,  182 => 93,  173 => 86,  168 => 83,  158 => 80,  153 => 79,  150 => 78,  145 => 77,  134 => 68,  131 => 67,  119 => 62,  100 => 47,  95 => 46,  72 => 27,  63 => 22,  54 => 17,  46 => 12,  38 => 6,  35 => 5,  27 => 3,);
    }
}
