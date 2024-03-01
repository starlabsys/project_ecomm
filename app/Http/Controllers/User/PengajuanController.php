<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\paketPenerbitan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function isbn(){

        $resp = Layanan::get();
//
        if ($resp->count() == 0) {
            return view('users.layanan.isbn');
        }

        $angka = $resp[0]->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');

        return view('users.layanan.isbn', [
            'isbn' => $resp[0],
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function desainCover(){
        $resp = Layanan::where('tipe', 'desaincover')->first();

        $angka = $resp->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');
        return view('users.layanan.desain_cover',[
            'desaincover' => $resp,
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function layout(){
        $resp = Layanan::where('tipe', 'layout')->first();

        $angka = $resp->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');


        return view('users.layanan.layout',[
            'layout' => $resp,
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function proofreading(){
        $resp = Layanan::where('tipe', 'proofreading')->first();

        $angka = $resp->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');

        return view('users.layanan.proofreading',[
            'proofreading' => $resp,
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function editingMekanis(){
        $resp = Layanan::where('tipe', 'editingmekanis')->first();
        $angka = $resp->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');


        return view('users.layanan.editing_mekanis',[
            'editingmekanis' => $resp,
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function editingSubtantif(){

        $resp = Layanan::where('tipe', 'editingsubstantif')->first();

        $angka = $resp->harga;
        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');

        return view('users.layanan.editing_subtantif',[
            'editingsubstantif' => $resp,
            'formatMataUang' => $formatMataUang
        ]);
    }

    public function paketPenerbitan(){

        $resp = PaketPenerbitan::get();

        return view('users.layanan.paket_penerbitan',[
            'paketpenerbitan' => $resp
        ]);
    }
}
