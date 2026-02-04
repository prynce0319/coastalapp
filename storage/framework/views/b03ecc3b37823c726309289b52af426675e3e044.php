
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.gallery'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/glightbox/glightbox.min.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-landing " id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" class="card-logo card-logo-dark rounded" width="100px" height="80px" alt="Home" height="17">
                    <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" class="card-logo card-logo-light rounded" width="100px" height="80px" alt="Home"
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
                                        
                                    </ul>
                                </div>
    
                                <div class="row gallery-wrapper">
                                    <!-- Gallery Item 1 -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/cso1.jpeg')); ?>" title="GoldBod Technical Team Visit">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/cso1.jpeg')); ?>" alt="GoldBod Technical Team Visit" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">GoldBod Familiarization Visit</h5>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="box-content">
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        Members of the GoldBod Technical Team during their familiarization visit to the Coastal Zone Mining Integrated Support Project.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gallery Item 2 -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/cso5.jpeg')); ?>" title="Engagement with Traditional Authority">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/cso5.jpeg')); ?>" alt="Traditional Council Engagement" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Traditional Council Engagement</h5>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="box-content">
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        GoldBod Technical Team and project executives engaging the Omanhene of the Gomoa Ajumako Traditional Council.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gallery Item 3 -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/cso3.jpeg')); ?>" title="Project Introduction">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/cso3.jpeg')); ?>" alt="Project Introduction" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Project Introduction</h5>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="box-content">
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        Project Leader Henry Ben-Smith introducing the GoldBod Technical Team to how operations are run.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gallery Item 4 -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/cso4.jpeg')); ?>" title="Stakeholder Discussion">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/cso4.jpeg')); ?>" alt="Stakeholder Discussion" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Stakeholder Discussions</h5>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="box-content">
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        Discussions focused on GoldBod’s support for the Coastal Zone Mining Integrated Support Project and sustainable mining practices.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image1.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image1.jpg')); ?>" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="box-content">

                                                <!-- Footnote / Comment Section -->
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        This project focuses on sustainable mining practices within coastal communities.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image2.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image8.jpg')); ?>" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">

                                                <!-- Footnote / Comment Section -->
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        Review Committee Meets on Cooperative Mining & Skills Development Programme
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image9.png')); ?>" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">

                                                <!-- Footnote / Comment Section -->
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        GNASSM Meets UK-Ghana Gold Programme on ASGM Royalties
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image4.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image4.jpg')); ?>" alt="" />
                                                    <div class="gallery-overlay">
                                                        <h5 class="overlay-caption">Coastal Zone Mining Association</h5>
                                                    </div>
                                                </a>
                                            </div>
    
                                            <div class="box-content">
                                                

                                                <!-- Footnote / Comment Section -->
                                                <div class="mt-2">
                                                    <small class="text-muted fs-6">
                                                        A Memorandum of Understanding (MoU) between Seychem Limited–Coastal Zone Mining Association Alliance and the Minerals Development Fund
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"  data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image5.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image5.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image6.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image7.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image7.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine25.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/image1.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/image1.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine27.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine3.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine20.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-3.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine21.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine22.jpg')); ?>" alt="" />
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
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine23.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine24.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine20.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine28.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine29.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine20.jpg')); ?>" alt="" />
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
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <iframe width="1032" height="487" src="https://www.youtube.com/embed/Cj8OcWhmVN4" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" alt="" />
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
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine3.jpg')); ?>" alt="" />
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
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine2.jpg')); ?>" alt="" />
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
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine19.jpg')); ?>" alt="" />
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
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine17.jpg')); ?>" alt="" />
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
    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo e(URL::asset('assets/images/mine18.jpg')); ?>" alt="" />
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
                                </div>
                                <!-- end row -->
    
                                
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
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/glightbox/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/isotope-layout/isotope-layout.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/gallery.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coastalapp\resources\views/coastal-gallery.blade.php ENDPATH**/ ?>