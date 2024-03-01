<footer id="colophon" class="site-footer footer-primary">
    <div class="footer-overlay"></div>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 pe-lg-4">
                    <aside class="widget widget_text img-textwidget">
                        <div class="footer-logo">
                            <a href="index-2.html"><img src="{{ asset('') }}assets/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="textwidget widget-text">
                            Auctor blandit dolorem primis eius odit soluta molestie? Malesuada elementum aut doloremque labo.
                        </div>
                    </aside>
                    <div class="footer-social-links">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <aside class="widget">
                        <div class="map-section">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget_text">
                        <h3 class="widget-title">Kontak Kami</h3>
                        <div class="textwidget widget-text">
                            <?php
                                $kontakData = App\Helpers\Format::footerFormat();
                            ?>

                            <ul>
                                @foreach($kontakData as $dataKey)
                                    <?php
//                                        $icon = $dataKey['icon'];
                                    ?>
                                    <li>
                                        <i aria-hidden="true" class="icon "></i>
{{--                                        3557 Derek Drive, Florida--}}
                                        {{ $dataKey['judul_kontak'] }}
                                        {!! $dataKey['isi_kontak']!!}
                                    </li>
                                @endforeach
{{--                                <li>--}}
{{--                                    <a href="tel:+1456657887">--}}
{{--                                        <i aria-hidden="true" class="icon icon-phone1"></i>--}}
{{--                                        +1(456)657-887, +01 2599 12--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="mailtop:info@domain.com">--}}
{{--                                        <i aria-hidden="true" class="icon icon-envelope1"></i>--}}
{{--                                        <span class="__cf_email__" data-cfemail="563f3830391632393b373f387835393b">[email&#160;protected]</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="copy-right text-center">Copyright &copy; 2023 StarLabSys. All rights reserved.</div>
        </div>
    </div>
</footer>
