<?php $page = 'lock-screen'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="error-wrapper lock-screen">

                <!-- Lock Screen -->
                <div class="error-item p-0">
                    <div class="coming-soon text-center">
                        <div class="header-logo">
                            <img src="{{ URL::asset('assets/img/logo.svg') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="login-card">
                            <form action="index">
                                <div class="login-heading">
                                    <h3>Welcome Back</h3>
                                    <div class="lock-user">
                                        <img src="{{ URL::asset('assets/img/user/user-05.jpg') }}" alt="img">
                                        <p>John Doe</p>
                                    </div>
                                </div>
                                <div class="form-wrap form-focus pass-group">
                                    <span class="form-icon">
                                        <i class="toggle-password feather-eye-off"></i>
                                    </span>
                                    <input type="password" class="pass-input form-control  floating">
                                    <label class="focus-label">Enter Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Continue</button>
                            </form>
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
                <!-- /Lock Screen -->

            </div>

            <!-- Background Img -->
            <div class="error-imgs count-imgs">
                <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img" class="error-01 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img" class="error-05 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-02.png') }}" alt="img" class="error-02 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-04.png') }}" alt="img" class="error-04 error-bg">
            </div>
            <!-- /Background Img -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
