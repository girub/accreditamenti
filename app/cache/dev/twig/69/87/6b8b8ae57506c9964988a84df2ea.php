<?php

/* AccreditamentiCongressiBundle:Accreditamento:show.html.twig */
class __TwigTemplate_69876b8b8ae57506c9964988a84df2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backEnd/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Accreditamento ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li>
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento"), "html", null, true);
        echo "\">
                            <span class=\"icon-backward icon-white\"></span> Back to the list
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-edit icon-white\"></span> Edit
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. ecm
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_customer_satisfaction_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. CS
                        </a>
                    </li>
                     <li>
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_valutazione_new", array("accreditamento_id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                            <span class=\"icon-plus-sign icon-white\"></span> Quest. Valutazione
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
            <h3>Attenzione stai eliminando un accreditamento</h3>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Annulla</a>
            <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accreditamento_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Elimina</button>
            </form>
        </div>
    </div>
    
    <h2>Congresso</h2>
    <table class=\"table table-striped table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Titolo congresso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("congresso_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "congresso"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "congresso"), "html", null, true);
        echo "</a></td>
            </tr>
        </tbody>
    </table>
     <h1>Accreditamento</h1>

    <table class=\"table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero_accreditamento</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numeroaccreditamento"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titolo"), "html", null, true);
        echo "</td>
            </tr>
           <!-- <tr>
                <th>Luogo</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_inizio</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datainizio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_fine</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datafine"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ore_formative</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "oreformative"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obiettivo_formativo</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "obiettivoformativo"), "html", null, true);
        echo "</td>
            </tr>
            -->
            <tr>
                <th>Numero_crediti</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocrediti"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    
    

    ";
        // line 120
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioEcm", array(), "method")) > 0)) {
            // line 121
            echo "        <h2>Questionario ECM</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioEcm", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 131
                echo "                    <tr>
                        <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionarioecm_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 136
            echo "            </tbody>
        </table>
    ";
        }
        // line 139
        echo "        
    ";
        // line 140
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioCustomerSatisfaction", array(), "method")) > 0)) {
            // line 141
            echo "        <h2>Questionari Customer Satisfaction</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioCustomerSatisfaction", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 151
                echo "                    <tr>
                        <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_customer_satisfaction_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 156
            echo "            </tbody>
        </table>
    ";
        }
        // line 158
        echo "    
        
      
   ";
        // line 161
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getQuestionarioValutazione", array(), "method")) > 0)) {
            // line 162
            echo "        <h2>Questionari Valutazione</h2>

        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "getQuestionarioValutazione", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["questionario"]) {
                // line 172
                echo "                    <tr>
                        <td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "questionario"), "descrizione"), "html", null, true);
                echo "</td>
                        <td><span class=\"icon-bookmark\"></span> <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionario_valutazione_show", array("id" => $this->getAttribute($this->getContext($context, "questionario"), "id"))), "html", null, true);
                echo "\">apri questionario</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 177
            echo "            </tbody>
        </table>
    ";
        }
        // line 179
        echo "     
   

";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Accreditamento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 179,  323 => 177,  314 => 174,  307 => 172,  303 => 171,  292 => 162,  285 => 158,  280 => 156,  247 => 140,  206 => 120,  187 => 107,  105 => 54,  198 => 97,  163 => 83,  230 => 133,  216 => 119,  130 => 68,  112 => 61,  173 => 99,  168 => 71,  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 112,  264 => 151,  257 => 106,  249 => 141,  244 => 139,  231 => 97,  219 => 130,  208 => 121,  202 => 111,  170 => 73,  155 => 79,  147 => 65,  110 => 49,  197 => 94,  167 => 91,  160 => 87,  119 => 60,  100 => 41,  114 => 49,  66 => 25,  95 => 49,  71 => 22,  211 => 89,  200 => 83,  195 => 112,  193 => 83,  179 => 72,  177 => 77,  162 => 71,  158 => 61,  156 => 67,  153 => 83,  126 => 46,  53 => 17,  133 => 44,  124 => 41,  129 => 56,  104 => 24,  73 => 30,  43 => 10,  121 => 54,  115 => 59,  107 => 50,  96 => 34,  91 => 38,  41 => 9,  205 => 82,  192 => 78,  189 => 77,  185 => 90,  178 => 87,  176 => 70,  171 => 67,  165 => 63,  152 => 87,  145 => 83,  132 => 59,  127 => 62,  93 => 48,  78 => 36,  38 => 12,  266 => 125,  260 => 150,  246 => 114,  239 => 136,  225 => 94,  213 => 93,  196 => 84,  159 => 91,  151 => 66,  144 => 50,  141 => 55,  136 => 74,  125 => 55,  122 => 46,  120 => 45,  98 => 31,  81 => 38,  68 => 23,  51 => 16,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 142,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 129,  310 => 173,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 118,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  270 => 126,  267 => 152,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 96,  223 => 131,  220 => 104,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 78,  181 => 99,  174 => 95,  172 => 84,  139 => 75,  134 => 50,  116 => 40,  111 => 37,  109 => 51,  106 => 36,  89 => 20,  84 => 26,  79 => 29,  74 => 36,  64 => 21,  59 => 24,  49 => 22,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 123,  290 => 161,  288 => 78,  282 => 77,  276 => 90,  271 => 153,  268 => 111,  262 => 83,  256 => 70,  253 => 105,  251 => 65,  248 => 64,  240 => 70,  237 => 131,  234 => 98,  232 => 106,  226 => 132,  224 => 96,  221 => 53,  214 => 49,  209 => 115,  207 => 97,  204 => 96,  194 => 40,  191 => 82,  188 => 103,  186 => 37,  182 => 89,  180 => 103,  175 => 87,  169 => 85,  166 => 95,  164 => 81,  161 => 82,  148 => 77,  142 => 61,  140 => 75,  137 => 51,  118 => 7,  113 => 43,  102 => 47,  99 => 48,  97 => 38,  90 => 32,  87 => 38,  85 => 32,  82 => 38,  80 => 25,  77 => 32,  72 => 25,  67 => 28,  62 => 21,  60 => 20,  57 => 19,  55 => 21,  52 => 21,  47 => 17,  45 => 12,  42 => 15,  27 => 3,  18 => 1,  32 => 11,  48 => 17,  39 => 9,  34 => 5,  46 => 16,  24 => 3,  20 => 2,  36 => 8,  25 => 7,  21 => 3,  33 => 7,  28 => 3,  22 => 3,  19 => 2,  17 => 1,  76 => 29,  70 => 27,  61 => 22,  54 => 19,  50 => 18,  31 => 13,  154 => 56,  149 => 64,  146 => 79,  138 => 79,  135 => 50,  131 => 63,  128 => 43,  123 => 69,  117 => 53,  108 => 51,  103 => 49,  101 => 53,  94 => 30,  92 => 39,  88 => 27,  86 => 39,  75 => 33,  69 => 27,  65 => 32,  63 => 25,  58 => 22,  56 => 22,  44 => 16,  40 => 8,  37 => 6,  35 => 8,  30 => 4,  23 => 3,  29 => 4,  26 => 3,);
    }
}
