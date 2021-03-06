<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="PT. Boxity Central Indonesia" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/dark.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/magnific-popup.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/one-page/css/et-line.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/custom.css')!!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{!!asset('webpage/css/colors.php')!!}?color=2FC39C" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/demos/course/css/fonts.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/demos/course/course.css')!!}" type="text/css" />
    <link rel="shortcut icon" href="{!!asset('webpage/demos/marsiajar/logo.ico')!!}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/98c197c895.js" crossorigin="anonymous"></script>

    <!-- Document Description
	============================================= -->
    <title>Marsiajar - @yield('title')</title>
    <meta name="description" content="@yield('page_description')" />
    <meta name="keywords" content="marsiajar, @yield('page_keywords')" />

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
		============================================= -->
        <div id="top-bar" class="bg-color dark">
            <div class="container clearfix">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto me-md-auto">

                        <!-- Top Links
						============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">All Cities</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="#">Medan</a></li>
                                        <li class="top-links-item"><a href="#">Jakarta</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto px-0">

                        <!-- Top Links
						============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">Mulai berbagi</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto ps-0">

                        <ul id="top-social">
                            <li><a href="/facebook" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                            </li>
                            <li><a href="/instagram" class="si-instagram"><span class="ts-icon"><i
                                            class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+6281234567" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span class="ts-text">+62812345678</span></a>
                            </li>
                            <li><a href="mailto:info@marsiajar.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt"></i></span><span
                                        class="ts-text">info@marsiajar.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div>

        <!-- Header
		============================================= -->
        <header id="header" class="header-size-sm" data-sticky-shrink="false">
            <div class="container">
                <div class="header-row">

                    <nav class="navbar navbar-expand-lg p-0 m-0 w-100">
                        <div id="logo">
                            <a href="/" class="standard-logo"><img
                                    src="{!!asset('webpage/demos/marsiajar/logo_long.png')!!}" alt="Marsiajar Logo"></a>
                            <a href="/" class="retina-logo"><img
                                    src="{!!asset('webpage/demos/marsiajar/logo_long.png')!!}" alt="Marsiajar Logo"></a>
                        </div>
                    </nav>

                </div>
            </div>

            <div id="header-wrap" class="bg-light">
                <div class="container">
                    <div class="header-row flex-row-reverse flex-lg-row justify-content-between">

                        <div class="header-misc">
                            <!-- Top Search
							============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line-home"></i>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#" class="ps-0">
                                        <div><i class="icon-line-grid"></i>Educative</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="#">
                                                <div><i class="icon-line2-user"></i>Ajar</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item"><a class="menu-link" href="#">
                                                        <div>Bahan Ajar</div>
                                                    </a></li>
                                                <li class="menu-item"><a class="menu-link" href="#">
                                                        <div>Rencana Ajar</div>
                                                    </a></li>
                                                <li class="menu-item"><a class="menu-link" href="#">
                                                        <div>Lembar Kerja</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">
                                                <div><i class="icon-chart-bar1"></i>Inspirasi</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line-info"></i>News</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line2-camcorder"></i>Events</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line-image"></i>Gallery</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line-briefcase"></i>About Us</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a href="#" class="menu-link">
                                        <div><i class="icon-line-phone"></i>Contact Us</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        @yield('content')

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row">
                        <div class="col-6 col-md-6" style="background: url('webpage/images/world-map.png') no-repeat center center;
                    background-size: 100%;">
                            <img class="mb-3" src="{!!asset('webpage/demos/marsiajar/Logo-white.png')!!}" alt="
                                Marsiajar logo" width="160">
                            <?php $y=date('Y'); ?>
                            <small class="d-block mb-4 text-muted">&copy; marsiajar.com 2022-{{$y}}</small>
                            <p class="text-white-50" style="font-size: 16px;">Marsiajar merupakan sebuah komunitas Mari
                                Siap Mengajar dimana guru-guru di Indonesia dapat saling berbagi dan berkolaborasi untuk
                                meningkatkan metode mengajar di dalam dan di luar kelas. Di Marsiajar, anda dapat
                                berbagi ide dan metode mengajar, berkolaborasi mendesain lembar kerja, dan mengembangkan
                                diri.</p>
                            <a href="#" class="mb-2 d-block"><i class="icon-line2-call-in me-2"></i>+62812345678</a>
                            <a href="#"><i class="icon-line2-envelope me-2"></i>info@marsiajar.com</a>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-uppercase ls2 fw-normal">Best Teaching Materials</h4>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <h5 class="mb-0"><a href="#" class="text-white">Cooking Classes</a></h5>
                                    <p>Dylan Meringue</p>
                                </li>
                                <li>
                                    <h5 class="mb-0"><a href="#" class="text-white">Learning Spanish</a></h5>
                                    <p>Gunther Beard</p>
                                </li>
                                <li>
                                    <h5 class="mb-0"><a href="#" class="text-white">Website Development</a></h5>
                                    <p>Jer Herrys</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 col-sm mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="text-uppercase ls2 fw-normal">Support</h4>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <h5 class="mb-2 fw-normal"><a href="#">My Account</a></h5>
                                </li>
                                <li>
                                    <h5 class="mb-2 fw-normal"><a href="#">F.a.Q</a></h5>
                                </li>
                                <li>
                                    <h5 class="mb-2 fw-normal"><a href="#">Become an educators</a></h5>
                                </li>
                                <li>
                                    <h5 class="mb-2 fw-normal"><a href="#">Contact</a></h5>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="text-uppercase ls2 fw-normal">Worldwide</h4>
                            <a href="#"><img src="{!!asset('webpage/demos/course/images/map.png')!!}" alt=" Image"></a>
                        </div>
                    </div> --}}

                    </div><!-- .footer-widgets-wrap end -->

                </div>
                <!-- Copyrights
			============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; {{$y}} All Rights Reserved by Marsiajar.com.<br>
                                <div class="copyright-links"><a href="/terms-conditions">Terms of Use</a> / <a
                                        href="/privacy-policy">Privacy
                                        Policy</a>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="/">Home</a>/<a href="/about-us">About Us</a>/<a
                                        href="/contact-us">Contact</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->


    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('webpage/js/jquery.js')!!}"></script>
    <script src="{!!asset('webpage/js/plugins.min.js')!!}"></script>


    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('webpage/js/functions.js')!!}"></script>

</body>

</html>
