<?php

/* GenemuFormBundle:Form:stylesheet_layout.html.twig */
class __TwigTemplate_314d015f4e5c3200147867dd6f95fca7 extends Twig_Template
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
        return array (  291 => 126,  279 => 122,  271 => 118,  255 => 110,  247 => 106,  239 => 102,  199 => 77,  190 => 72,  167 => 59,  150 => 50,  147 => 49,  145 => 48,  142 => 47,  127 => 38,  125 => 37,  122 => 36,  107 => 24,  81 => 13,  76 => 11,  51 => 3,  46 => 1,  27 => 9,  24 => 8,  22 => 1,  1304 => 594,  1300 => 592,  1292 => 588,  1287 => 587,  1279 => 584,  1273 => 583,  1267 => 582,  1263 => 580,  1260 => 579,  1236 => 558,  1225 => 551,  1167 => 500,  1164 => 499,  1161 => 498,  1124 => 463,  1120 => 456,  1110 => 450,  1105 => 449,  1099 => 447,  1094 => 446,  1088 => 444,  1084 => 442,  1082 => 441,  1079 => 440,  1069 => 434,  1065 => 432,  1063 => 431,  1060 => 430,  1053 => 425,  1046 => 420,  1043 => 419,  1037 => 417,  1031 => 415,  1026 => 412,  1023 => 411,  1018 => 406,  1015 => 405,  1012 => 404,  1009 => 403,  1004 => 398,  1001 => 397,  998 => 396,  995 => 395,  990 => 390,  987 => 389,  984 => 388,  981 => 387,  976 => 382,  973 => 381,  970 => 380,  967 => 379,  962 => 374,  958 => 373,  956 => 372,  953 => 371,  943 => 365,  939 => 363,  937 => 362,  934 => 361,  927 => 356,  917 => 348,  914 => 347,  909 => 344,  902 => 342,  894 => 339,  880 => 337,  875 => 336,  871 => 334,  868 => 333,  860 => 327,  855 => 324,  843 => 314,  840 => 313,  830 => 307,  825 => 306,  821 => 304,  819 => 303,  816 => 302,  798 => 296,  793 => 293,  787 => 291,  783 => 290,  777 => 288,  773 => 287,  758 => 285,  752 => 283,  746 => 281,  738 => 276,  732 => 274,  725 => 270,  719 => 268,  715 => 267,  709 => 265,  705 => 264,  699 => 262,  692 => 258,  686 => 256,  681 => 254,  675 => 252,  670 => 250,  659 => 246,  653 => 244,  642 => 240,  636 => 237,  630 => 235,  624 => 232,  618 => 230,  612 => 227,  606 => 225,  602 => 224,  596 => 222,  592 => 221,  586 => 219,  572 => 215,  566 => 213,  562 => 212,  559 => 211,  551 => 208,  548 => 207,  544 => 206,  540 => 205,  516 => 193,  511 => 192,  507 => 190,  505 => 189,  502 => 188,  485 => 180,  483 => 179,  480 => 178,  463 => 165,  446 => 153,  443 => 152,  427 => 144,  423 => 142,  421 => 141,  418 => 140,  398 => 128,  393 => 127,  388 => 126,  384 => 124,  382 => 123,  379 => 122,  369 => 116,  354 => 107,  344 => 105,  337 => 103,  334 => 102,  325 => 100,  320 => 99,  315 => 98,  309 => 94,  306 => 93,  300 => 91,  290 => 86,  284 => 84,  281 => 83,  274 => 78,  269 => 74,  263 => 114,  257 => 70,  253 => 68,  248 => 65,  237 => 59,  233 => 56,  229 => 55,  224 => 53,  184 => 69,  174 => 39,  171 => 38,  141 => 13,  136 => 11,  130 => 39,  117 => 4,  111 => 3,  109 => 2,  106 => 1,  102 => 23,  92 => 16,  89 => 370,  74 => 187,  69 => 177,  64 => 139,  59 => 121,  49 => 2,  44 => 37,  39 => 46,  34 => 35,  672 => 194,  667 => 193,  664 => 248,  657 => 188,  654 => 187,  651 => 186,  648 => 242,  643 => 183,  641 => 182,  638 => 181,  627 => 174,  623 => 172,  613 => 170,  608 => 169,  603 => 168,  588 => 166,  585 => 165,  582 => 218,  579 => 163,  576 => 216,  573 => 161,  570 => 160,  565 => 159,  560 => 158,  555 => 209,  550 => 156,  546 => 155,  543 => 154,  537 => 204,  531 => 200,  529 => 149,  524 => 197,  517 => 146,  515 => 145,  512 => 144,  503 => 139,  499 => 137,  489 => 182,  484 => 134,  479 => 133,  475 => 132,  473 => 173,  470 => 130,  461 => 125,  455 => 122,  445 => 121,  437 => 150,  433 => 119,  431 => 118,  428 => 117,  412 => 112,  408 => 134,  404 => 105,  397 => 102,  391 => 100,  389 => 99,  386 => 98,  376 => 93,  373 => 92,  366 => 115,  364 => 89,  361 => 88,  349 => 106,  341 => 104,  332 => 81,  322 => 79,  319 => 78,  311 => 77,  303 => 92,  297 => 90,  294 => 89,  286 => 125,  280 => 70,  275 => 66,  273 => 65,  270 => 64,  262 => 60,  258 => 59,  254 => 58,  251 => 57,  245 => 64,  243 => 54,  240 => 60,  232 => 49,  227 => 93,  225 => 47,  222 => 92,  208 => 82,  201 => 37,  197 => 35,  193 => 31,  182 => 28,  178 => 27,  176 => 40,  173 => 25,  158 => 54,  151 => 15,  149 => 14,  146 => 13,  128 => 8,  123 => 7,  118 => 5,  103 => 4,  99 => 439,  97 => 430,  94 => 429,  90 => 192,  87 => 15,  85 => 181,  82 => 302,  80 => 144,  77 => 188,  75 => 130,  72 => 178,  70 => 9,  67 => 140,  65 => 98,  62 => 122,  60 => 88,  57 => 4,  55 => 64,  52 => 53,  50 => 53,  47 => 38,  42 => 47,  40 => 25,  35 => 13,  32 => 11,  30 => 1,  268 => 135,  260 => 71,  252 => 127,  244 => 123,  236 => 119,  228 => 115,  220 => 111,  212 => 40,  204 => 38,  196 => 45,  188 => 30,  180 => 91,  172 => 87,  164 => 83,  156 => 79,  148 => 18,  139 => 12,  132 => 63,  119 => 61,  114 => 60,  101 => 49,  98 => 48,  84 => 14,  79 => 12,  73 => 35,  54 => 82,  45 => 46,  37 => 36,  29 => 10,  26 => 3,);
    }
}
