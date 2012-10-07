<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_aa884074b2f27fe6705080d00dd76a7b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  23 => 5,  17 => 1,  246 => 125,  238 => 121,  230 => 117,  222 => 113,  214 => 109,  206 => 105,  198 => 101,  190 => 97,  182 => 93,  173 => 86,  168 => 83,  158 => 80,  153 => 79,  150 => 78,  145 => 77,  134 => 68,  131 => 67,  119 => 62,  100 => 47,  95 => 46,  72 => 27,  63 => 22,  54 => 17,  46 => 12,  38 => 6,  35 => 5,  27 => 3,);
    }
}
