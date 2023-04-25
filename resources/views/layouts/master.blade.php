<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @stack('head')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PSH4SN2');</script>
    <!-- End Google Tag Manager -->


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5545822766526186" crossorigin="anonymous"></script>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @isset($title)
            {{ $title }}
        @endisset

    </title>
        <meta name="keywords" content="@yield('meta_keywords','Financial News and tips. We provide breaking coverage for the Financial Topics!')">
        <meta name="description" content="@yield('meta_description','Financial Tips and News')">
        <meta property="og:image" content="@yield('meta_image','/assets/media/blog/author-1.png')">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="twitter:card" content="summary"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="FiscalBulletin" />
        <meta property="og:description" content="Financial News and tips. We provide breaking coverage for the Financial Topics!" />
        <meta property="og:url" content="https://fiscalbulletin.com/" />
        <meta property="og:site_name" content="FiscalBulletin" />



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/media/favicon.ico') }}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/media/apple-touch-icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/green-audio-player.min.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">


    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>

</head>

<body class="sticky-header main-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSH4SN2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>
    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        @include("partials.header")

        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        @yield('content')

        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        @include("partials.footer")


    </div>

    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/tilt.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/green-audio-player.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.nav.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
