@extends('welcome')
@section('title', 'Events')
@section('page_description', 'This page is about news stories that are interesting to read, from everything updated from
Marsiajar, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-80">
                <div class="col-md-7">

                    <div class="fancy-title title-border">
                        <h3>Upcoming Events</h3>
                    </div>

                    <div class="row">

                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="{!!asset('webpage/images/events/thumbs/1.jpg')!!}"
                                            alt="Inventore voluptates velit totam ipsa tenetur">
                                        <div class="entry-date">10<span>Apr</span></div>
                                    </a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-xs">
                                        <h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                            <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="btn btn-secondary" disabled="disabled">Buy Tickets</a> <a
                                            href="#" class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="{!!asset('webpage/images/events/thumbs/2.jpg')!!}"
                                            alt="Nemo quaerat nam beatae iusto minima vel">
                                        <div class="entry-date">16<span>Apr</span></div>
                                    </a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-xs">
                                        <h2><a href="#">Nemo quaerat nam beatae iusto minima vel</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                            <li><a href="#"><i class="icon-map-marker2"></i> Perth, Australia</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="btn btn-info">RSVP</a> <a href="#"
                                            class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="{!!asset('webpage/images/events/thumbs/3.jpg')!!}"
                                            alt="Ducimus ipsam error fugiat harum recusandae">
                                        <div class="entry-date">3<span>May</span></div>
                                    </a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-xs">
                                        <h2><a href="#">Ducimus ipsam error fugiat harum recusandae</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                            <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="btn btn-secondary">Buy Tickets</a> <a href="#"
                                            class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="{!!asset('webpage/images/events/thumbs/4.jpg')!!}"
                                            alt="Nisi officia adipisci molestiae aliquam">
                                        <div class="entry-date">16<span>Jun</span></div>
                                    </a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-xs">
                                        <h2><a href="#">Nisi officia adipisci molestiae aliquam</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
                                            <li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="btn btn-info">RSVP</a> <a href="#"
                                            class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-5">
                    <div class="fancy-title title-border">
                        <h4>Gallery</h4>
                    </div>

                    <div class="w-100 masonry-thumbs grid-container grid-4 mb-5" data-lightbox="gallery">
                        <a class="grid-item" href="{!!asset('webpage/images/events/1.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/1.jpg')!!}"
                                alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/2.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/2.jpg')!!}"
                                alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/3.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/3.jpg')!!}"
                                alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/4.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/4.jpg')!!}"
                                alt="Gallery Thumb 4"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/5.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/5.jpg')!!}"
                                alt="Gallery Thumb 5"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/6.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/6.jpg')!!}"
                                alt="Gallery Thumb 6"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/7.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/7.jpg')!!}"
                                alt="Gallery Thumb 7"></a>
                        <a class="grid-item" href="{!!asset('webpage/images/events/8.jpg')!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('webpage/images/events/thumbs/8.jpg')!!}"
                                alt="Gallery Thumb 8"></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
