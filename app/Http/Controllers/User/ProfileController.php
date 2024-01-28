<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah(){
        //todo: background
        //todo: text
        return view('users.profile.sejarah');
    }

    public function timKami(){
        //todo: list tim untan press bersama link, fb, ig
        return view('users.profile.tim_kami');
    }
}
