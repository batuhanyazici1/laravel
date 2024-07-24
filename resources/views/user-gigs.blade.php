<?php $page = 'user-gigs'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Manage Gigs
        @endslot
        @slot('li_2')
            Manage Gigs
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!-- Manage Gigs -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Manage Gigs</h3>
                        </div>
                        <div class="head-info">
                            <a href="{{ url('add-gigs') }}" class="btn btn-primary">Add New Gig</a>
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
                                    <div class="fav-selection">
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
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
                                    <div class="fav-selection">
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Ecommerce-Seo</a>
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Music & Audio</a>
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
                                    <div class="fav-selection">
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Programming & Tech</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.7</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">Embedded Android & AOSP
                                                customizations...</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}" alt="img">
                                            <p>By James</p>
                                        </li>
                                        <li class="gigs-loc">
                                            <p><i class="feather-map-pin"></i>Bolivia</p>
                                        </li>
                                    </ul>
                                    <div class="gigs-card-footer">
                                        <h5>$650</h5>
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Chatbot
                                            Integration</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.2</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do implementing chatbots on
                                                websites or messaging apps</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="img">
                                            <p>By David</p>
                                        </li>
                                        <li class="gigs-loc">
                                            <p><i class="feather-map-pin"></i>Manchester</p>
                                        </li>
                                    </ul>
                                    <div class="gigs-card-footer">
                                        <h5>$750</h5>
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">AR Marketing</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.3</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do integrating AR elements into
                                                marketing strategies for customers...</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" alt="img">
                                            <p>By Lance</p>
                                        </li>
                                        <li class="gigs-loc">
                                            <p><i class="feather-map-pin"></i>Derby</p>
                                        </li>
                                    </ul>
                                    <div class="gigs-card-footer">
                                        <h5>$800</h5>
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">PPC Advertising</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.4</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">Managing and optimizing paid
                                                advertising campaigns for search...</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-07.jpg') }}" alt="img">
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Influence Marketing</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.0</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do collaborating with
                                                influencers to promote products and services.</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-08.jpg') }}" alt="img">
                                            <p>By Cindy</p>
                                        </li>
                                        <li class="gigs-loc">
                                            <p><i class="feather-map-pin"></i>Moscow</p>
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
                                        <a href="{{ url('edit-gigs') }}"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="gigs-content">
                                    <div class="gigs-info">
                                        <a href="" class="badge bg-primary-light">Email Marketing</a>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>4.1</span>
                                        </div>
                                    </div>
                                    <div class="gigs-title">
                                        <h3><a href="{{ url('service-details') }}">I will do designing and executing
                                                targeted email campaigns</a></h3>
                                    </div>
                                    <ul class="gigs-user-info">
                                        <li class="gigs-user">
                                            <img src="{{ URL::asset('/assets/img/user/user-09.jpg') }}" alt="img">
                                            <p>By Scott</p>
                                        </li>
                                        <li class="gigs-loc">
                                            <p><i class="feather-map-pin"></i>Norwich</p>
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
                <!-- /Manage Gigs -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
