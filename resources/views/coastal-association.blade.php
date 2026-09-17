@extends('layouts.master-without-nav')
@section('title') CZMA @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('body')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@endsection
@section('content')
    {{-- @component('components.breadcrumb')
        @slot('li_1') Icons @endslot
        @slot('title') Landing @endslot
    @endcomponent --}}
    <style>
        .bg-content2 {
            background-color: rgb(77, 4, 4);
        }

        /* =========================================
        CZMA MODERN NEWS SECTION
        ========================================= */

        .czma-news-section {
            position: relative;
            overflow: hidden;
            padding: 100px 0;
            background: #0f0747;
        }

        .czma-news-bg {
            position: absolute;
            inset: 0;
            opacity: .08;
            background-image:
                radial-gradient(circle at 20% 20%, #d5a928 0, transparent 30%),
                radial-gradient(circle at 90% 80%, #ffffff 0, transparent 25%);
        }

        .czma-section-label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            color: #d5a928;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .czma-section-label span {
            width: 35px;
            height: 2px;
            background: #d5a928;
        }

        .czma-news-title {
            margin: 0;
            color: #fff;
            font-size: clamp(34px, 4vw, 52px);
            font-weight: 800;
            line-height: 1.08;
        }

        .czma-news-title span {
            color: #d5a928;
        }

        .czma-news-subtitle {
            max-width: 650px;
            margin-top: 20px;
            color: rgba(255,255,255,.65);
            font-size: 17px;
            line-height: 1.7;
        }


        /* NAVIGATION */

        .czma-news-nav {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .czma-news-nav button {
            width: 48px;
            height: 48px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 50%;
            background: rgba(255,255,255,.08);
            color: #fff;
            font-size: 20px;
            transition: all .3s ease;
        }

        .czma-news-nav button:hover {
            background: #d5a928;
            border-color: #d5a928;
            color: #0f0747;
        }


        /* FEATURED STORY */

        .czma-featured-news {
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 25px 70px rgba(0,0,0,.25);
        }

        .czma-featured-image {
            position: relative;
            height: 100%;
            min-height: 480px;
            overflow: hidden;
        }

        .czma-featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s ease;
        }

        .czma-featured-news:hover .czma-featured-image img {
            transform: scale(1.04);
        }

        .czma-image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to top,
                rgba(15,7,71,.55),
                transparent 45%
            );
        }

        .czma-date-badge {
            position: absolute;
            top: 25px;
            left: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 12px;
            background: rgba(255,255,255,.95);
            color: #0f0747;
            box-shadow: 0 10px 25px rgba(0,0,0,.15);
        }

        .czma-date-badge span {
            font-size: 28px;
            font-weight: 800;
            line-height: 1;
        }

        .czma-date-badge small {
            font-size: 10px;
            font-weight: 700;
            line-height: 1.1;
        }

        .czma-featured-tag {
            position: absolute;
            bottom: 25px;
            left: 25px;
            padding: 7px 12px;
            border-radius: 30px;
            background: #d5a928;
            color: #0f0747;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .czma-featured-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: 50px;
        }

        .czma-story-meta {
            margin-bottom: 15px;
            color: #a58117;
            font-size: 13px;
            font-weight: 700;
        }

        .czma-story-meta i {
            margin-right: 5px;
        }

        .czma-featured-content h3 {
            margin-bottom: 20px;
            color: #0f0747;
            font-size: clamp(27px, 3vw, 38px);
            font-weight: 800;
            line-height: 1.15;
        }

        .czma-featured-content p {
            margin-bottom: 12px;
            color: #69707d;
            font-size: 15px;
            line-height: 1.75;
        }

        .czma-read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            margin-top: 18px;
            color: #0f0747;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
        }

        .czma-read-more i {
            transition: transform .3s ease;
        }

        .czma-read-more:hover {
            color: #d5a928;
        }

        .czma-read-more:hover i {
            transform: translateX(5px);
        }


        /* NORMAL NEWS CARDS */

        .czma-news-card {
            height: 100%;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 20px;
            background: #fff;
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .czma-news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,.25);
        }

        .czma-card-image {
            position: relative;
            height: 245px;
            overflow: hidden;
        }

        .czma-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .czma-news-card:hover .czma-card-image img {
            transform: scale(1.06);
        }

        .czma-card-category {
            position: absolute;
            top: 18px;
            left: 18px;
            padding: 6px 10px;
            border-radius: 30px;
            background: #d5a928;
            color: #0f0747;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
        }

        .czma-card-content {
            padding: 25px;
        }

        .czma-card-date {
            margin-bottom: 12px;
            color: #a58117;
            font-size: 12px;
            font-weight: 700;
        }

        .czma-card-date i {
            margin-right: 4px;
        }

        .czma-card-content h3 {
            display: -webkit-box;
            overflow: hidden;
            margin-bottom: 13px;
            color: #0f0747;
            font-size: 20px;
            font-weight: 750;
            line-height: 1.35;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .czma-card-content p {
            display: -webkit-box;
            overflow: hidden;
            margin-bottom: 20px;
            color: #727985;
            font-size: 14px;
            line-height: 1.65;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .czma-card-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #0f0747;
            font-size: 13px;
            font-weight: 800;
            text-decoration: none;
        }

        .czma-card-link:hover {
            color: #d5a928;
        }


        /* PAGINATION */

        .czma-news-pagination {
            position: relative !important;
            margin-top: 35px;
        }

        .czma-news-pagination .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            background: rgba(255,255,255,.4);
            opacity: 1;
        }

        .czma-news-pagination .swiper-pagination-bullet-active {
            width: 28px;
            border-radius: 10px;
            background: #d5a928;
        }


        /* MOBILE */

        @media (max-width: 991px) {

            .czma-news-section {
                padding: 70px 0;
            }

            .czma-featured-image {
                min-height: 350px;
            }

            .czma-featured-content {
                padding: 35px;
            }

            .czma-news-nav {
                justify-content: flex-start;
            }

        }

        @media (max-width: 575px) {

            .czma-news-section {
                padding: 55px 0;
            }

            .czma-featured-content {
                padding: 28px;
            }

            .czma-featured-content h3 {
                font-size: 26px;
            }

            .czma-card-image {
                height: 220px;
            }

        }

        /* =========================================================
   CZMA MODERN NEWS SECTION
========================================================= */

.czma-news-section {
    position: relative;
    overflow: hidden;
    padding: 100px 0;
    background: #0f0747;
}

