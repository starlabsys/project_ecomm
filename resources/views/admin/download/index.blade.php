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
                 <h4><b>Konten Halaman Donwloaded</b></h4>
                 {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                     + Team
                 </button> --}}
             </div>
             <div class="widget-content widget-content-area br-8 card">
                 <form action="{{ url('admin/download') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">

                         <div class="col-md-12 mt-3">
                             <label for="" class="control-label">Konten Halaman Downloaded</label>
                             <textarea name="konten"  id="editor" cols="30" rows="10">{{ @$data->konten }}</textarea>
                         </div>
    
                         <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Template Naskah (UNESCO)</label>
                            <input type="file" class="form-control" name="template_naskah">
                            <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                         </div>
                         <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Surat Keaslian Karya</label>
                            <input type="file" class="form-control" name="file_keaslian">
                            <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                         </div>
    
                         <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Pedoman Penulisan Buku Ajar</label>
                            <input type="file" class="form-control" name="pedoman_penulisan_buku_ajar">
                            <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                         </div>
    
                         <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Pedoman Penulisan Buku Referensi</label>
                            <input type="file" class="form-control" name="pedoman_penulisan_buku_referensi">
                            <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                         </div>
    
                         <div class="col-md-6 mt-3">
                            <label for="" class="control-label">Pedoman Penulisan Buku Monograf</label>
                            <input type="file" class="form-control" name="pedoman_penulisan_buku_monograf">
                            <small class="text-danger">Kosongkan jika tidak ingin diubah</small>
                         </div>
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

@endsection