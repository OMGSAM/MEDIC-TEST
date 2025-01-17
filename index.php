﻿<?php 
#session_start();
$host = "localhost"; // Remplacez par votre hôte
$username = "root"; // Remplacez par votre utilisateur
$password = ""; // Remplacez par votre mot de passe
$dbname = "bis"; // Remplacez par votre base de données
$conn = new mysqli($host, $username, $password, $dbname);
?>

 

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Inaamajay </title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="Inaamajay" name="author">
    <meta content="width=device-width,initial-scale=1.0" name="viewport"/>
    <meta content="Elevate your online presence with Inaamajay - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos."
          name="description">

    <link href="images/favicon.png" rel="shortcut icon">
    <link href="images/apple-touch-icon-57x57.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script> 


    <link crossorigin href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="css/vendors.min.css" rel="stylesheet"/>
    <link href="css/icon.min.css" rel="stylesheet"/>
    <link href="css/style.min.css" rel="stylesheet"/>
    <link href="css/responsive.min.css" rel="stylesheet"/>
    <link href="demos/medical/medical.css" rel="stylesheet"/>
</head>
<body data-mobile-nav-style="classic">

<?php


if ($conn) {
     echo"
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'DATABASE CONNECTED',
                    text: 'Coordonnnees  valides!',
                    confiramtaionButtonText: 'Ok',
                    timer : 2f500
                })
            </script>
            ";
    }
     

     ?>


<div class="box-layout">

    <header>

        <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="index.php">
                        <img alt class="default-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/demo-medical-logo-black.png">
                        <img alt class="alt-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/demo-medical-logo-black.png">
                        <img alt class="mobile-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/demo-medical-logo-black.png">
                    </a>
                </div>
                <div class="col-auto col-lg-8 menu-order position-static">
                    <button aria-controls="navbarNav" aria-label="Toggle navigation" class="navbar-toggler float-start"
                            data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-treatments.html">Treatments</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-doctors.html">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-timetable.html">Timetable</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">
                        <div class="header-button">
                            <a class="btn btn-small btn-switch-text btn-base-color left-icon btn-round-edge btn-box-shadow"
                               href="demo-medical-appointment.php">
<span>
<span><i class="feather icon-feather-calendar"></i></span>
<span class="btn-double-text" data-text="Book online">Book online</span>
</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>


    <section class="top-space-margin overflow-hidden position-relative p-0 border-radius-10px lg-no-border-radius"
             data-parallax-background-ratio="0.5" style="background-image: url(images/demo-medical-hero-banner-bg.jpg)">
        <div class="container h-100">
            <div class="row justify-content-md-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 pt-13 xl-pt-6 lg-pb-17 md-pb-6 sm-pt-40px text-center text-lg-start"
                     data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-19 mb-15px d-block text-base-color">Tell us your problem!</span>
                    <h1 class="text-dark-gray fw-800 xs-fs-65 ls-minus-3px mb-45px d-block">Most trusted health partner
                        for your life.</h1>
                    <a class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px"
                       href="demo-medical-appointment.php">
<span>
<span class="btn-double-text" data-text="Trusted doctor">Find a doctor</span>
</span>
                    </a>
                    <a class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge"
                       href="demo-medical-appointment.php">
<span>
<span><i class="feather icon-feather-video"></i></span>
<span class="btn-double-text" data-text="Video call">Video call</span>
</span>
                    </a>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-10 position-relative align-self-end lg-pb-8 md-pb-1 sm-pb-10 xs-pb-30">
                    <div class="w-85px h-85px border-radius-100 d-flex align-items-center justify-content-center position-absolute z-index-9 left-50px lg-left-5px sm-left-30px top-100px lg-top-30px mt-30 translate-middle-y"
                         data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="bg-red video-icon-box video-icon-medium feature-box-icon-rounded w-80px h-80px rounded-circle d-flex align-items-center justify-content-center">
