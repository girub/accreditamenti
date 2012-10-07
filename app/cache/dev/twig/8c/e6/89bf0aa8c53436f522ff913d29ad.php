<?php

/* AccreditamentiCongressiBundle:Congresso:index.html.twig */
class __TwigTemplate_8ce689bf0aa8c53436f522ff913d29ad extends Twig_Template
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
        echo "<div class=\"well\">
    Tot congressi: ";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "entities")), "html", null, true);
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
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) == 0)) {
            // line 28
            echo "
<em>Non ci sono congressi</em>

    ";
        } else {
            // line 32
            echo "
<table class=\"table-bordered table-condensed table-striped table\">
    <thead>
        <tr>
            <th>Congresso</th>
            <th>Data_inizio</th>
            <th>Data_fine</th>
            <th>Info</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 45
                echo "                <tr>
                    <td>
                        <strong>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
                echo "</strong><br />
                        <em>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
                echo "</em><br />
                        <span class=\"icon-road\"></span> ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogo"), "html", null, true);
                echo "<br />
                        ";
                // line 50
                if ($this->getAttribute($this->getContext($context, "entity"), "emailreferente")) {
                    // line 51
                    echo "                            <span class=\"icon-envelope\"></span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emailreferente"), "html", null, true);
                    echo "<br />
                        ";
                }
                // line 53
                echo "                        <span class=\"icon-bookmark\"></span> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codicecongresso"), "html", null, true);
                echo "</a></a>
                    </td>
                    <td>";
                // line 55
                if ($this->getAttribute($this->getContext($context, "entity"), "datainizio")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainizio"), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 56
                if ($this->getAttribute($this->getContext($context, "entity"), "datafine")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafine"), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                    <td>
                        ";
                // line 58
                if ($this->getAttribute($this->getContext($context, "entity"), "ricezioneabstract")) {
                    // line 59
                    echo "                            <span class=\"icon-file\"></span> ricezione abstract<br />
                        ";
                }
                // line 61
                echo "                        ";
                if ($this->getAttribute($this->getContext($context, "entity"), "paginasponsor")) {
                    // line 62
                    echo "                            <span class=\"icon-file\"></span> pagina sponsor<br />
                        ";
                }
                // line 64
                echo "                        ";
                if ($this->getAttribute($this->getContext($context, "entity"), "abilitato")) {
                    // line 65
                    echo "                            <span class=\"icon-check\"></span> abilitato<br />
                        ";
                }
                // line 67
                echo "                    </td>
                    <td><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"icon-edit\"></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "            </tbody>
        </table>
    ";
        }
        // line 74
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
        return array (  173 => 74,  168 => 71,  159 => 68,  156 => 67,  152 => 65,  149 => 64,  145 => 62,  142 => 61,  138 => 59,  136 => 58,  129 => 56,  123 => 55,  115 => 53,  109 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  91 => 45,  87 => 44,  73 => 32,  67 => 28,  65 => 27,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 4,  27 => 3,);
    }
}
