@if (Route::is(['add-gigs']))
    <!-- Success Contact -->
    <div class="modal custom-modal fade" id="success_gigs" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-message text-center">
                        <div class="success-popup-icon">
                            <img src="{{ URL::asset('/assets/img/icons/happy-icon.svg') }}" alt="icon">
                        </div>
                        <div class="success-content">
                            <h4>Gigs Published Successfully</h4>
                            <p>Updated New Gigs <span>“Designing and developing software applications”</span> in the
                                list</p>
                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="{{ url('user-gigs') }}" class="btn btn-primary">Back to Gigs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Success Contact -->
@endif

@if (Route::is(['edit-gigs']))
    <!-- Gigs Publish -->
    <div class="modal custom-modal fade" id="success_gigs" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-message text-center">
                        <div class="success-popup-icon">
                            <img src="{{ URL::asset('/assets/img/icons/happy-icon.svg') }}" alt="icon">
                        </div>
                        <div class="success-content">
                            <h4>Gigs Published Successfully</h4>
                            <p>Updated New Gigs <span>“Designing and developing software applications”</span> in the
                                list</p>
                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="{{ url('user-gigs') }}" class="btn btn-primary">Back to Gigs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Gigs Publish -->
@endif

@if (Route::is(['integration-settings']))
    <!-- Integrated Modal -->
    <div class="modal new-modal fade" id="connect_nexmo" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nexmo</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <form action="integration-settings">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="text" class="form-control" placeholder="API Key">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="text" class="form-control" placeholder="API Secret Key">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="text" class="form-control" placeholder="Sender ID">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap gig-option">
                                    <label class="custom_radio">
                                        <input type="radio" name="gateway" checked>
                                        <span class="checkmark"></span>Active
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="gateway">
                                        <span class="checkmark"></span>Inactive
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-item">
                                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Integrated Modal -->
@endif

@if (Route::is(['security-settings']))
    <div class="modal new-modal fade" id="change_password" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <form action="integration-settings">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="password" class="form-control" placeholder="Current Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-item">
                                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['service-details']))
    <!-- Contact Me -->
    <div class="modal new-modal fade" id="contact_me" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Me</h5><button type="button" class="close-btn"
                        data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="user-details">
                                <div class="user-img">
                                    <img src="{{ URL::asset('assets/img/user/user-05.jpg') }}" alt="img">
                                </div>
                                <div class="user-info">
                                    <h5><span class="me-2">Adrian Revolt</span> <span class="badge badge-success"><i
                                                class="fa-solid fa-circle"></i> Online</span></h5>
                                    <h6>An abundance of creativity</h6>
                                    <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-form-group">
                                <select class="select">
                                    <option>What’s the message is about?</option>
                                    <option>Service</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <select class="select">
                                    <option>Location</option>
                                    <option>India</option>
                                    <option>UK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-form-group">
                                <textarea class="form-control" rows="6" placeholder="Enter Your Comments"></textarea>
                            </div>
                        </div>
                        <div class="modal-form-group">
                            <label class="custom_check mt-0 mb-0">I agree to the <a href="#">Terms &
                                    Conditions</a>
                                <input type="checkbox" name="remeber">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-btn">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
                            Send Enquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact Me -->

    <!-- Order Details -->
    <div class="modal new-modal fade" id="order_details" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Order Details</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="order-status">
                                <div class="order-item">
                                    <div class="order-img">
                                        <img src="{{ URL::asset('assets/img/service/service-slide-01.jpg') }}"
                                            alt="img">
                                    </div>
                                    <div class="order-info">
                                        <h5>I will design, redesign wordpress website using elementor pro</h5>
                                        <ul>
                                            <li>ID : #1245</li>
                                            <li>Delivery : Jan 29 2024 8:10 AM</li>
                                        </ul>
                                    </div>
                                </div>
                                <h6 class="title">Details</h6>
                                <div class="user-details">
                                    <div class="user-img">
                                        <img src="{{ URL::asset('assets/img/user/user-05.jpg') }}" alt="img">
                                    </div>
                                    <div class="user-info">
                                        <h5>Adrian Revolt <span class="location">From USA</span></h5>
                                        <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                    </div>
                                </div>
                                <h6 class="title">Service Details</h6>
                                <div class="detail-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Designing and developing...</td>
                                                <td>1</td>
                                                <td class="text-primary">$100</td>
                                            </tr>
                                            <tr>
                                                <td>Additional 1 : I can clean</td>
                                                <td>1</td>
                                                <td class="text-primary">$100</td>
                                            </tr>
                                            <tr>
                                                <td>Super Fast : Super fast delivery</td>
                                                <td>1</td>
                                                <td class="text-primary">$100</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2">Grand Total</th>
                                                <th class="text-primary">$300</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="modal-btn">
                                    <div class="row gx-2">
                                        <div class="col-6">
                                            <a href="#" data-bs-dismiss="modal"
                                                class="btn btn-secondary w-100 justify-content-center">Cancel</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ url('user-purchase') }}" class="btn btn-primary w-100">Pay
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Details -->
@endif

