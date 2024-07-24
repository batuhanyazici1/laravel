<?php $page = 'service-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
    @endcomponent

    <!-- Content -->
    <div class="page-content content">
        <div class="container">
            <div class="row">

                <!-- Service Details -->
                <div class="col-lg-8">

                    <!-- Slider -->
                    <div class="slider-card">
                        <div class="slider service-slider">
                            <div class="service-img-wrap">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-01.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="service-img-wrap">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-02.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="service-img-wrap">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-03.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="service-img-wrap">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-04.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="service-img-wrap">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-05.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                        </div>
                        <div class="slider slider-nav-thumbnails">
                            <div><img src="{{ URL::asset('/assets/img/service/service-slide-01.jpg') }}" class="img-fluid"
                                    alt="Slider Img"></div>
                            <div><img src="{{ URL::asset('/assets/img/service/service-slide-02.jpg') }}" class="img-fluid"
                                    alt="Slider Img"></div>
                            <div><img src="{{ URL::asset('/assets/img/service/service-slide-03.jpg') }}" class="img-fluid"
                                    alt="Slider Img"></div>
                            <div><img src="{{ URL::asset('/assets/img/service/service-slide-04.jpg') }}" class="img-fluid"
                                    alt="Slider Img"></div>
                            <div><img src="{{ URL::asset('/assets/img/service/service-slide-05.jpg') }}" class="img-fluid"
                                    alt="Slider Img"></div>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <!-- Extra Services -->
                    <div class="extra-service">
                        <h3>Get more with Extra Services</h3>
                        <ul class="service-time">
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="delivery-info">
                                            <h6>Full website design and redesign using Elementor</h6>
                                            <p>Delivery in 1 day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="delivery-amt">
                                            <h6 class="amt">+200</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="delivery-add">
                                            <a href="javascript:void(0);" class="btn btn-light-primary add-btn"><i
                                                    class="feather-plus-circle"></i> Add</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="delivery-info">
                                            <h6>Mobile responsiveness to ensure a seamless user </h6>
                                            <p>Delivery in 1 day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="delivery-amt">
                                            <h6 class="amt">+500</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="delivery-add">
                                            <a href="javascript:void(0);" class="btn btn-light-primary add-btn"><i
                                                    class="feather-plus-circle"></i> Add</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="delivery-info">
                                            <h6>Speed Optimization</h6>
                                            <p>Delivery in 1 day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="delivery-amt">
                                            <h6 class="amt">+200</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="delivery-add">
                                            <a href="javascript:void(0);" class="btn btn-light-primary add-btn"><i
                                                    class="feather-plus-circle"></i> Add</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /Extra Services -->

                    <!-- About Gigs -->
                    <div class="service-wrap">
                        <h3>About this Gig</h3>
                        <p>Amazon affiliate marketing autopilot website with google SEO Autoblog for Making Money
                            OnlineAffiliate marketing is an excellent way to earn passive income. this type of website
                            doesn't require any extra maintenance or technical knowledge to run.</p>
                        <p>Every product will be linked with your unique affiliate ID so that you will earn commissions on
                            every sale. Autoblog Feature will automatically add high-quality blog content relevant to your
                            niche to the site. No maintenance is required!With my service, you will get a Complete Automatic
                            amazon affiliate website with auto blogs for passive income</p>
                    </div>
                    <!-- /About Gigs -->

                    <!-- Why Work With Me -->
                    <div class="service-wrap">
                        <h3>Why Work With Me</h3>
                        <ul class="service-lists">
                            <li>I have five years+ of experience in affiliate marketing, and I am running my own affiliate
                                marketing business, so I have an understanding of how these things really work with google
                                SEO</li>
                            <li>I will not leave you alone after delivery like others. Happy to provide Lifetime 24/7
                                Ongoing Support. Also, I will give you a secret guide that will help you to get Quick
                                traffic and sales to the website.</li>
                        </ul>
                        <p>If you want to know more about how the Amazon Affiliate website work, contact me, and I'll
                            personally explain everything in detail :)</p>
                    </div>
                    <!-- /Why Work With Me -->

                    <!-- Recent Works -->
                    <div class="service-wrap">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <h3>Checkout My Recent Works</h3>
                            </div>
                            <div class="col-sm-4">
                                <div class="owl-nav mynav1 nav-control"></div>
                            </div>
                        </div>
                        <div class="owl-carousel recent-carousel">
                            <div class="recent-img">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-01.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="recent-img">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-02.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="recent-img">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-03.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                            <div class="recent-img">
                                <img src="{{ URL::asset('/assets/img/service/service-slide-04.jpg') }}" class="img-fluid"
                                    alt="Slider Img">
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Works -->

                    <!-- FAQ Lists -->
                    <div class="service-wrap">
                        <h3>FAQ</h3>
                        <div class="faq-lists">
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqone"
                                        aria-expanded="false">Do you offer assistance after the order has been
                                        completed?</a>
                                </h4>
                                <div id="faqone" class="card-collapse collapse">
                                    <div class="faq-content">
                                        <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                            website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo"
                                        aria-expanded="false">Can I choose my favorite Product category or Niche?</a>
                                </h4>
                                <div id="faqtwo" class="card-collapse collapse">
                                    <div class="faq-content">
                                        <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                            website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqOne"
                                        aria-expanded="false">Can I add products myself?</a>
                                </h4>
                                <div id="faqOne" class="card-collapse collapse">
                                    <div class="faq-content">
                                        <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                            website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqfour"
                                        aria-expanded="false">Are there any additional or hidden charges?</a>
                                </h4>
                                <div id="faqfour" class="card-collapse collapse">
                                    <div class="faq-content">
                                        <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                            website. Whenever you encounter a problem, feel free to reach out to me anytime.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /FAQ Lists -->

                    <!-- Review Lists -->
                    <div class="review-widget">
                        <div class="review-title sort-search-gigs">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h3>Reviews (45)</h3>
                                </div>
                                <div class="col-sm-6">
                                    <div class="search-filter-selected">
                                        <div class="form-group mb-0">
                                            <span class="sort-text">Sort By</span>
                                            <select class="select">
                                                <option>Recommended</option>
                                                <option>Date</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="review-lists">
                            <li>
                                <div class="review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}" alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
                                                <p><i class="feather-map-pin"></i>London</p>
                                            </div>
                                            <div class="reviewer-rating">
                                                <div class="star-rate">
                                                    <span class="ratings">
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                    </span>
                                                    <span class="rating-count">5.0 </span>
                                                </div>
                                                <p>1 Months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>I recently hired a him to help me with a project and I must say, I am extremely
                                            impressed with their work. From start to finish, the freelancer was
                                            professional, efficient, and a pleasure to work with.</p>
                                        <a href="javascript:void(0);" class="reply-btn"><i
                                                class="feather-corner-up-left"></i>Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/user/user-11.jpg') }}" alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Simon</a></h6>
                                                <p><i class="feather-map-pin"></i>Newyork</p>
                                            </div>
                                            <div class="reviewer-rating">
                                                <div class="star-rate">
                                                    <span class="ratings">
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <span class="rating-count">4.0 </span>
                                                </div>
                                                <p>15 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>One of the things that stood out to me the most was the his ability to meet
                                            deadlines. He able to deliver the project on time, despite a tight deadline.
                                            This showed their professionalism and dedication to their work.</p>
                                        <a href="javascript:void(0);" class="reply-btn"><i
                                                class="feather-corner-up-left"></i>Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Dane jose</a></h6>
                                                <p><i class="feather-map-pin"></i>Sweden</p>
                                            </div>
                                            <div class="reviewer-rating">
                                                <div class="star-rate">
                                                    <span class="ratings">
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                        <i class="fa-solid fa-star filled"></i>
                                                    </span>
                                                    <span class="rating-count">5.0 </span>
                                                </div>
                                                <p>1 Months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Overall, I highly recommend this freelancer to anyone looking for high-quality
                                            work and exceptional service. They are a true professional and I will definitely
                                            be hiring them again for future projects. Thank you for your hard work and
                                            dedication!</p>
                                        <a href="javascript:void(0);" class="reply-btn"><i
                                                class="feather-corner-up-left"></i>Reply</a>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="review-img">
                                                    <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                        alt="img">
                                                </div>
                                                <div class="reviewer-info">
                                                    <div class="reviewer-loc">
                                                        <h6><a href="javascript:void(0);">Harry</a></h6>
                                                        <p><i class="feather-map-pin"></i>France</p>
                                                    </div>
                                                    <div class="reviewer-rating">
                                                        <div class="star-rate">
                                                            <span class="ratings">
                                                                <i class="fa-solid fa-star filled"></i>
                                                                <i class="fa-solid fa-star filled"></i>
                                                                <i class="fa-solid fa-star filled"></i>
                                                                <i class="fa-solid fa-star filled"></i>
                                                                <i class="fa-solid fa-star filled"></i>
                                                            </span>
                                                            <span class="rating-count">5.0 </span>
                                                        </div>
                                                        <p>1 Months ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>Thank you</p>
                                                <a href="javascript:void(0);" class="reply-btn"><i
                                                        class="feather-corner-up-left"></i>Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

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
                    </div>
                    <!-- /Review Lists -->

                    <!-- Related Tags -->
                    <div class="service-wrap tags-widget">
                        <h3>Related Tags</h3>
                        <ul class="tags">
                            <li>
                                <a href="javascript:void(0);">Wordpress design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Plugin</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Related Tags -->

                </div>
                <!-- /Service Details -->

                <!-- Member Details -->
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="service-widget">
                        <div class="service-amt d-flex align-items-center justify-content-between">
                            <p>Price</p>
                            <h2>$256 <span class="text-decoration-line-through fs-6">$300</span></h2>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#order_details"
                            class="btn btn-primary w-100"><i class="feather-shopping-cart"></i> Buy this gig</a>
                        <div class="row gx-3 row-gap-3">
                            <div class="col-xl-4 col-lg-6 col-sm-4 col-6">
                                <div class="buy-box">
                                    <i class="feather-clock"></i>
                                    <p>Delivery Time</p>
                                    <h6>1 day</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-4 col-6">
                                <div class="buy-box">
                                    <i class="feather-cloud"></i>
                                    <p>Total Sales</p>
                                    <h6>15</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-4 col-6">
                                <div class="buy-box">
                                    <i class="feather-eye"></i>
                                    <p>Total Views</p>
                                    <h6>800</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-widget member-widget">
                        <div class="user-details">
                            <div class="user-img">
                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="img">
                            </div>
                            <div class="user-info">
                                <h5><span class="me-2">Adrian Revolt</span> <span class="badge badge-success"><i
                                            class="fa-solid fa-circle"></i> Online</span></h5>
                                <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                            </div>
                        </div>
                        <ul class="member-info">
                            <li>
                                From
                                <span>United States</span>
                            </li>
                            <li>
                                Member Since
                                <span>25 Jan 2024</span>
                            </li>
                            <li>
                                Speaks
                                <span>English, Portugese</span>
                            </li>
                            <li>
                                Last Project Delivery
                                <span>29 Jan 2024</span>
                            </li>
                            <li>
                                Avg Response Time
                                <span>About 8 hours</span>
                            </li>
                        </ul>
                        <div class="about-me">
                            <h6>About Me</h6>
                            <p>Hello, Greetings! My name is Adrian, and I am an experienced affiliate marketer and website
                                developer<span class="more-content">I have over five years experience in digital affiliate
                                    marketing & WordPress website development.</span></p>
                            <a href="javascript:void(0);" class="read-more">Read More</a>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#contact_me"
                            class="btn btn-primary mb-0 w-100">Contact Me</a>
                    </div>
                </div>
                <!-- /Member Details -->

            </div>

            <!-- Recent Work -->
            <div class="recent-works">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-sec">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3>Recent Works</h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="owl-nav worknav nav-control nav-top"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gigs-slider owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider">
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-13.jpg') }}"
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
                                        <a href="{{ url('service') }}"><span class="badge bg-danger"><i
                                                    class="fa-solid fa-meteor"></i>Hot</span></a>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" class="video-icon"><i
                                                class="feather-video"></i></a>
                                        <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{ url('user-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-10.jpg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{ url('service') }}"><span class="badge bg-primary-light">Video
                                                Marketing</span></a>
                                        <p><i class="feather-map-pin"></i>Chicago</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do creating and promoting video
                                                content to engage audiences</a></h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.2 (65 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div>
                                            <a href="javascript:void(0);" class="share-icon"><i
                                                    class="feather-share-2"></i></a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$600</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider">
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-14.jpg') }}"
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
                                        <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{ url('user-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{ url('service') }}"><span class="badge bg-primary-light">Local
                                                SEO</span></a>
                                        <p><i class="feather-map-pin"></i>Moscow</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">Optimizing online presence to enhance
                                                visibility in local search...</a></h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div>
                                            <a href="javascript:void(0);" class="share-icon"><i
                                                    class="feather-share-2"></i></a>
                                            <span class="badge">Delivery in 2 day</span>
                                        </div>
                                        <h5>$550</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider">
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-15.jpg') }}"
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
                                        <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{ url('user-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{ url('service') }}"><span class="badge bg-primary-light">Mobile
                                                Marketing</span></a>
                                        <p><i class="feather-map-pin"></i>Norwich</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">Optimizing marketing strategies for
                                                mobiles & app based promotions</a></h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div>
                                            <a href="javascript:void(0);" class="share-icon"><i
                                                    class="feather-share-2"></i></a>
                                            <span class="badge">Delivery in 1 day</span>
                                        </div>
                                        <h5>$720</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider">
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                    class="img-fluid" alt="img"></a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-01.jpg') }}"
                                                    class="img-fluid" alt="img"></a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}"><img
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}"
                                                    class="img-fluid" alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="user-thumb">
                                        <a href="{{ url('user-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="{{ url('service') }}"><span class="badge bg-primary-light">Digital
                                                Marketing</span></a>
                                        <p><i class="feather-map-pin"></i>Indonesia</p>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">Embedded Android & AOSP
                                                customizations</a></h3>
                                    </div>
                                    <div class="star-rate">
                                        <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <div>
                                            <a href="javascript:void(0);" class="share-icon"><i
                                                    class="feather-share-2"></i></a>
                                            <span class="badge">Delivery in 2 day</span>
                                        </div>
                                        <h5>$900</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Recent Work -->

        </div>
    </div>
    <!-- /Content -->
@endsection
