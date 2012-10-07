<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_1ad6cd0ecb0d0e21c927b8308655ceaf extends Twig_Template
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
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (($_position_ == "left")) {
            // line 4
            echo "        <img src=\"";
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\" width=\"";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, $_width_, "html", null, true);
            echo "\" height=\"";
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            echo twig_escape_filter($this->env, $_height_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_name_), "html", null, true);
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
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\" width=\"";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, $_width_, "html", null, true);
            echo "\" height=\"";
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            echo twig_escape_filter($this->env, $_height_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_name_), "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"";
        // line 17
        if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
        echo twig_escape_filter($this->env, $_server_, "html", null, true);
        echo "/noscript?k=";
        if (isset($context["public_key"])) { $_public_key_ = $context["public_key"]; } else { $_public_key_ = null; }
        echo twig_escape_filter($this->env, $_public_key_, "html", null, true);
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
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
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
            if (isset($context["date_pattern"])) { $_date_pattern_ = $context["date_pattern"]; } else { $_date_pattern_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo strtr($_date_pattern_, array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "day"))));
            // line 35
            echo "

            ";
            // line 37
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("size" => 10));
            // line 38
            echo "            ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["id"] = ("datepicker_" . $_id_);
            // line 39
            echo "            ";
            if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
            $context["full_name"] = ("datepicker_" . $_full_name_);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        $context["id"] = ("autocompleter_" . $_id_);
        // line 58
        echo "    ";
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        $context["full_name"] = ("autocompleter_" . $_full_name_);
        // line 59
        echo "    ";
        if (isset($context["autocompleter_value"])) { $_autocompleter_value_ = $context["autocompleter_value"]; } else { $_autocompleter_value_ = null; }
        $context["value"] = $_autocompleter_value_;
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
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("data-placeholder" => (($this->getAttribute($_attr_, "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "placeholder"), $_empty_value_)) : ($_empty_value_)), "class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " chzn-select")));
        // line 70
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    \tgenemuFormBundleChosenFunc_";
        // line 72
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo " = ";
        ob_start();
        if (isset($context["json_transform_func"])) { $_json_transform_func_ = $context["json_transform_func"]; } else { $_json_transform_func_ = null; }
        echo $_json_transform_func_;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 73
        echo "    \t
\t    genemuFormBundleChosenConfigs_";
        // line 74
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "=new Array();

\t    genemuFormBundleChosenConfigs_";
        // line 76
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "['empty_value']='";
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        echo twig_escape_filter($this->env, $_empty_value_, "html", null, true);
        echo "';
\t    genemuFormBundleChosenConfigs_";
        // line 77
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "['allow_single_deselect']=";
        if (isset($context["allow_single_deselect"])) { $_allow_single_deselect_ = $context["allow_single_deselect"]; } else { $_allow_single_deselect_ = null; }
        echo (($_allow_single_deselect_) ? ("true") : ("false"));
        echo ";
\t    ";
        // line 78
        if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
        if ($_route_name_) {
            // line 79
            echo "\t    \tgenemuFormBundleChosenConfigs_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "['path_route_name']='";
            if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_name_), "html", null, true);
            echo "';
\t    ";
        }
        // line 81
        echo "\t    genemuFormBundleChosenConfigs_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "['json_transform_func']=genemuFormBundleChosenFunc_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo ";
\t    genemuFormBundleChosenConfigs_";
        // line 82
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "['typing_timeout']='";
        if (isset($context["typing_timeout"])) { $_typing_timeout_ = $context["typing_timeout"]; } else { $_typing_timeout_ = null; }
        echo twig_escape_filter($this->env, $_typing_timeout_, "html", null, true);
        echo "';
\t    genemuFormBundleChosenConfigs_";
        // line 83
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "['query_param_name']='";
        if (isset($context["query_param_name"])) { $_query_param_name_ = $context["query_param_name"]; } else { $_query_param_name_ = null; }
        echo twig_escape_filter($this->env, $_query_param_name_, "html", null, true);
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "

    ";
        // line 92
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (($_map_ === true)) {
            // line 93
            echo "        <div id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_queue\"></div>
    </div>
    <script type=\"text/javascript\">
\t    var config = ";
        // line 105
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_jsonencode_filter(twig_array_merge($_configs_, array("uploader" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "uploader")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "cancelImg")), "script" => $this->env->getExtension('routing')->getPath($this->getAttribute($_configs_, "script")), "queueID" => ($_id_ . "_queue"))));
        // line 110
        echo ";

