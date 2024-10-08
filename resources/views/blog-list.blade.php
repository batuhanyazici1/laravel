<?php $page = 'blog-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Blog List
        @endslot
        @slot('li_2')
            Blog List
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Blogs -->
            <div class="blog">
                <div class="row justify-content-center">

                    <!-- Blog -->
                    <div class="col-lg-8">
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
                                <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                    <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ url('blog-details') }}">How to Choose the Right Freelancer for Your
                                            Project</a></h3>
                                </div>
                                <div class="user-head">
                                    <div class="user-info">
                                        <a href="javascript:void(0);"><img
                                                src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" alt="img"></a>
                                        <h6><a href="javascript:void(0);">Robert Hollenbeck</a><span>Jan 20, 2024</span>
                                        </h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Freelancing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog -->

                    <!-- Blog -->
                    <div class="col-lg-8">
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
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-12.jpg') }}" alt="img"></a>
                                        <h6><a href="javascript:void(0);">Amanda Hansford</a><span>Jan 24, 2024</span></h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Future Trends</a>
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
                    <!-- /Blog -->

                    <!-- Blog -->
                    <div class="col-lg-8">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="{{ url('blog-details') }}"><img
                                        src="{{ URL::asset('/assets/img/blog/blog-07.jpg') }}" class="img-fluid"
                                        alt="img"></a>
                                <div class="fav-selection">
                                    <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="user-head">
                                    <div class="user-info">
                                        <a href="javascript:void(0);"><img
                                                src="{{ URL::asset('/assets/img/user/user-14.jpg') }}" alt="img"></a>
                                        <h6><a href="javascript:void(0);">Joanne Parise</a><span>Jan 28, 2024</span></h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Home Care</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ url('blog-details') }}">Understanding the Benefits of Professional
                                            Cleaning</a></h3>
                                </div>
                                <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                    <p><span><i class="feather-clock"></i></span>15 - 20 mins read</p>
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