.czma-news-bg {
    position: absolute;
    inset: 0;
    opacity: .08;

    background-image:
        radial-gradient(
            circle at 15% 20%,
            #d5a928 0,
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 80%,
            #ffffff 0,
            transparent 28%
        );
}


/* =========================================================
   SECTION HEADER
========================================================= */

.czma-section-label {
    display: flex;
    align-items: center;
    gap: 10px;

    margin-bottom: 15px;

    color: #d5a928;

    font-size: 13px;
    font-weight: 700;

    letter-spacing: 2px;
}

.czma-section-label span {
    width: 35px;
    height: 2px;

    background: #d5a928;
}


.czma-news-title {
    margin: 0;

    color: #ffffff;

    font-size: clamp(34px, 4vw, 52px);
    font-weight: 800;

    line-height: 1.08;
}

.czma-news-title span {
    color: #d5a928;
}


.czma-news-subtitle {
    max-width: 650px;

    margin-top: 20px;
    margin-bottom: 0;

    color: rgba(255,255,255,.65);

    font-size: 17px;
    line-height: 1.7;
}


/* =========================================================
   NAVIGATION BUTTONS
========================================================= */

.czma-news-nav {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.czma-news-nav button {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 48px;
    height: 48px;

    border: 1px solid rgba(255,255,255,.2);
    border-radius: 50%;

    background: rgba(255,255,255,.08);

    color: #ffffff;

    font-size: 20px;

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease;
}

.czma-news-nav button:hover {
    background: #d5a928;
    border-color: #d5a928;

    color: #0f0747;

    transform: translateY(-2px);
}


/* =========================================================
   NEWS CARD
========================================================= */

.czma-news-card {
    height: 100%;

    overflow: hidden;

    border: 1px solid rgba(255,255,255,.08);
    border-radius: 22px;

    background: #ffffff;

    box-shadow:
        0 15px 45px rgba(0,0,0,.16);

    transition:
        transform .35s ease,
        box-shadow .35s ease;
}

.czma-news-card:hover {
    transform: translateY(-8px);

    box-shadow:
        0 25px 60px rgba(0,0,0,.25);
}


/* =========================================================
   CARD IMAGE
========================================================= */

.czma-card-image {
    position: relative;

    height: 250px;

    overflow: hidden;

    background: #eeeeee;
}

.czma-card-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition:
        transform .6s ease;
}

.czma-news-card:hover .czma-card-image img {
    transform: scale(1.07);
}


.czma-card-image-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            to bottom,
            rgba(15,7,71,.05),
            rgba(15,7,71,.35)
        );
}


/* =========================================================
   CATEGORY
========================================================= */

.czma-card-category {
    position: absolute;

    top: 18px;
    left: 18px;

    display: inline-flex;

    padding: 7px 12px;

    border-radius: 30px;

    background: #d5a928;

    color: #0f0747;

    font-size: 10px;
    font-weight: 800;

    letter-spacing: 1px;

    box-shadow:
        0 5px 15px rgba(0,0,0,.15);
}


/* =========================================================
   CARD CONTENT
========================================================= */

.czma-card-content {
    display: flex;
    flex-direction: column;

    min-height: 310px;

    padding: 27px;
}


.czma-card-date {
    display: flex;
    align-items: center;
    gap: 5px;

    margin-bottom: 12px;

    color: #a58117;

    font-size: 12px;
    font-weight: 700;
}

.czma-card-date i {
    font-size: 15px;
}


.czma-card-content h3 {
    display: -webkit-box;

    overflow: hidden;

    margin-bottom: 13px;

    color: #0f0747;

    font-size: 20px;
    font-weight: 750;

    line-height: 1.35;

    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}


.czma-card-content p {
    display: -webkit-box;

    overflow: hidden;

    margin-bottom: 20px;

    color: #727985;

    font-size: 14px;

    line-height: 1.7;

    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}


/* =========================================================
   READ ARTICLE BUTTON
========================================================= */

.czma-card-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    width: fit-content;

    margin-top: auto;

    padding: 0;

    border: 0;

    background: transparent;

    color: #0f0747;

    font-size: 13px;
    font-weight: 800;

    cursor: pointer;

    text-decoration: none;

    transition:
        color .3s ease;
}

.czma-card-link i {
    font-size: 16px;

    transition:
        transform .3s ease;
}

.czma-card-link:hover {
    color: #d5a928;
}

.czma-card-link:hover i {
    transform: translate(3px, -3px);
}


/* =========================================================
   SWIPER
========================================================= */

.czmaNewsSwiper {
    padding: 10px 5px 55px;
}

.czmaNewsSwiper .swiper-slide {
    height: auto;
}


.czma-news-pagination {
    bottom: 0 !important;
}

.czma-news-pagination .swiper-pagination-bullet {
    width: 8px;
    height: 8px;

    opacity: 1;

    background: rgba(255,255,255,.35);

    transition:
        width .3s ease;
}

.czma-news-pagination .swiper-pagination-bullet-active {
    width: 28px;

    border-radius: 10px;

    background: #d5a928;
}


/* =========================================================
   ARTICLE MODAL
========================================================= */

.czma-news-modal .modal-dialog {
    max-width: 1050px;

    margin-top: 20px;
    margin-bottom: 20px;
}


.czma-news-modal .modal-content {
    position: relative;

    overflow: hidden;

    border: 0;

    border-radius: 24px;

    background: #ffffff;

    box-shadow:
        0 30px 100px rgba(0,0,0,.35);
}


/* =========================================================
   MODAL CLOSE BUTTON
========================================================= */

.czma-modal-close {
    position: absolute;

    z-index: 20;

    top: 20px;
    right: 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 46px;
    height: 46px;

    border: 0;

    border-radius: 50%;

    background: rgba(255,255,255,.96);

    color: #0f0747;

    font-size: 22px;

    box-shadow:
        0 5px 20px rgba(0,0,0,.18);

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease;
}

.czma-modal-close:hover {
    background: #d5a928;

    color: #0f0747;

    transform: rotate(90deg);
}


/* =========================================================
   ARTICLE HEADER
========================================================= */

.czma-article-header {
    padding: 55px 80px 35px;
}


.czma-article-category {
    display: inline-flex;

    padding: 7px 13px;

    margin-bottom: 18px;

    border-radius: 30px;

    background: rgba(213,169,40,.12);

    color: #a58117;

    font-size: 11px;
    font-weight: 800;

    letter-spacing: 1px;
}


.czma-article-meta {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

    gap: 20px;

    margin-bottom: 15px;

    color: #7b818d;

    font-size: 13px;
}


