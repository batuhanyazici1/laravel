<?php $page = 'forgot-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Forgot Password -->
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

        <!-- Forgot Password Content -->
        <div class="col-lg-6">
            <div class="login-wrapper">
                <div class="login-content">
                    <form action="change-password">
                        <div class="login-userset">
                            <div class="login-logo">
                                <img src="{{ URL::asset('assets/img/logo.svg') }}" alt="img">
                            </div>
                            <div class="login-card">
                                <div class="login-heading text-start">
                                    <h3>Forgot Password?</h3>
                                    <p>Fill the fields to get into your account</p>
                                </div>
                                <div class="form-wrap form-focus">
                                    <span class="form-icon">
                                        <i class="feather-mail"></i>
                                    </span>
                                    <input type="email" class="form-control floating">
                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="form-wrap mantadory-info d-none">
                                    <p><i class="feather-alert-triangle"></i>Fill all the fields to submit</p>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Email</button>
                            </div>
                            <div class="acc-in">
                                <p>Already have an account? <a href="{{ url('signin') }}">Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Forgot Password Content -->

    </div>
    <!-- /Forgot Password -->
@endsection
