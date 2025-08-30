@extends('layouts.master-without-nav')
@section('title') @lang('translation.gallery') @endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/glightbox/glightbox.min.css') }}">

@endsection
@section('content')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-landing " id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" class="card-logo card-logo-dark rounded" width="100px" height="80px" alt="Home" height="17">
                    <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" class="card-logo card-logo-light rounded" width="100px" height="80px" alt="Home"
                        height="17">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </nav>
        <div class="row container-fluid">
            <h4 >Our Gallery</h4>
            <div class="col-lg-12">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <ul class="list-inline categories-filter animation-nav" id="filter">
                                        <li class="list-inline-item"><a class="categories active" data-filter="*">All</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".project">Project</a></li>
                                        {{-- <li class="list-inline-item"><a class="categories" data-filter=".designing">Designing</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".photography">Photography</a></li>
                                        <li class="list-inline-item"><a class="categories" data-filter=".development">Development</a></li> --}}
                                    </ul>
                                </div>
    
                                <div class="row gallery-wrapper">
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image1.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image1.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image2.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image2.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image4.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image4.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image5.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image5.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image6.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image7.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image7.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/img-1.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine25.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/image1.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/image1.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/img-1.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine27.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/img-1.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine6.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine3.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine20.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
    
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/img-3.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine21.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.1K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/small/img-4.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine22.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
    
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 825
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 101
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine23.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine24.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine20.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine28.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine29.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine20.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <iframe width="1032" height="487" src="https://www.youtube.com/embed/Cj8OcWhmVN4" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine6.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 735
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 150
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine3.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 1.5k
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 250
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine2.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine19.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine17.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
    
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="{{ URL::asset('assets/images/mine6.jpg') }}" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ URL::asset('assets/images/mine18.jpg') }}" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                <div class="d-flex align-items-center mt-1">
                                                    <div class="flex-grow-1 text-muted"><a href="" class="text-body text-truncate">Projects</a></div>
                                                    <div class="flex-shrink-0">
                                                        {{-- <div class="d-flex gap-3">
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                            </button>
                                                            <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
    
                                {{-- <div class="text-center my-2">
                                    <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- ene card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->     
    </div>
    
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/isotope-layout/isotope-layout.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/gallery.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
