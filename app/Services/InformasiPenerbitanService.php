<?php

namespace App\Services;

use App\Models\Naskah;
use App\Models\PersyaratanIsbn;

class InformasiPenerbitanService {
    static function dataJenisNaskah(){
        $data = Naskah::get();

        return $data;
    }

    static function dataPersyaratanIsbn(){
        $data = PersyaratanIsbn::first();

        return $data;
    }
}