<?php $page = 'billing-settings'; ?>
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
    <div class="page-content">
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
                        <a href="{{ url('preference-settings') }}">Preferences</a>
                    </li>
                    <li>
                        <a href="{{ url('billing-settings') }}" class="active">Plan & Billing</a>
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
                <div class="col-md-12">
                    <div class="billing-type">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="settings-card">
                                    <div class="settings-card-head">
                                        <h5>Current Plan: Basic</h5>
                                        <span>Renew On: 01 Feb 2024</span>
                                    </div>
                                    <div class="settings-card-body">
                                        <div class="btn-item">
                                            <a href="#" class="btn btn-primary">Manage</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="settings-card">
                                    <div class="settings-card-head d-flex justify-content-between align-items-start">
                                        <div class="payment-method-add">
                                            <h5>Payment Method</h5>
                                            <span>Expires On: 04 Mar 2024</span>
                                        </div>
                                        <a href="#" class="add-payment payment-btn">Add</a>
                                    </div>
                                    <div class="settings-card-body">
                                        <div class="payment-method-edit">
                                            <div class="card-type">
                                                <span class="payment-card-img">
                                                    <img src="{{ URL::asset('/assets/img/icons/visa.svg') }}"
                                                        alt="">
                                                </span>
                                                <div class="card-no">
                                                    <span>Visa *****4023</span>
                                                </div>
                                            </div>
                                            <a href="#" class="edit-payment payment-btn">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan-bill-table">
                <div class="dashboard-header">
                    <div class="main-title">
                        <h3>Invoices</h3>
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
                            <div class="search-filter-selected select-icon">
                                <div class="form-group">
                                    <span class="sort-text"><img src="{{ URL::asset('/assets/img/icons/user-heart.svg') }}"
                                            class="img-fluid" alt="img"></span>
                                    <select class="select">
                                        <option>Plan</option>
                                        <option>Purchase</option>
                                    </select>
                                </div>
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
                                <th>Invoice No</th>
                                <th>Billing Date</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#">INV0045</a>
                                </td>
                                <td>01 Dec 2023 09:00AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $100
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="#">INV0044</a>
                                </td>
                                <td>01 Nov 2023 10:00AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $200
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="#">INV0043</a>
                                </td>
                                <td>01 Oct 2023 09:15AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $300
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <a href="#">INV0043</a>
                                </td>
                                <td>01 Sep 2023 09:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <a href="#">INV0041</a>
                                </td>
                                <td>30 Aug 2023 09:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $100
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <a href="#">INV0040</a>
                                </td>
                                <td>25 Aug 2023 07:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $200
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <a href="#">INV0039</a>
                                </td>
                                <td>15 Aug 2023 06:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $500
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <a href="#">INV0038</a>
                                </td>
                                <td>10 Aug 2023 09:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    <a href="#">INV0037</a>
                                </td>
                                <td>01 Aug 2023 11:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $500
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                    <a href="#">INV0036</a>
                                </td>
                                <td>20 Jul 2023 12:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $300
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>
                                    <a href="#">INV0035</a>
                                </td>
                                <td>10 JUl 2023 05:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>
                                    <a href="#">INV0034</a>
                                </td>
                                <td>01 Jul 2023 09:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>
                                    <a href="#">INV0033</a>
                                </td>
                                <td>01 Jun 2023 11:30AM</td>
                                <td>
                                    Basic
                                </td>
                                <td>
                                    <span class="badge badge-receive bg-success d-inline-flex align-items-center"><i
                                            class="feather-check me-2"></i>Paid</span>
                                </td>
                                <td>
                                    $500
                                </td>
                                <td>
                                    <div class="table-action justify-content-end">
                                        <a href="javascript:void(0);"><i class="feather-download"></i></a>
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
        </div>
    </div>
    <!-- /Page Content -->
@endsection
