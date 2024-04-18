<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\Team;
use App\Services\ProfilService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    //

    protected $profilService;

    public function __construct(ProfilService $profilService)
    {
        $this->profilService = $profilService;
    }

    public function index(){
        $team = $this->profilService->dataTeam();

        $sejarah = $this->profilService->dataSejarah();

        return view('admin.profil.index',[
            'team' => $team,
            'sejarah' => $sejarah,
        ]);
    }

    public function storeAnggota(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_anggota' => 'required',
            'jabatan_anggota' => 'required',
            'foto_anggota' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        $file = $request['foto_anggota'];
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'foto_anggota';
        $file->move($tujuan_upload,$nama_file);

        Team::create([
            'nama_anggota' => $request->nama_anggota,
            'jabatan_anggota' => $request->jabatan_anggota,
            'foto_anggota' => $nama_file,
            'facebook_anggota' => $request->facebook_anggota ?? "#",
            'twitter_anggota' => $request->twitter_anggota ?? "#",
            'youtube_anggota' => $request->youtube_anggota ?? "#",
            'instagram_anggota' => $request->instagram_anggota ?? "#",
        ]);

        return back()->withSuccess("Berhasil Menambahkan Anggota Tim");
    }

    public function editAnggota(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_anggota' => 'required',
            'jabatan_anggota' => 'required',
            'foto_anggota' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors()->first());
        }

        $check = Team::where('id', $request->id)->first();


        $check->update([
            'nama_anggota' => $request->nama_anggota,
            'jabatan_anggota' => $request->jabatan_anggota,
            'facebook_anggota' => $request->facebook_anggota ?? "#",
            'twitter_anggota' => $request->twitter_anggota ?? "#",
            'youtube_anggota' => $request->youtube_anggota ?? "#",
            'instagram_anggota' => $request->instagram_anggota ?? "#",
        ]);

        if(array_key_exists('foto_anggota', $request->all())){
            $file = $request['foto_anggota'];
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'foto_anggota';
            $file->move($tujuan_upload,$nama_file);

            $check->update([
                'foto_anggota' => $nama_file,
            ]);
        }

        return back()->withSuccess("Berhasil Mengubah Data Anggota Tim");

        
    }

    public function deleteAnggota($id){
        $team = Team::where('id', $id)->first();

        if(!$team){
            return back()->withErrors("Data Tidak Ditemukan");
        }

        $team->delete();

        return back()->withSuccess("Data Berhasil Dihapus");
    }

    public function storeSejarah(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'konten' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors()->first());
        }

        $file = $request['foto'];
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'foto_sejarah';
        $file->move($tujuan_upload,$nama_file);

        $check = Sejarah::where('id', 1)->first();

        if($check){
            $check->update([
                'foto' => $nama_file,
                'konten' => $request->konten,
            ]);
        }else{
            Sejarah::create([
                'foto' => $nama_file,
                'konten' => $request->konten,
            ]);
        }

        return back()->withSuccess("Berhasil Menambahkan Sejarah");
    }
}
