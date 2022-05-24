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
                <span>We almost blog regularly about this &amp; that.</span>
            </div>

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-9">

                    <!-- Posts
							============================================= -->
                    <div id="posts" class="row grid-container gutter-40">

                        <div class="entry col-12">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{!!asset('webpage/images/blog/full/17.jpg')!!}"
                                        data-lightbox="image"><img src="{!!asset('webpage/images/blog/small/17.jpg')!!}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                            <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a
                                                    href="#">Media</a></li>
                                            <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>
                                            </li>
                                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
                                            asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam
                                            doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem
                                            voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque
                                            vitae voluptatem libero at eveniet veritatis ab facere.</p>
                                        <a href="blog-single.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{!!asset('webpage/images/blog/full/17.jpg')!!}"
                                        data-lightbox="image"><img src="{!!asset('webpage/images/blog/small/17.jpg')!!}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="blog-single-full.html">This is a Standard post with an Embedded
                                                Video</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                            <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a
                                                    href="#">News</a></li>
                                            <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i>
                                                    19</a></li>
                                            <li><a href="#"><i class="icon-film"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                            quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit
                                            deserunt soluta iste repellendus officia in neque veniam debitis placeat quo
                                            unde reprehenderit eum facilis vitae.</p>
                                        <a href="blog-single-full.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{!!asset('webpage/images/blog/full/17.jpg')!!}"
                                        data-lightbox="image"><img src="{!!asset('webpage/images/blog/small/17.jpg')!!}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="blog-single-small.html">This is a Standard post with a Slider
                                                Gallery</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                            <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a
                                                    href="#">Media</a></li>
                                            <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i>
                                                    21</a></li>
                                            <li><a href="#"><i class="icon-picture"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                            voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et
                                            explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem
                                            eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem
                                            distinctio sequi adipisci.</p>
                                        <a href="blog-single-small.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry col-12">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{!!asset('webpage/images/blog/full/17.jpg')!!}"
                                        data-lightbox="image"><img src="{!!asset('webpage/images/blog/small/17.jpg')!!}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 28th Apr 2021</li>
                                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                            <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a
                                                    href="#">General</a></li>
                                            <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a>
                                            </li>
                                            <li><a href="#"><i class="icon-music2"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                            voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et
                                            explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem
                                            eligendi fuga.</p>
                                        <a href="blog-single.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- #posts end -->

                    <!-- Pager
							============================================= -->
                    <div class="d-flex justify-content-between mt-5">
                        <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
                        <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget subscribe-widget clearfix">
                            <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                                <div class="fancy-title title-border">
                                    <h4>Subscribe</h4>
                                </div>

                                <p style="font-size: 15px; line-height: 1.5; color: #999;">Subscribe to Our Newsletter
                                    to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form2" action="include/subscribe.php" method="post"
                                    class="mb-0">
                                    <div class="input-group mx-auto">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                        <input type="email" id="widget-subscribe-form-email2"
                                            name="widget-subscribe-form-email" class="form-control required email"
                                            placeholder="Enter your Email">
                                    </div>
                                    <button class="button button-3d w-100 button-small m-0"
                                        style="margin-top: 15px !important;" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="widget clearfix">

                            <h4>Recent Posts</h4>
                            <div class="posts-sm row col-mb-30" id="post-list-sidebar">
                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img
                                                        src="{!!asset('webpage/images/magazine/small/3.jpg')!!}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img
                                                        src="{!!asset('webpage/images/magazine/small/2.jpg')!!}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="#"><img
                                                        src="{!!asset('webpage/images/magazine/small/1.jpg')!!}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>10th July 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

                        <div class="widget clearfix">

                            <h4>Embed Videos</h4>
                            <iframe src="//player.vimeo.com/video/103927232" width="500" height="250"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
