@extends('welcome')
@section('title', 'Event '. $events->event_name)
@section('page_description', $events->event_content ?? 'This page is about news stories that are interesting to read,
from everything updated from
Marsiajar, from features, fixes, memes and more.')
@section('page_keywords', 'blog boxity, boxity, boxityerp, realizeboxity, boxity central
indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity
WMS, boxity financial, boxity indonesia, news from boxity')
@section('tag_cover',$events->image->file ?? '')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-80">
                <div class="col-md-7">

                    <div class="fancy-title title-border">
                        <h3>{{$events->event_name}}</h3>
                    </div>

                    <div class="row">
                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <a href="#" class="entry-image">
                                    <img src="{{$events->image->file}}"
                                        alt="Inventore voluptates velit totam ipsa tenetur">
                                    <div class="entry-date">10 <span>Apr</span></div>
                                </a>
                                <span>Start date: {{$events->start_date}}</span>
                                <span>End date: {{$events->end_date}}</span>
                                <span>Organized by: {{$events->organized_by}}</span>
                                <span>Event type: {{$events->type}}</span>
                                <hr class="my-5">
                                {!!$events->event_content!!}

                                <div class="form-group">
                                    <a href="/events/registration/{{$events->slug}}"
                                        class="button button-rounded button-xlarge ls0 ls0 nott fw-normal m-0">Register
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
