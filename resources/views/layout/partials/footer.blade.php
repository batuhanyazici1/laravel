<!-- Footer -->
<footer class="footer">
    <div class="section-bg">
        <img src="{{ URL::asset('/assets/img/bg/footer-bg-01.png') }}" class="footer-bg-one" alt="img">
        <img src="{{ URL::asset('/assets/img/bg/footer-bg-02.png') }}" class="footer-bg-two" alt="img">
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="footer-widget">
                        <a href="{{ url('index') }}">
                            <img src="{{ URL::asset('/assets/img/white-logo.svg') }}" alt="logo">
                        </a>
                        <p>Our mission is to lead the way in digital transformation and automation. We aim to enabling
                            them to navigate the evolving digital landscape with confidence.</p>
                        <div class="social-links">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-google"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="footer-widget">
                        <h3>Our Company</h3>
                        <ul class="menu-items">
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('categories-2') }}">Categories</a></li>
                            <li><a href="{{ url('add-gigs') }}">Create Gigs</a></li>
                            <li><a href="{{ url('pricing') }}">Pricing</a></li>
                            <li><a href="{{ url('faq') }}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="footer-widget">
                        <h3>Dashboard</h3>
                        <ul class="menu-items">
                            <li><a href="{{ url('user-purchase') }}">Purchase</a></li>
                            <li><a href="{{ url('user-sales') }}">Sales</a></li>
                            <li><a href="{{ url('user-payments') }}">Payments</a></li>
                            <li><a href="{{ url('user-files') }}">Files</a></li>
                            <li><a href="{{ url('user-wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="footer-widget">
                        <h3>Featured Categories</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="menu-items">
                                    <li><a href="{{ url('categories') }}">Programming & Tech</a></li>
                                    <li><a href="{{ url('categories') }}">Music & Audio</a></li>
                                    <li><a href="{{ url('categories') }}">Lifestyle</a></li>
                                    <li><a href="{{ url('categories') }}">Photography</a></li>
                                    <li><a href="{{ url('categories') }}">Business</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="menu-items extra-menu">
                                    <li><a href="{{ url('categories') }}">eBook Publishing</a></li>
                                    <li><a href="{{ url('categories') }}">AI Artists</a></li>
                                    <li><a href="{{ url('categories') }}">AI Services</a></li>
                                    <li><a href="{{ url('categories') }}">Data</a></li>
                                    <li><a href="{{ url('categories') }}">Consulting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-widget">
                <div class="row align-items-center">
                    <div class="col-xl-9">
                        <ul class="location-list">
                            <li>
                                <span><i class="feather-map-pin"></i></span>
                                <div class="location-info">
                                    <h6>Address</h6>
                                    <p>367 Hillcrest Lane, Irvine, California,USA</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="feather-phone"></i></span>
                                <div class="location-info">
                                    <h6>Phone</h6>
                                    <p>310-437-2766</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="feather-mail"></i></span>
                                <div class="location-info">
                                    <h6>Email</h6>
                                    <p>info@example.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 text-xl-end">
                        <div class="paypal-icons">
                            <a href="javascript:void(0);">
                                <img src="{{ URL::asset('/assets/img/icons/stripe-icon.svg') }}" alt="icon">
                            </a>
                            <a href="javascript:void(0);">
                                <img src="{{ URL::asset('/assets/img/icons/paypal-icon.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>Copyright © 2024 DreamGigs. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-bottom-links">
                        <ul>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('terms-condition') }}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
