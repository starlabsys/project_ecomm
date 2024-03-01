@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Persyaratan ISBN</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    {!! $resp['konten'] !!}
                    <div class="row">
                        <div class="col-md-12 mt-3 text-center">
                            <a href="{{asset('')}}file_naskah_penerbitan/{{$resp['file_naskah']}}" target="_blank" class="button-round-primary">Tampilkan Naskah (UNESCO)</a>
                            <a href="{{asset('')}}file_naskah_penerbitan/{{$resp['file_keaslian']}}" target="_blank" class="button-round-primary">Surat Keaslian Karya</a>
                        </div>
                    </div>
                    <p class="mt-4">Jika Anda telah memiliki naskah, mari terbitkan bersama Untan Press. Klik tombol di bawah ini untuk lihat paket penerbitan kami.</p>
                    <div class="row col-md-12">
                        <div class="col-md-12 text-center">
                            <a href="{{url('pengajuan-paket-penerbitan')}}" class="button-round-primary">Paket Penerbitan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
