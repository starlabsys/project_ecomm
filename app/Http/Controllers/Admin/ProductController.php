<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function index(){
        $data = Product::get();
        return view('admin.products.index', [
            'product' => $data
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg|max:2048',
            'diskon' => 'nullable|numeric',
            'status' => 'required|in:Best Seller,Discount,New',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        $file = $request['gambar'];
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'foto_product';
        $file->move($tujuan_upload,$nama_file);


        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $nama_file,
            'diskon' => $request->diskon ?? 0,
            'status' => $request->status,
        ]);

        return back()->withSuccess("Berhasil Menambahkan Produk");
    }
}
