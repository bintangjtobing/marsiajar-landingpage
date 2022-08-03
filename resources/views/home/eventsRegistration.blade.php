@extends('welcome')
@section('title', $events->event_name . ' Registration')
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
                        <h3>{{$events->event_name}}</h3>
                    </div>

                    <div class="row">
                        <div class="entry event col-12">
                            <div class="grid-inner row align-items-center g-0 p-4">
                                <a href="#" class="entry-image">
                                    <img src="{{$events->image->file}}"
                                        alt="Inventore voluptates velit totam ipsa tenetur">
                                </a>
                                <h2 class="h2-xl">Fill the registration form for joining our event!</h2>
                                <p class="p-xl">Event interested: <b>{{$events->event_name}}</b>
                                    <form action="/events/registration/{{$events->slug}}" method="POST"
                                        class="row contact-form" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Contact Form Input -->
                                        <div class="col-md-12 my-2">
                                            <span>Full name: </span>
                                            <input type="text" name="name" class="form-control name"
                                                placeholder="Your Name*" required>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <span>Your Email Address</span>
                                            <input type="text" name="email" class="form-control email"
                                                placeholder="Email Address*" required>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <span>Your Number Phone</span>
                                            <input type="text" name="nohp" class="form-control phone"
                                                placeholder="Phone Number*" required>
                                        </div>

                                        <div class="col-md-12 my-2">
                                            <span>Please kindly tell what is your profession</span>
                                            <select class="form-control select" name="type" id="">
                                                <option value="Student">Student</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Employee">Employee</option>
                                                <option value="Startup-founder">Startup-founder</option>
                                                <option value="Conventional shop owner">Conventional shop owner</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <span>What institution/company/SME's sector?</span>
                                            <select class="form-control select" name="sector" id="">
                                                <option value="FnB (Food and Beverage)">FnB (Food and Beverage)</option>
                                                <option value="Enterprises">Enterprises</option>
                                                <option value="Manufactury">Manufactury</option>
                                                <option value="Electricity">Electricity</option>
                                                <option value="Software">Software</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Banking/Finance">Banking/Finance</option>
                                                <option value="Infrastructure/Construction">Infrastructure/Construction
                                                </option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <span>What do you expect from this event?</span>
                                            <textarea minlength="100" class="form-control message" name="description"
                                                rows="6" placeholder="Tell us why you want to join this event..."
                                                required></textarea>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <span>Where do you get this information?</span>
                                            <select class="form-control select" name="refrences" id="">
                                                <option value="Social Media (LinkedIn/Whatsapp/Instagram/Facebook/...)">
                                                    Social Media
                                                    (WA/Instagram/Facebook/...)</option>
                                                <option value="Newsletter">Newsletter</option>
                                                <option value="Email">Email</option>
                                                <option value="Friends or etc...">Friends or etc...</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 my-4">
                                            <div class="form-group">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                                @error('g-recaptcha-response')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Contact Form Button -->
                                        <div class="col-md-12 mt-15 form-btn text-right">
                                            <button type="submit" class="button button-rounded button-xlarge ls0 ls0 nott fw-normal m-0
                                                submit">Submit
                                                Register</button>
                                        </div>

                                        <!-- Contact Form Message -->
                                        <div class="col-lg-12 contact-form-msg">
                                            <span class="loading"></span>
                                        </div>

                                    </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
