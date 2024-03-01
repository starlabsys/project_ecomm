@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Sedang Diskon</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!-- product-list section html start -->
        <div class="product-outer-wrap product-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 right-sidebar">
                        <div class="product-notices-wrapper">
                            <p class="product-result-count">Showing all 6 results</p>
                            {{--                            <form method="get">--}}
                            {{--                                <select name="orderby" class="orderby" aria-label="Shop order">--}}
                            {{--                                    <option value="menu_order" selected="selected">Default sorting</option>--}}
                            {{--                                    <option value="popularity">Sort by popularity</option>--}}
                            {{--                                    <option value="rating">Sort by average rating</option>--}}
                            {{--                                    <option value="date">Sort by latest</option>--}}
                            {{--                                    <option value="price">Sort by price: low to high</option>--}}
                            {{--                                    <option value="price-desc">Sort by price: high to low</option>--}}
                            {{--                                </select>--}}
                            {{--                            </form>--}}
                        </div>
                        <div class="product-item-wrapper">
                            <div class="row">
                                @foreach($diskon as $key)
                                    <div class="col-sm-6 col-md-3">
                                        <div class="product-item text-center">
                                            <figure class="product-image">
                                                <a href="single-product.html">
                                                    <img src="assets/img/agency-img35.jpg" alt="">
                                                </a>
                                                <span class="onsale">Sale</span>
                                            </figure>
                                            <div class="product-content">
                                                <h4>Lenevo laptop</h4>
                                                <div class="product-price">
                                                    <del>$225.00</del>
                                                    <ins>$210.50</ins>
                                                </div>
                                                <a href="cart.html" class="button-round-primary">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img35.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                            <span class="onsale">Sale</span>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>Lenevo laptop</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <del>$225.00</del>--}}
{{--                                                <ins>$210.50</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img34.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>Mackbook</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <ins>$180.00</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img33.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>office Chair</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <del>$55.55</del>--}}
{{--                                                <ins>$50.00</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img32.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>Office Table</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <ins>$325.00</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img30.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>Office Tools</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <ins>$15.99</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-3">--}}
{{--                                    <div class="product-item text-center">--}}
{{--                                        <figure class="product-image">--}}
{{--                                            <a href="single-product.html">--}}
{{--                                                <img src="assets/img/agency-img31.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                            <span class="onsale">Sale</span>--}}
{{--                                        </figure>--}}
{{--                                        <div class="product-content">--}}
{{--                                            <h4>Study Table</h4>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <del>$125.00</del>--}}
{{--                                                <ins>$120.00</ins>--}}
{{--                                            </div>--}}
{{--                                            <a href="cart.html" class="button-round-primary">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <!-- pagination html start-->
                            {{--                            <div class="post-navigation-wrap">--}}
                            {{--                                <nav>--}}
                            {{--                                    <ul class="pagination">--}}
                            {{--                                        <li>--}}
                            {{--                                            <a href="#">--}}
                            {{--                                                ←--}}
                            {{--                                            </a>--}}
                            {{--                                        </li>--}}
                            {{--                                        <li class="active"><a href="#">1</a></li>--}}
                            {{--                                        <li><a href="#">2</a></li>--}}
                            {{--                                        <li><a href="#">3</a></li>--}}
                            {{--                                        <li>--}}
                            {{--                                            <a href="#">--}}
                            {{--                                                →--}}
                            {{--                                            </a>--}}
                            {{--                                        </li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </nav>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
{{--                            <aside class="widget search_widget">--}}
{{--                                <form>--}}
{{--                                    <input type="text" name="search" placeholder="Search..">--}}
{{--                                    <button class="search-btn">--}}
{{--                                        <i class="fas fa-search"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </aside>--}}
                            {{--                            <aside class="widget price_handel_widget">--}}
                            {{--                                <div class="divider-wrapper">--}}
                            {{--                                        <span class="title-divider">--}}
                            {{--                                            <span class="top-title">Filter Price</span>--}}
                            {{--                                        </span>--}}
                            {{--                                </div>--}}
                            {{--                                <form class="price-handel">--}}
                            {{--                                    <div id="slider-range"></div>--}}
                            {{--                                    <div class="price-amout">--}}
                            {{--                                        <button type="submit" class="button-round-primary">Filter</button>--}}
                            {{--                                        <div class="price-label">--}}
                            {{--                                            <span class="symbol">$</span>--}}
                            {{--                                            <input type="text" id="maxAmount" readonly>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </form>--}}
                            {{--                            </aside>--}}
                            <aside class="widget widget_category_product_thumb colum-3">
                                <div class="divider-wrapper">
                                        <span class="title-divider">
                                            <span class="top-title">PRODUCT CATEGORIES</span>
                                        </span>
                                </div>
                                <ul>
                                    <li>
                                        <figure class="product-thumb">
                                            <a href="{{url('etalase-best-seller')}}"><img src="assets/img/agency-img30-300x300.jpg" alt=""></a>
                                        </figure>
                                        <div class="product-content">
                                            <h5>Best Seller</h5>
                                            <span class="count">({{$total}})</span>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="product-thumb">
                                            <a href="{{url('etalase-sedang-diskon')}}"><img src="assets/img/agency-img35-300x300.jpg" alt=""></a>
                                        </figure>
                                        <div class="product-content">
                                            <h5>Sedang Diskon</h5>
                                            <span class="count">({{$totalDiskon}})</span>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="product-thumb">
                                            <a href="{{url('etalase-buku-baru')}}"><img src="assets/img/agency-img32-300x300.jpg" alt=""></a>
                                        </figure>
                                        <div class="product-content">
                                            <h5>Buku Baru</h5>
                                            <span class="count">({{$totalNew}})</span>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
