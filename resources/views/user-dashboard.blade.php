<?php $page = 'user-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            User Dashboard
        @endslot
        @slot('li_2')
            User Dashboard
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Overview</h3>
                        </div>
                        <div class="search-filter-selected select-icon">
                            <div class="form-group">
                                <span class="sort-text"><i class="feather-calendar"></i></span>
                                <select class="select">
                                    <option>Jan 2024</option>
                                    <option>Feb 2024</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Overview -->
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="dash-widget flex-fill">
                                <span class="dash-icon bg-warning">
                                    <img src="{{ URL::asset('/assets/img/icons/check-icon.svg') }}" class="img-fluid"
                                        alt="img">
                                </span>
                                <p>Completed Gigs</p>
                                <h3>08</h3>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="dash-widget flex-fill">
                                <span class="dash-icon bg-success">
                                    <img src="{{ URL::asset('/assets/img/icons/section-icon.svg') }}" class="img-fluid"
                                        alt="img">
                                </span>
                                <p>Recent Gigs</p>
                                <h3>15</h3>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="dash-earning flex-fill">
                                <div class="earning-info">
                                    <p>Your Earning This month</p>
                                    <h3>$1,57,815</h3>
                                    <h6>Update your <span>setting</span></h6>
                                </div>
                                <div class="earning-btn">
                                    <a href="{{ url('user-wallet') }}" class="btn btn-primary">Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="dash-widget flex-fill">
                                <span class="dash-icon bg-pending">
                                    <i class="feather-heart"></i>
                                </span>
                                <p>My Wishlist</p>
                                <h3>45</h3>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="dash-widget flex-fill">
                                <span class="dash-icon bg-danger">
                                    <i class="feather-star"></i>
                                </span>
                                <p>Total Reviews</p>
                                <h3>24</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="dash-widget dash-credit flex-fill">
                                <div class="dash-cont">
                                    <span class="dash-icon">
                                        <i class="feather-credit-card"></i>
                                    </span>
                                    <div class="dash-cash-info">
                                        <p>Total Credit</p>
                                        <h3>$1,292</h3>
                                    </div>
                                </div>
                                <div class="dash-grade">
                                    <p><img src="{{ URL::asset('/assets/img/icons/vector-icon.svg') }}" class="img-fluid"
                                            alt="img"><span class="text-success">+10% </span> last week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="dash-widget dash-credit bg-pink-light flex-fill">
                                <div class="dash-cont">
                                    <span class="dash-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/steam-icon.svg') }}" class="img-fluid"
                                            alt="img">
                                    </span>
                                    <div class="dash-cash-info">
                                        <p>Total Debit</p>
                                        <h3>$100</h3>
                                    </div>
                                </div>
                                <div class="dash-grade">
                                    <p><img src="{{ URL::asset('/assets/img/icons/vector-icon-01.svg') }}" class="img-fluid"
                                            alt="img"><span class="text-danger">-1% </span> last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Overview -->

                    <div class="row">

                        <!-- Sales Statistics -->
                        <div class="col-lg-12">
                            <div class="card dashboard-card">
                                <div class="card-header">
                                    <div class="gig-card-head">
                                        <h4 class="card-title">Sales Statistics</h4>
                                        <ul class="gigs-list nav">
                                            <li><a href="#" data-bs-toggle="tab" data-bs-target="#amount">Amount</a>
                                            </li>
                                            <li><a href="#" class="active" data-bs-toggle="tab"
                                                    data-bs-target="#gig">Gigs</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{ url('user-sales') }}" class="view-link">View All<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="amount">
                                            <div id="amount-chart"></div>
                                        </div>
                                        <div class="tab-pane show active" id="gig">
                                            <div id="purchase-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Sales Statistics -->

                    </div>

                    <div class="row">

                        <!-- Recent Payments -->
                        <div class="col-lg-12 d-flex">
                            <div class="card dashboard-card card-gig flex-fill">
                                <div class="card-header">
                                    <div class="gig-card-head">
                                        <h4 class="card-title">Gigs</h4>
                                        <ul class="gigs-list nav">
                                            <li><a href="#" class="active" data-bs-toggle="tab"
                                                    data-bs-target="#purchase">Purchase</a></li>
                                            <li><a href="#" data-bs-toggle="tab" data-bs-target="#sales">Sales</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ url('user-purchase') }}" class="view-link">View All<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="purchase">
                                            <div class="table-responsive card-table">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-07.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">Managing and
                                                                                optimizing paid advertising...</a></h6>
                                                                        <ul>
                                                                            <li>Delivery Date: 11/01/2024</li>
                                                                            <li>Seller : <span
                                                                                    class="text-dark">Jones</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                collaborating with influencers...</a></h6>
                                                                        <ul>
                                                                            <li>Delivery Date: 10/01/2024</li>
                                                                            <li>Seller : <span
                                                                                    class="text-dark">James</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                designing and executing targeted...</a></h6>
                                                                        <ul>
                                                                            <li>Delivery Date: 09/01/2024</li>
                                                                            <li>Seller : <span
                                                                                    class="text-dark">Linda</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">Embedded Android
                                                                                & AOSP customizations...</a></h6>
                                                                        <ul>
                                                                            <li>Delivery Date: 08/01/2024</li>
                                                                            <li>Seller : <span
                                                                                    class="text-dark">Jeffrey</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-06.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                integrating AR elements into...</a></h6>
                                                                        <ul>
                                                                            <li>Delivery Date: 07/01/2024</li>
                                                                            <li>Seller : <span
                                                                                    class="text-dark">Robert</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span
                                                                    class="badge badge-receive bg-success">Completed</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sales">
                                            <div class="table-responsive card-table">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-01.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                integrating AR elements into...</a></h6>
                                                                        <ul>
                                                                            <li>Date: 07/01/2024</li>
                                                                            <li>Buyer : <span
                                                                                    class="text-dark">Robert</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span
                                                                    class="badge badge-receive bg-success">Completed</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-08.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                collaborating with influencers...</a></h6>
                                                                        <ul>
                                                                            <li>Date: 10/01/2024</li>
                                                                            <li>Buyer : <span
                                                                                    class="text-dark">James</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">Managing and
                                                                                optimizing paid advertising...</a></h6>
                                                                        <ul>
                                                                            <li>Date: 11/01/2024</li>
                                                                            <li>Buyer : <span
                                                                                    class="text-dark">Jones</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1000</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">I will do
                                                                                designing and executing targeted...</a></h6>
                                                                        <ul>
                                                                            <li>Date: 09/01/2024</li>
                                                                            <li>Buyer : <span
                                                                                    class="text-dark">Linda</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="table-img">
                                                                        <a href="javascript:void(0);"><img
                                                                                src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                                                class="img-fluid" alt="img"></a>
                                                                    </div>
                                                                    <div class="recent-payment">
                                                                        <h6><a href="javascript:void(0);">Embedded Android
                                                                                & AOSP customizations...</a></h6>
                                                                        <ul>
                                                                            <li>Date: 08/01/2024</li>
                                                                            <li>Buyer : <span
                                                                                    class="text-dark">Jeffrey</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge badge-receive bg-info">New</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <h6 class="mb-0">$1400</h6>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Payments -->

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
