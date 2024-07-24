<?php $page = 'user-notification'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Notifications
        @endslot
        @slot('li_2')
            Notifications
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                <!-- Notifications -->
                <div class="col-xl-12">
                    <div class="notification-header">
                        <div class="form-sort form-wrap">
                            <span class="form-icon">
                                <img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}" alt="icon">
                            </span>
                            <select class="select">
                                <option>Jan 2024</option>
                                <option>Feb 2024</option>
                                <option>Mar 2024</option>
                            </select>
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="btn"><i class="feather-check"></i> Mark all as read</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-delete"><i class="feather-trash-2"></i> Delete all</a>
                            </li>
                        </ul>
                    </div>
                    <div class="notication-list">
                        <div class="notication-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="notication-content">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}" class="img-fluid"
                                                alt="img">
                                        </span>
                                        <div class="notication-info">
                                            <p>Paul Cronk requested a new service on Digital Marketing <i
                                                    class="fa-solid fa-circle"></i></p>
                                            <p class="notify-time">2 mins ago</p>
                                            <div class="noti-btn">
                                                <a href="javascript:void(0);" class="btn btn-secondary">Decline</a>
                                                <a href="javascript:void(0);" class="btn btn-primary">Accept</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="notification-btn text-end">
                                        <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notication-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="notication-content">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" class="img-fluid"
                                                alt="img">
                                        </span>
                                        <div class="notication-info">
                                            <p>Added “The Psychology of Design: Influencing Emotions through Visuals” <i
                                                    class="fa-solid fa-circle"></i></p>
                                            <p class="notify-time">2 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="notification-btn text-end">
                                        <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notication-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="notication-content">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/user/user-07.jpg') }}" class="img-fluid"
                                                alt="img">
                                        </span>
                                        <div class="notication-info">
                                            <p>Paul Cronk requested a new service on Digital Marketing <i
                                                    class="fa-solid fa-circle"></i></p>
                                            <p class="notify-time">2 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="notification-btn text-end">
                                        <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notication-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="notication-content">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/user/user-11.jpg') }}" class="img-fluid"
                                                alt="img">
                                        </span>
                                        <div class="notication-info">
                                            <p>Paul Cronk requested a new service on Digital Marketing <i
                                                    class="fa-solid fa-circle"></i></p>
                                            <p class="notify-time">2 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="notification-btn text-end">
                                        <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Notifications -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
