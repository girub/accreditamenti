<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_8534582f4a57db51b94a495dd9fe8321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if (($this->getContext($context, "position") == "left")) {
            // line 4
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "src"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "height"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name")), "html", null, true);
            echo "\" />
        ";
            // line 5
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "src"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "height"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "server"), "html", null, true);
        echo "/noscript?k=";
        echo twig_escape_filter($this->env, $this->getContext($context, "public_key"), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 28
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 30
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 31
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"))));
            // line 35
            echo "

            ";
            // line 37
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("size" => 10));
            // line 38
            echo "            ";
            $context["id"] = ("datepicker_" . $this->getContext($context, "id"));
            // line 39
            echo "            ";
            $context["full_name"] = ("datepicker_" . $this->getContext($context, "full_name"));
            // line 40
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 46
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        // line 47
        ob_start();
        // line 48
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 57
        $context["id"] = ("autocompleter_" . $this->getContext($context, "id"));
        // line 58
        echo "    ";
        $context["full_name"] = ("autocompleter_" . $this->getContext($context, "full_name"));
        // line 59
        echo "    ";
        $context["value"] = $this->getContext($context, "autocompleter_value");
        // line 60
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 64
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        // line 65
        ob_start();
        // line 66
        echo "    ";
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-placeholder" => (($this->getAttribute($this->getContext($context, "attr", true), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "placeholder"), $this->getContext($context, "empty_value"))) : ($this->getContext($context, "empty_value"))), "class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " chzn-select")));
        // line 70
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    \tgenemuFormBundleChosenFunc_";
        // line 72
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo " = ";
        ob_start();
        echo $this->getContext($context, "json_transform_func");
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 73
        echo "    \t
\t    genemuFormBundleChosenConfigs_";
        // line 74
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "=new Array();

\t    genemuFormBundleChosenConfigs_";
        // line 76
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "['empty_value']='";
        echo twig_escape_filter($this->env, $this->getContext($context, "empty_value"), "html", null, true);
        echo "';
\t    genemuFormBundleChosenConfigs_";
        // line 77
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "['allow_single_deselect']=";
        echo (($this->getContext($context, "allow_single_deselect")) ? ("true") : ("false"));
        echo ";
\t    ";
        // line 78
        if ($this->getContext($context, "route_name")) {
            // line 79
            echo "\t    \tgenemuFormBundleChosenConfigs_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "['path_route_name']='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route_name")), "html", null, true);
            echo "';
\t    ";
        }
        // line 81
        echo "\t    genemuFormBundleChosenConfigs_";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "['json_transform_func']=genemuFormBundleChosenFunc_";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo ";
\t    genemuFormBundleChosenConfigs_";
        // line 82
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "['typing_timeout']='";
        echo twig_escape_filter($this->env, $this->getContext($context, "typing_timeout"), "html", null, true);
        echo "';
\t    genemuFormBundleChosenConfigs_";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "['query_param_name']='";
        echo twig_escape_filter($this->env, $this->getContext($context, "query_param_name"), "html", null, true);
        echo "';
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 88
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        // line 89
        ob_start();
        // line 90
        echo "    ";
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    ";
        // line 92
        if (($this->getContext($context, "map") === true)) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 98
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        // line 99
        ob_start();
        // line 100
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div class=\"queue\">
        <div id=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_queue\"></div>
    </div>
    <script type=\"text/javascript\">
\t    var config = ";
        // line 105
        echo twig_jsonencode_filter(twig_array_merge($this->getContext($context, "configs"), array("uploader" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "uploader")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "cancelImg")), "script" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "configs"), "script")), "queueID" => ($this->getContext($context, "id") . "_queue"))));
        // line 110
        echo ";

