@extends('layouts.main_back')
@section('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
@endsection
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
                <h4><b>Konten Sejarah</b></h4>
                {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                    + Team
                </button> --}}
            </div>
            <div class="widget-content widget-content-area br-8 card">
                <form action="{{ url('admin/profil/sejarah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="" class="control-label">Konten Sejarah</label>
                        <textarea name="konten"  id="editor" cols="30" rows="10">{{ @$sejarah->konten }}</textarea>
                    </div>
                    
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="form-control btn btn-outline-primary">Simpan Konten</button>
                    </div>
                </form>
                
                {{-- <div class="table-responsive">
                    <table class="table table-bordered Datatable">
                        <thead>
                            <tr>
                                <th>No</th>    
                                <th>Nama</th>    
                                <th>Kelas</th>    
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>    
                                <td>Ryan</td>    
                                <td>XII A</td>    
                            </tr>    
                        </tbody> 
                    </table>
                </div> --}}
            </div>
         </div>
      </div>
      <div class="row layout-top-spacing">
         <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="d-flex justify-content-between m-2">
                <h4><b>List Data Team</b></h4>
                <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Team
                </button>
            </div>
            <div class="widget-content widget-content-area br-8">
                <div class="table-responsive">
                    <table class="table table-bordered Datatable">
                        <thead>
                            <tr>
                                <th>No</th>    
                                <th>Nama Anggota</th>    
                                <th>Jabatan Anggota</th>    
                                <th>Instagram</th>    
                                <th>Facebook</th>    
                                <th>Twitter</th>    
                                <th>Youtube</th>    
                                <th>Action</th>    
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($team as $q=>$item)
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
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Team Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <svg> ... </svg>
                </button>
            </div>
            <form action="{{ url('admin/profil/anggota') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Nama Anggota</label>
                            <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Anggota" required>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Jabatan Anggota</label>
                            <input type="text" class="form-control" name="jabatan_anggota" placeholder="Jabatan Anggota" required>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Facebook Url</label>
                            <input type="text" class="form-control" name="facebook_anggota" placeholder="https://url.com/anggota">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Twitter Url</label>
                            <input type="text" class="form-control" name="twitter_anggota" placeholder="https://url.com/anggota">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Youtube Url</label>
                            <input type="text" class="form-control" name="youtube_anggota" placeholder="https://url.com/anggota">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="control-label">Instagram Url</label>
                            <input type="text" class="form-control" name="instagram_anggota" placeholder="https://url.com/anggota">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Foto Anggota</label>
                            <input type="file" class="form-control" name="foto_anggota" required>
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