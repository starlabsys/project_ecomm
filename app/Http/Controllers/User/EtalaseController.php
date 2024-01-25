<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtalaseController extends Controller
{
    public function bestSeller(){
        return view('users.etalase.best_seller');
    }

    public function sedangDiskon(){
        return view('users.etalase.sedang_diskon');
    }

    public function bukuBaru(){
        return view('users.etalase.buku_baru');
    }
}
