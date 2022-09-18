@extends('welcome')
@section('title', 'Blog')
@section('page_description', 'This page is about news stories that are interesting to read, from everything updated from
Marsiajar, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('content')
<section id="content">
    <div class="content-wrap">

        <div class="container clearfix">

            <div class="heading-block center">
                <h1>Berita Terbaru</h1>
            </div>

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-9">

                    <!-- Posts
							============================================= -->
                    <div id="posts" class="row grid-container gutter-40">
                        @if ($blogs->count() > 0)
                        @foreach ($blogs as $blog)
                        <div class="entry col-12">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{{$blog->image->file}}" data-lightbox="image"><img
                                            src="{{$blog->image->file}}" alt="{{$blog->title}}"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="/read/{{$blog->slug}}">{{$blog->title}}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> {{$blog->created_at}}</li>
                                            <li><a href="#"><i class="icon-user"></i> {{$blog->user->name}}</a></li>
                                            <li><i class="icon-folder-open"></i> <a
                                                    href="#">{{$blog->categories->categories_name ?? ''}}</a>, <a
                                                    href="#">{{$blog->subcategories->sub_categories_name ?? ''}}</a>
                                            </li>
                                            <li><a href="#"><i class="icon-comments"></i> 13</a>
                                            </li>
                                            <li><a href="#"><i class="icon-eye"></i> {{$blog->views}} views</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        {{strip_tags(Str::limit($blog->description, 100))}}
                                        <a href="/read/{{$blog->slug}}" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>No content for general founded!</h4>
                            </div>
                        </div>
                        @endif

                    </div><!-- #posts end -->

                    <!-- Pager
							============================================= -->
                    <div class="d-flex justify-content-between mt-5">
                        {{$blogs->links()}}
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget subscribe-widget clearfix">
                            {{-- Google ads --}}
                        </div>

                        <div class="widget clearfix">

                            <h4>Connect with Us</h4>
                            <a href="#" class="social-icon si-colored si-small si-facebook" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                                <a href="#" class="social-icon si-colored si-small si-linkedin" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Linked In">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>


                                <a href="#" class="social-icon si-colored si-small si-instagram"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                        </div>
                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
