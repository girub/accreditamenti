<?php

/* AccreditamentiCongressiBundle:Accreditamento:show.html.twig */
class __TwigTemplate_69876b8b8ae57506c9964988a84df2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backEnd/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Accreditamento ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. ecm
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_customer_satisfaction_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. CS
                        </a>
                    </li>
                     <li>
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_valutazione_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. Valutazione
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
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
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
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "congresso"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "congresso"), "html", null, true);
        echo "</a></td>
            </tr>
        </tbody>
    </table>
     <h1>Accreditamento</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero_accreditamento</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numeroaccreditamento"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
        echo "</td>
            </tr>
           <!-- <tr>
                <th>Luogo</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ore_formative</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "oreformative"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obiettivo_formativo</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "obiettivoformativo"), "html", null, true);
        echo "</td>
            </tr>
            -->
            <tr>
                <th>Numero_crediti</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocrediti"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    
    

    ";
        // line 120
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioEcm", array(), "method")) > 0)) {
            // line 121
            echo "        <h2>Questionario ECM</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioEcm", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 131
                echo "                    <tr>
                        <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 136
            echo "            </tbody>
        </table>
    ";
        }
        // line 139
        echo "        
    ";
        // line 140
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioCustomerSatisfaction", array(), "method")) > 0)) {
            // line 141
            echo "        <h2>Questionari Customer Satisfaction</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioCustomerSatisfaction", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 151
                echo "                    <tr>
                        <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_customer_satisfaction_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 156
            echo "            </tbody>
        </table>
    ";
        }
        // line 158
        echo "    
        
      
   ";
        // line 161
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioValutazione", array(), "method")) > 0)) {
            // line 162
            echo "        <h2>Questionari Valutazione</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioValutazione", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 172
                echo "                    <tr>
                        <td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_valutazione_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 177
            echo "            </tbody>
        </table>
    ";
        }
        // line 179
        echo "     
   

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
        return array (  328 => 179,  323 => 177,  314 => 174,  310 => 173,  307 => 172,  303 => 171,  292 => 162,  290 => 161,  285 => 158,  280 => 156,  271 => 153,  267 => 152,  264 => 151,  260 => 150,  249 => 141,  247 => 140,  244 => 139,  239 => 136,  230 => 133,  226 => 132,  223 => 131,  219 => 130,  208 => 121,  206 => 120,  195 => 112,  187 => 107,  180 => 103,  173 => 99,  166 => 95,  159 => 91,  152 => 87,  145 => 83,  138 => 79,  123 => 69,  105 => 54,  101 => 53,  77 => 32,  69 => 27,  61 => 22,  53 => 17,  45 => 12,  37 => 6,  34 => 5,  27 => 3,);
    }
}
