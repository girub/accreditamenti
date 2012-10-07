<?php

/* RuianTwitterBootstrapBundle:Form:bootstrap_v2.html.twig */
class __TwigTemplate_8830dfddf25244902db93086b489d1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'field_errors' => array($this, 'block_field_errors'),
            'generic_label' => array($this, 'block_generic_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field_row', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('field_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('generic_label', $context, $blocks);
    }

    // line 1
    public function block_field_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"control-group ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "error";
        } elseif ($this->getContext($context, "value")) {
            echo "success";
        }
        echo "\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        <div class=\"controls\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_field_errors($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 16
            echo "    
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "    <div class=\"help-block\">
      ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "    
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_generic_label($context, array $blocks = array())
    {
        // line 28
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ""));
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 31
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => "required"));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "RuianTwitterBootstrapBundle:Form:bootstrap_v2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 179,  323 => 177,  314 => 174,  307 => 172,  303 => 171,  292 => 162,  285 => 158,  280 => 156,  247 => 140,  206 => 120,  187 => 107,  105 => 29,  198 => 108,  163 => 83,  230 => 133,  216 => 119,  130 => 67,  112 => 61,  173 => 99,  168 => 71,  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 112,  264 => 151,  257 => 106,  249 => 141,  244 => 139,  231 => 97,  219 => 130,  208 => 121,  202 => 109,  170 => 68,  155 => 79,  147 => 65,  110 => 31,  197 => 94,  167 => 91,  160 => 87,  119 => 60,  100 => 27,  114 => 49,  66 => 13,  95 => 47,  71 => 15,  211 => 89,  200 => 83,  195 => 112,  193 => 83,  179 => 72,  177 => 73,  162 => 71,  158 => 83,  156 => 67,  153 => 83,  126 => 46,  53 => 6,  133 => 52,  124 => 41,  129 => 51,  104 => 24,  73 => 30,  43 => 10,  121 => 49,  115 => 59,  107 => 30,  96 => 34,  91 => 38,  41 => 9,  205 => 82,  192 => 78,  189 => 77,  185 => 90,  178 => 87,  176 => 70,  171 => 67,  165 => 87,  152 => 59,  145 => 55,  132 => 59,  127 => 62,  93 => 22,  78 => 36,  38 => 12,  266 => 125,  260 => 150,  246 => 114,  239 => 136,  225 => 94,  213 => 93,  196 => 84,  159 => 91,  151 => 79,  144 => 75,  141 => 54,  136 => 74,  125 => 50,  122 => 46,  120 => 45,  98 => 31,  81 => 18,  68 => 23,  51 => 16,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 440,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 417,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 397,  903 => 396,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 382,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 372,  867 => 371,  858 => 365,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 324,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 296,  722 => 293,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 270,  656 => 268,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 256,  621 => 254,  616 => 252,  611 => 250,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 221,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 205,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 153,  405 => 152,  400 => 150,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 124,  350 => 123,  347 => 142,  338 => 116,  335 => 115,  320 => 106,  316 => 105,  313 => 129,  310 => 173,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  287 => 118,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  270 => 126,  267 => 152,  265 => 84,  255 => 78,  250 => 74,  245 => 72,  242 => 71,  229 => 96,  223 => 131,  220 => 104,  217 => 55,  215 => 90,  212 => 53,  199 => 47,  190 => 103,  181 => 99,  174 => 95,  172 => 91,  139 => 75,  134 => 50,  116 => 33,  111 => 37,  109 => 55,  106 => 36,  89 => 41,  84 => 19,  79 => 29,  74 => 16,  64 => 21,  59 => 24,  49 => 22,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 186,  572 => 185,  567 => 183,  565 => 182,  562 => 181,  552 => 174,  548 => 172,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  496 => 158,  493 => 157,  490 => 156,  487 => 155,  485 => 154,  480 => 197,  474 => 150,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 120,  385 => 141,  383 => 118,  380 => 117,  366 => 112,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 123,  290 => 161,  288 => 78,  282 => 77,  276 => 90,  271 => 153,  268 => 111,  262 => 83,  256 => 70,  253 => 105,  251 => 65,  248 => 64,  240 => 70,  237 => 131,  234 => 98,  232 => 106,  226 => 132,  224 => 96,  221 => 53,  214 => 49,  209 => 115,  207 => 97,  204 => 96,  194 => 40,  191 => 82,  188 => 103,  186 => 37,  182 => 98,  180 => 103,  175 => 87,  169 => 85,  166 => 95,  164 => 81,  161 => 82,  148 => 77,  142 => 61,  140 => 75,  137 => 71,  118 => 7,  113 => 32,  102 => 51,  99 => 48,  97 => 43,  90 => 32,  87 => 38,  85 => 40,  82 => 38,  80 => 25,  77 => 17,  72 => 25,  67 => 31,  62 => 21,  60 => 27,  57 => 7,  55 => 20,  52 => 21,  47 => 17,  45 => 12,  42 => 15,  27 => 26,  18 => 1,  32 => 11,  48 => 4,  39 => 3,  34 => 1,  46 => 19,  24 => 3,  20 => 1,  36 => 8,  25 => 13,  21 => 3,  33 => 6,  28 => 3,  22 => 12,  19 => 2,  17 => 1,  76 => 29,  70 => 27,  61 => 22,  54 => 33,  50 => 32,  31 => 13,  154 => 56,  149 => 64,  146 => 79,  138 => 79,  135 => 50,  131 => 63,  128 => 43,  123 => 63,  117 => 48,  108 => 51,  103 => 28,  101 => 44,  94 => 30,  92 => 39,  88 => 43,  86 => 39,  75 => 38,  69 => 14,  65 => 32,  63 => 35,  58 => 22,  56 => 22,  44 => 12,  40 => 8,  37 => 2,  35 => 8,  30 => 27,  23 => 3,  29 => 4,  26 => 3,);
    }
}
