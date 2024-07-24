<?php $page = 'categories'; ?>
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
    <div class="page-content">
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
                </div>
                <!-- /Category Section -->

                <!-- Sort By -->
                <div class="sortby-title">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4>10 Categories found with <span>14,787</span> Services</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="search-filter-selected float-md-end">
                                <div class="form-group">
                                    <span class="sort-text">Sort By</span>
                                    <select class="select">
                                        <option>New Arrivals</option>
                                        <option>Featured</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sort By -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-01.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$4,580</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Social Media</a></h4>
                                <span>7860 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-02.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$5,620</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Artificial Intelligence</a></h4>
                                <span>4709 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-03.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$4,310</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Business</a></h4>
                                <span>1590 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-04.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$2,780</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Music & Audio</a></h4>
                                <span>1458 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-05.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$8,060</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Programming & Tech</a></h4>
                                <span>5678 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-06.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$2,130</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Digital Marketing</a></h4>
                                <span>1874 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-07.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$4,910</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Writing & Translation</a></h4>
                                <span>2478 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-08.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$3,040</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Photography</a></h4>
                                <span>1454 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-09.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$2,850</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Consulting</a></h4>
                                <span>1274 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-10.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$2,850</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Events</a></h4>
                                <span>1874 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-11.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$4,950</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">Copywriting</a></h4>
                                <span>2478 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Categories List -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-grid">
                        <div class="service-img">
                            <a href="{{ url('service') }}">
                                <img src="{{ URL::asset('assets/img/service/service-12.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                            <div class="avg-price">
                                <h6>Average Price</h6>
                                <span>$6,580</span>
                            </div>
                        </div>
                        <div class="service-type d-flex justify-content-between align-items-center">
                            <div class="servive-name">
                                <h4><a href="{{ url('service') }}">CMS Development</a></h4>
                                <span>1454 Sevices</span>
                            </div>
                            <div class="next-arrow">
                                <a href="{{ url('service') }}"><i class="feather-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Categories List -->

                <!-- Load More -->
                <div class="search-load-btn">
                    <a href="javascript:void(0);" class="btn btn-secondary">
                        <img src="{{ URL::asset('assets/img/icons/loader-icon-01.svg') }}" class="spinner-border"
                            alt="Icon"> Load More
                    </a>
                </div>
                <!-- /Load More -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
