<?php $page = 'user-sales'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            My Sales
        @endslot
        @slot('li_2')
            My Sales
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Sales -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>My Sales</h3>
                            <div id="tableinfo"></div>
                        </div>
                        <div class="head-info">
                            <p>Total Sales <span class="text-primary">(17)</span></p>
                        </div>
                    </div>
                    <div class="table-filter">
                        <ul class="filter-item">
                            <li>
                                <p>Filter</p>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}" alt="icon">
                                    </span>
                                    <input type="text" class="form-control datetimepicker" placeholder="From Date">
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}" alt="icon">
                                    </span>
                                    <input type="text" class="form-control datetimepicker" placeholder="To Date">
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/status-icon.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>By Status</option>
                                        <option>New</option>
                                        <option>Pending</option>
                                        <option>Processing</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/user-heart.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Buyer</option>
                                        <option>Jones</option>
                                        <option>Andrea</option>
                                        <option>Martin</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <div id="tablefilter"></div>
                    </div>
                    <div class="table-responsive custom-table">
                        <table class="table table-stripe datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Delivery On</th>
                                    <th>Seller</th>
                                    <th>Feedback</th>
                                    <th>Cancel</th>
                                    <th>Amount</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#145</td>
                                    <td class="text-dark">Designing and developing...</td>
                                    <td>22 May 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Jones</a>
                                        </h2>
                                    </td>
                                    <td>Pending</td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Wallet</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-info new-badge">New</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#order_details"><i class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#144</td>
                                    <td class="text-dark">I will do professional lifest...</td>
                                    <td>20 May 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Adrian</a>
                                        </h2>
                                    </td>
                                    <td>Pending</td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Paypal</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-warning new-badge">Processing</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#order_details"><i class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#143</td>
                                    <td class="text-dark">I will develop openai, dalle..</td>
                                    <td>22 May 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Andrea</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_review">View</a>
                                    </td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Wallet</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-info new-badge">New</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#order_details"><i
                                                        class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#142</td>
                                    <td class="text-dark">Embedded Android & AO...</td>
                                    <td>27 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Martin</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_review1">View</a>
                                    </td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Cod</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-info new-badge">New</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#order_details"><i
                                                        class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#141</td>
                                    <td class="text-dark">I will do implementing cha... </td>
                                    <td>19 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">James</a>
                                        </h2>
                                    </td>
                                    <td>Pending</td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Wallet</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-warning new-badge">Processing</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#order_details"><i
                                                        class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#140</td>
                                    <td class="text-dark">Managing and optimizing...</td>
                                    <td>11 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Hendy</a>
                                        </h2>
                                    </td>
                                    <td>Pending</td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Wallet</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-success new-badge">Completed</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#order_details"><i
                                                        class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#139</td>
                                    <td class="text-dark">I will do collaborating with..</td>
                                    <td>01 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-07.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Jones</a>
                                        </h2>
                                    </td>
                                    <td>Pending</td>
                                    <td>Cancel</td>
                                    <td>$2000</td>
                                    <td>Wallet</td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#order_status"><span
                                                class="badge bg-black new-badge">Pending</span></a></td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#order_details"><i
                                                        class="feather-eye"></i> View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-footer">
                        <div id="tablepage"></div>
                    </div>
                </div>
                <!-- /User Sales -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
