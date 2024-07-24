<?php $page = 'team'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('li_1')
            Team
        @endslot
        @slot('li_2')
            Team
        @endslot
    @endcomponent

    <!-- Team -->
    <section class="team-section team-section-list">
        <div class="container">
            <div class="row">

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-01.jpg') }}" class="img-fluid" alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Christopher Carlton</a>
                                </h4>
                                <p>Chief Executing Officer</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-02.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Roberta Addison</a>
                                </h4>
                                <p>Chief Technology Officer</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-03.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Bryant Stephan</a>
                                </h4>
                                <p>Chief Financial Officer</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-07.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Helen Miller</a>
                                </h4>
                                <p>Lead Software Developer</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-04.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Colby Sandoval</a>
                                </h4>
                                <p>UI/UX Designer</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-08.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Margarete Kaitlin</a>
                                </h4>
                                <p>Data Analyst</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-05.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Charles Hemphill</a>
                                </h4>
                                <p>Sales Manager</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-09.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Angela Estrada</a>
                                </h4>
                                <p>Product Manager</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

                <!-- Team List -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="team-grid w-100">
                        <div class="team-img">
                            <div class="team-overlay-img">
                                <img src="{{ URL::asset('/assets/img/team/team-06.jpg') }}" class="img-fluid"
                                    alt="Team">
                            </div>
                            <div class="team-view-btn">
                                <a href="{{ url('team-details') }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>
                                    <a href="{{ url('team-details') }}">Robert Sherrard</a>
                                </h4>
                                <p>Operations Manager</p>
                            </div>
                            <div class="team-social-links">
                                <a href="#" target="_blank">
                                    <i class="feather-facebook hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-twitter hi-icon"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="feather-linkedin hi-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team List -->

            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                    <li>
                        <a href="javascript:void(0);" class="previous"><i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="active">1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">2</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">3</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">4</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">5</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="next"><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /Pagination -->

        </div>
    </section>
    <!-- /Team -->
@endsection
