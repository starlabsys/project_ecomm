@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Team Kami</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!-- home team section html start -->
        <section class="team-section">
            <div class="container">
                <div class="group-member">
                    <div class="row">
                        @foreach($resp as $key)
                            <div class="col-sm-6 col-lg-3 p-3">
                                <div class="team-item">
                                    <figure class="team-img">
                                        <img src="{{asset('')}}foto_anggota/{{$key['foto_anggota']}}" alt="">
                                    </figure>
                                    <div class="team-content">
                                        <h4>
                                            {{$key['nama_anggota']}}
                                        </h4>
                                        <span>{{$key['jabatan_anggota']}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="header-social social-links team-social-link">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/{{$key['facebook_anggota']}}" target="_blank">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/{{$key['twitter_anggota']}}" target="_blank">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/{{$key['youtube_anggota']}}" target="_blank">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/{{$key['instagram_anggota']}}" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
