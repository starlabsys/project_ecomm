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
                              <input type="hidden" name="type" value="pengajuan_isbn" id="">
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
                          <h4><b>Desain Cover</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="type" value="desaincover">
                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Desain Cover</label>
                                  <textarea name="konten"  class="editor" cols="30" rows="10">{{ @$desaincover->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ @$desaincover->harga }}">
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
                          <h4><b>Layout</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="type" value="layout">

                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Layout</label>
                                  <textarea name="konten"  class="editor2" cols="30" rows="10">{{ @$layout->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ @$layout->harga }}">
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
                          <h4><b>Proofreading</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="type" value="proofreading">

                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Proofreading</label>
                                  <textarea name="konten"  class="editor3" cols="30" rows="10">{{ @$proofreading->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ @$proofreading->harga }}">
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
                          <h4><b>Editing Mekanis</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="type" value="editingmekanis">

                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Editing Mekanis</label>
                                  <textarea name="konten"  class="editor4" cols="30" rows="10">{{ @$editingmekanis->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ @$editingmekanis->harga }}">
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
                          <h4><b>Editing Substantif</b></h4>
                          {{-- <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSSejarah">
                              + Team
                          </button> --}}
                          {{-- {{ dd($pengajuanisbn) }} --}}
                      </div>
                      <div class="widget-content widget-content-area br-8 card">
                          <form action="{{ url('admin/layanan/pengajuan-isbn') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="type" value="editingsubstantif">

                              <div class="col-md-12 mt-3">
                                  <label for="" class="control-label">Konten Editing Substantif</label>
                                  <textarea name="konten"  class="editor5" cols="30" rows="10">{{ @$editingsubstantif->konten }}</textarea>
                              </div>
         
                              <div class="col-md-12 mt-3">
                                 <label for="" class="control-label">Harga Pengajuan</label>
                                 <input type="number" class="form-control" name="harga" value="{{ @$editingsubstantif->harga }}">
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
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="d-flex justify-content-between m-2">
                <h4><b>List Paket Penerbitan</b></h4>
                <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Paket Penerbitan
                </button>
            </div>
            <div class="widget-content widget-content-area br-8">
                <div class="table-responsive">
                    <table class="table table-bordered Datatable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="">Paket Penerbitan</th>
                                <th width="">Foto</th>
                                <th width="">Harga</th>
                                <th width="15%">Action</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($paketpenerbitan as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->nama_paket }}</td>
                                    <td>
                                        <img src="{{ asset('paket_penerbitan/'.$item->gambar) }}" class="img-thumbnail" alt="">
                                    </td>
                                    <td>Rp. {{ number_format($item->harga) }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        {{-- <button class="btn btn-warning btn-sm mr-2 ml-2">Warning</button> --}}
                                        <form action="{{ url('admin/paket-penerbitan/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @foreach ($product as $key=>$item)
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
            <form action="{{ url('admin/layanan/paket-penerbitan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Nama Paket Penerbitan</label>
                            <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket Penerbitan" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Harga</label>
                            <input type="number" class="form-control" name="harga" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="" class="control-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <hr class="text-black">
                        <span id="dynamic_field">
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-between">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <button type="button" name="add" id="add" class="btn btn-sm btn-success">Add More</button>
                                </div>
                                <input type="text" class="form-control mt-2" name="deskripsi[]" placeholder="Deskripsi" required>
                            </div>
                        </span>
                        {{-- <div class="col-md-4 mt-2">
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
                        </div> --}}
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

@section('script')
<script>
    $(document).ready(function () {
        var i = 1;
        $("#add").click(function () {
            i++;
            $("#dynamic_field").append(
                `
                <div class="col-md-12 mt-2" id="row"`+i+`>
                    <div class="d-flex justify-content-end">
                        <input type="text" class="form-control" name="deskripsi[]" placeholder="Deskripsi" />
                        <button type="button" name="remove" id="` +
                        i +
                        `" class="btn btn-danger btn_remove">X</button>
                    </div>
                </div>                
                `
                // '<tr id="row' +
                //     i +
                //     '"><td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                //     i +
                //     '" class="btn btn-danger btn_remove">X</button></td></tr>'
            );
        });

        $(document).on("click", ".btn_remove", function () {
            var button_id = $(this).attr("id");
            $("#row" + button_id + "").remove();
        });
    });
</script>

@endsection