<?php

/* AccreditamentiCongressiBundle:Congresso:show.html.twig */
class __TwigTemplate_d2c5eadfa78696f43ac64635f93729e6 extends Twig_Template
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_new", array("congresso_id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\"
          id=\"form_cancella_congresso\"
          method=\"post\" ";
        // line 37
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_delete_form_);
        echo ">
        ";
        // line 38
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_delete_form_);
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
        if (isset($context["accreditamenti"])) { $_accreditamenti_ = $context["accreditamenti"]; } else { $_accreditamenti_ = null; }
        if ((twig_length_filter($this->env, $_accreditamenti_) > 0)) {
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
            if (isset($context["accreditamenti"])) { $_accreditamenti_ = $context["accreditamenti"]; } else { $_accreditamenti_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_accreditamenti_);
            foreach ($context['_seq'] as $context["_key"] => $context["accreditamento"]) {
                // line 61
                echo "                            <div><a href=\"";
                if (isset($context["accreditamento"])) { $_accreditamento_ = $context["accreditamento"]; } else { $_accreditamento_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento", array("id" => $this->getAttribute($_accreditamento_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["accreditamento"])) { $_accreditamento_ = $context["accreditamento"]; } else { $_accreditamento_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_accreditamento_, "titolo"), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codice_congresso</th>
                <td>";
        // line 79
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "codicecongresso"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 83
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 87
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione</th>
                <td>";
        // line 91
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "descrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 95
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 99
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Luogo</th>
                <td>";
        // line 103
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manifesto</th>
                <td>";
        // line 107
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "manifesto"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_programma</th>
                <td>";
        // line 111
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprogramma"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_iscrizione</th>
                <td>";
        // line 115
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfiscrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_prenotazione</th>
                <td>";
        // line 119
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprenotazione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email_referente</th>
                <td>";
        // line 123
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "emailreferente"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ricezione_abstract</th>
                <td>";
        // line 127
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "ricezioneabstract"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagina_sponsor</th>
                <td>";
        // line 131
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "paginasponsor"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abilitato</th>
                <td>";
        // line 135
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "abilitato"), "html", null, true);
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
        return array (  268 => 135,  260 => 131,  252 => 127,  244 => 123,  236 => 119,  228 => 115,  220 => 111,  212 => 107,  204 => 103,  196 => 99,  188 => 95,  180 => 91,  172 => 87,  164 => 83,  156 => 79,  148 => 75,  139 => 68,  132 => 63,  119 => 61,  114 => 60,  101 => 49,  98 => 48,  84 => 38,  79 => 37,  73 => 35,  54 => 20,  45 => 15,  37 => 10,  29 => 4,  26 => 3,);
    }
}