<span>
<span class="video-icon">
<i class="bi bi-heart-fill icon-very-medium text-white position-relative top-3px m-0"></i>
<span class="video-icon-sonar">
<span class="video-icon-sonar-bfr border border-1 border-color-red"></span>
</span>
</span>
</span>
                        </div>
                    </div>
                    <figure class="outside-box-right-2 position-relative">
                        <img alt src="images/demo-medical-hero-banner-01.png">
                        <figcaption
                                class="blur-box bg-white-transparent position-absolute border-radius-6px top-50 right-minus-50px xl-right-minus-5px lg-right-minus-10px sm-right-5px w-250px p-25px text-center last-paragraph-no-margin animation-float">

                            <div class="icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon me-15px">
                                        <img alt class="h-50px" src="images/demo-medical-hero-banner-icon-01.png">
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fs-17 fw-700 text-dark-gray">Verified doctors</span>
                                        <p class="lh-20 fs-15">Professional doctor</p>
                                    </div>
                                </div>
                            </div>

                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="bg-base-color position-absolute bottom-0px w-100 pt-30px pb-30px">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto md-mb-10px">
                        <div class="d-flex align-items-center text-white">
                            <i class="bi bi-info-circle icon-very-medium me-10px"></i>
                            <span class="fw-600 fs-18">Covid-19 information</span>
                            <span class="h-20px w-1px d-none d-lg-block bg-white opacity-5 ms-30px"></span>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 text-white text-center text-lg-start">
                        <div class="swiper slider-one-slide"
                             data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 20, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-one-slide-pagination&quot;, &quot;clickable&quot;: true }, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper align-items-center">

                                <div class="fs-18 swiper-slide">Get vaccinated as soon as it's your turn and follow
                                    guidance on vaccination.
                                </div>


                                <div class="fs-18 swiper-slide">Clean your hands frequently with alcohol-based hand soap
                                    and water.
                                </div>


                                <div class="fs-18 swiper-slide">Cover your mouth and nose with a bent elbow or tissue
                                    when you cough.
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 md-mb-15 xs-mb-20 offset-lg-0 offset-md-1 position-relative">
                    <div class="w-75" data-animation-delay="200" data-bottom-top="transform: translateY(50px)"
                         data-shadow-animation="true" data-top-bottom="transform: translateY(-50px)">
                        <img alt class="border-radius-6px w-100" src="images/demo-medical-home-02.jpg">
                        <div class="position-absolute left-minus-70px lg-left-minus-15px md-left-minus-50px bottom-130px lg-bottom-90px md-mb-50px d-none d-md-flex flex-column align-items-center justify-content-center w-140px h-140px bg-white border-radius-100 p-10px box-shadow-quadruple-large"
                             data-anime="{&quot;translateY&quot;: [-15, 0], &quot;scale&quot;: [0.5, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 800, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <img alt
                                 class="position-absolute top-50 translate-middle-y" src="images/demo-medical-home-06.png">
                            <img alt class="animation-rotation" src="images/demo-medical-home-07.png">
                        </div>
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px bottom-minus-50px"
                         data-animation-delay="100" data-bottom-top="transform: translateY(-20px)"
                         data-shadow-animation="true" data-top-bottom="transform: translateY(20px)">
                        <img alt class="border-radius-6px box-shadow-quadruple-large w-100"
                             src="images/demo-medical-home-03.jpg"/>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-right text-md-start"
                     data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                            class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                            class="bi bi-layout-text-sidebar-reverse text-base-color fs-20"></i></span>About medcare hospital</span>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Welcome to our medcare hospital.</h2>
                    <p class="mb-30px w-95 lg-w-100 xs-mb-25px">We value each and every human life placed in our hands
                        and constantly work towards meeting the expectations of our customers and stake holders.</p>
                    <div class="row align-items-center text-right text-sm-start">
                        <div class="col-sm-auto xs-mb-10px">
                            <h2 class="alt-font text-dark-gray mb-0 d-inline-block align-middle me-10px fw-800">
                                722+</h2>
                            <div class="text-center bg-golden-yellow text-white fs-14 ls-1px border-radius-4px d-inline-block ps-15px pe-15px lh-34 align-middle me-5px">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i></div>
                        </div>
                        <div class="col-sm border-start border-2 border-color-dark-gray ps-25px ms-10px xl-ps-20px xs-border-start-0 xs-ps-15px xs-pe-15px xs-m-0">
                            <p class="m-0 lh-24 text-dark-gray fw-600">5 star reviews from our satisfied people.</p>
                        </div>
                    </div>
                    <div class="d-inline-block mt-40px xs-mt-30px">
                        <a class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px"
                           href="demo-medical-about.html">