\t\tgenemuFormBundleFileConfigs_";
        // line 112
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "=new Array(config, ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if (((!$this->getAttribute($_configs_, "auto", array(), "any", true, true)) || ($this->getAttribute($_configs_, "auto") === false))) {
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
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "image")) {
            // line 120
            echo "        <div id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 121
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if ($_value_) {
                echo " style=\"background-color: #";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
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
        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
        if ($_expanded_) {
            // line 133
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 134
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 135
                echo "            ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderWidget($_child_);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 148
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 154
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            // line 155
            echo "                    ";
            if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "width")) : (500));
            // line 156
            echo "                    ";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["widthMax"])) { $_widthMax_ = $context["widthMax"]; } else { $_widthMax_ = null; }
            $context["ratio"] = ((($_width_ > $_widthMax_)) ? (($_width_ / $_widthMax_)) : (1));
            // line 157
            echo "                    ";
            if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "file")) : ($_value_)));
            // line 158
            echo "                    ";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["ratio"])) { $_ratio_ = $context["ratio"]; } else { $_ratio_ = null; }
            $context["width"] = ($_width_ / $_ratio_);
            // line 159
            echo "                    ";
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            if (isset($context["ratio"])) { $_ratio_ = $context["ratio"]; } else { $_ratio_ = null; }
            $context["height"] = ($_height_ / $_ratio_);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_img_preview\" src=\"";
        if (isset($context["asset"])) { $_asset_ = $context["asset"]; } else { $_asset_ = null; }
        echo twig_escape_filter($this->env, $_asset_, "html", null, true);
        echo "\" width=\"";
        if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
        echo twig_escape_filter($this->env, $_width_, "html", null, true);
        echo "\" height=\"";
        if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
        echo twig_escape_filter($this->env, $_height_, "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 168
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 169
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_filters_);
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 170
            echo "                    <li class=\"";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $_filter_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        $context["id"] = ("tokeninput_" . $_id_);
        // line 186
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        $context["full_name"] = ("tokeninput_" . $_full_name_);
        // line 187
        if (isset($context["tokeninput_value"])) { $_tokeninput_value_ = $context["tokeninput_value"]; } else { $_tokeninput_value_ = null; }
        $context["value"] = $_tokeninput_value_;
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
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_);
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
        return array (  672 => 194,  667 => 193,  664 => 192,  657 => 188,  654 => 187,  651 => 186,  648 => 185,  643 => 183,  641 => 182,  638 => 181,  627 => 174,  623 => 172,  613 => 170,  608 => 169,  603 => 168,  588 => 166,  585 => 165,  582 => 164,  579 => 163,  576 => 162,  573 => 161,  570 => 160,  565 => 159,  560 => 158,  555 => 157,  550 => 156,  546 => 155,  543 => 154,  537 => 152,  531 => 150,  529 => 149,  524 => 148,  517 => 146,  515 => 145,  512 => 144,  503 => 139,  499 => 137,  489 => 135,  484 => 134,  479 => 133,  475 => 132,  473 => 131,  470 => 130,  461 => 125,  455 => 122,  445 => 121,  437 => 120,  433 => 119,  431 => 118,  428 => 117,  412 => 112,  408 => 110,  404 => 105,  397 => 102,  391 => 100,  389 => 99,  386 => 98,  376 => 93,  373 => 92,  366 => 90,  364 => 89,  361 => 88,  349 => 83,  341 => 82,  332 => 81,  322 => 79,  319 => 78,  311 => 77,  303 => 76,  297 => 74,  294 => 73,  286 => 72,  280 => 70,  275 => 66,  273 => 65,  270 => 64,  262 => 60,  258 => 59,  254 => 58,  251 => 57,  245 => 55,  243 => 54,  240 => 53,  232 => 49,  227 => 48,  225 => 47,  222 => 46,  208 => 39,  201 => 37,  197 => 35,  193 => 31,  182 => 28,  178 => 27,  176 => 26,  173 => 25,  158 => 17,  151 => 15,  149 => 14,  146 => 13,  128 => 8,  123 => 7,  118 => 5,  103 => 4,  99 => 3,  97 => 2,  94 => 1,  90 => 192,  87 => 191,  85 => 181,  82 => 180,  80 => 144,  77 => 143,  75 => 130,  72 => 129,  70 => 117,  67 => 116,  65 => 98,  62 => 97,  60 => 88,  57 => 87,  55 => 64,  52 => 63,  50 => 53,  47 => 52,  42 => 45,  40 => 25,  35 => 13,  32 => 12,  30 => 1,  268 => 135,  260 => 131,  252 => 127,  244 => 123,  236 => 119,  228 => 115,  220 => 111,  212 => 40,  204 => 38,  196 => 99,  188 => 30,  180 => 91,  172 => 87,  164 => 83,  156 => 79,  148 => 75,  139 => 68,  132 => 63,  119 => 61,  114 => 60,  101 => 49,  98 => 48,  84 => 38,  79 => 37,  73 => 35,  54 => 20,  45 => 46,  37 => 24,  29 => 4,  26 => 3,);
    }
}
