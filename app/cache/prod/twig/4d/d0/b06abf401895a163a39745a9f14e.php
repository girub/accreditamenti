<?php

/* AccreditamentiCongressiBundle:Congresso:show.html.twig */
class __TwigTemplate_4dd0b06abf401895a163a39745a9f14e extends Twig_Template
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
        echo "\">
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
        // line 37
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" id=\"form_cancella_congresso\" method=\"post\" ";
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

    <h1>Congresso</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 55
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codice_congresso</th>
                <td>";
        // line 59
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "codicecongresso"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 63
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 67
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione</th>
                <td>";
        // line 71
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "descrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 75
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 79
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Luogo</th>
                <td>";
        // line 83
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manifesto</th>
                <td>";
        // line 87
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "manifesto"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_programma</th>
                <td>";
        // line 91
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprogramma"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_iscrizione</th>
                <td>";
        // line 95
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfiscrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path_pdf_prenotazione</th>
                <td>";
        // line 99
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "pathpdfprenotazione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email_referente</th>
                <td>";
        // line 103
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "emailreferente"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ricezione_abstract</th>
                <td>";
        // line 107
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "ricezioneabstract"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagina_sponsor</th>
                <td>";
        // line 111
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "paginasponsor"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abilitato</th>
                <td>";
        // line 115
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
        return array (  224 => 115,  216 => 111,  208 => 107,  200 => 103,  192 => 99,  184 => 95,  176 => 91,  168 => 87,  160 => 83,  152 => 79,  144 => 75,  136 => 71,  128 => 67,  120 => 63,  112 => 59,  104 => 55,  83 => 38,  75 => 37,  54 => 20,  45 => 15,  37 => 10,  29 => 4,  26 => 3,);
    }
}
