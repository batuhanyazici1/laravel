<?php $page = 'service-grid-sidebar'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
    @endcomponent
    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Title -->
            <div class="title-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="title-header">
                            <h3>Programming & Tech</h3>
                            <p>View all your Services for your Business</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title-filter">
                            <div class="form-group search-group">
                                <span class="search-icon"><i class="feather-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search Category">
                            </div>
                            <div class="search-filter-selected">
                                <div class="form-group">
                                    <span class="sort-text">Sort By</span>
                                    <select class="select">
                                        <option>New Arrivals</option>
                                        <option>Featured</option>
                                        <option>Price: High to Low</option>
                                        <option>Price: Low to High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Title -->

            <!-- Search Details -->
            <div class="service-gigs">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-lg-3 theiaStickySidebar">
                        <div class="sidebar-widget">
                            <div class="sidebar-header">
                                <h3>Filter</h3>
                                <a href="#" class="reset-link">Reset Filter</a>
                            </div>

                            <div class="sidebar-body p-0">

                                <!-- Categories -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#categories" aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/category-icon.svg') }}"
                                                alt="icon">Categories
                                        </a>
                                    </h4>
                                    <div id="categories" class="collapse show">
                                        <div class="collapse-body">
                                            <div class="form-group search-group">
                                                <span class="search-icon"><i class="feather-search"></i></span>
                                                <input type="text" class="form-control" placeholder="Search Category">
                                            </div>
                                            <ul class="checkbox-list">
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Programming & Coding</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Data Science & Analysis</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Databases </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Mobile App Development</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Email Template Development</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">CMS Development</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <div class="view-content">
                                                        <div class="viewall-one">
                                                            <ul>
                                                                <li>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                        <span class="checked-title">ECommerce CMS
                                                                            Development</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                        <span class="checked-title">Programming</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="view-all">
                                                            <a href="javascript:void(0);"
                                                                class="viewall-button-one"><span>More 20+
                                                                    Categories</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Categories -->

                                <!-- Locations -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#locations" aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/map-icon.svg') }}"
                                                alt="icon">Locations
                                        </a>
                                    </h4>
                                    <div id="locations" class="collapse show">
                                        <div class="collapse-body">
                                            <div class="form-group search-group">
                                                <span class="search-icon"><i class="feather-search"></i></span>
                                                <input type="text" class="form-control" placeholder="Search Locations">
                                            </div>
                                            <ul class="checkbox-list">
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Canada</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Bolivia</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Tunsania</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">Indonesia</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">UK</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">UAE</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-title">USA</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <div class="view-content">
                                                        <div class="viewall-location">
                                                            <ul>
                                                                <li>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                        <span class="checked-title">Malaysia</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="custom_check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                        <span class="checked-title">Japan</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="view-all">
                                                            <a href="javascript:void(0);"
                                                                class="viewall-btn-location"><span>More 20+
                                                                    Locations</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Locations -->

                                <!-- Seller Details -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#seller" aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/user-icon.svg') }}"
                                                alt="icon">Seller Details
                                        </a>
                                    </h4>
                                    <div id="seller" class="collapse show">
                                        <div class="collapse-body">
                                            <ul class="seller-list">
                                                <li>
                                                    <a href="javascript:void(0):">Seller Level<span><i
                                                                class="feather-chevron-right"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0):">Seller Availability<span><i
                                                                class="feather-chevron-right"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0):">Seller Speaks<span><i
                                                                class="feather-chevron-right"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0):">Seller Lives in<span><i
                                                                class="feather-chevron-right"></i></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Seller Details -->

                                <!-- Ratings -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#ratings"
                                            aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/rating-icon.svg') }}"
                                                alt="icon">Ratings
                                        </a>
                                    </h4>
                                    <div id="ratings" class="collapse show">
                                        <div class="collapse-body">
                                            <ul class="checkbox-list star-rate">
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="ratings">
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                        </span>
                                                        <span class="rating-count">(5.0)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="ratings">
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="rating-count">(4.0)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="ratings">
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star "></i>
                                                        </span>
                                                        <span class="rating-count">(3.0)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="ratings">
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="rating-count">(2.0)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <span class="ratings">
                                                            <i class="fa-solid fa-star filled"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="rating-count">(1.0)</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Ratings -->

                                <!-- Budget -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#budget" aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/money-icon.svg') }}"
                                                alt="icon">Budget
                                        </a>
                                    </h4>
                                    <div id="budget" class="collapse show">
                                        <div class="collapse-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Custom Budget">
                                            </div>
                                            <ul class="checkbox-list">
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget" checked>
                                                        <span class="checkmark"></span><span class="text-dark"> Value
                                                            :</span> Under $4500
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span><span class="text-dark"> Mid-range
                                                            :</span> Under $4500
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span><span class="text-dark"> High-end
                                                            :</span> Under $4500
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Budget -->

                                <!-- Subscription -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#subscription"
                                            aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/subscribe-icon.svg') }}"
                                                alt="icon">Subscription
                                        </a>
                                    </h4>
                                    <div id="subscription" class="collapse show">
                                        <div class="collapse-body">
                                            <ul class="checkbox-list">
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget" checked>
                                                        <span class="checkmark"></span>All Subscription
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span>Basic Plan
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span>Premium Plan
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Subscription -->

                                <!-- Delivery Time -->
                                <div class="collapse-card">
                                    <h4 class="card-title">
                                        <a class="" data-bs-toggle="collapse" href="#deivery"
                                            aria-expanded="true">
                                            <img src="{{ URL::asset('/assets/img/icons/time-icon.svg') }}"
                                                alt="icon">Delivery Time
                                        </a>
                                    </h4>
                                    <div id="deivery" class="collapse show">
                                        <div class="collapse-body">
                                            <ul class="checkbox-list">
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget" checked>
                                                        <span class="checkmark"></span>Enter 24H
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span>Upto 3 days
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span>Upto 7 days
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="budget">
                                                        <span class="checkmark"></span>Anytime
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Delivery Time -->

                            </div>

                            <a href="#" class="btn btn-primary w-100"><i
                                    class="fa-solid fa-caret-right"></i>Filter</a>

                        </div>
                    </div>
                    <!-- /Sidebar -->

                    <div class="col-lg-9">
                        <div class="row">

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}">
                                                    <img src="{{ URL::asset('/assets/img/gigs/gigs-01.jpg') }}"
                                                        class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}">
                                                    <img src="{{ URL::asset('/assets/img/gigs/gigs-06.jpg') }}"
                                                        class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}">
                                                    <img src="{{ URL::asset('/assets/img/gigs/gigs-07.jpg') }}"
                                                        class="img-fluid" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-overlay-badge">
                                            <a href="{{ url('service') }}"><span class="badge bg-warning"><i
                                                        class="feather-star"></i>Featured</span></a>
                                            <a href="{{ url('service') }}"><span class="badge bg-danger"><i
                                                        class="fa-solid fa-meteor"></i>Hot</span></a>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}" class="badge bg-primary-light">Website
                                                Promotion</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>5.0</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3>
                                                <a href="{{ url('service-details') }}">I will do english or german
                                                    transcript of any audio file or video</a>
                                            </h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                                    alt="img">
                                                <p>By John</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Newyork</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$780</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="card-overlay-badge">
                                            <a href="{{ url('service') }}"><span class="badge bg-danger"><i
                                                        class="fa-solid fa-meteor"></i>Hot</span></a>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}"
                                                class="badge bg-primary-light">Ecommerce-Seo</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>4.3</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will do professional lifestyle
                                                    and product photography</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                    alt="img">
                                                <p>By Robert</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>London</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$350</h5>
                                            <span class="badge">Delivery in 2 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-03.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-10.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-11.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="card-overlay-badge">
                                            <a href="{{ url('service') }}"><span class="badge bg-warning"><i
                                                        class="feather-star"></i>Featured</span></a>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}" class="badge bg-primary-light">Music &
                                                Audio</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will develop openai, dalle, chat
                                                    gpt app for mobile</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    alt="img">
                                                <p>By Regina</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Canada</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$830</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-06.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-07.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="card-overlay-badge">
                                            <a href="{{ url('service') }}"><span class="badge bg-warning"><i
                                                        class="feather-star"></i>Featured</span></a>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}" class="badge bg-primary-light">Social
                                                Ecommerce</a> <small>+1</small>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>4.5</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">Embedded Android & AOSP
                                                    customizations...</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                    alt="img">
                                                <p>By Charles</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Indonesia</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$900</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-05.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}"
                                                class="badge bg-primary-light">Promoted Listing</a> <small>+1</small>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>3.8</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will do implementing chatbots on
                                                    websites or messaging apps</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}"
                                                    alt="img">
                                                <p>By George</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Tunsania</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$400</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-06.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-10.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-11.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}"
                                                class="badge bg-primary-light">Ecommerce-Seo</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>3.8</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will do integrating AR elements
                                                    into marketing strategies for customers...</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                    alt="img">
                                                <p>By Smith</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Bolivia</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$950</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-07.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}" class="badge bg-primary-light">Digital
                                                Marketing</a> <small>+1</small>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>4.9</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">Managing and optimizing paid
                                                    advertising campaigns for search...</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-07.jpg') }}"
                                                    alt="img">
                                                <p>By Randoll</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Newyork</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$680</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-06.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-07.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}"
                                                class="badge bg-primary-light">Promoted Listing</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>3.5</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will do collaborating with
                                                    influencers to promote products and services.</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-08.jpg') }}"
                                                    alt="img">
                                                <p>By Pricilla</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Bristol</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$960</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="col-xl-4 col-md-6">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-10.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('service-details') }}"><img
                                                        src="{{ URL::asset('/assets/img/gigs/gigs-11.jpg') }}"
                                                        class="img-fluid" alt="img"></a>
                                            </div>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="{{ url('service-details') }}" class="badge bg-primary-light">Social
                                                Media</a>
                                            <div class="star-rate">
                                                <span><i class="fa-solid fa-star"></i>4.3</span>
                                            </div>
                                        </div>
                                        <div class="gigs-title">
                                            <h3><a href="{{ url('service-details') }}">I will do designing and executing
                                                    targeted email campaigns</a></h3>
                                        </div>
                                        <ul class="gigs-user-info">
                                            <li class="gigs-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-09.jpg') }}"
                                                    alt="img">
                                                <p>By James</p>
                                            </li>
                                            <li class="gigs-loc">
                                                <p><i class="feather-map-pin"></i>Derby</p>
                                            </li>
                                        </ul>
                                        <div class="gigs-card-footer">
                                            <h5>$850</h5>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <div class="col-md-12">

                                <!-- Pagination -->
                                <div class="pagination">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" class="previous"><i
                                                    class="fa-solid fa-chevron-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="active">1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">4</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">5</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="next"><i
                                                    class="fa-solid fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Service Details -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
