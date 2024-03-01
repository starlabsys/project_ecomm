@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Editing Mekanis</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <div class="page-content">
                    {!! $editingmekanis['konten']  !!}
{{--                    <p>Untan Press mempersembahkan layanan editing mekanis yang akan membantu mencapai kesempurnaan dalam setiap halaman karya Anda. Kami bekerja untuk meningkatkan kualitas dan profesionalisme karya tulis Anda.</p>--}}
{{--                    <p>Editing mekanis memiliki sejumlah keunggulan dan manfaat yang signifikan dalam menyempurnakan naskah. Editing mekanis dapat mendeteksi dan memperbaiki kesalahan tata bahasa, ejaan, dan tanda baca yang sering terlewatkan. Hal ini membantu meningkatkan kualitas keseluruhan naskah dengan memastikan kesalahan mekanis yang mengganggu pemahaman dan keterbacaan dihilangkan. Dengan demikian, editing mekanis dapat meningkatkan kualitas keseluruhan dan menjadikannya pilihan yang menguntungkan bagi penulis dan penerbit.</p>--}}
{{--                    <p>Poin-poin utama dalam pengerjaan editing mekanis yang kami lakukan:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Pemeriksaan awal: Analisis menyeluruh terhadap teks untuk mengidentifikasi kesalahan dan kekurangan</li>--}}
{{--                        <li style="font-weight: bold">Koreksi dan perbaikan: Memperbaiki kesalahan tata bahasa, ejaan, tanda baca, dan teknik sitasi</li>--}}
{{--                        <li style="font-weight: bold">Verifikasi dan validasi: Memastikan bahwa teks telah diperiksa secara menyeluruh dan kualitasnya telah ditingkatkan</li>--}}
{{--                        <li style="font-weight: bold">Revisi dan diskusi: Mengkomunikasikan hasil editing dengan penulis untuk memastikan semua perubahan telah disetujui</li>--}}
{{--                    </ul>--}}
{{--                    <p>Cakupan teknis pengerjaan editing mekanis yang kami lakukan adalah:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Mengecek ejaan</li>--}}
{{--                        <li style="font-weight: bold">Pemenggalan kata yang mengacu pada KBBI</li>--}}
{{--                        <li style="font-weight: bold">Konsistensi terhadap nama dan istilah</li>--}}
{{--                        <li style="font-weight: bold">Konsistensi judul dan penomoran bab</li>--}}
{{--                        <li style="font-weight: bold">Memperhatikan tanda baca</li>--}}
{{--                        <li style="font-weight: bold">Teknik sitasi</li>--}}
{{--                    </ul>--}}
                    <blockquote>
                        <div class="row">
                            <div class="col-md-12 text-center" style="font-weight: bold;">
                                <p class="justify-center">
                                    Tarif : {{$formatMataUang}}
                                </p>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="contact.html" class="button-round-primary">Saya Perlu Editing Mekanis</a>
                            </div>
                        </div>
                    </blockquote>
{{--                    <p>Lama pengerjaan: 14 hari (tidak termasuk waktu konfirmasi ke penulis)</p>--}}
{{--                    <p>Spesifikasi teknis:</p>--}}
{{--                    <ul class="">--}}
{{--                        <li style="font-weight: bold">Ukuran Buku A5 (14×21, 13×19), marjin 3, 3, 2.5, 3</li>--}}
{{--                        <li style="font-weight: bold">Font 12 pt</li>--}}
{{--                        <li style="font-weight: bold">Max 150 Halaman</li>--}}
{{--                        <li style="font-weight: bold">Tambahan biaya Rp 60.000/10 halaman (Rp 60.000/2.000 kata)</li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>

    </main>

@endsection
