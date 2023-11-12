<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //

    public function index(){
        return view('users.beranda.index');
    }

    public function sejarah(){
        return view('users.profile.sejarah');
    }

    public function timKami(){
        return view('users.profile.tim_kami');
    }
}
