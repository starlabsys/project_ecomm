<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\paketPenerbitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    //

    public function index(){
        $pengajuanisbn = Layanan::where('tipe', 'pengajuan_isbn')->first();

        $desaincover = Layanan::where('tipe', 'desaincover')->first();
        $layout = Layanan::where('tipe', 'layout')->first();
        $proofreading = Layanan::where('tipe', 'proofreading')->first();
        $editingmekanis = Layanan::where('tipe', 'editingmekanis')->first();
        $editingsubstantif = Layanan::where('tipe', 'editingsubstantif')->first();

        $paketpenerbitan = PaketPenerbitan::get();


        return view('admin.layanan.index',[
            'pengajuanisbn' => $pengajuanisbn,
            'desaincover' => $desaincover,
            'layout' => $layout,
            'proofreading' => $proofreading,
            'editingmekanis' => $editingmekanis,
            'editingsubstantif' => $editingsubstantif,
            'paketpenerbitan' => $paketpenerbitan,
        ]);
    }

    public function storePengajuanIsbn(Request $request){
        $validator = Validator::make($request->all(), [
            'konten' => 'required',
            'harga' => 'required',
            'type' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        // dd($request->all());

        $check = Layanan::where('tipe', $request->type)->first();

        if($check){
            $check->update([
                'konten' => $request->konten,
                'harga' => $request->harga
            ]);
            return back()->withSuccess('Berhasil Mengubah Konten '.$request->type);
        }

        Layanan::create([
            'konten' => $request->konten,
            'harga' => $request->harga,
            'tipe' => $request->type
        ]);

        
        return back()->withSuccess('Berhasil Menambahkan Konten '.$request->type);
    }

    public function storePaket(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_paket' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg',
            'deskripsi.*' => 'required'
        ]);

        if($validator->fails()){
            return back()->withError($validator->errors()->first());
        }

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'paket_penerbitan';
            $file->move($tujuan_upload, $nama_file);
        }

        paketPenerbitan::create([
            'nama_paket' =>$request->nama_paket,
            'harga' => $request->harga,
            'gambar' => $nama_file,
            'deskripsi' => json_encode($request->deskripsi)
        ]);

        return back()->withSuccess("Success Tambah Paket");
    }

    // public function editPaket(Request $request){

    // }

    public function deletePaket($id){
        $check = paketPenerbitan::where('id', $id)->first();

        if(!$check){
            return back()->withErrors("Data Tidak Ditemukan");
        }

        $check->delete();
        
        return back()->withErrors("Data Berhasil Dihapus");

    }
}