<span>
<span class="btn-double-text" data-text="Trusted doctor">About hospital</span>
</span>
                        </a>
                        <a class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge xs-mt-15px"
                           href="demo-medical-timetable.html">
<span>
<span><i class="feather icon-feather-calendar"></i></span>
<span class="btn-double-text" data-text="Check timetable">Check timetable</span>
</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0 position-relative">
        <div class="position-absolute top-minus-70px lg-top-minus-50px left-minus-80px lg-left-minus-60px lg-w-300px opacity-1 w-350px z-index-1 d-none d-lg-inline-block">
            <img alt data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                 src="images/demo-medical-pattern.svg"></div>
        <div class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 md-pt-50px md-pb-50px overflow-hidden position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 md-mb-30px"
                         data-anime="{&quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                                class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                                class="bi bi bi-shield-check text-base-color fs-22"></i></span>Our advance services</span>
                        <h2 class="fw-800 text-dark-gray ls-minus-2px">Our clinical departments.</h2>
                        <p class="mb-30px">Lorem ipsum is simply dummy text printing typesetting industry's
                            standard.</p>
                        <a class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge"
                           href="demo-medical-treatments.html">
<span>
<span class="btn-double-text" data-text="All treatments">All treatments</span>
</span>
                        </a>
                    </div>
                    <div class="col-xl-8 ps-5 col-lg-7">
                        <div class="outside-box-right-25 sm-outside-box-right-0"
                             data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="swiper magic-cursor ps-15px md-ps-0"
                                 data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false },  &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
                                <div class="swiper-wrapper pt-30px pb-20px">

                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-01.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Primary care</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-02.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Cardiology</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-03.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">General surgery</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-04.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Blood test</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-02.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Cardiology</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="swiper-slide">

                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img alt class="w-50px" src="images/demo-medical-icon-03.svg">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">General surgery</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"
                                                       href="demo-medical-treatments.html"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 mt-5 align-items-center justify-content-center"
                     data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                    <div class="col md-mb-40px border-end xs-border-end-0 border-color-transparent-dark-very-light">
                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">4.98</h2>
                            </div>
                            <div>
                                <div class="fs-18 lh-32 last-paragraph-no-margin text-dark-gray">
                                    <i class="bi bi-star-fill text-dark-gray"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <span class="fs-18 lh-26 d-block fw-600 text-dark-gray">2,488 rating.</span>
                            </div>
                        </div>
                    </div>


                    <div class="col md-mb-40px border-end md-border-end-0 border-color-transparent-dark-very-light">
                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">98<sup class="fs-30">%</sup></h2>
                            </div>
                            <div>
                                <span class="fs-18 text-dark-gray lh-26 d-block fw-600">Genuine positive<br/> feedback.</span>
                            </div>
                        </div>
                    </div>


                    <div class="col text-dark-gray fw-600">
                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">200<sup class="fs-30">+</sup></h2>
                            </div>
                            <div>
                                <span class="fs-18 lh-26 d-block fw-600">Daily patients<br>consulted.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="overlap-height py-0">
        <div class="container overlap-gap-section">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative"
                     data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="atropos" data-atropos data-atropos-perspective="2450">
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner">
                                    <img alt class="border-radius-6px" src="images/demo-medical-home-04.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute-middle-center text-white-space-nowrap z-index-9">
                        <a class="btn btn-extra-large btn-white left-icon btn-box-shadow btn-rounded popup-youtube"
                           href="https://www.youtube.com/watch?v=cfXHhfNy7tU"><i
                                class="fa-brands fa-youtube"></i>See our virtual tour</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6"
                     data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 150, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                            class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                            class="bi bi-layout-text-sidebar-reverse text-base-color fs-20"></i></span>Modern technologies</span>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">We help you get well sooner!</h2>
                    <p class="mb-35px md-mb-30px w-90 lg-w-100">We value each and every human life placed in our hands
                        and constantly work towards meeting the expectations of our customers.</p>
                    <a class="btn btn-large btn-switch-text btn-dark-gray btn-round-edge left-icon"
                       href="tel:12345678910">
