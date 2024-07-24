<?php $page = 'blog-right-sidebar'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Blog Grid
        @endslot
        @slot('li_2')
            Blog Grid
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Blogs -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog">
                        <div class="row">

                            <!-- Blog -->
                            <div class="col-lg-6">
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
                            <!-- /Blog -->

                            <!-- Blog -->
                            <div class="col-lg-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" class="img-fluid"
                                                alt="img"></a>
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
                            <!-- /Blog -->

                            <!-- Blog -->
                            <div class="col-lg-6">
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
                            <!-- /Blog -->

                            <!-- Blog -->
                            <div class="col-lg-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-05.jpg') }}" class="img-fluid"
                                                alt="img"></a>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
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
                            <!-- /Blog -->

                            <!-- Blog -->
                            <div class="col-lg-6">
                                <div class="blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/blog/blog-07.jpg') }}" class="img-fluid"
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
                                                        src="{{ URL::asset('/assets/img/user/user-14.jpg') }}"
                                                        alt="img"></a>
                                                <h6><a href="javascript:void(0);">Joanne Parise</a><span>Jan 28,
                                                        2024</span></h6>
                                            </div>
                                            <div class="badge-text">
                                                <a href="javascript:void(0);" class="badge bg-primary-light">Home Care</a>
                                            </div>
                                        </div>
                                        <div class="blog-title">
                                            <h3><a href="{{ url('blog-details') }}">Understanding the Benefits of
                                                    Professional Cleaning</a></h3>
                                        </div>
                                        <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                            <p><span><i class="feather-clock"></i></span>15 - 20 mins read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog -->

                            <!-- Blog -->
                            <div class="col-lg-6">
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
                            <!-- /Blog -->

                        </div>

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
                    <!-- /Blogs -->

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="blog-sidebar mb-0">

                        <!-- Search -->
                        <div class="card search-widget">
                            <div class="card-header">
                                <h6><img src="{{ URL::asset('/assets/img/icons/search-icon.svg') }}"
                                        alt="icon">Search</h6>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group search-group mb-0">
                                        <span class="search-icon"><i class="feather-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Categories -->
                        <div class="card category-widget">
                            <div class="card-header">
                                <h6><img src="{{ URL::asset('/assets/img/icons/category-icon.svg') }}"
                                        alt="icon">Categories</h6>
                            </div>
                            <div class="card-body">
                                <ul class="categories">
                                    <li><a href="{{ url('categories') }}">Programming & Coding <span>05</span></a></li>
                                    <li><a href="{{ url('categories') }}">Data Science & Analysis <span>08</span></a></li>
                                    <li><a href="{{ url('categories') }}">Databases <span>10</span></a></li>
                                    <li><a href="{{ url('categories') }}">Mobile App Development <span>05</span></a></li>
                                    <li class="mb-0">
                                        <div class="view-content">
                                            <div class="viewall-one">
                                                <ul>
                                                    <li><a href="{{ url('categories') }}">Digital Marketing
                                                            <span>01</span></a></li>
                                                    <li><a href="{{ url('categories') }}">Future trends
                                                            <span>10</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="view-all">
                                                <a href="javascript:void(0);" class="viewall-button-one">More 20+
                                                    Categories</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Categories -->

                        <!-- Recent Blogs -->
                        <div class="card recent-widget">
                            <div class="card-header">
                                <h6><img src="{{ URL::asset('/assets/img/icons/blog-icon.svg') }}" alt="icon">Recent
                                    Blogs</h6>
                            </div>
                            <div class="card-body">
                                <ul class="latest-posts">
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{ url('blog-details') }}">
                                                <img class="img-fluid"
                                                    src="{{ URL::asset('/assets/img/blog/blog-thumb-01.jpg') }}"
                                                    alt="blog-image">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h6>
                                                <a href="{{ url('blog-details') }}">Understanding Service Marketplace
                                                    Fees: A Guide...</a>
                                            </h6>
                                            <div class="blog-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}"
                                                    alt="user">
                                                <div class="blog-user-info">
                                                    <p>David Shorey</p>
                                                    <p class="xs-text">Jan 23, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{ url('blog-details') }}">
                                                <img class="img-fluid"
                                                    src="{{ URL::asset('/assets/img/blog/blog-thumb-02.jpg') }}"
                                                    alt="blog-image">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h6>
                                                <a href="{{ url('blog-details') }}">The Importance of a Portfolio and How
                                                    to Create..</a>
                                            </h6>
                                            <div class="blog-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-13.jpg') }}"
                                                    alt="user">
                                                <div class="blog-user-info">
                                                    <p>Anne Castaneda</p>
                                                    <p class="xs-text">Jan 27, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{ url('blog-details') }}">
                                                <img class="img-fluid"
                                                    src="{{ URL::asset('/assets/img/blog/blog-thumb-03.jpg') }}"
                                                    alt="blog-image">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h6>
                                                <a href="{{ url('blog-details') }}">Graphic Design for Social Media: Tips
                                                    to Engage Your..</a>
                                            </h6>
                                            <div class="blog-user">
                                                <img src="{{ URL::asset('/assets/img/user/user-16.jpg') }}"
                                                    alt="user">
                                                <div class="blog-user-info">
                                                    <p>Dann Bowman</p>
                                                    <p class="xs-text">Jan 30, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Recent Blogs -->

                        <!-- Popular Tags -->
                        <div class="card tag-widget mb-0">
                            <div class="card-header">
                                <h6><img src="{{ URL::asset('/assets/img/icons/tag-icon.svg') }}" alt="icon">Popular
                                    Tags</h6>
                            </div>
                            <div class="card-body">
                                <ul class="tags-list">
                                    <li><a href="#">In-Demand Skills</a></li>
                                    <li><a href="#">Freelancing</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Future Trends</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                    <li><a href="#">Home Care</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Popular Tags -->

                    </div>
                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
