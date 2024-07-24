<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="banner-bg-imgs">
        <img src="{{URL::asset('/assets/img/bg/banner-bg-01.png')}}" class="banner-bg-one" alt="img">
        <img src="{{URL::asset('/assets/img/bg/banner-bg-02.png')}}" class="banner-bg-two" alt="img">
        <img src="{{URL::asset('/assets/img/bg/banner-bg-03.png')}}" class="banner-bg-three" alt="img">
        <img src="{{URL::asset('/assets/img/bg/banner-bg-04.png')}}" class="banner-bg-four" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="banner-content aos" data-aos="fade-up">
                    <div class="banner-head">
                        <h1>Connecting Talented Translators with Opportunities</h1>
                        <p>A large number of individuals use us to transform their thoughts into the real world.</p>
                    </div>
                    <div class="banner-form">
                        <form action="{{url('service')}}">
                            <div class="banner-search-list">
                                <div class="input-block">
                                    <label>Category</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Digital Marketing</option>
                                        <option>Writing</option>
                                        <option>Social Media</option>
                                    </select>
                                </div>
                                <div class="input-block">
                                    <label>Location</label>
                                    <div class="input-locaion">
                                        <input type="text" class="form-control" placeholder="Miami, USA">
                                        <img src="{{URL::asset('/assets/img/icons/map-pin-heart.svg')}}" alt="Icon">
                                    </div>
                                </div>
                                <div class="input-block border-0">
                                    <label>Keyword</label>
                                    <input type="text" class="form-control" placeholder="Need Graphic Designer">
                                </div>
                            </div>
                            <div class="input-block-btn">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-magnifying-glass"></i> Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Explore Gigs -->
<section class="explore-gigs-section">
    <div class="container">
        <div class="section-head d-flex">
            <div class="section-header aos" data-aos="fade-up">
                <h2><span>Explore</span> Our Gigs.</h2>
            </div>
            <div class="section-tab">
                <ul class="nav nav-pills inner-tab aos" id="pills-tab" role="tablist" data-aos="fade-up">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular"
                            aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest"
                            aria-selected="true">Latest</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-rating" type="button" role="tab" aria-controls="pills-rating"
                            aria-selected="false">Top Ratings</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-trend-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-trend" type="button" role="tab" aria-controls="pills-trend"
                            aria-selected="false">Trending </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content dashboard-tab">
            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                aria-labelledby="pills-popular-tab">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming & Tech
                                        </a>
                                        <small>+1</small>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Newyork</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">London</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Canada</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Digital Marketing
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Indonesia</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">Embedded Android & AOSP
                                                customizations</a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 4 days</span>
                                        </div>
                                        <h5>$900</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Writing & Translation
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Tunsania</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gigs-card-slider owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming & Tech
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Newyork</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do english or german transcript of any audio file or video
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Videography
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">London</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 5 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Canada</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 8 days</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Digital Marketing
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Indonesia</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">Embedded Android & AOSP
                                                customizations</a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$900</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Writing & Translation
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Tunsania</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gigs-card-slider owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming & Tech
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Newyork</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do english or german transcript of any audio file or video
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 7 days</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Videography
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">London</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 10 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Music & Audio
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Canada</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Digital Marketing
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Indonesia</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">Embedded Android & AOSP
                                                customizations</a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 3 days</span>
                                        </div>
                                        <h5>$900</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Writing & Translation
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Tunsania</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-trend" role="tabpanel" aria-labelledby="pills-trend-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gigs-card-slider owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming & Tech
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Newyork</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do english or german transcript of any audio file or video
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 12 days</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Videography
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">London</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 5 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Music & Audio
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Canada</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 9 days</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Digital Marketing
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Indonesia</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">Embedded Android & AOSP
                                                customizations</a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 3 days</span>
                                        </div>
                                        <h5>$900</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/gigs/gigs-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="service-details" class="badge bg-primary-light">
                                            Writing & Translation
                                        </a>
                                        <p><img src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon">Tunsania</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 4 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Explore Gigs -->