<span>
<span><i class="feather icon-feather-phone-call"></i></span>
<span class="btn-double-text" data-text="+1 234 567 8910">06 42 55 52 22</span>
</span>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center pt-6 pb-6 md-pt-8 md-pb-8"
                 data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 150, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-auto icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-emoji-smile icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content text-dark-gray fs-20 fw-600 ls-minus-05px">We can give you the
                            big smile you've always wanted.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section
            class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 position-relative z-index-0">
        <div class="container overlap-section mb-5 sm-mb-50px">
            <div class="bg-base-color border-radius-6px pt-4 pb-4 ps-6 pe-6 xl-p-4 sm-p-30px"
                 data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-3 lg-mb-25px text-center text-xl-start">
                        <h6 class="text-white fw-700 mb-0 w-80 xl-w-100">Find the right <span
                                class="highlight-separator" data-animation-delay="500" data-shadow-animation="true">doctor <span><img
                                alt src="images/highlight-separator.svg"></span></span> for you.</h6>
                    </div>
                    <div class="col-xl-9">
                        <div class="row row-cols-auto row-cols-lg-3 row-cols-md-2 justify-content-center align-items-center">

                            <div class="col process-step-style-07 position-relative md-mb-30px">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">01</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Search doctor</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col process-step-style-07 position-relative md-mb-30px">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">02</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Book schedule</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col process-step-style-07 position-relative">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">03</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Make a payment</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center"
                     data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Qualified doctors</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-sm-2 justify-content-center"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col team-style-06 lg-mb-30px">
                    <div class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a class="d-inline-block position-relative" href="#"><img
                                    alt class="rounded-circle w-150px h-150px mb-20px" src="images/team-22.jpg"><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                    class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a class="text-dark-gray fs-18 fw-700 mb-5px" href="#">Dr. Shoko mugikura</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">psychiatry</span> at Katim 
                            hospital.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col team-style-06 lg-mb-30px">
                    <div class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a class="d-inline-block position-relative" href="#"><img
                                    alt class="rounded-circle w-150px h-150px mb-20px" src="images/team-21.jpg"><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                    class="fa-solid fa-star"></i> 4.7</span></a>
                        </div>
                        <a class="text-dark-gray fs-18 fw-700 mb-5px" href="#">Dr. Herman miller</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">cancer</span> at Katim
                            hospital.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col team-style-06 sm-mb-30px">
                    <div class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a class="d-inline-block position-relative" href="#"><img
                                    alt class="rounded-circle w-150px h-150px mb-20px" src="images/team-23.jpg"><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                    class="fa-solid fa-star"></i> 5.0</span></a>
                        </div>
                        <a class="text-dark-gray fs-18 fw-700 mb-5px" href="#">Dr. Leonel mooney</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">pediatrics</span> at Katim
                            hospital.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col team-style-06">
                    <div class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a class="d-inline-block position-relative" href="#"><img
                                    alt class="rounded-circle w-150px h-150px mb-20px" src="images/team-56.jpg"><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                    class="fa-solid fa-star"></i> 5.0</span></a>
                        </div>
                        <a class="text-dark-gray fs-18 fw-700 mb-5px" href="#">Dr. Matthew taylor</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">psychiatry</span> at Inaamajay
                            hospital.</p>
                        <div class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center align-items-center mt-5 sm-mt-7"
                 data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-12 text-center last-paragraph-no-margin">
                    <div class="fs-12 lh-30 fw-600 text-white text-uppercase d-inline-block bg-base-color border-radius-30px ps-20px pe-20px me-10px sm-m-5px align-middle">
                        trust
                    </div>
                    <div class="d-inline-block align-middle text-dark-gray fs-20 fw-600 ls-minus-05px">Genuine 10000+
                        people trusting medcare hospital treatment.
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-10px right-minus-80px xl-right-minus-40px lg-right-15px opacity-1 w-350px z-index-minus-1">
            <img alt data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)"
                 src="images/demo-medical-pattern.svg"></div>
    </section>


    <section class="position-relative" id="appointment">
        <div class="container">
            <div class="row justify-content-center"
                 data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-xl-4 col-lg-5 md-mb-50px">
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Request an appointment.</h2>
                    <p class="w-90 md-w-100 mb-30px">Your information will be forwarded to a scheduling specialist who
                        will contact you.</p>
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <img alt class="me-15px" src="images/demo-medical-home-05.png"/>
                        </div>
                        <div class="col">
                            <span class="fw-600 text-dark-gray">For urgent matters<br><a class="fs-22 ls-minus-05px fw-800"
                                                                                         href="tel:12345678910">06 61 31 22 61</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form-style-05">

                    <form method="POST" action="" class="row contact-form-style-02">
    <div class="col-md-6 mb-30px">
        <input class="form-control border-radius-8px border-color-white box-shadow-double-large" type="text" name="age" placeholder="AGE"   />
        <input class="input-name border-radius-4px border-color-white box-shadow-double-large form-control" type="text" name="name" placeholder="Patient's full name*"   />
    </div>

    <div class="col-md-6 mb-30px">
        <input class="border-radius-4px border-color-white box-shadow-double-large form-control" type="number" name="numero" placeholder="Numero"   />
        <input class="border-radius-4px border-color-white box-shadow-double-large form-control" type="email" name="email" placeholder="Patient's email*"   />
    </div>

    <div class="col-md-6 mb-30px">
        <input class="form-control border-radius-4px border-color-white box-shadow-double-large" type="date" name="date" value="2023-01-01" aria-label="date"   />
    </div>

    <div class="col-md-6 mb-30px">
        <div class="select">
            <select class="form-control border-radius-4px border-color-white box-shadow-double-large" name="select" aria-label="select-doctor"  >
                <option value="">Select doctor</option>
                <option value="Pediatrician - Dr. Bryan jonhson">Pediatrician - Dr. Imad jonhson</option>
                <option value="Cardiology - Dr. Jemmy watson">Cardiology - Dr. Mohamed watson</option>
                <option value="Neurology - Dr. Jeremy dupont">Neurology - Dr. Jamal dupont</option>
                <option value="Orthopedics - Dr. Evan thomson">Orthopedics - Dr. Yahya thomson</option>
                <option value="Optometrists - Dr. Shoko mugikura">Optometrists - Dr. Nawal mugikura</option>
            </select>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
    </div>

    <div class="col-xl-6 col-md-7">
        <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
    </div>
    <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
     
    <div class="header-button">
    <button name='user_submit' class="btn btn-medium btn-base-color btn-round-edge left-icon btn-box-shadow ">
    <i class="bi bi-calendar-check"></i>Book appointment
    </button>
    </div>




    </div>
    <div class="col-12">
        <div class="form-results mt-20px d-none"></div>
    </div>
