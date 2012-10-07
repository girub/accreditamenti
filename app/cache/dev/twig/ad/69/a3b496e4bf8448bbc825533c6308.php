<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_ad69a3b496e4bf8448bbc825533c6308 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  42 => 10,  104 => 24,  97 => 22,  95 => 21,  82 => 19,  78 => 17,  71 => 14,  67 => 12,  49 => 12,  31 => 4,  25 => 5,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  142 => 54,  137 => 51,  129 => 47,  126 => 46,  120 => 45,  113 => 43,  99 => 34,  74 => 27,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  79 => 40,  77 => 28,  57 => 9,  33 => 7,  24 => 3,  19 => 2,  154 => 56,  149 => 49,  146 => 55,  138 => 41,  135 => 50,  131 => 48,  128 => 20,  123 => 8,  117 => 44,  103 => 36,  101 => 56,  92 => 20,  69 => 28,  65 => 26,  63 => 25,  56 => 20,  44 => 11,  40 => 7,  37 => 8,  35 => 8,  23 => 4,  125 => 35,  114 => 49,  108 => 60,  102 => 43,  94 => 31,  91 => 37,  88 => 19,  86 => 6,  75 => 16,  70 => 26,  66 => 25,  58 => 22,  51 => 17,  46 => 14,  30 => 4,  27 => 3,  54 => 14,  48 => 16,  41 => 7,  38 => 6,  34 => 11,  29 => 5,  26 => 3,);
    }
}