<!-- Popular -->
<section class="popular-section bg-primary-gradient">
    <div class="container">
        <div class="section-header aos" data-aos="fade-up">
            <h2 class="text-white"><span>Popular</span> Categories.</h2>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 align-items-center">

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-03.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Digital Marketing</h5>
                        <p>100 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-06.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Digital Marketing</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-04.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Programming & Tech</h5>
                        <p>200 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-05.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Programming & Tech</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-05.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Writing Translation</h5>
                        <p>180 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-07.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Writing Translation</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-06.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Photography</h5>
                        <p>230 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-08.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Photography</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-07.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Artificial Intelligence</h5>
                        <p>310 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-02.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Artificial Intelligence</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-08.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Music & Audio</h5>
                        <p>270 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-04.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Music & Audio</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-09.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Design</h5>
                        <p>450 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-11.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Design</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-10.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Business</h5>
                        <p>330 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-03.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Business</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-11.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Marketing & Sales</h5>
                        <p>250 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-09.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Marketing & Sales</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

            <!-- Category Grid -->
            <div class="col d-flex aos" data-aos="fade-up">
                <div class="category-grid flex-fill">
                    <div class="popular-icon">
                        <span>
                            <img src="{{URL::asset('/assets/img/icons/category-icon-12.svg')}}" alt="Icon">
                        </span>
                    </div>
                    <div class="popular-content">
                        <h5>Social Media</h5>
                        <p>180 Services</p>
                    </div>
                    <div class="category-overlay">
                        <a href="{{url('categories')}}">
                            <div class="category-overlay-img">
                                <img src="{{URL::asset('/assets/img/service/service-01.jpg')}}" class="img-fluid"
                                    alt="Service">
                                <div class="category-overlay-content">
                                    <h5>Social Media</h5>
                                    <i class="feather-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Category Grid -->

        </div>
    </div>
</section>
<!-- /Popular -->

<!-- Listings -->
<section class="listing-section">
    <div class="container">
        <div class="section-header aos" data-aos="fade-up">
            <h2><span>Our</span> Inspiring Listings</h2>
        </div>

        <!-- Listing Tabs -->
        <div class="listing-tab">
            <div class="listing-slider">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#writing_translation">
                            Writing & Translation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#ai_services">
                            AI Services
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#graphics_design">
                            Graphics & Design
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#data_analysis">
                            Data Analysis
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#analytics_strategy">
                            Analytics & Strategy
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#search_list">
                            Search
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#video_animation">
                            Video & Animation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Listing Tabs -->

        <div class="tab-content">

            <!-- Writing & Translation -->
            <div class="tab-pane fade show active" id="writing_translation" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Writing
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Writing & Translation -->

            <!-- AI Services -->
            <div class="tab-pane fade" id="ai_services" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do english or german transcript of any audio file or video
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Marketing
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /AI Services -->

            <!-- Graphics & Design -->
            <div class="tab-pane fade" id="graphics_design" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Logo Design
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional, unique and modern business logo
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>California, Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Vector
                                            Graphics</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will design unique, simple and modern custom icons set
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-02.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-01.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}"
                                            class="badge bg-primary-light">Illustration</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do vector tracing or convert to vector quickly
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Design
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will simple, unique and modern design custom icons set
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Graphics & Design -->

            <!-- Search -->
            <div class="tab-pane fade" id="search_list" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Writing
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Search -->

            <!-- Data Analysis -->
            <div class="tab-pane fade" id="data_analysis" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Data</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do product data information & syetem analysis
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Data Analysis -->

            <!-- Analytics & Strategy -->
            <div class="tab-pane fade" id="analytics_strategy" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-10.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Translation
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do product & professional lifestyle photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-09.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Analytics & Strategy -->

            <!-- Video & Animation -->
            <div class="tab-pane fade" id="video_animation" role="tabpanel">
                <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-12">
                        <div class="gigs-card-slider listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">Music &
                                            Audio</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will develop openai, dalle, chat gpt app for mobile
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Canada</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$830</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-12.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-07.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-08.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-warning"><i
                                                    class="feather-star"></i>Featured</span></a>
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Programming
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I will do english or german transcript of any audio file or video
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Newyork</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$780</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-11.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-05.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-06.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service')}}" class="badge bg-primary-light">Videography</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                I I will do professional lifestyle and product photography
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>London</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 2 days</span>
                                        </div>
                                        <h5>$350</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-13.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-03.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('service-details')}}">
                                                <img src="{{URL::asset('/assets/img/list/list-04.jpg')}}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <a href="{{url('service')}}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);">
                                            <i class="feather-video"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{url('user-profile')}}">
                                            <img src="{{URL::asset('/assets/img/user/user-05.jpg')}}" alt="user">
                                        </a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{url('service-details')}}" class="badge bg-primary-light">
                                            Marketing
                                        </a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>3.8 (11 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{url('service-details')}}">
                                                Embedded Android & AOSP customizations
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="gigs-location"><span><img
                                                src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                alt="Icon"></span>Tunsania</p>
                                    <div class="gigs-card-footer">
                                        <div class="gigs-share">
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-image"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="img-icon">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="feather-share-2"></i>
                                            </a>
                                            <span class="badge">Delivery in 6 days</span>
                                        </div>
                                        <h5>$400</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Video & Animation -->

        </div>
    </div>
