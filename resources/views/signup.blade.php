<?php $page = 'signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Sign Up -->
    <div class="row gx-0">

        <!-- Banner Content -->
        <div class="col-lg-6">
            <div class="authentication-wrapper">
                <div class="authentication-content">
                    <div class="login-carousel owl-carousel">
                        <div class="login-slider">
                            <img src="{{ URL::asset('/assets/img/login-card-01.svg') }}" class="img-fluid" alt="img">
                            <h2>Looking to Buy a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                        <div class="login-slider">
                            <img src="{{ URL::asset('/assets/img/login-card-02.svg') }}" class="img-fluid" alt="img">
                            <h2>Looking to Sell a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                    </div>
                </div>
                <div class="login-bg">
                    <img src="{{ URL::asset('/assets/img/bg/shape-01.png') }}" alt="img" class="shape-01">
                    <img src="{{ URL::asset('/assets/img/bg/shape-02.png') }}" alt="img" class="shape-02">
                    <img src="{{ URL::asset('/assets/img/bg/shape-03.png') }}" alt="img" class="shape-03">
                    <img src="{{ URL::asset('/assets/img/bg/shape-04.png') }}" alt="img" class="shape-04">
                    <img src="{{ URL::asset('/assets/img/bg/shape-05.png') }}" alt="img" class="shape-05">
                    <img src="{{ URL::asset('/assets/img/bg/shape-06.png') }}" alt="img" class="shape-06">
                    <img src="{{ URL::asset('/assets/img/bg/shape-07.png') }}" alt="img" class="shape-07">
                </div>
            </div>
        </div>
        <!-- /Banner Content -->

        <!-- Register Content -->
        <div class="col-lg-6">
            <div class="login-wrapper">
                <div class="login-content">
                    <form action="{{ route('register.custom') }}" method="POST">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo">
                                <img src="{{ URL::asset('/assets/img/logo.svg') }}" alt="img">
                            </div>
                            <div class="login-card">
                                <div class="login-heading">
                                    <h3>Hi, Welcome!</h3>
                                    <p>Register to get access to DreamGigs</p>
                                </div>
                                <div class="form-wrap form-focus">
                                    <span class="form-icon">
                                        <i class="feather-user"></i>
                                    </span>
                                    <input type="text" class="form-control floating" id="name" name="name">
                                    <label class="focus-label">Name *</label>
                                    <div class="text-danger pt-2">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-wrap form-focus">
                                    <span class="form-icon">
                                        <i class="feather-mail"></i>
                                    </span>
                                    <input type="email" class="form-control floating" id="email" name="email">
                                    <label class="focus-label">Email</label>
                                    <div class="text-danger pt-2">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-wrap form-focus pass-group">
                                    <span class="form-icon">
                                        <i class="toggle-password feather-eye-off"></i>
                                    </span>
                                    <input type="password" class="pass-input form-control  floating" id="password"
                                    name="password">
                                    <label class="focus-label">Password</label>
                                    <div class="text-danger pt-2">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-wrap form-focus pass-group">
                                    <span class="form-icon">
                                        <i class="toggle-password-confirm feather-eye-off"></i>
                                    </span>
                                    <input type="password" class="pass-confirm form-control  floating" id="confirmpassword" name="confirmpassword">
                                    <label class="focus-label">Confirm Password</label>
                                    <div class="text-danger pt-2">
                                        @error('confirmpassword')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-wrap">
                                    <label class="custom_check mb-0">By login you agree to our <a href="#">Terms of
                                            Use</a> and <a href="#">Privacy Policy</a>
                                        <input type="checkbox" name="remeber">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <div class="login-or">
                                    <span class="span-or">or sign up with</span>
                                </div>
                                <ul class="login-social-link">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/icons/google-icon.svg') }}"
                                                alt="Facebook"> Google
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/icons/fb.svg') }}" alt="Google">
                                            Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="acc-in">
                                <p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Register Content -->

    </div>
    <!-- /Sign Up -->
@endsection
