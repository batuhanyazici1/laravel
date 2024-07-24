<?php $page = 'coming-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="error-wrapper">

                <!-- Coming Soon -->
                <div class="error-item p-0">
                    <div class="coming-soon text-center">
                        <div class="header-logo">
                            <img src="{{ URL::asset('assets/img/logo.svg') }}" class="img-fluid" alt="img">
                        </div>

                        <!-- Count Downs -->
                        <div class="coming-content">
                            <h2>COMING SOON</h2>
                            <div class="days-count">
                                <ul>
                                    <li>
                                        <h3 class="days">52</h3>
                                        <p>DAYS</p>
                                    </li>
                                    <li>
                                        <h3 class="hours">21</h3>
                                        <p>HOURS</p>
                                    </li>
                                    <li>
                                        <h3 class="minutes">2</h3>
                                        <p>MINUTES</p>
                                    </li>
                                    <li>
                                        <h3 class="seconds">20</h3>
                                        <p>SECONDS</p>
                                    </li>
                                </ul>
                                <div class="count-bgs">
                                    <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img"
                                        class="count-01">
                                    <img src="{{ URL::asset('assets/img/bg/error-03.png') }}" alt="img"
                                        class="count-02">
                                </div>
                            </div>
                            <div class="getback-content">
                                <p>We Will Back With Something Amazing to Get Latest Update, <span class="d-block">Please
                                        Sign Up to Our Newsletter</span></p>
                                <div class="mail-form">
                                    <form action="#">
                                        <div class="form-wrap">
                                            <input type="email" class="form-control" placeholder="Enter Email">
                                            <button type="submit" class="btn btn-primary">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Count Downs -->

                        <!-- Social Icons -->
                        <div class="social-footer">
                            <ul class="social-icon">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="feather-facebook hi-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="feather-linkedin hi-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="feather-twitter hi-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="feather-instagram hi-icon"></i>
                                    </a>
                                </li>
                            </ul>
                            <p>Copyright 2024 © DreamGigs</p>
                        </div>
                        <!-- /Social Icons -->

                    </div>
                </div>
                <!-- /Coming Soon -->

            </div>

            <!-- Error Img -->
            <div class="error-imgs count-imgs">
                <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img" class="error-01 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-02.png') }}" alt="img" class="error-02 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-04.png') }}" alt="img" class="error-04 error-bg">
            </div>
            <!-- /Error Img -->

        </div>
    </div>
    <!-- /Content -->
@endsection
