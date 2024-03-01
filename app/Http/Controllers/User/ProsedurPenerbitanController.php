<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProsedurPenerbitan;
use Illuminate\Http\Request;

class ProsedurPenerbitanController extends Controller
{
    public function buku()
    {
        $resp =  ProsedurPenerbitan::where('type', 'Buku')->get();;
        return view('users.informasi_penerbitan.prosedur_penerbitan.buku',[
            'buku' => $resp
        ]);
    }

    public function prosiding()
    {
        $resp =  ProsedurPenerbitan::where('type', 'Prosiding')->get();;
        return view('users.informasi_penerbitan.prosedur_penerbitan.prosiding',[
            'prosiding' => $resp
        ]);
    }
}
