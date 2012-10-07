<?php

/* AccreditamentiCongressiBundle:Anagrafica:show.html.twig */
class __TwigTemplate_03e336c6e48464e762b798cd5f37d8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Anagrafica</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tipo_iscrizione</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipoiscrizione"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nome"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cognome</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cognome"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Data_nascita</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datanascita"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Luogo_nascita</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogonascita"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Codice_fiscale</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codicefiscale"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ordine_numero</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordinenumero"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ordine_citta</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordinecitta"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Indirizzo</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Indirizzo_cap</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzocap"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Indirizzo_citta</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzocitta"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Indirizzo_provincia</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzoprovincia"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cellulare</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cellulare"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Professione</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "professione"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Disciplina</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "disciplina"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Qualifica</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "qualifica"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Sponsor</th>
            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sponsor"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Sponsor_azienda</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sponsorazienda"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Privacy</th>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "privacy"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 109
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Anagrafica:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 109,  198 => 108,  190 => 103,  182 => 98,  172 => 91,  165 => 87,  158 => 83,  151 => 79,  144 => 75,  137 => 71,  130 => 67,  123 => 63,  116 => 59,  109 => 55,  102 => 51,  95 => 47,  88 => 43,  81 => 39,  74 => 35,  67 => 31,  60 => 27,  53 => 23,  46 => 19,  39 => 15,  32 => 11,  25 => 7,  17 => 1,);
    }
}