\t\tgenemuFormBundleFileConfigs_";
        // line 112
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "=new Array(config, ";
        if (((!$this->getAttribute($this->getContext($context, "configs", true), "auto", array(), "any", true, true)) || ($this->getAttribute($this->getContext($context, "configs"), "auto") === false))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ");
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 117
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        // line 118
        ob_start();
        // line 119
        echo "    ";
        if (($this->getContext($context, "widget") == "image")) {
            // line 120
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 121
            if ($this->getContext($context, "value")) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 122
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 125
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 133
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 135
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 137
            echo "        </div>
    ";
        } else {
            // line 139
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 144
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        // line 145
        ob_start();
        // line 146
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_preview\">
                ";
        // line 149
        $context["type"] = "hidden";
        // line 150
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 154
        if ($this->getContext($context, "value")) {
            // line 155
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "width")) : (500));
            // line 156
            echo "                    ";
            $context["ratio"] = ((($this->getContext($context, "width") > $this->getContext($context, "widthMax"))) ? (($this->getContext($context, "width") / $this->getContext($context, "widthMax"))) : (1));
            // line 157
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "file")) : ($this->getContext($context, "value"))));
            // line 158
            echo "                    ";
            $context["width"] = ($this->getContext($context, "width") / $this->getContext($context, "ratio"));
            // line 159
            echo "                    ";
            $context["height"] = ($this->getContext($context, "height") / $this->getContext($context, "ratio"));
            // line 160
            echo "                ";
        } else {
            // line 161
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 162
            echo "                    ";
            $context["width"] = 96;
            // line 163
            echo "                    ";
            $context["height"] = 96;
            // line 164
            echo "                ";
        }
        // line 165
        echo "
                <img id=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "asset"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "height"), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 169
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 170
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "filter"), "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 172
        echo "            </ul>
            <div class=\"queue\">
                <div id=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        // line 182
        ob_start();
        // line 183
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 185
        $context["id"] = ("tokeninput_" . $this->getContext($context, "id"));
        // line 186
        $context["full_name"] = ("tokeninput_" . $this->getContext($context, "full_name"));
        // line 187
        $context["value"] = $this->getContext($context, "tokeninput_value");
        // line 188
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 192
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        // line 193
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 194
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"));
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  572 => 185,  565 => 182,  562 => 181,  552 => 174,  539 => 170,  535 => 169,  531 => 168,  520 => 166,  517 => 165,  508 => 162,  505 => 161,  499 => 159,  496 => 158,  493 => 157,  487 => 155,  480 => 152,  472 => 149,  468 => 148,  462 => 146,  460 => 145,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 132,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  385 => 119,  383 => 118,  380 => 117,  362 => 110,  360 => 105,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 89,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  276 => 76,  271 => 74,  268 => 73,  262 => 72,  251 => 65,  240 => 60,  234 => 58,  232 => 57,  224 => 54,  221 => 53,  207 => 47,  204 => 46,  194 => 40,  186 => 37,  182 => 35,  169 => 28,  166 => 27,  164 => 26,  161 => 25,  148 => 17,  140 => 14,  123 => 8,  118 => 7,  113 => 5,  90 => 192,  85 => 181,  80 => 144,  75 => 130,  70 => 117,  65 => 98,  60 => 88,  55 => 64,  50 => 53,  47 => 52,  45 => 46,  42 => 45,  40 => 25,  37 => 24,  35 => 13,  32 => 12,  30 => 1,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 186,  567 => 183,  559 => 120,  554 => 119,  548 => 172,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 164,  511 => 163,  502 => 160,  498 => 91,  494 => 90,  490 => 156,  485 => 154,  479 => 86,  476 => 85,  474 => 150,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  400 => 59,  397 => 58,  394 => 57,  388 => 120,  386 => 54,  378 => 53,  374 => 51,  366 => 112,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  287 => 29,  285 => 28,  282 => 77,  272 => 23,  270 => 22,  267 => 21,  259 => 17,  256 => 70,  253 => 66,  250 => 14,  248 => 64,  245 => 12,  237 => 59,  233 => 6,  228 => 5,  226 => 55,  223 => 3,  219 => 288,  216 => 287,  214 => 49,  211 => 280,  209 => 48,  206 => 271,  203 => 269,  201 => 260,  198 => 259,  196 => 248,  193 => 247,  191 => 39,  188 => 38,  185 => 239,  183 => 236,  180 => 31,  178 => 226,  175 => 30,  173 => 220,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 193,  147 => 187,  144 => 186,  142 => 15,  139 => 181,  137 => 13,  134 => 174,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 154,  119 => 153,  117 => 147,  114 => 146,  112 => 141,  109 => 140,  107 => 134,  104 => 133,  102 => 4,  99 => 3,  97 => 2,  94 => 1,  92 => 98,  89 => 97,  87 => 191,  84 => 82,  82 => 180,  79 => 76,  77 => 143,  74 => 70,  72 => 129,  69 => 42,  67 => 116,  64 => 26,  62 => 97,  59 => 20,  57 => 87,  54 => 11,  52 => 63,  49 => 2,  33 => 6,  28 => 4,  22 => 3,  19 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}
