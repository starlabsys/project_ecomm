<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //

    public function index(){
        //todo: phone number
        //todo: about us
        //todo: total buku terbit
        //todo: total semua buku
        //todo: total semua buku
        //todo: 4 buah list buku baru
        //todo: 4 buah list buku diskon
        //todo: 4 buah list buku best seller
        //todo: kontak informasi fb, yt, ig
        return view('users.beranda.index');
    }

    public function segeraTerbit(){
        return view('users.segera_terbit.segera_terbit');
    }

    public function kontakKami(){
        return view('users.kontak_kami.kontak_kami');
    }

    public function download(){
        return view('users.download.download');
    }
}
