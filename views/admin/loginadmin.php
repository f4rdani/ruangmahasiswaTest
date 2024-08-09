<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Valex - Bootstrap 5 Premium Admin & Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets')?>/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="<?= base_url('assets')?>/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url('assets')?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="<?= base_url('assets')?>/css/styles.min.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="<?= base_url('assets')?>/css/icons.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid custom-page">
        <div class="row bg-white">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
                <div class="row w-100 mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
                        <img src="<?= base_url('assets')?>/images/media/pngs/5.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex">
                                        <a href="" class="header-logo"><img src="<?= base_url('assets')?>/images/brand-logos/desktop-logo.png" class="desktop-logo ht-40" alt="logo">
                                            <img src="<?= base_url('assets')?>/images/brand-logos/desktop-white.png" class="desktop-white ht-40" alt="logo">
                                        </a>
                                    </div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h3>Welcome back!</h3>
                                            <h6 class="fw-medium mb-4 fs-17">Please sign in to continue.</h6>
                                            <?= $this->session->flashdata('message'); ?>
                                            <form method="post" action="<?= base_url('Auth'); ?>">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Username</label>
                                                    <input class="form-control" placeholder="Enter your Username" name="username" type="text">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control" placeholder="Enter your password" name="password" type="password">
                                                </div>
                                                <button class="btn btn-primary btn-block w-100" type="submit">Sign In</button>
                                            </form>
                                            <div class="main-signin-footer mt-5">
                                                <p class="mb-1"><a href="">Forgot password?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets')?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="<?= base_url('assets')?>/js/show-password.js"></script>

</body>
</html>
