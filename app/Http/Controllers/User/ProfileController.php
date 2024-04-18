<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use App\Models\Team;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah(){
        $resp = Sejarah::get();

        if ($resp->count() == 0) {
            return view('users.empty');
        }



        return view('users.profile.sejarah', [
            'sejarah' => $resp[0]
        ]);
    }

    public function timKami(){
        $resp = Team::get();
        return view('users.profile.tim_kami', [
            'resp' => $resp
        ]);
    }
}
