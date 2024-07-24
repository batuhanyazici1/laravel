<?php $page = 'user-reviews'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Reviews
        @endslot
        @slot('li_2')
            Reviews
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Reviews -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Reviews</h3>
                            <p>Showing 1 to 7 of 17 entries</p>
                        </div>
                        <div class="head-info">
                            <p>Total Reviews <span class="text-primary">(17)</span></p>
                        </div>
                    </div>
                    <div class="table-filter">
                        <ul class="filter-item">
                            <li>
                                <p>Filter</p>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}" alt="icon">
                                    </span>
                                    <input type="text" class="form-control datetimepicker" placeholder="From Date">
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/user-heart.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Reviewed By</option>
                                        <option>Jones</option>
                                        <option>Andrea</option>
                                        <option>Martin</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <div class="form-wrap search-form">
                            <span class="form-icon">
                                <i class="feather-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="user-review">
                        <ul class="review-lists">
                            <li>
                                <div class="review-wrap">
                                    <div>
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
                                                    <p>2 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <h6>I will do designing and executing targeted email campaigns</h6>
                                            <p>I recently hired a him to help me with a project and I must say, I am
                                                extremely impressed with their work. From start to finish, the freelancer
                                                was professional, efficient, and a pleasure to work with.</p>
                                        </div>
                                    </div>
                                    <div class="table-action">
                                        <a href="javascript:void(0);"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-wrap">
                                    <div>
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
                                                            <i class="fa-solid fa-star filled"></i>
                                                        </span>
                                                        <span class="rating-count">5.0 </span>
                                                    </div>
                                                    <p>15 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <h6>I will do implementing chatbots on websites or messaging apps</h6>
                                            <p>One of the things that stood out to me the most was the his ability to meet
                                                deadlines. He able to deliver the project on time, despite a tight deadline.
                                                This showed their professionalism and dedication to their work.</p>
                                        </div>
                                    </div>
                                    <div class="table-action">
                                        <a href="javascript:void(0);"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="review-wrap">
                                    <div>
                                        <div class="review-user-info">
                                            <div class="review-img">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" alt="img">
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
                                            <h6>I will do professional lifestyle and product photography</h6>
                                            <p>Overall, I highly recommend this freelancer to anyone looking for
                                                high-quality work and exceptional service. They are a true professional and
                                                I will definitely be hiring them again for future projects. Thank you for
                                                your hard work and dedication!</p>
                                        </div>
                                    </div>
                                    <div class="table-action">
                                        <a href="javascript:void(0);"><i class="feather-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
                                    </div>
                                </div>
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
                </div>
                <!-- /User Reviews -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
