<?php $page = 'categories-2'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Categories
        @endslot
        @slot('li_2')
            Browse Categories
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content category-wrap">
        <div class="container">
            <div class="row">

                <!-- Category Section -->
                <div class="col-md-12">
                    <div class="marketing-section">
                        <div class="marketing-content">
                            <h2>All Categories</h2>
                            <p>Digital marketing is an essential component of modern business, given the widespread use of
                                the internet and digital devices.</p>
                            <div class="marketing-bg">
                                <img src="{{ URL::asset('assets/img/bg/market-bg.png') }}" alt="img" class="market-bg">
                                <img src="{{ URL::asset('assets/img/bg/market-bg-01.png') }}" alt="img"
                                    class="market-img">
                            </div>
                        </div>
                    </div>

                    <!-- Trending Categories -->
                    <div class="trend-section">
                        <div class="row align-items-center">
                            <div class="col-sm-10">
                                <h3>Trending Categories Today</h3>
                            </div>
                            <div class="col-sm-2 text-sm-end">
                                <div class="owl-nav service-nav nav-control nav-top"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="service-sliders owl-carousel">
                                    <div class="service-box">
                                        <div class="service-info">
                                            <span class="service-icon">
                                                <img src="{{ URL::asset('assets/img/icons/service-01.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <div class="servive-name">
                                                <h5><a href="{{ url('service') }}">Programming & Tech</a></h5>
                                                <p>5678 Sevices</p>
                                            </div>
                                        </div>
                                        <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                                    </div>
                                    <div class="service-box">
                                        <div class="service-info">
                                            <span class="service-icon">
                                                <img src="{{ URL::asset('assets/img/icons/service-02.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <div class="servive-name">
                                                <h5><a href="{{ url('service') }}">Business</a></h5>
                                                <p>1590 Sevices</p>
                                            </div>
                                        </div>
                                        <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                                    </div>
                                    <div class="service-box">
                                        <div class="service-info">
                                            <span class="service-icon">
                                                <img src="{{ URL::asset('assets/img/icons/service-03.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <div class="servive-name">
                                                <h5><a href="{{ url('service') }}">Social Media</a></h5>
                                                <p>7860 Sevices</p>
                                            </div>
                                        </div>
                                        <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                                    </div>
                                    <div class="service-box">
                                        <div class="service-info">
                                            <span class="service-icon">
                                                <img src="{{ URL::asset('assets/img/icons/service-04.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <div class="servive-name">
                                                <h5><a href="{{ url('service') }}">Artificial Intelligence</a></h5>
                                                <p>4590 Sevices</p>
                                            </div>
                                        </div>
                                        <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                                    </div>
                                    <div class="service-box">
                                        <div class="service-info">
                                            <span class="service-icon">
                                                <img src="{{ URL::asset('assets/img/icons/service-02.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <div class="servive-name">
                                                <h5><a href="{{ url('service') }}">Business</a></h5>
                                                <p>590 Sevices</p>
                                            </div>
                                        </div>
                                        <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                                    </div>
                                </div>
                                <!-- /Service Slider -->
                            </div>
                        </div>
                    </div>
                    <!-- /Trending Categories -->

                </div>
                <!-- /Category Section -->

                <!-- Sort By -->
                <div class="sortby-title">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4>10 Categories found with <span>14,787</span> Services</h4>
                        </div>
                    </div>
                </div>
                <!-- /Sort By -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-01.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Business</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-02.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Social Media</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-03.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Artificial Intelligence</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-04.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Music & Audio</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-05.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Programming & Tech</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-06.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Digital Marketing</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-07.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Writing & Translation</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-08.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Photography</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-09.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Marketing & Sales</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-10.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Design</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-11.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Copywriting</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/category/category-12.jpg') }}" class="img-fluid"
                                    alt="category img">
                            </a>
                            <div class="category-slug">
                                <a href="{{ url('service') }}">Events</a>
                            </div>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li>
                                    <a href="{{ url('service') }}">Finance & Accounting<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Consulting<i class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Legal Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Management & Development<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">Other Business Services<i
                                            class="feather-arrow-up-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
