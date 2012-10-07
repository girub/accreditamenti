<?php

/* AccreditamentiCongressiBundle:Congresso:accreditamentiCongresso.html.twig */
class __TwigTemplate_fa6bcc2b9793d1445fd9ae4f3f243a5b extends Twig_Template
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
    <h1>Congresso</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
         
            <tr>
                <th>Codice_congresso</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codicecongresso"), "html", null, true);
        echo "</td>
            </tr>
          
            <tr>
                <th>Titolo</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>
    
    
    ";
        // line 36
        if ((twig_length_filter($this->env, $this->getContext($context, "accreditamenti")) > 0)) {
            // line 37
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
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "accreditamenti"));
            foreach ($context['_seq'] as $context["_key"] => $context["accreditamento"]) {
                // line 49
                echo "                            <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_login_iscritto", array("id" => $this->getAttribute($this->getContext($context, "accreditamento"), "id"))), "html", null, true);
                echo "\" id=\"link_accesso_accreditamento\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "accreditamento"), "titolo"), "html", null, true);
                echo "</a></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accreditamento'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "                    </td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 56
        echo "        
    

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:accreditamentiCongresso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 56,  108 => 51,  97 => 49,  93 => 48,  80 => 37,  78 => 36,  68 => 29,  61 => 25,  54 => 21,  47 => 17,  39 => 12,  29 => 4,  26 => 3,);
    }
}
