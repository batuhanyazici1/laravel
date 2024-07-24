<?php $page = 'preference-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Settings
        @endslot
        @slot('li_2')
            Settings
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content content">
        <div class="container">
            <div class="page-back-btn">
                <a href="{{ url('user-dashboard') }}"><i class="feather-arrow-left me-2"></i>Back to Dashboard</a>
            </div>
            <div class="settings-page-lists">
                <ul class="settings-head">
                    <li>
                        <a href="{{ url('user-settings') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('security-settings') }}">Security</a>
                    </li>
                    <li>
                        <a href="{{ url('preference-settings') }}" class="active">Preferences</a>
                    </li>
                    <li>
                        <a href="{{ url('billing-settings') }}">Plan & Billing</a>
                    </li>
                    <li>
                        <a href="{{ url('notification-settings') }}">Notifications</a>
                    </li>
                    <li>
                        <a href="{{ url('integration-settings') }}">Integrations</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Purchase List</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle1" class="check" checked="">
                                <label for="toggle1" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Sales List</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle2" class="check" checked="">
                                <label for="toggle2" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Uploaded Files</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle3" class="check" checked="">
                                <label for="toggle3" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Reviews</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle4" class="check" checked="">
                                <label for="toggle4" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Wishlist</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle5" class="check" checked="">
                                <label for="toggle5" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Chat</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle6" class="check" checked="">
                                <label for="toggle6" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Wallet</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle7" class="check" checked="">
                                <label for="toggle7" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="settings-card">
                        <div class="settings-card-body d-flex justify-content-between">
                            <h6>Payments</h6>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="toggle8" class="check" checked="">
                                <label for="toggle8" class="checktoggle"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-item mb-4">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <a href="#" class="btn btn-primary">Save Changes</a>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
