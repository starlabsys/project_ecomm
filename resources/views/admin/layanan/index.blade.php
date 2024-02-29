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
            <div class="card">
                <div class="card-body">
                   <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                      <div class="d-flex justify-content-between m-2">
                          <h4><b>Konten Persyaratan ISBN</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Pengajuan ISBN</label>
                                  <textarea name="konten"  id="editor" cols="30" rows="10">{{ $pengajuanisbn->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ $pengajuanisbn->harga }}">
                              </div>
                              <div class="col-md-12 mt-3">
                                  <button type="submit" class="form-control btn btn-outline-primary">Simpan Konten</button>
                              </div>
                          </form>
                          
                      </div>
                   </div>
                </div>
            </div>
       </div>
       
       <div class="row layout-top-spacing">
            <div class="card">
                <div class="card-body">
                   <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                      <div class="d-flex justify-content-between m-2">
                          <h4><b>Konten Persyaratan ISBN</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Pengajuan ISBN</label>
                                  <textarea name="konten"  id="editor" cols="30" rows="10">{{ $pengajuanisbn->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ $pengajuanisbn->harga }}">
                              </div>
                              <div class="col-md-12 mt-3">
                                  <button type="submit" class="form-control btn btn-outline-primary">Simpan Konten</button>
                              </div>
                          </form>
                          
                      </div>
                   </div>
                </div>
            </div>
       </div>
    </div>
 </div>
 
 {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 </div> --}}
@endsection