<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function isbn(){
        return view('users.layanan.isbn');
    }

    public function desainCover(){
        return view('users.layanan.desain_cover');
    }

    public function layout(){
        return view('users.layanan.layout');
    }

    public function proofreading(){
        return view('users.layanan.proofreading');
    }

    public function editingMekanis(){
        return view('users.layanan.editing_mekanis');
    }

    public function editingSubtantif(){
        return view('users.layanan.editing_subtantif');
    }

    public function paketPenerbitan(){
        return view('users.layanan.paket_penerbitan');
    }
}
