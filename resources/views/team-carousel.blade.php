<?php $page = 'team-carousel'; ?>
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
    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-slider owl-carousel">
                        <div class="team-grid">
                            <div class="team-img">
                                <div class="team-overlay-img">
                                    <img src="{{ URL::asset('/assets/img/team/team-01.jpg') }}" class="img-fluid"
                                        alt="Team">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                        <div class="team-grid">
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
                </div>
            </div>
        </div>
    </section>
    <!-- /Team -->
@endsection