.czma-article-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}


.czma-article-meta i {
    color: #d5a928;
    font-size: 15px;
}


.czma-article-header h2 {
    max-width: 900px;

    margin: 0;

    color: #0f0747;

    font-size: clamp(30px, 4vw, 48px);

    font-weight: 800;

    line-height: 1.12;
}


/* =========================================================
   ARTICLE IMAGE
========================================================= */

.czma-article-image {
    width: 100%;

    height: 450px;

    overflow: hidden;

    background: #eeeeee;
}


.czma-article-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;
}


/* =========================================================
   ARTICLE BODY
========================================================= */

.czma-article-body {
    max-width: 850px;

    margin: auto;

    padding: 45px 40px 60px;
}


.czma-article-body p {
    margin-bottom: 23px;

    color: #535b68;

    font-size: 16px;

    line-height: 1.9;
}


.czma-article-body strong {
    color: #0f0747;
}


/* =========================================================
   ARTICLE SOURCE
========================================================= */

.czma-article-source {
    display: flex;
    align-items: flex-start;

    gap: 12px;

    margin-top: 35px;

    padding: 18px 20px;

    border-left: 3px solid #d5a928;

    background: #f8f8fa;

    color: #6b7280;

    font-size: 13px;

    line-height: 1.6;
}


.czma-article-source i {
    flex-shrink: 0;

    color: #d5a928;

    font-size: 20px;
}


/* =========================================================
   MODAL BACKDROP
========================================================= */

