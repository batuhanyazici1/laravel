<?php $page = 'user-files'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Files
        @endslot
        @slot('li_2')
            Files
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <div class="row">

                @component('components.usersidebar')
                @endcomponent

                <!--User Files -->
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-header">
                        <div class="main-title">
                            <h3>Uploaded Files</h3>
                            <div id="tableinfo"></div>
                        </div>
                        <div class="head-info">
                            <p>Total Files <span class="text-primary">(17)</span></p>
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
                                        <img src="{{ URL::asset('/assets/img/icons/upload-icon.svg') }}" alt="icon">
                                    </span>
                                    <select class="select">
                                        <option>Uploaded for</option>
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
                                        <option>Uploaded By</option>
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
                                    <th>Uploaded For</th>
                                    <th>Uploaded On</th>
                                    <th>Uploaded By</th>
                                    <th>File Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#120</td>
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
                                    <td>Jpg</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#119</td>
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
                                    <td>Mp4</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#118</td>
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
                                    <td>15 May 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Andrea</a>
                                        </h2>
                                    </td>
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#117</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">Embedded Android & AOSP
                                                customizations</a>
                                        </h2>
                                    </td>
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
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#116</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-13.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do creating and
                                                promoting video content to engage audiences</a>
                                        </h2>
                                    </td>
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
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#115</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-05.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do implementing
                                                chatbots on websites or messaging apps</a>
                                        </h2>
                                    </td>
                                    <td>03 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Hendy</a>
                                        </h2>
                                    </td>
                                    <td>MP4</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#120</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-03.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will develop openai, dalle,
                                                chat gpt app for mobile</a>
                                        </h2>
                                    </td>
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
                                    <td>Mp4</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#121</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-02.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do professional
                                                lifestyle and product photography</a>
                                        </h2>
                                    </td>
                                    <td>15 May 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-03.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Andrea</a>
                                        </h2>
                                    </td>
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#122</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-04.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">Embedded Android & AOSP
                                                customizations</a>
                                        </h2>
                                    </td>
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
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-13.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do creating and
                                                promoting video content to engage audiences</a>
                                        </h2>
                                    </td>
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
                                    <td>Png</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#124</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/gigs/gigs-05.jpg') }}"
                                                    class="rounded" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="text-dark">I will do implementing
                                                chatbots on websites or messaging apps</a>
                                        </h2>
                                    </td>
                                    <td>03 Apr 2023</td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('user-profile') }}" class="avatar">
                                                <img src="{{ URL::asset('/assets/img/user/user-06.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <a href="{{ url('user-profile') }}">Hendy</a>
                                        </h2>
                                    </td>
                                    <td>MP4</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#file_view"><i class="feather-eye"></i></a>
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
                <!-- /User Files -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
