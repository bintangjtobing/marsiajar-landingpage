@extends('welcome')
@section('title', 'Register new account')
@section('page_description', '')
@section('page_keywords', '')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
						============================================= -->
                <div class="sidebar col-lg-4">
                    <img src="{{asset('webpage/images/marsiajar/register.svg')}}" class="img-fluid" alt="">

                </div>
                <div class="postcontent col-lg-8">

                    <h3>Register new account</h3>
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <span>You have successfully register your new account! You can <a href="{{ENV('APP_BE')}}">Log
                                In</a> now.</span>
                    </div>
                    @endif
                    <div class="">

                        <?php $token = Str::random(16); ?>

                        <form class="row mb-0" action="/{{$token}}/register" method="post">
                            {{ csrf_field() }}

                            <div class="col-md-12 form-group">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="name" value=""
                                    class="sm-form-control required" />
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="email" value=""
                                    class="required email sm-form-control" />
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="number" id="template-contactform-phone" name="phone" value=""
                                    class="sm-form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="template-contactform-phone">Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="N">Not rather to say</option>
                                </select>
                            </div>
                            {{-- <div class="col-md-12 form-group">
                                <label for="template-contactform-phone">Password</label>
                                <input type="password" id="template-contactform-phone" name="password" value=""
                                    class="sm-form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="template-contactform-phone">Verify Password</label>
                                <input type="password" id="template-contactform-phone" name="verify-password" value=""
                                    class="sm-form-control" />
                            </div> --}}
                            <div class="col-12 form-group">

                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LfIKJEbAAAAAJ8KjFzHalPot6USRkl8hwbHWMAi"></div>

                            </div>
                            <div class="col-12 form-group">
                                <button class="button button-3d m-0" type="submit" value="submit">Register</button>
                            </div>
                        </form>

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection
