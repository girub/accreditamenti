<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_fe2d5870488b1c58c2031b351d23ed23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 130,  304 => 129,  296 => 126,  286 => 123,  238 => 99,  236 => 98,  222 => 90,  203 => 81,  201 => 80,  183 => 69,  157 => 55,  258 => 110,  235 => 107,  228 => 103,  143 => 49,  150 => 43,  83 => 26,  328 => 179,  323 => 135,  314 => 133,  307 => 172,  303 => 171,  292 => 162,  285 => 158,  280 => 156,  247 => 140,  206 => 120,  187 => 107,  105 => 37,  198 => 108,  163 => 83,  230 => 133,  216 => 119,  130 => 48,  112 => 33,  173 => 99,  168 => 71,  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 112,  264 => 151,  257 => 106,  249 => 141,  244 => 139,  231 => 95,  219 => 130,  208 => 121,  202 => 109,  170 => 63,  155 => 79,  147 => 65,  110 => 39,  197 => 94,  167 => 91,  160 => 87,  119 => 47,  100 => 27,  114 => 34,  66 => 21,  95 => 30,  71 => 37,  211 => 89,  200 => 87,  195 => 112,  193 => 83,  179 => 72,  177 => 67,  162 => 71,  158 => 57,  156 => 56,  153 => 83,  126 => 39,  53 => 13,  133 => 49,  124 => 41,  129 => 43,  104 => 40,  73 => 23,  43 => 11,  121 => 49,  115 => 34,  107 => 30,  96 => 34,  91 => 31,  41 => 12,  205 => 82,  192 => 78,  189 => 73,  185 => 75,  178 => 71,  176 => 70,  171 => 67,  165 => 87,  152 => 59,  145 => 49,  132 => 43,  127 => 62,  93 => 22,  78 => 36,  38 => 12,  266 => 125,  260 => 150,  246 => 114,  239 => 136,  225 => 94,  213 => 85,  196 => 77,  159 => 91,  151 => 53,  144 => 75,  141 => 54,  136 => 74,  125 => 41,  122 => 46,  120 => 37,  98 => 31,  81 => 29,  68 => 22,  51 => 18,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 142,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 129,  310 => 132,  308 => 102,  301 => 128,  297 => 99,  293 => 98,  287 => 118,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  270 => 126,  267 => 152,  265 => 84,  255 => 109,  250 => 108,  245 => 72,  242 => 71,  229 => 94,  223 => 131,  220 => 104,  217 => 87,  215 => 90,  212 => 53,  199 => 47,  190 => 103,  181 => 99,  174 => 95,  172 => 91,  139 => 47,  134 => 50,  116 => 33,  111 => 33,  109 => 36,  106 => 35,  89 => 22,  84 => 29,  79 => 24,  74 => 38,  64 => 35,  59 => 21,  49 => 16,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 137,  326 => 90,  324 => 107,  321 => 134,  311 => 83,  305 => 82,  298 => 127,  290 => 161,  288 => 124,  282 => 121,  276 => 117,  271 => 114,  268 => 111,  262 => 111,  256 => 70,  253 => 105,  251 => 65,  248 => 107,  240 => 70,  237 => 131,  234 => 98,  232 => 106,  226 => 132,  224 => 91,  221 => 99,  214 => 95,  209 => 115,  207 => 83,  204 => 96,  194 => 76,  191 => 82,  188 => 103,  186 => 37,  182 => 98,  180 => 68,  175 => 66,  169 => 85,  166 => 95,  164 => 59,  161 => 58,  148 => 77,  142 => 48,  140 => 52,  137 => 46,  118 => 36,  113 => 40,  102 => 29,  99 => 33,  97 => 26,  90 => 31,  87 => 38,  85 => 28,  82 => 25,  80 => 26,  77 => 23,  72 => 22,  67 => 15,  62 => 22,  60 => 16,  57 => 27,  55 => 14,  52 => 17,  47 => 12,  45 => 9,  42 => 8,  27 => 3,  18 => 1,  32 => 5,  48 => 10,  39 => 6,  34 => 11,  46 => 11,  24 => 3,  20 => 2,  36 => 7,  25 => 5,  21 => 3,  33 => 7,  28 => 7,  22 => 3,  19 => 1,  17 => 1,  76 => 24,  70 => 21,  61 => 6,  54 => 19,  50 => 13,  31 => 10,  154 => 54,  149 => 64,  146 => 79,  138 => 79,  135 => 41,  131 => 63,  128 => 43,  123 => 38,  117 => 48,  108 => 38,  103 => 28,  101 => 44,  94 => 32,  92 => 23,  88 => 32,  86 => 30,  75 => 18,  69 => 21,  65 => 18,  63 => 17,  58 => 26,  56 => 14,  44 => 10,  40 => 8,  37 => 2,  35 => 7,  30 => 7,  23 => 3,  29 => 4,  26 => 3,);
    }
}
