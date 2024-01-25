<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Naskah;
use App\Models\PersyaratanIsbn;
use App\Services\InformasiPenerbitanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InformasiPenerbitanController extends Controller
{
    //

    protected $informasiPenerbitanService;

    public function __construct(InformasiPenerbitanService $informasiPenerbitanService)
    {
        $this->informasiPenerbitanService = $informasiPenerbitanService;
    }

    public function index(){

        $jenisNaskah = $this->informasiPenerbitanService->dataJenisNaskah();
        $persyaratanIsbn = $this->informasiPenerbitanService->dataPersyaratanIsbn();

        return view('admin.informasi_penerbitan.index',[
            'jenisNaskah' => $jenisNaskah,
            'persyaratanIsbn' => $persyaratanIsbn
        ]);
    }

    public function storeNaskah(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_naskah' => 'required',
            'konten_naskah' => 'required',
            'foto_naskah' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        $file = $request['foto_naskah'];
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'foto_naskah';
        $file->move($tujuan_upload,$nama_file);

        Naskah::create([
            'nama_naskah' => $request->nama_naskah,
            'konten_naskah' => $request->konten_naskah,
            'foto_naskah' => $nama_file,
        ]);

        return back()->withSuccess("Berhasil Menambahkan Naskah");
    }

    public function storePersyaratanIsbn(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'konten'=>'required',
            'file_naskah' => 'nullable|max:2048',
            'file_keaslian' => 'nullable|max:2048',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        $check = PersyaratanIsbn::where('id', 1)->first();
        

        if(array_key_exists('file_naskah', $request->all())){
            
            $file = $request['file_naskah'];
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'file_naskah_penerbitan';
            $file->move($tujuan_upload,$nama_file);
        }

        if(array_key_exists('file_keaslian', $request->all())){
            $file = $request['file_keaslian'];
            $nama_file_keaslian = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'file_keaslian';
            $file->move($tujuan_upload,$nama_file_keaslian);

        }


        if($check){

            $check->update([
                'konten' => $request->konten,
            ]);
            
            if(array_key_exists('file_naskah', $request->all())){
                
                $check->update([
                    'file_keaslian' => $nama_file_keaslian,
                ]);

            }
            if(array_key_exists('file_keaslian', $request->all())){
                $check->update([
                    'file_naskah' => $nama_file,
                ]);
            }

            return back()->withSuccess("Berhasil Mengubah Informasi Persyaratan ISBN");

        }

        PersyaratanIsbn::create([
            'konten' => $request->konten,
            'file_keaslian' => $nama_file_keaslian,
            'file_naskah' => $nama_file,
        ]);

        return back()->withSuccess("Berhasil Menambahkan Informasi Persyaratan ISBN");
    }
}
