<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    //

    public function index(){
        $pengajuanisbn = Layanan::where('tipe', 'pengajuan_isbn')->first();


        return view('admin.layanan.index',[
            'pengajuanisbn' => $pengajuanisbn
        ]);
    }

    public function storePengajuanIsbn(Request $request){
        $validator = Validator::make($request->all(), [
            'konten' => 'required',
            'harga' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        $check = Layanan::where('tipe', 'pengajuan_isbn')->first();

        if($check){
            $check->update([
                'konten' => $request->konten,
                'harga' => $request->harga
            ]);
            return back()->withSuccess('Berhasil Mengubah Konten Pengajuan ISBN');
        }

        Layanan::create([
            'konten' => $request->konten,
            'harga' => $request->harga,
            'tipe' => 'pengajuan_isbn'
        ]);

        
        return back()->withSuccess('Berhasil Menambahkan Konten Pengajuan ISBN');
    }
}
