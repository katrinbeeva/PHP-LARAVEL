@extends('layouts.app')
@section('header') <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.html">Българския театър<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a href="/">Начало</a></li>
            <li><a href="/performance_view">Представления</a></li>
            <li><a href="/venue_view">Места за провеждане</a></li>
            <li><a href="/ticket_view">Билети</a></li>
                </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <!-- Търсачка -->
    <li class="search">
        <form action="/performance" method="GET">

            <label for="search" class="sr-only">
                Search
            </label>
            <input type="text" name="s" placeholder="Търси....">
            <a href="#">
                <span class="lnr lnr-magnifier"></span>
            </a>
        </form>
    </li>

</div>@endsection
@section('about-us')
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Никога не бива да забравяме, че театралната сцена служи за всенародно училище.
                </h3>
                <p class="fst-italic">
                    Театърът е вид сценично изкуство,
                    което се състои от изиграване на сценарии или истории пред публика,
                    при което се използва съчетание от реч, жестове, музика, танц, звук и зрелище.
                </p>

                <p>
                    В основата на драматичното действие стои конфликт, чието разрешение или неразрешение провокира размисъл.
                    Целта на театъра е да предизвика у зрителите катарзис. Като всяко изкуство,
                    той представлява покана за разговор – елемент от един безкраен диалог.
                </p>
            </div>
        </div>

    </div>
@endsection
@section('service')  <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Постановки</h2>
        <p>Скорошни постановки</p>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Забранените фокуси на Ненчо</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Sed ut perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">Dele cardo</a></h4>
                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Divera don</a></h4>
                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
        </div>

    </div>

</div>@endsection
@section('zoom-in')  <div class="container" data-aos="zoom-in">

    <div class="text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
    </div>

</div>@endsection
@section('footer-top')<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                    <h3>Българският Театър<span>.</span></h3>
                    <p>
                        България <br><br>
                        <strong>Телефон за контакт:</strong> +359 878 17 3419<br>
                        <strong>Имейл:</strong> bulgarian_theatre@abv.bg <br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Полезни линкове</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="/">Начало</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/performance_view">Представления</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/venue_view">Места за провеждане</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/ticket_view">Билети</a></li>

                </ul>
            </div>



            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Абонирай се</h4>
                <p>Абонирай се, за да получаваш известие всеки път, когато има постановка в твоя град</p>
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Абонирай се">
                </form>

            </div>
            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Абонирай се</h4>
                <p>Абонирай се, за да получаваш известие всеки път, когато има постановка в твоя град</p>
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Абонирай се">
                </form>

            </div>

        </div>
    </div>
</div>@endsection
@section('copyright')<div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>@endsection
