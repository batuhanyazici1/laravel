<?php $page = 'error-404'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Error -->
    <div class="error-wrapper">
        <div class="error-item">
            <div class="row w-100">

                <!-- 404 Content -->
                <div class="col-md-6 col-sm-8 mx-auto">
                    <div class="error-content text-center">
                        <div class="error-img">
                            <img src="{{ URL::asset('assets/img/error/error-404.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="error-info">
                            <h2>Looks like you are lost</h2>
                            <p>We can’t seem to find the page you ara looking for</p>
                            <a href="{{ url('index') }}" class="btn btn-primary">Go Back<i
                                    class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /404 Content -->

            </div>

            <!-- Error Img -->
            <div class="error-imgs">
                <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img" class="error-01 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-01.png') }}" alt="img" class="error-05 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-02.png') }}" alt="img" class="error-02 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-03.png') }}" alt="img" class="error-03 error-bg">
                <img src="{{ URL::asset('assets/img/bg/error-04.png') }}" alt="img" class="error-04 error-bg">
            </div>
            <!-- /Error Img -->

        </div>
    </div>
    <!-- /Error -->
@endsection
