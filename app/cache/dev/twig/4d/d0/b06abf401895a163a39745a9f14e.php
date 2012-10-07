<?php

/* AccreditamentiCongressiBundle:Congresso:show.html.twig */
class __TwigTemplate_4dd0b06abf401895a163a39745a9f14e extends Twig_Template
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
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso"), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to the list
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_new", array("congresso_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\"
                           id=\"link_accreditamento_new\">
                            <span class=\"icon-plus-sign icon-white\"></span>   Crea accreditamento
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" id=\"cancella_congresso\">
                            <span class=\"icon-trash icon-white\"></span> Cancella
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\"
          id=\"form_cancella_congresso\"
          method=\"post\" ";
        // line 37
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "delete_form"));
        echo ">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
    </form>

    <script type=\"text/javascript\">/*<![CDATA[*/    (function () { 
        \$('#cancella_congresso').click(function(){
            \$('#form_cancella_congresso').submit();
            \$(this).preventDefault();
        });
    })(); /*]]>*/</script>

    ";
        // line 48
        if ((twig_length_filter($this->env, $this->getContext($context, "accreditamenti")) > 0)) {
            // line 49
            echo "        <h1>Accreditamento</h1>
    
        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Titolo accreditamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "accreditamenti"));
            foreach ($context['_seq'] as $context["_key"] => $context["accreditamento"]) {
                // line 61
                echo "                            <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento", array("id" => $this->getAttribute($this->getContext($context, "accreditamento"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "accreditamento"), "titolo"), "html", null, true);
                echo "</a></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accreditamento'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 63
            echo "                    </td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 68
        echo "        
    <h1>Congresso</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codice_congresso</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codicecongresso"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
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
                <th>Luogo</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manifesto</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "manifesto"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_programma</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pathpdfprogramma"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_iscrizione</th>
                <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pathpdfiscrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_prenotazione</th>
                <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pathpdfprenotazione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email_referente</th>
                <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emailreferente"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ricezione_abstract</th>
                <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ricezioneabstract"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagina_sponsor</th>
                <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "paginasponsor"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abilitato</th>
                <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "abilitato"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 135,  237 => 131,  230 => 127,  223 => 123,  216 => 119,  209 => 115,  202 => 111,  195 => 107,  188 => 103,  181 => 99,  174 => 95,  167 => 91,  160 => 87,  153 => 83,  146 => 79,  139 => 75,  130 => 68,  123 => 63,  112 => 61,  108 => 60,  95 => 49,  93 => 48,  80 => 38,  76 => 37,  71 => 35,  53 => 20,  45 => 15,  37 => 10,  29 => 4,  26 => 3,);
    }
}
