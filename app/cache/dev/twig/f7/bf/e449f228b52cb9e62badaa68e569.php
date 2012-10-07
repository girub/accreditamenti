<?php

/* AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction:show.html.twig */
class __TwigTemplate_f7bfe449f228b52cb9e62badaa68e569 extends Twig_Template
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

    <h1>Questionario Customer Satisfaction</h1>

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
    </div>

";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
     <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "accreditamento"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to Accreditamento
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_customer_satisfaction_new", array("questionario_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
            <h3>Attenzione stai eliminando un questionario</h3>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>
            
          <form action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 60
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
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "domande"));
        foreach ($context['_seq'] as $context["_key"] => $context["domanda"]) {
            // line 75
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domanda_customer_satisfaction_edit", array("id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
            echo "\"><span class=\"icon-edit\"></span></a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domanda"), "descrizione"), "html", null, true);
            echo "
        <ul>
            ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "domanda"), "getRisposta"));
            foreach ($context['_seq'] as $context["_key"] => $context["risposta"]) {
                // line 78
                echo "                <li>
                   <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_customer_satisfaction_edit", array("id" => $this->getAttribute($this->getContext($context, "risposta"), "id"))), "html", null, true);
                echo "\">
                    <span class=\"icon-edit\"></span></a>
                   
                       ";
                // line 82
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "vero")) > 0)) {
                    // line 83
                    echo "                            <span class=\"label label-warning\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " </span>
                       ";
                } else {
                    // line 85
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "risposta"), "descrizione"), "html", null, true);
                    echo " 
                       ";
                }
                // line 87
                echo "                   </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['risposta'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 89
            echo "            <li>
                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("risposta_customer_satisfaction_new", array("domanda_id" => $this->getAttribute($this->getContext($context, "domanda"), "id"))), "html", null, true);
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
        // line 97
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 112,  264 => 110,  257 => 106,  249 => 104,  231 => 97,  219 => 91,  208 => 88,  147 => 65,  110 => 49,  244 => 101,  230 => 127,  216 => 119,  112 => 61,  173 => 74,  168 => 71,  163 => 83,  155 => 79,  197 => 94,  167 => 91,  160 => 87,  119 => 60,  100 => 41,  114 => 49,  66 => 25,  202 => 85,  198 => 97,  130 => 68,  170 => 73,  105 => 45,  53 => 16,  211 => 89,  200 => 83,  195 => 107,  193 => 83,  179 => 72,  177 => 77,  162 => 71,  158 => 83,  156 => 67,  153 => 83,  126 => 46,  95 => 43,  71 => 35,  133 => 52,  124 => 41,  129 => 56,  104 => 24,  73 => 32,  43 => 10,  121 => 54,  115 => 59,  107 => 50,  96 => 34,  91 => 42,  41 => 10,  205 => 82,  192 => 78,  189 => 77,  185 => 90,  178 => 87,  176 => 70,  171 => 67,  165 => 87,  152 => 78,  145 => 62,  132 => 59,  127 => 62,  93 => 48,  78 => 36,  38 => 8,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 142,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 129,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 118,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  267 => 85,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 96,  223 => 123,  220 => 104,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 103,  181 => 78,  172 => 84,  134 => 50,  116 => 59,  111 => 37,  109 => 51,  106 => 48,  89 => 41,  64 => 23,  59 => 24,  270 => 86,  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 94,  213 => 93,  196 => 84,  174 => 95,  159 => 68,  151 => 66,  144 => 75,  141 => 54,  139 => 75,  136 => 74,  125 => 55,  122 => 46,  120 => 45,  98 => 50,  84 => 34,  81 => 38,  79 => 29,  74 => 36,  68 => 23,  51 => 21,  49 => 15,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 123,  290 => 79,  288 => 78,  282 => 77,  276 => 90,  271 => 74,  268 => 111,  262 => 83,  256 => 70,  253 => 105,  251 => 65,  248 => 64,  240 => 70,  237 => 131,  234 => 98,  232 => 65,  226 => 60,  224 => 96,  221 => 53,  214 => 49,  209 => 115,  207 => 97,  204 => 96,  194 => 40,  191 => 82,  188 => 103,  186 => 37,  182 => 89,  180 => 72,  175 => 87,  169 => 85,  166 => 72,  164 => 81,  161 => 82,  148 => 77,  142 => 61,  140 => 75,  137 => 71,  118 => 7,  113 => 47,  102 => 47,  99 => 48,  97 => 38,  90 => 32,  87 => 41,  85 => 32,  82 => 38,  80 => 33,  77 => 28,  72 => 25,  67 => 28,  62 => 21,  60 => 27,  57 => 17,  55 => 21,  52 => 21,  47 => 17,  45 => 15,  42 => 19,  27 => 3,  18 => 1,  48 => 20,  34 => 7,  33 => 6,  36 => 8,  21 => 3,  39 => 7,  25 => 7,  32 => 11,  19 => 2,  17 => 1,  46 => 16,  28 => 3,  24 => 3,  22 => 4,  20 => 2,  154 => 56,  149 => 64,  146 => 79,  138 => 59,  135 => 50,  131 => 63,  128 => 43,  123 => 63,  117 => 53,  108 => 60,  103 => 49,  101 => 44,  94 => 49,  92 => 39,  88 => 36,  86 => 44,  75 => 33,  69 => 33,  65 => 22,  63 => 25,  58 => 22,  56 => 22,  35 => 17,  30 => 4,  23 => 3,  76 => 29,  70 => 27,  61 => 23,  54 => 21,  50 => 15,  44 => 14,  40 => 9,  37 => 10,  31 => 13,  29 => 4,  26 => 3,);
    }
}
