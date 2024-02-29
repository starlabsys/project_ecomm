@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Pengajuan ISBN</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    {!! $isbn['konten'] !!}
                    <blockquote>
                        <div class="row">
                            <div class="col-md-12 text-center" style="font-weight: bold;">
                                <p class="justify-center">
                                    Tarif : {!! $formatMataUang !!}
                                </p>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="contact.html" class="button-round-primary">Ajukan Sekarang</a>
                                <a href="contact.html" class="button-round-primary">Prosedur Pengajuan</a>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>

    </main>

@endsection
