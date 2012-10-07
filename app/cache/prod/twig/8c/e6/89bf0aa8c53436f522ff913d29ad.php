<?php

/* AccreditamentiCongressiBundle:Congresso:index.html.twig */
class __TwigTemplate_8ce689bf0aa8c53436f522ff913d29ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"well\">
        Tot congressi: ";
        // line 5
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_entities_), "html", null, true);
        echo "
    </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_new"), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Crea congresso
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <h1>Elenco dei congressi</h1>

    ";
        // line 27
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        if ((twig_length_filter($this->env, $_entities_) == 0)) {
            // line 28
            echo "    
        <em>Non ci sono congressi</em>
    
    ";
        } else {
            // line 32
            echo "    
        <table class=\"records_list\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codice_congresso</th>
                    <th>Url</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Data_inizio</th>
                    <th>Data_fine</th>
                    <th>Luogo</th>
                    <th>Manifesto</th>
                    <th>Path_pdf_programma</th>
                    <th>Path_pdf_iscrizione</th>
                    <th>Path_pdf_prenotazione</th>
                    <th>Email_referente</th>
                    <th>Ricezione_abstract</th>
                    <th>Pagina_sponsor</th>
                    <th>Abilitato</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 55
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_entities_);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 56
                echo "                <tr>
                    <td><a href=\"";
                // line 57
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 58
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "codicecongresso"), "html", null, true);
                echo "</td>
                    <td>";
                // line 59
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
                echo "</td>
                    <td>";
                // line 60
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
                echo "</td>
                    <td>";
                // line 61
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "descrizione"), "html", null, true);
                echo "</td>
                    <td>";
                // line 62
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "datainizio")) {
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 63
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "datafine")) {
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 64
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
                echo "</td>
                    <td>";
                // line 65
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "manifesto"), "html", null, true);
                echo "</td>
                    <td>";
                // line 66
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprogramma"), "html", null, true);
                echo "</td>
                    <td>";
                // line 67
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfiscrizione"), "html", null, true);
                echo "</td>
                    <td>";
                // line 68
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprenotazione"), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "emailreferente"), "html", null, true);
                echo "</td>
                    <td>";
                // line 70
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "ricezioneabstract"), "html", null, true);
                echo "</td>
                    <td>";
                // line 71
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "paginasponsor"), "html", null, true);
                echo "</td>
                    <td>";
                // line 72
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "abilitato"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "            </tbody>
        </table>
    ";
        }
        // line 78
        echo "
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 78,  202 => 75,  192 => 72,  187 => 71,  182 => 70,  177 => 69,  172 => 68,  167 => 67,  162 => 66,  157 => 65,  152 => 64,  144 => 63,  136 => 62,  131 => 61,  126 => 60,  121 => 59,  116 => 58,  108 => 57,  105 => 56,  100 => 55,  75 => 32,  69 => 28,  66 => 27,  52 => 16,  44 => 10,  41 => 9,  33 => 5,  30 => 4,  27 => 3,);
    }
}
