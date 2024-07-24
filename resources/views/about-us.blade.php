<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            About Us
        @endslot
        @slot('li_2')
            About Us
        @endslot
    @endcomponent

    <!-- About Us -->
    <section class="about-us-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-inner-img">
                                <img src="{{ URL::asset('/assets/img/aboutus/about-us-01.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="about-inner-img">
                                        <img src="{{ URL::asset('/assets/img/aboutus/about-us-02.jpg') }}" class="img-fluid"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="about-inner-img">
                                        <img src="{{ URL::asset('/assets/img/aboutus/about-us-03.jpg') }}" class="img-fluid"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-info">
                        <div class="about-us-head">
                            <h6>About Us</h6>
                            <h2>We Provide Best solutions For Your Business</h2>
                            <p>Welcome to DreamGigs, where innovation meets expertise. We are a dynamic
                                and forward-thinking service marketplace dedicated to connecting individuals
                                and businesses with the best professionals in various fields. Our
                                platform is designed to simplify the process of finding and hiring top-tier services,
                                ensuring a seamless experience for both service providers and seekers.
                            </p>
                            <h5>Our Mission</h5>
                            <p>At DreamGigs, our mission is to empower individuals and businesses by
                                facilitating easy access to a diverse range of high-quality services. We believe in creating
                                a
                                collaborative and inclusive marketplace that
                                fosters growth, creativity, and mutual success.
                            </p>
                        </div>
                        <div class="about-features">
                            <ul class="list-one">
                                <li><span><img src="{{ URL::asset('/assets/img/icons/target-arrow-icon.svg') }}"
                                            alt="img"></span>Diverse Network of Professionals</li>
                                <li><span><img src="{{ URL::asset('/assets/img/icons/target-arrow-icon.svg') }}"
                                            alt="img"></span>Trust and Transparency</li>
                            </ul>
                            <ul class="list-two">
                                <li><span><img src="{{ URL::asset('/assets/img/icons/target-arrow-icon.svg') }}"
                                            alt="img"></span>User Friendly Platform</li>
                                <li><span><img src="{{ URL::asset('/assets/img/icons/target-arrow-icon.svg') }}"
                                            alt="img"></span>Innovation In Technology</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Us -->

    <!-- Why Choose Us -->
    <section class="why-choose-sec">
        <div class="container">
            <div class="about-us-header">
                <h2>Why Choose Us</h2>
                <p>We prioritize your satisfaction through personalized solutions and a commitment to excellence.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-01.svg') }}" alt="img">
                        </div>
                        <h4>Service Commitment</h4>
                        <p> We deliver top-tier solutions, ensuring satisfaction through reliability,
                            transparency, and a dedication to exceeding expectations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-02.svg') }}" alt="img">
                        </div>
                        <h4>Fabulous Experience</h4>
                        <p> Our intuitive interface offers an effortless journey, from browsing
                            services to booking and beyond.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-03.svg') }}" alt="img">
                        </div>
                        <h4>Data Secure</h4>
                        <p> We employ robust encryption, stringent access controls, and ongoing
                            monitoring to safeguard your information.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-04.svg') }}" alt="img">
                        </div>
                        <h4>Fast Service</h4>
                        <p> We prioritize speed without compromising quality, ensuring your
                            needs are met promptly and effectively
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-05.svg') }}" alt="img">
                        </div>
                        <h4>Secure Payment</h4>
                        <p> Enjoy peace of mind with encrypted transactions, trusted gateways,
                            and a commitment to safeguarding your information.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-choose-card">
                        <div class="card-icon">
                            <img src="{{ URL::asset('/assets/img/icons/why-choose-icon-06.svg') }}" alt="img">
                        </div>
                        <h4>Dedicated Support</h4>
                        <p> Our 24/7 customer service team is here to assist you every step of the way.
                            Experience personalized assistance for a seamless journey
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why Choose Us -->

    <!-- Explore Popular Categories -->
    <section class="popular-category-sec">
        <div class="container">
            <div class="about-us-header">
                <h2>Explore Popular Categories</h2>
                <p>From in-demand services to crowd favourites, find what suits your needs</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-category-slider owl-carousel">
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-01.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Digital Marketing </h4>
                                <span>100 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-02.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Programming & Tech </h4>
                                <span>200 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-03.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Writing Translation </h4>
                                <span>100 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-04.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Photography </h4>
                                <span>150 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-05.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Artificial Intelligence </h4>
                                <span>100 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-03.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Writing Translation </h4>
                                <span>100 Services</span>
                            </div>
                        </div>
                        <div class="slider-cards">
                            <div class="popular-cat-card">
                                <div class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/popular-category-04.svg') }}"
                                        alt="img">
                                </div>
                                <h4>Photography </h4>
                                <span>150 Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Explore Popular Categories -->

    <!-- What Our Client Say -->
    <section class="client-review-sec">
        <div class="container">
            <div class="about-us-header">
                <h2>What Our Client Say</h2>
                <p>Hear What Our Clients Have to Say. Explore the Testimonials that Showcase
                    Our Commitment to Excellence
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="review-slider owl-carousel">
                        <div class="review-card">
                            <span class="quotation-icon"><img
                                    src="{{ URL::asset('/assets/img/icons/quotation-icon.svg') }}" alt="img"></span>
                            <h4>Great Work</h4>
                            <p>“Amazing design, easy to customize and a design quality superlative account on its cloud
                                platform
                                for the optimized performance. And we didn't
                                on our original designs.”
                            </p>
                            <div class="star-rate">
                                <span>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </span>
                            </div>
                            <div class="review-user">
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user-17.jpg') }}"
                                        alt="img"></a>
                                <h6><a href="javascript:void(0);">Gloria Weber</a><span>United States</span></h6>
                            </div>
                        </div>
                        <div class="review-card">
                            <span class="quotation-icon"><img
                                    src="{{ URL::asset('/assets/img/icons/quotation-icon.svg') }}" alt="img"></span>
                            <h4>Seamless Experience</h4>
                            <p>“Communication with the service provider was smooth and
                                efficient through the platform's messaging system.
                                The built-in tools for file sharing ensuring a productive experience.”
                            </p>
                            <div class="star-rate">
                                <span>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </span>
                            </div>
                            <div class="review-user">
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user-18.jpg') }}"
                                        alt="img"></a>
                                <h6><a href="javascript:void(0);">John Cramer</a><span>United States</span></h6>
                            </div>
                        </div>
                        <div class="review-card">
                            <span class="quotation-icon"><img
                                    src="{{ URL::asset('/assets/img/icons/quotation-icon.svg') }}" alt="img"></span>
                            <h4>Great Work</h4>
                            <p>“This service marketplace is a game-changer, delivering a polished and
                                professional platform that exceeded our expectations
                                and it saved us time and resources, allowing for a quick launch.”
                            </p>
                            <div class="star-rate">
                                <span>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </span>
                            </div>
                            <div class="review-user">
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user-19.jpg') }}"
                                        alt="img"></a>
                                <h6><a href="javascript:void(0);">Mary Marquez</a><span>United States</span></h6>
                            </div>
                        </div>
                        <div class="review-card">
                            <span class="quotation-icon"><img
                                    src="{{ URL::asset('/assets/img/icons/quotation-icon.svg') }}" alt="img"></span>
                            <h4>Great Work</h4>
                            <p>“This service marketplace is a game-changer, delivering a polished and
                                professional platform that exceeded our expectations
                                and it saved us time and resources, allowing for a quick launch.”
                            </p>
                            <div class="star-rate">
                                <span>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </span>
                            </div>
                            <div class="review-user">
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user-16.jpg') }}"
                                        alt="img"></a>
                                <h6><a href="javascript:void(0);">Joanne Parise</a><span>United States</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /What Our Client Say -->

    <!-- Start As Seller -->
    <section class="start-seller-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="seller-inner-img w-100">
                        <img src="{{ URL::asset('/assets/img/aboutus/about-us-04.jpg') }}" class="img-fluid"
                            alt="img">
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="seller-info-content w-100">
                        <div class="seller-head">
                            <h3>Start As Seller</h3>
                            <p>Embark on a Journey of Entrepreneurship, Launch Your Seller Profile Today.</p>
                            <p class="seller-para">Showcase your expertise on a platform designed for success. Create your
                                seller profile, highlight your skills, and set your services apart.
                                Benefit from our robust marketplace that connects you with a global audience.
                            </p>
                        </div>
                        <div class="seller-feature-list d-flex w-100">
                            <div class="sllers-list">
                                <ul>
                                    <li><span><i class="feather-check-square"></i></span>Set your prices</li>
                                    <li><span><i class="feather-check-square"></i></span>Flexible schedule</li>
                                    <li><span><i class="feather-check-square"></i></span>Build your reputation</li>
                                    <li><span><i class="feather-check-square"></i></span>Provide 24/7 support</li>
                                </ul>
                                <a href="{{ url('signin') }}" class="btn btn-primary w-auto">Become A Seller</a>
                            </div>
                            <div class="seller-small-img w-100">
                                <img src="{{ URL::asset('/assets/img/aboutus/about-us-05.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Start As Seller -->
@endsection
