<?php $page = 'change-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Change Password -->
    <div class="row gx-0">

        <!-- Banner Content -->
        <div class="col-lg-6">
            <div class="authentication-wrapper">
                <div class="authentication-content">
                    <div class="login-carousel owl-carousel">
                        <div class="login-slider">
                            <img src="{{ URL::asset('assets/img/login-card.png') }}" class="img-fluid" alt="img">
                            <h2>Looking to Buy/Sell a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                        <div class="login-slider">
                            <img src="{{ URL::asset('assets/img/login-card.png') }}" class="img-fluid" alt="img">
                            <h2>Looking to Buy/Sell a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                    </div>
                </div>
                <div class="login-bg">
                    <img src="{{ URL::asset('assets/img/bg/shape-01.png') }}" alt="img" class="shape-01">
                    <img src="{{ URL::asset('assets/img/bg/shape-02.png') }}" alt="img" class="shape-02">
                    <img src="{{ URL::asset('assets/img/bg/shape-03.png') }}" alt="img" class="shape-03">
                    <img src="{{ URL::asset('assets/img/bg/shape-04.png') }}" alt="img" class="shape-04">
                    <img src="{{ URL::asset('assets/img/bg/shape-05.png') }}" alt="img" class="shape-05">
                    <img src="{{ URL::asset('assets/img/bg/shape-06.png') }}" alt="img" class="shape-06">
                    <img src="{{ URL::asset('assets/img/bg/shape-07.png') }}" alt="img" class="shape-07">
                </div>
            </div>
        </div>
        <!-- /Banner Content -->

        <!-- Change Password Content -->
        <div class="col-lg-6">
            <div class="login-wrapper">
                <div class="login-content">
                    <form action="signin">
                        <div class="login-userset">
                            <div class="login-logo">
                                <img src="{{ URL::asset('assets/img/logo.svg') }}" alt="img">
                            </div>
                            <div class="login-card">
                                <div class="login-heading text-start">
                                    <h3>Change Password</h3>
                                    <p>Your new password must be different from previous used one</p>
                                </div>
                                <div class="form-wrap form-focus pass-group">
                                    <span class="form-icon">
                                        <i class="toggle-password feather-eye-off"></i>
                                    </span>
                                    <input type="password" class="pass-input form-control  floating">
                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="form-wrap form-focus pass-group">
                                    <span class="form-icon">
                                        <i class="toggle-password-confirm feather-eye-off"></i>
                                    </span>
                                    <input type="password" class="pass-confirm form-control  floating">
                                    <label class="focus-label">Confirm Password</label>
                                </div>
                                <div class="form-wrap mantadory-info d-none">
                                    <p><i class="feather-alert-triangle"></i>Enter Same Value</p>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                            <div class="acc-in">
                                <p>Remember Password? <a href="{{ url('signin') }}">Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Change Password Content -->

    </div>
    <!-- /Change Password -->
@endsection