</section>
<!-- /Listings -->

<!-- Find Your Needs -->
<section class="provide-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9">
                <div class="section-header aos" data-aos="fade-up">
                    <h2><span>We’r</span> here help to find your Needs.</h2>
                    <p>Over 74K listings of Gigs- available today for you.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="provide-box">
                    <div class="provide-icon">
                        <img src="{{URL::asset('/assets/img/icons/ipad-icon.svg')}}" alt="icon">
                    </div>
                    <h3>Buy a Service</h3>
                    <p>Explore homy’s 50K+ Service and uncover your ideal needs.</p>
                    <a href="{{url('service')}}" class="btn btn-primary">Get Started<i
                            class="fa-solid fa-caret-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="provide-box">
                    <div class="provide-icon">
                        <img src="{{URL::asset('/assets/img/icons/service-icon.svg')}}" alt="icon">
                    </div>
                    <h3>Sell a Service</h3>
                    <p>Explore homy’s 50K+ Service and uncover your ideal needs.</p>
                    <a href="{{url('add-gigs')}}" class="btn btn-primary">Add Service<i
                            class="fa-solid fa-caret-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="provide-box">
                    <div class="provide-icon">
                        <img src="{{URL::asset('/assets/img/icons/user-icon-01.svg')}}" alt="icon">
                    </div>
                    <h3>Join Us</h3>
                    <p>Explore homy’s 50K+ Service and uncover your ideal needs.</p>
                    <a href="{{url('signup')}}" class="btn btn-primary">Get Started<i
                            class="fa-solid fa-caret-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Find Your Needs -->

<!-- Clinets -->
<div class="client-slider-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header aos" data-aos="fade-up">
                    <p>Trusted by 300+ Client around globe</p>
                </div>
                <div class="clients-slider owl-carousel">
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-01.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-02.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-03.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-04.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-05.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-06.svg')}}" class="w-auto" alt="img">
                    </div>
                    <div class="client-logo">
                        <img src="{{URL::asset('/assets/img/company/company-logo-07.svg')}}" class="w-auto" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Clinets -->

