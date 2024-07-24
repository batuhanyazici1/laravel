<?php $page = 'under-construction'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Construction Content -->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="error-wrapper maintanence-sec">

                <!-- Under Construction -->
                <div class="error-item p-0">
                    <div class="coming-soon text-center">
                        <div class="header-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="img">
                        </div>

                        <div class="coming-content">
                            <div class="row justify-content-center gx-0">
                                <div class="col-lg-5 col-md-6">
                                    <h2>Website is Under Construction</h2>
                                    <p>Our Website is 98% ready to serve you</p>
                                    <div class="progress-wrap">
                                        <div class="progress">
                                            <div class="progress-bar bg-success-light" role="progressbar" style="width: 98%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>0% <span>100%</span></p>
                                    </div>
                                    <div class="getback-content">
                                        <p>We will notify you after construction</p>
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
                            </div>
                        </div>

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
                    </div>
                </div>
                <!-- /Under Construction -->

            </div>

            <!-- Error Img -->
            <div class="error-imgs count-imgs">
                <img src="{{ URL::asset('/assets/img/bg/error-01.png') }}" alt="img" class="error-01 error-bg">
                <img src="{{ URL::asset('/assets/img/bg/error-01.png') }}" alt="img" class="error-05 error-bg">
                <img src="{{ URL::asset('/assets/img/bg/error-02.png') }}" alt="img" class="error-02 error-bg">
                <img src="{{ URL::asset('/assets/img/bg/error-04.png') }}" alt="img" class="error-04 error-bg">
            </div>
            <!-- /Error Img -->

        </div>
    </div>
    <!-- /Construction Content -->
@endsection
