@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Kontak Kami</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!-- contact-section- start -->
        <div class="contact-page-section">
            <div class="get-touch-detail-container">
                <div class="container">
                    <div class="row">
                        <div class="contact-details-list">
                            <div class="connection-detail-wrapper">
                                <div class="contact-tag">
                                        <span class="contact-icon">
                                            <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                        </span>
                                    <div class="tag-content">
                                        <span>Alamat</span>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <span>Jl Prof. Dr. H. Hadari Nawawi, Bansir Laut, Kec. Pontianak Tenggara</span>
                                    <span>Kota Pontianak, Kalimantan Barat 78124</span>
                                </div>
                            </div>
                            <div class="connection-detail-wrapper">
                                <div class="contact-tag">
                                        <span class="contact-icon">
                                            <i aria-hidden="true" class="fas fa-phone-volume" style="width: 25px"></i>
                                        </span>
                                    <div class="tag-content">
                                        <span>(Contact Person 1)</span>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <span>Tel : +81-245-54896</span>
                                    <span>Mob : +81-125-87965</span>
                                </div>
                            </div>
                            <div class="connection-detail-wrapper">
                                <div class="contact-tag">
                                        <span class="contact-icon">
                                            <i aria-hidden="true" class="fas fa-phone-volume" style="width: 25px"></i>
                                        </span>
                                    <div class="tag-content">
                                        <span>(Contact Person 2)</span>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <span>Tel : +81-245-54896</span>
                                    <span>Mob : +81-125-87965</span>
                                </div>
                            </div>
                            <div class="connection-detail-wrapper">
                                <div class="contact-tag">
                                        <span class="contact-icon">
                                            <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                                        </span>
                                    <div class="tag-content">
                                        <span>Mail</span>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <span><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a1a6aea788aca7a5a9a1a6e6aba7a5">untanpress@untan.ac.id</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="contact-banner text-center">
                                <div class="contact-banner-icon">
                                    <i aria-hidden="true" class="icon icon-support1"></i>
                                </div>
                                <h5 class="section-title">
                                    Chat With Live !
                                </h5>
                                <div class="section-disc">
                                    <p>
                                        Porro. Erat gravida adipisci quibusdam faucibus diam molestias? Ante, arcu commo do, non! Phasellus risus.
                                    </p>
                                </div>
                                <button type="submit" class="button-round-white">LET'S CHAT</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-image">
                                <img src="assets/img/agency-img28.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="aside-contact-form">
                                <div class="divider-wrapper">
                                        <span class="title-divider">
                                            <span class="top-title">CONTACT US</span>
                                        </span>
                                </div>
                                <h3 class="section-title">
                                    <span class="title-highlight">Reach </span>
                                    & Get In Touch With Us !
                                </h3>
                                <form class="get-touch-form  row">
                                    <div class="col-sm-6 col-12 form-height">
                                        <input type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-sm-6 col-12 form-height">
                                        <input type="email" class="form-control" placeholder="Your Email*">
                                    </div>
                                    <div class="col-sm-6 col-12 form-height">
                                        <input type="number" class="form-control" placeholder="Your number*">
                                    </div>
                                    <div class="col-sm-6 col-12 form-height">
                                        <input type="text" class="form-control" placeholder="Your Subject*">
                                    </div>
                                    <div class="col-sm-12 form-height">
                                        <textarea placeholder="Enter message" rows="6"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="button-round-primary">send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="400" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </main>

@endsection
