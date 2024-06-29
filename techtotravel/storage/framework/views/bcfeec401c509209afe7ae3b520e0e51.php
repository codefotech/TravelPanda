<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard - TechToTravel</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets-2/img/favicon/favicon.ico')); ?>"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/css/public-sans.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/css/boxicons.css')); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/vendor/css/core.css')); ?>" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/vendor/css/theme-default.css')); ?>"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/css/demo.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/css/custom.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-1/css/style.css')); ?>">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets-2/vendor/libs/apex-charts/apex-charts.css')); ?>"/>

    <!-- Page CSS -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Helpers -->
    <script src="<?php echo e(asset('assets-2/vendor/js/helpers.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-2/js/config.js')); ?>"></script>






    <script src="<?php echo e(asset('assets-1/js/others/axios.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-1/js/others/config.js')); ?>"></script>


    <?php echo $__env->yieldContent('header-resources'); ?>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">

    <div class="layout-container">
        <?php echo $__env->make('layouts.navigation.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="layout-page">
            <?php echo $__env->make('layouts.navigation.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('body'); ?>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

</div>
<!-- / Layout wrapper -->

<script src="<?php echo e(asset('assets-2/vendor/libs/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('assets-2/vendor/libs/popper/popper.js')); ?>"></script>
<script src="<?php echo e(asset('assets-2/vendor/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('assets-2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(asset('assets-2/vendor/js/menu.js')); ?>"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo e(asset('assets-2/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('assets-2/js/main.js')); ?>"></script>

<!-- Page JS -->
<script src="<?php echo e(asset('assets-2/js/dashboards-analytics.js')); ?>"></script>



<?php echo $__env->yieldContent('footer-script'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\TechToTravel\techtotravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>