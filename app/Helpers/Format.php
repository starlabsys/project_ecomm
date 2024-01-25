<?php

namespace App\Helpers;

class Format {
    static function messages($string)
    {
        $str1 = str_replace('[["', '', $string);
        $str2 = str_replace('"]]', '', $str1);

        return $str2;
    }
}