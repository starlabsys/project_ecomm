@extends('layouts.main_front')

@section('content')
<main id="content" class="site-main">
    <!-- home banner section html start -->
    <section class="home-banner-v2" style="background-image: url(assets/img/agency-img14.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <div class="section-head-v2-white">
                            <h2 class="section-title">
                                Untan Press
                            </h2>
                            <p class="section-paragraph">
                                Senectus dictum doloribus senectus laboriosam deserunt molestias rhoncus nonummy excepteur rem nostrud, ullamcorper, blanditiis, lobortis pede donec quidem aliquip tortor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="banner-img">
                        <img src="{{ asset('') }}assets/img/agency-img28.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <section class="banner-contact-section">
        <div class="container">
            <div class="col-lg-6 offset-lg-6">
                <div class="banner-contact-wrapper">
                    <div class="banner-contact-inner">
                        <h6 class="banner-contact-title">
                            Hubungi kami untuk penerbitan buku, jurnal, dan lain-lain :
                        </h6>
                        <h3 class="banner-contact-number">(+984) 256 897 225</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home about section start -->
    <section class="home-about-v2-section">
        <div class="container">
            <div class="home-about-inner">
                <figure class="about-img figure-border-round">
                    <img src="{{ asset('') }}assets/img/agency-img2.jpg" alt="">
                </figure>
                <div class="about-detail">
                    <div class="section-head-v2">
                        <div class="title-divider-left">
                            Tentang Kami
                        </div>
                        <h2 class="banner-title section-title">
                            How We Became Best Among Others ?
                        </h2>
                        <p class="section-paragraph">
                            <b>University Press</b> di Universitas Tanjungpura, melalui UNTAN Press, menjadi tulang punggung dalam publikasi dan distribusi ilmu pengetahuan. Dengan fokus pada e-book, buku konvensional, dan sitasi, UNTAN Press tidak hanya mendukung industri buku tetapi juga membentuk komunitas ilmuwan yang inovatif di universitas.
                        </p>
                    </div>
                    <div class="about-count-up">
                        <div class="counter-inner">
                            <div class="counter-content">
                                <h6 class="count-title">Bukun Berhasil Terbit</h6>
                                <div class="counter-no">
                                    <span class="counter">{{$totalBestSeller}}</span>+
                                </div>
                            </div>
                        </div>
                        <div class="counter-inner">
                            <div class="counter-content">
                                <h6 class="count-title">Total Buku</h6>
                                <div class="counter-no">
                                    <span class="counter">{{$totalBook}}</span>+
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home service section start -->
    <section class="home-service-v2-section">
        <div class="container">
            <div class="section-head-v2 col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                <div class="title-divider-left">
                    SERVICES LIST
                </div>
                <h2 class="section-title">
                    Best Services We Can Offer For You !
                </h2>
            </div>
            <div class="type-of-service">
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-chart2"></i>
                        </figure>
                        <span class="service-number">
                            01.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-isbn')}}">Pengajuan ISBN</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-isbn')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-design"></i>
                        </figure>
                        <span class="service-number">
                            02.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-desain-cover')}}">Desain Cover</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-desain-cover')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-Profile"></i>
                        </figure>
                        <span class="service-number">
                            03.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-layout')}}">Layout</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-layout')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-api_setup"></i>
                        </figure>
                        <span class="service-number">
                            04.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-proofreading')}}">Proofreading</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-proofreading')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-api_setup"></i>
                        </figure>
                        <span class="service-number">
                            05.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-editing-mekanis')}}">Editing Mekanis</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-editing-mekanis')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-api_setup"></i>
                        </figure>
                        <span class="service-number">
                            06.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-editing-subtantif')}}">Editing Subtantif</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-editing-subtantif')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="service-type">
                    <div class="service-fig-number">
                        <figure class="service-icon">
                            <i aria-hidden="true" class="icon icon-api_setup"></i>
                        </figure>
                        <span class="service-number">
                            07.
                        </span>
                    </div>
                    <h5 class="service-title">
                        <a href="{{url('pengajuan-paket-penerbitan')}}">Paket Penerbitan</a>
                    </h5>
                    <p class="service-paragraph">
                        Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                    </p>
                    <a href="{{url('pengajuan-paket-penerbitan')}}" class="service-btn">READ MORE
                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- home process section start -->
    <section class="home-process-v2-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-head-v2-white col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                <h2 class="section-title">
                    Informasi Penerbitan
                </h2>
            </div>
        </div>
        <div class="process-steps">
            <div class="image-overlay"></div>
            <div class="container">
                <div class="process-steps-inner">
                    <div class="phase">
                        <h3 class="number-phase">01</h3>
                        <div class="phase-info">
                            <h5 class="phase-title">
                                Jenis Naskah
                            </h5>
                            <p class="phase-desc">
                                Turpis wisi pede tempus assumenda pede quis ultricies dicta ipsa
                            </p>
                        </div>
                    </div>
                    <div class="phase">
                        <h3 class="number-phase">02</h3>
                        <div class="phase-info">
                            <h5 class="phase-title">
                                Prosedur Penerbitan
                            </h5>
                            <p class="phase-desc">
                                Turpis wisi pede tempus assumenda pede quis ultricies dicta ipsa
                            </p>
                        </div>
                    </div>
                    <div class="phase">
                        <h3 class="number-phase">03</h3>
                        <div class="phase-info">
                            <h5 class="phase-title">
                                Persyaratn Penerbitan
                            </h5>
                            <p class="phase-desc">
                                Turpis wisi pede tempus assumenda pede quis ultricies dicta ipsa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home partner section html -->
    @if($newBook->count() > 0)
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Buku Baru</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-process-v2-section" style="margin-top: -200px">
            <div class="product-outer-wrap product-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 right-sidebar">
                            <div class="product-notices-wrapper">
                                <a href=""><p class="product-result-count">Showing all</p></a>
                            </div>
                            <div class="product-item-wrapper">
                                <div class="row">
                                    @foreach($newBook as $booknew)
                                        <div class="col-sm-3">
                                            <div class="product-item text-center">
                                                <figure class="product-image">
                                                    <a href="single-product.html">
                                                        <img src="{{asset('foto_product/'.$booknew['gambar'])}}" alt="">
                                                    </a>
                                                    @if($booknew['diskon'] != 0)
                                                        <span class="onsale">{{$booknew['diskon']}}</span>
                                                    @endif

                                                </figure>
                                                <div class="product-content">
                                                    <h4>{{$booknew['nama_produk']}}</h4>
                                                    <div class="product-price">
                                                        <del>Rp. {{number_format($booknew['harga'])}}</del>
                                                        <br>
                                                        <ins>Rp. {{number_format($booknew['harga'] - ($booknew['harga'] * $booknew['diskon'] / 100))}}</ins>
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
        </section>
    @endif
    <!-- home partner section html -->
    @if($discount->count() > 0)
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Sedang Diskon</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="home-process-v2-section" style="margin-top: -200px">
        <div class="product-outer-wrap product-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 right-sidebar">
                        <div class="product-notices-wrapper">
                            <a href=""><p class="product-result-count">Showing all</p></a>
                        </div>
                        <div class="product-item-wrapper">
                            <div class="row">
                                @foreach($discount as $discountBook)
                                    <div class="col-sm-3">
                                        <div class="product-item text-center">
                                            <figure class="product-image">
                                                <a href="single-product.html">
                                                    <img src="{{asset('foto_product/'.$discountBook['gambar'])}}" alt="">
                                                </a>
                                                @if($discountBook['diskon'] != 0)
                                                    <span class="onsale">{{$discountBook['diskon']}}</span>
                                                @endif

                                            </figure>
                                            <div class="product-content">
                                                <h4>{{$discountBook['nama_produk']}}</h4>
                                                <div class="product-price">
                                                    <del>Rp. {{number_format($discountBook['harga'])}}</del>
                                                    <br>
                                                    <ins>Rp. {{number_format($discountBook['harga'] - ($discountBook['harga'] * $discountBook['diskon'] / 100))}}</ins>
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
    </section>
    @endif
    <!-- home partner section html -->
    @if($bestSeller->count() > 0)
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Best Seller</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="home-process-v2-section" style="margin-top: -200px">
        <div class="product-outer-wrap product-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 right-sidebar">
                        <div class="product-notices-wrapper">
                            <a href=""><p class="product-result-count">Showing all</p></a>
                        </div>
                        <div class="product-item-wrapper">
                            <div class="row">
                                @foreach($bestSeller as $sellerBest)
                                    <div class="col-sm-3">
                                        <div class="product-item text-center">
                                            <figure class="product-image">
                                                <a href="single-product.html">
                                                    <img src="{{asset('foto_product/'.$sellerBest['gambar'])}}" alt="">
                                                </a>
                                                @if($sellerBest['diskon'] != 0)
                                                    <span class="onsale">{{$sellerBest['diskon']}}</span>
                                                @endif

                                            </figure>
                                            <div class="product-content">
                                                <h4>{{$sellerBest['nama_produk']}}</h4>
                                                <div class="product-price">
                                                    <del>Rp. {{number_format($sellerBest['harga'])}}</del>
                                                    <br>
                                                    <ins>Rp. {{number_format($sellerBest['harga'] - ($sellerBest['harga'] * $sellerBest['diskon'] / 100))}}</ins>
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
    </section>
    @endif
    <!-- home partner section html -->
    <section class="home-partner-v2-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="partner-detail-inner">
                        <div class="section-head-v2-white">
                            <div class="title-divider-left">
                                CLIENTS / PARTNERS
                            </div>
                            <h2 class="section-title">
                                Sponsers & Clients
                            </h2>
                        </div>
                        <div class="patner-info-img">
                            <figure class="partner-img">
                                <img src="{{ asset('') }}assets/img/agency-img13.jpg" alt="">
                            </figure>
                            <p class="partner-info">
                                Senectus dictum doloribus senectus laboriosam deserunt molestias rhoncus nonummy excepteur rem nostrud, ullamcorper, blanditiis, lobortis pede donec quidem aliquip tortor.
                            </p>
                        </div>
                        <div class="skill-container">
                            <div class="skill-wrapper">
                                <h6 class="skill-titile">Clients Satsifaction</h6>
                                <div class="progress-wrapper">
                                    <div class="ab-progress example" data-progress data-value="95"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="partner-group-gallary">
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img08.png" alt="">
                        </figure>
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img07.png" alt="">
                        </figure>
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img05.png" alt="">
                        </figure>
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img06.png" alt="">
                        </figure>
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img04.png" alt="">
                        </figure>
                        <figure class="partner-logo">
                            <img src="{{ asset('') }}assets/img/agency-img08.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home contact v2 section -->
    <section class="home-contact-v2-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="contact-inner-content">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <form class="contact-form row">
                            <p class="col-sm-6">
                                <input type="text" name="name" placeholder="Your Name..">
                            </p>
                            <p class="col-sm-6">
                                <input type="email" name="email" placeholder="Your Email..">
                            </p>
                            <p class="width-full">
                                <textarea rows="9" placeholder="Enter Message.."></textarea>
                            </p>
                            <p class="width-full">
                                <input type="submit" name="submit" value="SUBMIT MESSAGE">
                            </p>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-detail">
                            <div class="section-head-v2">
                                <div class="title-divider-left">
                                    GET IN TOUCH
                                </div>
                                <h2 class="banner-title section-title">
                                    Contact Us For Further Information !
                                </h2>
                                <p class="section-paragraph">
                                    Commodo voluptatibus per quis, assumenda lorem! Nullam adipisicing praesent, impedit, ridiculus egestas dicta ratione mattis! Expedita repudiandae rutrum lacus eveniet.
                                </p>
                            </div>
                            <div class="social-links-inner">
                                <h6 class="social-link-title">
                                    FOLLOW US ON SOCIAL MEDIA :
                                </h6>
                                <div class="social-link">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="https://twitter.com/?lang=en">--}}
{{--                                                <i class="fab fa-twitter"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
                                        <li>
                                            <a href="https://www.youtube.com/">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="https://www.pinterest.com/">--}}
{{--                                                <i class="fab fa-pinterest"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="https://www.linkedin.com/">--}}
{{--                                                <i class="fab fa-linkedin"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
