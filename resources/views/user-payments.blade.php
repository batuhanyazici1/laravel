<?php $page = 'user-payments'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Payments
        @endslot
        @slot('li_2')
            Payments
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Payments -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Payments</h3>
                            <div id="tableinfo"></div>
                        </div>
                        <div class="head-info">
                            <p>Total Payments <span class="text-primary">(17)</span></p>
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
                                        <img src="{{ URL::asset('/assets/img/icons/user-heart.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Buyer</option>
                                        <option>Jones</option>
                                        <option>Adrian</option>
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
                                    <th>Amount</th>
                                    <th>Buyer</th>
                                    <th>Date & time</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#157</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do designing and
                                                executing...</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-01.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Jones</a>
                                        </h2>
                                    </td>
                                    <td>22 May 2023 10:50PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-down"></i>
                                            Cancelled</span></td>
                                    <td>$1454</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);"><i class="feather-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#156</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-03.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will develop openai, dalle,
                                                chat...</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-02.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Adrian</a>
                                        </h2>
                                    </td>
                                    <td>21 May 2023 11:25 PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Recieved</span></td>
                                    <td>$1154</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);"><i class="feather-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#155</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do professional lifestyle
                                                and...</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Andrea</a>
                                        </h2>
                                    </td>
                                    <td>17 May 2023 12:16 AM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Recieved</span></td>
                                    <td>$6547</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);"><i class="feather-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#154</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">Embedded Android & AOSP...</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-04.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Martin</a>
                                        </h2>
                                    </td>
                                    <td>15 May 2023 11:21 PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Recieved</span></td>
                                    <td>$1454</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);"><i class="feather-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#153</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-13.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do creating and
                                                promoting...</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">James</a>
                                        </h2>
                                    </td>
                                    <td>10 May 2023 09:20PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Recieved</span></td>
                                    <td>$1454</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);"><i class="feather-eye"></i></a>
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
                <!-- /User Payments -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
