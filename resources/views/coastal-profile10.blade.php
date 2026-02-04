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
                    <img src="{{ URL::asset('assets/images/kenah.jpeg') }}"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>

            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Dr. Godfried Kenah, DNP-FNP</h3>
                    <p class="text-white-75">
                        Medical Practitioner | Corporate Executive | Advocate for Sustainable Mining & Occupational Health
                    </p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2">
                            <i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>
                            USA & Ghana
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex">
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i>
                                <span class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">About</h5>
                                        <p>
                                            Dr. Godfried Kenah is a U.S.-based medical practitioner and corporate executive 
                                            whose work bridges healthcare delivery and responsible mining. As a Doctor of 
                                            Nursing Practice (DNP) specializing in Internal and Family Medicine, he brings 
                                            deep expertise in human health, occupational safety, and environmental well-being 
                                            to the mining and natural resources sector.
                                        </p>
                                        <p>
                                            He is the Founder and CEO of QUnique Med LLC in the United States, providing 
                                            innovative telehealth and chronic disease management services, and serves as 
                                            Director of MinMax Mining Limited in Ghana, where he champions ethical and 
                                            sustainable gold extraction. Dr. Kenah currently serves on the Chairperson’s 
                                            Advisory Team of the Coastal Zone Association, contributing medical insight to 
                                            advance responsible mining practices that prioritize health, safety, and 
                                            environmental sustainability.
                                        </p>

                                        <h5 class="mt-4">Professional Experience</h5>
                                        <ul>
                                            <li>
                                                <strong>Founder & CEO – QUnique Med LLC (USA)</strong> (2020 – Present)
                                                <ul>
                                                    <li>Leads telehealth and chronic care management programs</li>
                                                    <li>Oversees clinical operations and healthcare innovation</li>
                                                    <li>Expands access to quality healthcare through technology</li>
                                                </ul>
                                            </li>
                                            <li class="mt-2">
                                                <strong>Director – MinMax Mining Limited (Ghana)</strong> (2022 – Present)
                                                <ul>
                                                    <li>Directs strategy for responsible gold and rock mining</li>
                                                    <li>Drives health, safety, and environmental sustainability standards</li>
                                                </ul>
                                            </li>
                                            <li class="mt-2">
                                                <strong>Member – Chairperson’s Advisory Team, Coastal Zone Association (Ghana)</strong> (2025 – Present)
                                                <ul>
                                                    <li>Provides occupational and environmental health expertise</li>
                                                    <li>Supports community wellness and responsible mining initiatives</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <h5 class="mt-4">Education</h5>
                                        <ul>
                                            <li>Doctor of Nursing Practice (DNP), Internal & Family Medicine – University of Mary, USA</li>
                                            <li>Bachelor of Science in Nursing (BSN) – University of Jamestown, USA</li>
                                            <li>Associate Degree in Agriculture (Crop Production) – University of Ghana</li>
                                        </ul>

                                        <h5 class="mt-4">Areas of Expertise</h5>
                                        <ul>
                                            <li>Occupational & Environmental Health in Mining</li>
                                            <li>Responsible Gold Mining & Sustainable Resource Management</li>
                                            <li>Community Health Development</li>
                                            <li>Corporate Leadership & Healthcare Innovation</li>
                                        </ul>

                                        <h5 class="mt-4">Professional Affiliations</h5>
                                        <ul>
                                            <li>American Association of Nurse Practitioners (AANP)</li>
                                            <li>Ghana Chamber of Mines – Corporate Member (MinMax Mining Limited)</li>
                                            <li>Coastal Zone Association – Advisory Team</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
