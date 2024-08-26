<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/remixicon.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dark-mode.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <!-- Title -->
    <title><?= APP_NAME ?> | <?= $title ?></title>
</head>

<body>

    <?= $this->include('components/preloader'); ?>

    <?= $this->include('layouts/header'); ?>

    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layouts/footer'); ?>

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="fa-solid fa-chevron-up"></i>
        <i class="fa-solid fa-chevron-up"></i>
    </div>

    <!-- End Go Top Area -->

    <!-- Links of JS File -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/meanmenu.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/appear.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/form-validator.min.js"></script>
    <script src="/assets/js/contact-form-script.js"></script>
    <script src="/assets/js/ajaxchimp.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>