@if (Route::is(['user-files']))
    <!-- File Details -->
    <div class="modal new-modal fade" id="file_view" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">File Details - #124</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="file-view">
                        <div class="file-img">
                            <img src="{{ URL::asset('assets/img/gigs/gigs-04.jpg') }}" class="img-fluid"
                                alt="img">
                        </div>
                        <div class="upload-wrap mb-0">
                            <div class="upload-image">
                                <span>
                                    <i class="feather-image"></i>
                                </span>
                                <h6>Video_gig-1.mp4</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="del-action me-2"><i
                                        class="feather-download"></i></a>
                                <a href="javascript:void(0);" class="del-action"><i class="feather-trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /File Details -->
@endif

@if (Route::is(['user-notification']))
    <!-- Order Cancel -->
    <div class="modal new-modal fade" id="cancel_order" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel your Order</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-purchase') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" placeholder="Reason"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Cancel -->

    <!-- Change Your Status -->
    <div class="modal new-modal fade" id="order_status" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Your Status</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-sales') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap form-item">
                                    <label class="col-form-label">Order Status</label>
                                    <select class="select">
                                        <option>Select Status</option>
                                        <option>New</option>
                                        <option>Processing</option>
                                        <option>Completed</option>
                                    </select>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Update Status</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Your Status -->

    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-sales') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="review-item review-wrap reply-box mb-0">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-02.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Andrew</a></h6>
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
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p class="mb-0">Thank You</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-sales') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" rows="3" placeholder="Reply"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Order Details -->
    <div class="modal new-modal fade" id="order_details" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">Sales Details <span
                            class="badge bg-success new-badge ms-2">New</span></h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('user-sales') }}">
                                <div class="order-status">
                                    <div class="order-item">
                                        <div class="order-img">
                                            <img src="{{ URL::asset('assets/img/service/service-slide-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="order-info">
                                            <h5>I will design, redesign wordpress website using elementor pro</h5>
                                            <ul>
                                                <li>ID : #1245</li>
                                                <li>Delivery : Jan 29 2024 8:10 AM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h6 class="title">Service Details</h6>
                                    <div class="detail-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Designing and developing...</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                                <tr>
                                                    <td>Additional 1 : I can clean</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                                <tr>
                                                    <td>Super Fast : Super fast delivery</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2">Grand Total</th>
                                                    <th class="text-primary">$300</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h6 class="title">Customer Details</h6>
                                    <div class="user-details">
                                        <div class="user-img">
                                            <img src="{{ URL::asset('assets/img/user/user-05.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="user-info">
                                            <h5>Adrian Revolt <span class="location">From USA</span></h5>
                                            <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                        </div>
                                    </div>
                                    <h6 class="title">Upload Final Files</h6>
                                    <div class="form-wrap form-item">
                                        <div class="drag-upload">
                                            <input type="file" accept="video/*">
                                            <div class="img-upload">
                                                <p><i class="feather-upload-cloud"></i>Drag or Upload Video</p>
                                            </div>
                                        </div>
                                        <p>Maximum file upload size 5MB</p>
                                    </div>
                                    <div class="form-wrap form-item">
                                        <div class="upload-wrap mb-0">
                                            <div class="upload-image">
                                                <span>
                                                    <i class="feather-image"></i>
                                                </span>
                                                <div>
                                                    <h6>Video_gig-1.mp4</h6>
                                                    <p>Size: 353KB</p>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="del-action"><i
                                                    class="feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-btn">
                                        <div class="row gx-2">
                                            <div class="col-6">
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="btn btn-secondary w-100 justify-content-center">Cancel</a>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-primary w-100" type="submit">Save &
                                                    Complete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Details -->
@endif

@if (Route::is(['user-payments']))
    <!-- Add Wallet -->
    <div class="modal new-modal fade" id="file_view" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Wallet</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="amt-wrap">
                                <div class="form-wrap">
                                    <input type="text" class="form-control" placeholder="Enter the Amount">
                                </div>
                                <ul class="amt-list">
                                    <li>Or</li>
                                    <li>
                                        <a href="#" class="vary-amt">$50</a>
                                    </li>
                                    <li>
                                        <a href="#" class="vary-amt">$100</a>
                                    </li>
                                    <li>
                                        <a href="#" class="vary-amt">$150</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Name on the Card">
                            </div>
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Card Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Expiry Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Security Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Wallet -->
@endif

