<?php

/* AccreditamentiCongressiBundle:Congresso:edit.html.twig */
class __TwigTemplate_0bb35496db65b3260dd548e26c28de38 extends Twig_Template
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
                        <a href=\"#\" id=\"cancella_congresso\">
                            <span class=\"icon-trash icon-white\"></span> Cancella
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <form action=\"";
        // line 24
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" id=\"form_cancella_congresso\" method=\"post\" ";
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_delete_form_);
        echo ">
        ";
        // line 25
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
        
    <h1>Congresso modifica</h1>

    <form action=\"";
        // line 37
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_update", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_edit_form_);
        echo ">

        ";
        // line 39
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_edit_form_);
        echo "

        <div>
            ";
        // line 42
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "codice_congresso"));
        echo "
            ";
        // line 43
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "codice_congresso"));
        echo "
            ";
        // line 44
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "codice_congresso"));
        echo "
        </div>

        <div>
            ";
        // line 48
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "url"));
        echo "
            ";
        // line 49
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "url"));
        echo "
            ";
        // line 50
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "url"));
        echo "
        </div>

        <div>
            ";
        // line 54
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "titolo"));
        echo "
            ";
        // line 55
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "titolo"));
        echo "
            ";
        // line 56
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "titolo"));
        echo "
        </div>

        <div>
            ";
        // line 60
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "descrizione"));
        echo "
            ";
        // line 61
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "descrizione"));
        echo "
            ";
        // line 62
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "descrizione"));
        echo "
        </div>

        <div>
            ";
        // line 66
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "data_inizio"));
        echo "
            ";
        // line 67
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "data_inizio"));
        echo "
            ";
        // line 68
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "data_inizio"));
        echo "
        </div>

        <div>
            ";
        // line 72
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "data_fine"));
        echo "
            ";
        // line 73
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "data_fine"));
        echo "
            ";
        // line 74
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "data_fine"));
        echo "
        </div>

        <div>
            ";
        // line 78
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "luogo"));
        echo "
            ";
        // line 79
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "luogo"));
        echo "
            ";
        // line 80
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "luogo"));
        echo "
        </div>

        ";
        // line 83
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_entity_, "manifesto")) > 0)) {
            // line 84
            echo "            <div>
                <img src=\"/resource/img/";
            // line 85
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "/";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "manifesto"), "html", null, true);
            echo "\" width=\"200\" style=\"border:1px solid #333333;\">
                    <a href=\"";
            // line 86
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_delete_manifesto", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">Cancella manifesto</a>
            </div>                 
        ";
        }
        // line 89
        echo "
        <div>
            ";
        // line 91
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "manifesto"));
        echo "
            ";
        // line 92
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "manifesto"));
        echo "
            ";
        // line 93
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "manifesto"));
        echo "
        </div>

        <div>
            ";
        // line 97
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "path_pdf_programma"));
        echo "
            ";
        // line 98
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "path_pdf_programma"));
        echo "
            ";
        // line 99
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "path_pdf_programma"));
        echo "
        </div>

        <div>
            ";
        // line 103
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "path_pdf_iscrizione"));
        echo "
            ";
        // line 104
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "path_pdf_iscrizione"));
        echo "
            ";
        // line 105
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "path_pdf_iscrizione"));
        echo "
        </div>

        <div>
            ";
        // line 109
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "path_pdf_prenotazione"));
        echo "
            ";
        // line 110
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "path_pdf_prenotazione"));
        echo "
            ";
        // line 111
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "path_pdf_prenotazione"));
        echo "
        </div>

        <div>
            ";
        // line 115
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "email_referente"));
        echo "
            ";
        // line 116
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "email_referente"));
        echo "
            ";
        // line 117
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "email_referente"));
        echo "
        </div>

        <div>
            ";
        // line 121
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "ricezione_abstract"));
        echo "
            ";
        // line 122
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "ricezione_abstract"));
        echo "
            ";
        // line 123
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "ricezione_abstract"));
        echo "
        </div>


        <div>
            ";
        // line 128
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "pagina_sponsor"));
        echo "
            ";
        // line 129
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "pagina_sponsor"));
        echo "
            ";
        // line 130
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "pagina_sponsor"));
        echo "
        </div>
        <div>
            ";
        // line 133
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_edit_form_, "abilitato"));
        echo "
            ";
        // line 134
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_edit_form_, "abilitato"));
        echo "
            ";
        // line 135
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_edit_form_, "abilitato"));
        echo "
        </div>

        ";
        // line 138
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_edit_form_);
        echo "

        <p>
            <button type=\"submit\">Edit</button>
        </p>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 138,  380 => 135,  375 => 134,  370 => 133,  363 => 130,  358 => 129,  353 => 128,  344 => 123,  339 => 122,  334 => 121,  326 => 117,  321 => 116,  316 => 115,  308 => 111,  303 => 110,  298 => 109,  290 => 105,  285 => 104,  280 => 103,  272 => 99,  267 => 98,  262 => 97,  254 => 93,  249 => 92,  244 => 91,  240 => 89,  233 => 86,  225 => 85,  222 => 84,  219 => 83,  212 => 80,  207 => 79,  202 => 78,  194 => 74,  189 => 73,  184 => 72,  176 => 68,  171 => 67,  166 => 66,  158 => 62,  153 => 61,  148 => 60,  140 => 56,  135 => 55,  130 => 54,  122 => 50,  117 => 49,  112 => 48,  104 => 44,  99 => 43,  94 => 42,  87 => 39,  78 => 37,  62 => 25,  54 => 24,  37 => 10,  29 => 4,  26 => 3,);
    }
}
