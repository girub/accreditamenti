<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_e17c21cab61eb39a407416b33c9331fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "id"), array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  18 => 1,  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 102,  213 => 93,  159 => 59,  151 => 54,  141 => 49,  136 => 47,  125 => 39,  120 => 37,  98 => 23,  88 => 16,  81 => 14,  68 => 9,  56 => 4,  51 => 3,  46 => 1,  27 => 3,  24 => 8,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  858 => 365,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  616 => 252,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  350 => 123,  338 => 116,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  284 => 93,  281 => 92,  279 => 91,  273 => 89,  265 => 84,  255 => 78,  242 => 71,  229 => 64,  220 => 56,  217 => 55,  215 => 54,  212 => 53,  199 => 47,  190 => 45,  181 => 43,  174 => 69,  172 => 39,  146 => 18,  128 => 9,  116 => 4,  111 => 3,  106 => 1,  44 => 37,  39 => 46,  34 => 35,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  572 => 185,  565 => 182,  562 => 181,  552 => 174,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  508 => 162,  505 => 161,  499 => 159,  496 => 158,  493 => 157,  487 => 155,  480 => 197,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  385 => 141,  383 => 118,  380 => 117,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  276 => 90,  271 => 74,  268 => 73,  262 => 83,  251 => 65,  240 => 70,  234 => 58,  232 => 106,  224 => 54,  221 => 53,  207 => 47,  204 => 46,  194 => 40,  186 => 37,  182 => 35,  169 => 38,  166 => 27,  164 => 26,  161 => 25,  148 => 17,  140 => 14,  123 => 8,  118 => 7,  113 => 5,  90 => 192,  85 => 181,  80 => 144,  75 => 130,  70 => 117,  65 => 98,  60 => 88,  55 => 64,  50 => 53,  47 => 38,  45 => 46,  42 => 47,  40 => 25,  37 => 36,  35 => 13,  32 => 11,  30 => 1,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 440,  952 => 283,  950 => 282,  947 => 281,  935 => 417,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 397,  903 => 396,  898 => 262,  896 => 261,  893 => 260,  886 => 382,  877 => 253,  873 => 252,  870 => 372,  867 => 371,  865 => 249,  862 => 248,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 324,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 296,  725 => 188,  722 => 293,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 270,  658 => 163,  656 => 268,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 256,  624 => 148,  621 => 254,  613 => 143,  611 => 250,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 186,  567 => 183,  559 => 120,  554 => 119,  548 => 172,  545 => 116,  543 => 115,  540 => 221,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 164,  511 => 163,  502 => 160,  498 => 91,  494 => 205,  490 => 156,  485 => 154,  479 => 86,  476 => 85,  474 => 150,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 153,  405 => 152,  400 => 150,  397 => 58,  394 => 57,  388 => 120,  386 => 54,  378 => 53,  374 => 51,  366 => 112,  361 => 48,  357 => 47,  352 => 124,  349 => 45,  347 => 122,  344 => 43,  335 => 115,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  287 => 94,  285 => 28,  282 => 77,  272 => 23,  270 => 126,  267 => 85,  259 => 17,  256 => 70,  253 => 118,  250 => 74,  248 => 64,  245 => 72,  237 => 68,  233 => 6,  228 => 5,  226 => 60,  223 => 59,  219 => 288,  216 => 287,  214 => 49,  211 => 280,  209 => 92,  206 => 271,  203 => 269,  201 => 260,  198 => 259,  196 => 82,  193 => 247,  191 => 39,  188 => 77,  185 => 239,  183 => 236,  180 => 72,  178 => 226,  175 => 30,  173 => 220,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 193,  147 => 187,  144 => 50,  142 => 15,  139 => 48,  137 => 12,  134 => 11,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 38,  119 => 153,  117 => 36,  114 => 146,  112 => 141,  109 => 2,  107 => 134,  104 => 133,  102 => 24,  99 => 439,  97 => 430,  94 => 429,  92 => 371,  89 => 370,  87 => 361,  84 => 15,  82 => 302,  79 => 13,  77 => 12,  74 => 11,  72 => 178,  69 => 177,  67 => 140,  64 => 139,  62 => 122,  59 => 121,  57 => 83,  54 => 82,  52 => 53,  49 => 2,  33 => 6,  28 => 4,  22 => 1,  19 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}