<!-- Popular Lists -->
<section class="top-listing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header aos" data-aos="fade-up">
                    <h2><span>Top</span> Popular Location Based Listing</h2>
                </div>

                <!-- Listing Tabs -->
                <div class="listing-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#uae">
                                UAE <span>(200)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#usa">
                                USA <span>(250)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#india">
                                India <span>(340)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#bolivia">
                                Bolivia <span>(230)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#canada">
                                Canada <span>(210)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#kuwait">
                                Kuwait <span>(400)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /Listing Tabs -->

                <div class="tab-content country-lists">

                    <!-- UAE -->
                    <div class="tab-pane fade show active" id="uae" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-01.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-02.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Artificial
                                                        Intelligence</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-03.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Programming & Tech</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-04.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /UAE -->

                    <!-- USA -->
                    <div class="tab-pane fade" id="usa" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-05.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Videography</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-06.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Music</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-07.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Tech</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-08.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /USA -->

                    <!-- India -->
                    <div class="tab-pane fade" id="india" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-09.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Ui Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-10.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Artificial
                                                        Intelligence</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-11.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Audio</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-12.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /India -->

                    <!-- Bolivia -->
                    <div class="tab-pane fade" id="bolivia" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-13.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-14.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Artificial
                                                        Intelligence</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-03.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Programming & Tech</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-04.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Bolivia -->

                    <!-- Canada -->
                    <div class="tab-pane fade" id="canada" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-02.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-02.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Digital Marketing</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-12.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Writing</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-01.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Canada -->

                    <!-- Kuwait -->
                    <div class="tab-pane fade" id="kuwait" role="tabpanel">
                        <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-12">
                                <div class="gigs-card-slider listing-gigs owl-carousel">
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-02.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>UI Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will develop modern responsive webflow website
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Regina</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$780</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-07.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Marketing</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Newyork</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (40 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will convert figma, xd and PSD to unbounce, instapage
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Venassa</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$350</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 2 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-06.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Programming & Tech</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">Alabama</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will give you mixing, mastering and production lessons
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By Aron Fletcher</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$830</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gigs-grid">
                                        <div class="gigs-img">
                                            <div class="img-slider owl-carousel">
                                                <div class="slide-images">
                                                    <a href="{{url('service-details')}}">
                                                        <img src="{{URL::asset('/assets/img/gigs/list/gigs-05.jpg')}}"
                                                            class="img-fluid" alt="Gigs">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-overlay-badge">
                                                <a href="{{url('service')}}"><span class="badge bg-info"><i
                                                            class="fa-solid fa-circle"></i>Graphics & Design</span></a>
                                            </div>
                                        </div>
                                        <div class="gigs-content">
                                            <div class="gigs-info">
                                                <p class="gigs-location"><img
                                                        src="{{URL::asset('/assets/img/icons/map-pin-check.svg')}}"
                                                        alt="Icon">California</p>
                                                <div class="star-rate">
                                                    <span><i class="fa-solid fa-star"></i>5.0 <span
                                                            class="fw-semibold ms-1"> (28 Reviews)</span></span>
                                                </div>
                                            </div>
                                            <div class="gigs-title">
                                                <h3>
                                                    <a href="{{url('service-details')}}">
                                                        I will do implementing chatbots on websites or messaging apps
                                                    </a>
                                                </h3>
                                                <p class="loc-user-name">By John</p>
                                            </div>
                                            <div class="gigs-card-footer">
                                                <h5><span>From</span>$400</h5>
                                                <div class="gigs-share">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-share-2"></i>
                                                    </a>
                                                    <span class="badge">Delivery in 6 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Kuwait -->

                </div>

                <div class="cta-section">
                    <div class="cta-wrap">
                        <div class="row gx-0 align-items-center">
                            <div class="col-md-8">
                                <div class="cta-info">
                                    <span class="badge">Exploring unique services for your needs</span>
                                    <h3>Looking to Buy/Sell a service?</h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="cta-btn">
                                    <a href="{{url('service')}}" class="btn btn-primary">Find a Premium Provider<i
                                            class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="cta-bg">
                            <div class="cta-bg1">
                                <img src="{{URL::asset('/assets/img/bg/contact-bg-01.png')}}" alt="Shape">
                            </div>
                            <div class="cta-bg2">
                                <img src="{{URL::asset('/assets/img/bg/contact-bg-02.png')}}" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popular-services">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="section-header aos" data-aos="fade-up">
                                <h2><span>Explore</span> Popular Services 2024</h2>
                            </div>
                        </div>

                        <!-- Categories List -->
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="category-item">
                                <div class="category-img">
                                    <a href="{{url('service')}}">
                                        <img src="{{URL::asset('/assets/img/category/category-13.jpg')}}"
                                            class="img-fluid" alt="category img">
                                    </a>
                                    <div class="category-slug">
                                        <a href="{{url('service')}}">Gaming</a>
                                    </div>
                                </div>
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <a href="{{url('service')}}">Game Coaching<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Game Sessions<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Gameplay Recording<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Game Testing<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Other Gaming Services<i
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
                                    <a href="{{url('service')}}">
                                        <img src="{{URL::asset('/assets/img/category/category-02.jpg')}}"
                                            class="img-fluid" alt="category img">
                                    </a>
                                    <div class="category-slug">
                                        <a href="{{url('service')}}">Self Improvement</a>
                                    </div>
                                </div>
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <a href="{{url('service')}}">Self Improvement<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Online Tutoring<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Language Lessons<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Career Counseling<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Life Coaching<i
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
                                    <a href="{{url('service')}}">
                                        <img src="{{URL::asset('/assets/img/category/category-03.jpg')}}"
                                            class="img-fluid" alt="category img">
                                    </a>
                                    <div class="category-slug">
                                        <a href="{{url('service')}}">Wellness & Fitness</a>
                                    </div>
                                </div>
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <a href="{{url('service')}}">Fitness Lessons<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Workout Plans<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Recipe Creation<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Meal Plans<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Nutrition Coaching<i
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
                                    <a href="{{url('service')}}">
                                        <img src="{{URL::asset('/assets/img/category/category-04.jpg')}}"
                                            class="img-fluid" alt="category img">
                                    </a>
                                    <div class="category-slug">
                                        <a href="{{url('service')}}">Lifestyle</a>
                                    </div>
                                </div>
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <a href="{{url('service')}}">Product Photographers<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Food Photographers<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Lifestyle Photographers<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Fashion Photographers<i
                                                    class="feather-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{url('service')}}">Outdoor<i
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
        </div>
    </div>
    <div class="con-bg">
        <img src="{{URL::asset('/assets/img/bg/contact-bg.png')}}" alt="icon">
    </div>
</section>
<!-- /Popular Lists -->

<!-- Testimonials -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header aos" data-aos="fade-up">
                    <h2><span>Why</span> People Love with DreamGigs</h2>
                </div>
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-item aos" data-aos="fade-up">
                        <div class="testimonial-icon">
                            <img src="{{URL::asset('/assets/img/icons/arrow-icon.svg')}}" alt="icon">
                        </div>
                        <h4>Great Work</h4>
                        <p>“The best part about this service is the variety of skills available. I've hired designers,
                            writers, and developers, all in one place.”</p>
                        <div class="star-rate">
                            <span>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                            </span>
                        </div>
                        <div class="testimonial-user">
                            <img src="{{URL::asset('/assets/img/user/user-17.jpg')}}" alt="img">
                            <div class="testimonial-info">
                                <h6>Gloria Weber</h6>
                                <p>United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item aos" data-aos="fade-up">
                        <div class="testimonial-icon">
                            <img src="{{URL::asset('/assets/img/icons/arrow-icon.svg')}}" alt="icon">
                        </div>
                        <h4>Seamless Experience</h4>
                        <p>“I’ve completed several gigs on this site, and the experience has been seamless every time.
                            Great for both freelancers and clients!”</p>
                        <div class="star-rate">
                            <span>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                            </span>
                        </div>
                        <div class="testimonial-user">
                            <img src="{{URL::asset('/assets/img/user/user-18.jpg')}}" alt="img">
                            <div class="testimonial-info">
                                <h6>John Cramer</h6>
                                <p>UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item aos" data-aos="fade-up">
                        <div class="testimonial-icon">
                            <img src="{{URL::asset('/assets/img/icons/arrow-icon.svg')}}" alt="icon">
                        </div>
                        <h4>Great Work</h4>
                        <p>“Finding the right freelancer for my project has never been easier. The platform is
                            user-friendly, and the quality of talent is exceptional.”</p>
                        <div class="star-rate">
                            <span>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                            </span>
                        </div>
                        <div class="testimonial-user">
                            <img src="{{URL::asset('/assets/img/user/user-19.jpg')}}" alt="img">
                            <div class="testimonial-info">
                                <h6>Mary Marquez</h6>
                                <p>United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item aos" data-aos="fade-up">
                        <div class="testimonial-icon">
                            <img src="{{URL::asset('/assets/img/icons/arrow-icon.svg')}}" alt="icon">
                        </div>
                        <h4>Great Effort</h4>
                        <p>“I’ve completed several gigs on this site, and the experience has been seamless every time.
                            Great for both freelancers and clients!”</p>
                        <div class="star-rate">
                            <span>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                                <i class="fa-solid fa-star filled"></i>
                            </span>
                        </div>
                        <div class="testimonial-user">
                            <img src="{{URL::asset('/assets/img/user/user-16.jpg')}}" alt="img">
                            <div class="testimonial-info">
                                <h6>James Don</h6>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-bg">
        <div class="testimonial-bg1">
            <img src="{{URL::asset('/assets/img/bg/testimonial-bg-01.png')}}" alt="Shape">
        </div>
        <div class="testimonial-bg2">
            <img src="{{URL::asset('/assets/img/bg/testimonial-bg-02.png')}}" alt="Shape">
        </div>
        <div class="testimonial-bg3">
            <img src="{{URL::asset('/assets/img/bg/testimonial-bg-03.png')}}" alt="Shape">
        </div>
    </div>
</section>
<!-- /Testimonials -->

<!-- Expert Section -->
<section class="popular-section expert-section">
    <div class="popular-img">
        <div class="popular-img-left">
            <img src="{{URL::asset('/assets/img/bg/banner-bg-04.png')}}" alt="Shape">
        </div>
        <div class="popular-img-right">
            <img src="{{URL::asset('/assets/img/bg/shape-08.png')}}" alt="Shape">
        </div>
    </div>
    <div class="container">
        <div class="expert-header">
            <div class="section-header text-center aos" data-aos="fade-up">
                <h2><span>What</span> Makes DreamGigs Different</h2>
            </div>
        </div>
        <div class="expert-wrapper">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="expert-item">
                        <div class="expert-icon">
                            <img src="{{URL::asset('/assets/img/icons/flag-icon.svg')}}" alt="img">
                        </div>
                        <div class="expert-info">
                            <h4>Trusted Services</h4>
                            <p>Kulla quis velit vel nunc commodo ullamcorper. Pellentesque tincidunt et nisl eget porta.
                                Vestibulum vel </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="expert-item">
                        <div class="expert-icon">
                            <img src="{{URL::asset('/assets/img/icons/expert-icon.svg')}}" alt="img">
                        </div>
                        <div class="expert-info">
                            <h4>Transparent Pricing</h4>
                            <p>Kulla quis velit vel nunc commodo ullamcorper. Pellentesque tincidunt et nisl eget porta.
                                Vestibulum vel </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="expert-item">
                        <div class="expert-icon">
                            <img src="{{URL::asset('/assets/img/icons/users-icon.svg')}}" alt="img">
                        </div>
                        <div class="expert-info">
                            <h4>Trusted Services</h4>
                            <p>Kulla quis velit vel nunc commodo ullamcorper. Pellentesque tincidunt et nisl eget porta.
                                Vestibulum vel </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Expert Section -->

<!-- FAQ -->
<section class="explore-services-sec">
    <div class="section-bg">
        <img src="{{URL::asset('/assets/img/bg/section-bg-06.png')}}" class="explore-bg1" alt="img">
    </div>
    <div class="container">
        <div class="faq-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="faq-heading aos" data-aos="fade-up">
                        <div class="section-header">
                            <h2><span>Your</span> Frequently Added Question’s</h2>
                        </div>
                        <p>Don’t find the answer? We can help you.</p>
                        <a href="{{url('faq')}}" class="btn btn-primary">Ask a Question<i
                                class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-wrapper faq-lists">
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">What
                                    are website development services?</a>
                            </h4>
                            <div id="faqone" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Whether you’re looking to launch, update, or overhaul your website, we offers a
                                        talented pool of freelancers who turn ideas into action. From personal brand
                                        pages to eCommerce stores and everything in between, website development
                                        services cover virtually any use case, industry, and niche. In turn, you can
                                        make every digital first impression count.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">What
                                    are the stages of a project?</a>
                            </h4>
                            <div id="faqtwo" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What
                                    types of service can I pick?</a>
                            </h4>
                            <div id="faqOne" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">How
                                    much does it cost to develop a basic projects?</a>
                            </h4>
                            <div id="faqfour" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqfive"
                                    aria-expanded="false">What are the most popular development platforms?</a>
                            </h4>
                            <div id="faqfive" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trusted-customers-sec">
            <div class="section-bg">
                <img src="{{URL::asset('/assets/img/bg/banner-bg-04.png')}}" class="explore-bg2" alt="img">
            </div>
            <div class="trusted-customers">
                <div class="section-bg">
                    <img src="{{URL::asset('/assets/img/bg/section-bg-03.png')}}" class="trusted-bg-one" alt="img">
                    <img src="{{URL::asset('/assets/img/bg/section-bg-03.png')}}" class="trusted-bg-two" alt="img">
                </div>
                <div class="section-header" data-aos="fade-up" data-aos-delay="500">
                    <h2>Find the right service for your needs</h2>
                    <p>Over 74K listings of Gigs- available today for you.</p>
                </div>
                <div class="more-btn text-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{url('service')}}" class="btn btn-primary"><img
                            src="{{URL::asset('/assets/img/icons/list-search-icon.svg')}}" class="me-2"
                            alt="img">Explore Services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /FAQ -->

@endsection