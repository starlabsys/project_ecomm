<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah(){
        return view('users.profile.sejarah');
    }

    public function timKami(){
        return view('users.profile.tim_kami');
    }
}
