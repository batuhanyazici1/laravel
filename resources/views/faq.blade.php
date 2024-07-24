<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            FAQ
        @endslot
        @slot('li_2')
            FAQ
        @endslot
    @endcomponent

    <!-- Faq Sction -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-lists">
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">What are
                                    website development services?</a>
                            </h4>
                            <div id="faqone" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Whether you’re looking to launch, update, or overhaul your website, we offers a
                                        talented pool of freelancers who turn ideas into action. From personal brand pages
                                        to eCommerce stores and everything in between, website development services cover
                                        virtually any use case, industry, and niche. In turn, you can make every digital
                                        first impression count.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">What are
                                    the stages of a project?</a>
                            </h4>
                            <div id="faqtwo" class="card-collapse collapse">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What
                                    types of service can I pick?</a>
                            </h4>
                            <div id="faqOne" class="card-collapse collapse" style="">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">How
                                    much does it cost to develop a basic projects?</a>
                            </h4>
                            <div id="faqfour" class="card-collapse collapse" style="">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">What
                                    are the most popular development platforms?</a>
                            </h4>
                            <div id="faqfive" class="card-collapse collapse" style="">
                                <div class="faq-content">
                                    <p>Yes! My service guarantees you 24/7 lifetime support for anything related to your
                                        website. Whenever you encounter a problem, feel free to reach out to me anytime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Faq Sction -->
@endsection
