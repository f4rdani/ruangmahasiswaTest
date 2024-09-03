<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Student UBSI </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url("assets"); ?>/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url("assets"); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="<?= base_url("assets"); ?>/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="<?= base_url("assets"); ?>/css/icons.css" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="<?= base_url("assets"); ?>/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- SwiperJS Css -->
    <link rel="stylesheet" href="<?= base_url("assets"); ?>/libs/swiper/swiper-bundle.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?= base_url("assets"); ?>/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?= base_url("assets"); ?>/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?= base_url("assets"); ?>/libs/choices.js/public/assets/styles/choices.min.css">

    <script>
        if (localStorage.valexdarktheme) {
            document.querySelector("html").setAttribute("data-theme-mode", "dark")
        }
        if (localStorage.valexrtl) {
            document.querySelector("html").setAttribute("dir", "rtl")
            document.querySelector("#style")?.setAttribute("href", "<?= base_url("assets"); ?>/libs/bootstrap/css/bootstrap.rtl.min.css");
        }
    </script>


</head>

<body class="landing-body">

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-light-theme">
                                Light
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-dark-theme">
                                Dark
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <p class="switcher-style-head">Directions:</p>
                <div class="row switcher-style">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-ltr">
                                LTR
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-rtl">
                                RTL
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-1" type="radio"
                            name="theme-primary" id="switcher-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-2" type="radio"
                            name="theme-primary" id="switcher-primary1">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                            id="switcher-primary2">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                            id="switcher-primary3">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                            id="switcher-primary4">
                    </div>
                    <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                        <div class="theme-container-primary"></div>
                        <div class="pickr-container-primary"></div>
                    </div>
                </div>
            </div>
            <div>
                <p class="switcher-style-head">reset:</p>
                <div class="text-center">
                    <button id="reset-all" class="btn btn-danger mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div class="landing-page-wrapper">

        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="<?= base_url("assets"); ?>/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="<?= base_url("assets"); ?>/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line fs-20"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element align-items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="btn-list d-lg-none d-block">
                            <a href="signup.html" class="btn btn-primary-light">
                                Sign Up
                            </a>
                            <button class="btn btn-icon btn-primary" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                <i class="fe fe-settings align-middle"></i>
                            </button>
                        </div>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <div class="container p-0">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills sub-open">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="<?= base_url("assets"); ?>/images/brand-logos/ubsi.jpg" alt="logo" class="desktop-logo">
                                    <img src="<?= base_url("assets"); ?>/images/brand-logos/ubsi.jpg" alt="logo" class="desktop-white">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">Pengumuman</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#features" class="side-menu__item">
                                    <span class="side-menu__label">Info Grafis</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#sosmed" class="side-menu__item">
                                    <span class="side-menu__label">Sosial Media</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faq" class="side-menu__item">
                                    <span class="side-menu__label">Faq's</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg></div>
                        <div class="d-lg-flex d-none">
                            <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                <a href="signup.html" class="btn btn-wave btn-primary">
                                    Sign Up
                                </a>
                                <button class="btn btn-wave btn-icon btn-light" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                    <i class="fe fe-settings align-middle"></i>
                                </button>
                            </div>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content landing-main">

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                                <div class="py-5 pb-lg-0">
                                    <div class="mb-3">
                                        <h5 class="fw-semibold text-fixed-white op-9">Selamat Datang</h5>
                                    </div>
                                    <p class="landing-banner-heading mb-3">Di Tampilan Baru</p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7"> Sistem Akademik Mahasiswa (SIAKAD) Universitas Bina Sarana Informatika</div>
                                    <a href="<?php echo base_url('Welcome');?>" target="_blank" class="m-1 btn btn-primary">
                                        Login
                                        <i class="fe fe-eye ms-2 align-middle"></i>
                                    </a>
                                    <a href="<?php echo base_url('Welcome/aktivasi_mahasiswa');?>" class="m-1 btn btn-warning">
                                        Aktivasi Mahasiswa
                                        <i class="fe fe-arrow-right ms-2 align-middle"></i>
                                    </a>
                                    <a href="<?php echo base_url('Welcome/homeceknim');?>" class="m-1 btn btn-info">
                                        Cek NIM/SK DO/SK Keluar
                                        <i class="fe fe-arrow-right ms-2 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-4 -->
            <section class="section " id="about">
                <div class="container text-center">
                    <div class="row justify-content-center align-items-center mx-0">
                        <div class="col-lg-6 col-xl-6 col-lg-6 text-center text-lg-start">
                            <div class="col-lg-8">
                                <div class="card shadow-none">
                                    <div class="card-body px-8 pt-8">
                                        <div class="row mt-1">
                                            <div class="col-xl-12">
                                            <?= $this->session->flashdata('message'); ?>
                                            <form method="post" action="<?=  base_url('Auth/loginmhs');?>">
                                                <div class="form-group ">
                                                    <label for="cusName" class="form-label">NIM
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="username" placeholder="Input Nim">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cusEmail" class="form-label" >Password
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cusMessage" class="form-label">  <?php echo $captcha_question; ?><span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="captcha_answer">
                                            <input  class="form-control" name="correct_captcha_answer" id="correct_captcha_answer"type="hidden" required=""  value="<?php echo  $correct_captcha_answer; ?>">
                                        </div>
                                        <div class="form-group mb-2 pt-1">
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 pt-5 pb-0 px-lg-2 px-5 text-start">
                            <h4 class="text-lg-start fw-medium mb-4">PENGUMUMAN </h4>
                            <div class="row">
                                <div class="rating-scroll">
                                    <?php foreach ($data as $date): ?>
                                        <div class="col-12 col-md-12">
                                            <div class="d-flex mb-2">
                                                <span>
                                                    <i class='bx bxs-badge-check text-primary fs-12'></i>
                                                </span>
                                                <div class="ms-2">
                                                    <h8 class="fw-medium mb-0"><?= $date->judul ?></h8>
                                                    <span class="fs-14 ms-auto" style="color: red;">(<?= date('Y-m-d', strtotime($date->tgl_update)) ?>)</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-2 -->
            <section class="section section-bg " id="features">
                <div class="container text-center position-relative">
                    <p class="fs-12 fw-semibold text-success mb-1">
                        <span class="landing-section-heading">Info Grafis</span>
                    </p>
                    <div class="landing-title"></div>
                    <!-- <h3 class="fw-semibold mb-2">Info Terkini</h3>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-muted fs-15 mb-5 fw-normal">We are proud to have top class clients and customers,which motivates us to work more on projects.</p>
                        </div>
                    </div> -->
                    <div class="row  g-2 justify-content-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-evenly">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="card features main-features main-features-4 p-4 active" data-wow-delay="0.1s">
                                        <div class="bg-img mb-2">
                                            <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="64" fill="#42A3DB"></circle>
                                                <path fill="#347CBE" d="M85.5 26.6 66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z"></path>
                                                <path fill="#CD2F30" d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z"></path>
                                                <path fill="#F04D45" d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z">
                                                </path>
                                                <path fill="#FFF" d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z"></path>
                                                <path fill="#FFCD0A" d="M64 70.8c-12.2 0-22.1-9.9-22.1-22.1 0-12.2 9.9-22.1 22.1-22.1 12.2 0 22.1 9.9 22.1 22.1 0 12.2-9.9 22.1-22.1 22.1z"></path>
                                                <path fill="#FFF" d="M59.9 61c-.6 0-1.1-.2-1.5-.7l-8.3-9.2c-.7-.8-.7-2.1.1-2.8.8-.7 2.1-.7 2.8.1l6.7 7.5 15.1-18.8c.7-.9 2-1 2.8-.3.9.7 1 2 .3 2.8L61.4 60.2c-.3.5-.9.8-1.5.8z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold"><?php echo !empty($countAktif) ? $countAktif : 0; ?></h5>
                                            <p class="mb-0">Mahasiswa Aktif </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="card features main-features main-features-2 wow p-4">
                                        <div class="bg-img mb-2">
                                            <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128" viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                                <path fill="#84DBFF" d="M19.2,109c11.5,11.4,27.3,18.5,44.8,18.5c17.5,0,33.3-7.1,44.8-18.5H19.2z"></path>
                                                <rect width="19.6" height="10.4" x="54.2" y="92.7" fill="#FFF"></rect>
                                                <rect width="19.6" height="2.3" x="54.2" y="92.7" fill="#E6E9EE"></rect>
                                                <path fill="#E6E9EE" d="M82.2,109H45.8l0,0c0-3.3,2.7-6,6-6h24.4C79.5,103.1,82.2,105.7,82.2,109L82.2,109z"></path>
                                                <path fill="#324A5E" d="M103,92.7H25c-2.4,0-4.4-2-4.4-4.4V34.7c0-2.4,2-4.4,4.4-4.4h78c2.4,0,4.4,2,4.4,4.4v53.7   C107.4,90.7,105.4,92.7,103,92.7z"></path>
                                                <path fill="#FFF" d="M20.6,84v4.4c0,2.4,1.9,4.3,4.3,4.3H103c2.4,0,4.3-1.9,4.3-4.3V84H20.6z"></path>
                                                <rect width="80.3" height="46.9" x="23.9" y="33.4" fill="#FFF"></rect>
                                                <circle cx="100.3" cy="88.3" r="2" fill="#FF7058"></circle>
                                                <circle cx="94.7" cy="88.3" r="2" fill="#4CDBC4"></circle>
                                                <circle cx="89.1" cy="88.3" r="2" fill="#54C0EB"></circle>
                                                <rect width="9.7" height="27.7" x="32.3" y="46.7" fill="#ACB3BA"></rect>
                                                <rect width="9.7" height="15.8" x="45.7" y="58.7" fill="#4CDBC4"></rect>
                                                <rect width="9.7" height="23.1" x="59.1" y="51.3" fill="#FFD05B"></rect>
                                                <rect width="9.7" height="35.7" x="72.6" y="38.7" fill="#84DBFF"></rect>
                                                <rect width="9.7" height="8.1" x="86" y="66.3" fill="#FF7058"></rect>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold"><?php echo !empty($countCuti) ? $countCuti : 0; ?></h5>
                                            <p class="mb-0"> Mahasiswa Cuti</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="card features main-features main-features-3 wow p-4">
                                        <div class="bg-img mb-2">
                                            <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128" viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                                <path fill="#FFF" d="M42.2,96H23.6c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C45.1,94.7,43.8,96,42.2,96z"></path>
                                                <rect width="18.7" height="36.8" x="23.6" y="35.8" fill="#4CDBC4"></rect>
                                                <circle cx="32.9" cy="83.9" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="32.9" cy="83.9" r="5" fill="#324A5E"></circle>
                                                <path fill="#FFF" d="M68.8,96H50.2c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C71.6,94.7,70.4,96,68.8,96z"></path>
                                                <rect width="18.7" height="36.8" x="50.1" y="35.8" fill="#FF7058"></rect>
                                                <circle cx="59.5" cy="83.9" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="59.5" cy="83.9" r="5" fill="#324A5E"></circle>
                                                <path fill="#FFF" d="M109,92.7l-18,4.6c-1.5,0.4-3.1-0.5-3.5-2.1L73.2,38.7c-0.4-1.5,0.5-3.1,2.1-3.5l18-4.6   c1.5-0.4,3.1,0.5,3.5,2.1l14.3,56.5C111.5,90.8,110.6,92.4,109,92.7z"></path>
                                                <rect width="18.7" height="36.8" x="80.4" y="36.1" fill="#FFD05B" transform="rotate(-14.193 89.778 54.551)"></rect>
                                                <circle cx="97" cy="83.2" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="97" cy="83.2" r="5" fill="#324A5E"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold"><?php echo !empty($countLulus) ? $countLulus : 0; ?></h5>
                                            <p class="mb-0"> Mahasiswa Lulus </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft p-4">
                                        <div class="bg-img mb-2">
                                            <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128" viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#FFD05B"></circle>
                                                <path fill="#FFF" d="M30,103.8l0-79.7c0-1.8,1.5-3.3,3.3-3.3h50.1l0,11.4c0,1.8,1.5,3.3,3.3,3.3H98l0,68.3   c0,1.8-1.5,3.3-3.3,3.3H33.3C31.5,107.1,30,105.6,30,103.8z"></path>
                                                <path fill="#E6E9EE" d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4H86.6c-1.8,0-3.3-1.5-3.3-3.3L83.3,20.9z"></path>
                                                <path fill="#CED5E0" d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4L83.3,20.9z"></path>
                                                <rect width="54.6" height="2.4" x="36.7" y="50.7" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="58.2" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="65.8" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="73.4" fill="#E6E9EE"></rect>
                                                <rect width="23.5" height="2.4" x="67.8" y="80.9" fill="#84DBFF"></rect>
                                                <rect width="23.5" height="2.4" x="67.8" y="88.5" fill="#84DBFF"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="43.1" fill="#E6E9EE"></rect>
                                                <rect width="29.6" height="2.4" x="36.7" y="35.6" fill="#84DBFF"></rect>
                                                <path fill="#FF7058" d="M41.1,83.3c-4.4,4.4-4.4,11.5,0,15.9s11.5,4.4,15.9,0c4.4-4.4,4.4-11.5,0-15.9   C52.6,78.9,45.5,78.9,41.1,83.3z M41.9,84.1c3.4-3.4,8.7-3.8,12.6-1.3l-1.6,1.6c-3-1.7-6.9-1.3-9.5,1.2c-2.6,2.6-3,6.5-1.2,9.5   l-1.6,1.6C38.1,92.8,38.5,87.5,41.9,84.1z M43.1,94.3c-1.3-2.5-0.9-5.7,1.2-7.7c2.1-2.1,5.2-2.5,7.7-1.2L43.1,94.3z M54.9,88.2   c1.3,2.5,0.9,5.7-1.2,7.7c-2.1,2.1-5.2,2.5-7.7,1.2L54.9,88.2z M56.1,98.3c-3.4,3.4-8.7,3.8-12.6,1.3l1.6-1.6   c3,1.7,6.9,1.3,9.5-1.2c2.6-2.6,3-6.5,1.2-9.5l1.6-1.6C60,89.6,59.5,94.9,56.1,98.3z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold"><?php echo !empty($countRegistrasi) ? $countRegistrasi : 0; ?></h5>
                                            <p class="mb-0"> Mahasiswa Registrasi </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section landing-Features" id="sosmed">
                <div class="container text-center">
                    <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading text-fixed-white">Sosial Media</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="fw-semibold mb-2 text-fixed-white ">Our Sosial Media</h3>
                    <!-- <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-fixed-white op-8 fs-15 mb-3 fw-normal">Some of the reviews our clients gave which brings motivation to work for future projects.</p>
                        </div> -->
                </div>
                <div class="text-start">
                    <div class="justify-content-center">
                        <div class="">
                            <div class="feature-logos mt-sm-5 flex-wrap">
                                <div class="ms-sm-5 ms-2 text-center">
                                    <img src="<?= base_url("assets"); ?>/images/media/landing/web/1.png" alt="image" class="featur-icon">
                                    <h5 class="mt-3 text-fixed-white ">MyUBSI</h5>
                                </div>
                                <div class="ms-sm-5 ms-2 text-center">
                                    <img src="<?= base_url("assets"); ?>/images/media/landing/web/2.png" alt="image" class="featur-icon">
                                    <h5 class="mt-3 text-fixed-white ">Youtube</h5>
                                </div>
                                <div class="ms-sm-5 ms-2 text-center">
                                    <img src="<?= base_url("assets"); ?>/images/media/landing/web/3.png" alt="image" class="featur-icon">
                                    <h5 class="mt-3 text-fixed-white ">Instagram</h5>
                                </div>
                                <div class="ms-sm-5 ms-2 text-center">
                                    <img src="<?= base_url("assets"); ?>/images/media/landing/web/4.png" alt="image" class="featur-icon">
                                    <h5 class="mt-3 text-fixed-white ">X</h5>
                                </div>
                                <div class="ms-sm-5 ms-2 text-center">
                                    <img src="<?= base_url("assets"); ?>/images/media/landing/web/5.png" alt="image" class="featur-icon">
                                    <h5 class="mt-3 text-fixed-white ">Facebook</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
        </div>
        </section>
        <!-- End:: Section-3 -->

        <!-- Start:: Section-9 -->
        <!-- <section class="section section-bg" id="contact">
            <div class="container text-center">
                <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">CONTACT US</span>
                </p>
                <div class="landing-title"></div>
                <h3 class="fw-semibold mb-2">Have any questions ? We would love to hear from you.</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <p class="text-muted fs-15 mb-5 fw-normal">You can contact us anytime regarding any queries or deals,dont hesitate to clear your doubts before trying our product.</p>
                    </div>
                </div>
                <div class="text-start row justify-content-between">
                    <div class="col-lg-4">
                        <div class="card shadow-none">
                            <div class="card-body px-5 py-4">
                                <div class="d-flex mb-3 mt-2">
                                    <div
                                        class="contact-icon border bg-primary-transparent m-0">
                                        <i
                                            class="fe fe-map-pin text-primary fs-17"></i>
                                    </div>
                                    <div class="ms-3 text-start">
                                        <h6 class="mb-1 fw-medium">Main Branch</h6>
                                        <p>San Francisco, CA </p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div
                                        class="contact-icon border bg-danger-transparent">
                                        <i
                                            class="fe fe-mail text-danger fs-17"></i>
                                    </div>
                                    <div class="ms-3 text-start">
                                        <h6 class="mb-1 fw-medium">
                                            Email</h6>
                                        <p>georgeme@abc.com</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div
                                        class="contact-icon border bg-success-transparent">
                                        <i
                                            class="fe fe-headphones text-success fs-17"></i>
                                    </div>
                                    <div class="ms-3 text-start">
                                        <h6 class="mb-1 fw-medium">
                                            Contact</h6>
                                        <p>+125 254
                                            3562 </p>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <div
                                        class="contact-icon border bg-warning-transparent">
                                        <i
                                            class="fe fe-airplay text-warning fs-17"></i>
                                    </div>
                                    <div class="ms-3 text-start">
                                        <h6 class="mb-1 fw-medium">
                                            Working Hours</h6>
                                        <p class="mb-0">Mon -
                                            Fri: 9am - 6pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-none">
                            <div class="card-body px-5 pt-4">
                                <div class="row mt-1">
                                    <div class="col-xl-6">
                                        <div class="form-group ">
                                            <label for="cusName" class="form-label">Name
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                id="cusName" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="cusEmail" class="form-label">Email
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                id="cusEmail"
                                                placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cusMessage" class="form-label">Message <span
                                            class="text-danger">*</span></label>
                                    <textarea rows="4" class="form-control" id="cusMessage"
                                        placeholder="Type your message here..."></textarea>
                                </div>
                                <div class="form-group mb-2 pt-1">
                                    <button class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End:: Section-9 -->
        <div class="form-group mb-2 pt-1">

        </div>

        <!-- Start:: Section-10 -->
        <section class="section landing-footer text-fixed-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="px-4">
                            <p class="fw-semibold mb-3"><a href="index.html"><img src="<?= base_url("assets"); ?>/images/brand-logos/desktop-white.png" alt="" class="logo-img"></a></p>
                            <p class="mb-3 op-6 fw-normal">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam, fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores accusantium aspernatur minus ea incidunt.
                            </p>
                            <div class="input-group">
                                <input type="text" class="form-control bg-transparent text-fixed-white" placeholder="Enter your email"
                                    aria-label="Example text with button addon" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="px-4">
                            <h6 class="fw-semibold mb-3 text-fixed-white">Pages</h6>
                            <ul class="list-unstyled fw-normal landing-footer-list">
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Email</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Profile</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Timeline</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Projects</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Contacts</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="px-4">
                            <h6 class="fw-semibold text-fixed-white">Information</h6>
                            <ul class="list-unstyled fw-normal landing-footer-list">
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Our Team</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Contact US</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">About</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Services</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Blog</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="px-4">
                            <h6 class="fw-semibold text-fixed-white">Contact</h6>
                            <ul class="list-unstyled fw-normal landing-footer-list">
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                </li>
                                <li class="mt-3">
                                    <p class="mb-2 fw-semibold op-8">FOLLOW US ON :</p>
                                    <div class="mb-0">
                                        <div class="btn-list">
                                            <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                                <i class="ri-facebook-line fw-bold"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                                <i class="ri-twitter-x-line fw-bold"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                                <i class="ri-instagram-line fw-bold"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                                <i class="ri-github-line fw-bold"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                                <i class="ri-youtube-line fw-bold"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Section-10 -->

        <div class="text-center landing-main-footer py-3">
            <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a
                    href="javascript:void(0);" class="text-primary fw-semibold"><u>Valex</u></a>.
                Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-primary fw-semibold"><u>
                        Spruko</u>
                </a> All
                rights
                reserved
            </span>
        </div>

    </div>
    <!-- End::app-content -->

    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="<?= base_url("assets"); ?>/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url("assets"); ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Color Picker JS -->
    <script src="<?= base_url("assets"); ?>/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Choices JS -->
    <script src="<?= base_url("assets"); ?>/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Swiper JS -->
    <script src="<?= base_url("assets"); ?>/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="<?= base_url("assets"); ?>/js/defaultmenu.min.js"></script>

    <!-- Internal Landing JS -->
    <script src="<?= base_url("assets"); ?>/js/landing.js"></script>

    <!-- Node Waves JS-->
    <script src="<?= base_url("assets"); ?>/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="<?= base_url("assets"); ?>/js/sticky.js"></script>

</body>

</html>
