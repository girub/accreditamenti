<?php

/* AccreditamentiCongressiBundle:QuestionarioEcm:show.html.twig */
class __TwigTemplate_44bfa36f9f7cc6f0d7b65078e6069dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backEnd/base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Congresso</h1>

    <div class=\"well\">
        <strong>nome:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "getCongresso"), "html", null, true);
        echo "<br />
        <strong>accreditamento:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "html", null, true);
        echo "<br />
    </div>

    <h1>Questionario ECM</h1>

    <div class=\"well\">
        <strong>descrizione:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
        echo "<br />
        <strong>inizio:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainiziocompilazione"), "Y-m-d H:i:s"), "html", null, true);
        echo "<br />
        <strong>fine:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafinecompilazione"), "Y-m-d H:i:s"), "html", null, true);
        echo "<br />
        <strong>percentuale:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "percentualerisposteesatte"), "html", null, true);
        echo "<br />
        <strong>tentativi:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerotentativicompilazione"), "html", null, true);
        echo "<br />
    </div>

";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
     <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to Accreditamento
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_ecm_new", array("questionarioecm_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Crea domanda
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
            <h3>Attenzione stai eliminando:</h3>
            <br><b>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>
            
          <form action=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Elimina</button>
            </form>
        </div>
    </div>




<div class=\"row\">
  <div class=\"span6 offset6\"><span class=\"label label-warning\">risposta vera</span></div>
</div>

    <ul>
    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "domande"));
        foreach ($context['_seq'] as $context["_key"] => $context["domanda"]) {
            // line 78
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_ecm_edit", array("id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
            echo "\"><span class=\"icon-edit\"></span></a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domanda"), "descrizione"), "html", null, true);
            echo "
        <ul>
            ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "domanda"), "getRisposta"));
            foreach ($context['_seq'] as $context["_key"] => $context["risposta"]) {
                // line 81
                echo "                <li>
                   <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_ecm_edit", array("id" => $this->getAttribute($this->getContext($context, "risposta"), "id"))), "html", null, true);
                echo "\">
                    <span class=\"icon-edit\"></span></a>
                       ";
                // line 84
                if ($this->getAttribute($this->getContext($context, "risposta"), "aperta")) {
                    // line 85
                    echo "                           <span class=\"icon-folder-open\"></span>
                       ";
                } else {
                    // line 87
                    echo "                           <span class=\"icon-folder-close\"></span>
                       ";
                }
                // line 89
                echo "                       ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "vero")) > 0)) {
                    // line 90
                    echo "                            <span class=\"label label-warning\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " </span>
                       ";
                } else {
                    // line 92
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " 
                       ";
                }
                // line 94
                echo "                   </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['risposta'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 96
            echo "            <li>
                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_ecm_new", array("domanda_id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
            echo "\">
                    <span class=\"icon-plus-sign\"></span> <em>aggiungi risposta</em>
                </a>
            </li>
        </ul>
        </li><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domanda'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:QuestionarioEcm:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 104,  207 => 97,  204 => 96,  197 => 94,  191 => 92,  185 => 90,  182 => 89,  178 => 87,  174 => 85,  172 => 84,  167 => 82,  164 => 81,  160 => 80,  152 => 78,  148 => 77,  131 => 63,  127 => 62,  119 => 57,  100 => 41,  92 => 36,  84 => 31,  76 => 25,  73 => 24,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  40 => 9,  36 => 8,  30 => 4,  27 => 3,);
    }
}
