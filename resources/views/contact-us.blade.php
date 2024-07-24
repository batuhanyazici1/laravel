<?php $page = 'contact-us'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Contact Us
        @endslot
        @slot('li_2')
            Contact Us
        @endslot
    @endcomponent

    <!-- Contact Us -->
    <section class="contact-section">

        <!-- Contact Top -->
        <div class="contact-top">
            <div class="container">
                <div class="row">

                    <!-- Contact Map -->
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="contact-map w-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.6088932774796!2d-117.8132203247921!3d33.64138153931407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcddf599c1986f%3A0x6826f6868b4f8e35!2sHillcrest%2C%20Irvine%2C%20CA%2092603%2C%20USA!5e0!3m2!1sen!2sin!4v1706772657955!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- /Contact Map -->

                    <!-- Contact Form -->
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="team-form w-100">
                            <div class="team-form-heading">
                                <h3>Get in Touch</h3>
                                <p>How can help I you? Please write down your query</p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Contact Form -->

                </div>
            </div>
        </div>
        <!-- /Contact Top -->

        <!-- Contact Bottom -->
        <div class="contact-bottom">
            <div class="container">
                <div class="row">

                    <!-- Contact Grid -->
                    <div class="col-md-4 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="{{ URL::asset('assets/img/icons/contact-mail.svg') }}" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details">
                                    <h6>Email Address</h6>
                                    <p><a href="javascript:void(0);">dreamgigs@example.com</a></p>
                                    <p><a href="javascript:void(0);">dreamgigsinfo@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact Grid -->

                    <!-- Contact Grid -->
                    <div class="col-md-4 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="{{ URL::asset('assets/img/icons/contact-phone.svg') }}" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details">
                                    <h6>Phone Number</h6>
                                    <p>+1 81649 48103</p>
                                    <p>+1 78301 71940</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact Grid -->

                    <!-- Contact Grid -->
                    <div class="col-md-4 d-flex">
                        <div class="contact-grid w-100">
                            <div class="contact-content">
                                <div class="contact-icon">
                                    <span>
                                        <img src="{{ URL::asset('assets/img/icons/contact-map.svg') }}" alt="Icon">
                                    </span>
                                </div>
                                <div class="contact-details contact-details-address">
                                    <h6>Address</h6>
                                    <p>367 Hillcrest Lane, Irvine, California, United Sates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact Grid -->

                </div>
            </div>
        </div>
        <!-- /Contact Bottom -->

    </section>
    <!-- /Contact Us -->

    <!-- Support -->
    <section class="explore-services-sec">
        <div class="section-bg">
            <img src="{{ URL::asset('assets/img/bg/section-bg-04.png') }}" class="explore-services-one" alt="img">
            <img src="{{ URL::asset('assets/img/bg/section-bg-05.png') }}" class="explore-services-two" alt="img">
        </div>
        <div class="container">
            <div class="trusted-customers contact-heading">
                <div class="section-bg">
                    <img src="{{ URL::asset('assets/img/bg/section-bg-03.png') }}" class="trusted-bg-one" alt="img">
                    <img src="{{ URL::asset('assets/img/bg/section-bg-03.png') }}" class="trusted-bg-two" alt="img">
                </div>
                <div class="section-header">
                    <h2>Find the right Service for your needs</h2>
                    <p>Over 74K listings of Gigs- available today for you.</p>
                </div>
                <div class="more-btn text-center">
                    <a href="javascript:void(0);" class="btn btn-primary">
                        Join us <img src="{{ URL::asset('assets/img/icons/join-arrow.svg') }}" class="ms-2"
                            alt="img">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Support -->
@endsection
