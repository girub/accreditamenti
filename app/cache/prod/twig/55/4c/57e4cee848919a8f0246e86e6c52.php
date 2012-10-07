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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('genemu.twig.extension.form')->renderStylesheet($_child_);
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
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "image")) {
            // line 14
            echo "    <style type=\"text/css\" media=\"screen\">
        #";
            // line 15
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_container {
            overflow: hidden;
        }

        #";
        // line 54
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_preview {
            overflow: hidden;
            position: relative;
        }

        #";
        // line 59
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_preview object, #";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_preview object {
            opacity: 0;
            z-index: 362;
        }

        #";
        // line 77
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_container .left {
            float: left;
            position: relative;
        }

        #";
        // line 82
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .rotate {
            background-position: 0 0;
        }

        #";
        // line 106
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .bw {
            background-position: 0 -24px;
        }

        #";
        // line 110
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .negative {
            background-position: -24px 0;
        }

        #";
        // line 114
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .sepia {
            background-position: -24px -24px;
        }

        #";
        // line 118
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .crop {
            background-position: -48px 0;
        }

        #";
        // line 122
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options .blur {
            background-position: -48px -24px;
        }
        #";
        // line 125
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        return array (  279 => 122,  271 => 118,  255 => 110,  247 => 106,  239 => 102,  199 => 77,  190 => 72,  150 => 50,  145 => 48,  125 => 37,  81 => 13,  76 => 11,  46 => 1,  27 => 9,  24 => 8,  22 => 1,  1531 => 778,  1527 => 776,  1519 => 772,  1514 => 771,  1506 => 768,  1500 => 767,  1494 => 766,  1490 => 764,  1487 => 763,  1463 => 742,  1452 => 735,  1394 => 684,  1391 => 683,  1388 => 682,  1351 => 647,  1347 => 640,  1337 => 634,  1332 => 633,  1326 => 631,  1321 => 630,  1315 => 628,  1311 => 626,  1309 => 625,  1306 => 624,  1289 => 609,  1283 => 605,  1268 => 592,  1265 => 591,  1236 => 564,  1232 => 559,  1225 => 556,  1219 => 554,  1215 => 552,  1213 => 551,  1210 => 550,  1203 => 545,  1196 => 540,  1193 => 539,  1187 => 537,  1181 => 535,  1176 => 532,  1173 => 531,  1168 => 526,  1165 => 525,  1162 => 524,  1159 => 523,  1154 => 518,  1151 => 517,  1148 => 516,  1145 => 515,  1140 => 510,  1137 => 509,  1134 => 508,  1131 => 507,  1126 => 502,  1123 => 501,  1120 => 500,  1117 => 499,  1112 => 494,  1108 => 493,  1106 => 492,  1103 => 491,  1096 => 486,  1047 => 441,  992 => 390,  983 => 385,  971 => 377,  965 => 373,  955 => 369,  950 => 368,  943 => 365,  939 => 363,  937 => 362,  934 => 361,  927 => 356,  917 => 348,  914 => 347,  909 => 344,  902 => 342,  894 => 339,  880 => 337,  875 => 336,  871 => 334,  868 => 333,  860 => 327,  855 => 324,  840 => 313,  830 => 307,  825 => 306,  821 => 304,  819 => 303,  816 => 302,  798 => 296,  793 => 293,  787 => 291,  777 => 288,  746 => 281,  738 => 276,  732 => 274,  725 => 270,  719 => 268,  715 => 267,  705 => 264,  699 => 262,  686 => 256,  681 => 254,  664 => 248,  653 => 244,  636 => 237,  630 => 235,  624 => 232,  618 => 230,  612 => 227,  606 => 225,  602 => 224,  592 => 221,  582 => 218,  576 => 216,  566 => 213,  555 => 209,  551 => 208,  544 => 206,  540 => 205,  537 => 204,  531 => 200,  516 => 193,  511 => 192,  505 => 189,  502 => 188,  489 => 182,  485 => 180,  483 => 179,  480 => 178,  473 => 173,  446 => 153,  443 => 152,  437 => 150,  427 => 144,  423 => 142,  418 => 140,  393 => 127,  388 => 126,  382 => 123,  354 => 107,  349 => 106,  344 => 105,  341 => 104,  337 => 103,  334 => 102,  325 => 100,  320 => 99,  315 => 98,  309 => 94,  306 => 93,  294 => 89,  290 => 86,  284 => 84,  281 => 83,  274 => 78,  269 => 74,  263 => 114,  260 => 71,  257 => 70,  253 => 68,  248 => 65,  229 => 55,  224 => 53,  184 => 69,  174 => 39,  171 => 38,  148 => 18,  141 => 13,  136 => 11,  130 => 39,  111 => 3,  106 => 1,  44 => 37,  39 => 46,  34 => 35,  577 => 170,  572 => 215,  562 => 212,  559 => 211,  556 => 162,  553 => 161,  548 => 207,  546 => 158,  543 => 157,  532 => 150,  528 => 148,  518 => 146,  508 => 144,  493 => 142,  490 => 141,  487 => 140,  478 => 137,  475 => 136,  470 => 135,  465 => 134,  460 => 133,  455 => 132,  451 => 131,  442 => 128,  436 => 126,  429 => 124,  422 => 122,  420 => 121,  408 => 134,  404 => 113,  389 => 110,  384 => 124,  380 => 108,  378 => 107,  375 => 106,  366 => 115,  350 => 97,  342 => 96,  338 => 95,  336 => 94,  333 => 93,  324 => 88,  318 => 86,  316 => 85,  313 => 84,  303 => 92,  300 => 91,  293 => 76,  288 => 74,  280 => 70,  258 => 59,  245 => 64,  243 => 54,  240 => 60,  232 => 49,  227 => 93,  225 => 47,  222 => 92,  212 => 40,  208 => 82,  204 => 38,  197 => 35,  182 => 28,  176 => 40,  158 => 54,  151 => 15,  146 => 13,  128 => 8,  123 => 7,  118 => 5,  103 => 4,  90 => 168,  85 => 157,  80 => 120,  75 => 106,  70 => 9,  65 => 84,  60 => 74,  55 => 64,  50 => 53,  47 => 38,  45 => 46,  42 => 47,  40 => 25,  35 => 13,  32 => 11,  30 => 1,  1094 => 291,  1088 => 290,  1086 => 289,  1083 => 288,  1064 => 284,  1034 => 283,  1032 => 282,  1029 => 281,  1016 => 276,  1011 => 275,  1005 => 274,  1003 => 273,  1000 => 272,  991 => 266,  984 => 264,  980 => 263,  974 => 262,  972 => 261,  969 => 260,  962 => 372,  952 => 253,  947 => 252,  944 => 251,  940 => 250,  938 => 249,  935 => 248,  926 => 244,  924 => 243,  921 => 242,  913 => 237,  910 => 236,  901 => 231,  896 => 230,  890 => 229,  887 => 228,  885 => 227,  882 => 226,  874 => 222,  872 => 221,  869 => 220,  861 => 214,  859 => 213,  856 => 212,  848 => 208,  843 => 314,  841 => 206,  838 => 205,  813 => 201,  810 => 200,  806 => 199,  802 => 198,  800 => 197,  797 => 196,  789 => 190,  785 => 189,  783 => 290,  780 => 187,  773 => 287,  769 => 183,  766 => 182,  758 => 285,  754 => 177,  752 => 283,  749 => 175,  730 => 171,  726 => 170,  724 => 169,  721 => 168,  713 => 164,  709 => 265,  707 => 162,  704 => 161,  696 => 157,  692 => 258,  690 => 155,  687 => 154,  679 => 150,  675 => 252,  673 => 148,  670 => 250,  661 => 143,  659 => 246,  656 => 141,  648 => 242,  644 => 136,  642 => 240,  639 => 134,  631 => 130,  627 => 129,  625 => 128,  623 => 127,  620 => 126,  613 => 121,  601 => 120,  596 => 222,  590 => 117,  586 => 219,  584 => 115,  581 => 114,  573 => 108,  569 => 168,  564 => 103,  558 => 101,  554 => 100,  552 => 99,  549 => 98,  539 => 92,  534 => 91,  529 => 90,  524 => 197,  519 => 88,  513 => 145,  509 => 85,  507 => 190,  504 => 83,  486 => 79,  484 => 139,  481 => 138,  463 => 165,  461 => 72,  458 => 71,  448 => 130,  444 => 64,  441 => 63,  434 => 125,  430 => 60,  425 => 59,  421 => 141,  417 => 120,  410 => 55,  407 => 54,  398 => 128,  394 => 111,  385 => 49,  379 => 122,  374 => 47,  369 => 116,  365 => 45,  363 => 44,  360 => 98,  351 => 39,  335 => 37,  331 => 35,  312 => 33,  307 => 32,  301 => 31,  297 => 90,  291 => 126,  289 => 28,  286 => 125,  275 => 66,  273 => 65,  270 => 64,  262 => 60,  259 => 16,  254 => 58,  251 => 57,  249 => 13,  246 => 12,  237 => 59,  233 => 56,  228 => 5,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  214 => 281,  211 => 280,  209 => 272,  206 => 271,  203 => 269,  201 => 37,  198 => 259,  196 => 45,  193 => 31,  191 => 242,  188 => 30,  185 => 239,  183 => 236,  180 => 235,  178 => 27,  175 => 225,  173 => 25,  170 => 219,  167 => 59,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 14,  147 => 49,  144 => 186,  142 => 47,  139 => 12,  137 => 175,  134 => 174,  132 => 168,  129 => 167,  127 => 38,  124 => 160,  122 => 36,  119 => 153,  117 => 4,  114 => 146,  112 => 141,  109 => 2,  107 => 24,  104 => 133,  102 => 23,  99 => 623,  97 => 550,  94 => 549,  92 => 16,  89 => 490,  87 => 15,  84 => 14,  82 => 302,  79 => 12,  77 => 188,  74 => 187,  72 => 178,  69 => 177,  67 => 140,  64 => 139,  62 => 122,  59 => 121,  57 => 4,  54 => 82,  52 => 53,  49 => 2,  58 => 22,  51 => 3,  37 => 36,  29 => 10,  26 => 3,);
    }
}
