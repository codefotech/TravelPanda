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
    <link rel="icon" type="image/x-icon" href="{{ asset('assets-2/img/favicon/favicon.ico') }}"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets-2/css/public-sans.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-2/css/boxicons.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets-2/vendor/css/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('assets-2/vendor/css/theme-default.css') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('assets-2/css/demo.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-2/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-1/css/style.css') }}">
    <style>
        /*.menu-vertical {*/
        /*    position: fixed;*/
        /*    top: 100px;*/
        /*    bottom: 0;*/
        /*    height: calc(100vh - 3rem);*/
        /*    overflow-y: auto;*/
        /*}*/

        /*.tab-content {*/
        /*    margin-left: 25%;*/
        /*    height: 100vh;*/
        /*    overflow-y: auto;*/
        /*    padding: 20px;*/
        /*}*/

        /*.menu-inner {*/
        /*    height: calc(100vh - 3rem);*/
        /*}*/
    </style>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets-2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets-2/vendor/libs/apex-charts/apex-charts.css') }}"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets-2/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets-2/js/config.js') }}"></script>
    @yield('header-resources')
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">

    <div class="layout-container">
        @include('layouts.navigation.sidebar')

        <div class="layout-page">
            @include('layouts.navigation.navbar')
            <div class="content-wrapper">
                @yield('body')
                @include('layouts.footer')
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

</div>
<!-- / Layout wrapper -->

<script src="{{ asset('assets-2/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets-2/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets-2/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets-2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets-2/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets-2/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets-2/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets-2/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<!--    <script async defer src="https://buttons.github.io/buttons.js"></script>-->

@yield('footer-script')
</body>
</html>
