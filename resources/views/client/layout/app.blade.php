<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title', 'DML Worldwide Express Bangladesh Ltd. - International Courier Services') </title>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description', 'DML Worldwide Express Bangladesh Ltd. offers reliable international courier, cargo, freight forwarding, and warehousing services. Ensure timely delivery of your goods with our specialized services.')">
    <meta name="keywords" content="@yield('keywords', 'international courier, global freight forwarding, worldwide cargo services, express delivery worldwide, international shipping solutions, global warehousing services, overseas package delivery, courier and logistics services, international parcel delivery, freight and cargo logistics')">
    <meta name="author" content="DML Worldwide Express">

    <!-- Open Graph Meta Tags for Facebook -->
    <meta property="og:title" content="@yield('title', 'DML Worldwide Express Bangladesh Ltd. - International Courier Services')">
    <meta property="og:description" content="@yield('description', 'Providing reliable international courier, cargo, freight forwarding, and warehousing services. Ensure timely delivery of your goods with our specialized services.')">
    <meta property="og:image" content="assets/imgs/template/logo.png">
    <meta property="og:url" content="https://www.dml.com.bd">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DML Worldwide Express">

    <!-- Twitter Card Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'DML Worldwide Express Bangladesh Ltd. - International Courier Services')">
    <meta name="twitter:description" content="@yield('description', 'Providing reliable international courier, cargo, freight forwarding, and warehousing services. Ensure timely delivery of your goods with our specialized services.')">
    <meta name="twitter:image" content="assets/imgs/template/logo.png">
    <meta name="twitter:site" content="@DMLExpress">
    <meta name="twitter:creator" content="@DMLExpress">

    <!-- LinkedIn Meta Tags -->
    <meta property="og:image:alt" content="DML Worldwide Express Logo">
    <meta name="linkedin:site" content="https://www.linkedin.com/company/dmlexpressbd/">

    <!-- Favicon and Stylesheets -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/imgs/template/logo.png') }}">
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="google-site-verification" content="YWCsjbS7Z3JctQp_ktZFv1JBHPNavvLkihpeRQxIjqY" />
    <style>
        .active {
            border-bottom: 2px solid #fbb72c;
            color: #fbb72c;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin: 16px auto;
            display: block;
        }
    </style>
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="flip-square"></div>
            </div>
        </div>
    </div>

    @include('client.layout.header')
    @include('client.layout.mobile')

    <main class="main">
        @yield('content')
    </main>

    <a href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd."
        class="float" target="_blank">
        <i class="bi bi-whatsapp my-float"></i>
    </a>

    @include('client.layout.footer')

    <script src="{{ asset('client/js/vendors/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('client/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('client/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('client/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/isotope.js') }}"></script>
    {{-- <script src="{{ asset('client/js/vendors/scrollup.js') }}"></script> --}}
    <script src="{{ asset('client/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('client/js/vendors/slider.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('client/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('client/js/vendors/jquery.countdown.min.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('client/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('client/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('client/js/main28b5.js?v=2.0.0') }}"></script>

    @stack('scripts')
</body>


</html>
