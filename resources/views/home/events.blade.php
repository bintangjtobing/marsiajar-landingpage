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
                        @if ($events->count() >= 1) @foreach ($events as $event) <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <div class="col-md-4 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="{{$event->image->file}}"
                                            alt="Inventore voluptates velit totam ipsa tenetur">
                                        <div class="entry-date">10 <span>Apr</span></div>
                                    </a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-xs">
                                        <h2><a href="/events/registration/{{$event->slug}}">{{$event->event_name}}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#"><i class="icon-time"></i> {{$event->start_date}} s/d
                                                    {{$event->end_date}}</a></li>
                                            {{-- <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="/events/registration/{{$event->slug}}" class="btn btn-secondary"
                                            disabled="disabled">Register</a> <a href="/events/{{$event->slug}}"
                                            class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <span>There is no upcoming events right now.</span>
                            </div>
                        </div>
                        @endif



                    </div>

                </div>

                <div class="col-md-5">
                    <div class="fancy-title title-border">
                        <h4>Gallery</h4>
                    </div>

                    <div class="w-100 masonry-thumbs grid-container grid-4 mb-5" data-lightbox="gallery">
                        @foreach ($eventgal as $item)
                        <a class="grid-item" href="{{$item->file}}" data-lightbox="gallery-item"><img
                                src="{{$item->file}}" alt="Gallery Thumb 1"></a>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
