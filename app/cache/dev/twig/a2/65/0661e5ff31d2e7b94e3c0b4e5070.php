<?php

/* form_div_layout.html.twig */
class __TwigTemplate_a2650661e5ff31d2e7b94e3c0b4e5070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'widget_choice_options' => array($this, 'block_widget_choice_options'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rest' => array($this, 'block_field_rest'),
            'field_rows' => array($this, 'block_field_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('widget_choice_options', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('date_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('time_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('number_widget', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('money_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('field_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('password_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('email_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('generic_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('field_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('form_label', $context, $blocks);
        // line 217
        echo "
";
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('field_row', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 239
        echo "
";
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('field_errors', $context, $blocks);
        // line 259
        echo "
";
        // line 260
        $this->displayBlock('field_rest', $context, $blocks);
        // line 269
        echo "
";
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('field_rows', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 287
        echo "
";
        // line 288
        $this->displayBlock('widget_container_attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 15
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->env->getExtension('form')->renderRow($this->getContext($context, "prototype"))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_widget_choice_options($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["choice"] => $context["label"]) {
            // line 30
            echo "        ";
            if ($this->env->getExtension('form')->isChoiceGroup($this->getContext($context, "label"))) {
                // line 31
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "choice")), "html", null, true);
                echo "\">
                ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label"));
                foreach ($context['_seq'] as $context["nestedChoice"] => $context["nestedLabel"]) {
                    // line 33
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nestedChoice"), "html", null, true);
                    echo "\"";
                    if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, "form"), $this->getContext($context, "nestedChoice"))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "nestedLabel")), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "            </optgroup>
        ";
            } else {
                // line 37
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "choice"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, "form"), $this->getContext($context, "choice"))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
                echo "</option>
        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 46
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 48
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"));
                echo "
            ";
                // line 49
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "        </div>
    ";
        } else {
            // line 53
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 54
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 55
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 57
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 58
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 59
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 60
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 61
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 63
                echo "        ";
            }
            // line 64
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 65
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 78
        ob_start();
        // line 79
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 86
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 89
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 90
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
            ";
            // line 91
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 92
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 98
    public function block_date_widget($context, array $blocks = array())
    {
        // line 99
        ob_start();
        // line 100
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 101
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 103
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 104
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"))));
            // line 108
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        // line 115
        ob_start();
        // line 116
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 117
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 119
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 120
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "hour"), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "minute"), array("attr" => array("size" => "1")));
            if ($this->getContext($context, "with_seconds")) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "second"), array("attr" => array("size" => "1")));
            }
            // line 121
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 126
    public function block_number_widget($context, array $blocks = array())
    {
        // line 127
        ob_start();
        // line 128
        echo "    ";
        // line 129
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 130
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 134
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 135
        ob_start();
        // line 136
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "number")) : ("number"));
        // line 137
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 141
    public function block_money_widget($context, array $blocks = array())
    {
        // line 142
        ob_start();
        // line 143
        echo "    ";
        echo strtr($this->getContext($context, "money_pattern"), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 147
    public function block_url_widget($context, array $blocks = array())
    {
        // line 148
        ob_start();
        // line 149
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "url")) : ("url"));
        // line 150
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "search")) : ("search"));
        // line 157
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 161
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 162
        ob_start();
        // line 163
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 164
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 168
    public function block_field_widget($context, array $blocks = array())
    {
        // line 169
        ob_start();
        // line 170
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 171
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 175
    public function block_password_widget($context, array $blocks = array())
    {
        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "password")) : ("password"));
        // line 178
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 182
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 183
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "hidden")) : ("hidden"));
        // line 184
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
    }

    // line 187
    public function block_email_widget($context, array $blocks = array())
    {
        // line 188
        ob_start();
        // line 189
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "email")) : ("email"));
        // line 190
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 196
    public function block_generic_label($context, array $blocks = array())
    {
        // line 197
        ob_start();
        // line 198
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 199
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 200
            echo "    ";
        }
        // line 201
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_field_label($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    ";
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("for" => $this->getContext($context, "id")));
        // line 208
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 212
    public function block_form_label($context, array $blocks = array())
    {
        // line 213
        ob_start();
        // line 214
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 220
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 221
        ob_start();
        // line 222
        echo "    ";
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 226
    public function block_field_row($context, array $blocks = array())
    {
        // line 227
        ob_start();
        // line 228
        echo "    <div>
        ";
        // line 229
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        ";
        // line 230
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 231
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 236
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 237
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
";
    }

    // line 242
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 243
        ob_start();
        // line 244
        echo "    ";
        if ($this->getContext($context, "multipart")) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 248
    public function block_field_errors($context, array $blocks = array())
    {
        // line 249
        ob_start();
        // line 250
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 251
            echo "    <ul>
        ";
            // line 252
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 253
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 255
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 260
    public function block_field_rest($context, array $blocks = array())
    {
        // line 261
        ob_start();
        // line 262
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 263
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, "child"), "rendered"))) {
                // line 264
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
                echo "
        ";
            }
            // line 266
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 272
    public function block_field_rows($context, array $blocks = array())
    {
        // line 273
        ob_start();
        // line 274
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    ";
        // line 275
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 276
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 281
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 282
        ob_start();
        // line 283
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "full_name"), "html", null, true);
        echo "\"";
        if ($this->getContext($context, "read_only")) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, "required")) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, "max_length")) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "max_length"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "pattern")) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "pattern"), "html", null, true);
            echo "\"";
        }
        // line 284
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 288
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 289
        ob_start();
        // line 290
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
    ";
        // line 291
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  952 => 283,  950 => 282,  947 => 281,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  898 => 262,  896 => 261,  893 => 260,  877 => 253,  873 => 252,  865 => 249,  862 => 248,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  725 => 188,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  658 => 163,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  624 => 148,  613 => 143,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  559 => 120,  554 => 119,  545 => 116,  543 => 115,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  498 => 91,  479 => 86,  476 => 85,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  397 => 58,  394 => 57,  386 => 54,  378 => 53,  374 => 51,  361 => 48,  357 => 47,  349 => 45,  344 => 43,  319 => 35,  300 => 32,  295 => 31,  259 => 17,  233 => 6,  306 => 130,  304 => 33,  296 => 126,  286 => 123,  238 => 99,  236 => 98,  222 => 90,  203 => 269,  201 => 260,  183 => 236,  157 => 204,  258 => 110,  235 => 107,  228 => 5,  143 => 49,  150 => 43,  83 => 26,  328 => 179,  323 => 37,  314 => 133,  307 => 172,  303 => 171,  292 => 30,  285 => 28,  280 => 156,  247 => 140,  206 => 271,  187 => 107,  105 => 37,  198 => 259,  163 => 83,  230 => 133,  216 => 287,  130 => 48,  112 => 141,  173 => 220,  168 => 71,  353 => 145,  339 => 140,  333 => 137,  329 => 136,  325 => 135,  317 => 130,  309 => 128,  302 => 124,  294 => 122,  283 => 117,  272 => 23,  264 => 151,  257 => 106,  249 => 141,  244 => 139,  231 => 95,  219 => 288,  208 => 121,  202 => 109,  170 => 219,  155 => 196,  147 => 187,  110 => 39,  197 => 94,  167 => 217,  160 => 205,  119 => 153,  100 => 27,  114 => 146,  66 => 21,  95 => 30,  71 => 37,  211 => 280,  200 => 87,  195 => 112,  193 => 247,  179 => 72,  177 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 83,  126 => 39,  53 => 13,  133 => 49,  124 => 160,  129 => 167,  104 => 133,  73 => 23,  43 => 8,  121 => 49,  115 => 34,  107 => 134,  96 => 34,  91 => 27,  41 => 12,  205 => 82,  192 => 78,  189 => 73,  185 => 239,  178 => 226,  176 => 70,  171 => 67,  165 => 212,  152 => 195,  145 => 49,  132 => 168,  127 => 161,  93 => 28,  78 => 36,  38 => 12,  266 => 125,  260 => 150,  246 => 114,  239 => 136,  225 => 94,  213 => 85,  196 => 248,  159 => 91,  151 => 53,  144 => 186,  141 => 54,  136 => 74,  125 => 41,  122 => 154,  120 => 37,  98 => 31,  81 => 29,  68 => 22,  51 => 18,  1179 => 594,  1175 => 592,  1168 => 588,  1164 => 587,  1158 => 584,  1154 => 583,  1150 => 582,  1146 => 580,  1144 => 579,  1120 => 558,  1110 => 551,  1054 => 500,  1051 => 499,  1049 => 498,  1012 => 463,  1010 => 456,  1001 => 450,  997 => 449,  992 => 447,  988 => 446,  983 => 444,  979 => 442,  977 => 441,  974 => 284,  965 => 434,  961 => 432,  959 => 431,  956 => 430,  949 => 425,  942 => 420,  940 => 419,  935 => 276,  930 => 415,  925 => 412,  922 => 411,  919 => 406,  917 => 405,  914 => 404,  911 => 403,  908 => 398,  906 => 264,  903 => 263,  900 => 395,  897 => 390,  895 => 389,  892 => 388,  889 => 387,  886 => 255,  884 => 381,  881 => 380,  878 => 379,  875 => 374,  872 => 373,  870 => 251,  867 => 250,  858 => 365,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  832 => 348,  830 => 347,  825 => 344,  819 => 342,  812 => 339,  801 => 337,  797 => 336,  793 => 334,  791 => 333,  783 => 327,  778 => 207,  766 => 314,  764 => 313,  755 => 307,  751 => 306,  747 => 304,  745 => 303,  742 => 302,  727 => 189,  722 => 187,  717 => 291,  713 => 290,  708 => 288,  704 => 287,  691 => 285,  686 => 283,  681 => 281,  673 => 276,  668 => 274,  661 => 164,  656 => 162,  652 => 267,  647 => 265,  643 => 264,  638 => 262,  631 => 258,  626 => 149,  621 => 147,  616 => 252,  611 => 142,  606 => 248,  601 => 246,  596 => 244,  591 => 242,  586 => 240,  580 => 237,  575 => 235,  569 => 232,  564 => 230,  558 => 227,  553 => 225,  549 => 224,  544 => 222,  540 => 114,  526 => 216,  522 => 215,  513 => 212,  510 => 211,  506 => 209,  503 => 208,  500 => 207,  497 => 206,  494 => 90,  492 => 204,  486 => 200,  473 => 193,  469 => 192,  465 => 190,  463 => 189,  449 => 182,  445 => 180,  443 => 179,  440 => 178,  433 => 173,  407 => 61,  405 => 60,  400 => 59,  391 => 144,  387 => 142,  382 => 140,  373 => 134,  364 => 128,  356 => 126,  352 => 46,  350 => 123,  347 => 44,  338 => 116,  335 => 39,  320 => 106,  316 => 105,  313 => 129,  310 => 132,  308 => 102,  301 => 128,  297 => 99,  293 => 98,  287 => 29,  284 => 93,  281 => 92,  279 => 116,  273 => 89,  270 => 22,  267 => 21,  265 => 84,  255 => 109,  250 => 14,  245 => 12,  242 => 71,  229 => 94,  223 => 3,  220 => 104,  217 => 87,  215 => 90,  212 => 53,  199 => 47,  190 => 103,  181 => 99,  174 => 95,  172 => 91,  139 => 181,  134 => 174,  116 => 33,  111 => 33,  109 => 140,  106 => 35,  89 => 97,  84 => 82,  79 => 76,  74 => 70,  64 => 26,  59 => 20,  49 => 2,  593 => 194,  588 => 193,  585 => 192,  578 => 188,  576 => 187,  574 => 126,  572 => 185,  567 => 121,  565 => 182,  562 => 181,  552 => 174,  548 => 117,  539 => 170,  535 => 219,  531 => 218,  520 => 166,  517 => 213,  514 => 99,  511 => 98,  508 => 162,  505 => 161,  502 => 92,  499 => 159,  496 => 158,  493 => 157,  490 => 89,  487 => 155,  485 => 88,  480 => 197,  474 => 84,  472 => 149,  468 => 148,  462 => 146,  460 => 188,  457 => 144,  448 => 139,  444 => 137,  435 => 135,  431 => 134,  426 => 133,  423 => 165,  421 => 131,  418 => 130,  409 => 125,  403 => 122,  395 => 121,  388 => 55,  385 => 141,  383 => 118,  380 => 117,  366 => 49,  362 => 110,  360 => 127,  354 => 102,  348 => 100,  346 => 99,  343 => 141,  334 => 93,  332 => 137,  326 => 90,  324 => 107,  321 => 134,  311 => 83,  305 => 82,  298 => 127,  290 => 161,  288 => 124,  282 => 27,  276 => 117,  271 => 114,  268 => 111,  262 => 111,  256 => 16,  253 => 15,  251 => 65,  248 => 13,  240 => 70,  237 => 7,  234 => 98,  232 => 106,  226 => 4,  224 => 91,  221 => 99,  214 => 281,  209 => 272,  207 => 83,  204 => 96,  194 => 76,  191 => 242,  188 => 241,  186 => 37,  182 => 98,  180 => 235,  175 => 225,  169 => 85,  166 => 95,  164 => 59,  161 => 58,  148 => 77,  142 => 182,  140 => 52,  137 => 175,  118 => 36,  113 => 40,  102 => 126,  99 => 125,  97 => 114,  90 => 31,  87 => 83,  85 => 28,  82 => 77,  80 => 26,  77 => 71,  72 => 43,  67 => 27,  62 => 21,  60 => 14,  57 => 12,  55 => 14,  52 => 3,  47 => 12,  45 => 9,  42 => 8,  27 => 3,  18 => 1,  32 => 5,  48 => 10,  39 => 7,  34 => 5,  46 => 11,  24 => 3,  20 => 2,  36 => 7,  25 => 5,  21 => 3,  33 => 7,  28 => 3,  22 => 3,  19 => 1,  17 => 1,  76 => 24,  70 => 18,  61 => 6,  54 => 11,  50 => 13,  31 => 4,  154 => 54,  149 => 193,  146 => 79,  138 => 79,  135 => 41,  131 => 63,  128 => 43,  123 => 38,  117 => 147,  108 => 38,  103 => 28,  101 => 44,  94 => 113,  92 => 98,  88 => 32,  86 => 30,  75 => 18,  69 => 42,  65 => 16,  63 => 17,  58 => 26,  56 => 14,  44 => 10,  40 => 8,  37 => 2,  35 => 7,  30 => 7,  23 => 3,  29 => 4,  26 => 3,);
    }
}
