<?php

/* GenemuFormBundle:Form:stylesheet_layout.html.twig */
class __TwigTemplate_554c57e4cee848919a8f0246e86e6c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_stylesheet' => array($this, 'block_form_stylesheet'),
            'field_stylesheet' => array($this, 'block_field_stylesheet'),
            'genemu_jquerycolor_stylesheet' => array($this, 'block_genemu_jquerycolor_stylesheet'),
            'genemu_jquerygeolocation_stylesheet' => array($this, 'block_genemu_jquerygeolocation_stylesheet'),
            'genemu_jqueryimage_stylesheet' => array($this, 'block_genemu_jqueryimage_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_stylesheet', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_stylesheet', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('genemu_jquerycolor_stylesheet', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('genemu_jquerygeolocation_stylesheet', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('genemu_jqueryimage_stylesheet', $context, $blocks);
    }

    // line 1
    public function block_form_stylesheet($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderStylesheet($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_stylesheet($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_genemu_jquerycolor_stylesheet($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        if (($this->getContext($context, "widget") == "image")) {
            // line 14
            echo "    <style type=\"text/css\" media=\"screen\">
        #";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "_color {
            background: url(";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ");
            width: 36px;
            height: 36px;
            position: relative;
            overflow: hidden;
        }

        #";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "_color div {
            background: url(";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ") center center;
            position: absolute;
            left: 3px;
            top: 3px;
            width: 30px;
            height: 30px;
        }
    </style>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_genemu_jquerygeolocation_stylesheet($context, array $blocks = array())
    {
        // line 37
        ob_start();
        // line 38
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 39
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_map {
            width: 300px;
            height: 300px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_genemu_jqueryimage_stylesheet($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 49
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_container {
            overflow: hidden;
        }

        #";
        // line 54
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_preview {
            overflow: hidden;
            position: relative;
        }

        #";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_preview object, #";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_overlay {
            position: absolute;
            top: 0;
            right: 0;
            text-decoration: none;
            display: block;
            z-index: 361;
            width: 19px;
            height: 19px;

            background: url(";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/edit.gif"), "html", null, true);
        echo ");
        }

        #";
        // line 72
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_preview object {
            opacity: 0;
            z-index: 362;
        }

        #";
        // line 77
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_container .left {
            float: left;
            position: relative;
        }

        #";
        // line 82
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options {
            padding: 0px;
            margin: 0px;
            list-style-type: none;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 361;
        }

        #";
        // line 92
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options li {
            background: transparent url(";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/icons.png"), "html", null, true);
        echo ");

            display: inline;
            float: left;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        #";
        // line 102
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .rotate {
            background-position: 0 0;
        }

        #";
        // line 106
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .bw {
            background-position: 0 -24px;
        }

        #";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .negative {
            background-position: -24px 0;
        }

        #";
        // line 114
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .sepia {
            background-position: -24px -24px;
        }

        #";
        // line 118
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .crop {
            background-position: -48px 0;
        }

        #";
        // line 122
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .blur {
            background-position: -48px -24px;
        }
        #";
        // line 125
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options .loading {
            background: #FFF url(";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/ajax-loader.gif"), "html", null, true);
        echo ") no-repeat;
            padding: 6px 0;
            height: 11px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:stylesheet_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  266 => 125,  260 => 122,  246 => 114,  239 => 110,  225 => 102,  213 => 93,  159 => 59,  151 => 54,  141 => 49,  136 => 47,  125 => 39,  120 => 37,  98 => 23,  88 => 16,  81 => 14,  68 => 9,  56 => 4,  46 => 1,  27 => 9,  24 => 8,  22 => 1,  1395 => 778,  1391 => 776,  1384 => 772,  1380 => 771,  1374 => 768,  1370 => 767,  1366 => 766,  1362 => 764,  1360 => 763,  1336 => 742,  1326 => 735,  1270 => 684,  1267 => 683,  1265 => 682,  1228 => 647,  1226 => 640,  1217 => 634,  1213 => 633,  1208 => 631,  1204 => 630,  1199 => 628,  1195 => 626,  1193 => 625,  1190 => 624,  1173 => 609,  1167 => 605,  1152 => 592,  1150 => 591,  1121 => 564,  1119 => 559,  1113 => 556,  1108 => 554,  1104 => 552,  1102 => 551,  1099 => 550,  1092 => 545,  1085 => 540,  1083 => 539,  1078 => 537,  1073 => 535,  1068 => 532,  1065 => 531,  1062 => 526,  1060 => 525,  1057 => 524,  1054 => 523,  1051 => 518,  1049 => 517,  1046 => 516,  1043 => 515,  1040 => 510,  1038 => 509,  1035 => 508,  1032 => 507,  1029 => 502,  1027 => 501,  1024 => 500,  1021 => 499,  1018 => 494,  1015 => 493,  1013 => 492,  1010 => 491,  1003 => 486,  955 => 441,  901 => 390,  882 => 377,  876 => 373,  874 => 372,  868 => 369,  864 => 368,  858 => 365,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  616 => 252,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  535 => 219,  531 => 218,  526 => 216,  522 => 215,  517 => 213,  506 => 209,  500 => 207,  486 => 200,  480 => 197,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  443 => 179,  440 => 178,  423 => 165,  391 => 144,  364 => 128,  350 => 123,  338 => 116,  324 => 107,  316 => 105,  301 => 100,  293 => 98,  284 => 93,  281 => 92,  279 => 91,  276 => 90,  273 => 89,  265 => 84,  262 => 83,  255 => 78,  242 => 71,  229 => 64,  220 => 56,  217 => 55,  215 => 54,  212 => 53,  199 => 47,  190 => 45,  181 => 43,  174 => 69,  172 => 39,  146 => 18,  128 => 9,  116 => 4,  111 => 3,  106 => 1,  44 => 37,  39 => 46,  34 => 35,  518 => 170,  513 => 212,  510 => 211,  503 => 208,  501 => 163,  499 => 162,  497 => 206,  492 => 204,  487 => 157,  477 => 150,  473 => 193,  464 => 146,  460 => 188,  456 => 144,  445 => 180,  442 => 141,  439 => 140,  436 => 139,  433 => 173,  430 => 137,  427 => 136,  424 => 135,  421 => 134,  418 => 133,  415 => 132,  412 => 131,  410 => 130,  399 => 126,  393 => 124,  387 => 142,  385 => 141,  382 => 140,  373 => 134,  369 => 113,  360 => 127,  356 => 126,  351 => 109,  348 => 108,  346 => 107,  343 => 106,  334 => 101,  328 => 98,  320 => 106,  313 => 104,  310 => 103,  308 => 102,  305 => 93,  297 => 99,  291 => 86,  289 => 85,  286 => 84,  277 => 79,  275 => 78,  269 => 76,  264 => 74,  251 => 65,  240 => 70,  234 => 58,  232 => 106,  224 => 54,  221 => 53,  207 => 47,  204 => 46,  194 => 40,  186 => 37,  182 => 35,  169 => 38,  166 => 27,  164 => 26,  161 => 25,  148 => 17,  140 => 14,  123 => 8,  118 => 7,  113 => 5,  90 => 168,  85 => 157,  80 => 120,  75 => 106,  70 => 93,  65 => 84,  60 => 74,  55 => 64,  50 => 53,  47 => 38,  45 => 46,  42 => 47,  40 => 25,  35 => 13,  32 => 11,  30 => 1,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 385,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 324,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 296,  725 => 188,  722 => 293,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 270,  658 => 163,  656 => 268,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 256,  624 => 148,  621 => 254,  613 => 143,  611 => 250,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 221,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 205,  490 => 158,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 153,  405 => 152,  400 => 150,  397 => 125,  394 => 57,  388 => 55,  386 => 54,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  352 => 124,  349 => 45,  347 => 122,  344 => 43,  335 => 115,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  287 => 94,  285 => 28,  282 => 27,  272 => 23,  270 => 126,  267 => 85,  259 => 17,  256 => 70,  253 => 118,  250 => 74,  248 => 64,  245 => 72,  237 => 68,  233 => 6,  228 => 5,  226 => 60,  223 => 59,  219 => 288,  216 => 287,  214 => 49,  211 => 280,  209 => 92,  206 => 271,  203 => 269,  201 => 260,  198 => 259,  196 => 82,  193 => 247,  191 => 39,  188 => 77,  185 => 239,  183 => 236,  180 => 72,  178 => 226,  175 => 30,  173 => 220,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 193,  147 => 187,  144 => 50,  142 => 15,  139 => 48,  137 => 12,  134 => 11,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 38,  119 => 153,  117 => 36,  114 => 146,  112 => 141,  109 => 2,  107 => 134,  104 => 133,  102 => 24,  99 => 623,  97 => 550,  94 => 549,  92 => 491,  89 => 490,  87 => 361,  84 => 15,  82 => 302,  79 => 13,  77 => 12,  74 => 11,  72 => 178,  69 => 177,  67 => 140,  64 => 139,  62 => 122,  59 => 121,  54 => 82,  52 => 53,  49 => 2,  57 => 83,  51 => 3,  37 => 36,  29 => 10,  26 => 3,);
    }
}
