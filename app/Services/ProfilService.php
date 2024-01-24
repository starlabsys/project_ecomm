<?php

namespace App\Services;

use App\Models\Sejarah;
use App\Models\Team;

class ProfilService {
    static function dataSejarah(){
        $data = Sejarah::where('id', 1)->first();

        return $data;
    }

    static function dataTeam(){
        $data = Team::all();

        return $data;
    }
}