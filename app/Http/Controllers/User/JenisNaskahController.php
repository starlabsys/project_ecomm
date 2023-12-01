<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisNaskahController extends Controller
{
    public function bukuMonograf(){
        return view('users.informasi_penerbitan.jenis_naskah.buku_monograf');
    }

    public function bukuReferensi(){
        return view('users.informasi_penerbitan.jenis_naskah.buku_referensi');
    }

    public function bukuAjarModul(){
        return view('users.informasi_penerbitan.jenis_naskah.buku_ajar_atau_modul');
    }

    public function bukuUmum(){
        return view('users.informasi_penerbitan.jenis_naskah.buku_umum');
    }

    public function prosiding(){
        return view('users.informasi_penerbitan.jenis_naskah.prosiding');
    }

    public function bukuFiksi(){
        return view('users.informasi_penerbitan.jenis_naskah.buku_fiksi');
    }
}
