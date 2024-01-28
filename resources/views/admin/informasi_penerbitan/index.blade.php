@extends('layouts.main_back')

@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
       <!-- BREADCRUMB -->
       <div class="page-meta">
          <nav class="breadcrumb-style-one" aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic</li>
             </ol>
          </nav>
       </div>
       <!-- /BREADCRUMB -->
       <div class="row layout-top-spacing">
          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <div class="d-flex justify-content-between m-2">
                 <h4><b>Konten Persyaratan ISBN</b></h4>
                 {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                     + Team
                 </button> --}}
             </div>
             <div class="widget-content widget-content-area br-8 card">
                 <form action="{{ url('admin/informasi-penerbitan/persyaratan-isbn') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="col-md-12 mt-3">
                         <label for="" class="control-label">Konten Persyaratan ISBN</label>
                         <textarea name="konten"  id="editor" cols="30" rows="10">{{ @$persyaratanIsbn->konten }}</textarea>
                     </div>

                     <div class="col-md-12 mt-3">
                        <label for="" class="control-label">File Naskah (UNESCO)</label>
                        <input type="file" class="form-control" name="file_naskah">
                        <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                     </div>
                     <div class="col-md-12 mt-3">
                        <label for="" class="control-label">Surat Keaslian Karya</label>
                        <input type="file" class="form-control" name="file_keaslian">
                        <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                     </div>
                     
                     <div class="col-md-12 mt-3">
                         <button type="submit" class="form-control btn btn-outline-primary">Simpan Konten</button>
                     </div>
                 </form>
                 
             </div>
          </div>
       </div>
       <div class="row layout-top-spacing">
          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <div class="d-flex justify-content-between m-2">
                 <h4><b>List Data Naskah</b></h4>
                 <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     + Naskah
                 </button>
             </div>
             <div class="widget-content widget-content-area br-8">
                 <div class="table-responsive">
                     <table class="table table-bordered Datatable">
                         <thead>
                             <tr>
                                 <th width="5%">No</th>    
                                 <th width="50%">Judul Naskah</th>    
                                 <th width="60">Konten Naskah</th> 
                                 <th>Foto Naskah</th>   
                                 <th>Action</th>    
                             </tr>    
                         </thead>
                         <tbody>
                            @foreach ($jenisNaskah as $q => $item)
                                <tr>
                                    <td>{{ $q+1 }}</td>
                                    <td>{{ $item->nama_naskah }}</td>
                                    <td>{{ $item->konten_naskah }}</td>
                                    <td>{{ $item->foto_naskah }}</td>
                                    <td>
                                        <form action="{{ url('admin/informasi-penerbitan/naskah/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                             {{-- @foreach ($team as $q=>$item)
                                 <tr>
                                     <td>{{ $q+1 }}</td>    
                                     <td>{{ $item->nama_anggota }}</td>    
                                     <td>{{ $item->jabatan_anggota }}</td>    
                                     <td>{{ $item->instagram_anggota }}</td>    
                                     <td>{{ $item->facebook_anggota }}</td>    
                                     <td>{{ $item->twitter_anggota }}</td>    
                                     <td>{{ $item->youtube_anggota }}</td>    
                                     <td>
                                         <form action="{{ url('admin/profil/anggota/'.$item->id) }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn btn-danger btn-sm">Hapus</button>
                                         </form>    
                                     </td>    
                                 </tr>    
                             @endforeach --}}
                         </tbody> 
                     </table>
                 </div>
             </div>
          </div>
       </div>
       <div class="row layout-top-spacing">
          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <div class="d-flex justify-content-between m-2">
                 <h4><b>List Data Informasi Penerbitan</b></h4>
                 <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     + Informasi Penerbitan
                 </button>
             </div>
             <div class="widget-content widget-content-area br-8">
                 <div class="table-responsive">
                     <table class="table table-bordered Datatable">
                         <thead>
                             <tr>
                                 <th width="5%">No</th>    
                                 <th width="50%">Judul Informasi Penerbitan</th>    
                                 <th width="60">Konten Informasi Penerbitan</th> 
                                 <th>Foto Naskah</th>   
                                 <th>Action</th>    
                             </tr>    
                         </thead>
                         <tbody>
                            @foreach ($jenisNaskah as $q => $item)
                                <tr>
                                    <td>{{ $q+1 }}</td>
                                    <td>{{ $item->nama_naskah }}</td>
                                    <td>{{ $item->konten_naskah }}</td>
                                    <td>{{ $item->foto_naskah }}</td>
                                    <td>
                                        <form action="{{ url('admin/informasi-penerbitan/naskah/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                             {{-- @foreach ($team as $q=>$item)
                                 <tr>
                                     <td>{{ $q+1 }}</td>    
                                     <td>{{ $item->nama_anggota }}</td>    
                                     <td>{{ $item->jabatan_anggota }}</td>    
                                     <td>{{ $item->instagram_anggota }}</td>    
                                     <td>{{ $item->facebook_anggota }}</td>    
                                     <td>{{ $item->twitter_anggota }}</td>    
                                     <td>{{ $item->youtube_anggota }}</td>    
                                     <td>
                                         <form action="{{ url('admin/profil/anggota/'.$item->id) }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn btn-danger btn-sm">Hapus</button>
                                         </form>    
                                     </td>    
                                 </tr>    
                             @endforeach --}}
                         </tbody> 
                     </table>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Team Baru</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                   <svg> ... </svg>
                 </button>
             </div>
             <form action="{{ url('admin/informasi-penerbitan/naskah') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-md-12 mt-2">
                             <label for="" class="control-label">Nama Naskah</label>
                             <input type="text" class="form-control" name="nama_naskah" placeholder="Nama Naskah" required>
                         </div>
                         <div class="col-md-12 mt-2">
                             <label for="" class="control-label">Foto Naskah</label>
                             <input type="file" class="form-control" name="foto_naskah" required>
                         </div>
                         <div class="col-md-12 mt-2">
                             <label for="" class="control-label">Isi Konten Naskah</label>
                             <textarea name="konten_naskah" class="form-control" id="" cols="30" rows="5" maxlength="300"></textarea>
                             <small class="text-danger">max 300 length characters</small>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                     <button type="submit" class="btn btn-primary">Save</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
@endsection