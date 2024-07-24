<?php $page = 'integration-settings'; ?>
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
                        <a href="{{ url('preference-settings') }}">Preferences</a>
                    </li>
                    <li>
                        <a href="{{ url('billing-settings') }}">Plan & Billing</a>
                    </li>
                    <li>
                        <a href="{{ url('notification-settings') }}">Notifications</a>
                    </li>
                    <li>
                        <a href="{{ url('integration-settings') }}" class="active">Integrations</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="table-card integrated-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            SMS Gateway Integrations
                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="custom-first-row">
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-01.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal" data-bs-toggle="modal"
                                                data-bs-target="#connect_nexmo"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-1" class="check" checked="">
                                                <label for="toggle-1" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-02.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-2" class="check" checked="">
                                                <label for="toggle-2" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-03.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-3" class="check">
                                                <label for="toggle-3" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table-card integrated-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Email Integrations
                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="custom-first-row">
                                        <td>
                                            <div class="d-flex align-items-center integration-name">
                                                <span class="integration-icon">
                                                    <img src="{{ URL::asset('assets/img/gateway/gateway-04.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>SendGrid</h6>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-4" class="check" checked="">
                                                <label for="toggle-4" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center integration-name">
                                                <span class="integration-icon">
                                                    <img src="{{ URL::asset('assets/img/gateway/gateway-05.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>PHP Mailer</h6>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-5" class="check" checked="">
                                                <label for="toggle-5" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="table-card integrated-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Payment Gateway Integrations
                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="custom-first-row">
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-09.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-9" class="check" checked="">
                                                <label for="toggle-9" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-10.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-10" class="check" checked="">
                                                <label for="toggle-10" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="integration-icon">
                                                <img src="{{ URL::asset('assets/img/gateway/gateway-11.svg') }}"
                                                    alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-soft-danger new-badge">Not Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-11" class="check">
                                                <label for="toggle-11" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table-card integrated-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Social Media Integrations
                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="custom-first-row">
                                        <td>
                                            <div class="d-flex align-items-center integration-name">
                                                <span class="integration-icon">
                                                    <img src="{{ URL::asset('assets/img/gateway/gateway-06.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>Facebook</h6>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-6" class="check" checked="">
                                                <label for="toggle-6" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center integration-name">
                                                <span class="integration-icon">
                                                    <img src="{{ URL::asset('assets/img/gateway/gateway-07.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>Twitter</h6>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="badge bg-soft-secondary new-badge">Connected</span>
                                        </td>
                                        <td>
                                            <a href="#" class="settings-modal"><i class="feather-settings"></i></a>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-7" class="check" checked="">
                                                <label for="toggle-7" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
