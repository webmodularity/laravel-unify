<?php
use WebModularity\LaravelUnify\Helpers\UnifyHelper;
?>
<head>
    <title>@yield('title', config('unify.title', 'Page Title'))</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', config('unify.description', ''))">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    @stack('fonts')
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/headers/' . UnifyHelper::getHeaderCssFile()) }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/footers/' . UnifyHelper::getFooterCssFile()) }}">
    <!-- CSS Implementing Plugins -->
    @if(UnifyHelper::hasFeature('cube-portfolio'))
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
    @endif()
    @if(UnifyHelper::hasFeature('parallax-slider'))
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/parallax-slider/css/parallax-slider.css') }}">
    @endif()
    @if(UnifyHelper::hasFeature('fancybox'))
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/fancybox/source/jquery.fancybox.css') }}">
    @endif()
    @if(UnifyHelper::hasFeature('owl-carousel'))
    <link rel="stylesheet" href="{{ asset('vendor/unify/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    @endif()
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