<?php $page = 'team-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Team Details
        @endslot
        @slot('li_2')
            Team Details
        @endslot
    @endcomponent

    <!-- Team -->
    <section class="team-section">
        <div class="container">

            <!-- Team Details -->
            <div class="team-details">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="team-details-img">
                            <img src="{{ URL::asset('/assets/img/team/team-img.jpg') }}" class="img-fluid" alt="Team">
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="team-details-heading">
                            <h2>Bryant Stephan</h2>
                            <h5>Chief Financial Officer</h5>
                            <p>Bryant brings a wealth of financial expertise and strategic insight. As our Chief Financial
                                Officer, he plays a pivotal role in steering the financial direction of our marketplace,
                                ensuring not only its fiscal health but also its ability to innovate and grow in a
                                competitive landscape.</p>
                        </div>
                        <div class="team-details-list">
                            <ul>
                                <li><span>Responsibility : </span>Chief Financial Officer</li>
                                <li><span>Experience : </span>5 Years</li>
                                <li><span>Phone : </span>+1 62904 71093</li>
                                <li><span>Email : </span>bryant@example.com</li>
                                <li><span>Address : </span>44 Jerry Toth DriveNuiqsut, AK 99789</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Team Details -->

            <!-- Team Persnoal Info -->
            <div class="team-persnoal-info">
                <h3>Personal Info</h3>
                <p>Away from the world of numbers and financial strategies, Bryant enjoys hiking and photography. He
                    believes in a balanced lifestyle and often says that his best ideas come when he is on a long walk,
                    practicing yoga, or spending time with family in trekking.</p>
            </div>
            <!-- /Team Persnoal Info -->

            <!-- Team Skills Info -->
            <div class="team-skills">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="team-skills-info w-100">
                            <h3>Skills</h3>
                            <div class="team-progress">
                                <div class="team-progress-content">
                                    <h6>Strategic Financial Planning</h6>
                                    <p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-90" role="progressbar" data-bs-toggle="tooltip"
                                        aria-label="90%" data-bs-original-title="90%">
                                    </div>
                                </div>
                            </div>
                            <div class="team-progress">
                                <div class="team-progress-content">
                                    <h6>Budgeting & Forecasting</h6>
                                    <p>82%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-82" role="progressbar" data-bs-toggle="tooltip"
                                        aria-label="82%" data-bs-original-title="82%">
                                    </div>
                                </div>
                            </div>
                            <div class="team-progress">
                                <div class="team-progress-content">
                                    <h6>Financial Reporting</h6>
                                    <p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-85" role="progressbar" data-bs-toggle="tooltip"
                                        aria-label="85%" data-bs-original-title="85%">
                                    </div>
                                </div>
                            </div>
                            <div class="team-progress">
                                <div class="team-progress-content">
                                    <h6>Risk Management</h6>
                                    <p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-95" role="progressbar" data-bs-toggle="tooltip"
                                        aria-label="95%" data-bs-original-title="95%">
                                    </div>
                                </div>
                            </div>
                            <div class="team-progress mb-0">
                                <div class="team-progress-content">
                                    <h6>Investment Analysis</h6>
                                    <p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-80" role="progressbar" data-bs-toggle="tooltip"
                                        aria-label="80%" data-bs-original-title="80%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="team-skills-info w-100">
                            <h3>Experience</h3>
                            <ul>
                                <li>Leading a team of finance professionals and working closely with other departments to
                                    ensure the company’s financial health and growth.</li>
                                <li> Managed the finance department, provided strategic financial direction, and supported
                                    major corporate decisions.</li>
                                <li>Led financial operations, including accounting, audits, and compliance. Collaborated
                                    with senior management to align financial strategies </li>
                            </ul>
                            <p>Throughout his career, Bryant has demonstrated a consistent track record of financial
                                leadership and innovation. His experience spans a diverse range of industries, equipping him
                                with a broad perspective on financial management and strategy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Team Skills Info -->

            <!-- Get in Touch -->
            <div class="team-form">
                <div class="team-form-heading">
                    <h3>Get in Touch</h3>
                    <p>How can help I you? Please write down your query</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Get in Touch -->

        </div>
    </section>
    <!-- /Team -->
@endsection
