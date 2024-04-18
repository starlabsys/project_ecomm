<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Naskah;
use App\Models\PersyaratanIsbn;
use Illuminate\Http\Request;

class InformasiPenerbitanController extends Controller
{
    public function jenisNaskah(){
        $resp = Naskah::get();

        return view('users.informasi_penerbitan.jenis_naskah', [
            'resp' => $resp
        ]);
    }

    public function prosedurPenerbitan(){
        return view('users.informasi_penerbitan.prosedur_penerbitan');
    }

    public function persyaratanISBN(){
        $resp = PersyaratanIsbn::get();
        if ($resp->count() == 0) {
            return view('users.empty');
        }
        return view('users.informasi_penerbitan.persyaratan_ISBN', [
            'resp' => $resp[0]
        ]);
    }
}
