@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Download</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    <p>Selamat datang di halaman ini, di sini Anda akan menemukan kumpulan tautan/link unduhan untuk dokumen-dokumen berupa Template Naskah UNESCO, Surat Keaslian Karya, serta Pedoman Penulisan Buku (Ajar, Monograf, dan Referensi).</p>
                    <div class="row">
                        <div class="col-md-12 mt-3 text-center">
                            <a href="{{ $response->template_naskah }}" target="_blank" class="button-round-primary">Template Naskah UNESCO</a>
                            <a href="{{ $response->file_keaslian }}" target="_blank" class="button-round-primary">Surat Keaslian Karya</a>
                        </div>
                    </div>
                    <p class="mt-5">Berikut telah tersedia pedoman penulisan buku ajar/modul, buku referensi, dan buku monograf untuk standard dan ketentuan Universitas Tanjungpura</p>
                    <div class="row">
                        <div class="col-md-12 mt-3 text-center">
                            <a href="{{ $response->pedoman_penulisan_buku_ajar }}" target="_blank" class="button-round-secondary">Pedoman penulisan buku ajar</a>
                            <a href="{{ $response->pedoman_penulisan_buku_referensi }}" target="_blank" class="button-round-secondary">Pedoman penulisan buku referensi</a>
                            <a href="{{ $response->pedoman_penulisan_buku_monograf }}" target="_blank" class="button-round-secondary">Pedoman penulisan buku monograf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
