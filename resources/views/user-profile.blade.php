<?php $page = 'user-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            My Profile
        @endslot
        @slot('li_2')
            My Profile
        @endslot
    @endcomponent

    <!-- Content -->
    <div class="page-content content">
        <div class="container">
            <div class="row">

                <!-- Service Details -->
                <div class="col-lg-8">

                    <div class="service-wrap my-profile-info">
                        <div class="my-profile-details">
                            <div class="user-details">
                                <div class="user-img">
                                    <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="img">
                                </div>
                                <div class="user-info">
                                    <h5><span class="me-2">Adrian Revolt</span> <span class="badge badge-success"><i
                                                class="fa-solid fa-circle"></i> Online</span></h5>
                                    <h6>An abundance of creativity</h6>
                                    <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                </div>
                            </div>
                            <div class="user-edit">
                                <a href=""><img src="{{ URL::asset('/assets/img/icons/user-edit.svg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="more-details">
                                    <span class="icon-info"><img
                                            src="{{ URL::asset('/assets/img/icons/map-pin-heart.svg') }}"
                                            alt=""></span>
                                    <h6>From<span>United States</span></h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="more-details">
                                    <span class="icon-info"><img src="{{ URL::asset('/assets/img/icons/user-star.svg') }}"
                                            alt=""></span>
                                    <h6>Member SInce<span>25 Jan 2024</span></h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="more-details">
                                    <span class="icon-info"><img
                                            src="{{ URL::asset('/assets/img/icons/language-katakana.svg') }}"
                                            alt=""></span>
                                    <h6>Speaks<span>English, Portugese</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Me -->
                    <div class="service-wrap">
                        <h3>About Me</h3>
                        <p>Hello, Greetings! My name is Adrian, a professional embroidery digitizer who converts an Image
                            into embroidery files such as DST, PES or any other. I can produce an embroidery design file
                            without any fabric puckering. I'm the guy who has more than 15 years of experience in the field
                            of embroidery design digitizing. I love what I do because embroidery digitizing is my passion
                            and profession. so, get in touch with me if you have any question. thank you!</p>
                    </div>
                    <!-- /About Me -->

                    <!-- Skills -->
                    <div class="service-wrap skills-wrap">
                        <h3>Skills</h3>
                        <ul class="my-skills">
                            <li><span><i class="fa-solid fa-circle"></i>Logo design</span></li>
                            <li><span><i class="fa-solid fa-circle"></i>Graphics Design</span></li>
                            <li><span><i class="fa-solid fa-circle"></i>Adobe illustrator</span></li>
                        </ul>
                    </div>
                    <!-- /Skills -->

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
                                            impressed</p>
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
                                        <p>Firstly, the his communication skills were top-notch.</p>
                                        <a href="javascript:void(0);" class="reply-btn"><i
                                                class="feather-corner-up-left"></i>Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}" alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Andy</a></h6>
                                                <p><i class="feather-map-pin"></i>Bulgaria</p>
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
                                                <p>1 Months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>One of the things that stood out to me the most was the his ability to meet
                                            deadlines.</p>
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
                                            work.</p>
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

                </div>
                <!-- /Service Details -->

                <!-- Member Details -->
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="service-widget member-widget">
                        <ul class="member-info">
                            <li>
                                Last Project Delivery
                                <span>29 Jan 2024</span>
                            </li>
                            <li>
                                Avg. response time
                                <span>about 8 hours</span>
                            </li>
                        </ul>
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
                            </div>
                        </div>
                        <div class="gigs-card-slider profile-work-slide listing-gigs owl-carousel">
                            <div class="gigs-grid">
                                <div class="gigs-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('service-details') }}">
                                                <img src="{{ URL::asset('/assets/img/gigs/list/gigs-01.jpg') }}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <span class="badge bg-info"><i class="fa-solid fa-circle"></i>Graphics &
                                            Design</span>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 <span class="fw-semibold ms-1"> (28
                                                    Reviews)</span></span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">
                                                I will develop modern responsive webflow website...
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <h5>$780</h5>
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
                                            <a href="{{ url('service-details') }}">
                                                <img src="{{ URL::asset('/assets/img/gigs/list/gigs-02.jpg') }}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <span class="badge bg-info"><i class="fa-solid fa-circle"></i>Artificial
                                            Intelligence</span>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 <span class="fw-semibold ms-1"> (40
                                                    Reviews)</span></span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">
                                                I will convert figma, xd and PSD to unbounce, instapage
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <h5>$350</h5>
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
                                            <a href="{{ url('service-details') }}">
                                                <img src="{{ URL::asset('/assets/img/gigs/list/gigs-03.jpg') }}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <span class="badge bg-info"><i class="fa-solid fa-circle"></i>Programming &
                                            Tech</span>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 <span class="fw-semibold ms-1"> (28
                                                    Reviews)</span></span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">
                                                I will give you mixing, mastering and production lessons
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <h5>$830</h5>
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
                                            <a href="{{ url('service-details') }}">
                                                <img src="{{ URL::asset('/assets/img/gigs/list/gigs-04.jpg') }}"
                                                    class="img-fluid" alt="Gigs">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-overlay-badge">
                                        <span class="badge bg-info"><i class="fa-solid fa-circle"></i>Graphics &
                                            Design</span>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 <span class="fw-semibold ms-1"> (28
                                                    Reviews)</span></span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">
                                                I will do implementing chatbots on websites or messaging apps
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="gigs-card-footer">
                                        <h5>$400</h5>
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
            <!-- /Recent Work -->

        </div>
    </div>
    <!-- /Content -->
@endsection
