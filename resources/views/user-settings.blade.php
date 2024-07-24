<?php $page = 'user-settings'; ?>
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
                        <a href="{{ url('user-settings') }}" class="active">Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('security-settings') }}">Security</a>
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
                            <h4>Personal Information</h4>
                        </div>
                        <form action="{{ url('user-settings') }}">
                            <div class="settings-card-body">
                                <div class="img-upload-head">
                                    <div class="profile-img">
                                        <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="">
                                    </div>
                                    <div class="img-formate">
                                        <p>Max file size is 5MB, Minimum dimension: 150x150 And Suitable files are .jpg &
                                            .png</p>
                                        <div class="upload-remove-btns">
                                            <div class="drag-upload form-wrap">
                                                <input type="file" accept="image/*">
                                                <div class="img-upload">
                                                    <p>Upload Image</p>
                                                </div>
                                            </div>
                                            <div class="img-remove-btn">
                                                <a href="">Remove Image</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label>First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label>Phone number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Addres</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-card-footer">
                                <div class="btn-item">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="settings-card">
                        <div class="settings-card-head">
                            <h4>Personal Information</h4>
                        </div>
                        <form action="{{ url('user-settings') }}">
                            <div class="settings-card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Job title</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Language Known</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Skill Set</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>About You</label>
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Why Work with me</label>
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="settings-card-footer">
                                <div class="btn-item">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="settings-card">
                        <div class="settings-card-head">
                            <h4>Change Email</h4>
                        </div>
                        <form action="{{ url('user-settings') }}">
                            <div class="settings-card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Current Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>New Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label>Confirm Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-card-footer">
                                <div class="btn-item">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
