@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <a href="/"><img src="{{ URL::asset('assets/images/coastal-logo.jpg') }}" width="120px" height="120px" alt="Home"> Home</a>
    </div>

    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="{{ URL::asset('assets/images/mine15.jpg') }}" alt="" class="profile-wid-img" />
        </div>
    </div>

    <div class="pt-4 mb-4 pb-lg-4">
        <div class="row g-4 align-items-center">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="{{ URL::asset('assets/images/environ.jpg') }}" alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Dr. Joseph Yaw Appiah-Gyapong</h3>
                    <p class="text-white-75">Environmental, Natural Resources & Climate Change Specialist</p>
                    <div class="hstack text-white-50 gap-2">
                        <div><i class="ri-map-pin-user-line me-1 text-white-75"></i> Accra, Ghana</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Profile Summary</h4>
                    <p>Dr. Appiah-Gyapong is a seasoned specialist with over <strong>20 years</strong> of experience in Environmental and Social Management, Natural Resources, and Climate Change. His work spans across government, private sector, and development organizations including the <strong>World Bank</strong>, <strong>UNDP</strong>, and <strong>Forestry Commission of Ghana</strong>.</p>

                    <ul class="list-unstyled">
                        <li><strong>Current Role:</strong> Executive Secretary & CFO – Traffic & Environmental Network Ltd.</li>
                        <li><strong>Expertise:</strong> Environmental Impact Assessment, Climate Change Mitigation (REDD+), Carbon Finance, Ecosystem Restoration, Safeguards (World Bank/IFC), and Policy Advocacy</li>
                        <li><strong>Work Countries:</strong> Ghana, China, UK, South Africa, Nigeria, Mali, and others</li>
                    </ul>

                    <hr>

                    <h5 class="mb-3">Key Projects</h5>
                    <ul>
                        <li>Ghana Cocoa Forest REDD+ Programme (GCFRP)</li>
                        <li>Ghana Shea Landscape Emission Reductions Project (GSLERP)</li>
                        <li>Ghana Landscape Restoration and Small-Scale Mining Project (GLRSSMP)</li>
                        <li>Multiple ESIAs: Affordable Housing Project, Airport City, Resort, Tank Farm, Sand Mining</li>
                    </ul>

                    <hr>

                    <h5 class="mb-3">Education</h5>
                    <ul>
                        <li><strong>PhD Agroecology</strong> – CAAS, Beijing</li>
                        <li><strong>MSc Environmental Resource Management</strong> – KNUST, Ghana</li>
                        <li><strong>BSc Natural Resources Management</strong> – KNUST, Ghana</li>
                        <li><strong>BSc Economics</strong> – GIMPA, Ghana</li>
                        <li>Certificates in M&E, Public Relations, Environmental Law, Project Management</li>
                    </ul>

                    <hr>

                    <h5 class="mb-3">Professional Memberships</h5>
                    <ul>
                        <li>International Association for Impact Assessment (IAIA) – Ghana</li>
                        <li>Ghana M&E Forum</li>
                        <li>Ghana Institute of Professional Foresters (GIPF)</li>
                    </ul>
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
