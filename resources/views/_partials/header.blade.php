<header id="masthead" class="site-header">
    <div class="container">
        <div class="hgroup-wrap d-flex justify-content-between align-items-sm-center">
            <div class="site-identity">
                <p class="site-title">
                    <a href="">
                        <img src="{{ asset('') }}assets/images/logo.png" alt="logo">
                    </a>
                </p>
            </div>
            <div class="main-navigation">
                <nav id="navigation" class="navigation d-none d-lg-inline-block">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Profil</a>
                            <ul>
                                <li>
                                    <a href="{{url('sejarah')}}">Sejarah</a>
                                </li>
                                <li>
                                    <a href="{{url('tim-kami')}}">Tim Kami</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Layanan</a>
                            <ul>
                                <li>
                                    <a href="{{url('pengajuan-isbn')}}">Pengajuan ISBN</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-desain-cover')}}">Desain Cover</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-layout')}}">Layout</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-proofreading')}}">Proofrading</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-editing-mekanis')}}">Editing Mekanis</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-editing-subtantif')}}">Editing Substantif</a>
                                </li>
                                <li>
                                    <a href="{{url('pengajuan-paket-penerbitan')}}">Paket Penerbitan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Informasi Penerbitan</a>
                            <ul>
                                <li class="">
                                    <a href="{{url('informasi-penerbitan-jenis-naskah')}}">Jenis Naskah</a>
                                </li>
                                <li>
                                    <a href="{{url('informasi-penerbitan-prosedur-penerbitan')}}">Prosedur Penerbitan</a>
                                </li>
                                <li>
                                    <a href="{{url('informasi-penerbitan-persyaratan-ISBN')}}">Persyaratan ISBN</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Etalase</a>
                            <ul>
                                <li>
                                    <a href="{{url('etalase-best-seller')}}">Best Seller</a>
                                </li>
                                <li>
                                    <a href="{{url('etalase-sedang-diskon')}}">Sedang Diskon</a>
                                </li>
                                <li>
                                    <a href="{{url('etalase-buku-baru')}}">Buku Baru</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('segera-terbit')}}">Segera Terbit</a>
                        </li>
                        <li>
                            <a href="{{url('kontak-kami')}}">Kontak Kami</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Jaminan Mutu</a>
                            <ul>
                                <li>
                                    <a href="{{url('jaminan-mutu-sistem-dokumentasi')}}">Sistem Dokumentasi</a>
                                </li>
                                <li>
                                    <a href="{{url('jaminan-mutu-audit')}}">Audit</a>
                                </li>
                                <li>
                                    <a href="{{url('jaminan-mutu-tinjauan-manajemen')}}">Tinjauan Manajemen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('download')}}">Download</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="side-nav d-flex justify-content-between align-items-center">
                <div class="header-btn d-inline-block">
                    <a href="{{url('login')}}" class="button-round-primary">Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