@if (Route::is(['user-profile']))
    <!-- Contact Me -->
    <div class="modal new-modal fade" id="contact_me" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Me</h5><button type="button" class="close-btn"
                        data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="user-details">
                                <div class="user-img">
                                    <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="img">
                                </div>
                                <div class="user-info">
                                    <h5><span class="me-2">Adrian Revolt</span> <span class="badge badge-success"><i
                                                class="fa-solid fa-circle"></i> Online</span></h5>
                                    <h6>An abundance of creativity</h6>
                                    <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-form-group">
                                <select class="select">
                                    <option>What’s the message is about?</option>
                                    <option>Service</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-group">
                                <select class="select">
                                    <option>Location</option>
                                    <option>India</option>
                                    <option>UK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-form-group">
                                <textarea class="form-control" rows="6" placeholder="Enter Your Comments"></textarea>
                            </div>
                        </div>
                        <div class="modal-form-group">
                            <label class="custom_check mt-0 mb-0">I agree to the <a href="#">Terms &
                                    Conditions</a>
                                <input type="checkbox" name="remeber">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-btn">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
                            Send Enquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact Me -->
@endif

@if (Route::is(['user-purchase']))
    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-sales') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="review-item review-wrap reply-box mb-0">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-02.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Andrew</a></h6>
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
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p class="mb-0">Thank You</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-sales') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" rows="3" placeholder="Reply"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Order Cancel -->
    <div class="modal new-modal fade" id="cancel_order" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel your Order</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user-purchase') }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" placeholder="Reason"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Cancel -->
@endif

@if (Route::is(['user-reviews']))
    <!-- File Details -->
    <div class="modal new-modal fade" id="file_view" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">File Details - #124</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="file-view">
                        <div class="file-img">
                            <img src="{{ URL::asset('assets/img/gigs/gigs-04.jpg') }}" class="img-fluid"
                                alt="img">
                        </div>
                        <div class="upload-wrap mb-0">
                            <div class="upload-image">
                                <span>
                                    <i class="feather-image"></i>
                                </span>
                                <h6>Video_gig-1.mp4</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="del-action me-2"><i
                                        class="feather-download"></i></a>
                                <a href="javascript:void(0);" class="del-action"><i class="feather-trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /File Details -->
@endif

