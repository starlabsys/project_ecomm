@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Jenis Naskah</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!-- home gallery section html start -->
        <section class="gallery-section">
            <div class="container">
                <div class="gallery-inner">
                    <div class="gallery-container">
                        @foreach($resp as $key)

                            <div class="single-gallery">
                                <figure class="gallery-img">
                                    <a href="assets/img/agency-img27.jpg" data-fancybox="gallery">
                                        <img src="{{asset('')}}foto_naskah/{{$key['foto_naskah']}}" alt="" style="height: 250px; object-fit: cover">
                                    </a>
                                    <div class="facility-wrapper" style="padding: 20px 20px">
                                        <div class="facility-content">
                                            <h4 class="facility-title">
                                                <a href="{{url('buku-monograf')}}">{{$key['nama_naskah']}}</a>
                                            </h4>
                                            <p class="facility-info">
                                                {{$key['konten_naskah']}}
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                        @endforeach

{{--                        <div class="single-gallery">--}}
{{--                            <figure class="gallery-img">--}}
{{--                                <a href="assets/img/agency-img26.jpg" data-fancybox="gallery">--}}
{{--                                    <img src="assets/img/agency-img26.jpg" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="facility-wrapper">--}}
{{--                                    <div class="facility-content">--}}
{{--                                        <h4 class="facility-title">--}}
{{--                                            <a href="{{url('buku-referensi')}}">Buku Referensi</a>--}}
{{--                                        </h4>--}}
{{--                                        <p class="facility-info">--}}
{{--                                            Buku referensi adalah kumpulan informasi terstruktur untuk acuan, cocok untuk siswa, mahasiswa, dan peneliti. Ciri khasnya termasuk struktur jelas, indeks, dan pengorganisasian sistematis. Jenisnya beragam, seperti ensiklopedia, kamus, atau panduan, memberikan informasi terpercaya dalam format yang singkat.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="single-gallery">--}}
{{--                            <figure class="gallery-img">--}}
{{--                                <a href="assets/img/agency-img25.jpg" data-fancybox="gallery">--}}
{{--                                    <img src="assets/img/agency-img25.jpg" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="facility-wrapper">--}}
{{--                                    <div class="facility-content">--}}
{{--                                        <h4 class="facility-title">--}}
{{--                                            <a href="{{url('buku-ajar-atau-modul')}}">Buku Ajar/Modul</a>--}}
{{--                                        </h4>--}}
{{--                                        <p class="facility-info">--}}
{{--                                            Buku ajar atau modul adalah materi pembelajaran terstruktur untuk pendidikan formal, menyampaikan informasi dengan cara terorganisir dan mudah dipahami. Dengan ciri bahasa jelas, urutan logis, dan latihan, buku ini membantu siswa memahami materi secara efektif.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="single-gallery">--}}
{{--                            <figure class="gallery-img">--}}
{{--                                <a href="assets/img/agency-img24.jpg" data-fancybox="gallery">--}}
{{--                                    <img src="assets/img/agency-img24.jpg" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="facility-wrapper">--}}
{{--                                    <div class="facility-content">--}}
{{--                                        <h4 class="facility-title">--}}
{{--                                            <a href="{{url('buku-umum')}}">Buku Umum</a>--}}
{{--                                        </h4>--}}
{{--                                        <p class="facility-info">--}}
{{--                                            Buku umum untuk pembaca umum, beragam genre, informasi, dan cerita menarik dengan bahasa sederhana. Menghibur, mendidik, dan memperluas wawasan, berperan dalam mempromosikan kegiatan membaca.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="single-gallery">--}}
{{--                            <figure class="gallery-img">--}}
{{--                                <a href="assets/img/agency-img23.jpg" data-fancybox="gallery">--}}
{{--                                    <img src="assets/img/agency-img23.jpg" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="facility-wrapper">--}}
{{--                                    <div class="facility-content">--}}
{{--                                        <h4 class="facility-title">--}}
{{--                                            <a href="{{url('prosiding')}}">Prosiding</a>--}}
{{--                                        </h4>--}}
{{--                                        <p class="facility-info">--}}
{{--                                            Prosiding konferensi/seminar adalah kumpulan tulisan ilmiah dari acara tersebut, melalui seleksi atau peer-review. Diterbitkan dalam buku atau publikasi elektronik, menjadi acuan penting bagi akademisi, peneliti, dan praktisi dalam berbagai disiplin ilmu.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="single-gallery">--}}
{{--                            <figure class="gallery-img">--}}
{{--                                <a href="assets/img/agency-img7.jpg" data-fancybox="gallery">--}}
{{--                                    <img src="assets/img/agency-img7.jpg" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="facility-wrapper">--}}
{{--                                    <div class="facility-content">--}}
{{--                                        <h4 class="facility-title">--}}
{{--                                            <a href="{{url('buku-fiksi')}}">Buku Fiksi</a>--}}
{{--                                        </h4>--}}
{{--                                        <p class="facility-info">--}}
{{--                                            Buku fiksi adalah cerita imajinatif dengan karakter, tempat, dan alur kreatif, bertujuan menghibur pembaca. Jenisnya, seperti novel, cerita pendek, misteri, fantasi, romance, dan sci-fi, memberikan pengalaman berbeda dalam membaca.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!-- home gallery section html end -->

    </main>

@endsection
