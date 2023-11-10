<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/style.css">
    <title>Home Version 2 – Agence – Digital Agency Elementor Template Kit</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="{{ asset('') }}assets/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        @include('_partials.header')
        <main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner-v2" style="background-image: url(assets/img/agency-img14.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <div class="section-head-v2-white">
                                    <div class="title-divider-left">
                                        CORPORATE AGENCY
                                    </div>
                                    <h2 class="section-title">
                                        Best Agency In The Market !
                                    </h2>
                                    <p class="section-paragraph">
                                        Senectus dictum doloribus senectus laboriosam deserunt molestias rhoncus nonummy excepteur rem nostrud, ullamcorper, blanditiis, lobortis pede donec quidem aliquip tortor.
                                    </p>
                                </div>
                                <div class="banner-author-box">
                                    <div class="author-content">
                                        <figure class="author-fig">
                                            <img src="{{ asset('') }}assets/img/agency-img18.jpg" alt="">
                                        </figure>
                                        <div class="author-detail">
                                            <h5 class="author-name">George Smith</h5>
                                            <span class="author-dec">CEO, Director</span>
                                        </div>
                                    </div>
                                    <div class="banner-button">
                                        <a href="about-us.html" class="button-round-primary">LEARN MORE</a>
                                    </div>
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
                                    FOR FURTHER INQUIRIES CALL :
                                </h6>
                                <h3 class="banner-contact-number">(+984) 256 897 225</h3>
                                <span class="banner-contact-info">
                                    Senectus dictum doloribus senectus laboriosam deserunt molestias rhoncus nonummy excepteur remr.
                                </span>
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
                                    ABOUT US
                                </div>
                                <h2 class="banner-title section-title">
                                    How We Became Best Among Others ?
                                </h2>
                                <p class="section-paragraph">
                                    Lobortis ipsam potenti necessitatibus integer unde quisque, condimentum doloribus cupiditate. Class soluta asperiores recusandae dolorum, orci! Elementum fermentum montes lacinia. Conubia quos laoreet aperiam orci..
                                </p>
                            </div>
                            <div class="about-list">
                                <ul>
                                    <li>
                                        <i aria-hidden="true" class="icon icon-checked1"></i>
                                        Praesentium volupta tum dolores ipsum.
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="icon icon-checked1"></i>
                                        Cillum nullam rem volutpat dolor init earum.
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="icon icon-checked1"></i>
                                        Odio doloribus lacus quaerat color assum.
                                    </li>
                                </ul>
                            </div>
                            <div class="about-count-up">
                                <div class="counter-inner">
                                    <div class="counter-content">
                                        <h6 class="count-title">EXPERT TEAM</h6>
                                        <div class="counter-no">
                                            <span class="counter">3</span>K+
                                        </div>
                                        <div class="Completed">
                                            Complete Projects
                                        </div>
                                    </div>
                                </div>
                                <div class="counter-inner">
                                    <div class="counter-content">
                                        <h6 class="count-title">BRANCHES</h6>
                                        <div class="counter-no">
                                            <span class="counter">15</span>+
                                        </div>
                                        <div class="Completed">
                                            Company Sector
                                        </div>
                                    </div>
                                </div>
                                <div class="counter-inner">
                                    <figure class="count-img figure-border-round">
                                        <div class="video-button">
                                            <a id="video-container" data-video-id="IUN664s7N-c">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </figure>
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
                                <a href="single-page.html">Website Develop Planning</a>
                            </h5>
                            <p class="service-paragraph">
                                Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                            </p>
                            <a href="single-page.html" class="service-btn">READ MORE
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
                                <a href="single-page.html">Graphic & Sketch Designing</a>
                            </h5>
                            <p class="service-paragraph">
                                Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                            </p>
                            <a href="single-page.html" class="service-btn">READ MORE
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
                                <a href="single-page.html">SEO & Content Writing</a>
                            </h5>
                            <p class="service-paragraph">
                                Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                            </p>
                            <a href="single-page.html" class="service-btn">READ MORE
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
                                <a href="single-page.html">Digital Marketing Startegy</a>
                            </h5>
                            <p class="service-paragraph">
                                Illo tempor unde ornare ipsum vivamus facilis? Tempus mollit secate inn.
                            </p>
                            <a href="single-page.html" class="service-btn">READ MORE
                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home-v2-service-btn text-center">
                        <a href="service.html" class="button-round-primary">MORE SERVICES</a>
                    </div>
                </div>
            </section>
            <!-- home process section start -->
            <section class="home-process-v2-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-head-v2-white col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                        <div class="title-divider-left">
                            OUR PROCESS
                        </div>
                        <h2 class="section-title">
                            We Follow These Flowless Process !
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
                                        Research Project
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
                                        Evaluate Plans
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
                                        Best Results
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
            <!-- home-blog-v2-section -->
            <section class="home-blog-v2-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-head-v2 text-center">
                                <div class="title-divider-left">
                                    OUR BLOGS
                                </div>
                                <h2 class="section-title">
                                    Checkout Our Latest Blog & Insights
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="blog-inner">
                        <div class="row d-flex justify-content-center justify-content-xl-start">
                            <div class="col-sm-6 col-lg-4">
                                <article class="post">
                                    <figure class="feature-image">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('') }}assets/img/agency-img16.jpg" alt="">
                                        </a>
                                        <span class="cat-meta"></span>
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="single-blog.html">Maxime rhoncus aliquet sint eu accusantium illum.</a>
                                        </h4>
                                        <p>
                                            Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur?
                                        </p>
                                        <a href="single-blog.html" class="blog-link"> READ MORE</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 ">
                                <article class="post">
                                    <figure class="feature-image">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('') }}assets/img/agency-img15.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="single-blog.html">Cursus egestas tristique viverra cum harum, ulla.</a>
                                        </h4>
                                        <p>
                                            Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur?
                                        </p>
                                        <a href="single-blog.html" class="blog-link"> READ MORE</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-6 col-lg-4 ">
                                <article class="post">
                                    <figure class="feature-image">
                                        <a href="single-post.html">
                                            <img src="{{ asset('') }}assets/img/agency-img14.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="single-blog.html">Felis platea eget justo, esse cumque dolorum.</a>
                                        </h4>
                                        <p>
                                            Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur?
                                        </p>
                                        <a href="single-blog.html" class="blog-link"> READ MORE</a>
                                    </div>
                                </article>
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
                                                <li>
                                                    <a href="https://twitter.com/?lang=en">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
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
                                                <li>
                                                    <a href="https://www.pinterest.com/">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
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
        <!-- footer part -->
        <footer id="colophon" class="site-footer footer-primary">
            <div class="footer-overlay"></div>
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pe-lg-4">
                            <aside class="widget widget_text img-textwidget">
                                <div class="footer-logo">
                                    <a href="index-2.html"><img src="{{ asset('') }}assets/images/logo.png" alt="logo"></a>
                                </div>
                                <div class="textwidget widget-text">
                                    Auctor blandit dolorem primis eius odit soluta molestie? Malesuada elementum aut doloremque labo.
                                </div>
                            </aside>
                            <div class="footer-social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget">
                                <div class="map-section">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">Contact Information</h3>
                                <p>Feel free to contact and reach us !</p>
                                <div class="textwidget widget-text">
                                    <ul>
                                        <li>
                                            <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                            3557 Derek Drive, Florida
                                        </li>
                                        <li>
                                            <a href="tel:+1456657887">
                                                <i aria-hidden="true" class="icon icon-phone1"></i>
                                                +1(456)657-887, +01 2599 12
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailtop:info@domain.com">
                                                <i aria-hidden="true" class="icon icon-envelope1"></i>
                                                <span class="__cf_email__" data-cfemail="563f3830391632393b373f387835393b">[email&#160;protected]</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="copy-right text-center">Copyright &copy; 2023 StarLabSys. All rights reserved.</div>
                </div>
            </div>
        </footer>
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/jquery/jquery.js"></script>
    <script src="{{ asset('') }}assets/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="{{ asset('') }}assets/vendors/counterup/jquery.counterup.js"></script>
    <script src="{{ asset('') }}assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/slick/slick.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="{{ asset('') }}assets/js/custom.js"></script>
<script>
(function(){var js = "window['__CF$cv$params']={r:'821c23fdae09238c',t:'MTY5OTI2MTE2OC40NjcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/61b90d1d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


</html>
