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
                                data-speed="3500">Selamat datang di Marsiajar.</h2>
                            <p class="lead mb-0 text-uppercase ls2" style="color: #CCC; font-size: 110%">Mari
                                berkolaborasi dengan pendidik lainnya.</p>
                            <hr>
                            <span>Marsiajar adalah platform bagi para pendidik untuk saling berkolaborasi, serta
                                memberi kesempatan kepada pendidik Kreator untuk mendapatkan penghasilan tambahan
                                dari bahan ajar yang mereka buat.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HTML5 Video Wrap
				============================================= -->
        <div class="video-wrap">
            <video id="slide-video" poster="{!!asset('webpage/demos/marsiajar/album/IMG_20190209_180012.jpg')!!}"
                preload=" auto" loop autoplay muted>
                <source src='{!!asset(' webpage/demos/course/images/video/123.mp4')!!}' type='video/mp4' />
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
                <h3>Temukan bahan ajar yang anda butuhkan</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum.
                    Voluptatibus, perspiciatis placeat.</span>
            </div>

            <!-- Categories
					============================================= -->
            <div class="row course-categories clearfix mb-4">
                @if (!$sub->isEmpty())
                @foreach ($sub as $subs)
                <?php
                    // someting like this?
                    $r = rand(0,255); //1. and 2.
                    $g = rand(0,255); //3. and 4.
                    $b = rand(0,255); //5. and 6.
                ?>
                <div class="col-lg-2 col-sm-3 col-6 mt-4">
                    <div class="card hover-effect">
                        <img class="card-img" id="img-sub" src="{{$subs->image->file}}" alt="Card
                                    image">
                        <a href="/tag/{{$subs->slug}}" class="card-img-overlay rounded p-0"
                            style="background-color: rgba({{$r}},{{$g}},{{$b}},0.8);">
                            <span>{{$subs->sub_categories_name}}</span>
                        </a>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12 text-center">
                    <h6>Data not found!</h6>
                </div>
                @endif
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
                    <h3>Bahan ajar terpopuler</h3>
                    <span>Bahan ajar dan inspirasi yang paling banyak dicari.</span>
                </div>

                <div class="clear"></div>

                <div class="row mt-2">
                    @if (!$article->isEmpty())
                    @foreach ($article as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card course-card hover-effect border-0">
                            <a href="/read/{{$item->slug}}"><img class="card-img-top" style="
    height: 300px;
    object-fit: cover;
" src="{{$item->image->file}}" alt=" Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title fw-bold mb-2"><a href="/read/{{$item->slug}}">{{$item->title}}</a>
                                </h4>
                                <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                        class="text-black-50">{{$item->subcategories['sub_categories_name']}}</a>
                                </p>
                                <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star3"></i><i class="icon-star3"></i><i
                                        class="icon-star-half-full"></i>
                                    <span>4.7</span></div>
                                <p class="card-text text-black-50 mb-1">{{Str::limit($item->description, 60)}}</p>
                            </div>
                            <div
                                class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                <div class="badge alert-success">Free</div>
                                <a href="#" class="text-dark position-relative">
                                    <i class="far fa-eye"></i>
                                    <sup>{{$item->views}}</sup>
                                    <i class="far fa-arrow-down-to-line" style="margin-left: 10px;"></i>
                                    <sup>250</sup></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12 text-center">
                        <h5>Data not found!</h5>
                    </div>
                    @endif
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
                    <h3>Pendidik Kreator terpopuler</h3>
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
                                <p class="text-dark">⭐⭐⭐⭐⭐</p>
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
                                <p class="text-dark">⭐⭐⭐⭐</p>
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
                                <p class="text-dark">⭐⭐⭐⭐</p>
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
                                <p class="text-dark">⭐⭐⭐⭐</p>
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
                            <h3>Jadilah <span>pendidik Kreator</span> dan dapatkan <span>penghasilan</span>
                                tambahan
                                dengan
                                <span>mudah</span>
                            </h3>
                            {{-- <span>Teach, and share What You Love.</span> --}}
                        </div>
                        <p class="mb-2">Anda berkesempatan untuk mendapatkan penghasilan tambahan dari bahan ajar dan
                            artikel yang anda buat.</p>
                        <?php $token = Str::random(16); ?>
                        <a href="/{{$token}}/register"
                            class="button button-rounded button-xlarge ls0 ls0 nott fw-normal m-0">Mulai
                            Berbagi</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section><!-- #content end -->
@endsection
