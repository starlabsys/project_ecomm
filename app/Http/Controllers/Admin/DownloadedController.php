<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Downloaded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DownloadedController extends Controller
{
    //
    public function index(){
        $data = Downloaded::where('id', 1)->first();
        return view('admin.download.index', [
            'data' => $data
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'konten'=>'required',
            'template_naskah' => 'nullable|max:2048',
            'file_keaslian' => 'nullable|max:2048',
            'pedoman_penulisan_buku_ajar' => 'nullable|max:2048',
            'pedoman_penulisan_buku_referensi' => 'nullable|max:2048',
            'pedoman_penulisan_buku_monograf' => 'nullable|max:2048',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        $check = Downloaded::where('id', 1)->first();

        if(array_key_exists('template_naskah', $request->all())){
            
            $file = $request['template_naskah'];
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'template_naskah_penerbitan';
            $file->move($tujuan_upload,$nama_file);
        }

        if(array_key_exists('file_keaslian', $request->all())){
            $file = $request['file_keaslian'];
            $nama_file_keaslian = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'file_keaslian';
            $file->move($tujuan_upload,$nama_file_keaslian);
        }

        if(array_key_exists('pedoman_penulisan_buku_ajar', $request->all())){
            $file = $request['pedoman_penulisan_buku_ajar'];
            $pedoman_penulisan_buku_ajar = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'pedoman_penulisan_buku_ajar';
            $file->move($tujuan_upload,$pedoman_penulisan_buku_ajar);
        }

        if(array_key_exists('pedoman_penulisan_buku_referensi', $request->all())){
            $file = $request['pedoman_penulisan_buku_referensi'];
            $pedoman_penulisan_buku_referensi = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'pedoman_penulisan_buku_referensi';
            $file->move($tujuan_upload,$pedoman_penulisan_buku_referensi);
        }

        if(array_key_exists('pedoman_penulisan_buku_monograf', $request->all())){
            $file = $request['pedoman_penulisan_buku_monograf'];
            $pedoman_penulisan_buku_monograf = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'pedoman_penulisan_buku_monograf';
            $file->move($tujuan_upload,$pedoman_penulisan_buku_monograf);
        }

        if($check){

            $check->update([
                'konten' => $request->konten,
            ]);
            
            if(array_key_exists('template_naskah', $request->all())){
                $check->update([
                    'template_naskah' => $nama_file,
                ]);
            }

            if(array_key_exists('file_keaslian', $request->all())){
                $check->update([
                    'file_keaslian' => $nama_file_keaslian,
                ]);
            }

            if(array_key_exists('pedoman_penulisan_buku_ajar', $request->all())){

                $check->update([
                    'pedoman_penulisan_buku_ajar' => $pedoman_penulisan_buku_ajar,
                ]);

            }
            if(array_key_exists('pedoman_penulisan_buku_referensi', $request->all())){
                $check->update([
                    'pedoman_penulisan_buku_referensi' => $pedoman_penulisan_buku_referensi,
                ]);
            }
            if(array_key_exists('pedoman_penulisan_buku_monograf', $request->all())){
                $check->update([
                    'pedoman_penulisan_buku_monograf' => $pedoman_penulisan_buku_monograf,
                ]);
            }

            return back()->withSuccess("Berhasil Mengubah Informasi Persyaratan ISBN");

        }

        Downloaded::create([
            'konten' => $request->konten,
            'template_naskah' => $nama_file,
            'file_keaslian' => $nama_file_keaslian,
            'pedoman_penulisan_buku_ajar' => $pedoman_penulisan_buku_ajar,
            'pedoman_penulisan_buku_referensi' => $pedoman_penulisan_buku_referensi,
            'pedoman_penulisan_buku_monograf' => $pedoman_penulisan_buku_monograf,
        ]);

        return back()->withSuccess('Berhasil Menyimpan Data Konten');

    }
}
