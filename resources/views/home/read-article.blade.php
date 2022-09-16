@extends('welcome')
@section('title', $article->seo_title ?? $article->title)
@section('page_description', $article->seo_description ?? '')
@section('page_keywords', '')
@section('tag_cover',$article->image->file ?? '')
@section('content')
<section id="page-title">

    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-8">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
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
                                            href="/educative/{{$article->categories->slug}}">{{$article->categories->categories_name}}</a>,
                                        <a
                                            href="/tag/{{$article->subcategories->slug}}">{{$article->subcategories->sub_categories_name}}</a>
                                    </li>
                                    <li><a href="#"><i class="icon-comments"></i> {{$blogView->comments->count()}}
                                            Comments</a></li>
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
                                @if ($article->file)
                                <?php $getExt = substr($article->file['files'], -3) ?>
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
                                @else
                                <small class="muted-text">No file attached</small>
                                @endif

                                <!-- Tag Cloud
										============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <a href="/tag/{{$article->subcategories->slug}}">{{$article->subcategories->sub_categories_name ?? ''}}
                                    </a>
                                    <a href="/educative/{{$article->categories->slug}}">{{$article->categories->categories_name ?? ''}}
                                    </a>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>
                                <div class="widget widget_links clearfix">

                                    <script async
                                        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7094195033921594"
                                        crossorigin="anonymous"></script>
                                    <!-- footer_ad -->
                                    <ins class="adsbygoogle" style="display:block"
                                        data-ad-client="ca-pub-7094195033921594" data-ad-slot="9302956715"
                                        data-ad-format="auto" data-full-width-responsive="true"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});

                                    </script>

                                </div>

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
                                {{$article->user->bio ?? ''}}
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

                            <h3 id="comments-title"><span>{{$blogView->comments->count()}}</span> Comments</h3>

                            <!-- Comments List
									============================================= -->
                            <ol class="commentlist clearfix">

                                @foreach ($blogView->comments as $item)
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

                                            <div class="comment-author">{{$item->name}} <span><a href="#"
                                                        title="Permalink to this comment">{{$item->created_at->diffForHumans()}}</a></span>
                                            </div>

                                            <p>{{$item->body}}</p>

                                            <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>
                                @endforeach

                            </ol><!-- .commentlist end -->

                            <div class="clear"></div>

                            <!-- Comment Form
									============================================= -->
                            <div id="respond">

                                <h3>Leave a <span>Comment</span></h3>
                                @if (\Session::has('success'))
                                <div class="style-msg successmsg">
                                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You
                                        successfully give a comment to this article.</div>
                                </div>
                                @endif
                                <form class="row" action="/comments/{{$article->slug}}" method="post" id="commentform">
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="author">Name</label>
                                        <input type="text" name="name" id="author" value="" size="22" tabindex="1"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="comment">Comment</label>
                                        <textarea name="body" cols="58" rows="7" tabindex="4"
                                            class="sm-form-control"></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
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
                        <div class="widget clearfix">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                @foreach ($sub as $sub)
                                <a href="/tag/{{$sub->slug}}">{{$sub->sub_categories_name}}</a>
                                @endforeach
                            </div>

                        </div>
                        <div class="widget widget-twitter-feed clearfix">


                            <script async
                                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7094195033921594"
                                crossorigin="anonymous"></script>
                            <!-- read-article-section -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7094195033921594"
                                data-ad-slot="9458805311" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});

                            </script>


                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
