<?php $page = 'user-wishlist'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Wishlist
        @endslot
        @slot('li_2')
            Wishlist
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Wishlist -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Wishlist</h3>
                            <p>Showing 1 to 7 of 17 entries</p>
                        </div>
                        <div class="head-info">
                            <p>Total Wishlist <span class="text-primary">(17)</span></p>
                        </div>
                    </div>

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
                                        <span class="badge bg-warning"><i class="feather-star"></i>Featured</span>
                                        <span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Software
                                            Development</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">Designing and developing software
                                                applications</a>
                                        </h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}" alt="img">
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
                                                    src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}" class="img-fluid"
                                                    alt="img"></a>
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
                                        <span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Lifestyle</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do professional lifestyle and
                                                product photography</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}" alt="img">
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
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Artificial Intelligence</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will develop openai, dalle, chat gpt
                                                app for mobile</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}" alt="img">
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
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Artificial Intelligence</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.6</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will develop openai, dalle, chat gpt
                                                app for mobile</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}" alt="img">
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
                                        <span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Lifestyle</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do professional lifestyle and
                                                product photography</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}" alt="img">
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
                                        <span class="badge bg-warning"><i class="feather-star"></i>Featured</span>
                                        <span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span>
                                    </div>
                                    <div class="fav-selection">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="Remove From Wishlist" class="fav-icon favourite"><i
                                                class="feather-heart"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Software
                                            Development</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3>
                                            <a href="{{ url('service-details') }}">Designing and developing software
                                                applications</a>
                                        </h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}" alt="img">
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

                    </div>

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
                <!-- /User Wishlist -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