</form>



<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['user_submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $date = $conn->real_escape_string($_POST['date']);
    $age = $conn->real_escape_string($_POST['age']);
    $numero = $conn->real_escape_string($_POST['numero']);
    $doctor = $conn->real_escape_string($_POST['select']);
    $comment = $conn->real_escape_string($_POST['comment']);
    
    if ($name !== "" && $email !== "" && $date !== "" && $age !== "" && $numero !== "" && $doctor !== "") {
        $stmt = $conn->prepare("INSERT INTO `tbl_appointment` (`resident_name`, `age`, `staff_in_charge`, `request_date`, `concern`, `appointment_type`, `status`, `appointment_date`, `remarks`, `mobile_no`) 
        VALUES (?, ?, ?, ?, ?, ?, 'active', ?, ?, ?)");
        $stmt->bind_param("sisssssss", $name, $age, $doctor, $date, $comment, $comment, $date, $comment, $numero);
        
        if ($stmt->execute()) {
            echo "<script>swal({
                title: 'Reservation Successful',
                icon: 'success',
            });</script>";
        } else {
            echo "<script>swal({
                title: 'Error occurred',
                icon: 'error',
            });</script>";
        }
    } else {
        echo "<script>swal({
            title: 'Please fill all required fields',
            icon: 'error',
        });</script>";
    }
}
?>




                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-minus-15px right-100px lg-right-0px z-index-minus-1 opacity-1 w-300px lg-w-200px">
                <img alt data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                     src="images/demo-medical-home-08.png"></div>
        </div>
    </section>


    <footer class="p-0">
        <div class="footer-top bg-dark-gray pt-35px pb-35px border-radius-6px lg-no-border-radius position-relative overflow-hidden">
            <div class="position-absolute right-minus-100px bottom-minus-80px margin-100px-top opacity-1 w-250px"><img
                    alt class src="images/demo-medical-pattern-white.svg"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-3 col-sm-6 order-1 text-center text-sm-start xs-mb-20px">
                        <a class="footer-logo d-inline-block" href="index.php"><img
                                alt
                                data-at2x="images/demo-medical-logo-white@2x.png" src="images/demo-medical-logo-white.png"></a>
                    </div>


                    <div class="col-xl-6 order-3 order-xl-2 lg-mt-10px">
                        <ul class="footer-navbar text-center lh-normal">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-treatments.html">Treatments</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-doctors.html">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-timetable.html">Timetable</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-contact.html">Contact</a></li>
                        </ul>
                    </div>


                    <div class="col-xl-3 col-sm-6 position-relative text-center text-sm-end elements-social social-icon-style-08 order-2 order-xl-3">
                        <ul class="small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                            <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                    class="fa-brands fa-dribbble"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 align-items-center pt-30px pb-30px">

                <div class="col last-paragraph-no-margin fs-15 text-center text-md-start sm-mb-10px">
                    <p>&copy; 2024 Katim is Proudly Powered by <a class="text-decoration-line-bottom text-dark-gray fw-600" href="https://www.Inaamajay.com/"
                                                                   target="_blank">Katim</a>
                    </p>
                </div>


                <div class="col text-end fs-15 text-center text-md-end">
                    <ul class="footer-navbar lh-normal">
                        <li class="me-35px sm-me-20px"><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <div class="sticky-wrap d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <span class="fs-15 fw-500 d-flex align-items-center"><i
                class="bi bi-envelope icon-small me-10px align-middle"></i>Arrange your appointment — <a
                class="text-decoration-line-bottom fw-700 lh-22"
                href="demo-medical-appointment.php">Book appointment</a></span>
    </div>

</div>

<div class="scroll-progress d-none d-xxl-block">
    <a aria-label="scroll" class="scroll-top" href="#">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>


<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/vendors.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
