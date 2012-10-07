<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_cbb5fc7905e560b886031975cffcd56b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 370
        echo "
";
        // line 371
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 429
        echo "
";
        // line 430
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 439
        echo "
";
        // line 440
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
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
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($_child_);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        window.addEventListener(
            'load',
            function () {
                var \$pathBase64 = '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genemu_base64"), "html", null, true);
        echo "';
                var \$base64 = /^data:.*;base64/i;
                var \$images = document.images;
                var \$nbImages = \$images.length;

                for (i = 0; i < \$nbImages; ++i) {
                    \$src = \$images[i].src;

                    if (\$base64.test(\$src)) {
                        document.images[i].src = \$pathBase64 + '?' + \$src.slice(5);
                    }
                }
            },
            false
        );
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 39
        ob_start();
        // line 40
        echo "    <script type=\"text/javascript\" src=\"";
        if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($_server_ . "/js/recaptcha_ajax.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        if (window.addEventListener) {
            window.addEventListener('load', Recaptcha.create('";
        // line 43
        if (isset($context["public_key"])) { $_public_key_ = $context["public_key"]; } else { $_public_key_ = null; }
        echo twig_escape_filter($this->env, $_public_key_, "html", null, true);
        echo "', '";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_div', ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo "), false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', Recaptcha.create('";
        // line 45
        if (isset($context["public_key"])) { $_public_key_ = $context["public_key"]; } else { $_public_key_ = null; }
        echo twig_escape_filter($this->env, $_public_key_, "html", null, true);
        echo "', '";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_div', ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo "));
        } else if (document.getElementById) {
            window.onload = Recaptcha.create('";
        // line 47
        if (isset($context["public_key"])) { $_public_key_ = $context["public_key"]; } else { $_public_key_ = null; }
        echo twig_escape_filter($this->env, $_public_key_, "html", null, true);
        echo "', '";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_div', ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ");
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if ($this->getAttribute($_configs_, "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "script_url"))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("mode" => "exact", "elements" => $_id_));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ";";
        // line 70
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if ($this->getAttribute($_configs_, "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            \$('#";
            // line 72
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "').tinymce(\$configs);
        ";
        } else {
            // line 74
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 78
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if ($this->getAttribute($_configs_, "buttonImage", array(), "any", true, true)) {
            // line 86
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "buttonImage"))));
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (isset($context["culture"])) { $_culture_ = $context["culture"]; } else { $_culture_ = null; }
        if (($_culture_ == "en")) {
            // line 92
            echo "        ";
            $context["culture"] = "en-GB";
            // line 93
            echo "    ";
        }
        // line 94
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 98
        if (isset($context["min_year"])) { $_min_year_ = $context["min_year"]; } else { $_min_year_ = null; }
        echo twig_escape_filter($this->env, $_min_year_, "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 99
        if (isset($context["max_year"])) { $_max_year_ = $context["max_year"]; } else { $_max_year_ = null; }
        echo twig_escape_filter($this->env, $_max_year_, "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 100
        if (isset($context["culture"])) { $_culture_ = $context["culture"]; } else { $_culture_ = null; }
        echo twig_escape_filter($this->env, $_culture_, "html", null, true);
        echo "'] ,";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ");

        ";
        // line 102
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ != "single_text")) {
            // line 103
            echo "            ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["id"] = ("datepicker_" . $_id_);
            // line 104
            echo "
            var \$year = \$('#";
            // line 105
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "year"), "get", array(0 => "id"), "method"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 106
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "month"), "get", array(0 => "id"), "method"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 107
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "day"), "get", array(0 => "id"), "method"), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 115
        echo "
            \$('#";
        // line 116
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "').datepicker(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 122
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 123
        ob_start();
        // line 124
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 126
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 127
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ", {
                value: ";
        // line 128
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, (($_value_) ? ($_value_) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 134
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 140
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 141
        ob_start();
        // line 142
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 144
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
            \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 150
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ");

        ";
        // line 152
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "image")) {
            // line 153
            echo "            \$picker = \$('#";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 165
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 173
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 178
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 179
        ob_start();
        // line 180
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('#";
        // line 182
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "').parent().stars(";
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 192
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 193
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
";
        // line 197
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if (twig_test_empty($_multiple_)) {
            echo "                // get first (and only one) element from object
                for (first in \$val) break;
                \$val = \$val[first];";
        }
        // line 200
        echo "
                \$field.val(JSON.stringify(\$val));
            };

";
        // line 204
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ((!twig_test_empty($_value_))) {
            // line 205
            echo "            ";
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if (twig_test_empty($_multiple_)) {
                // line 206
                echo "                ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["prePopulate"] = (("[" . $_value_) . "]");
                // line 207
                echo "            ";
            } else {
                // line 208
                echo "                ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["prePopulate"] = $_value_;
                // line 209
                echo "            ";
            }
        }
        // line 211
        echo "            var \$configs = {
";
        // line 212
        if (array_key_exists("method", $context)) {
            echo "                // The HTTP method (eg. GET, POST) to use for the server request. default: “GET”.
                method: '";
            // line 213
            if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
            echo twig_escape_filter($this->env, $_method_, "html", null, true);
            echo "',
";
        }
        // line 215
        if (array_key_exists("queryParam", $context)) {
            echo "                // The name of the query param which you expect to contain the search term on the server-side. default: “q”.
                queryParam: '";
            // line 216
            if (isset($context["queryParam"])) { $_queryParam_ = $context["queryParam"]; } else { $_queryParam_ = null; }
            echo twig_escape_filter($this->env, $_queryParam_, "html", null, true);
            echo "',
";
        }
        // line 218
        if (array_key_exists("searchDelay", $context)) {
            echo "                // The delay, in milliseconds, between the user finishing typing and the search being performed. default: 300
                searchDelay: ";
            // line 219
            if (isset($context["searchDelay"])) { $_searchDelay_ = $context["searchDelay"]; } else { $_searchDelay_ = null; }
            echo twig_escape_filter($this->env, $_searchDelay_, "html", null, true);
            echo ",
";
        }
        // line 221
        if (array_key_exists("minChars", $context)) {
            echo "                // The minimum number of characters the user must enter before a search is performed. default: 1
                minChars: ";
            // line 222
            if (isset($context["minChars"])) { $_minChars_ = $context["minChars"]; } else { $_minChars_ = null; }
            echo twig_escape_filter($this->env, $_minChars_, "html", null, true);
            echo ",
";
        }
        // line 224
        if (array_key_exists("propertyToSearch", $context)) {
            echo "                // The javascript/json object attribute to search. default: “name”
                propertyToSearch: '";
            // line 225
            if (isset($context["propertyToSearch"])) { $_propertyToSearch_ = $context["propertyToSearch"]; } else { $_propertyToSearch_ = null; }
            echo twig_escape_filter($this->env, $_propertyToSearch_, "html", null, true);
            echo "',
";
        }
        // line 227
        if (array_key_exists("tokenValue", $context)) {
            echo "                // The value of the token input when the input is submitted.
                // Set it to id in order to get a concatenation of token IDs, or to name in order to get a concatenation of names.
                // default: id
                tokenValue: '";
            // line 230
            if (isset($context["tokenValue"])) { $_tokenValue_ = $context["tokenValue"]; } else { $_tokenValue_ = null; }
            echo twig_escape_filter($this->env, $_tokenValue_, "html", null, true);
            echo "',
";
        }
        // line 232
        if (array_key_exists("jsonContainer", $context)) {
            echo "                // The name of the json object in the response which contains the search results. This is typically used
                // when your endpoint returns other data in addition to your search results. Use null to use the top level
                // response object. default: null.
                jsonContainer: '";
            // line 235
            if (isset($context["jsonContainer"])) { $_jsonContainer_ = $context["jsonContainer"]; } else { $_jsonContainer_ = null; }
            echo twig_escape_filter($this->env, $_jsonContainer_, "html", null, true);
            echo "',
";
        }
        // line 237
        if (array_key_exists("crossDomain", $context)) {
            echo "                // Force JSONP cross-domain communication to the server instead of a normal ajax request.
                // Note: JSONP is automatically enabled if we detect the search request is a cross-domain request.
                // default: false.
                crossDomain: ";
            // line 240
            if (isset($context["crossDomain"])) { $_crossDomain_ = $context["crossDomain"]; } else { $_crossDomain_ = null; }
            echo twig_escape_filter($this->env, $_crossDomain_, "html", null, true);
            echo ",
";
        }
        // line 242
        if (array_key_exists("prePopulate", $context)) {
            echo "                // Prepopulate the tokeninput with existing data. Set to an array of JSON objects,
                // eg: [{id: 3, name: \"test\"}, {id: 5, name: \"awesome\"}] to pre-fill the input. default: null.
                prePopulate: ";
            // line 244
            if (isset($context["prePopulate"])) { $_prePopulate_ = $context["prePopulate"]; } else { $_prePopulate_ = null; }
            echo $_prePopulate_;
            echo ",
";
        }
        // line 246
        if (array_key_exists("hintText", $context)) {
            echo "                // The text to show in the dropdown label which appears when you first click in the search field.
                // default: “Type in a search term”
                hintText: '";
            // line 248
            if (isset($context["hintText"])) { $_hintText_ = $context["hintText"]; } else { $_hintText_ = null; }
            echo twig_escape_filter($this->env, $_hintText_, "html", null, true);
            echo "',
";
        }
        // line 250
        if (array_key_exists("noResultsText", $context)) {
            echo "                // The text to show in the dropdown label when no results are found which match the current query.
                // default: “No results”.
                noResultsText: '";
            // line 252
            if (isset($context["noResultsText"])) { $_noResultsText_ = $context["noResultsText"]; } else { $_noResultsText_ = null; }
            echo twig_escape_filter($this->env, $_noResultsText_, "html", null, true);
            echo "',
";
        }
        // line 254
        if (array_key_exists("searchingText", $context)) {
            echo "                // The text to show in the dropdown label when a search is currently in progress.
                // default: “Searching…”.
                searchingText: '";
            // line 256
            if (isset($context["searchingText"])) { $_searchingText_ = $context["searchingText"]; } else { $_searchingText_ = null; }
            echo twig_escape_filter($this->env, $_searchingText_, "html", null, true);
            echo "',
";
        }
        // line 258
        if (array_key_exists("deleteText", $context)) {
            echo "                // The text to show on each token which deletes the token when clicked.
                // If you wish to hide the delete link, provide an empty string here.
                // Alternatively you can provide a html string here if you would like to show an image for deleting tokens.
                // default: ×.
                deleteText: '";
            // line 262
            if (isset($context["deleteText"])) { $_deleteText_ = $context["deleteText"]; } else { $_deleteText_ = null; }
            echo twig_escape_filter($this->env, $_deleteText_, "html", null, true);
            echo "',
";
        }
        // line 264
        if (array_key_exists("animateDropdown", $context)) {
            echo "                // Set this to false to disable animation of the dropdown default: true.
                animateDropdown: ";
            // line 265
            if (isset($context["animateDropdown"])) { $_animateDropdown_ = $context["animateDropdown"]; } else { $_animateDropdown_ = null; }
            echo twig_escape_filter($this->env, $_animateDropdown_, "html", null, true);
            echo ",
";
        }
        // line 267
        if (array_key_exists("theme", $context)) {
            echo "                // Set this to a string, eg “facebook” when including theme css files to set the css class suffix.
                theme: '";
            // line 268
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $_theme_, "html", null, true);
            echo "',
";
        }
        // line 270
        if (array_key_exists("resultsFormatter", $context)) {
            echo "                // A function that returns an interpolated HTML string for each result.
                // Use this function with a templating system of your choice, such as jresig microtemplates or mustache.js.
                // Use this when you want to include images or multiline formatted results
                // default: function(item){ return “<li>” + item.propertyToSearch + “</li>” }.
                resultsFormatter: ";
            // line 274
            if (isset($context["resultsFormatter"])) { $_resultsFormatter_ = $context["resultsFormatter"]; } else { $_resultsFormatter_ = null; }
            echo twig_escape_filter($this->env, $_resultsFormatter_, "html", null, true);
            echo ",
";
        }
        // line 276
        if (array_key_exists("tokenFormatter", $context)) {
            echo "                // A function that returns an interpolated HTML string for each token.
                // Use this function with a templating system of your choice, such as jresig microtemplates or mustache.js.
                // Use this when you want to include images or multiline formatted tokens.
                // Quora’s people invite token field that returns avatar tokens is a good example of what can be done this option.
                // default: function(item){ return “<li><p>” + item.propertyToSearch + “</p></li>” }.
                tokenFormatter: ";
            // line 281
            if (isset($context["tokenFormatter"])) { $_tokenFormatter_ = $context["tokenFormatter"]; } else { $_tokenFormatter_ = null; }
            echo twig_escape_filter($this->env, $_tokenFormatter_, "html", null, true);
            echo ",
";
        }
        // line 283
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ((array_key_exists("tokenLimit", $context) || $_multiple_)) {
            echo "                // The maximum number of results allowed to be selected by the user. Use null to allow unlimited selections.
                // default: null.
                tokenLimit: ";
            // line 285
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                if (array_key_exists("tokenLimit", $context)) {
                    if (isset($context["tokenLimit"])) { $_tokenLimit_ = $context["tokenLimit"]; } else { $_tokenLimit_ = null; }
                    echo twig_escape_filter($this->env, $_tokenLimit_, "html", null, true);
                } else {
                    echo "null";
                }
            } else {
                echo "1";
            }
            echo ",
";
        }
        // line 287
        if (array_key_exists("tokenDelimiter", $context)) {
            echo "                // The separator to use when sending the results back to the server. default: “,”.
                tokenDelimiter: '";
            // line 288
            if (isset($context["tokenDelimiter"])) { $_tokenDelimiter_ = $context["tokenDelimiter"]; } else { $_tokenDelimiter_ = null; }
            echo twig_escape_filter($this->env, $_tokenDelimiter_, "html", null, true);
            echo "',
";
        }
        // line 290
        if (array_key_exists("preventDuplicates", $context)) {
            echo "                // Prevent user from selecting duplicate values by setting this to true. default: false.
                preventDuplicates: ";
            // line 291
            if (isset($context["preventDuplicates"])) { $_preventDuplicates_ = $context["preventDuplicates"]; } else { $_preventDuplicates_ = null; }
            echo twig_escape_filter($this->env, $_preventDuplicates_, "html", null, true);
            echo ",
";
        }
        // line 293
        echo "                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            };
            \$tokeninput.tokenInput(";
        // line 296
        if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
        if ($_route_name_) {
            echo "'";
            if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_name_), "html", null, true);
            echo "'";
        } else {
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            echo twig_jsonencode_filter($_choices_);
        }
        echo ", \$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 302
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 303
        ob_start();
        // line 304
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 306
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 307
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 313
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ($_multiple_) {
            // line 314
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 324
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 327
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 333
        if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
        if ($_route_name_) {
            // line 334
            echo "                \$configs.source = function(request, response) {
                    var \$data = {term: request.term};
                ";
            // line 336
            if (isset($context["ids"])) { $_ids_ = $context["ids"]; } else { $_ids_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_ids_);
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 337
                echo "                    \$data['";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "'] = \$('#";
                if (isset($context["form_name"])) { $_form_name_ = $context["form_name"]; } else { $_form_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, (($_form_name_ . "_") . $_id_), "html", null, true);
                echo "').val();
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 339
            echo "                    \$.getJSON('";
            if (isset($context["route_name"])) { $_route_name_ = $context["route_name"]; } else { $_route_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_name_), "html", null, true);
            echo "', \$data, response);
                };
            ";
        } else {
            // line 342
            echo "                \$configs.source = ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            echo twig_jsonencode_filter($_choices_);
            echo ";
            ";
        }
        // line 344
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 347
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ($_multiple_) {
            // line 348
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 356
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 361
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 362
        ob_start();
        // line 363
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
\t\t\tgenemuFormBundleChosenEnable('";
        // line 365
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 371
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 372
        ob_start();
        // line 373
        echo "    ";
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (($_map_ === true)) {
            // line 374
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("elements" => twig_array_merge($this->getAttribute($_configs_, "elements"), array("map" => (("#" . $_id_) . "_map")))));
            // line 379
            echo "    ";
        }
        // line 380
        echo "
    ";
        // line 381
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($_form_, "latitude", array(), "any", true, true)) {
            // line 382
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("elements" => twig_array_merge($this->getAttribute($_configs_, "elements"), array("lat" => ("#" . $this->getAttribute($this->getAttribute($_form_, "latitude"), "get", array(0 => "id"), "method"))))));
            // line 387
            echo "    ";
        }
        // line 388
        echo "
    ";
        // line 389
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($_form_, "longitude", array(), "any", true, true)) {
            // line 390
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("elements" => twig_array_merge($this->getAttribute($_configs_, "elements"), array("lng" => ("#" . $this->getAttribute($this->getAttribute($_form_, "longitude"), "get", array(0 => "id"), "method"))))));
            // line 395
            echo "    ";
        }
        // line 396
        echo "
    ";
        // line 397
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($_form_, "locality", array(), "any", true, true)) {
            // line 398
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("elements" => twig_array_merge($this->getAttribute($_configs_, "elements"), array("locality" => ("#" . $this->getAttribute($this->getAttribute($_form_, "locality"), "get", array(0 => "id"), "method"))))));
            // line 403
            echo "    ";
        }
        // line 404
        echo "
    ";
        // line 405
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($_form_, "country", array(), "any", true, true)) {
            // line 406
            echo "        ";
            if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["configs"] = twig_array_merge($_configs_, array("elements" => twig_array_merge($this->getAttribute($_configs_, "elements"), array("country" => ("#" . $this->getAttribute($this->getAttribute($_form_, "country"), "get", array(0 => "id"), "method"))))));
            // line 411
            echo "    ";
        }
        // line 412
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 415
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "address"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 417
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_jsonencode_filter($_configs_);
        echo ");

            ";
        // line 419
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (($_map_ === true)) {
            // line 420
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 425
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 430
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 431
        ob_start();
        // line 432
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        genemuFormBundleFileEnable('";
        // line 434
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 440
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 441
        ob_start();
        // line 442
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 444
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "');
        var \$form = \$field.closest('form');
        var \$preview = \$('#";
        // line 446
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 447
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 449
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 450
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_configs_, "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 456
        if (isset($context["configs"])) { $_configs_ = $context["configs"]; } else { $_configs_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_jsonencode_filter(twig_array_merge($_configs_, array("uploader" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "uploader")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_configs_, "cancelImg")), "script" => $this->env->getExtension('routing')->getPath($this->getAttribute($_configs_, "script")), "queueID" => ($_id_ . "_queue"), "width" => 19, "height" => 19)));
        // line 463
        echo ", {
            onComplete: function(event, queueID, fileObj, response, data) {
                var \$response = eval('(' + response + ')');

                // add if and only if path is relative
                if (\$response.thumbnail.file.search(/^[/\\\\]/) < 0) {
                    \$response.thumbnail.file = \$basePath + \$response.thumbnail.file;
                }
                \$field.val(\$response.file);
                if (\$response.result == '1') {
                    createCrop({
                        image: \$response.image,
                        thumbnail: \$response.thumbnail
                    });
                } else {
                    alert('error');
                }
            },
            onError: function() {
                //alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            \$(\$img).load(function() {
                ";
        // line 498
        if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
        $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "width")) : (500));
        // line 499
        echo "
                \$ratio = data.image.width > ";
        // line 500
        if (isset($context["widthMax"])) { $_widthMax_ = $context["widthMax"]; } else { $_widthMax_ = null; }
        echo twig_escape_filter($this->env, $_widthMax_, "html", null, true);
        echo " ? data.image.width / ";
        if (isset($context["widthMax"])) { $_widthMax_ = $context["widthMax"]; } else { $_widthMax_ = null; }
        echo twig_escape_filter($this->env, $_widthMax_, "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$crop = \$.Jcrop(\$preview, {
                    onSelect: checkCoords,
                    onChange: checkCoords
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$field.val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 551
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_jsonencode_filter($_filters_);
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genemu_form_image"), "html", null, true);
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if ('1' === data.result) {
                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 579
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            // line 580
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 582
            if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "file")) : ($_value_)), "html", null, true);
            echo "',
                width: ";
            // line 583
            if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "width")) : ($_width_)), "html", null, true);
            echo ",
                height: ";
            // line 584
            if (isset($context["thumbnail"])) { $_thumbnail_ = $context["thumbnail"]; } else { $_thumbnail_ = null; }
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($_thumbnail_, "height")) : ($_height_)), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 587
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, $_width_, "html", null, true);
            echo ",
                height: ";
            // line 588
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            echo twig_escape_filter($this->env, $_height_, "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 592
            echo "        \$options.hide();
    ";
        }
        // line 594
        echo "
        \$field.uploadify(\$configs);
    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1304 => 594,  1300 => 592,  1292 => 588,  1287 => 587,  1279 => 584,  1273 => 583,  1267 => 582,  1263 => 580,  1260 => 579,  1236 => 558,  1225 => 551,  1167 => 500,  1164 => 499,  1161 => 498,  1124 => 463,  1120 => 456,  1110 => 450,  1105 => 449,  1099 => 447,  1094 => 446,  1088 => 444,  1084 => 442,  1082 => 441,  1079 => 440,  1069 => 434,  1065 => 432,  1063 => 431,  1060 => 430,  1053 => 425,  1046 => 420,  1043 => 419,  1037 => 417,  1031 => 415,  1026 => 412,  1023 => 411,  1018 => 406,  1015 => 405,  1012 => 404,  1009 => 403,  1004 => 398,  1001 => 397,  998 => 396,  995 => 395,  990 => 390,  987 => 389,  984 => 388,  981 => 387,  976 => 382,  973 => 381,  970 => 380,  967 => 379,  962 => 374,  958 => 373,  956 => 372,  953 => 371,  943 => 365,  939 => 363,  937 => 362,  934 => 361,  927 => 356,  917 => 348,  914 => 347,  909 => 344,  902 => 342,  894 => 339,  880 => 337,  875 => 336,  871 => 334,  868 => 333,  860 => 327,  855 => 324,  843 => 314,  840 => 313,  830 => 307,  825 => 306,  821 => 304,  819 => 303,  816 => 302,  798 => 296,  793 => 293,  787 => 291,  783 => 290,  777 => 288,  773 => 287,  758 => 285,  752 => 283,  746 => 281,  738 => 276,  732 => 274,  725 => 270,  719 => 268,  715 => 267,  709 => 265,  705 => 264,  699 => 262,  692 => 258,  686 => 256,  681 => 254,  675 => 252,  670 => 250,  659 => 246,  653 => 244,  642 => 240,  636 => 237,  630 => 235,  624 => 232,  618 => 230,  612 => 227,  606 => 225,  602 => 224,  596 => 222,  592 => 221,  586 => 219,  572 => 215,  566 => 213,  562 => 212,  559 => 211,  551 => 208,  548 => 207,  544 => 206,  540 => 205,  516 => 193,  511 => 192,  507 => 190,  505 => 189,  502 => 188,  485 => 180,  483 => 179,  480 => 178,  463 => 165,  446 => 153,  443 => 152,  427 => 144,  423 => 142,  421 => 141,  418 => 140,  398 => 128,  393 => 127,  388 => 126,  384 => 124,  382 => 123,  379 => 122,  369 => 116,  354 => 107,  344 => 105,  337 => 103,  334 => 102,  325 => 100,  320 => 99,  315 => 98,  309 => 94,  306 => 93,  300 => 91,  290 => 86,  284 => 84,  281 => 83,  274 => 78,  269 => 74,  263 => 72,  257 => 70,  253 => 68,  248 => 65,  237 => 59,  233 => 56,  229 => 55,  224 => 53,  184 => 43,  174 => 39,  171 => 38,  141 => 13,  136 => 11,  130 => 9,  117 => 4,  111 => 3,  109 => 2,  106 => 1,  102 => 440,  92 => 371,  89 => 370,  74 => 187,  69 => 177,  64 => 139,  59 => 121,  49 => 52,  44 => 37,  39 => 10,  34 => 8,  672 => 194,  667 => 193,  664 => 248,  657 => 188,  654 => 187,  651 => 186,  648 => 242,  643 => 183,  641 => 182,  638 => 181,  627 => 174,  623 => 172,  613 => 170,  608 => 169,  603 => 168,  588 => 166,  585 => 165,  582 => 218,  579 => 163,  576 => 216,  573 => 161,  570 => 160,  565 => 159,  560 => 158,  555 => 209,  550 => 156,  546 => 155,  543 => 154,  537 => 204,  531 => 200,  529 => 149,  524 => 197,  517 => 146,  515 => 145,  512 => 144,  503 => 139,  499 => 137,  489 => 182,  484 => 134,  479 => 133,  475 => 132,  473 => 173,  470 => 130,  461 => 125,  455 => 122,  445 => 121,  437 => 150,  433 => 119,  431 => 118,  428 => 117,  412 => 112,  408 => 134,  404 => 105,  397 => 102,  391 => 100,  389 => 99,  386 => 98,  376 => 93,  373 => 92,  366 => 115,  364 => 89,  361 => 88,  349 => 106,  341 => 104,  332 => 81,  322 => 79,  319 => 78,  311 => 77,  303 => 92,  297 => 90,  294 => 89,  286 => 85,  280 => 70,  275 => 66,  273 => 65,  270 => 64,  262 => 60,  258 => 59,  254 => 58,  251 => 57,  245 => 64,  243 => 54,  240 => 60,  232 => 49,  227 => 54,  225 => 47,  222 => 46,  208 => 47,  201 => 37,  197 => 35,  193 => 31,  182 => 28,  178 => 27,  176 => 40,  173 => 25,  158 => 17,  151 => 15,  149 => 14,  146 => 13,  128 => 8,  123 => 7,  118 => 5,  103 => 4,  99 => 439,  97 => 430,  94 => 429,  90 => 192,  87 => 361,  85 => 181,  82 => 302,  80 => 144,  77 => 188,  75 => 130,  72 => 178,  70 => 117,  67 => 140,  65 => 98,  62 => 122,  60 => 88,  57 => 83,  55 => 64,  52 => 53,  50 => 53,  47 => 38,  42 => 11,  40 => 25,  35 => 13,  32 => 1,  30 => 1,  268 => 135,  260 => 71,  252 => 127,  244 => 123,  236 => 119,  228 => 115,  220 => 111,  212 => 40,  204 => 38,  196 => 45,  188 => 30,  180 => 91,  172 => 87,  164 => 83,  156 => 79,  148 => 18,  139 => 12,  132 => 63,  119 => 61,  114 => 60,  101 => 49,  98 => 48,  84 => 360,  79 => 301,  73 => 35,  54 => 82,  45 => 46,  37 => 9,  29 => 4,  26 => 3,);
    }
}
