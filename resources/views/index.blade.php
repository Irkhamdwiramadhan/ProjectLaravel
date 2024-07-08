<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Parking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
</head>

<body id="home">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">DIgital<span>parking</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#area_palkir" class="nav-link">Area Parkir</a>
                    </li>
                    <!-- <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
                    @guest
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#pendaftaran" class="nav-link">Pendaftaran</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('register')}}" class="nav-link">Registrasi</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/kendaraan/create" class="nav-link">Pendaftaran</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/dashboard" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>


                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap " style="background-image: url('asset/images/kampus_A.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Sistem Parkir STT Terpadu NF</h1>
                        <p style="font-size: 18px;">Digital Parking adalah pengelolaan retribusi parkir secara elektronik untuk kampus STT NF</p>
                        <!-- <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Easy steps for renting a car</span>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pendaftaran">
    <section class="ftco-section ftco-no-pt bg-light" >
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="#" class="request-form  bg-primary">
                                <strong>
                                    <h2>Peraturan Parkir</h2>
                                    <ul>
                                        <li>DOSEN STT NF</li>
                                        <p>Dosen dan Staf (tenaga pendidik maupun tenaga kependidikan) adalah individu yang memiliki account dan berstatus aktif atau tugas belajar. Berlaku aturan parkir khusus bagi dosen dan staf .</p>
                                    </ul>
                                    <ul>
                                        <li>
                                            MAHASISWA
                                        </li>
                                        <p>Berlaku aturan parkir khusus bagi mahasiswa STT terpadu Nurulfikri.</p>
                                    </ul>
                                    <ul>
                                        <li>UMUM</li>
                                        <p>Selain dosen, staff dan mahasiswa maka izin parkir akan dikenakan biaya parkir umum.</p>
                                    </ul>
                                </strong>

                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <strong>
                                    <h5>Tahapan Pendaftaran untuk user </h5>
                                    <h2>Daftarkan Kendaran Anda</h2>
                                    <ul>
                                        <li>
                                            klick menu atau garis tiga pada kanan atas bagi anda yang menggunakan hp
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            Registrasi terlebih dahulu untuk anda yang baru pertama kali mendaftar atau tidak mempunyai akun
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            Setelah registrasi klick login masukan akun anda sesuai yang anda daftarkan
                                        </li>
                                    </ul>
                                    <ul>

                                        <li>
                                            Setelah melewati login dengan benar menu nafbar akan berganti dari home,login dan registrasi menjadi home, dashboard, pendaftaran dan longout
                                        </li>
                                    </ul>
                                    <ul>

                                        <li>
                                            Selanjutnya klick pendaftraan untuk anda yang ingin mendaftarkan kendaraan dan klick dashboard untuk anda yang ingin melihat info sekilas kendaraan yang dipalkir
                                        </li>
                                    </ul>
                                    <ul>

                                        <li>

                                            isi form pendaftaran kendaraan sesuai dengan kendaraan anda

                                        </li>
                                    </ul>

                                </strong>
                                <!-- <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>


    <section class="ftco-section ftco-no-pt bg-light" id="area_palkir">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center  mb-5">

                    <h2 class="mb-2">Area Parkir</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(asset/img/nf1.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Parkiran Dosen & staff</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat"></span>
                                        <p class="price ml-auto"> </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(asset/img/nf3.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Parkiran Umum</a></h2>
                                    <div class="d-flex mb-3">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(asset/img/nf2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Parkiran Dosen & staff</a></h2>
                                    <div class="d-flex mb-3">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(asset/img/nf4.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Parkiran Mahasiswa</a></h2>
                                    <div class="d-flex mb-3">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>













    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class=""><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class=""><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class=""><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/aos.js')}}"></script>
    <script src="{{asset('asset/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('asset/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('asset/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('asset/js/google-map.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>

</body>

</html>