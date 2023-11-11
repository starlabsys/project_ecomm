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


        @yield('content')
        <!-- footer part -->
        @include('_partials.footer')
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
