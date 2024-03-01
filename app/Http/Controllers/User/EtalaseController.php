<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class EtalaseController extends Controller
{
    public function bestSeller(){
        $data = Product::where('status', 'Best Seller')->get();
        $dataDiskon = Product::where('status', 'Discount')->get();
        $dataNew = Product::where('status', 'new')->get();

        $total = $data->count();
        $totalDiskon = $dataDiskon->count();
        $totalNew = $dataNew->count();
        return view('users.etalase.best_seller',[
            'bestSeller' => $data,
            'total' => $total,
            'totalDiskon' => $totalDiskon,
            'totalNew' => $totalNew,
        ]);
    }

    public function sedangDiskon(){
        $dataBaseSeller = Product::where('status', 'Best Seller')->get();
        $data = Product::where('status', 'Discount')->get();
        $dataNew = Product::where('status', 'new')->get();
        $total = $data->count();
        $totalDiskon = $dataBaseSeller->count();
        $totalNew = $dataNew->count();
        return view('users.etalase.sedang_diskon',[
            'diskon' => $data,
            'total' => $totalDiskon,
            'totalDiskon' => $total,
            'totalNew' => $totalNew,
        ]);
    }

    public function bukuBaru(){
        $dataBaseSeller = Product::where('status', 'Best Seller')->get();
        $dataDiskon = Product::where('status', 'Discount')->get();
        $data = Product::where('status', 'new')->get();
        $total = $data->count();
        $totalBaseSeller = $dataBaseSeller->count();
        $totalDiskon = $dataDiskon->count();
        return view('users.etalase.buku_baru',[
            'bukuBaru' => $data,
            'total' => $totalBaseSeller,
            'totalDiskon' => $totalDiskon,
            'totalNew' => $total,
        ]);
    }
}
