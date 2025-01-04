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
                    <img src="{{ URL::asset('assets/images/arhin.PNG') }}"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Prof. Emmanuel Arhin</h3>
                    <p class="text-white-75">Head of Research</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2"><i
                                class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Dormaa,
                            Ghana</div>
                        
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
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Overview</span>
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
                                        <p>Prof Arhin is a highly respected expert in the field of
                                            Applied Geology and Medical Geology. With 33 years of
                                            experience and a remarkable track record, Prof Arhin
                                            has made significant contributions to both academia and
                                            industry.

                                            Prof Arhin holds a Ph.D. in Geology from Leicester University, one of the
                                            prestigious universities in UK. His research focus includes techniques to
                                            explore minerals and geological studies related to medical science and
                                            environmental health.
                                            
                                        </p>
                                        <p>
                                            Prof Arhin has worked as a geologist for several leading organizations, where
                                            he has conducted groundbreaking research and provided valuable insights
                                            into the application of geology in the mineral exploration and environmental
                                            geochemistry and health fields. He is teaching courses in Earth Science
                                            (Applied Geology) and Environmental Geochemistry and Health that includes
                                            Medical Geology at various universities, which currently it includes University
                                            of Energy and Natural Resources and Pan African University. Life and Earth
                                            Sciences Institute (Including Health and Agriculture), Ibadan, Nigeria,
                                            University of Ibadan. Others were University for Development Studies and
                                            CKT University of Technology ans Applied Sciences.
                                        </p>
                                        <p>

                                        </p>
                                        
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div
                                                            class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-user-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Designation :</p>
                                                        <h6 class="text-truncate mb-0">Head of Research</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            {{-- <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div
                                                            class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-global-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Website :</p>
                                                        <a href="#" class="fw-semibold">www.velzon.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col--> --}}
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div><!-- end card -->

                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    
                </div>
                <!--end tab-content-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
    
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
