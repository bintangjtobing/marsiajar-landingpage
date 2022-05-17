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

    <!-- Document Title
	============================================= -->
    <title>Marsiajar - @yield('title')</title>

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
                            <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                            </li>
                            <li><a href="#" class="si-instagram"><span class="ts-icon"><i
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
                            <a href="#" class="standard-logo"><img
                                    src="{!!asset('webpage/demos/marsiajar/logo_long.png')!!}" alt="Marsiajar Logo"></a>
                            <a href="#" class="retina-logo"><img
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

        <!-- Slider
		============================================= -->
        <section id="slider" class="slider-element min-vh-75">
            <div class="slider-inner">

                <div class="vertical-middle">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="slider-title mb-5 dark clearfix">
                                    <h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn"
                                        data-speed="3500">Welcome to marsiajar <br> here we can share about <span
                                            class="t-rotate text-white d-inline-block">Teaching Materials, Inspiration
                                            Materials, Teaching Planning Materials, Work Paper</span>.</h2>
                                    <p class="lead mb-0 text-uppercase ls2" style="color: #CCC; font-size: 110%">The
                                        platform to connecting all of educators</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HTML5 Video Wrap
				============================================= -->
                <div class="video-wrap">
                    <video id="slide-video" poster="{!!asset('webpage/demos/course/images/video/poster.jpg')!!}"
                        preload=" auto" loop autoplay muted>
                        <source src='{!!asset('webpage/demos/course/images/video/1.mp4')!!}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.65); z-index: 1"></div>
                </div>

            </div>
        </section>

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap" style="overflow: visible; padding-bottom: 0px;">

                <!-- Wave Shape Divider
				============================================= -->
                <div class="wave-bottom"
                    style="position: absolute; top: -12px; left: 0; width: 100%; background-image: url('webpage/demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);">
                </div>

                <div class="container">

                    <div class="heading-block border-bottom-0 my-4 center">
                        <h3>Popular teaching materials categories</h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum.
                            Voluptatibus, perspiciatis placeat.</span>
                    </div>

                    <!-- Categories
					============================================= -->
                    <div class="row course-categories clearfix mb-4">
                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/music.jpg')!!}" alt=" Card
                                    image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(251,51,100,0.8);">
                                    <span><i class="icon-music1"></i>Musik</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/development.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(29,74,103,0.8);">
                                    <span><i class="icon-code1"></i>IT</span>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/teacher.jpg')!!}" alt=" Card
                                    image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(50,71,66,0.8);">
                                    <span><i class="far fa-flask-vial"></i>Sains</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/food.jpg')!!}" alt=" Card
                                    image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(70,58,69,0.8);">
                                    <span><i class="far fa-abacus"></i> Tematik</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/business.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(252,108,52,0.8);">
                                    <span><i class="far fa-map"></i> Geografi</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/health.jpg')!!}" alt=" Card
                                    image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(158,108,87,0.8);">
                                    <span><i class="far fa-briefcase-medical"></i> Kesehatan Olahraga</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/lifestyle.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(164,108,119,0.85);">
                                    <span><i class="icon-line2-game-controller"></i>Gaya Hidup</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/language.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(80,167,159,0.8);">
                                    <span><i class="icon-line2-globe"></i>Bahasa</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/paint.jpg')!!}" alt=" Card
                                    image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(23,116,234,0.8);">
                                    <span><i class="icon-paint-brush"></i>Karya Seni</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/photography.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(108,156,148,0.85);">
                                    <span><i class="icon-line2-camera"></i>Fotografi</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/marketing.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(227,141,66,0.8);">
                                    <span><i class="icon-line-share"></i>Pasar Digital</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6 mt-4">
                            <div class="card hover-effect">
                                <img class="card-img"
                                    src="{!!asset('webpage/demos/course/images/categories/academics.jpg')!!}""
                                    alt=" Card image">
                                <a href="#" class="card-img-overlay rounded p-0"
                                    style="background-color: rgba(39,103,240,0.8);">
                                    <span><i class="icon-line-book"></i>Akademi</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="clear"></div>

                </div>

                <!-- Section Teaching Materials
				============================================= -->
                <div class="section topmargin-lg parallax"
                    style="padding: 80px 0 60px; background-image: url('webpage/demos/course/images/icon-pattern.jpg'); background-size: auto; background-repeat: repeat"
                    data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">

                    <!-- Wave Shape Divider
					============================================= -->
                    <div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('
                    demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;">
                    </div>

                    <div class="container">

                        <div class="heading-block border-bottom-0 mb-5 center">
                            <h3>Most Popular Teaching Materials</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum.
                                Voluptatibus, perspiciatis placeat.</span>
                        </div>

                        <div class="clear"></div>

                        <div class="row mt-2">

                            <!-- Course 1
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/1.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">Rincian Minggu Efektif Tematik
                                                Terpadu K13 Edisi Revisi Semester Ganjil</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">Tematik</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star-half-full"></i>
                                            <span>4.7</span></div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-success">Free</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>1,190</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>250</sup></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Course 2
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/2.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">Silabus Pembelajaran Kurikulum
                                                2013 Edisi Revisi Kelas 1</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">Silabus</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i> <span>4.9</span></div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-success">Free</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>1,134</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>115</sup></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Course 3
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/3.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">RPP Tematik Terpadu Kurikulum
                                                2013 Revisi 2017 kelas 1 Tema 1 Sub Tema 1</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">Tematik</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span>
                                        </div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-success">Free</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>987</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>99</sup></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Course 4
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/4.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">Aktivitas : Planet Dalam Tata
                                                Surya</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">Sains</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star-half"></i><i class="icon-star-empty"></i>
                                            <span>3.7</span></div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-primary">210K</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>769</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>56</sup></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Course 5
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/5.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">Program Semester K13 Edisi
                                                Revisi Kelas 4 SD</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">Semester</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-empty"></i> <span>4.1</span></div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-primary">600K</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>533</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>44</sup></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Course 6
							============================================= -->
                            <div class="col-md-4 mb-5">
                                <div class="card course-card hover-effect border-0">
                                    <a href="#"><img class="card-img-top"
                                            src="{!!asset('webpage/demos/course/images/courses/6.jpg')!!}""
                                            alt=" Card image cap"></a>
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold mb-2"><a href="#">Memahami dan mengelompokkan
                                                usulan dasar negara (Pancasila)</a></h4>
                                        <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                                class="text-black-50">PPKN</a></p>
                                        <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span>
                                        </div>
                                        <p class="card-text text-black-50 mb-1">Some quick example text to build on the
                                            card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div
                                        class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                        <div class="badge alert-primary">400K</div>
                                        <a href="#" class="text-dark position-relative">
                                            <i class="far fa-eye"></i>
                                            <sup>380</sup>
                                            <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                            <sup>24</sup></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wave Shape Divider - Bottom
					============================================= -->
                    <div class="wave-bottom"
                        style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('webpage/demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);">
                    </div>
                </div>

                <!-- Instructors Section
				============================================= -->
                <div class="section bg-transparent" style="padding: 60px 0 40px;">
                    <div class="container">

                        <div class="heading-block border-bottom-0 mb-5 center">
                            <h3>The best teaching material teacher</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum.
                                Voluptatibus, perspiciatis placeat.</span>
                        </div>

                        <div class="clear"></div>

                        <div class="row">

                            <!-- Instructors 1
							============================================= -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div
                                    class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
                                    <div class="fbox-icon">
                                        <i><img src="{!!asset('webpage/demos/course/images/instructor/1.jpg')!!}""
                                                class=" border-0 bg-transparent shadow-sm" style="z-index: 2;"
                                                alt="Image"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Dylan
                                                Abal</a><br><small class="subtitle nott color">Guru SDN 001122</small>
                                        </h3>
                                        <p class="text-dark"><strong>2342</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>23</strong> Teaching Materials</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Instructors 2
							============================================= -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div
                                    class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
                                    <div class="fbox-icon">
                                        <i><img src="{!!asset('webpage/demos/course/images/instructor/2.jpg')!!}""
                                                class=" border-0 bg-transparent shadow-sm" style="z-index: 2;"
                                                alt="Image"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Alan
                                                Francis</a><br><small class="subtitle nott color">Development IT,
                                                Guru</small></h3>
                                        <p class="text-dark"><strong>7563</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>29</strong> Teaching Materials</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Instructors 3
							============================================= -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div
                                    class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
                                    <div class="fbox-icon">
                                        <i><img src="{!!asset('webpage/demos/course/images/instructor/3.jpg')!!}""
                                                class=" border-0 bg-transparent shadow-sm" style="z-index: 2;"
                                                alt="Image"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Herry
                                                Tander</a><br><small class="subtitle nott color">TIK Master</small></h3>
                                        <p class="text-dark"><strong>1131</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>11</strong> Teaching Materials</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Instructors 4
							============================================= -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div
                                    class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
                                    <div class="fbox-icon">
                                        <i><img src="{!!asset('webpage/demos/course/images/instructor/4.jpg')!!}""
                                                class=" border-0 bg-transparent shadow-sm" style="z-index: 2;"
                                                alt="Image"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Desmond
                                                Cato</a><br><small class="subtitle nott color">Sistem Analisis
                                                Master</small></h3>
                                        <p class="text-dark"><strong>1232</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>12</strong> Teaching Materials</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Section
				============================================= -->
                <div class="section m-0"
                    style="padding: 120px 0; background: #FFF url('webpage/demos/marsiajar/assets/teachers.jpg') no-repeat left top / cover">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-7"></div>

                            <div class="col-md-5">
                                <div class="heading-block border-bottom-0 mt-5">
                                    <h3>Become a teacher that happy to share a <span>teaching materials</span> to others
                                        <span>educators</span>
                                    </h3>
                                    <span>Teach, and share What You Love.</span>
                                </div>
                                <p class="mb-2">Monotonectally conceptualize covalent strategic theme areas and
                                    cross-unit deliverables.</p>
                                <p>Consectetur adipisicing elit. Voluptate incidunt dolorum perferendis accusamus
                                    nesciunt et est consequuntur placeat, dolor quia.</p>
                                <a href="#" class="button button-rounded button-xlarge ls0 ls0 nott fw-normal m-0">Start
                                    Sharing</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #content end -->

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
                                Image" width="160">
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
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy
                                        Policy</a>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Price</a>/<a
                                        href="#">Contact</a>
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