@if (Route::is(['user-sales']))
    <!-- Order Cancel -->
    <div class="modal new-modal fade" id="cancel_order" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel your Order</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="user-purchase">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" placeholder="Reason"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Cancel -->

    <!-- Change Your Status -->
    <div class="modal new-modal fade" id="order_status" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Your Status</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="user-sales">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap form-item">
                                    <label class="col-form-label">Order Status</label>
                                    <select class="select">
                                        <option>Select Status</option>
                                        <option>New</option>
                                        <option>Processing</option>
                                        <option>Completed</option>
                                    </select>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Update Status</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Your Status -->

    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="user-sales">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="review-item review-wrap reply-box mb-0">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-02.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">Andrew</a></h6>
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
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p class="mb-0">Thank You</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Add Review -->
    <div class="modal new-modal fade" id="add_review1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="user-sales">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-item review-wrap">
                                    <div class="review-user-info">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('assets/img/user/user-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="reviewer-info">
                                            <div class="reviewer-loc">
                                                <h6><a href="javascript:void(0);">kadajsalamander</a></h6>
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
                                        <h6>I will do designing and executing targeted email campaigns</h6>
                                        <p class="mb-0">I recently hired a him to help me with a project and I must
                                            say, I am extremely impressed with their work. From start to finish, the
                                            freelancer was professional, efficient, and a pleasure to work with.</p>
                                    </div>
                                </div>
                                <div class="form-wrap form-item">
                                    <textarea class="form-control" rows="3" placeholder="Reply"></textarea>
                                </div>
                                <div class="modal-btn">
                                    <button class="btn btn-primary w-100" type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Review -->

    <!-- Order Details -->
    <div class="modal new-modal fade" id="order_details" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">Sales Details <span
                            class="badge bg-success new-badge ms-2">New</span></h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body service-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="user-sales">
                                <div class="order-status">
                                    <div class="order-item">
                                        <div class="order-img">
                                            <img src="{{ URL::asset('assets/img/service/service-slide-01.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="order-info">
                                            <h5>I will design, redesign wordpress website using elementor pro</h5>
                                            <ul>
                                                <li>ID : #1245</li>
                                                <li>Delivery : Jan 29 2024 8:10 AM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h6 class="title">Service Details</h6>
                                    <div class="detail-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Designing and developing...</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                                <tr>
                                                    <td>Additional 1 : I can clean</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                                <tr>
                                                    <td>Super Fast : Super fast delivery</td>
                                                    <td>1</td>
                                                    <td class="text-primary">$100</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2">Grand Total</th>
                                                    <th class="text-primary">$300</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h6 class="title">Customer Details</h6>
                                    <div class="user-details">
                                        <div class="user-img">
                                            <img src="{{ URL::asset('assets/img/user/user-05.jpg') }}"
                                                alt="img">
                                        </div>
                                        <div class="user-info">
                                            <h5>Adrian Revolt <span class="location">From USA</span></h5>
                                            <p><i class="fa-solid fa-star"></i>Ratings 5.0 (45 Reviews)</p>
                                        </div>
                                    </div>
                                    <h6 class="title">Upload Final Files</h6>
                                    <div class="form-wrap form-item">
                                        <div class="drag-upload">
                                            <input type="file" accept="video/*">
                                            <div class="img-upload">
                                                <p><i class="feather-upload-cloud"></i>Drag or Upload Video</p>
                                            </div>
                                        </div>
                                        <p>Maximum file upload size 5MB</p>
                                    </div>
                                    <div class="form-wrap form-item">
                                        <div class="upload-wrap mb-0">
                                            <div class="upload-image">
                                                <span>
                                                    <i class="feather-image"></i>
                                                </span>
                                                <div>
                                                    <h6>Video_gig-1.mp4</h6>
                                                    <p>Size: 353KB</p>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="del-action"><i
                                                    class="feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-btn">
                                        <div class="row gx-2">
                                            <div class="col-6">
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="btn btn-secondary w-100 justify-content-center">Cancel</a>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-primary w-100" type="submit">Save &
                                                    Complete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Details -->
@endif

@if (Route::is(['user-wallet']))
    <!-- Add Wallet -->
    <div class="modal new-modal fade" id="add_wallet" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Wallet</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="amt-wrap">
                                <div class="form-wrap">
                                    <input type="text" class="form-control" placeholder="Enter the Amount">
                                </div>
                                <ul class="amt-list">
                                    <li>Or</li>
                                    <li>
                                        <a href="#" class="vary-amt">$50</a>
                                    </li>
                                    <li>
                                        <a href="#" class="vary-amt">$100</a>
                                    </li>
                                    <li>
                                        <a href="#" class="vary-amt">$150</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="buyer-method">
                                <h6>How are you planning to work with the Buyer? *</h6>
                                <label class="custom_radio">
                                    <input type="radio" name="payment">
                                    <span class="checkmark"></span>Stripe
                                </label>
                                <label class="custom_radio">
                                    <input type="radio" name="payment" checked>
                                    <span class="checkmark"></span>Card
                                </label>
                            </div>
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Name on the Card">
                            </div>
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Card Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Expiry Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap form-item">
                                <input type="text" class="form-control" placeholder="Security Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#success_credit"
                                data-bs-dismiss="modal" class="btn btn-primary w-100">Add to Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Wallet -->

    <!-- Gigs Publish -->
    <div class="modal custom-modal fade" id="success_credit" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-message text-center">
                        <div class="success-popup-icon">
                            <img src="{{ URL::asset('assets/img/icons/happy-icon.svg') }}" alt="icon">
                        </div>
                        <div class="success-content">
                            <h4>Credit Successfully</h4>
                            <p>Amount of <span>“$200”</span> has been successfully Credited to your account with
                                transaction ID of <span>“#124454487878874”</span></p>
                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="{{ url('user-wallet') }}" class="btn btn-primary">Back to Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Gigs Publish -->
@endif

@if (Route::is(['user-wishlist']))
    <!-- File Details -->
    <div class="modal new-modal fade" id="file_view" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">File Details - #124</h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="file-view">
                        <div class="file-img">
                            <img src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}" class="img-fluid"
                                alt="img">
                        </div>
                        <div class="upload-wrap mb-0">
                            <div class="upload-image">
                                <span>
                                    <i class="feather-image"></i>
                                </span>
                                <h6>Video_gig-1.mp4</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="del-action me-2"><i
                                        class="feather-download"></i></a>
                                <a href="javascript:void(0);" class="del-action"><i class="feather-trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /File Details -->
@endif
