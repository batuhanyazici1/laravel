<?php $page = 'edit-gigs'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Edit Gigs
        @endslot
        @slot('li_2')
            Edit Gigs
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                <!-- General -->
                <div class="col-lg-4">
                    <div class="property-info">
                        <h4>General</h4>
                        <p>Add the Details of your Gig to know the user to receive orders</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="add-property-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <label class="col-form-label">Title for your Gig *</label>
                                    <input type="text" class="form-control" placeholder="Title for your Gig *"
                                        value="Designing and developing software">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Category</label>
                                    <select class="select">
                                        <option>Select Category</option>
                                        <option>Business</option>
                                        <option selected>Design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Sub Category</label>
                                    <select class="select">
                                        <option>Select Sub Category</option>
                                        <option selected>Website Promotion</option>
                                        <option>Ecommerce-Seo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <label class="col-form-label">Description</label>
                                    <textarea class="form-control" rows="6" placeholder="Provide more details about your gig *">Amazon affiliate marketing autopilot website with google SEO Autoblog for Making Money OnlineAffiliate marketing is an excellent way to earn passive income. this type of website doesn't require any extra maintenance or technical knowledge to run.</textarea>
                                </div>
                                <div class="form-wrap gig-option">
                                    <h6>Gig Option</h6>
                                    <label class="custom_check">
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>Featured
                                    </label>
                                    <label class="custom_check">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>Hot
                                    </label>
                                    <label class="custom_check">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>New
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /General -->

                <!-- Buyer -->
                <div class="col-lg-4">
                    <div class="property-info">
                        <h4>Buyer</h4>
                        <p>Add Extra Service & Other Details Of the Gigs to earn Extra Amount</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="add-property-wrap">
                        <div class="add-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <label class="col-form-label">I Can</label>
                                        <input type="text" class="form-control" placeholder="I Can"
                                            value="Full website design and redesign using Elementor">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <label class="col-form-label">For ($)</label>
                                        <input type="text" class="form-control" placeholder="For ($)" value="+200">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-wrap">
                                        <label class="col-form-label">In (Day)</label>
                                        <input type="text" class="form-control" placeholder="In (Day)" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-secondary amount-add"><i
                                        class="feather-plus-circle"></i>Add New</a>
                            </div>
                            <div class="col-md-12">
                                <label class="custom_check extra-serv">
                                    <input type="checkbox" class="disable-check">
                                    <span class="checkmark"></span>Superfast Delivery
                                </label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <label class="col-form-label">I Can</label>
                                    <input type="text" class="form-control exta-label" placeholder="I Can" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <label class="col-form-label">For ($)</label>
                                    <input type="text" class="form-control exta-label" placeholder="For ($)" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <label class="col-form-label">In (Day)</label>
                                    <input type="text" class="form-control exta-label" placeholder="In (Day)" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>How are you planning to work with the Buyer? *</h6>
                                <div class="form-wrap gig-option">
                                    <label class="custom_radio">
                                        <input type="radio" name="buyer" checked>
                                        <span class="checkmark"></span>Remote
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="buyer">
                                        <span class="checkmark"></span>On-site
                                    </label>
                                </div>
                                <div class="form-wrap">
                                    <label class="col-form-label">Description</label>
                                    <textarea class="form-control" rows="6" placeholder="What do you need from the Buyer to get started"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Buyer -->

                <!-- Upload -->
                <div class="col-lg-4">
                    <div class="property-info">
                        <h4>Upload</h4>
                        <p>Add images and videos for your gigs.</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="add-property-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Upload images videos and more</h6>
                                <ul class="nav upload-list">
                                    <li>
                                        <a href="#" class="active" data-bs-toggle="tab"
                                            data-bs-target="#upload-img">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/icons/Upload-01.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <h6>Upload Image</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tab" data-bs-target="#upload-video">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/icons/Upload-02.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <h6>Upload Videos</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tab" data-bs-target="#upload-link">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/icons/Upload-03.svg') }}"
                                                    alt="icon">
                                            </span>
                                            <h6>Upload Video Link</h6>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="upload-img">
                                        <div class="drag-upload form-wrap">
                                            <input type="file" accept="image/*">
                                            <div class="img-upload">
                                                <p><i class="feather-upload-cloud"></i>Drag or Upload Image</p>
                                            </div>
                                        </div>
                                        <div class="upload-wrap">
                                            <div class="upload-image">
                                                <span>
                                                    <i class="feather-image"></i>
                                                </span>
                                                <h6>Worklog.png</h6>
                                            </div>
                                            <a href="javascript:void(0);" class="del-action"><i
                                                    class="feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="upload-video">
                                        <div class="drag-upload form-wrap">
                                            <input type="file" accept="video/*">
                                            <div class="img-upload">
                                                <p><i class="feather-upload-cloud"></i>Drag or Upload Video</p>
                                            </div>
                                        </div>
                                        <div class="upload-wrap">
                                            <div class="upload-image">
                                                <span>
                                                    <i class="feather-image"></i>
                                                </span>
                                                <h6>Video_gig-1.mp4</h6>
                                            </div>
                                            <a href="javascript:void(0);" class="del-action"><i
                                                    class="feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="upload-link">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Upload video link *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-wrap">
                                            <label class="col-form-label">Vimeo link *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="confirm-content">
                                    <div class="form-wrap">
                                        <label class="custom_check">
                                            <input type="checkbox">
                                            <span class="checkmark"></span> I confirm that I am able to deliver this
                                            service to Buyers within the delivery time specified.I will update or pause my
                                            Gig if I can no longer meet this delivery time.I understand that late delivery
                                            will adversely affect my rankings on DreamGigs And will entitle the buyer to a
                                            refund. See Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-item text-end">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#success_gigs">Publish Gig</a>
                    </div>

                </div>
                <!-- /Upload -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
