<?php $page = 'notification-settings'; ?>
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
                        <a href="{{ url('notification-settings') }}" class="active">Notifications</a>
                    </li>
                    <li>
                        <a href="{{ url('integration-settings') }}">Integrations</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="table-card noti-setting-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Transactional Notifications
                                        </th>
                                        <th>
                                            Push
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            SMS
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            Order Confirmation
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle1" class="check" checked="">
                                                <label for="toggle1" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle2" class="check" checked="">
                                                <label for="toggle2" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle3" class="check" checked="">
                                                <label for="toggle3" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Service Requests
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle4" class="check" checked="">
                                                <label for="toggle4" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle5" class="check" checked="">
                                                <label for="toggle5" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle6" class="check">
                                                <label for="toggle6" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Payment Receipts
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle7" class="check" checked="">
                                                <label for="toggle7" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle8" class="check" checked="">
                                                <label for="toggle8" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle9" class="check">
                                                <label for="toggle9" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Appointment Reminders
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle10" class="check" checked="">
                                                <label for="toggle10" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle11" class="check" checked="">
                                                <label for="toggle11" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle12" class="check" checked="">
                                                <label for="toggle12" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-item mt-4">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <a href="#" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
                    <div class="table-card noti-setting-table">
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>
                                            User Engagement Notifications
                                        </th>
                                        <th>
                                            Push
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            SMS
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Profile Completion Reminder
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-1" class="check" checked="">
                                                <label for="toggle-1" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-2" class="check" checked="">
                                                <label for="toggle-2" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-3" class="check" checked="">
                                                <label for="toggle-3" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Feedback or Survey Requests
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-4" class="check" checked="">
                                                <label for="toggle-4" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-5" class="check" checked="">
                                                <label for="toggle-5" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-6" class="check">
                                                <label for="toggle-6" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Achievements
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-7" class="check" checked="">
                                                <label for="toggle-7" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-8" class="check" checked="">
                                                <label for="toggle-8" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-9" class="check">
                                                <label for="toggle-9" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Suggestions
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-10" class="check" checked="">
                                                <label for="toggle-10" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-11" class="check" checked="">
                                                <label for="toggle-11" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggle-12" class="check" checked="">
                                                <label for="toggle-12" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-item mt-4">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <a href="#" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="table-card noti-setting-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            System Notifications
                                        </th>
                                        <th>
                                            Push
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            SMS
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            System Maintenance Schedules
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-1" class="check" checked="">
                                                <label for="toggles-1" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-2" class="check" checked="">
                                                <label for="toggles-2" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-3" class="check" checked="">
                                                <label for="toggles-3" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Updates
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-4" class="check" checked="">
                                                <label for="toggles-4" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-5" class="check" checked="">
                                                <label for="toggles-5" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-6" class="check">
                                                <label for="toggles-6" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Security Alerts
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-7" class="check" checked="">
                                                <label for="toggles-7" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-8" class="check" checked="">
                                                <label for="toggles-8" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-9" class="check">
                                                <label for="toggles-9" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Service Availability
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-10" class="check" checked="">
                                                <label for="toggles-10" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-11" class="check" checked="">
                                                <label for="toggles-11" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle d-flex align-items-center">
                                                <input type="checkbox" id="toggles-12" class="check" checked="">
                                                <label for="toggles-12" class="checktoggle"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-item mt-4">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <a href="#" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
