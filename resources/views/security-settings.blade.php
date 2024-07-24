<?php $page = 'security-settings'; ?>
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
                        <a href="{{ url('security-settings') }}" class="active">Security</a>
                    </li>
                    <li>
                        <a href="{{ url('preference-settings') }}">Preferences</a>
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
                <div class="col-lg-6">
                    <div class="settings-card">
                        <div class="settings-card-head">
                            <h4>Password</h4>
                        </div>
                        <div class="settings-card-body">
                            <span class="changed-info">Last Changed 20 Jan 2024, 09:00 AM</span>
                        </div>
                        <div class="settings-card-footer">
                            <div class="btn-item">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#change_password">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="settings-card">
                        <div class="settings-card-head d-flex justify-content-between align-items-center">
                            <h4>Two Factor Authentication</h4>
                            <div class="status-toggle d-flex align-items-center">
                                <input type="checkbox" id="user2" class="check" checked="">
                                <label for="user2" class="checktoggle"></label>
                            </div>
                        </div>
                        <div class="settings-card-body">
                            <span class="changed-info">Last Changed 20 Jan 2024, 09:00 AM</span>
                        </div>
                        <div class="settings-card-footer">
                            <div class="btn-item">
                                <a href="#" class="btn btn-primary">Disable</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="settings-card">
                        <div class="settings-card-head">
                            <h4>Device Management</h4>
                        </div>
                        <div class="settings-card-body">
                            <span class="changed-info">Last Changed 20 Jan 2024, 09:00 AM</span>
                        </div>
                        <div class="settings-card-footer">
                            <div class="btn-item">
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="settings-card">
                        <div class="settings-card-head">
                            <h4>Account Acitivity</h4>
                        </div>
                        <div class="settings-card-body">
                            <span class="changed-info">Last Changed 20 Jan 2024, 09:00 AM</span>
                        </div>
                        <div class="settings-card-footer">
                            <div class="btn-item">
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
