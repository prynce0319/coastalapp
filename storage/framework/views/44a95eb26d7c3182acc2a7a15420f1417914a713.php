
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
                    <img src="<?php echo e(URL::asset('assets/images/rita.jpg')); ?>"
                        alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Dr. Rita Owusu-Amankwah</h3>
                    <p class="text-white-75">Board Chair</p>
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
                            
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">About</h5>
                                        <p>Dr. Rita Owusu-Amankwah is a seasoned Social Development expert with skills and hands-on working experience in baseline studies, midterm and end term evaluation, research, strategic partnerships management, 
                                            organization development, project development and management, policy development, government relations, advocacy, 
                                            sustainable agricultural value chains, voluntary sustainability standards, 
                                            human right due diligence, women empowerment and entrepreneurship, social  
                                            and child protection,  capacity strengthening, socio-economic research, and multi-stakeholder engagements. 
                                            She has worked on World Bank Funded projects as Social Development and Gender Expert for 
                                            Ghana Landscape Restoration and Small Scale Mining Protect, Ghana Productive Safety Net Project and currently, 
                                            Ghana Tree Crop Diversification Project. Additionally, she has provided consultancy services for UNDP Ghana, 
                                            Fair Trade International/Fair Trade Africa, Tony’s Chocolonely, World Cocoa Foundation, Solidaridad West Africa, 
                                            GIZ, JICA/ International Development Center of Japan Inc, World University Services of Canada and some Multinational Companies on Cocoa sustainability, sustainable agricultural policy development and child protection, 
                                            and Farmers’ organizations such as Kuapa Kokoo Farmers Union. She contributed to the development of the Ghana Cocoa Sector Development Strategy II, 
                                            National Child Labour Framework, and National Plan of Action on Child Labour. </p>
                                        <p>She was the Social Protection Director (World bank technical support to the Ministry of Gender, 
                                            Children and Social Protection, Ghana); Country Coordinator for Ghana Cocoa Platform, 
                                            funded by UNDP, Country Programme Coordinator for the US Department of Labour (USDOL) and 
                                            National Confectionary Association funded United Nations International Labour Organisation’s (ILO) 
                                            West Africa Cocoa/Commercial Agriculture Project (WACAP) that pioneered interventions to eliminate 
                                            child labour in cocoa farms in West Africa. She was the lead consultant for the Baseline Study for 
                                            WUSC-EUMC INVEST project in 2020; and the study on “Description and Assessment of Existing Monitoring and 
                                            Response Systems for Child Labour of Kuapa Kokoo Farmers Union” Commissioned by Fair Trade International 
                                            and Fair Trade Africa in 2022. She holds degree of Doctor from Wageningen University, School of Social 
                                            Sciences (WASS), Post graduate Certificate on Organizational from Development Institute (ODI), MA Economics 
                                            & Industrial Management and BA Social Science from Kwame Nkrumah University of Science and Technology (KNUST).</p>
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
                                                        <h6 class="text-truncate mb-0">Board Chair</h6>
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

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coastalapp\resources\views/coastal-profile.blade.php ENDPATH**/ ?>