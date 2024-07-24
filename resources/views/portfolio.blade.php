<?php $page = 'portfolio'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Portfolio
        @endslot
        @slot('li_2')
            Portfolio
        @endslot
    @endcomponent

    <!-- Contact Us -->
    <div class="page-content content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image" src="{{ URL::asset('assets/img/gallery/gallery-01.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Digital Marketing</h4>
                                <p>Website Promotion</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image"
                                src="{{ URL::asset('assets/img/gallery/gallery-02.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Social Media</h4>
                                <p>Ecommerce Seo</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image"
                                src="{{ URL::asset('assets/img/gallery/gallery-03.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Artificial Intelligence</h4>
                                <p>Promoted Listings</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image"
                                src="{{ URL::asset('assets/img/gallery/gallery-04.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Digital Marketing</h4>
                                <p>Website Promotion</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image"
                                src="{{ URL::asset('assets/img/gallery/gallery-05.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Videography</h4>
                                <p>Promotion Video</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-widget">
                        <a href="{{ url('portfolio-details') }}">
                            <img class="img-fluid" alt="Image"
                                src="{{ URL::asset('assets/img/gallery/gallery-06.jpg') }}">
                            <div class="gallery-overlay">
                                <h4>Design</h4>
                                <p>Logo Design</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact Us -->
@endsection
