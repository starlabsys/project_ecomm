@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Layout</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    {!! $layout['konten']  !!}
{{--                    <p>Untan Press mempersembahkan layanan layout buku profesional. Kami memahami bahwa tata letak yang tepat sangat penting dalam membawa karya tulis Anda ke tingkat yang lebih tinggi. Tim ahli kami siap untuk memberikan sentuhan akhir yang elegan pada buku Anda dan memastikan bahwa setiap halaman mencerminkan keindahan dan profesionalisme yang Anda harapkan.</p>--}}
{{--                    <p>Tata letak buku yang baik merupakan faktor kunci dalam pengalaman membaca yang menyenangkan karena tata letak yang profesional dapat meningkatkan pemahaman, navigasi, dan keterbacaan buku, sehingga memudahkan pembaca untuk menjelajahi dan memahami isi buku dengan lebih baik. Selain itu, tata letak yang tepat juga dapat memengaruhi citra penulis dan penerbit dengan mencerminkan tingkat profesionalisme dan perhatian terhadap detail, memberikan kesan positif kepada pembaca dan meningkatkan reputasi mereka di dunia penerbitan.</p>--}}
{{--                    <p>Poin-poin utama dalam pengerjaan layout buku yang kami lakukan adalah:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Konsultasi awal: Memahami visi dan tujuan buku Anda</li>--}}
{{--                        <li style="font-weight: bold">Penentuan gaya tata letak: preferensi desain, pemilihan font, pengaturan paragraf, dll.</li>--}}
{{--                        <li style="font-weight: bold">Pembuatan desain awal: Menyusun layout awal berdasarkan panduan yang telah disepakati</li>--}}
{{--                        <li style="font-weight: bold">Revisi dan pengembangan: Melakukan perubahan dan penyesuaian berdasarkan umpan balik dari penulis atau penerbit</li>--}}
{{--                        <li style="font-weight: bold">Finalisasi dan pengiriman: Menyelesaikan layout buku dengan presisi dan pengiriman file PDF</li>--}}
{{--                    </ul>--}}
{{--                    <p>Cakupan teknis pengerjaan layout buku yang kami lakukan adalah:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Layout memenuhi persyaratan ISBN</li>--}}
{{--                        <li style="font-weight: bold">Tata letak naskah</li>--}}
{{--                        <li style="font-weight: bold">Header dan footer</li>--}}
{{--                        <li style="font-weight: bold">Penomoran halaman</li>--}}
{{--                        <li style="font-weight: bold">Daftar isi, daftar gambar, daftar tabel, daftar pustaka, indeks, dan glosarium</li>--}}
{{--                    </ul>--}}
                    <blockquote>
                        <div class="row">
                            <div class="col-md-12 text-center" style="font-weight: bold;">
                                <p class="justify-center">
                                    Tarif : {{$formatMataUang}}
                                </p>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="contact.html" class="button-round-primary">Layout naskah saya</a>
                            </div>
                        </div>
                    </blockquote>
{{--                    <p>Lama pengerjaan: 7 hari (tidak termasuk waktu konfirmasi ke penulis)</p>--}}
{{--                    <p>Spesifikasi teknis:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Ukuran Buku A5 (14×21, 13×19), marjin 3, 3, 2.5, 3</li>--}}
{{--                        <li style="font-weight: bold">Font 12 pt</li>--}}
{{--                        <li style="font-weight: bold">Max 150 Halaman</li>--}}
{{--                        <li style="font-weight: bold">Tambahan biaya Rp 30.000/10 halaman (Rp 30.000/2.000 kata)</li>--}}
{{--                    </ul>--}}
{{--                    <a href=""><p>Beberapa contoh layout buku sebelumnya yang telah kami hasilkan.</p></a>--}}
{{--                    <p>Kami percaya bahwa setiap kata yang ditulis layak mendapatkan tata letak yang tepat. Kami berkomitmen untuk membantu penulis dan penerbit menghadirkan karya mereka dengan elegansi dan profesionalisme. Hubungi kami sekarang untuk mendapatkan layout buku yang memukau dan menampilkan isi dengan indah.</p>--}}
                </div>
            </div>
        </div>

    </main>

@endsection
