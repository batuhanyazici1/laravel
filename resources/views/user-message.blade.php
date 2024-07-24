<?php $page = 'user-message'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Chat
        @endslot
        @slot('li_2')
            Chat
        @endslot
    @endcomponent

    <!-- Content -->
    <div class="chat-page-wrapper">
        <div class="container">
            <div class="page-back-btn mb-4">
                <a href="{{ url('user-dashboard') }}"><i class="feather-arrow-left me-2"></i>Back to Dashboard</a>
            </div>
            <div class="content ">
                <!-- sidebar group -->
                <div class="sidebar-group left-sidebar chat_sidebar">

                    <!-- Chats sidebar -->
                    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

                        <div class="slimscroll">

                            <!-- Left Chat Title -->
                            <div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
                                <div class="select-group-chat">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);">
                                            All Chats
                                        </a>

                                    </div>
                                </div>
                                <div class="add-section">
                                    <ul>
                                        <li><a href="javascript:void(0);" class="user-chat-search-btn"><i
                                                    class="feather-search"></i></a></li>
                                    </ul>
                                    <!-- Chat Search -->
                                    <div class="user-chat-search">
                                        <form>
                                            <span class="form-control-feedback"><i class="feather-search"></i></span>
                                            <input type="text" name="chat-search" placeholder="Search"
                                                class="form-control">
                                            <div class="user-close-btn-chat"><i class="feather-x"></i></div>
                                        </form>
                                    </div>
                                    <!-- /Chat Search -->
                                </div>
                            </div>
                            <!-- /Left Chat Title -->

                            <!-- Top Online Contacts -->
                            <div class="top-online-contacts">
                                <div class="fav-title">
                                    <h6>Online Now</h6>
                                    <a href="" class="view-all-chat-profiles">View All</a>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-05.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('user-message') }}"><img
                                                            src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Top Online Contacts -->

                            <div class="sidebar-body chat-body" id="chatsidebar">

                                <!-- Left Chat Title -->
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title pin-chat">
                                        <h6><i class="bx bx-pin me-1"></i>Pinned Chat</h6>
                                    </div>
                                </div>
                                <!-- /Left Chat Title -->

                                <ul class="user-list space-chat">
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);" class="status-active">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Mark Villiams</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-thumbtack me-2"></i>
                                                        <i class="fa-solid fa-check-double"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar ">
                                                    <img src="{{ URL::asset('/assets/img/user/user-10.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Elizabeth Sosa</h5>
                                                    <p><span class="animate-typing-col">Typing
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-thumbtack"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Michael Howard</h5>
                                                    <p>Thank you</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-thumbtack me-2"></i>
                                                        <i class="fa-solid fa-check-double check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Left Chat Title -->
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title pin-chat">
                                        <h6><i class="bx bx-message-square-dots me-1"></i>Recent Chat</h6>
                                    </div>
                                </div>
                                <!-- /Left Chat Title -->
                                <ul class="user-list">
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Horace Keene</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Just Now</small>
                                                    <div class="chat-pin">
                                                        <span class="count-message">5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Read</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/user/user-19.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Hollis Tran</h5>
                                                    <p><i class="bx bx-video me-1"></i>Video</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>James Albert</h5>
                                                    <p><i class="bx bx-file me-1"></i>Project Tools.doc</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"
                                                        ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/user/user-17.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Debra Jones</h5>
                                                    <p><i class="bx bx-microphone me-1"></i>Audio</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">12:30 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-check-double check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar ">
                                                    <img src="{{ URL::asset('/assets/img/user/user-13.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Dina Brown</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-microphone-slash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/user/user-15.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Judy Mercer</h5>
                                                    <p class="missed-call-col"><i
                                                            class="bx bx-phone-incoming me-1"></i>Missed Call</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">25/July/23</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/assets/img/user/user-10.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Richard Ohare</h5>
                                                    <p><i class="bx bx-image-alt me-1"></i>Photo</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">27/July/23</small>
                                                    <div class="chat-pin">
                                                        <i class="fa-solid fa-check-double"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <!-- / Chats sidebar -->
                </div>
                <!-- /Sidebar group -->

                <!-- Chat -->
                <div class="chat chat-messages" id="middle">
                    <div class="h-100">
                        <div class="chat-header">
                            <div class="user-details mb-0">
                                <div class="d-lg-none">
                                    <ul class="list-inline mt-2 me-2">
                                        <li class="list-inline-item">
                                            <a class="text-muted px-0 left_sides" href="javascript:void(0);"
                                                data-chat="open">
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <figure class="avatar mb-0">
                                    <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}" class="rounded-circle"
                                        alt="image">
                                </figure>
                                <div class="mt-1">
                                    <h5>Mark Villiams</h5>
                                    <small class="last-seen">
                                        Last Seen at 07:15 PM
                                    </small>
                                </div>
                            </div>
                            <div class="chat-options ">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                            <i class="feather-search"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-outline-light no-bg" href="javascript:void(0);"
                                            data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ url('index') }}" class="dropdown-item "><span><i
                                                        class="bx bx-x"></i></span>Close Chat </a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-volume-mute"></i></span>Mute Notification</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-time-five"></i></span>Disappearing Message</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-brush-alt"></i></span>Clear Message</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-trash"></i></span>Delete Chat</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-dislike"></i></span>Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-block"></i></span>Block</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Chat Search -->
                            <div class="chat-search">
                                <form>
                                    <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                    <input type="text" name="chat-search" placeholder="Search Chats"
                                        class="form-control">
                                    <div class="close-btn-chat"><i class="feather-x"></i></div>
                                </form>
                            </div>
                            <!-- /Chat Search -->
                        </div>
                        <div class="chat-body chat-page-group slimscroll">
                            <div class="messages">
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star d-none"><i class="bx bxs-star"></i></span>
                                            </h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content">
                                            Hello <a href="javascript:void(0);">@Alex</a> Thank you for the beautiful web
                                            design ahead schedule.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-line">
                                    <span class="chat-date">Today, July 24</span>
                                </div>
                                <div class="chats chats-right">
                                    <div class="chat-content">
                                        <div class="chat-profile-name text-end">
                                            <h6>Alex Smith<span>8:16 PM</span><span
                                                    class="check-star msg-star-one d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star-one"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-one">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                            data-bs-toggle="modal" data-bs-target="#edit-message"><span><i
                                                                    class="bx bx-edit-alt"></i></span>Edit</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content ">
                                            <div class="emoj-group rig-emoji-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="chat-voice-group">
                                                <ul>
                                                    <li><a href="javascript:void(0);"><span><img
                                                                    src="{{ URL::asset('/assets/img/icons/play-01.svg') }}"
                                                                    alt="image"></span></a></li>
                                                    <li><img src="{{ URL::asset('/assets/img/voice.svg') }}"
                                                            alt="image"></li>
                                                    <li>0:05</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                </div>
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star-three d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star-three"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-three">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content award-link chat-award-link">
                                            <a href="javascript:void(0);">https://www.youtube.com/watch?v=GCmL3mS0Psk</a>
                                            <img src="{{ URL::asset('/assets/img/chat-img-01.jpg') }}" class="img-fluid"
                                                alt="img">
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chats chats-right">
                                    <div class="chat-content">
                                        <div class="chat-profile-name justify-content-end">
                                            <h6>Alex Smith<span>8:16 PM</span><span
                                                    class="check-star msg-star-four d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star-four"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-four">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                            data-bs-toggle="modal" data-bs-target="#edit-message"><span><i
                                                                    class="bx bx-edit-alt"></i></span>Edit</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content fancy-msg-box">
                                            <div class="emoj-group wrap-emoji-group ">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="download-col">
                                                <ul class="nav mb-0">
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-01.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-01.jpg') }}"
                                                                    alt="Img">
                                                            </a>

                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col ">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-02.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-02.jpg') }}"
                                                                    alt="Img">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col image-not-download">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-03.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-03.jpg') }}"
                                                                    alt="Img">
                                                                <span>10+</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                </div>

                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star-five d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star-five"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-five">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content">
                                            <div class="location-sharing">
                                                <div class="sharing-location-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <h6>My Location <a href="#">Download</a></h6>
                                            </div>
                                        </div>
                                        <div class="like-chat-grp">
                                            <ul>
                                                <li class="like-chat"><a href="javascript:void(0);">2<img
                                                            src="{{ URL::asset('/assets/img/icons/like.svg') }}"
                                                            alt="Icon"></a></li>
                                                <li class="comment-chat"><a href="javascript:void(0);">2<img
                                                            src="{{ URL::asset('/assets/img/icons/heart.svg') }}"
                                                            alt="Icon"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star d-none"><i class="bx bxs-star"></i></span>
                                            </h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item click-star"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-edit-alt"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content reply-getcontent">
                                            Thank you for your support
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content chat-cont-type">
                                        <div class="chat-profile-name chat-type-wrapper">
                                            <p>Mark Villiams Typing...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="chat-footer">
                        <form>
                            <div class="smile-foot">
                                <div class="chat-action-btns">
                                    <div class="chat-action-col">
                                        <a class="action-circle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item "><span><i
                                                        class="bx bx-file"></i></span>Document</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-camera"></i></span>Camera</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-image"></i></span>Gallery</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-volume-full"></i></span>Audio</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-map"></i></span>Location</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-user-pin"></i></span>Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="smile-foot emoj-action-foot">
                                <a href="javascript:void(0);" class="action-circle"><i class="bx bx-smile"></i></a>
                                <div class="emoj-group-list-foot down-emoji-circle">
                                    <ul>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icons/emoj-icon-01.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icons/emoj-icon-02.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icons/emoj-icon-03.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icons/emoj-icon-04.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icons/emoj-icon-05.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="javascript:void(0);"><i
                                                    class="feather-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="smile-foot">
                                <a href="javascript:void(0);" class="action-circle"><i
                                        class="bx bx-microphone-off"></i></a>
                            </div>
                            <div class="replay-forms">
                                <div class="chats forward-chat-msg reply-div d-none">
                                    <div class="contact-close_call text-end">
                                        <a href="javascript:void(0);" class="close-replay">
                                            <i class="bx bx-x"></i>
                                        </a>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);"
                                                        data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-star"></i></span>Star Message</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                            ><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content reply-content">
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control chat_form"
                                    placeholder="Type your message here...">
                            </div>
                            <div class="form-buttons">
                                <button class="btn send-btn" type="submit">
                                    <i class="bx bx-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Chat -->

            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
