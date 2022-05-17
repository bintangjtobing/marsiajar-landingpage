@extends('welcome')
@section('title', 'Home')
@section('page_description', 'Marsiajar merupakan sebuah komunitas Mari Siap Mengajar dimana guru-guru di Indonesia
dapat saling berbagi dan berkolaborasi untuk meningkatkan metode mengajar di dalam dan di luar kelas. Di Marsiajar, anda
dapat berbagi ide dan metode mengajar, berkolaborasi mendesain lembar kerja, dan mengembangkan diri.')
@section('page_keywords', '')
@section('content')
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
            <video id="slide-video" poster="{!!asset('webpage/demos/course/images/video/poster.jpg')!!}" preload=" auto"
                loop autoplay muted>
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
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/music.jpg')!!}" alt=" Card
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
                        <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(29,74,103,0.8);">
                            <span><i class="icon-code1"></i>IT</span>
                        </a>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/teacher.jpg')!!}"
                            alt=" Card
                                    image">
                        <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(50,71,66,0.8);">
                            <span><i class="far fa-flask-vial"></i>Sains</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/food.jpg')!!}" alt=" Card
                                    image">
                        <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(70,58,69,0.8);">
                            <span><i class="far fa-abacus"></i> Tematik</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/business.jpg')!!}""
                                    alt=" Card image">
                        <a href="#" class="card-img-overlay rounded p-0"
                            style="background-color: rgba(252,108,52,0.8);">
                            <span><i class="far fa-map"></i> Geografi</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/health.jpg')!!}"
                            alt=" Card
                                    image">
                        <a href="#" class="card-img-overlay rounded p-0"
                            style="background-color: rgba(158,108,87,0.8);">
                            <span><i class="far fa-briefcase-medical"></i> Kesehatan Olahraga</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/lifestyle.jpg')!!}""
                                    alt=" Card image">
                        <a href="#" class="card-img-overlay rounded p-0"
                            style="background-color: rgba(164,108,119,0.85);">
                            <span><i class="icon-line2-game-controller"></i>Gaya Hidup</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/language.jpg')!!}""
                                    alt=" Card image">
                        <a href="#" class="card-img-overlay rounded p-0"
                            style="background-color: rgba(80,167,159,0.8);">
                            <span><i class="icon-line2-globe"></i>Bahasa</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/paint.jpg')!!}" alt=" Card
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
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/marketing.jpg')!!}""
                                    alt=" Card image">
                        <a href="#" class="card-img-overlay rounded p-0"
                            style="background-color: rgba(227,141,66,0.8);">
                            <span><i class="icon-line-share"></i>Pasar Digital</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" src="{!!asset('webpage/demos/course/images/categories/academics.jpg')!!}""
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
                                    src="{!!asset('webpage/demos/course/images/courses/1.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">Rincian Minggu Efektif Tematik
                                        Terpadu K13 Edisi Revisi Semester Ganjil</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">Tematik</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star-half-full"></i>
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
                                    src="{!!asset('webpage/demos/course/images/courses/2.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">Silabus Pembelajaran Kurikulum
                                        2013 Edisi Revisi Kelas 1</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">Silabus</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                    <span>4.9</span></div>
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
                                    src="{!!asset('webpage/demos/course/images/courses/3.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">RPP Tematik Terpadu Kurikulum
                                        2013 Revisi 2017 kelas 1 Tema 1 Sub Tema 1</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">Tematik</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i>
                                    <span>4.4</span>
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
                                    src="{!!asset('webpage/demos/course/images/courses/4.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">Aktivitas : Planet Dalam Tata
                                        Surya</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">Sains</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star-half"></i><i
                                        class="icon-star-empty"></i>
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
                                    src="{!!asset('webpage/demos/course/images/courses/5.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">Program Semester K13 Edisi
                                        Revisi Kelas 4 SD</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">Semester</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i class="icon-empty"></i>
                                    <span>4.1</span></div>
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
                                    src="{!!asset('webpage/demos/course/images/courses/6.jpg')!!}"
                                    alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="#">Memahami dan mengelompokkan
                                        usulan dasar negara (Pancasila)</a></h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">PPKN</a></p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i>
                                    <span>4.4</span>
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
@endsection
