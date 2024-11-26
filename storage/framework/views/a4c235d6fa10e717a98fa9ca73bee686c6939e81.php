
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.profile'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <a href="/"><img src="<?php echo e(URL::asset('assets/images/coastal-logo.jpg')); ?>" width="120px" height="120px" alt="Home">home</a>
    </div>
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="<?php echo e(URL::asset('assets/images/mine15.jpg')); ?>" alt="" class="profile-wid-img" />
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="<?php echo e(URL::asset('assets/images/amoako.jpg')); ?>"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Mr. Amoakoh Emmanuel Ochere</h3>
                    <p class="text-white-75">Programs Coordinator</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2"><i
                                class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Central Region,
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
                                        <p>Amoakoh Emmanuel Ochere is a dedicated and hardworking individual with a strong foundation in education, 
                                            leadership, and civic engagement. Born on 15th September 1988, in Gomoa Ajumako in the Central Region of Ghana,
                                             Emmanuel has built a reputation for being disciplined, confident, and capable of handling responsibilities 
                                             both independently and collaboratively. 
                                             Emmanuel has pursued a well-rounded education, beginning at Apam Methodist JHS, where he earned his Basic Education 
                                             Certificate Examination (BECE) from 2003 to 2005. He continued to Gomoa Dawurampong Senior High Technical School, 
                                             completing his West African Senior School Certificate Examination (WASSCE) from 2006 to 2009.

                                            In 2018, Emmanuel graduated from the University of Cape Coast, where he obtained a Diploma in Basic Education. 
                                            Continuing his quest for academic excellence, he is currently enrolled at the Cape Coast Technical University (CCTU), 
                                            pursuing a Bachelor of Technology in Civil Engineering (B-Tech).
                                            
                                        </p>
                                        <p>
                                            Emmanuel excels in time management, teamwork, and handling pressure to meet deadlines. His ability to work independently 
                                            or as part of a team ensures the successful execution of tasks.
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
                                                        <h6 class="text-truncate mb-0">Programs Coordinator</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
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
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/pages/profile.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coastalapp\resources\views/coastal-profile6.blade.php ENDPATH**/ ?>