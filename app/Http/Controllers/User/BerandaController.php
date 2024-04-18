<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Downloaded;
use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //

    public function index(){
        $newBook = Product::where('status', 'New')->get()->take(4);
        $bestSeller = Product::where('status', 'Best Seller')->get()->take(4);
        $discount = Product::where('status', 'Discount')->get()->take(4);

        $totalBook = Product::count();
        $totalBestSeller = Product::where('status', 'Best Seller')->count();
        return view('users.beranda.index', compact('newBook', 'bestSeller', 'discount', 'totalBook', 'totalBestSeller'));
    }

    public function segeraTerbit(){
        return view('users.segera_terbit.segera_terbit');
    }

    public function kontakKami(){
        return view('users.kontak_kami.kontak_kami');
    }

    public function download(){
        $response = $this->_data();

        return view('users.download.download', [
            'response' => $response
        ]);
    }

    private function _data(){
        $data = Downloaded::where('id', 1)->first();

        return $data;
    }
}
