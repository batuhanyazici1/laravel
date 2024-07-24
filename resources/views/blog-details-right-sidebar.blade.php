<?php $page = 'blog-details-right-sidebar'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Blogs -->
            <div class="row">

                <!-- Blog Details -->
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-detail-img">
                            <img src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="blog-contents">
                            <p>In today’s fast-paced business world, leveraging the skills of freelancers has become an
                                essential strategy for project success. With the rise of the gig economy, you now have
                                access to a global pool of talented individuals ready to contribute to your endeavors.
                                However, the key to harnessing this potential lies in selecting the right freelancer. This
                                guide walks you through the steps to ensure you make the best choice for your project needs.
                            </p>
                            <p>Before diving into the sea of freelancers, it’s crucial to have a clear understanding of what
                                your project entails. Defining the scope of work involves outlining specific tasks,
                                deliverables, and deadlines. A well-articulated project description not only helps you
                                understand your own needs but also allows freelancers to accurately assess if they can
                                fulfill your requirements.</p>
                            <div class="blog-wrap">
                                <p>Once you’ve chosen a freelancer, ensure that there is a clear contract in place. This
                                    should outline project scope, payment terms, deadlines, and any other important details.
                                    A well-defined contract protects both you and the freelancer and sets clear
                                    expectations.</p>
                            </div>
                            <p>If you’ve requested proposals, compare them not just on price, but also on the value each
                                freelancer brings to the table. Look at their proposed timelines, strategies, and any
                                additional benefits they offer.</p>
                            <p>Choosing the right freelancer for your project requires a thoughtful approach. By clearly
                                defining your project, carefully searching and evaluating candidates, and ensuring a solid
                                contractual agreement, you can establish a successful and productive working relationship.
                                Remember, the right freelancer can not only help complete your project but also add immense
                                value through their specialized skills and perspectives.</p>
                        </div>
                        <div class="blog-author">
                            <div class="author-img">
                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <div class="author-detail">
                                <h5>Author</h5>
                                <h6>Robert Hollenbeck</h6>
                                <p>I am experienced project manager and consultant with a rich background in digital project
                                    execution and freelance talent acquisition. With over 10 years in the industry, I have
                                    mastered the art of identifying and collaborating with top-tier freelance talent across
                                    various fields including technology, marketing, and creative services.</p>
                            </div>
                        </div>
                        <div class="blog-pagination">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="page-previous page-link">
                                        <a href="#"><i class="feather-chevron-left"></i>Previous Post</a>
                                        <p>The Future of Remote Work: Trends and Predictions</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <div class="page-next page-link">
                                        <a href="#" class="justify-content-sm-end">Next Post<i
                                                class="feather-chevron-right"></i></a>
                                        <p>Top 10 In-Demand Skills in the Gig Economy for 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Lists -->
                        <div class="review-widget">
                            <div class="review-title sort-search-gigs">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h3>Comments (10)</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="search-filter-selected">
                                            <div class="form-group mb-0">
                                                <span class="sort-text">Sort By</span>
                                                <select class="select">
                                                    <option>Recommended</option>
                                                    <option>Date</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="review-lists">
                                <li>
                                    <div class="review-wrap">
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
                                                    <p>1 Months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <p>I recently hired a him to help me with a project and I must say, I am
                                                extremely impressed with their work. From start to finish, the freelancer
                                                was professional, efficient, and a pleasure to work with.</p>
                                            <a href="javascript:void(0);" class="reply-btn"><i
                                                    class="feather-corner-up-left"></i>Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="review-wrap">
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
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="rating-count">4.0 </span>
                                                    </div>
                                                    <p>15 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <p>One of the things that stood out to me the most was the his ability to meet
                                                deadlines. He able to deliver the project on time, despite a tight deadline.
                                                This showed their professionalism and dedication to their work.</p>
                                            <a href="javascript:void(0);" class="reply-btn"><i
                                                    class="feather-corner-up-left"></i>Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="review-wrap">
                                        <div class="review-user-info">
                                            <div class="review-img">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}" alt="img">
                                            </div>
                                            <div class="reviewer-info">
                                                <div class="reviewer-loc">
                                                    <h6><a href="javascript:void(0);">Dane jose</a></h6>
                                                    <p><i class="feather-map-pin"></i>Sweden</p>
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
                                                    <p>1 Months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <p>Overall, I highly recommend this freelancer to anyone looking for
                                                high-quality work and exceptional service. They are a true professional and
                                                I will definitely be hiring them again for future projects. Thank you for
                                                your hard work and dedication!</p>
                                            <a href="javascript:void(0);" class="reply-btn"><i
                                                    class="feather-corner-up-left"></i>Reply</a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="review-wrap">
                                                <div class="review-user-info">
                                                    <div class="review-img">
                                                        <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <div class="reviewer-loc">
                                                            <h6><a href="javascript:void(0);">Harry</a></h6>
                                                            <p><i class="feather-map-pin"></i>France</p>
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
                                                            <p>1 Months ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Thank you</p>
                                                    <a href="javascript:void(0);" class="reply-btn"><i
                                                            class="feather-corner-up-left"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="pagination justify-content-center">
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
                        <!-- /Review Lists -->

                        <!-- Related Tags -->
                        <div class="service-wrap tags-widget">
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

                        <!-- Leave a Comment -->
                        <div class="comment-section">
                            <h3>Leave a Comment</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <textarea class="form-control" rows="5" placeholder="Enter Your Comments"></textarea>
                                    </div>
                                    <div class="form-wrap">
                                        <label class="custom_check mb-0">Save my name & email in this browser for the next
                                            time I comment
                                            <input type="checkbox" name="remeber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Leave a Comment -->

                    </div>
                </div>
                <!-- /Blog Details -->

                <!-- Blog Sidebar -->
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="blog-sidebar mb-0">

                        <!-- Search -->
                        <div class="card search-widget">
                            <div class="card-header">
                                <h6><img src="{{ URL::asset('/assets/img/icons/search-icon.svg') }}" alt="icon">Search
                                </h6>
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
                                                            <span>10</span></a>
                                                    </li>
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
                                                    Fees:
                                                    A Guide...</a>
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

    <!-- Related Posts -->
    <div class="relate-post-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Related Posts</h3>
                    <div class="relate-slider owl-carousel">
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
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                alt="img"></a>
                                        <h6><a href="">Robert Hollenbeck</a><span>Jan 20, 2024</span></h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">Freelancing</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ url('blog-details') }}">How to Choose the Right Freelancer for Your
                                            Project</a></h3>
                                </div>
                                <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                    <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                </div>
                            </div>
                        </div>
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
                                        <h6><a href="javascript:void(0);">Abigail Garett</a><span>Jan 21, 2024</span></h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="javascript:void(0);" class="badge bg-primary-light">In-Demand Skills</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ url('blog-details') }}">Top 10 In-Demand Skills in the Gig Economy for
                                            2024</a></h3>
                                </div>
                                <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                    <p><span><i class="feather-clock"></i></span>05 - 10 mins read</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="{{ url('blog-details') }}"><img
                                        src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" class="img-fluid"
                                        alt="img"></a>
                                <div class="fav-selection">
                                    <a href="javascript:void(0);" class="fav-icon"><i class="feather-heart"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="user-head">
                                    <div class="user-info">
                                        <a href="javascript:void(0);"><img
                                                src="{{ URL::asset('/assets/img/user/user-11.jpg') }}"
                                                alt="img"></a>
                                        <h6><a href="javascript:void(0);">David Shorey</a><span>Jan 23, 2024</span></h6>
                                    </div>
                                    <div class="badge-text">
                                        <a href="" class="badge bg-primary-light">User Guide</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ url('blog-details') }}">Understanding Service Marketplace Fees: A
                                            Guide for New Users</a></h3>
                                </div>
                                <div class="blog-content-footer d-flex justify-content-between align-items-center">
                                    <p><span><i class="feather-clock"></i></span>10 - 15 mins read</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Related Posts -->
@endsection