.czma-news-modal.show {
    background: rgba(15,7,71,.65);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .czma-news-section {
        padding: 75px 0;
    }

    .czma-news-nav {
        justify-content: flex-start;
    }

    .czma-card-image {
        height: 230px;
    }

    .czma-article-header {
        padding: 45px 45px 30px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .czma-news-section {
        padding: 60px 0;
    }

    .czma-news-title {
        font-size: 34px;
    }

    .czma-news-subtitle {
        font-size: 15px;
    }

    .czma-news-nav button {
        width: 44px;
        height: 44px;
    }

    .czma-card-image {
        height: 220px;
    }

    .czma-card-content {
        min-height: 290px;
        padding: 23px;
    }


    /* MODAL */

    .czma-news-modal .modal-dialog {
        margin: 8px;
    }

    .czma-news-modal .modal-content {
        border-radius: 18px;
    }

    .czma-modal-close {
        top: 12px;
        right: 12px;

        width: 40px;
        height: 40px;
    }

    .czma-article-header {
        padding: 45px 25px 25px;
    }

    .czma-article-header h2 {
        font-size: 28px;
    }

    .czma-article-meta {
        gap: 10px;
    }

    .czma-article-image {
        height: 280px;
    }

    .czma-article-body {
        padding: 30px 25px 45px;
    }

    .czma-article-body p {
        font-size: 15px;
        line-height: 1.8;
    }

}

        /* =========================================
        CZMA ARTICLE MODAL
        ========================================= */

        .czma-news-modal .modal-dialog {
            max-width: 1050px;
        }

        .czma-news-modal .modal-content {
            overflow: hidden;
            border: 0;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 30px 100px rgba(0, 0, 0, .35);
        }


        /* CLOSE BUTTON */

        .czma-modal-close {
            position: absolute;
            z-index: 20;
            top: 20px;
            right: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            width: 45px;
            height: 45px;

            border: 0;
            border-radius: 50%;

            background: rgba(255,255,255,.95);
            color: #0f0747;

            font-size: 22px;

            box-shadow: 0 5px 20px rgba(0,0,0,.15);

            transition: all .3s ease;
        }

        .czma-modal-close:hover {
            background: #d5a928;
            transform: rotate(90deg);
        }


        /* ARTICLE HEADER */

        .czma-article-header {
            padding: 55px 80px 35px;
        }

        .czma-article-category {
            display: inline-flex;

            padding: 7px 13px;

            margin-bottom: 18px;

            border-radius: 30px;

            background: rgba(213,169,40,.12);
            color: #a58117;

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .czma-article-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;

            margin-bottom: 15px;

            color: #7b818d;
            font-size: 13px;
        }

        .czma-article-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .czma-article-meta i {
            color: #d5a928;
        }

        .czma-article-header h2 {
            max-width: 850px;

            margin: 0;

            color: #0f0747;

            font-size: clamp(30px, 4vw, 48px);
            font-weight: 800;
            line-height: 1.12;
        }


        /* ARTICLE IMAGE */

        .czma-article-image {
            width: 100%;
            height: 450px;
            overflow: hidden;
        }

        .czma-article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        /* ARTICLE BODY */

        .czma-article-body {
            max-width: 850px;

            margin: auto;

            padding: 45px 40px 60px;
        }

        .czma-article-body p {
            margin-bottom: 22px;

            color: #535b68;

            font-size: 16px;
            line-height: 1.9;
        }

        .czma-article-body strong {
            color: #0f0747;
        }


        /* SOURCE */

        .czma-article-source {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-top: 35px;
            padding: 18px 20px;

            border-left: 3px solid #d5a928;

            background: #f8f8fa;

            color: #6b7280;

            font-size: 13px;
        }

        .czma-article-source i {
            color: #d5a928;
            font-size: 20px;
        }


        /* MOBILE */

        @media (max-width: 767px) {

            .czma-news-modal .modal-dialog {
                margin: 10px;
            }

            .czma-news-modal .modal-content {
                border-radius: 18px;
            }

            .czma-article-header {
                padding: 40px 25px 25px;
            }

            .czma-article-header h2 {
                font-size: 28px;
            }

            .czma-article-image {
                height: 280px;
            }

            .czma-article-body {
                padding: 30px 25px 45px;
            }

            .czma-article-body p {
                font-size: 15px;
                line-height: 1.8;
            }

        }
    </style>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">

        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" class="card-logo card-logo-dark rounded" width="150px" height="100px" alt="logo dark" height="17">
                        <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" class="card-logo card-logo-light rounded" width="150px" height="100px" alt="logo light"
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

                        {{-- <div class="">
                            <a href="auth-signin-basic" class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                                in</a>
                            <a href="auth-signup-basic" class="btn btn-primary">Sign Up</a>
                        </div> --}}
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
                                <p class="lead lh-base" style="color: rgb(235, 240, 241)">{{-- Driving environmental stewardship, community development, and sustainable livelihoods for small-scale miners and their communities. --}}Small scale miners and their communities in the coastal designated areas.
                                </p>
                                <br>
                                <br>


                                
                                {{-- <div class="d-flex gap-2 justify-content-center mt-4">
                                    <a href="auth-signup-basic" class="btn btn-primary">Get Started <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    <a href="pages-pricing" class="btn btn-danger">View Plans <i class="ri-eye-line align-middle ms-1"></i></a>
                                </div> --}}
                            </div>

                            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                <div class="demo-img-patten-top d-none d-sm-block">
                                    <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="demo-img-patten-bottom d-none d-sm-block">
                                    <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/image1.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine44.png') }}" class="d-block w-100 rounded" alt="...g">
                                        </div>
     
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/image4.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/image3.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine2.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/photo.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/image5.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine3.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine15.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine17.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/mine6.jpg') }}" class="d-block w-100" alt="...">
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
                                                <img src="{{ URL::asset('assets/images/mine11.png') }}" height="200px" alt="client-img"
                                              f      class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="{{ URL::asset('assets/images/mine7.png') }}" height="200px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="{{ URL::asset('assets/images/mine8.png') }}" height="100px" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" alt="client-img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        {{-- <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/shopify.svg') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div> --}}
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img src="{{ URL::asset('assets/images/mine12.png') }}" height="100px" alt="client-img"
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

            @php

                $news = [

                    // =====================================================
                    // NEWS 1
                    // =====================================================
                    // =====================================================
                    // NEWS 1 — CZMA PRESENTATION TO MLNR
                    // =====================================================
                    [
                        'id' => 1,
                        'featured' => true,
                        'category' => 'CZMA Update',
                        'date' => 'May 28, 2026',
                        'location' => 'Ministry of Lands and Natural Resources, Ghana',
                        'image' => 'yellow1.jpeg',

                        'title' => 'CZMA Presents Sustainable Mining Agenda to Ministry of Lands and Natural Resources',

                        'excerpt' => 'The Coastal Zone Mining Association presented its Coastal Zone Integrated Mining Project and sustainable mining agenda to the Ministry of Lands and Natural Resources, outlining proposals for responsible, environmentally sustainable and more productive artisanal and small-scale mining.',

                        'content' => [

                            'The Coastal Zone Mining Association (CZMA) presented its Coastal Zone Integrated Mining Project to the Ministry of Lands and Natural Resources on 28 May 2026. The presentation focused on responsible and sustainable transformation of Ghana’s artisanal and small-scale mining (ASM) sector.',

                            'The presentation highlighted key challenges affecting current ASM operations, including environmental and health concerns associated with mercury and sodium cyanide, low gold recovery, resource losses in tailings, and challenges relating to formalization, traceability and revenue leakage.',

                            'CZMA outlined its Sustainable Mining Agenda, which includes reducing and eventually eliminating the use of mercury and sodium cyanide, introducing affordable modern mining and mineral-processing equipment, strengthening geological investigations, and establishing Model Mining Zones to demonstrate responsible mining practices.',

                            'The Association also proposed the integration of tailings-processing facilities, formalization of ASM cooperatives, community awareness and participation programmes, and education, training and certification initiatives for ASM operators.',

                            'The presentation further introduced eco-friendly mineral-processing solutions, including Eco-Goldex products and Seychem CFX100, alongside modern Carbon-in-Pulp (CIP) processing systems. The proposed approach is intended to support cleaner mineral recovery, improve gold recovery efficiency, reduce environmental impacts, and contribute to the formalization of the ASM sector.',

                            'CZMA concluded by proposing government support for the demonstration of environmentally sustainable mining and mineral-processing technologies within Ghana’s ASM sector, as part of efforts to advance responsible mineral recovery and sustainable small-scale mining.'

                        ],

                        'source' => 'Coastal Zone Mining Association Presentation to the Ministry of Lands and Natural Resources | May 28, 2026'
                    ],
                    [
                        'id' => 11,
                        'featured' => true,
                        'category' => 'Investment',
                        'date' => 'May 12, 2026',
                        'location' => 'New York, USA',
                        'image' => 'news99.jpg',

                        'title' => 'Ghana Showcases Mining Investment Opportunities at UNFF21 Forum in New York',

                        'excerpt' => 'The Minister for Lands and Natural Resources, Hon. Emmanuel Armah-Kofi Buah, engaged global mining firms and international investors during an Investors’ Forum held in New York.',

                        'content' => [

                            'The Minister for Lands and Natural Resources, Hon. Emmanuel Armah-Kofi Buah, engaged global mining firms and international investors during an Investors’ Forum held in New York on May 12, 2026, on the sidelines of the 21st Session of the United Nations Forum on Forests (UNFF21).',

                            'During the forum, the Minister presented Ghana’s “Reset Agenda”, aimed at positioning the country as Africa’s most attractive and competitive mining investment destination. He highlighted Ghana’s political stability, investor-friendly environment, and abundant mineral resources including gold, lithium, bauxite, manganese, iron ore, cobalt, and nickel.',

                            'Hon. Buah also outlined key government reforms designed to improve the investment climate, including tax reductions, removal of VAT on exploration activities, and measures to streamline regulations and enhance transparency within the mining sector.',

                            'The Minister reaffirmed Ghana’s commitment to sustainable and responsible mining practices, while inviting ethical investors to partner with the country in developing a modern and sustainable mining economy.'

                        ],

                        'source' => 'UNFF21 Investors’ Forum – New York, USA | May 2026'
                    ],


                    // =====================================================
                    // NEWS 2
                    // =====================================================
                    [
                        'id' => 2,
                        'featured' => false,
                        'category' => 'Partnership',
                        'date' => 'March 2026',
                        'location' => 'Toronto, Canada',
                        'image' => 'news1.jpeg',

                        'title' => 'Strategic Partnership Discussions Held at PDAC Mining Convention in Toronto',

                        'excerpt' => 'During the recent global mining conference held in Toronto, representatives of CZMA / H & S Mining Group and Investment Ltd engaged in productive discussions with Eco Goldex Canada.',

                        'content' => [

                            'During the recent global mining conference held in Toronto, Canada, representatives of CZMA / H & S Mining Group and Investment Ltd engaged in productive discussions with officials of Eco Goldex Canada at the prestigious PDAC mining convention.',

                            'As part of ongoing strategic collaboration, Eco Goldex Canada has granted CZMA / H & S Mining Group and Investment Ltd the exclusive rights to distribute its technologies and services within Ghana and Côte d’Ivoire (Ivory Coast). This partnership is expected to strengthen environmentally responsible gold extraction practices within the region.',

                            'The meeting, which took place on the sidelines of the convention, provided an opportunity for both organizations to reaffirm their commitment to introducing innovative and sustainable mining solutions across West Africa.',

                            'A photo from the event captures a representative of the project together with a colleague at the conference venue, highlighting the growing international collaboration supporting the initiative.'

                        ],

                        'source' => 'PDAC Convention – Toronto, Canada | March 2026'
                    ],


                    // =====================================================
                    // NEWS 3
                    // =====================================================
                    [
                        'id' => 3,
                        'featured' => false,
                        'category' => 'Project Update',
                        'date' => 'January 29, 2026',
                        'location' => 'Coastal Zone, Ghana',
                        'image' => 'cso6.jpeg',

                        'title' => 'GoldBod Technical Team Visits Coastal Zone Mining Integrated Support Project',

                        'excerpt' => 'A four-member GoldBod Technical Team paid a working visit to the Coastal Zone Mining Integrated Support Project to explore potential areas of collaboration and support.',

                        'content' => [

                            'A four-member GoldBod Technical Team paid a working visit to the Coastal Zone Mining Integrated Support Project on Thursday, 29th January 2026. The visit formed part of a familiarization and engagement exercise to explore potential areas of collaboration and support for the proposed project.',

                            'The team, led by Dr. Andrew, together with executives of the project, paid a courtesy call on the Omanhene and Paramount Chief of the Gomoa Ajumako Traditional Council. Discussions focused on how the project could be supported by GoldBod to promote responsible and sustainable mining practices within the coastal zone.',

                            'The Project Leader, Henry Ben-Smith, formally introduced the GoldBod Technical Team to the Paramount Chief, Obrempon Nyaful Krampah XI, highlighting the vision, objectives, and anticipated community benefits of the project.'

                        ],

                        'source' => 'Coastal Zone Mining Integrated Support Project | January 29, 2026'
                    ],


                    // =====================================================
                    // NEWS 4
                    // =====================================================
                    [
                        'id' => 4,
                        'featured' => false,
                        'category' => 'Stakeholders',
                        'date' => 'September 17, 2025',
                        'location' => 'Jubilee House, Accra',
                        'image' => 'cso.jpg',

                        'title' => 'President Convened CSOs to Discuss Illegal Mining in Ghana',

                        'excerpt' => 'The President convened a crucial meeting with Civil Society Organizations to deliberate on the pressing challenges of illegal mining across the country.',

                        'content' => [

                            'The President convened a crucial meeting with Civil Society Organizations (CSOs) to deliberate on the pressing challenges of illegal mining across the country.',

                            'The engagement sought to foster stronger collaboration between government and civic bodies in developing sustainable solutions to protect Ghana’s environment and mineral resources.',

                            'The meeting took place on 17th September 2025 at the Jubilee House, bringing together key stakeholders from various sectors for an open dialogue on responsible mining and national development.'

                        ],

                        'source' => 'Jubilee House, Accra | September 17, 2025'
                    ],


                    // =====================================================
                    // NEWS 5
                    // =====================================================
                    [
                        'id' => 5,
                        'featured' => false,
                        'category' => 'Community',
                        'date' => 'June 23, 2025',
                        'location' => 'Gomoa, Ghana',
                        'image' => 'gomoa.jpg',

                        'title' => 'Coastal Zone Mining Association Convenes Emergency Stakeholders Meeting',

                        'excerpt' => 'The Coastal Zone Mining Association and zonal executives of the Ghana National Association of Small Scale Miners called an emergency stakeholders meeting in response to concerns about proposed mining activities in Gomoa.',

                        'content' => [

                            'In response to pressing concerns about proposed mining activities in Gomoa, the Coastal Zone Mining Association and zonal executives of the Ghana National Association of Small Scale Miners have called an emergency stakeholders meeting.',

                            'The goal is to assess the environmental, social, and economic implications of the planned mining zone and promote responsible mining.',

                            'Key stakeholders including traditional leaders, security officials, and the Minerals Commission are expected to attend.'

                        ],

                        'source' => 'Coastal Zone Mining Association | June 23, 2025'
                    ],


                    // =====================================================
                    // NEWS 6
                    // =====================================================
                    [
                        'id' => 6,
                        'featured' => false,
                        'category' => 'Development',
                        'date' => 'August 5, 2025',
                        'location' => 'Accra, Ghana',
                        'image' => 'image8.jpg',

                        'title' => 'Review Committee Meets on Cooperative Mining & Skills Development Programme',

                        'excerpt' => 'The Ministry of Lands and Natural Resources convened a high-level review committee meeting in Accra to discuss the Responsible Cooperative Mining and Skills Development Programme.',

                        'content' => [

                            'The Ministry of Lands and Natural Resources has convened a high-level review committee meeting in Accra to discuss the Responsible Cooperative Mining and Skills Development Programme.',

                            'The initiative seeks to promote sustainable mining practices while equipping small-scale miners with technical skills and capacity-building opportunities.',

                            'Stakeholders from government, industry, and mining associations participated in the discussions to ensure the programme’s success and long-term impact on Ghana’s mining sector.'

                        ],

                        'source' => 'Ministry of Lands and Natural Resources | August 5, 2025'
                    ],


                    // =====================================================
                    // NEWS 7
                    // =====================================================
                    [
                        'id' => 7,
                        'featured' => false,
                        'category' => 'Agreement',
                        'date' => 'June 9, 2025',
                        'location' => 'Ghana',
                        'image' => 'image3.jpg',

                        'title' => 'Memorandum of Understanding (MoU) Signed',

                        'excerpt' => 'A Memorandum of Understanding has been signed between Seychem Limited–Coastal Zone Mining Association Alliance and the Minerals Development Fund.',

                        'content' => [

                            'A Memorandum of Understanding (MoU) has been signed between Seychem Limited–Coastal Zone Mining Association Alliance and the Minerals Development Fund.',

                            'This agreement, made on June 9th, 2025, seeks to strengthen collaboration in sustainable mineral development, community support, and the responsible management of mining resources.'

                        ],

                        'source' => 'CZMA | June 9th, 2025'
                    ],


                    // =====================================================
                    // NEWS 8
                    // =====================================================
                    [
                        'id' => 8,
                        'featured' => false,
                        'category' => 'Partnership',
                        'date' => 'August 4, 2025',
                        'location' => 'Seychem House, Ghana',
                        'image' => 'mou.jpg',

                        'title' => 'CZMA / Seychem Ltd Signs MoU with Ghana National Association of Small Scale Miners',

                        'excerpt' => 'CZMA and Seychem Ltd entered into a strategic partnership with the Ghana National Association of Small Scale Miners to promote responsible and sustainable small-scale mining practices.',

                        'content' => [

                            'On August 4th, 2025, Coastal Zone Minerals Alliance (CZMA) and Seychem Ltd entered into a strategic partnership with the Ghana National Association of Small Scale Miners (GNASSM).',

                            'This landmark Memorandum of Understanding (MoU) establishes collaboration to promote responsible and sustainable small-scale mining practices across the country.',

                            'The signing ceremony took place at Seychem House, the official office building of the alliance, symbolizing a united front to improve regulation, environmental protection, and community engagement within the artisanal and small-scale mining sector.'

                        ],

                        'source' => 'CZMA Communications | August 4th, 2025'
                    ],


                    // =====================================================
                    // NEWS 9
                    // =====================================================
                    [
                        'id' => 9,
                        'featured' => false,
                        'category' => 'Policy',
                        'date' => 'August 19, 2025',
                        'location' => 'Diamond House, Accra',
                        'image' => 'image9.png',

                        'title' => 'GNASSM Meets UK-Ghana Gold Programme on ASGM Royalty Payment',

                        'excerpt' => 'The Ghana National Association of Small Scale Miners met with a team from the UK-Ghana Gold Programme to deliberate on the ASGM Royalty Payment Questionnaire.',

                        'content' => [

                            'On Tuesday, August 19, 2025, the Ghana National Association of Small Scale Miners (GNASSM) met with a team from the UK-Ghana Gold Programme (UKGGP) at the Diamond House, Accra, to deliberate on the ASGM Royalty Payment Questionnaire aimed at consolidating ASGM formalization and legitimacy.',

                            'The UK-Ghana Gold Programme (UKGGP) is a collaborative initiative between the UK and Ghana that seeks to combat illegal gold mining while promoting the formalization of the artisanal and small-scale gold mining (ASGM) sector.',

                            'Team UKGGP was represented by Dr. Steve Manteaw and Kwame Tsum Adabor, while Team GNASSM included General Secretary Godwin Amarh, Razak Alhassan, Mrs. Victoria Adobea Guerrieri, Henry Ben Smith, and Nii Adjetey Kofi Mensah.'

                        ],

                        'source' => 'GNASSM | August 19, 2025'
                    ],


                    // =====================================================
                    // NEWS 10
                    // =====================================================
                    [
                        'id' => 10,
                        'featured' => false,
                        'category' => 'Mining',
                        'date' => 'June 19, 2025',
                        'location' => 'Ghana',
                        'image' => 'galamsey.jpg',

                        'title' => 'Chiefs and MMDCEs to Lead Fight Against Galamsey',

                        'excerpt' => 'The Minister for Lands and Natural Resources announced a renewed strategy to combat illegal mining by empowering Chiefs and Metropolitan, Municipal, and District Chief Executives to take leadership roles.',

                        'content' => [

                            'The Minister for Lands and Natural Resources has announced a renewed strategy to combat illegal mining (galamsey) by empowering Chiefs and Metropolitan, Municipal, and District Chief Executives (MMDCEs) to take leadership roles.',

                            'Speaking at a press conference, the minister emphasized the need for local accountability and community involvement to preserve lands and water bodies affected by unregulated mining activities.'

                        ],

                        'source' => 'Joy News | June 19th, 2025'
                    ]

                ];

            @endphp


            <section class="czma-news-section" id="news">

                <div class="czma-news-bg"></div>

                <div class="container position-relative">


                    {{-- =====================================================
                        SECTION HEADER
                    ====================================================== --}}

                    <div class="row align-items-end mb-5">

                        <div class="col-lg-8">

                            <div class="czma-section-label">
                                <span></span>
                                LATEST NEWS
                            </div>

                            <h2 class="czma-news-title">
                                News, Updates &
                                <span>Developments</span>
                            </h2>

                            <p class="czma-news-subtitle">
                                Stay informed about the latest activities, partnerships
                                and developments within the Coastal Zone Mining Association.
                            </p>

                        </div>


                        <div class="col-lg-4 mt-4 mt-lg-0">

                            <div class="czma-news-nav">

                                <button
                                    class="czma-news-prev"
                                    type="button"
                                    aria-label="Previous news">

                                    <i class="ri-arrow-left-line"></i>

                                </button>


                                <button
                                    class="czma-news-next"
                                    type="button"
                                    aria-label="Next news">

                                    <i class="ri-arrow-right-line"></i>

                                </button>

                            </div>

                        </div>

                    </div>


                    {{-- =====================================================
                        NEWS SLIDER
                    ====================================================== --}}

                    <div class="swiper czmaNewsSwiper">

                        <div class="swiper-wrapper">

                            @foreach($news as $article)

                                <div class="swiper-slide">

                                    <article class="czma-news-card">

                                        {{-- Image --}}
                                        <div class="czma-card-image">

                                            <img
                                                src="{{ URL::asset('assets/images/' . $article['image']) }}"
                                                alt="{{ $article['title'] }}"
                                                loading="lazy"
                                            >

                                            <div class="czma-card-image-overlay"></div>


                                            {{-- Category --}}
                                            <span class="czma-card-category">

                                                {{ strtoupper($article['category']) }}

                                            </span>

                                        </div>


                                        {{-- Content --}}
                                        <div class="czma-card-content">

                                            <div class="czma-card-date">

                                                <i class="ri-calendar-line"></i>

                                                {{ $article['date'] }}

                                            </div>


                                            <h3>

                                                {{ $article['title'] }}

                                            </h3>


                                            <p>

                                                {{ $article['excerpt'] }}

                                            </p>


                                            <button
                                                type="button"
                                                class="czma-card-link"
                                                data-bs-toggle="modal"
                                                data-bs-target="#newsArticleModal"
                                                data-news-id="{{ $article['id'] }}"
                                            >

                                                Read Article

                                                <i class="ri-arrow-right-up-line"></i>

                                            </button>

                                        </div>

                                    </article>

                                </div>

                            @endforeach

                        </div>


                        {{-- Pagination --}}
                        <div class="swiper-pagination czma-news-pagination"></div>

                    </div>

                </div>

            </section>



            {{-- =========================================================
                NEWS ARTICLE MODAL
            ========================================================= --}}

            <div
                class="modal fade czma-news-modal"
                id="newsArticleModal"
                tabindex="-1"
                aria-labelledby="newsArticleModalLabel"
                aria-hidden="true"
            >

                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content">


                        {{-- Close --}}
                        <button
                            type="button"
                            class="czma-modal-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >

                            <i class="ri-close-line"></i>

                        </button>


                        <div class="modal-body p-0">


                            {{-- =================================================
                                ARTICLE HEADER
                            ================================================== --}}

                            <div class="czma-article-header">

                                <div
                                    id="articleCategory"
                                    class="czma-article-category">
                                </div>


                                <div class="czma-article-meta">

                                    <span>

                                        <i class="ri-calendar-line"></i>

                                        <span id="articleDate"></span>

                                    </span>


                                    <span>

                                        <i class="ri-map-pin-line"></i>

                                        <span id="articleLocation"></span>

                                    </span>

                                </div>


                                <h2 id="articleTitle"></h2>

                            </div>


                            {{-- =================================================
                                ARTICLE IMAGE
                            ================================================== --}}

                            <div class="czma-article-image">

                                <img
                                    id="articleImage"
                                    src=""
                                    alt=""
                                >

                            </div>


                            {{-- =================================================
                                ARTICLE CONTENT
                            ================================================== --}}

                            <div class="czma-article-body">

                                <div id="articleContent"></div>


                                {{-- Source --}}
                                <div class="czma-article-source">

                                    <i class="ri-information-line"></i>

                                    <span id="articleSource"></span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



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
                            <img src="{{ URL::asset('assets/images/mine21.png') }}"  height="300px" alt="cadastral">
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
                   {{--  <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                
                                <a href="#" class="btn text-white" style="background-color: rgb(15, 7, 71);">More Services</a>
                            </div>
                        </div>
                        <!-- end col -->
                    </div> --}}
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
                                <img src="{{ URL::asset('assets/images/mine2.jpg') }}" alt="" class="img-fluid mx-auto img-thumbnail rounded">
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
                        {{-- <div class="col-sm-auto">
                            <div>
                                <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                            </div>
                        </div> --}}
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
                                {{-- <p class="mb-4 ff-secondary">At AMS & Sons Construction, we understand that having access to the right equipment is essential for the successful completion of any construction project. To support your projects, we offer a wide range of modern, well-maintained construction equipment available for hire. Whether you need machinery 
                                    for road construction, earthmoving, or material handling, our fleet is equipped to handle jobs of all sizes.</p> --}}

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

                                {{-- <div class="mt-4">
                                    <a href="index" class="btn text-white" style="background-color: rgb(15, 7, 71);">More Equipment <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                            <div>
                                <img src="{{ URL::asset('assets/images/mine6.jpg') }}" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div>
                                <img src="{{ URL::asset('assets/images/mine17.jpg') }}" alt="" class="img-fluid rounded">
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
                                <img src="{{ URL::asset('assets/images/mine10.jpg') }}" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start plan -->
            {{-- <section class="section bg-light" id="plans">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                                <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you
                                    business.</p>

                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <h5 class="fs-14 mb-0">Month</h5>
                                    </div>
                                    <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                        <input class="form-check-input" type="checkbox" id="plan-switch">
                                        <label class="form-check-label" for="plan-switch"></label>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 mb-0">Annual <span class="badge badge-soft-success">Save 20%</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Basic Plan</h5>
                                            <p class="text-muted mb-0">For Startup</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-primary">
                                                <i class="ri-book-mark-line fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">19</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">171</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>3</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>299</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>5</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0 ribbon-box right">
                                <div class="card-body p-4 m-2">
                                    <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Pro Business</h5>
                                            <p class="text-muted mb-0">Professional plans</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-primary">
                                                <i class="ri-medal-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">29</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">261</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>15</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>12</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-danger me-1">
                                                        <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Platinum Plan</h5>
                                            <p class="text-muted mb-0">Enterprise Businesses</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-light rounded-circle text-primary">
                                                <i class="ri-stack-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-4 text-center">
                                        <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">39</span> <span
                                                class="fs-13 text-muted">/Month</span></h1>
                                        <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">351</span> <span
                                                class="fs-13 text-muted">/Year</span></h1>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Domain
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- end container -->
            </section> --}}
            <!-- end plan -->

            <!-- start features -->
            <section style="background-color: rgb(15, 7, 71)" class="section py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div class="card explore-box card-animate border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle">
                                        <div class="ms-2 flex-grow-1">
                                            <a href="#!">
                                                <h6 class="mb-0 fs-15">Nancy Martino</h6>
                                            </a>
                                            <p class="mb-0 text-muted fs-13">Owners</p>
                                        </div> --}}
                                        {{-- <div class="bookmark-icon">
                                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                        </div> --}}
                                    </div>
                                    <div class="explore-place-bid-img overflow-hidden rounded">
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/glF9rObAp2A" title="Mining in Ghana: Opportunities for Creating Partnerships." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    </div>
                                    {{-- <div class="mt-3">
                                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                        <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                                        <h6 class="fs-16 mb-0"><a href="apps-nft-item-details">Patterns arts &amp; culture</a></h6>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card explore-box card-animate border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle">
                                        <div class="ms-2 flex-grow-1">
                                            <a href="#!">
                                                <h6 class="mb-0 fs-15">Nancy Martino</h6>
                                            </a>
                                            <p class="mb-0 text-muted fs-13">Owners</p>
                                        </div> --}}
                                        {{-- <div class="bookmark-icon">
                                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                        </div> --}}
                                    </div>
                                    <div class="explore-place-bid-img overflow-hidden rounded">
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/glF9rObAp2A" title="Mining in Ghana: Opportunities for Creating Partnerships." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    </div>
                                    {{-- <div class="mt-3">
                                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                        <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                                        <h6 class="fs-16 mb-0"><a href="apps-nft-item-details">Patterns arts &amp; culture</a></h6>
                                    </div> --}}
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

                                {{-- <div class="hstack gap-2 justify-content-center">
                                    <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>
                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>
                                </div> --}}
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
                                
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                            aria-controls="privacy-collapseFour">
                                            Do stories need themes?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            A story can have as many themes as the reader can identify based on recurring patterns and parallels within the story
                                            itself. In looking at ways to separate themes into a hierarchy, we might find it useful to follow the example of a
                                            single book.
                                        </div>
                                    </div>
                                </div> --}}
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
                                        <img src="{{ URL::asset('assets/images/rita.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/henry.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/arhin.PNG') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/ishmael.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/frank.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/environ.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/kenah.jpeg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="kenah-profile" class="text-body" style="font-size: 15px">Dr. Godfried Kenah </a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Advisory Member</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/charles.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="charles-profile" class="text-body" style="font-size: 15px">Mr. Charles Toku</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Professional Metallurgist</p>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/amoako.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                                        <img src="{{ URL::asset('assets/images/priscilla.jpg') }}" alt="" class="img-fluid rounded">
                                        {{-- <a href="apps-mailbox" style="background-color: rgb(15, 7, 71);"
                                            class="btn btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
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
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-2">
                                <a href="pages-team" style="background-color: rgb(15, 7, 71);" class="btn text-white">View All Members <i
                                        class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                            </div>
                        </div>
                    </div> --}}
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
                                {{-- <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="name" class="form-label fs-13">Name</label>
                                                <input name="name" id="name" type="text"
                                                    class="form-control bg-light border-light" placeholder="Your name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="email" class="form-label fs-13">Email</label>
                                                <input name="email" id="email" type="email"
                                                    class="form-control bg-light border-light" placeholder="Your email*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="subject" class="form-label fs-13">Subject</label>
                                                <input type="text" class="form-control bg-light border-light" id="subject"
                                                    name="subject" placeholder="Your Subject.." />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comments" class="form-label fs-13">Message</label>
                                                <textarea name="comments" id="comments" rows="3"
                                                    class="form-control bg-light border-light"
                                                    placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-end">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                                value="Send Message">
                                        </div>
                                    </div>
                                </form> --}}
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
                                    <img src="{{ URL::asset('assets/images/coastal-logo.png') }}" alt="logo light" height="80px" width="80px">
                                    {{-- <div class="mt-2">
                                        <a href="{{ URL::asset('assets/images/corporate.pdf') }}" class="btn btn-sm btn-primary" download>
                                            Download Corporate Profile (PDF)
                                        </a>
                                    </div> --}}
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
                                           
                                            {{-- <li><a href="apps-projects-overview">Projects</a></li>
                                            <li><a href="pages-timeline">Timeline</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Our Pages</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list">
                                            <li><a href="gallery">Gallery</a></li>
                                            <li><a href="#services">Services</a></li>
                                            {{-- <li><a href="#">Health & Safety</a></li>
                                            <li><a href="#">Deals</a></li> --}}
                                            
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


        {{-- @include("partials/vendor-scripts") --}}
        <script>

            document.addEventListener('DOMContentLoaded', function () {


                /* =====================================================
                CZMA NEWS SWIPER
                ====================================================== */

                const czmaNewsSwiper = new Swiper('.czmaNewsSwiper', {

                    slidesPerView: 1,

                    spaceBetween: 24,

                    speed: 700,

                    grabCursor: true,

                    navigation: {

                        nextEl: '.czma-news-next',

                        prevEl: '.czma-news-prev'

                    },

                    pagination: {

                        el: '.czma-news-pagination',

                        clickable: true

                    },

                    /* autoplay: {

                        delay: 6000,

                        disableOnInteraction: false

                    }, */
                    speed: 1000, // transition speed (1000ms = 1 second for the slide animation)

                    breakpoints: {

                        576: {

                            slidesPerView: 1

                        },

                        768: {

                            slidesPerView: 2

                        },

                        1200: {

                            slidesPerView: 3

                        }

                    }

                });



                /* =====================================================
                NEWS DATA
                ====================================================== */

                const newsData = @json($news);



                /* =====================================================
                ARTICLE MODAL
                ====================================================== */

                const newsModal = document.getElementById('newsArticleModal');


                if (newsModal) {

                    newsModal.addEventListener(
                        'show.bs.modal',
                        function (event) {


                            const button = event.relatedTarget;


                            if (!button) {
                                return;
                            }


                            const newsId = parseInt(
                                button.getAttribute('data-news-id')
                            );


                            const article = newsData.find(
                                item => item.id === newsId
                            );


                            if (!article) {
                                return;
                            }



                            /* ---------------------------------------------
                            CATEGORY
                            --------------------------------------------- */

                            document.getElementById(
                                'articleCategory'
                            ).textContent =
                                article.category.toUpperCase();



                            /* ---------------------------------------------
                            DATE
                            --------------------------------------------- */

                            document.getElementById(
                                'articleDate'
                            ).textContent =
                                article.date;



                            /* ---------------------------------------------
                            LOCATION
                            --------------------------------------------- */

                            document.getElementById(
                                'articleLocation'
                            ).textContent =
                                article.location;



                            /* ---------------------------------------------
                            TITLE
                            --------------------------------------------- */

                            document.getElementById(
                                'articleTitle'
                            ).textContent =
                                article.title;



                            /* ---------------------------------------------
                            IMAGE
                            --------------------------------------------- */

                            const articleImage =
                                document.getElementById('articleImage');


                            articleImage.src =
                                "{{ URL::asset('assets/images') }}/"
                                + article.image;


                            articleImage.alt =
                                article.title;



                            /* ---------------------------------------------
                            FULL ARTICLE CONTENT
                            --------------------------------------------- */

                            const articleContent =
                                document.getElementById('articleContent');


                            articleContent.innerHTML = '';


                            article.content.forEach(function (paragraph) {

                                const p =
                                    document.createElement('p');


                                p.textContent =
                                    paragraph;


                                articleContent.appendChild(p);

                            });



                            /* ---------------------------------------------
                            SOURCE
                            --------------------------------------------- */

                            document.getElementById(
                                'articleSource'
                            ).textContent =
                                article.source;


                        }
                    );

                }

            });

            </script>

    </body>


    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/swiper/swiper.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/landing.init.js') }}"></script>
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
        {{-- <script>
            new Swiper(".czmaNewsSwiper", {

            slidesPerView: 1,
            spaceBetween: 24,

            navigation: {
                nextEl: ".czma-news-next",
                prevEl: ".czma-news-prev",
            },

            pagination: {
                el: ".czma-news-pagination",
                clickable: true,
            },

            breakpoints: {

                768: {
                    slidesPerView: 2,
                },

                1200: {
                    slidesPerView: 2,
                }

            },

            /* autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            }, */

            loop: true,
            speed: 1000, // transition speed (1000ms = 1 second for the slide animation)

        });
        var swiper = new Swiper(".client-review-swiper1", {
            loop: true,
            /* autoplay: {
                delay: 60000, // duration in milliseconds (8000ms = 8 seconds per slide)
                disableOnInteraction: false,
            }, */
            speed: 1000, // transition speed (1000ms = 1 second for the slide animation)
            navigation: {
            nextEl: '.client-review-next',
            prevEl: '.client-review-prev'
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true
            }
        });
        </script> --}}
    @endsection
