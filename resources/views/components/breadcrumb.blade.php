@if (Route::is(['index']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bar-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="breadcrumb-list">
                        <h2 class="breadcrumb-title">{{ $title }}</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">{{ $item1 }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $item2 }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif

@if (
    !Route::is([
        'blog-details-right-sidebar',
        'blog-details-sidebar',
        'blog-details',
        'index',
        'service-details',
        'service-grid-sidebar',
        'service-sub-category',
        'service',
        'portfolio-details',
    ]))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bar-info">
        <div class="breadcrumb-img">
            <div class="breadcrumb-left">
                <img src="{{ URL::asset('/assets/img/bg/banner-bg-03.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">{{ $title }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">{{ $li_1 }}</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title mb-0">
                        {{ $li_2 }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif

@if (Route::is(['blog-details-right-sidebar', 'blog-details-sidebar', 'blog-details']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-info">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Blog Detail</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">
                        How to Choose the Right Freelancer for Your Project
                    </h2>
                    <ul class="info-links">
                        <li>
                            <i class="feather-calendar"></i>Jan 20, 2024
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-12">
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="javascript:void(0);"><span><i class="feather-heart"></i></span>Add to Wishlist</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span><i class="feather-share-2"></i></span>Share this
                                gigs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['service-details']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bar-info breadcrumb-info">
        <div class="breadcrumb-img">
            <div class="breadcrumb-left">
                <img src="{{ URL::asset('assets/img/bg/banner-bg-03.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('service') }}">Services</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Digital Marketing</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">
                        I will design, redesign wordpress website using elementor pro
                    </h2>
                    <ul class="info-links">
                        <li>
                            <i class="feather-calendar"></i>Created 3 weeks ago
                        </li>
                        <li class="order-count">
                            <i class="feather-folder"></i>15 Order in queue
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-12">
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="#"><span><i class="feather-heart"></i></span>Add to Wishlist</a>
                        </li>
                        <li>
                            <a href="#"><span><i class="feather-share-2"></i></span>Share this gigs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif

@if (Route::is(['service-grid-sidebar']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bar-info">
        <div class="breadcrumb-img">
            <div class="breadcrumb-left">
                <img src="{{ URL::asset('assets/img/bg/banner-bg-03.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Services</li>
                            <li class="breadcrumb-item" aria-current="page">Programming & Tech</li>
                        </ol>
                    </nav>
                    <div class="slide-title-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="slider-title">
                                    <h2>Browse Listing & More <span class="text-primary">“ 900 Services ”</span></h2>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="owl-nav service-nav nav-control nav-top"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Slider -->
                    <div class="service-sliders owl-carousel">
                        <div class="service-box">
                            <div class="service-info">
                                <span class="service-icon">
                                    <img src="{{ URL::asset('assets/img/icons/service-01.svg') }}" alt="icon">
                                </span>
                                <div class="servive-name">
                                    <h5><a href="{{ url('service-grid-sidebar') }}">Programming & Tech</a></h5>
                                    <p>5678 Sevices</p>
                                </div>
                            </div>
                            <a href="{{ url('service-grid-sidebar') }}"><i class="feather-arrow-up-right"></i></a>
                        </div>
                        <div class="service-box">
                            <div class="service-info">
                                <span class="service-icon">
                                    <img src="{{ URL::asset('assets/img/icons/service-02.svg') }}" alt="icon">
                                </span>
                                <div class="servive-name">
                                    <h5><a href="{{ url('service-grid-sidebar') }}">Business</a></h5>
                                    <p>1590 Sevices</p>
                                </div>
                            </div>
                            <a href="{{ url('service-grid-sidebar') }}"><i class="feather-arrow-up-right"></i></a>
                        </div>
                        <div class="service-box">
                            <div class="service-info">
                                <span class="service-icon">
                                    <img src="{{ URL::asset('assets/img/icons/service-03.svg') }}" alt="icon">
                                </span>
                                <div class="servive-name">
                                    <h5><a href="{{ url('service-grid-sidebar') }}">Social Media</a></h5>
                                    <p>7860 Sevices</p>
                                </div>
                            </div>
                            <a href="{{ url('service-grid-sidebar') }}"><i class="feather-arrow-up-right"></i></a>
                        </div>
                        <div class="service-box">
                            <div class="service-info">
                                <span class="service-icon">
                                    <img src="{{ URL::asset('assets/img/icons/service-04.svg') }}" alt="icon">
                                </span>
                                <div class="servive-name">
                                    <h5><a href="{{ url('service-grid-sidebar') }}">Artificial Intelligence</a></h5>
                                    <p>4590 Sevices</p>
                                </div>
                            </div>
                            <a href="{{ url('service-grid-sidebar') }}"><i class="feather-arrow-up-right"></i></a>
                        </div>
                        <div class="service-box">
                            <div class="service-info">
                                <span class="service-icon">
                                    <img src="{{ URL::asset('assets/img/icons/service-02.svg') }}" alt="icon">
                                </span>
                                <div class="servive-name">
                                    <h5><a href="{{ url('service-grid-sidebar') }}">Business</a></h5>
                                    <p>590 Sevices</p>
                                </div>
                            </div>
                            <a href="{{ url('service-grid-sidebar') }}"><i class="feather-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /Service Slider -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif

@if (Route::is(['service-sub-category', 'service']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bar-info">
        <div class="breadcrumb-img">
            <div class="breadcrumb-left">
                <img src="{{ URL::asset('/assets/img/bg/banner-bg-03.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('service') }}">Services</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('service') }}">Digital Marketing</a>
                            </li>
                            @if (Route::is('service-sub-category'))
                                <li class="breadcrumb-item" aria-current="page">Ecommerce-Seo</li>
                            @endif
                        </ol>
                    </nav>
                    @if (Route::is('service-sub-category'))
                        <h2 class="breadcrumb-title mb-0">
                            Browse Ecommerce-Seo Services <span class="text-primary">“ 500 Services ”</span>
                        </h2>
                    @endif
                    @if (Route::is('service'))
                        <h2 class="breadcrumb-title mb-0">
                            Browse Digital Marketing Services <span class="text-primary">“ 900 Services ”</span>
                        </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif

@if (Route::is(['portfolio-details']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-img">
            <div class="breadcrumb-left">
                <img src="{{ URL::asset('/assets/img/bg/banner-bg-03.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Portfolio Detail</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">
                        Portfolio Detail
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
