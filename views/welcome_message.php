
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-theme-mode="light" data-header-styles="gradient" data-menu-styles="gradient"  style="--primary-rgb: 80, 198, 118;"data-toggled="open" loader="enable" data-nav-styles="menu-click" >

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ruang Mahasiswa </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard template,admin panel html,bootstrap dashboard,admin dashboard,html template,template dashboard html,html css,bootstrap 5 admin template,bootstrap admin template,bootstrap 5 dashboard,admin panel html template,dashboard template bootstrap,admin dashboard html template,bootstrap admin panel,simple html template,admin dashboard bootstrap">
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url("assets");?>/images/logo_ubsi.png" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="<?= base_url("assets");?>/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="<?= base_url("assets");?>/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url("assets");?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="<?= base_url("assets");?>/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="<?= base_url("assets");?>/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="<?= base_url("assets");?>/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="<?= base_url("assets");?>/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?= base_url("assets");?>/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?= base_url("assets");?>/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?= base_url("assets");?>/libs/choices.js/public/assets/styles/choices.min.css">

<!-- Jsvector Maps -->
<link rel="stylesheet" href="<?= base_url("assets");?>/libs/jsvectormap/css/jsvectormap.min.css">

</head>

<body><script id="__bs_script__">//<![CDATA[
  (function() {
    try {
      var script = document.createElement('script');
      if ('async') {
        script.async = true;
      }
      script.src = '/browser-sync/browser-sync-client.js?v=2.29.3'.replace("HOST", location.hostname);
      if (document.body) {
        document.body.appendChild(script);
      } else if (document.head) {
        document.head.appendChild(script);
      }
    } catch (e) {
      console.error("Browsersync: could not append script tag", e);
    }
  })()
//]]></script>


    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
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
                        <div class="row switcher-style gx-0">
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
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
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
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer gap-1"> 
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger flex-fill">Reset</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <!-- Loader -->
    <div id="loader" >
        <img src="<?= base_url("assets");?>/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"  >
                            <a href="<?php echo base_url('Welcome');?>" class="header-logo" style="width:1500px;">
                                <img src="<?= base_url("assets");?>/images/SIAKAD.png" alt="logo" class="desktop-logo">
                                <img src="<?= base_url("assets");?>/images/SIAKAD.png" alt="logo" class="toggle-logo"  >
                                <img src="<?= base_url("assets");?>/images/SIAKAD.png" alt="logo" class="desktop-white"  >
                                <img src="<?= base_url("assets");?>/images/SIAKAD.png" alt="logo" class="toggle-white"  >
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->
                </div>
                <div class="marquee-container">
                        <div class="marquee">
                            <div class="marquee-content">
                            <?php foreach($dat as $p):?>
                                <span><?= $p->judul ?> | <?= $p->isi_pengumuman ?></span>
                            <?php endforeach; ?>
                               
                            </div>
                        </div>
                        </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element headerProfile-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <div class="btn-group">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" aria-expanded="false">
                                                Menu
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                            <li><a class="dropdown-item d-flex" href="<?php echo base_url('Welcome');?>"><i class="bx bx-user-circle fs-18 me-2 op-7"></i>Login mahasiswa</a></li>
                            <li><a class="dropdown-item d-flex" href="<?php echo base_url('Welcome/homeceknim');?>"><i class="bx bx-cog fs-18 me-2 op-7"></i>Cek Nim Baru/Surat Keluar/Surat DO </a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="<?php echo base_url('Welcome/aktivasi_mahasiswa');?>"><i class="bx bxs-inbox fs-18 me-2 op-7"></i>Aktivasi Mahasiswa Keluar</a></li>
                                            </ul>
                                        </div>
                           
                           
                        
                    </div>  
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element" style="visibility: hidden;">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

        

       
        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
              

                <!--konten -->
                <style>
 .marquee-container {
    width: 50%; /* Reduced width for a smaller box */
    overflow: hidden;
    background-color: rgba(144, 238, 144, 0.5); /* Light green background with 50% transparency */
    padding: 5px 0; /* Reduced padding for a smaller box */
    position: relative;
    margin: 0 auto; /* Center the box horizontally */
    border-radius: 10px; /* Rounded corners */
}

.marquee {
    display: flex;
    white-space: nowrap;
    animation: marquee 15s linear infinite;
}

.marquee-content span {
    padding: 0 2em;
    display: inline-block;
    color: #fff; /* White text */
}

/* Animation */
@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}



