@extends('layouts.app')
@section('header') <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
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
            <table class="styled-table">
                <style>
                    table, th, td {
                        border: 1px solid black;
                    }
                </style>
                <thead>
                <tr>
                    <th>Вид билет</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ticket as $ticket)
                    <tr>
                        <td>{{$ticket->type_of_ticket}}</td>
                        <td>{{$ticket->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
@section('footer-top')<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                    <h3>Gp<span>.</span></h3>
                    <p>
                        A108 Adam Street <br>
                        NY 535022, USA<br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
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
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
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
