@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Sejarah</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <figure class="single-feature-img figure-border-round">
                    <img src="{{ asset('') }}foto_sejarah/{{$sejarah['foto']}}" alt="">
                </figure>
                <div class="page-content">
                    {!! $sejarah['konten'] !!}
                </div>
            </div>
        </div>


    </main>

@endsection
