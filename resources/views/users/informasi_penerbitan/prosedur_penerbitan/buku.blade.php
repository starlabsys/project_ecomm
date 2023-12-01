@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Penerbitan Buku</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!--  faQ detail section html start -->
        <div class="faq-page-section">
            <div class="container">
                <div class="faq-page-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head">
                                <h3 class="section-title">
                                    <span class="title-highlight"> Prosedur </span>
                                    Penerbitan Buku
                                </h3>
                                <div class="section-disc">
                                    <p>
                                        Terima kasih atas minat Anda untuk menerbitkan buku bersama Untan Press. Kami sangat antusias untuk membantu mewujudkan impian Anda menjadi seorang penulis. Berikut adalah langkah-langkah penerbitan buku di Untan Press.
                                    </p>
                                </div>
                            </div>
                            <div id="accordion-tab-one" class="accordion-content" role="tablist">
                                <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A">
                                    <div class="card-header" role="tab" id="qus-A">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                                                Tahap 1: Pengajuan Naskah
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-one" class="collapse show" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A">
                                        <div class="card-body">
                                            Persyaratan pengajuan naskah (Klik di sini untuk mengetahui persyaratan)
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-B">
                                    <div class="card-header" role="tab" id="qus-B">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                                Tahap 2: Evaluasi Naskah
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-B">
                                        <div class="card-body">
                                            <ul>
                                                <li>Editing substantif</li>
                                                <li>Editing mekanis</li>
                                                <li>Proofreading</li>
                                                <li>Revisi</li>
                                                <li>*Maksimal 45 hari</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-C">
                                    <div class="card-header" role="tab" id="qus-C">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true" aria-controls="collapse-three">
                                                Tahap 3: Desain dan Layout
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-three" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-C">
                                        <div class="card-body">
                                            <ul>
                                                <li>Layout</li>
                                                <li>Desain cover</li>
                                                <li>Cetak dummy</li>
                                                <li>*Maksimal 14 hari</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-D" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-D">
                                    <div class="card-header" role="tab" id="qus-D">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-four" aria-expanded="true" aria-controls="collapse-four">
                                                Tahap 4: Penerbitan
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-four" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-D">
                                        <div class="card-body">
                                            <ul>
                                                <li>Proses ISBN</li>
                                                <li>*Maksimal 10 hari</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-E" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-E">
                                    <div class="card-header" role="tab" id="qus-E">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                                Tahap 5: Pencetakan dan Distribusi (opsional)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-five" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-E">
                                        <div class="card-body">
                                            <ul>
                                                <li>Proses pencetakan buku secara fisik</li>
                                                <li>Rincian distribusi dan penyebaran buku ke toko buku, platform online, dan pasar lainnya</li>
                                                <li>Strategi pemasaran dan promosi</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                    <div class="card-header" role="tab" id="qus-F">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="true" aria-controls="collapse-six">
                                                Tahap 6: Peluncuran Buku dan Pemasaran (opsional)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-F">
                                        <div class="card-body">
                                            <ul>
                                                <li>Promosi</li>
                                                <li>Pemanfaatan media sosial, acara buku, dan saluran pemasaran lainnya</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <p>Prosedur penerbitan buku dengan penerbit kami adalah perjalanan kolaboratif yang dijalani bersama-sama. Kami berkomitmen untuk mendukung mewujudkan impian Anda menjadi seorang penulis.</p>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <a href="contact.html" class="button-round-primary">Terbitkan Buku Saya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
