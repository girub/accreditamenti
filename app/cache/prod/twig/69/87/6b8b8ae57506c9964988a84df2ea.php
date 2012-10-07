<?php

/* AccreditamentiCongressiBundle:Accreditamento:show.html.twig */
class __TwigTemplate_69876b8b8ae57506c9964988a84df2ea extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_new", array("congresso_id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                              <span class=\"icon-plus-sign icon-white\"></span>   Crea accreditamento
                            </a>

                    </li>


                    <li>
                        <a href=\"#\" id=\"cancella_congresso\" data-toggle=\"modal\" href=\"#myModal\">
                            <span class=\"icon-trash icon-white\"></span> Cancella
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" href=\"#myModal\"> <span class=\"icon-trash icon-white\"></span> Cancella strano</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    


<h1>Accreditamento</h1>

<table class=\"table table-striped table-bordered table-condensed\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 51
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numero_accreditamento</th>
            <td>";
        // line 55
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numeroaccreditamento"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titolo</th>
            <td>";
        // line 59
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Luogo</th>
            <td>";
        // line 63
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Data_inizio</th>
            <td>";
        // line 67
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Data_fine</th>
            <td>";
        // line 71
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ore_formative</th>
            <td>";
        // line 75
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "oreformative"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Obiettivo_formativo</th>
            <td>";
        // line 79
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "obiettivoformativo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numero_crediti</th>
            <td>";
        // line 83
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "numerocrediti"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 95
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
  
</ul>




<div class=\"modal hide\" id=\"myModal\">


  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
    <h3>Attenzione stai eliminando un accreditamento</h3>
  </div>

  <div class=\"modal-footer\">
    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>


    <form action=\"";
        // line 117
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 118
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_delete_form_);
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Elimina</button>

        </form>
  </div>
</div>




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
        return array (  201 => 118,  196 => 117,  170 => 95,  162 => 90,  151 => 83,  143 => 79,  135 => 75,  127 => 71,  119 => 67,  111 => 63,  103 => 59,  95 => 55,  87 => 51,  54 => 22,  45 => 17,  37 => 12,  29 => 6,  26 => 5,);
    }
}
