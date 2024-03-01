@extends('layouts.main_front')

@section('content')
    <main id="content" class="site-main">

        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/agency-img01.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Prosedur Penerbitan Prosiding</h1>
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
                                @foreach($prosiding as $key)
                                    <div id="accordion-A{{$key->id}}" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A{{$key->id}}">
                                        <div class="card-header" role="tab" id="qus-A{{$key->id}}">
                                            <h5 class="mb-0">
                                                <a data-bs-toggle="collapse" href="#collapse-one{{$key->id}}" aria-expanded="true" aria-controls="collapse-one{{$key->id}}">
                                                    {{$key->judul_prosedur}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-one{{$key->id}}" class="collapse {{$key->id == 4 ? "show" : ""}}" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A{{$key->id}}">
                                            <div class="card-body">
                                                {!!$key->isi_prosedur!!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
