<?php $page = 'blog-mansory'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Blog Mansory
        @endslot
        @slot('li_2')
            Blog Mansory
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Blogs -->
            <div class="blog">
                <div class="row">

                    <!-- Blog -->
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Robert Hollenbeck</a><span>Jan 20,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Freelancing</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">How to Choose the Right Freelancer for
                                                    Your Project</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-04.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-12.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Amanda Hansford</a><span>Jan 24,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Future
                                                    Trends</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">The Future of Remote Work: Trends and
                                                    Predictions</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>15 - 20 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-mansory-03.jpg') }}"
                                                class="img-fluid" alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-14.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Joanne Parise</a><span>Jan 28, 2024</span>
                                                </h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Home Care</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Understanding the Benefits of
                                                    Professional Cleaning Services</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>15 - 20 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog -->

                    <!-- Blog -->
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-mansory-01.jpg') }}"
                                                class="img-fluid" alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-10.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Abigail Garett</a><span>Jan 21,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">In-Demand
                                                    Skills</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Top 10 In-Demand Skills in the Gig
                                                    Economy for 2024</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>05 - 10 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-05.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-09.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Kent Choi</a><span>Jan 25, 2024</span>
                                                </h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Business</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Effective Strategies for Growing Your
                                                    Freelance Business</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>5 - 10 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-08.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-15.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Kylee Zamudio</a><span>Jan 29,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Digital
                                                    Marketing</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Leveraging Digital Marketing Services
                                                    for Small Businesses</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog -->

                    <!-- Blog -->
                    <div class="col-xl-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-11.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">David Shorey</a><span>Jan 23, 2024</span>
                                                </h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">User
                                                    Guide</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Understanding Service Marketplace
                                                    Fees: A Guide for New Users</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-mansory-02.jpg') }}"
                                                class="img-fluid" alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-13.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Anne Castaneda</a><span>Jan 27,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Portfolio</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">The Importance of a Portfolio and How
                                                    to Create One That Stands Out</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-09.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i
                                                    class="feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="user-head">
                                            <div class="user-info">
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/assets/img/user/user-16.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Dann Bowman</a><span>Jan 30, 2024</span>
                                                </h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Graphic
                                                    Design</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Graphic Design for Social Media: Tips
                                                    to Engage Your Audience</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>05 - 10 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog -->

                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="previous"><i class="fa-solid fa-chevron-left"></i></a>
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
                            <a href="javascript:void(0);" class="next"><i class="fa-solid fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /Pagination -->

            </div>
            <!-- /Blogs -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
