<?php

/* AccreditamentiCongressiBundle:QuestionarioEcm:show.html.twig */
class __TwigTemplate_44bfa36f9f7cc6f0d7b65078e6069dd5 extends Twig_Template
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
        echo "
    <h1>Congresso</h1>

    <div class=\"well\">
        <strong>nome:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "getCongresso"), "html", null, true);
        echo "<br />
        <strong>accreditamento:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "html", null, true);
        echo "<br />
    </div>

    <h1>Questionario ECM</h1>

    <div class=\"well\">
        <strong>descrizione:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
        echo "<br />
        <strong>inizio:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainiziocompilazione"), "Y-m-d H:i:s"), "html", null, true);
        echo "<br />
        <strong>fine:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafinecompilazione"), "Y-m-d H:i:s"), "html", null, true);
        echo "<br />
        <strong>percentuale:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "percentualerisposteesatte"), "html", null, true);
        echo "<br />
        <strong>tentativi:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerotentativicompilazione"), "html", null, true);
        echo "<br />
    </div>

";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
     <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to Accreditamento
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_ecm_new", array("questionarioecm_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Crea domanda
                        </a>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" href=\"#myModal\"> <span class=\"icon-trash icon-white\"></span> Cancella</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"modal hide\" id=\"myModal\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Attenzione stai eliminando:</h3>
            <br><b>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descrizione"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>
            
          <form action=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Elimina</button>
            </form>
        </div>
    </div>




<div class=\"row\">
  <div class=\"span6 offset6\"><span class=\"label label-warning\">risposta vera</span></div>
</div>

    <ul>
    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "domande"));
        foreach ($context['_seq'] as $context["_key"] => $context["domanda"]) {
            // line 78
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_ecm_edit", array("id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
            echo "\"><span class=\"icon-edit\"></span></a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domanda"), "descrizione"), "html", null, true);
            echo "
        <ul>
            ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "domanda"), "getRisposta"));
            foreach ($context['_seq'] as $context["_key"] => $context["risposta"]) {
                // line 81
                echo "                <li>
                   <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_ecm_edit", array("id" => $this->getAttribute($this->getContext($context, "risposta"), "id"))), "html", null, true);
                echo "\">
                    <span class=\"icon-edit\"></span></a>
                       ";
                // line 84
                if ($this->getAttribute($this->getContext($context, "risposta"), "aperta")) {
                    // line 85
                    echo "                           <span class=\"icon-folder-open\"></span>
                       ";
                } else {
                    // line 87
                    echo "                           <span class=\"icon-folder-close\"></span>
                       ";
                }
                // line 89
                echo "                       ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "vero")) > 0)) {
                    // line 90
                    echo "                            <span class=\"label label-warning\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " </span>
                       ";
                } else {
                    // line 92
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " 
                       ";
                }
                // line 94
                echo "                   </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['risposta'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 96
            echo "            <li>
                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_ecm_new", array("domanda_id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
            echo "\">
                    <span class=\"icon-plus-sign\"></span> <em>aggiungi risposta</em>
                </a>
            </li>
        </ul>
        </li><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domanda'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:QuestionarioEcm:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 94,  167 => 82,  160 => 80,  119 => 57,  100 => 41,  114 => 49,  66 => 25,  95 => 21,  71 => 14,  211 => 88,  200 => 83,  195 => 80,  193 => 79,  179 => 72,  177 => 71,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  126 => 46,  53 => 16,  133 => 44,  124 => 41,  129 => 47,  104 => 24,  73 => 24,  43 => 15,  121 => 40,  115 => 39,  107 => 36,  96 => 34,  91 => 37,  41 => 13,  205 => 82,  192 => 78,  189 => 77,  185 => 90,  178 => 87,  176 => 70,  171 => 67,  165 => 63,  152 => 78,  145 => 56,  132 => 49,  127 => 62,  93 => 33,  78 => 17,  38 => 6,  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 102,  213 => 93,  196 => 79,  159 => 59,  151 => 54,  144 => 50,  141 => 55,  136 => 47,  125 => 35,  122 => 46,  120 => 45,  98 => 23,  81 => 26,  68 => 24,  51 => 17,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 122,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 94,  284 => 93,  281 => 92,  279 => 91,  273 => 89,  270 => 126,  267 => 85,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 64,  223 => 59,  220 => 104,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 78,  181 => 43,  174 => 85,  172 => 84,  139 => 26,  134 => 50,  116 => 42,  111 => 37,  109 => 39,  106 => 1,  89 => 20,  84 => 31,  79 => 29,  74 => 27,  64 => 23,  59 => 23,  49 => 15,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  282 => 77,  276 => 90,  271 => 74,  268 => 73,  262 => 83,  256 => 70,  253 => 118,  251 => 65,  248 => 64,  240 => 70,  237 => 68,  234 => 58,  232 => 106,  226 => 60,  224 => 96,  221 => 53,  214 => 49,  209 => 84,  207 => 97,  204 => 96,  194 => 40,  191 => 92,  188 => 77,  186 => 37,  182 => 89,  180 => 72,  175 => 30,  169 => 38,  166 => 27,  164 => 81,  161 => 61,  148 => 77,  142 => 54,  140 => 14,  137 => 51,  118 => 7,  113 => 43,  102 => 43,  99 => 34,  97 => 38,  90 => 32,  87 => 28,  85 => 32,  82 => 18,  80 => 26,  77 => 28,  72 => 25,  67 => 12,  62 => 21,  60 => 16,  57 => 17,  55 => 14,  52 => 21,  47 => 19,  45 => 46,  42 => 19,  27 => 3,  18 => 1,  32 => 11,  48 => 20,  39 => 18,  34 => 7,  46 => 15,  24 => 3,  20 => 2,  36 => 8,  25 => 4,  21 => 2,  33 => 6,  28 => 3,  22 => 3,  19 => 2,  17 => 1,  76 => 25,  70 => 27,  61 => 18,  54 => 14,  50 => 15,  31 => 5,  154 => 56,  149 => 49,  146 => 55,  138 => 41,  135 => 50,  131 => 63,  128 => 43,  123 => 44,  117 => 44,  108 => 46,  103 => 36,  101 => 56,  94 => 38,  92 => 36,  88 => 36,  86 => 35,  75 => 29,  69 => 20,  65 => 19,  63 => 17,  58 => 22,  56 => 4,  44 => 11,  40 => 9,  37 => 8,  35 => 17,  30 => 4,  23 => 3,  29 => 4,  26 => 3,);
    }
}
