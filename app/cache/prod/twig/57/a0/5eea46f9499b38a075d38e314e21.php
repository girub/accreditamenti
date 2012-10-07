<?php

/* AccreditamentiCongressiBundle:Congresso:index.html.twig */
class __TwigTemplate_57a05eea46f9499b38a075d38e314e21 extends Twig_Template
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
        echo "<div class=\"well\">
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
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_entities_);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 45
                echo "                <tr>
                    <td>
                        <strong>";
                // line 47
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "titolo"), "html", null, true);
                echo "</strong><br />
                        <em>";
                // line 48
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "descrizione"), "html", null, true);
                echo "</em><br />
                        <span class=\"icon-road\"></span> ";
                // line 49
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "luogo"), "html", null, true);
                echo "<br />
                        ";
                // line 50
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "emailreferente")) {
                    // line 51
                    echo "                            <span class=\"icon-envelope\"></span> ";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "emailreferente"), "html", null, true);
                    echo "<br />
                        ";
                }
                // line 53
                echo "                        <span class=\"icon-bookmark\"></span> <a href=\"";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "codicecongresso"), "html", null, true);
                echo "</a></a>
                    </td>
                    <td>";
                // line 55
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "datainizio")) {
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datainizio"), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 56
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "datafine")) {
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datafine"), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                    <td>
                        ";
                // line 58
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "ricezioneabstract")) {
                    // line 59
                    echo "                            <span class=\"icon-file\"></span> ricezione abstract<br />
                        ";
                }
                // line 61
                echo "                        ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "paginasponsor")) {
                    // line 62
                    echo "                            <span class=\"icon-file\"></span> pagina sponsor<br />
                        ";
                }
                // line 64
                echo "                        ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "abilitato")) {
                    // line 65
                    echo "                            <span class=\"icon-check\"></span> abilitato<br />
                        ";
                }
                // line 67
                echo "                    </td>
                    <td><a href=\"";
                // line 68
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        return array (  191 => 74,  186 => 71,  176 => 68,  173 => 67,  169 => 65,  165 => 64,  161 => 62,  157 => 61,  153 => 59,  150 => 58,  141 => 56,  133 => 55,  123 => 53,  116 => 51,  113 => 50,  108 => 49,  103 => 48,  98 => 47,  94 => 45,  89 => 44,  75 => 32,  69 => 28,  66 => 27,  52 => 16,  44 => 10,  41 => 9,  33 => 5,  30 => 4,  27 => 3,);
    }
}
