@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <div class="comming-soon-section" style="background-image: url(assets/img/agency-img01.jpg);">
            <div class="container">
                <div class="comming-soon-wrap">
                    <section class="site-identity">
                        <h1 class="site-title">
                            <a href="index-2.html">
                                <img class="white-logo" src="assets/images/logo.png" alt="logo" width="20%">
                            </a>
                        </h1>
                    </section>
                    <article class="comming-soon-content">
                        <h2 class="section-title">
                            We are coming soon !!
                        </h2>
                        <h6>Something awesome is in the works</h6>
                    </article>
                    <!-- Time count down html -->
                    <div class="time-counter-wrap">
                        <div class="time-counter" data-date="2023-12-24 23:58:58">
                            <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                            <div class="counter-time">
                                <span class="counter-days">39</span>
                                <span class="label-text">Days</span>
                            </div>
                            <div class="counter-time">
                                <span class="counter-hours">10</span>
                                <span class="label-text">Hours</span>
                            </div>
                            <div class="counter-time">
                                <span class="counter-minutes">46</span>
                                <span class="label-text">Minutes</span>
                            </div>
                            <div class="counter-time">
                                <span class="counter-seconds">50</span>
                                <span class="label-text">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>

    </main>

@endsection
