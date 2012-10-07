<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_f3bbb4737d6fbf4c7613bed44b5b06fd extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($this->getContext($context, "child"));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "server") . "/js/recaptcha_ajax.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        if (window.addEventListener) {
            window.addEventListener('load', Recaptcha.create('";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "public_key"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo "), false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', Recaptcha.create('";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "public_key"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo "));
        } else if (document.getElementById) {
            window.onload = Recaptcha.create('";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "public_key"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
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
        if ($this->getAttribute($this->getContext($context, "configs", true), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "script_url"))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("mode" => "exact", "elements" => $this->getContext($context, "id")));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo ";";
        // line 70
        if ($this->getAttribute($this->getContext($context, "configs", true), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            \$('#";
            // line 72
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        if ($this->getAttribute($this->getContext($context, "configs", true), "buttonImage", array(), "any", true, true)) {
            // line 86
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "buttonImage"))));
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (($this->getContext($context, "culture") == "en")) {
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
        echo twig_escape_filter($this->env, $this->getContext($context, "min_year"), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 99
        echo twig_escape_filter($this->env, $this->getContext($context, "max_year"), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 100
        echo twig_escape_filter($this->env, $this->getContext($context, "culture"), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo ");

        ";
        // line 102
        if (($this->getContext($context, "widget") != "single_text")) {
            // line 103
            echo "            ";
            $context["id"] = ("datepicker_" . $this->getContext($context, "id"));
            // line 104
            echo "
            var \$year = \$('#";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "year"), "get", array(0 => "id"), "method"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "month"), "get", array(0 => "id"), "method"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "day"), "get", array(0 => "id"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 127
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo ", {
                value: ";
        // line 128
        echo twig_escape_filter($this->env, (($this->getContext($context, "value")) ? ($this->getContext($context, "value")) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 134
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
            \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 150
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo ");

        ";
        // line 152
        if (($this->getContext($context, "widget") == "image")) {
            // line 153
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "').parent().stars(";
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 193
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
";
        // line 197
        if (twig_test_empty($this->getContext($context, "multiple"))) {
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
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            // line 205
            echo "            ";
            if (twig_test_empty($this->getContext($context, "multiple"))) {
                // line 206
                echo "                ";
                $context["prePopulate"] = (("[" . $this->getContext($context, "value")) . "]");
                // line 207
                echo "            ";
            } else {
                // line 208
                echo "                ";
                $context["prePopulate"] = $this->getContext($context, "value");
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
            echo twig_escape_filter($this->env, $this->getContext($context, "method"), "html", null, true);
            echo "',
";
        }
        // line 215
        if (array_key_exists("queryParam", $context)) {
            echo "                // The name of the query param which you expect to contain the search term on the server-side. default: “q”.
                queryParam: '";
            // line 216
            echo twig_escape_filter($this->env, $this->getContext($context, "queryParam"), "html", null, true);
            echo "',
";
        }
        // line 218
        if (array_key_exists("searchDelay", $context)) {
            echo "                // The delay, in milliseconds, between the user finishing typing and the search being performed. default: 300
                searchDelay: ";
            // line 219
            echo twig_escape_filter($this->env, $this->getContext($context, "searchDelay"), "html", null, true);
            echo ",
";
        }
        // line 221
        if (array_key_exists("minChars", $context)) {
            echo "                // The minimum number of characters the user must enter before a search is performed. default: 1
                minChars: ";
            // line 222
            echo twig_escape_filter($this->env, $this->getContext($context, "minChars"), "html", null, true);
            echo ",
";
        }
        // line 224
        if (array_key_exists("propertyToSearch", $context)) {
            echo "                // The javascript/json object attribute to search. default: “name”
                propertyToSearch: '";
            // line 225
            echo twig_escape_filter($this->env, $this->getContext($context, "propertyToSearch"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "tokenValue"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "jsonContainer"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "crossDomain"), "html", null, true);
            echo ",
";
        }
        // line 242
        if (array_key_exists("prePopulate", $context)) {
            echo "                // Prepopulate the tokeninput with existing data. Set to an array of JSON objects,
                // eg: [{id: 3, name: \"test\"}, {id: 5, name: \"awesome\"}] to pre-fill the input. default: null.
                prePopulate: ";
            // line 244
            echo $this->getContext($context, "prePopulate");
            echo ",
";
        }
        // line 246
        if (array_key_exists("hintText", $context)) {
            echo "                // The text to show in the dropdown label which appears when you first click in the search field.
                // default: “Type in a search term”
                hintText: '";
            // line 248
            echo twig_escape_filter($this->env, $this->getContext($context, "hintText"), "html", null, true);
            echo "',
";
        }
        // line 250
        if (array_key_exists("noResultsText", $context)) {
            echo "                // The text to show in the dropdown label when no results are found which match the current query.
                // default: “No results”.
                noResultsText: '";
            // line 252
            echo twig_escape_filter($this->env, $this->getContext($context, "noResultsText"), "html", null, true);
            echo "',
";
        }
        // line 254
        if (array_key_exists("searchingText", $context)) {
            echo "                // The text to show in the dropdown label when a search is currently in progress.
                // default: “Searching…”.
                searchingText: '";
            // line 256
            echo twig_escape_filter($this->env, $this->getContext($context, "searchingText"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "deleteText"), "html", null, true);
            echo "',
";
        }
        // line 264
        if (array_key_exists("animateDropdown", $context)) {
            echo "                // Set this to false to disable animation of the dropdown default: true.
                animateDropdown: ";
            // line 265
            echo twig_escape_filter($this->env, $this->getContext($context, "animateDropdown"), "html", null, true);
            echo ",
";
        }
        // line 267
        if (array_key_exists("theme", $context)) {
            echo "                // Set this to a string, eg “facebook” when including theme css files to set the css class suffix.
                theme: '";
            // line 268
            echo twig_escape_filter($this->env, $this->getContext($context, "theme"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "resultsFormatter"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "tokenFormatter"), "html", null, true);
            echo ",
";
        }
        // line 283
        if ((array_key_exists("tokenLimit", $context) || $this->getContext($context, "multiple"))) {
            echo "                // The maximum number of results allowed to be selected by the user. Use null to allow unlimited selections.
                // default: null.
                tokenLimit: ";
            // line 285
            if ($this->getContext($context, "multiple")) {
                if (array_key_exists("tokenLimit", $context)) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "tokenLimit"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "tokenDelimiter"), "html", null, true);
            echo "',
";
        }
        // line 290
        if (array_key_exists("preventDuplicates", $context)) {
            echo "                // Prevent user from selecting duplicate values by setting this to true. default: false.
                preventDuplicates: ";
            // line 291
            echo twig_escape_filter($this->env, $this->getContext($context, "preventDuplicates"), "html", null, true);
            echo ",
";
        }
        // line 293
        echo "                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            };
            \$tokeninput.tokenInput(";
        // line 296
        if ($this->getContext($context, "route_name")) {
            echo "'";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route_name")), "html", null, true);
            echo "'";
        } else {
            echo twig_jsonencode_filter($this->getContext($context, "choices"));
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 307
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 313
        if ($this->getContext($context, "multiple")) {
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
        if ($this->getContext($context, "route_name")) {
            // line 334
            echo "                \$configs.source = function(request, response) {
                    var \$data = {term: request.term};
                ";
            // line 336
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ids"));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 337
                echo "                    \$data['";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "'] = \$('#";
                echo twig_escape_filter($this->env, (($this->getContext($context, "form_name") . "_") . $this->getContext($context, "id")), "html", null, true);
                echo "').val();
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 339
            echo "                    \$.getJSON('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route_name")), "html", null, true);
            echo "', \$data, response);
                };
            ";
        } else {
            // line 342
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter($this->getContext($context, "choices"));
            echo ";
            ";
        }
        // line 344
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 347
        if ($this->getContext($context, "multiple")) {
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        if (($this->getContext($context, "map") === true)) {
            // line 374
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("elements" => twig_array_merge($this->getAttribute($this->getContext($context, "configs"), "elements"), array("map" => (("#" . $this->getContext($context, "id")) . "_map")))));
            // line 379
            echo "    ";
        }
        // line 380
        echo "
    ";
        // line 381
        if ($this->getAttribute($this->getContext($context, "form", true), "latitude", array(), "any", true, true)) {
            // line 382
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("elements" => twig_array_merge($this->getAttribute($this->getContext($context, "configs"), "elements"), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "latitude"), "get", array(0 => "id"), "method"))))));
            // line 387
            echo "    ";
        }
        // line 388
        echo "
    ";
        // line 389
        if ($this->getAttribute($this->getContext($context, "form", true), "longitude", array(), "any", true, true)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("elements" => twig_array_merge($this->getAttribute($this->getContext($context, "configs"), "elements"), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "longitude"), "get", array(0 => "id"), "method"))))));
            // line 395
            echo "    ";
        }
        // line 396
        echo "
    ";
        // line 397
        if ($this->getAttribute($this->getContext($context, "form", true), "locality", array(), "any", true, true)) {
            // line 398
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("elements" => twig_array_merge($this->getAttribute($this->getContext($context, "configs"), "elements"), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "locality"), "get", array(0 => "id"), "method"))))));
            // line 403
            echo "    ";
        }
        // line 404
        echo "
    ";
        // line 405
        if ($this->getAttribute($this->getContext($context, "form", true), "country", array(), "any", true, true)) {
            // line 406
            echo "        ";
            $context["configs"] = twig_array_merge($this->getContext($context, "configs"), array("elements" => twig_array_merge($this->getAttribute($this->getContext($context, "configs"), "elements"), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "country"), "get", array(0 => "id"), "method"))))));
            // line 411
            echo "    ";
        }
        // line 412
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 415
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "address"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 417
        echo twig_jsonencode_filter($this->getContext($context, "configs"));
        echo ");

            ";
        // line 419
        if (($this->getContext($context, "map") === true)) {
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "');
        var \$form = \$field.closest('form');
        var \$preview = \$('#";
        // line 446
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 447
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "configs"), "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 456
        echo twig_jsonencode_filter(twig_array_merge($this->getContext($context, "configs"), array("uploader" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "uploader")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "configs"), "cancelImg")), "script" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "configs"), "script")), "queueID" => ($this->getContext($context, "id") . "_queue"), "width" => 19, "height" => 19)));
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
        $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "width")) : (500));
        // line 499
        echo "
                \$ratio = data.image.width > ";
        // line 500
        echo twig_escape_filter($this->env, $this->getContext($context, "widthMax"), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, $this->getContext($context, "widthMax"), "html", null, true);
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
        echo twig_jsonencode_filter($this->getContext($context, "filters"));
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
        if ($this->getContext($context, "value")) {
            // line 580
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 582
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "file")) : ($this->getContext($context, "value"))), "html", null, true);
            echo "',
                width: ";
            // line 583
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "width")) : ($this->getContext($context, "width"))), "html", null, true);
            echo ",
                height: ";
            // line 584
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute($this->getContext($context, "thumbnail"), "height")) : ($this->getContext($context, "height"))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 587
            echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
            echo ",
                height: ";
            // line 588
            echo twig_escape_filter($this->env, $this->getContext($context, "height"), "html", null, true);
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
        return array (  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  858 => 365,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  616 => 252,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  350 => 123,  338 => 116,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  308 => 102,  301 => 100,  297 => 99,  293 => 98,  284 => 93,  281 => 92,  279 => 91,  273 => 89,  265 => 84,  255 => 78,  242 => 71,  229 => 64,  220 => 56,  217 => 55,  215 => 54,  212 => 53,  199 => 47,  190 => 45,  181 => 43,  174 => 40,  172 => 39,  146 => 18,  128 => 9,  116 => 4,  111 => 3,  106 => 1,  44 => 37,  39 => 10,  34 => 8,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  572 => 185,  565 => 182,  562 => 181,  552 => 174,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  508 => 162,  505 => 161,  499 => 159,  496 => 158,  493 => 157,  487 => 155,  480 => 197,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  385 => 141,  383 => 118,  380 => 117,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 98,  334 => 93,  332 => 92,  326 => 90,  324 => 107,  321 => 88,  311 => 83,  305 => 82,  298 => 81,  290 => 79,  288 => 78,  276 => 90,  271 => 74,  268 => 73,  262 => 83,  251 => 65,  240 => 70,  234 => 58,  232 => 65,  224 => 54,  221 => 53,  207 => 47,  204 => 46,  194 => 40,  186 => 37,  182 => 35,  169 => 38,  166 => 27,  164 => 26,  161 => 25,  148 => 17,  140 => 14,  123 => 8,  118 => 7,  113 => 5,  90 => 192,  85 => 181,  80 => 144,  75 => 130,  70 => 117,  65 => 98,  60 => 88,  55 => 64,  50 => 53,  47 => 38,  45 => 46,  42 => 11,  40 => 25,  37 => 9,  35 => 13,  32 => 1,  30 => 1,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 440,  952 => 283,  950 => 282,  947 => 281,  935 => 417,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 397,  903 => 396,  898 => 262,  896 => 261,  893 => 260,  886 => 382,  877 => 253,  873 => 252,  870 => 372,  867 => 371,  865 => 249,  862 => 248,  854 => 363,  852 => 362,  849 => 361,  842 => 356,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 324,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 296,  725 => 188,  722 => 293,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 270,  658 => 163,  656 => 268,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 256,  624 => 148,  621 => 254,  613 => 143,  611 => 250,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 186,  567 => 183,  559 => 120,  554 => 119,  548 => 172,  545 => 116,  543 => 115,  540 => 221,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 164,  511 => 163,  502 => 160,  498 => 91,  494 => 205,  490 => 156,  485 => 154,  479 => 86,  476 => 85,  474 => 150,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 153,  405 => 152,  400 => 150,  397 => 58,  394 => 57,  388 => 120,  386 => 54,  378 => 53,  374 => 51,  366 => 112,  361 => 48,  357 => 47,  352 => 124,  349 => 45,  347 => 122,  344 => 43,  335 => 115,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  287 => 94,  285 => 28,  282 => 77,  272 => 23,  270 => 86,  267 => 85,  259 => 17,  256 => 70,  253 => 66,  250 => 74,  248 => 64,  245 => 72,  237 => 68,  233 => 6,  228 => 5,  226 => 60,  223 => 59,  219 => 288,  216 => 287,  214 => 49,  211 => 280,  209 => 48,  206 => 271,  203 => 269,  201 => 260,  198 => 259,  196 => 248,  193 => 247,  191 => 39,  188 => 38,  185 => 239,  183 => 236,  180 => 31,  178 => 226,  175 => 30,  173 => 220,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 193,  147 => 187,  144 => 186,  142 => 15,  139 => 13,  137 => 12,  134 => 11,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 154,  119 => 153,  117 => 147,  114 => 146,  112 => 141,  109 => 2,  107 => 134,  104 => 133,  102 => 440,  99 => 439,  97 => 430,  94 => 429,  92 => 371,  89 => 370,  87 => 361,  84 => 360,  82 => 302,  79 => 301,  77 => 188,  74 => 187,  72 => 178,  69 => 177,  67 => 140,  64 => 139,  62 => 122,  59 => 121,  57 => 83,  54 => 82,  52 => 53,  49 => 52,  33 => 6,  28 => 4,  22 => 3,  19 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}
