<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    //

    public function index(){
        $data = Kontak::get();
        return view('admin.kontak.index', [
            'kontak' => $data
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'judul_kontak' => 'required',
            'isi_kontak' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        Kontak::create([
            'judul_kontak' => $request->judul_kontak,
            'isi_kontak' => $request->isi_kontak,
        ]);

        return back()->withSuccess('Berhasil Membuat Konten Kontak');
    }

    public function delete($id){
        $check = Kontak::where('id', $id)->first();

        if(!$check){
            return back()->withErrors("Data Tidak Ditemukan");
        }

        $check->delete();

        return back()->withSuccess("Data Berhasil Dihapus");
    }
}
