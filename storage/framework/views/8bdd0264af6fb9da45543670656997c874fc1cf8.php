
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
                    <img src="<?php echo e(URL::asset('assets/images/priscilla.jpg')); ?>"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Miss. Priscilla Obour</h3>
                    <p class="text-white-75">Women/Programs coordinator</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2"><i
                                class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Accra,
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
                                        <p>Priscilla is a passionate and results-oriented Women's Coordinator dedicated to advancing gender equity, diversity, and inclusion, particularly in the mining industry. With a proven ability to implement impactful policies and organize programs that create supportive environments, she is committed to empowering women and fostering their professional growth within organizations.

                                            Priscilla holds a Bachelor of Technology in Procurement and Supply Chain Management from Kumasi Technical University, where she honed her expertise in supply chain operations and resource optimization.  
                                            
                                            She brings over two years of professional experience from her role at Telecel Ghana, where she managed procurement processes with precision, ensuring cost-effective and timely supply chain operations. Priscilla also excelled in customer service, adeptly addressing client inquiries and collaborating with her team to enhance service delivery and achieve organizational objectives.  
                                            
                                            Driven by her vision of inclusivity and empowerment, Priscilla continues to advocate for workplace diversity while leveraging her skills in procurement, program coordination, and leadership to make a meaningful impact. 
                                            
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
                                                        <h6 class="text-truncate mb-0">Women/Programs coordinator</h6>
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

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coastalapp\resources\views/coastal-profile5.blade.php ENDPATH**/ ?>