.rating-scroll {
    width: 100%;
    min-width: 300px;
    max-width: 100%;
    box-sizing: border-box;
    overflow-y: auto;
    max-height: 400px;
}

.rating-scroll .border-bottom {
    border-bottom: 1px solid #ddd; /* Adjust as needed */
}

.rating-scroll .media {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.rating-scroll .media-body {
    flex: 1;
}

.rating-scroll .media-body h6 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.rating-scroll .media-body p {
    font-size: 14px;
    color: #9DA5AB;
    margin-bottom: 0;
}
.icon-container {
    display: grid;
    grid-template-columns: repeat(2, auto);
    gap: 20px;
    justify-content: center;
    max-width: 500px;
    margin: 0 auto;
    padding: 10px;
}

/* Hide FontAwesome icons on PC view */
.mobile-view {
    display: none;
}

/* Hide images on mobile view */
.pc-view {
    display: block;
    width: 100%;
    height: auto;
    max-width: 200px;
    justify-self: center;
}
.mobile-icon-container {
    gap: 10px;
}


/* Media queries for mobile view */
@media (max-width: 600px) {
    .mobile-view {
        display: inline-block;
        font-size: 2rem;
    }
    .mobile-icon-container {
        display: flex; /* Flexbox for horizontal alignment */
        justify-content: center;
        align-items: center;
    }

    .pc-view {
        display: none;
    }

    footer p {
        font-size: 0.8rem;
    }
}
@media (max-width: 768px) {
    .rating-scroll {
        width: 100% !important;
        min-width: unset !important;
    }


    /* Container for the login form */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Login card styling */
.login-card {
    width: 300px;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
}

/* Input fields */
.login-card input[type="text"],
.login-card input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 1.2rem;
    border: 1px solid teal;
    outline: none;
    margin-bottom: 15px;
}

/* Button styling */
.login-card button {
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background-color: teal;
    color: #fff;
    transition: 0.5s ease-in;
    cursor: pointer;
}

.login-card button:hover {
    background-color: rgb(94, 40, 40);
}


/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
    .login-container {
        flex-direction: column;
    }
    .login-card {
        width: 100%;
    }
}
@media (max-width: 768px) {

    footer > div > div {
        flex: none;
        width: 100%;
        text-align: center;
        padding: 10px 0;
    }
    footer p {
        font-size: 12px;
        order: 2;
    }
    footer div:last-child {
        order: 1;
    }
    footer i {
        margin: 0 5px;
    }
}
.logo-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    justify-content: center;
    align-items: center;
    max-width: 300px;
    margin: 0 auto;
}

