<?php $page = 'user-wallet'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Wallet
        @endslot
        @slot('li_2')
            Wallet
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Wallet -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Wallet</h3>
                            <div id="tableinfo" class="d-none"></div>
                        </div>
                    </div>
                    <div class="wallet-wrap">
                        <div class="wallet-list">
                            <div class="wallet-item">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/wallet-01.svg') }}" alt="icon">
                                </span>
                                <div class="wallet-info">
                                    <p>Total Amount</p>
                                    <h3>$1,302.50</h3>
                                </div>
                            </div>
                            <div class="wallet-item">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/wallet-03.svg') }}" alt="icon">
                                </span>
                                <div class="wallet-info">
                                    <p>Total Credit</p>
                                    <h3>$1,292.50</h3>
                                </div>
                            </div>
                            <div class="wallet-item">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/wallet-02.svg') }}" alt="icon">
                                </span>
                                <div class="wallet-info">
                                    <p>Total Debit</p>
                                    <h3>$10.00</h3>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_wallet" class="btn btn-primary">Add
                            Wallet</a>
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
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="Transaction Date">
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/wallet-icon.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Reason</option>
                                        <option>I will do designing..</option>
                                        <option>Develop opena..</option>
                                        <option>Professional lifestyle</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-sort form-wrap">
                                    <span class="form-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/user-heart.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Transaction Type</option>
                                        <option>Debit</option>
                                        <option>Credit</option>
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
                                    <th>Reason</th>
                                    <th>Date & time</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#118</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-09.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do designing and
                                                executing targeted email campaigns</a>
                                        </h2>
                                    </td>
                                    <td>22 May 2023 10:50PM</td>
                                    <td><span class="badge bg-danger new-badge"><i class="fa-solid fa-arrow-down"></i>
                                            Debit</span></td>
                                    <td>-$154</td>
                                </tr>
                                <tr>
                                    <td>#117</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-03.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will develop openai, dalle,
                                                chat gpt app for mobile</a>
                                        </h2>
                                    </td>
                                    <td>21 May 2023 11:25 PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Credit</span></td>
                                    <td>+$1154</td>
                                </tr>
                                <tr>
                                    <td>#116</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do professional lifestyle
                                                and product photography</a>
                                        </h2>
                                    </td>
                                    <td>17 May 2023 12:16 AM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Credit</span></td>
                                    <td>+$6547</td>
                                </tr>
                                <tr>
                                    <td>#115</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}" class="rounded"
                                                    alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">Embedded Android & AOSP
                                                customizations</a>
                                        </h2>
                                    </td>
                                    <td>15 May 2023 11:21 PM</td>
                                    <td><span class="badge bg-success new-badge"><i class="fa-solid fa-arrow-up"></i>
                                            Credit</span></td>
                                    <td>+$1454</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-footer">
                        <div id="tablepage"></div>
                    </div>

                </div>
                <!-- /User Wallet -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
