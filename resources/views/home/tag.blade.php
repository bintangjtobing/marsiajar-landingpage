@extends('welcome')
@section('title', $sub->sub_categories_name)
@section('page_description', $sub->description)
@section('page_keywords', '')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark"
    style="background-image: url('/webpage/images/marsiajar/coundown.jpeg'); padding: 120px 0;"
    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>{{$sub->sub_categories_name}}</h1>
        <span>{{$sub->description}}</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$sub->sub_categories_name}}</li>
        </ol>
    </div>

</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-9 order-lg-last">

                    <!-- Shop
							============================================= -->
                    <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
                        @foreach ($blog as $item)
                        <div class="col-sm-6 col-12 mb-5">
                            <div class="card course-card hover-effect border-0">
                                <a href="/read/{{$item->slug}}"><img class="card-img-top" src="{{$item->image->file}}"
                                        alt=" Card image cap"></a>
                                <div class="card-body">
                                    <h4 class="card-title fw-bold mb-2"><a
                                            href="/read/{{$item->slug}}">{{$item->title}}</a></h4>
                                    <p class="mb-2 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                                            class="text-black-50">{{$item->subcategories->sub_categories_name}}</a>
                                    </p>
                                    <div class="rating-stars mb-2"><i class="icon-star3"></i><i
                                            class="icon-star3"></i><i class="icon-star3"></i><i
                                            class="icon-star3"></i><i class="icon-star-half-full"></i>
                                        <span>4.7</span></div>
                                    <p class="card-text text-black-50 mb-1">
                                        {{strip_tags(Str::limit($item->description, 50))}}</p>
                                </div>
                                <div
                                    class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                    <div class="badge alert-success">Free</div>
                                    <a href="#" class="text-dark position-relative">
                                        <i class="icon-eye"></i>
                                        <sup>{{$item->views}}</sup>
                                        <i class="icon-comments-alt" style="margin-left: 10px;"></i>
                                        <sup>250</sup></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4>Kelas</h4>
                            <ul>
                                @foreach ($cat as $sub)
                                <li><a href="/educative/{{$sub->slug}}">{{$sub->categories_name}}</a></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="widget widget_links clearfix">

                            <h4>Sortir</h4>
                            <ul>
                                <li><a href="#">Populer</a></li>
                                <li><a href="#">Nama</a></li>
                                <li><a href="#">Rilis Terakhir</a></li>
                            </ul>

                        </div>
                        <div class="widget clearfix">
                            <iframe
                                src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fboxity-central-indonesia&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583"
                                style="border:none; overflow:hidden; width:240px; height:290px;"></iframe>
                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
