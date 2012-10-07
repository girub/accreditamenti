<?php

/* AccreditamentiCongressiBundle:Anagrafica:index.html.twig */
class __TwigTemplate_49020a593f58e503539fc61f9e600e7e extends Twig_Template
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
        echo "<h1>Anagrafica list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo_iscrizione</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data_nascita</th>
            <th>Luogo_nascita</th>
            <th>Codice_fiscale</th>
            <th>Ordine_numero</th>
            <th>Ordine_citta</th>
            <th>Indirizzo</th>
            <th>Indirizzo_cap</th>
            <th>Indirizzo_citta</th>
            <th>Indirizzo_provincia</th>
            <th>Telefono</th>
            <th>Cellulare</th>
            <th>Email</th>
            <th>Professione</th>
            <th>Disciplina</th>
            <th>Qualifica</th>
            <th>Sponsor</th>
            <th>Sponsor_azienda</th>
            <th>Privacy</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "        <tr>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipoiscrizione"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nome"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cognome"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            if ($this->getAttribute($this->getContext($context, "entity"), "datanascita")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datanascita"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luogonascita"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codicefiscale"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordinenumero"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordinecitta"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzo"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzocap"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzocitta"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "indirizzoprovincia"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cellulare"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "professione"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "disciplina"), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "qualifica"), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sponsor"), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sponsorazienda"), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "privacy"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anagrafica_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AccreditamentiCongressiBundle:Anagrafica:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 179,  323 => 177,  314 => 174,  307 => 172,  303 => 171,  292 => 162,  285 => 158,  280 => 156,  247 => 140,  206 => 120,  187 => 107,  105 => 45,  198 => 97,  163 => 83,  230 => 133,  216 => 119,  130 => 68,  112 => 61,  173 => 99,  168 => 71,  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 112,  264 => 151,  257 => 106,  249 => 141,  244 => 139,  231 => 97,  219 => 130,  208 => 121,  202 => 111,  170 => 68,  155 => 79,  147 => 65,  110 => 49,  197 => 94,  167 => 91,  160 => 87,  119 => 60,  100 => 41,  114 => 49,  66 => 25,  95 => 49,  71 => 37,  211 => 89,  200 => 83,  195 => 112,  193 => 83,  179 => 72,  177 => 73,  162 => 71,  158 => 62,  156 => 67,  153 => 83,  126 => 46,  53 => 17,  133 => 52,  124 => 41,  129 => 51,  104 => 24,  73 => 30,  43 => 10,  121 => 49,  115 => 59,  107 => 50,  96 => 34,  91 => 38,  41 => 9,  205 => 82,  192 => 78,  189 => 77,  185 => 90,  178 => 87,  176 => 70,  171 => 67,  165 => 63,  152 => 59,  145 => 55,  132 => 59,  127 => 62,  93 => 42,  78 => 36,  38 => 12,  266 => 125,  260 => 150,  246 => 114,  239 => 136,  225 => 94,  213 => 93,  196 => 84,  159 => 91,  151 => 66,  144 => 50,  141 => 54,  136 => 74,  125 => 50,  122 => 46,  120 => 45,  98 => 31,  81 => 39,  68 => 23,  51 => 16,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 142,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 129,  310 => 173,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 118,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  270 => 126,  267 => 152,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 96,  223 => 131,  220 => 104,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 78,  181 => 99,  174 => 95,  172 => 84,  139 => 75,  134 => 50,  116 => 40,  111 => 37,  109 => 46,  106 => 36,  89 => 41,  84 => 26,  79 => 29,  74 => 36,  64 => 21,  59 => 24,  49 => 22,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 123,  290 => 161,  288 => 78,  282 => 77,  276 => 90,  271 => 153,  268 => 111,  262 => 83,  256 => 70,  253 => 105,  251 => 65,  248 => 64,  240 => 70,  237 => 131,  234 => 98,  232 => 106,  226 => 132,  224 => 96,  221 => 53,  214 => 49,  209 => 115,  207 => 97,  204 => 96,  194 => 40,  191 => 82,  188 => 103,  186 => 37,  182 => 89,  180 => 103,  175 => 87,  169 => 85,  166 => 95,  164 => 81,  161 => 82,  148 => 77,  142 => 61,  140 => 75,  137 => 53,  118 => 7,  113 => 47,  102 => 47,  99 => 48,  97 => 43,  90 => 32,  87 => 38,  85 => 40,  82 => 38,  80 => 25,  77 => 32,  72 => 25,  67 => 36,  62 => 21,  60 => 20,  57 => 34,  55 => 20,  52 => 21,  47 => 17,  45 => 12,  42 => 15,  27 => 4,  18 => 1,  32 => 11,  48 => 17,  39 => 7,  34 => 5,  46 => 17,  24 => 3,  20 => 2,  36 => 8,  25 => 7,  21 => 3,  33 => 6,  28 => 3,  22 => 3,  19 => 2,  17 => 1,  76 => 29,  70 => 27,  61 => 22,  54 => 33,  50 => 32,  31 => 13,  154 => 56,  149 => 64,  146 => 79,  138 => 79,  135 => 50,  131 => 63,  128 => 43,  123 => 69,  117 => 48,  108 => 51,  103 => 49,  101 => 44,  94 => 30,  92 => 39,  88 => 27,  86 => 39,  75 => 38,  69 => 27,  65 => 32,  63 => 35,  58 => 22,  56 => 22,  44 => 12,  40 => 8,  37 => 6,  35 => 8,  30 => 4,  23 => 3,  29 => 4,  26 => 3,);
    }
}
