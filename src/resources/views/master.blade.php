<?php
use WebModularity\LaravelUnify\UnifyHelper;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title', config('unify.title'))</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', config('unify.description'))">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    @stack('fonts')

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/style.css') }}">
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/headers/' . UnifyHelper::getHeaderCssFile()) }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/footers/' . UnifyHelper::getFooterCssFile()) }}">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/sliding-panel/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/parallax-slider/css/parallax-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/theme-colors/' . UnifyHelper::getThemeColorCssFile()) }}">

    @if(UnifyHelper::isDark())
        <link rel="stylesheet" href="{{ asset('vendor/unify/css/theme-skins/dark.css') }}">
    @endif

    @if(UnifyHelper::hasCustomCss())
        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif

    @stack('css')
</head>
@yield('body', '<body>')

    <div class="wrapper">
        @include(UnifyHelper::getHeaderInclude())

        @include('unify::partials.promo_block')

        @yield('content')

        @include('unify::partials.footers.footer')
    </div>

@include('unify::partials.sliding_panel')

<!-- JS Global Compulsory -->
<script src="{{ asset('vendor/unify/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script src="{{ asset('vendor/unify/plugins/back-to-top.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/smoothScroll.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/jquery.parallax.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/backstretch/backstretch-ini.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/wow-animations/js/wow.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/sliding-panel/jquery.sliding-panel.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/skrollr/skrollr-ini.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
<!-- JS Customization -->
    @if(UnifyHelper::hasCustomJs())
        <script src="{{ asset('js/custom.js') }}"></script>
    @endif
<!-- JS Page Level -->
<script src="{{ asset('vendor/unify/js/app.js') }}"></script>
<script src="{{ asset('vendor/unify/js/plugins/fancy-box.js') }}"></script>
<script src="{{ asset('vendor/unify/js/plugins/owl-carousel.js') }}"></script>
<script src="{{ asset('vendor/unify/js/plugins/style-switcher.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        new WOW().init();
        App.initParallaxBg();
        FancyBox.initFancybox();
        OwlCarousel.initOwlCarousel();
        $('#cbp-lightbox').cubeportfolio({});
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>