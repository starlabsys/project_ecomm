@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Desain Cover</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    {!! $desaincover['konten']  !!}
                    <blockquote>
                        <div class="row">
                            <div class="col-md-12 text-center" style="font-weight: bold;">
                                <p class="justify-center">
                                    Tarif : {{$formatMataUang}}
                                </p>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="contact.html" class="button-round-primary">Ajukan Sekarang</a>
                            </div>
                        </div>
                    </blockquote>
{{--                    <p>Lama pengerjaan: 7 hari (tidak termasuk waktu konfirmasi ke penulis)</p>--}}
{{--                    <p>Beberapa contoh desain cover buku sebelumnya yang telah kami hasilkan.</p>--}}
{{--                    <p>Kami percaya bahwa setiap buku memiliki kisah yang unik dan penting untuk diceritakan.</p>--}}
                </div>
            </div>
        </div>

    </main>

@endsection
