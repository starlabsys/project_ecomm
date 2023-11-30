@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Prosedur Penerbitan</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!--  career section html start -->
        <div class="carrer-page-section">
            <div class="container">
                <div class="vacancy-section">
                    <div class="vacancy-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="vacancy-content-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vacancy-content">
                                                <h4>Buku</h4>
                                                <p>Berikut adalah langkah-langkah penerbitan buku di Untan Press.</p>
                                                <a href="{{url('prosedur-penerbitan-buku')}}" class="button-round-primary">Lihat</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vacancy-content">
                                                <h4>Prosiding</h4>
                                                <p>Berikut adalah langkah-langkah penerbitan prosiding di Untan Press.</p>
                                                <a href="{{url('prosedur-penerbitan-prosiding')}}" class="button-round-primary">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
