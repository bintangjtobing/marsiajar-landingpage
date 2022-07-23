@extends('welcome')
@section('title', $article->title)
@section('page_description', $article->seo_description ?? '')
@section('page_keywords', '')
@section('content')
<section id="page-title">

    <div class="container clearfix">
        <h1>{{$article->title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$article->title}}</li>
        </ol>
    </div>

</section><!-- #page-title end -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-9">

                    <div class="single-post mb-0">

                        <!-- Single Post
								============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
									============================================= -->
                            <div class="entry-title">
                                <h2>{{$article->title}}</h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
									============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> {{$article->created_at}}</li>
                                    <li><a href="#"><i class="icon-user"></i> {{$article->user->name}}</a></li>
                                    <li><i class="icon-folder-open"></i> <a
                                            href="#">{{$article->categories->categories_name}}</a>, <a
                                            href="#">{{$article->subcategories->sub_categories_name}}</a>
                                    </li>
                                    <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                                    <li><a href="#"><i class="icon-eye"></i> {{$article->views}} Views</a></li>
                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image
									============================================= -->
                            <div class="entry-image">
                                <a href="#"><img src="{{$article->image->file}}" alt="{{$article->title}} images"></a>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content
									============================================= -->
                            <div class="entry-content mt-0">
                                {!!$article->description!!}
                                <!-- Post Single - Content End -->

                                <?php $getExt = substr($article->file['files'], -3) ?>
                                {{-- {{$getExt}} --}}
                                @if ($getExt == 'pdf')
                                <iframe src="{{$article->file['files']}}" align="center" height="620" width="100%"
                                    frameborder="0" scrolling="auto"></iframe>
                                @endif
                                @if($getExt == 'ptx' || $getExt == 'ppt')
                                <iframe
                                    src="https://view.officeapps.live.com/op/view.aspx?src={{ENV('APP_BE').'/asset/files/'.$article->file['files']}}"
                                    align="center" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
                                @endif
                                <hr>
                                <!-- Tag Cloud
										============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <a href="#">{{$article->subcategories->sub_categories_name ?? ''}}</a>
                                    <a href="#">{{$article->categories->categories_name ?? ''}}</a>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                                <!-- Post Single - Share
										============================================= -->
                                <div class="si-share border-0 d-flex justify-content-between align-items-center">
                                    <span>Share this Post:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Post Single - Share End -->

                            </div>
                        </div><!-- .entry end -->
                        <!-- Post Author Info
								============================================= -->
                        <div class="card">
                            <div class="card-header"><strong>Posted by <a href="#">{{$article->user->name}}</a></strong>
                            </div>
                            <div class="card-body">
                                <div class="author-image">
                                    <img src="{{$article->user->avatar}}" alt="{{$article->user->name}} avatar"
                                        class="rounded-circle">
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et
                                nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis
                                praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium
                                laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur
                                fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                            </div>
                        </div><!-- Post Single - Author End -->
                        {{--
                        <div class="line"></div>

                        <h4>Related Posts:</h4>

                        <div class="related-posts row posts-md col-mb-30">

                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row align-items-center gutter-20">
                                    <div class="col-4">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="entry-title title-xs">
                                            <h3><a href="#">This is an Image Post</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 10th July 2021</li>
                                                <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row align-items-center gutter-20">
                                    <div class="col-4">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="entry-title title-xs">
                                            <h3><a href="#">This is a Video Post</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 24th July 2021</li>
                                                <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row align-items-center gutter-20">
                                    <div class="col-4">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"></a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="entry-title title-xs">
                                            <h3><a href="#">This is a Gallery Post</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 8th Aug 2021</li>
                                                <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row align-items-center gutter-20">
                                    <div class="col-4">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/blog/small/22.jpg" alt="Blog Single"></a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="entry-title title-xs">
                                            <h3><a href="#">This is an Audio Post</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 22nd Aug 2021</li>
                                                <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                        <!-- Comments
								============================================= -->
                        <div id="comments" class="clearfix">

                            <h3 id="comments-title"><span>3</span> Comments</h3>

                            <!-- Comments List
									============================================= -->
                            <ol class="commentlist clearfix">

                                <li class="comment even thread-even depth-1" id="li-comment-1">

                                    <div id="comment-1" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img alt='Image'
                                                        src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                        class='avatar avatar-60 photo avatar-default' height='60'
                                                        width='60' /></span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author">John Doe<span><a href="#"
                                                        title="Permalink to this comment">April 24, 2012 at 10:46
                                                        am</a></span></div>

                                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id
                                                dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                                venenatis dapibus posuere velit aliquet.</p>

                                            <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                        </div>

                                        <div class="clear"></div>

                                    </div>


                                    <ul class='children'>

                                        <li class="comment byuser comment-author-_smcl_admin odd alt depth-2"
                                            id="li-comment-3">

                                            <div id="comment-3" class="comment-wrap clearfix">

                                                <div class="comment-meta">

                                                    <div class="comment-author vcard">

                                                        <span class="comment-avatar clearfix">
                                                            <img alt='Image'
                                                                src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                                class='avatar avatar-40 photo' height='40'
                                                                width='40' /></span>

                                                    </div>

                                                </div>

                                                <div class="comment-content clearfix">

                                                    <div class="comment-author"><a href='#' rel='external nofollow'
                                                            class='url'>SemiColon</a><span><a href="#"
                                                                title="Permalink to this comment">April 25, 2012 at 1:03
                                                                am</a></span></div>

                                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                    <a class='comment-reply-link' href='#'><i
                                                            class="icon-reply"></i></a>

                                                </div>

                                                <div class="clear"></div>

                                            </div>

                                        </li>

                                    </ul>

                                </li>

                                <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                    id="li-comment-2">

                                    <div id="comment-2" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img alt='Image'
                                                        src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                        class='avatar avatar-60 photo' height='60' width='60' /></span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author"><a
                                                    href='https://themeforest.net/user/semicolonweb'
                                                    rel='external nofollow' class='url'>SemiColon</a><span><a href="#"
                                                        title="Permalink to this comment">April 25, 2012 at 1:03
                                                        am</a></span></div>

                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                            <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                            </ol><!-- .commentlist end -->

                            <div class="clear"></div>

                            <!-- Comment Form
									============================================= -->
                            <div id="respond">

                                <h3>Leave a <span>Comment</span></h3>

                                <form class="row" action="#" method="post" id="commentform">
                                    <div class="col-md-4 form-group">
                                        <label for="author">Name</label>
                                        <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="url">Website</label>
                                        <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" cols="58" rows="7" tabindex="4"
                                            class="sm-form-control"></textarea>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button name="submit" type="submit" id="submit-button" tabindex="5"
                                            value="Submit" class="button button-3d m-0">Submit Comment</button>
                                    </div>
                                </form>

                            </div><!-- #respond end -->

                        </div><!-- #comments end -->

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-twitter-feed clearfix">

                            {{-- Untuk google ads --}}

                        </div>
                        <div class="widget clearfix">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                @foreach ($sub as $sub)
                                <a href="/tag/{{$sub->slug}}">{{$sub->sub_categories_name}}</a>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
