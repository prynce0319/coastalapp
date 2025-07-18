
<?php $__env->startSection('title'); ?> CZMA <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <style>
        .bg-content2 {
            background-color: rgb(77, 4, 4);
        }
    </style>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">

        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" class="card-logo card-logo-dark rounded" width="150px" height="100px" alt="logo dark" height="17">
                        <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" class="card-logo card-logo-light rounded" width="150px" height="100px" alt="logo light"
                            height="17">
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item">
                                <a class="nav-link active" href="#hero">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Initiatives</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>

                        
                    </div>

                </div>
            </nav>
            <!-- end navbar -->
            <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

            <!-- start hero section -->
            <section class="section pb-0 hero-section" id="hero">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center mt-lg-5 pt-5">
                                <h3  style="color: rgb(239, 224, 15);">COASTAL ZONE MINING ASSOCIATION</h3>                              
                                <h1 class="display-6 fw-semibold mb-3 lh-base text-white">Transforming Small-Scale Mining:  <span id="typed-text" style="color: rgb(15, 7, 71);"></span></h1>
                                <p class="lead lh-base" style="color: rgb(235, 240, 241)">Small scale miners and their communities in the coastal designated areas.
                                </p>
                                <br>
                                <br>


                                
                                
                            </div>

                            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                <div class="demo-img-patten-top d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('assets/images/landing/img-pattern.png')); ?>" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="demo-img-patten-bottom d-none d-sm-block">
                                    <img src="<?php echo e(URL::asset('assets/images/landing/img-pattern.png')); ?>" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine44.png')); ?>" class="d-block w-100 rounded" alt="...g">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/b.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine2.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/photo.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine3.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine15.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine17.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                            </path>
                        </g>
                    </svg>
                </div>
                <!-- end shape -->
            </section>
            <!-- end hero section -->

            <!-- start client section -->
            <div class="pt-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="text-center mt-5">
                                

                                <!-- Swiper -->
                                <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="<?php echo e(URL::asset('assets/images/mine11.png')); ?>" height="200px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="<?php echo e(URL::asset('assets/images/mine7.png')); ?>" height="200px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="<?php echo e(URL::asset('assets/images/mine8.png')); ?>" height="100px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="<?php echo e(URL::asset('assets/images/mine12.png')); ?>" height="100px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end client section -->

            <section class="section py-5" style="background-color: rgb(15, 7, 71);" id="news">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8 text-center">
                            <h3 class="fw-semibold text-white mb-3">Latest News & Updates</h3>
                            <p class="text-white-50 mb-0">Stay updated with daily news from the Coastal Zone Mining Association.</p>
                        </div>
                    </div>
                    <div class="swiper client-review-swiper rounded">
                        <div class="swiper-wrapper mb-3">
                            <!-- News Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow-sm" style="background: #fff;">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-4">
                                            <img src="<?php echo e(URL::asset('assets/images/gomoa.jpg')); ?>" class="img-fluid rounded-start" alt="News Image 1" style="height: 600px; object-fit: contain; width: 600px;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h2 class="" style="color: rgb(15, 7, 71);">Coastal Zone Mining Association Convenes Emergency Stakeholders Meeting</h2>
                                                <p class="card-text text-muted fs-5">In response to pressing concerns about proposed mining activities in Gomoa, the Coastal Zone Mining Association and zonal executives of the Ghana National Association of Small Scale Miners have called an emergency stakeholders meeting. The goal is to assess the environmental, social, and economic implications of the planned mining zone and promote responsible mining. Key stakeholders including traditional leaders, security officials, and the Minerals Commission are expected to attend.</p>
                                                
                                                <div class="text-end mt-2">
                                                    <small class="text-muted">June 23, 2025</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- News Slide 2 -->
                            <div class="swiper-slide">
                                <div class="card border-0 shadow-sm h-100" style="background: #fff;">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-4">
                                            <img src="<?php echo e(URL::asset('assets/images/galamsey.jpg')); ?>" class="img-fluid rounded-start" alt="News Image 2" style="height: 600px; object-fit:contain; width: 600px;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h2 class="" style="color: rgb(15, 7, 71);">Chiefs and MMDCEs to Lead Fight Against Galamsey – Lands Minister</h2>
                                                <p class="card-text text-muted fs-5">The Minister for Lands and Natural Resources has announced a renewed strategy to combat illegal mining (galamsey) by empowering Chiefs and Metropolitan, Municipal, and District Chief Executives (MMDCEs) to take leadership roles. Speaking at a press conference, the minister emphasized the need for local accountability and community involvement to preserve lands and water bodies affected by unregulated mining activities.</p>
                                                
                                                <div class="text-end mt-2">
                                                    <small class="text-muted">Source: Joy News. June 19th, 2025</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Slider controls -->
                        <div class="swiper-button-next bg-white rounded-circle"></div>
                        <div class="swiper-button-prev bg-white rounded-circle"></div>
                        <div class="swiper-pagination mt-3"></div>
                    </div>
                </div>
            </section>



            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <div class="text-start mb-5">
                                <h1 class="display-6 fw-semibold mb-3 lh-base" style="color: rgb(15, 7, 71);">Our Programs and Initiatives</h1>
                                <p class="text-muted">CZMA small scale mining support programs focus on professionalism mainly on geological investigations,mining ,processing and development of hard rock gold small scale mining operations in designated and demarcated or block out areas.
                                    CZMA strongly believes the road path to Ghana's transition and sustainability of the small scale mining industry depends  mostly on the development of designated areas for hardrock mining operations.It requires knowledge, experience and it is capital intensive investment hence CZMA  has adopted an innovative, integrated and responsible approach to create a model hard rock operations with support from the Gomoa West District Assembly and collaboration with Ghana Geological Survey Authority and the minerals commission to initiate the coastal zone integrated mining support project.</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <img src="<?php echo e(URL::asset('assets/images/mine21.png')); ?>"  height="300px" alt="cadastral">
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Sustainable Mining Solutions</h5>
                                    <p class="text-muted my-3 ff-secondary">Introducing mercury-free techniques to protect the environment.
                                        Supporting miners with equipment, business training, and regulatory compliance.
                                        Conducting community campaigns to advocate for responsible mining.Introducing technology and investment into the tailings processing business for small scale miners.
                                    </p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Community-Led Development</h5>
                                    <p class="text-muted my-3 ff-secondary">Farming a major alternative to mining (maize, potatoes, vegetables,cassava).                                        Empowering women and youth through vocational training and leadership programs.
                                        Promoting entrepreneurship in jewelry making and agro-processing.Creation of water dams for irrigation systems and food security.                                    </p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Environmental Protection and Restoration</h5>
                                    <p class="text-muted my-3 ff-secondary">Rehabilitating degraded mining sites for agriculture or forestry.
                                        Protecting critical ecosystem like rivers and wetlands affected by climate change and illegal mining operations.
                                        Educating communities on the importance of sustainable practices.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Child Protection Programs</h5>
                                    <p class="text-muted my-3 ff-secondary">Combatting child labor through education and community engagement.
                                        Providing scholarships, school supplies, and counseling services.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Equipment Pool and Mining Hubs</h5>
                                    <p class="text-muted my-3 ff-secondary">Establishing shared equipment hub for miners and farmers within the Gomoa West District and beyond.
                                        Setting up processing centers with sustainable technologies.
                                        Introducing a revolving fund to support miners and community projects.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Collaboration with Ausbuild Construction</h5>
                                    <p class="text-muted my-3 ff-secondary">As part of our community led development CZMA has collaborated with Ausbuild construction Ghana limited to support the District development growth agenda in roads construction, health facilities and affordable homes for the poor.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-5">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div style="color: rgb(15, 7, 71);" class="avatar-title bg-transparent rounded-circle">
                                            <i class="ri-stack-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Mitigating Social and Gender Inequalities</h5>
                                    <p class="text-muted my-3 ff-secondary">Women may continue to face barriers in accessing resources, training, and leadership roles in the mining or alternative livelihood sectors. 
                                        The association is looking to implement gender-sensitive programming that addresses women’s specific needs, Provide targeted training, financial assistance, and leadership development programs for women.</p>
                                    <div>
                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        
                    </div>
                    <!-- end row -->
                   
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end services -->

            <!-- start features -->
            <section style="background-color: rgb(15, 7, 71)" class="section py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4 mb-2">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div>
                                <img src="<?php echo e(URL::asset('assets/images/mine2.jpg')); ?>" alt="" class="img-fluid mx-auto img-thumbnail rounded">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted">
                                <div class="avatar-sm icon-effect mb-4">
                                    <div class="avatar-title bg-transparent rounded-circle text-white h1">
                                        <i class="ri-collage-line fs-36"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 fs-20" style="color: rgb(42 160 188)">Our Impact</h3>
                                <p class="mb-4 ff-secondary fs-16 text-white">Case Study Highlights:
                                    <br>
                                    Empowered young women in Gomoa West with vocational training in tailoring, catering, and farming.
                                    Rehabilitated water bodies contaminated by illegal mining, improving local agricultural productivity.
                                    Facilitated the formalization of 300 illegal miners, providing them with access to legal mining opportunities.</p>

                                <div class="row pt-3">
                                    <div class="col-3">
                                        <div class="text-start">
                                            <h4>500+</h4>
                                            <p style="font-size: 11px">Miners trained in sustainable practices by Year 2</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-start">
                                            <h4>80%</h4>
                                            <p style="font-size: 11px">Reduction in mercury use achieved in target communities</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-start">
                                            <h4>5,000+</h4>
                                            <p style="font-size: 11px">Jobs created across mining, agriculture, and value-added sectors by Year 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row align-items-center gy-4">
                        
                        <div class="col-lg-6">
                            <div class="text-muted">

                            <h3 class="mb-3 fs-20" style="color: rgb(42 160 188)">Strategic Collaboration with CC Explorations LLC</h3>

                            <p class="mb-4 ff-secondary fs-16 text-white">
                                <br>
                                <br><br>

                                We are pleased to announce a significant development — a collaborative partnership with an American company based in Arizona: <strong>CC Explorations LLC</strong>. This alliance strengthens our position in the mineral exploration sector and enhances our ability to deliver advanced AMRT (Advanced Mineral Remote-sensing Technology) solutions.<br><br>

                                Mr. Henry Ben-Smith and/or Professor Emmanuel Arhin of the Coastal Zone Mining Association are officially authorized to:
                                <ul>
                                    <li>Market and promote AMRT Technology Services on behalf of CC Explorations LLC.</li>
                                    <li>Engage in discussions and negotiations with potential clients and stakeholders.</li>
                                    <li>Provide accurate technical information about AMRT and associated service offerings.</li>
                                    <li>Collect feedback and facilitate ongoing dialogue to align services with market requirements.</li>
                                </ul>
                                <span class="text-white">This partnership marks a critical step in fostering sustainable and technologically advanced exploration methods across Ghana and beyond.</span> 
                            </p>

                            
                        </div>

                        </div>
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div class="card explore-box card-animate border">
                                <div class="card-body">
                                    
                                    <div class="explore-place-bid-img overflow-hidden rounded">
                                        <iframe width="500" height="600" src="https://www.youtube.com/embed/YGKpy2eUymw" title="Introduction to CC Explorations." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start cta -->
            <section class="py-5 bg-light position-relative">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="mb-0 fw-semibold" style="color: black;">COASTAL ZONE MINING ASSOCIATION ( Gomoa West District)</h4>
                            </div>
                        </div>
                        <!-- end col -->
                        
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- start features -->
            <section class="section">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="text-muted">
                                
                                <h2 class="mb-3">Core Activities</h2>
                                

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="vstack gap-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent rounded-circle h2" style="color: rgb(15, 7, 71);">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Training and Capacity Building</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent rounded-circle h2" style="color: rgb(15, 7, 71);">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Resource Mobilization</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent rounded-circle h2" style="color: rgb(15, 7, 71);">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Community Empowerment</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                            <div>
                                <img src="<?php echo e(URL::asset('assets/images/mine6.jpg')); ?>" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div>
                                <img src="<?php echo e(URL::asset('assets/images/mine17.jpg')); ?>" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted ps-lg-5">
                                <h5 class="fs-12 text-uppercase" style="color: rgb(15, 7, 71);">Coastal Zone Mining Association</h5>
                                <h4 class="mb-3">Training and Capacity Building</h4>
                                <p class="mb-4"> Workshops on mercury-free mining and best practices.
                                    Education on environmental conservation and climate adaptation.</p>

                                
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6">
                            <div class="text-muted ps-lg-5">
                                <h5 class="fs-12 text-uppercase" style="color: rgb(15, 7, 71);">Coastal Zone Mining Association</h5>
                                <h4 class="mb-3">Resource Mobilization</h4>
                                <p class="mb-4"> Partnering with donors, NGOs, and private investors to fund key projects.
                                    Advocating for policy reforms that streamline licensing and regulation.</p>

                                
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div>
                                <img src="<?php echo e(URL::asset('assets/images/mine10.jpg')); ?>" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start plan -->
            
            <!-- end plan -->

            <!-- start features -->
            <section style="background-color: rgb(15, 7, 71)" class="section py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div class="card explore-box card-animate border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        
                                        
                                    </div>
                                    <div class="explore-place-bid-img overflow-hidden rounded">
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/glF9rObAp2A" title="Mining in Ghana: Opportunities for Creating Partnerships." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card explore-box card-animate border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        
                                        
                                    </div>
                                    <div class="explore-place-bid-img overflow-hidden rounded">
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/glF9rObAp2A" title="Mining in Ghana: Opportunities for Creating Partnerships." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted">
                                <!-- Icon Section -->
                                <div class="avatar-sm icon-effect mb-4">
                                    <div class="avatar-title bg-transparent rounded-circle text-white h1">
                                        <i class="ri-collage-line fs-36"></i>
                                    </div>
                                </div>
                        
                                <!-- Title Section -->
                                <h3 class="mb-3 fs-20" style="color: rgb(42 160 188)">Our Agricultural Impact</h3>
                                <p class="mb-4 ff-secondary fs-16 text-white">
                                    By leveraging community mining initiatives, we can:
                                    <ul class="fs-16 text-white">
                                        <li>Improve food access by increasing the availability of nutritious food in local communities.</li>
                                        <li>Develop storage facilities to reduce post-harvest losses and maintain food quality.</li>
                                        <li>Enhance irrigation systems to support agriculture and promote sustainable water management.</li>
                                        <li>Preserve fertile land for future productivity and combat degradation or erosion.</li>
                                        <li>Conserve water sources to ensure availability for agriculture and community use.</li>
                                        <li>Protect ecosystems to sustain biodiversity and agricultural productivity.</li>
                                    </ul>
                                </p>
                        
                                <!-- Key Stats Section -->
                                <div class="row pt-3">
                                    <div class="col-3">
                                        <div class="text-start">
                                            <h4 style="color: rgb(42 160 188)">500+</h4>
                                            <p style="font-size: 11px; color: rgb(42 160 188);">Miners trained in sustainable practices by Year 2</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-start">
                                            <h4 style="color: rgb(42 160 188)">80%</h4>
                                            <p style="font-size: 11px; color: rgb(42 160 188);">Reduction in mercury use achieved in target communities</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-start">
                                            <h4 style="color: rgb(42 160 188)">5,000+</h4>
                                            <p style="font-size: 11px; color: rgb(42 160 188);">Jobs created across mining, agriculture, and value-added sectors by Year 4</p>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Additional Practices Section -->
                                <p class="mt-4 ff-secondary fs-16 text-white">
                                    Sustainable agricultural practices like <strong>Agroforestry</strong>, <strong>Crop rotation</strong>, 
                                    <strong>Organic farming</strong>, and <strong>Soil conservation</strong> further enhance food security 
                                    and ecosystem services, contributing to long-term resilience.
                                </p>
                            </div>
                        </div>
                        
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start faqs -->
            <section class="section" id="questions">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                                <p class="text-muted mb-4 ff-secondary">Here are some Frequently Asked Questions about our association!</p>

                                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold">General Questions</h5>
                                </div>
                            </div>
                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                                id="genques-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseOne" aria-expanded="true"
                                            aria-controls="genques-collapseOne">
                                            What is the Coastal Zone Mining Association (CZMA) ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            CZMA is a non-profit organization promoting 
                                            sustainable small-scale mining practices and community development in Ghana.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                            aria-controls="genques-collapseTwo">
                                            Who can benefit from CZMA programs?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Our programs target small-scale miners, local communities, women, youth, and other stakeholders in Ghana's mining regions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseThree" aria-expanded="false"
                                            aria-controls="genques-collapseThree">
                                            How does CZMA support small-scale miners?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            We provide:
                                            <ul>
                                                <li>Access to modern mining equipment.</li>
                                                <li>Training in sustainable mining practices.</li>
                                                <li>Assistance with obtaining legal mining licenses.</li>
                                            </ul>                             
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseFour" aria-expanded="false"
                                            aria-controls="genques-collapseFour">
                                            What is the Equipment Pool, and how does it work?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            The Equipment Pool is a shared resource hub where miners can rent modern tools and machinery at affordable rates. 
                                            Fees generated from the rentals are reinvested into community projects.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end accordion-->

                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold">More Questions</h5>
                                </div>
                            </div>

                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                                id="privacy-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseOne" aria-expanded="false"
                                            aria-controls="privacy-collapseOne">
                                            How does CZMA promote environmental conservation?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            We focus on:
                                            <ul>
                                                <li>Training miners in eco-friendly practices.</li>
                                                <li>Rehabilitating degraded mining sites.</li>
                                                <li>Preserving wetlands, rivers, and other ecosystems.</li>
                                            </ul>                
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseTwo" aria-expanded="true"
                                            aria-controls="privacy-collapseTwo">
                                            Can individuals or organizations partner with CZMA?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Yes! We welcome partnerships with NGOs, government agencies, and private companies to expand our impact.
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!--end accordion-->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end faqs -->

            <!-- start review -->
            <section class="section" style="background-color: rgb(15, 7, 71);" id="reviews">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <div>
                                    <i class="ri-double-quotes-l text-white display-3"></i>
                                </div>
                                <h4 class="text-white mb-5"><span class="text-white"></span>Success Stories</h4>

                                <!-- Swiper -->
                                <div class="swiper client-review-swiper rounded" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-20 ff-secondary mb-4">"In just two years, CZMA trained over 300 miners in mercury-free mining techniques. This initiative reduced mercury use in small-scale mining operations by 80%, significantly improving the health of miners and local ecosystems. As a result, previously contaminated water bodies were rehabilitated, restoring access to clean water for nearby communities."</p>

                                                        <div>
                                                            <h5 class="text-white">Mercury-Free Mining Success</h5>
                                                            <p>- Transforming Mining in Gomoa West</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-20 ff-secondary mb-4">"CZMA's vocational training programs have empowered over 200 women with skills in tailoring, catering, and jewelry making. These women now run small businesses, earning sustainable incomes and supporting their families. One participant, Akosua Mensah, shared, "This program gave me the tools to become self-reliant. 
                                                            I’m no longer dependent on mining for income.""</p>

                                                        <div>
                                                            <h5 class="text-white">Uplifting Young Women</h5>
                                                            <p> – Women Empowerment Through Vocational Training</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-20 ff-secondary mb-4">"Through land rehabilitation initiatives, CZMA transformed over 50 hectares of degraded mining land into productive farmland. Farmers now grow crops like cassava and maize, 
                                                            boosting local food security and providing alternative income streams."</p>

                                                        <div>
                                                            <h5 class="text-white">Reviving Farmlands</h5>
                                                            <p>– Rehabilitated Mining Sites for Agriculture</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                    </div>
                                    <div class="swiper-button-next bg-white rounded-circle"></div>
                                    <div class="swiper-button-prev bg-white rounded-circle"></div>
                                    <div class="swiper-pagination position-relative mt-2"></div>
                                </div>
                                <!-- end slider -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end review -->

            <!-- start counter -->
            <section class="py-5 position-relative bg-light">
                <div class="container">
                    <div class="row text-center gy-4">
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                                <div class="text-muted">Projects Completed</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                                <div class="text-muted">Win Awards</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                                <div class="text-muted">Satisfied Clients</div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                                <div class="text-muted">Employees</div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end counter -->

            <!-- start Work Process -->
            <section class="section" id="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-start mb-5">
                                <h3 class="mb-3 fw-semibold" style="color: rgb(15, 7, 71);">About Us</h3>
                                <p class="mb-4 ff-secondary"><span class="fw-bold text-primary">Who We Are:</span>  <br>
                                    The Coastal Zone Mining Association (CZMA) is a trailblazing non-profit organization advocating for integrated responsible small scale mining in Ghana.
                                    
                                    <br><br><span class="fw-bold text-primary">What We Do: </span><br>
                                    We work hand in hand with Mainly District Assemblies to ensure that mining activities are conducted responsibly. Through education, advocacy, and capacity building, CZMA is creating a model that respects both the people and planet with due regard to climate change affecting mining and Agriculture and ecosystem in the coastal areas of Ghana.
                                    
                                    <br><br><span class="fw-bold text-primary">Our Reach: </span><br>
                                    Operating primarily in Ghana's Central Region, our projects cover areas like Winneba, Gomoa, and Elmina, with plans to expand across the nation.
                                    
                                    <br><br><span class="fw-bold text-primary">Why We Exist: </span>
                                    <ol>
                                        <li>To transform this subsector of the mining industry into a niche potential investment.</li>
                                        <li>To partner local community banks to provide financial support services to licenced small scale miners within our jurisdiction.</li>
                                        <li>To mitigate the adverse effects of illegal mining (galamsey).</li>
                                        <li>Organising investment fora to attract investment into the small scale mining subsector.</li>
                                        <li>To provide small-scale miners with access to essential resources and training.</li>
                                        <li>To reduce unemployment through alternative livelihoods.</li>
                                        <li>To conserve Ghana’s rich natural resources for future generations.</li>
                                    </ol>         
                                </p>
                                
                                <h3 class="mb-3 fw-semibold" style="color: rgb(15, 7, 71);">Mission</h3>
                                <p class="mb-4 ff-secondary">‘’To become the leading, innovative non – profit organization, offering integrated small scale gold mining solutions, and value – addition initiatives in mining communities for sustainable development.’’</p>

                                <h3 class="mb-3 fw-semibold" style="color: rgb(15, 7, 71);">Vision</h3>
                                <p class="mb-4 ff-secondary">To be a beacon of sustainable development, revolutionizing small-scale gold mining in Ghana by combining innovative practices, environmental conservation, and community empowerment.</p>
                                    
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    
                </div>
                <!-- end container -->
            </section>
            <!-- end Work Process -->

            <!-- start team -->
            <section class="section bg-light" id="team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Our <span style="color: rgb(15, 7, 71);">Team</span></h3>
                                <p class="text-muted mb-4 ff-secondary">Our experienced  team work protrays</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/rita.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="/rita-profile" class="text-body" style="font-size: 15px">Dr Rita Owusu-Amankwah </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Board Chair</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/henry.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="/henry-profile" class="text-body" style="font-size: 15px">Mr. Henry Ben–Smith </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">CEO, CZMA</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/arhin.PNG')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="arhin-profile" class="text-body" style="font-size: 15px">Prof. Emmanuel Arhin</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Head of Research</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/ishmael.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="/ishmael-profile" class="text-body" style="font-size: 15px">Mr. Ishmael Afenyo Adanya </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Executive Secretary & CFO</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/frank.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="frank-profile" class="text-body" style="font-size: 15px">Mr. Frank Dziwornu</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Head of Projects</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/environ.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="joseph-profile" class="text-body" style="font-size: 15px">Dr. Joseph Yaw Appiah-Gyapong </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Environmental Social Specialist</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/amoako.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="amoakoh-profile" class="text-body" style="font-size: 15px">Amoakoh Emmanuel Ochere</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Project Coordinator</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/priscilla.jpg')); ?>" alt="" class="img-fluid rounded">
                                        
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="priscilla-profile" class="text-body" style="font-size: 15px">Miss. Priscilla Obour
                                    </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Women/Programs coordinator</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        
                    </div>
                    <!-- end row -->
                    
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end team -->

            <!-- start contact -->
            <section class="section" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                                <p class="text-muted mb-4 ff-secondary">To learn more about our Association. Reach out to us</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div>
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Address:</h5>
                                    <div class="ff-secondary fw-semibold text-primary">Coastal Zone Mining Association <br/>Seychem House, Plot #47, Bort 111 St. <br>Solo Avenue, New Bortianor, Accra</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-13 text-uppercase">P. O. Box AN12227, Accra-North, Accra, Ghana</h5>
                                    <div class="ff-secondary fw-semibold">Mobile Line: <strong>+233 244211989/+233 273037341</strong><br/><span class="text-muted">Email: <strong>coastalzonemining@gmail.com</strong> </span></div>
                                </div>
                                
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                    <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-8">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1766021393446!2d-0.3497741!3d5.5408102999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdfbd73312f2317%3A0xc7b9629058416bd8!2sSEYCHEM!5e0!3m2!1sen!2sgh!4v1740251494825!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end contact -->

            <!-- start cta -->
            <section class="py-5 position-relative" style="background-color: rgb(15, 7, 71);">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="text-white mb-0 fw-semibold">Keep In Touch with Us</h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-auto">
                            <div>
                                <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Call Now</a>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- Start footer -->
            <footer class="custom-footer bg-dark py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <div>
                                <div>
                                    <img src="<?php echo e(URL::asset('assets/images/coastal-logo.png')); ?>" alt="logo light" height="80px" width="80px">
                                    
                                </div>
                                <div class= mt-4 fs-13">
                                    <p>Transforming Small-Scale Mining</p>
                                    <p class="ff-secondary">Small scale miners and their communities in the coastal designated areas</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 ms-lg-auto">
                            <div class="row">
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-warning mb-0">Coastal Zone Mining Association<div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="#reviews">About Us</a></li>
                                           
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Our Pages</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="gallery">Gallery</a></li>
                                            <li><a href="#services">Services</a></li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Support</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="#questions">FAQ</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row text-center text-sm-start align-items-center mt-5">
                        <div class="col-sm-6">

                            <div>
                                <p class="copy-rights mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Optocodes Innovations
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-3 mt-sm-0">
                                <ul class="list-inline mb-0 footer-social-link">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-github-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-linkedin-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-google-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

        </div>
        <!-- end layout wrapper -->


        


    </body>


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
        <script>
            var typed = new Typed('#typed-text', {
                strings: ["Path to Sustainability and Prosperity"],
                typeSpeed: 100, // Speed in milliseconds for typing each character
                backSpeed: 100, // Speed in milliseconds for deleting each character
                backDelay: 1500, // Time before backspacing starts
                startDelay: 500, // Delay before typing starts initially
                loop: true, // Loop the text
                smartBackspace: false // Ensures all strings get typed without skipping identical parts
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coastalapp\resources\views/coastal-association.blade.php ENDPATH**/ ?>