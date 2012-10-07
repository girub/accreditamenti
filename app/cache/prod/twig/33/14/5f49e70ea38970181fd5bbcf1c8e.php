<?php

/* AccreditamentiCongressiBundle:Congresso:new.html.twig */
class __TwigTemplate_33145f49e70ea38970181fd5bbcf1c8e extends Twig_Template
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
                </ul>
            </div>
        </div>
    </div>
        
    <h1>Congresso creation</h1>

    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_create"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo ">
        ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_form_);
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Congresso:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  51 => 21,  37 => 10,  29 => 4,  26 => 3,);
    }
}
