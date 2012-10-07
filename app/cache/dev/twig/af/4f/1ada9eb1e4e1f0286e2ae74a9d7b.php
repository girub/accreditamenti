<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_af4f1ada9eb1e4e1f0286e2ae74a9d7b extends Twig_Template
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
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/exception_detected.gif"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        echo $this->env->getExtension('code')->formatFileFromText(strtr(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message")), array("
" => "<br />")));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
        echo "
                </div>

                ";
        // line 22
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
        // line 23
        echo "                ";
        if ($this->getContext($context, "previous_count")) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "previous_count"), "html", null, true);
            echo "</strong> linked Exception";
            echo ((($this->getContext($context, "previous_count") > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "previous"), "class"));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_close');\">&raquo;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 44
            echo "        ";
            $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => $this->getContext($context, "e"), "position" => $this->getContext($context, "position"), "count" => $this->getContext($context, "previous_count")));
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
    ";
        // line 47
        if ($this->getContext($context, "logger")) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute($this->getContext($context, "logger"), "counterrors")) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logger"), "counterrors"), "html", null, true);
                echo " error";
                echo ((($this->getAttribute($this->getContext($context, "logger"), "counterrors") > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            $this->env->loadTemplate("TwigBundle:Exception:logs.html.twig")->display(array("logs" => $this->getAttribute($this->getContext($context, "logger"), "logs")));
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ($this->getContext($context, "currentContent")) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            echo twig_escape_filter($this->env, $this->getContext($context, "currentContent"), "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 88,  200 => 83,  195 => 80,  193 => 79,  179 => 72,  177 => 71,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  126 => 46,  53 => 13,  133 => 44,  124 => 41,  129 => 47,  104 => 38,  73 => 21,  43 => 15,  121 => 40,  115 => 39,  107 => 36,  96 => 34,  91 => 33,  41 => 6,  205 => 82,  192 => 78,  189 => 77,  185 => 76,  178 => 71,  176 => 70,  171 => 67,  165 => 63,  152 => 58,  145 => 56,  132 => 49,  127 => 46,  93 => 33,  78 => 25,  38 => 8,  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 102,  213 => 93,  196 => 79,  159 => 59,  151 => 54,  144 => 50,  141 => 55,  136 => 47,  125 => 42,  122 => 46,  120 => 45,  98 => 23,  81 => 26,  68 => 9,  51 => 11,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 122,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 94,  284 => 93,  281 => 92,  279 => 91,  273 => 89,  270 => 126,  267 => 85,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 64,  223 => 59,  220 => 56,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 78,  181 => 43,  174 => 69,  172 => 39,  139 => 26,  134 => 50,  116 => 42,  111 => 37,  109 => 39,  106 => 1,  89 => 20,  84 => 27,  79 => 40,  74 => 27,  64 => 15,  59 => 23,  49 => 12,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  282 => 77,  276 => 90,  271 => 74,  268 => 73,  262 => 83,  256 => 70,  253 => 118,  251 => 65,  248 => 64,  240 => 70,  237 => 68,  234 => 58,  232 => 106,  226 => 60,  224 => 96,  221 => 53,  214 => 49,  209 => 84,  207 => 47,  204 => 84,  194 => 40,  191 => 39,  188 => 77,  186 => 37,  182 => 35,  180 => 72,  175 => 30,  169 => 38,  166 => 27,  164 => 26,  161 => 61,  148 => 57,  142 => 54,  140 => 14,  137 => 51,  118 => 7,  113 => 43,  102 => 37,  99 => 34,  97 => 34,  90 => 32,  87 => 28,  85 => 181,  82 => 19,  80 => 26,  77 => 28,  72 => 16,  67 => 19,  62 => 24,  60 => 16,  57 => 22,  55 => 14,  52 => 12,  47 => 19,  45 => 46,  42 => 10,  27 => 4,  18 => 1,  32 => 11,  48 => 10,  39 => 15,  34 => 7,  46 => 14,  24 => 6,  20 => 2,  36 => 6,  25 => 4,  21 => 2,  33 => 7,  28 => 3,  22 => 3,  19 => 2,  17 => 1,  76 => 26,  70 => 26,  61 => 17,  54 => 14,  50 => 13,  31 => 6,  154 => 56,  149 => 49,  146 => 55,  138 => 41,  135 => 50,  131 => 48,  128 => 43,  123 => 44,  117 => 44,  108 => 40,  103 => 36,  101 => 56,  94 => 31,  92 => 39,  88 => 29,  86 => 6,  75 => 26,  69 => 20,  65 => 98,  63 => 17,  58 => 9,  56 => 4,  44 => 11,  40 => 6,  37 => 8,  35 => 7,  30 => 9,  23 => 3,  29 => 5,  26 => 3,);
    }
}
