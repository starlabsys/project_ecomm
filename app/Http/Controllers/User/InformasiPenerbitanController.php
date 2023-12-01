<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformasiPenerbitanController extends Controller
{
    public function jenisNaskah(){
        return view('users.informasi_penerbitan.jenis_naskah');
    }

    public function prosedurPenerbitan(){
        return view('users.informasi_penerbitan.prosedur_penerbitan');
    }

    public function persyaratanISBN(){
        return view('users.informasi_penerbitan.persyaratan_ISBN');
    }
}
