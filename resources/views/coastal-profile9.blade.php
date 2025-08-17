@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <a href="/"><img src="{{ URL::asset('assets/images/coastal-logo.jpg') }}" width="120px" height="120px" alt="Home">home</a>
    </div>
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="{{ URL::asset('assets/images/mine15.jpg') }}" alt="" class="profile-wid-img" />
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="{{ URL::asset('assets/images/charles.jpg') }}"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Mr. Charles Toku</h3>
                    <p class="text-white-75">Senior Plant Metallurgist</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2">
                            <i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>
                            Obuasi, Ghana
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i>
                                <span class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">About</h5>
                                        <p>
                                            A highly experienced plant operations professional with over 30 years’ 
                                            experience at AngloGold Ashanti Obuasi, working across multiple sections 
                                            of the gold processing plant. Mr. Charles Toku has built strong expertise 
                                            in metallurgical processes, research operations, and plant supervision, 
                                            with a proven record of leadership, safety, and operational excellence.
                                        </p>

                                        <h5 class="mt-4">Experience</h5>
                                        <ul>
                                            <li>Plant Operator (1991 – 2006)</li>
                                            <li>Plant Supervisor (2007 – 2009)</li>
                                            <li>Senior Plant Metallurgist (2010 – 2014)</li>
                                            <li>Plant Research Operation (2016 – 2022)</li>
                                        </ul>

                                        <h5 class="mt-4">Skills & Leadership Competencies</h5>
                                        <ul>
                                            <li>Safety conscious, proactive and reliable</li>
                                            <li>Strong leadership and team collaboration</li>
                                            <li>Highly motivated with drive for productivity improvements</li>
                                        </ul>

                                        <h5 class="mt-4">Processing Plant Sections Worked</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Heap Leach</li>
                                                    <li>Goldroom (Smelting)</li>
                                                    <li>Gravity Separation (Knelson Concentrator)</li>
                                                    <li>Elution (Desorption)</li>
                                                    <li>Carbon in Leach (CIL)</li>
                                                    <li>Carbon in Pulp (CIP)</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Crushers (Communition)</li>
                                                    <li>Milling Circuit (Grinding)</li>
                                                    <li>Flotation (Thickeners)</li>
                                                    <li>Control Room (SCADA, DCS)</li>
                                                    <li>BIOX Oxidation (CCD)</li>
                                                    <li>Paste Fill, Water Treatment, Vat Leach, Chemical Lab</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-content-->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
