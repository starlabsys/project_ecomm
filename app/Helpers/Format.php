<?php

namespace App\Helpers;

use App\Models\Kontak;

class Format {
    static function messages($string)
    {
        $str1 = str_replace('[["', '', $string);
        $str2 = str_replace('"]]', '', $str1);

        return $str2;
    }

    public static function footerFormat()
    {
        $resp  = Kontak::get();

        return $resp;

    }
}
