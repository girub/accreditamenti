<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_6b942d7db3a96f27a4fad0d633543a83 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "trace"), "type") . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace"), "file")) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "trace"), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("display") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  133 => 44,  124 => 41,  129 => 50,  104 => 38,  73 => 21,  43 => 15,  121 => 40,  115 => 39,  107 => 36,  96 => 34,  91 => 33,  41 => 6,  205 => 82,  192 => 78,  189 => 77,  185 => 76,  178 => 71,  176 => 70,  171 => 67,  165 => 63,  152 => 58,  145 => 56,  132 => 49,  127 => 46,  93 => 33,  78 => 25,  38 => 8,  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 102,  213 => 93,  196 => 79,  159 => 59,  151 => 54,  144 => 50,  141 => 55,  136 => 47,  125 => 42,  122 => 46,  120 => 39,  98 => 23,  81 => 26,  68 => 9,  51 => 11,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 122,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 94,  284 => 93,  281 => 92,  279 => 91,  273 => 89,  270 => 126,  267 => 85,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 64,  223 => 59,  220 => 56,  217 => 55,  215 => 54,  212 => 53,  199 => 47,  190 => 45,  181 => 43,  174 => 69,  172 => 39,  139 => 26,  134 => 50,  116 => 42,  111 => 37,  109 => 39,  106 => 1,  89 => 20,  84 => 27,  79 => 40,  74 => 11,  64 => 15,  59 => 15,  49 => 12,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  282 => 77,  276 => 90,  271 => 74,  268 => 73,  262 => 83,  256 => 70,  253 => 118,  251 => 65,  248 => 64,  240 => 70,  237 => 68,  234 => 58,  232 => 106,  226 => 60,  224 => 54,  221 => 53,  214 => 49,  209 => 84,  207 => 47,  204 => 46,  194 => 40,  191 => 39,  188 => 77,  186 => 37,  182 => 35,  180 => 72,  175 => 30,  169 => 38,  166 => 27,  164 => 26,  161 => 61,  148 => 57,  142 => 15,  140 => 14,  137 => 12,  118 => 7,  113 => 41,  102 => 37,  99 => 34,  97 => 34,  90 => 32,  87 => 28,  85 => 181,  82 => 19,  80 => 26,  77 => 39,  72 => 16,  67 => 19,  62 => 16,  60 => 16,  57 => 22,  55 => 14,  52 => 12,  47 => 38,  45 => 46,  42 => 10,  27 => 3,  18 => 1,  32 => 11,  48 => 10,  39 => 9,  34 => 7,  46 => 14,  24 => 4,  20 => 1,  36 => 6,  25 => 4,  21 => 2,  33 => 5,  28 => 3,  22 => 2,  19 => 2,  17 => 1,  76 => 26,  70 => 20,  61 => 17,  54 => 14,  50 => 13,  31 => 4,  154 => 56,  149 => 49,  146 => 18,  138 => 41,  135 => 54,  131 => 44,  128 => 43,  123 => 44,  117 => 36,  108 => 40,  103 => 36,  101 => 56,  94 => 33,  92 => 39,  88 => 29,  86 => 6,  75 => 26,  69 => 20,  65 => 98,  63 => 17,  58 => 9,  56 => 4,  44 => 11,  40 => 6,  37 => 8,  35 => 7,  30 => 4,  23 => 4,  29 => 5,  26 => 3,);
    }
}
