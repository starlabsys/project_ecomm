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
                 <h4><b>Konten Kontak Kami</b></h4>
                 <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     + Konten
                 </button>
             </div>
             <div class="widget-content widget-content-area br-8">
                 <div class="table-responsive">
                     <table class="table table-bordered Datatable">
                         <thead>
                             <tr>
                                 <th width="5%">No</th>
                                 <th width="">Judul Kontak</th>
                                 <th width="">Isi Kontak</th>
                                 <th>Action</th>
                             </tr>    
                         </thead>
                         <tbody>
                            @foreach ($kontak as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->judul_kontak }}</td>
                                    <td>{{ $item->isi_kontak }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm mr-2 ml-2">Warning</button>
                                        <button class="btn btn-danger btn-sm mr-2 ml-2">Delete</button>
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
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Kontak</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                   <svg> ... </svg>
                 </button>
             </div>
             <form action="{{ url('admin/kontak') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Judul Kontak</label>
                            <input type="text" class="form-control" name="judul_kontak" placeholder="Judul Kontak" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Isi Kontak</label>
                            <textarea name="isi_kontak" id="" class="editor2" cols="30" rows="10"></textarea>
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