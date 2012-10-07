<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_37eb5bca7d42309f395eb98860c6d345 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  42 => 10,  104 => 24,  97 => 22,  95 => 21,  82 => 19,  78 => 17,  71 => 14,  67 => 12,  49 => 12,  31 => 4,  25 => 4,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  142 => 54,  137 => 51,  129 => 47,  126 => 46,  120 => 45,  113 => 43,  99 => 34,  74 => 27,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  79 => 40,  77 => 28,  57 => 9,  33 => 7,  24 => 3,  19 => 2,  154 => 56,  149 => 49,  146 => 55,  138 => 41,  135 => 50,  131 => 48,  128 => 20,  123 => 8,  117 => 44,  103 => 36,  101 => 56,  92 => 20,  69 => 28,  65 => 26,  63 => 25,  56 => 20,  44 => 11,  40 => 7,  37 => 8,  35 => 8,  23 => 4,  125 => 35,  114 => 49,  108 => 60,  102 => 43,  94 => 31,  91 => 37,  88 => 19,  86 => 6,  75 => 16,  70 => 26,  66 => 25,  58 => 22,  51 => 17,  46 => 14,  30 => 4,  27 => 3,  54 => 14,  48 => 16,  41 => 7,  38 => 6,  34 => 7,  29 => 5,  26 => 3,);
    }
}
