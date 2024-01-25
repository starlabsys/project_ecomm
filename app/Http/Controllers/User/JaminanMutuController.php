<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JaminanMutuController extends Controller
{
    public function sistemDokumentasi(){
        return view('users.jaminan_mutu.sistem_dokumentasi');
    }

    public function audit(){
        return view('users.jaminan_mutu.audit');
    }

    public function tinjauanManajemen(){
        return view('users.jaminan_mutu.tinjauan_manajemen');
    }
}
