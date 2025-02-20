<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Assalaam News</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/logo-abbr.png') }}" width="50px"/>

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/ticker-style.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset ('frontend/assets/css/style.css') }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   </head>

   <body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/assets/img/logo/logoassalaam.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logoassalaam.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky mt-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="{{ asset ('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav style="width: 130%;">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="categori.html">Category</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="latest_news.html">Comment</a></li>
                                            <li style="margin-bottom: -1%; margin-left: 55%;" >
                                                <div class="col-xl-2 col-lg-2 col-md-4">
                                                    <div class="header-right-btn f-right d-none d-lg-block">
                                                        <i class="fas fa-search special-tag"></i>
                                                        <div class="search-box">
                                                            <form action="#">
                                                                <input type="text" placeholder="Search">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="text-align: right">@if (Route::has('login'))
                                                @auth
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                {{-- @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                @endif --}}
                                                @endauth
                                                @endif
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>

                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        {{-- Content --}}
        @include('include.frontend.tranding')

        @include('include.frontend.category')
            {{-- Content --}}
    </main>

   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-6 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset ('frontend/assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>
                                            Selamat datang di Assalaam News,
                                            di mana pengetahuan ditemukan dan membangun inspirasi bagi kalian yang membaca. Di Website ini,
                                            kami menyediakan banyak artikel yang dapat anda baca. Kami adalah komunitas yang berdedikasi
                                            untuk memberikan konten - konten yang bersifat mendukung dan inspiratif bagi pembaca.
                                        </p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://www.youtube.com/@smkassalaambandung4011"><i class="bi bi-youtube"></i></a>
                                    <a href="https://www.instagram.com/smkassalaam/?hl=en"><i class="fab fa-instagram"></i></a>
                                    <a href="https://smkassalaambandung.sch.id/"><i class="bi bi-browser-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-80">
                            <div class="footer-tittle">
                                <h1>Tautan Cepat</h1>
                            </div>
                            <div class="instagram-gellay">
                                <ul style="color:dimgrey ;">
                                    <li><a href="#"><p>Home</p></a></li>
                                    <li><a href="#"><p>Category</p></a></li>
                                    <li><a href="#"><p>About</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-12">
                            <div class="footer-copy-right" style="text-align: center">
                                <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Portal Website | Assalaam News by <a href="https://www.instagram.com/_fikrierwana/#" target="_blank">Fikri Erwana</a>
                                </p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset ('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset ('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset ('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset ('frontend/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset ('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./{{ asset ('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="./{{ asset ('frontend/assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./{{ asset ('frontend/assets/js/wow.min.js') }}"></script>
		<script src="./{{ asset ('frontend/assets/js/animated.headline.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

        <!-- Breaking New Pluging -->
        <script src="./{{ asset ('frontend/assets/js/jquery.ticker.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/site.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./{{ asset ('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="./{{ asset ('frontend/assets/js/jquery.sticky.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset ('frontend/assets/js/contact.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/jquery.form.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/jquery.validate.min.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/mail-script.js') }}"></script>
        <script src="./{{ asset ('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./{{ asset ('frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset ('frontend/assets/js/main.js') }}"></script>
    </body>
</html>
