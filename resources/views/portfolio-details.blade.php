<?php $page = 'portfolio-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                <!-- Portfolio Details -->
                <div class="col-lg-12">
                    <div class="portfolio-details">
                        <div class="portfolio-detail-img">
                            <img src="{{ URL::asset('assets/img/portfolio/portfolio-large-01.jpg') }}" class="img-fluid"
                                alt="img">
                        </div>
                        <div class="portfolio-header">
                            <h2>Mobile App Development for HealthCo</h2>
                            <span class="badge bg-primary-light">Programming & Tech</span>
                        </div>
                        <div class="portfolio-contents">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="portfolio-scope">
                                        <h5>Project Scope</h5>
                                        <p>HealthCo approached Innovative Solutions seeking expertise in mobile app
                                            development. Their goal was to create an intuitive health and fitness tracking
                                            app that stood out in a crowded marketplace. The challenges were to ensure the
                                            app was engaging, easy to navigate, and offered unique features that catered to
                                            individual user needs.</p>
                                    </div>
                                    <div class="portfolio-scope">
                                        <h5>Project Scope</h5>
                                        <p>Develop a user-friendly mobile application for health tracking that caters to a
                                            broad user base, focusing on personalization and ease of use.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="portfolio-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="portfolio-box">
                                                    <h6>Client:</h6>
                                                    <p>HealthCo</p>
                                                </div>
                                                <div class="portfolio-box">
                                                    <h6>Website:</h6>
                                                    <p>healthco.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="portfolio-box">
                                                    <h6>Date:</h6>
                                                    <p>January 29, 2024</p>
                                                </div>
                                                <div class="portfolio-box">
                                                    <h6>Category:</h6>
                                                    <p>Programming & Tech</p>
                                                </div>
                                            </div>
                                            <div class="portfolio-social">
                                                <h6>Share Project:</h6>
                                                <ul class="social-icon">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="feather-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="feather-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="feather-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-scope">
                                <h5>Solution</h5>
                                <p>A team of skilled developers and designers from Innovative Solutions was assembled to
                                    work on this project. The approach was multi-faceted:</p>
                                <ul>
                                    <li>User Experience Design: The team focused on creating a simple yet effective user
                                        interface that would appeal to users of all ages and technical abilities. This
                                        included intuitive navigation and a clean, accessible design.</li>
                                    <li>Personalization Features: Understanding the importance of personalization in health
                                        tracking, the app was equipped with features that allowed users to set personal
                                        goals, track their progress, and receive customized recommendations.</li>
                                    <li>Integration of Advanced Technologies: To set the app apart, technologies like AI and
                                        machine learning were integrated for smart tracking and predictive analytics,
                                        offering users insights into their health patterns.</li>
                                    <li>Testing and Feedback Loop: Rigorous testing was conducted, including beta testing
                                        with a sample of HealthCo's target audience to gather feedback and make necessary
                                        adjustments.</li>
                                </ul>
                            </div>
                            <div class="portfolio-scope">
                                <h5>Outcome</h5>
                                <p>The project was a resounding success, marked by the following achievements:</p>
                                <ul>
                                    <li>User Adoption: The app received over 10,000 downloads within the first month of its
                                        launch, with a high user retention rate.</li>
                                    <li>Positive Reviews: Users praised the app for its ease of use, personalized features,
                                        and insightful health tracking, reflected in positive reviews on app stores.</li>
                                    <li>Client Satisfaction: HealthCo was thrilled with the product, noting an increase in
                                        their brand's visibility and customer engagement.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-pagination">
                            <div class="row">
                                <div class="col-6">
                                    <div class="page-previous page-link">
                                        <a href="#"><i class="feather-chevron-left"></i>Previous</a>
                                        <p>The Future of Remote Work: Trends and Predictions</p>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="page-next page-link">
                                        <a href="#" class="justify-content-end">Next<i
                                                class="feather-chevron-right"></i></a>
                                        <p>Top 10 In-Demand Skills in the Gig Economy for 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Related Tags -->
                        <div class="service-wrap tags-widget m-0">
                            <h3>Related Tags</h3>
                            <ul class="tags">
                                <li>
                                    <a href="javascript:void(0);">Hiring Tips</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Freelancer Selection</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Project Management</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Related Tags -->

                    </div>
                </div>
                <!-- /Portfolio Details -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
