<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanIsbn;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function isbn(){

        $resp = PengajuanIsbn::get();

        if ($resp->count() == 0) {
            return view('users.empty');
        }

        return view('users.layanan.isbn');
    }

    public function desainCover(){
        //todo: text pengenalan
        //todo: syarat
        //todo: harga
        //todo: waktu pengerjaan
        //todo: text footer
        return view('users.layanan.desain_cover');
    }

    public function layout(){
        //todo: text pengenalan
        //todo: syarat
        //todo: harga
        //todo: waktu pengerjaan
        //todo: text footer
        //todo: spesifikasi teknis
        return view('users.layanan.layout');
    }

    public function proofreading(){
        //todo: text pengenalan
        //todo: syarat
        //todo: harga
        //todo: waktu pengerjaan
        //todo: spesifikasi teknis
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