.logo {
    width: 100%;
    height: auto;
    object-fit: contain;
}


}

                </style>
                <!-- Start::row-1 -->
                <div class="row">
    <div class="col-xxl-9 col-xl-9 col-lg-12 col-md-12">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="mt-4">
                    <h1 class="font-weight-semibold text-dark">Selamat Datang Di Siakad Student</h1>
                   
                    </div>
                        <h4 class="text-dark font-weight-bold mt-4">Pengumuman :</h4>
                        <div class="rating-scroll">
                        <?php foreach($data as $date):?>
                            <div class="px-3 py-3 border-bottom">
                                <div class="media mt-0">
                                    <div class="media-body">
                                    <a href="<?= base_url('assets/uploads/'. $date->file)?>" target="_blank"> 
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-0 fw-medium fs-14"><?= $date->judul ?></h6>
                                            <span class="fs-14 ms-auto"><?=date('Y-m-d', strtotime( $date->tgl_update)) ?></span>
                                        </div>
                                        <p class="fs-12 text-muted mb-0"></p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 start-0"></div>
                </div>
                <!-- <div class="btn-group dropup">
                                            <button type="button" class="btn btn-teal dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Media sosial
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fab fa-youtube" style="margin-right:10px;"></i> Youtube </a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fab fa-instagram" style="margin-right:10px;"></i> Instagram </a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropend">
                                            <button type="button" class="btn btn-danger dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Unduh Aplikasi
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);"> <i class="fab fa-google-play" style="margin-right:10px;"></i> Playstore</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fab fa-app-store" style="margin-right:10px;"></i> Appstore</a></li>
                                            </ul>
                                        </div> -->
                </div>
               
    <div class="col-xxl-3 col-xl-3 col-lg-12 col-md-12">
        
    <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Login 
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <div class="prism-toggle">
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                <form method="post" action="<?=  base_url('Auth/loginmhs');?>">
                                    <div class="mb-3">
                                        <label for="form-text1" class="form-label fs-14 text-dark">Enter NIM</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-user-line"></i></div>
                                            <input type="text" class="form-control" id="form-text1"name="username" placeholder="Enter your NIM">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-password1" class="form-label fs-14 text-dark">Enter
                                            Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                            <input type="password" class="form-control" id="form-password1" name="password"placeholder="Enter your password">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-password1" class="form-label fs-14 text-dark">Captcha : <?php echo $captcha_question; ?></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                            <input type="text" class="form-control" id="form-password1"name="captcha_answer" placeholder="Enter answer">
                                        </div>
                                        <div class="input-group">
                                           
                                            <input  class="form-control" name="correct_captcha_answer" id="correct_captcha_answer"type="hidden" required=""  value="<?php echo  $correct_captcha_answer; ?>">
                                        </div>
                                    </div>
                                   
                                    <button class="btn btn-success-gradient rounded-pill btn-wave w-100" type="submit">Submit</button>
                                    <br>
                                    <a class="btn btn-success-gradient rounded-pill btn-wave w-100" style="margin-top:4px;" href="<?php echo base_url('Welcome/homeceknim');?>" target="_blank">Cek Nim Baru/Surat Keluar/Surat DO</a>

                                    <br>
                                    <a class="btn btn-success-gradient rounded-pill btn-wave w-100" style="margin-top:4px;" href="<?php echo base_url('Welcome/aktivasi_mahasiswa');?>" target="_blank">SubmitAktivasi Mahasiswa Keluar</a>

                                    
                                </div>
                                </form>
                                <div class="card-footer d-none border-top-0">

                                </div>
                                
                            </div>
                            <div style="display: grid; grid-template-columns: repeat(2, auto); gap: 20px; justify-content: center; max-width: 500px; margin: 0 auto;padding: 10px;">
                                <img src="<?= base_url('assets');?>/images/appstore.png" alt="App Store" style="width: 100%; height: auto; max-width: 200px; justify-self: center;" class="pc-view">
                                <img src="<?= base_url('assets');?>/images/youtube.png" alt="YouTube" style="width: 75px; height: auto; justify-self: center;" class="pc-view">
                                <img src="<?= base_url('assets');?>/images/playstore.png" alt="Google Play" style="width: 100%; height: auto; max-width: 200px; justify-self: center;" class="pc-view">
                                <img src="<?= base_url('assets');?>/images/instagram.png" alt="Instagram" style="width: 75px; height: auto; justify-self: center;" class="pc-view">

                                
</div>

    </div>
    
</div>

                <!--End::row-1 -->
                
                <!-- /konten -->
                




               
            </div>
        </div>
        <!-- End::app-content -->

        <!-- Footer Start -->
        <footer class="mt-auto py-3" style="background: linear-gradient(to bottom, #2ECC71, #1ABC9C);">
        <div class="mobile-icon-container">
        <i class="fab fa-apple mobile-view"></i>
        <i class="fab fa-youtube mobile-view"></i>
        <i class="fab fa-google-play mobile-view"></i>
        <i class="fab fa-instagram mobile-view"></i>
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="flex: 1; text-align: center; padding-left: 20px;padding-bottom: 3px;">
            <p style="margin: 0;">© 2012 - 2024 SISFO AKADEMIK MAHASISWA - UNIVERSITAS BINA SARANA INFORMATIKA Powered By <strong>BTI-BSI</strong></p>
        </div>
    </div>
</footer>


        <!-- Footer End -->

    </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="<?= base_url("assets");?>/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url("assets");?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="<?= base_url("assets");?>/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="<?= base_url("assets");?>/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="<?= base_url("assets");?>/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="<?= base_url("assets");?>/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url("assets");?>/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="<?= base_url("assets");?>/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    
    <!-- Apex Charts JS -->
    <script src="<?= base_url("assets");?>/libs/apexcharts/apexcharts.min.js"></script>
    
    <!-- JSVector Maps JS -->
    <script src="<?= base_url("assets");?>/libs/jsvectormap/js/jsvectormap.min.js"></script>
    
    <!-- JSVector Maps MapsJS -->
    <script src="<?= base_url("assets");?>/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="<?= base_url("assets");?>/js/us-merc-en.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="<?= base_url("assets");?>/js/index.js"></script>
    
    
    <!-- Custom-Switcher JS -->
    <script src="<?= base_url("assets");?>/js/custom-switcher.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url("assets");?>/js/custom.js"></script>

</body>

</html>
