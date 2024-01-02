<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProsedurPenerbitanController extends Controller
{
    public function buku()
    {
        return view('users.informasi_penerbitan.prosedur_penerbitan.buku');
    }

    public function prosiding()
    {
        return view('users.informasi_penerbitan.prosedur_penerbitan.prosiding');
    }
}
