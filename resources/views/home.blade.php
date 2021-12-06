<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundry | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{ url('frontend/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class=""><a href="index.html"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="{{ url('frontend/img/icon/call.png') }}" alt="">
                        (08)
                        728 256 266</a>
                    <a href="#" class="header-btn2">Home</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Quality laundry service in your
                                        city</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s" class="mb-30">Tulis Nomor
                                        Resi</p>
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('search') }}" method="get">
                                            {{ csrf_field() }}
                                            <div class="input-group">
                                                <div class="form-outline">
                                                    <div class="form-group w-100 mb-3">
                                                        <input type="text" name="search"
                                                            class="form-control w-75 d-inline" id="search"
                                                            value="{{ old('search') }}" placeholder="Masukkan resi">
                                                        <button href="#" type="submit" class="btn hero-btn mt-30"
                                                            data-animation="fadeInLeft" data-delay="0.7s">Cek Resi
                                                            Pesanan</button>
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Price List</span>
                            <h2>Price List Laundry</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ url('frontend/img/icon/t-shirt.png') }} " width=105 height=105 alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Cuci Kering</a></h5>
                                <p>Pakaian kamu bau dan belum pernah di cuci selama 1 minggu 😮 kami ada solusinya,
                                    dengan memilih paket Cuci Kering hanya <b>Rp 3500 / kg</b> pakaian kamu akan
                                    kinclong dan
                                    harum seperti baru</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ url('frontend/img/icon/iron.png') }}" width=105 height=105 alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Setrika</a></h5>
                                <p>Pakaian kamu lusut dan ingin segera rapih, paket ini cocok untuk mengatasi masalah
                                    kamu karena hanya dengan <b>Rp 2.000 / kg</b> kamu akan menikmati pakaian yang super
                                    rapih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ url('frontend/img/icon/ironing.png') }}" width=105 height=105 alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Cuci Kering + Setrika</a></h5>
                                <p>Pakian yang lusuh kadang membuat terganggu ingin dekat dengan orang, kami ada solusi
                                    nya. dengan Paket Cuci Kering + Setrika hanya <b>Rp 5.000 / kg </b> kamu bisa pede
                                    dekat
                                    dengan dengan orang lain, atau pasangan mu. dijamiin mantan mu bakal terpesona
                                    melihat kamu (klo goodloking) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->


        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{ url('frontend/img/gallery/laundry-photoss.jpg') }}" width=100px height=500px alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>Tentang Aplikasi</h2>
                            </div>
                            <p class="mb-20">
                                Aplikasi Laundry ini memudahkan konsumen dan yang punya toko untuk manajemen toko nya agar
                                lebih sistematis dalam penjualan 
                            </p>
                            <p class="mb-30">Aplikasi ini bisa digunakan untuk siapa saja yang ingin menggunakan toko laundry nya
                            agar lebih tersistematis manajemen</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="{{ url('frontend/img/logo/logo2_footer.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis
                                            viverra ornare, eros dolor interdum nulla.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Menyediakan</h4>
                                <ul>
                                    <li><a href="#">- Cuci Kering</a></li>
                                    <li><a href="#">- Setrika</a></li>
                                    <li><a href="#">- Cuci Kering + Setrika</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hubungi</h4>
                                <ul>
                                    <li class="number"><a href="#">(90) 898 789-8957</a></li>
                                    <li><a href="#">laundry@gmail.com</a></li>
                                    <li><a href="#">Jawa Timur, Indonesia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src=".{{ url('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=".{{ url('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src=".{{ url('frontend/js/popper.min.js') }}"></script>
    <script src=".{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=".{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <script src=".{{ url('frontend/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=".{{ url('frontend/js/wow.min.js') }}"></script>
    <script src=".{{ url('frontend/js/animated.headline.js') }}"></script>
    <script src=".{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src=".{{ url('frontend/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src=".{{ url('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src=".{{ url('frontend/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src=".{{ url('frontend/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=".{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src=".{{ url('frontend/js/waypoints.min.js') }}"></script>
    <script src=".{{ url('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src=".{{ url('frontend/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src=".{{ 'frontend/js/contact.js' }}"></script>
    <script src=".{{ 'frontend/js/jquery.form.js' }}"></script>
    <script src=".{{ 'frontend/js/jquery.validate.min.js' }}"></script>
    <script src=".{{ 'frontend/js/mail-script.js' }}"></script>
    <script src=".{{ 'frontend/js/jquery.ajaxchimp.min.js' }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=".{{ 'frontend/js/plugins.js' }}"></script>
    <script src=".{{ 'frontend/js/main.js' }}"></script>

</body>

</html>
