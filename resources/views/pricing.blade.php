<?php $page = 'pricing'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Pricing
        @endslot
        @slot('li_2')
            Pricing
        @endslot
    @endcomponent
    <!-- Price Sction -->
    <section class="price-section">
        <div class="container">
            <div class="pricing-tab align-items-center justify-content-center">
                <ul class="nav">
                    <li>
                        <a class="active" href="#" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="monthly">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Basic</h3>
                                    </div>
                                    <div class="amt-item">
                                        <h2>49$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>10 Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>50 Listings / Services</li>
                                        <li><span><i class='bx bx-check-double'></i></span>20 Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Limited Time Support</li>
                                        <li class="inactive"><span><i class='bx bx-x'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card active aos" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="1000">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Standard</h3>
                                        <span class="badge">Recommended</span>
                                    </div>
                                    <div class="amt-item">
                                        <h2>99$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>20 Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>100 Listings / Services</li>
                                        <li><span><i class='bx bx-check-double'></i></span>50 Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>24/7 Customer support</li>
                                        <li class="inactive"><span><i class='bx bx-x'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Premium</h3>
                                    </div>
                                    <div class="amt-item">
                                        <h2>199$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Listings / Services
                                        </li>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>24/7 Customer Support</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="yearly">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Basic</h3>
                                    </div>
                                    <div class="amt-item">
                                        <h2>149$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>10 Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>50 Listings / Services</li>
                                        <li><span><i class='bx bx-check-double'></i></span>20 Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Limited Time Support</li>
                                        <li class="inactive"><span><i class='bx bx-x'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="1000">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Standard</h3>
                                    </div>
                                    <div class="amt-item">
                                        <h2>299$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>20 Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>100 Listings / Services</li>
                                        <li><span><i class='bx bx-check-double'></i></span>50 Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>24/7 Customer support</li>
                                        <li class="inactive"><span><i class='bx bx-x'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="price-title">
                                    <div class="plan-type">
                                        <h3>Premium</h3>
                                    </div>
                                    <div class="amt-item">
                                        <h2>599$</h2>
                                        <p>month</p>
                                    </div>
                                </div>
                                <div class="price-features">
                                    <h6>Includes</h6>
                                    <ul>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Staffs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Listings / Services
                                        </li>
                                        <li><span><i class='bx bx-check-double'></i></span>Unlimited Orders / Jobs</li>
                                        <li><span><i class='bx bx-check-double'></i></span>24/7 Customer Support</li>
                                        <li><span><i class='bx bx-check-double'></i></span>Portfolio</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="javascript:void(0);" class="btn-primary">Choose Plan<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Price Sction -->
@endsection
