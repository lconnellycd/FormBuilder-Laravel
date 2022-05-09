<?php

namespace Nomensa\FormBuilder\Helpers;

class OutputHelper {

    /**
     * Create a form output element.
     *
     * @param  string $value
     * @param  bool   $escape_html
     *
     * @return string
     */
    public static function output($value, $escape_html = true)
    {
        if ($escape_html) {
            $value = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
        }

        return $value;
    }


}
