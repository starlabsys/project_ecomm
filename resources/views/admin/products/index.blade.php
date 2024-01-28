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
                 <h4><b>List Data Product</b></h4>
                 <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     + Product
                 </button>
             </div>
             <div class="widget-content widget-content-area br-8">
                 <div class="table-responsive">
                     <table class="table table-bordered Datatable">
                         <thead>
                             <tr>
                                 <th width="5%">No</th>
                                 <th width="">Nama Produk</th>
                                 <th width="">Deskripsi</th>
                                 <th width="">Harga</th>
                                 <th width="">Foto</th>
                                 <th width="">Diskon</th>
                                 <th width="">Status</th>
                                 <th>Action</th>
                             </tr>    
                         </thead>
                         <tbody>
                            @foreach ($product as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>Rp. {{ number_format($item->harga) }}</td>
                                    <td>{{ asset('foto_product/'.$item->gambar) }}</td>
                                    <td>{{ $item->diskon }} %</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm mr-2 ml-2">Warning</button>
                                        <form action="{{ url('admin/informasi-penerbitan/naskah/'.$item->id) }}" method="POST">
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
             <form action="{{ url('admin/product') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-body">
                     <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="" class="control-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Naskah" required>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="" class="control-label">Harga</label>
                            <input type="number" class="form-control" name="harga" required>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="" class="control-label">Diskon</label>
                            <input type="number" class="form-control" name="diskon" placeholder="50">
                            <small class="text-danger">*kosongkan jika tidak ada diskon/persentase</small>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="5" maxlength="300"></textarea>
                            <small class="text-danger">max 300 length characters</small>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Foto Produk</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="" selected disabled> == Pilih == </option>
                                <option value="Best Seller">Best Seller</option>
                                <option value="Discount">Discount</option>
                                <option value="New">New</option>
                            </select>
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