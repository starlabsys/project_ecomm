@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Paket Penerbitan</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="product-outer-wrap product-wrap">
            <div class="container">
                <div class="page-content">
                    <p>Untan Press mempersembahkan layanan editing substantif kami yang akan membantu mengangkat kualitas naskah Anda ke tingkat yang lebih tinggi. Layanan kami dapat memperkuat substansi dan struktur karya tulis Anda.</p>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 right-sidebar">
                        <div class="product-item-wrapper">
                            <div class="row">
                                @foreach($paketpenerbitan as $key)
                                    <div class="col-sm-3">
                                        <div class="product-item text-center">
                                            <figure class="product-image">
                                                <a href="single-product.html">
                                                    <img src="assets/img/agency-img35.jpg" alt="">
                                                </a>
                                                {{--                                            <span class="onsale">Sale</span>--}}
                                            </figure>
                                            <div class="product-content">
                                                <h4>{{$key->nama_paket}}</h4>
                                                    <?php
                                                        $konten = json_decode($key->deskripsi);
                                                        $angka = $key->harga;
                                                        $formatMataUang = 'Rp ' . number_format($angka, 0, ',', '.');
                                                    ?>
                                                @foreach($konten as $keyx)
                                                    <p>{{$keyx}}</p>
                                                @endforeach
                                                <div class="product-price">
                                                    <ins>{{$formatMataUang}}</ins>
                                                </div>
                                                <a href="cart.html" class="button-round-primary">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
