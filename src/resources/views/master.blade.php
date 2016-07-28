<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
@inject('unify', 'WebModularity\LaravelUnify\Unify')
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
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/headers/' . $unify->getHeaderCssFile()) }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/footers/' . $unify->getFooterCssFile()) }}">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="vendor/unify/plugins/animate.css">
    <link rel="stylesheet" href="vendor/unify/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="vendor/unify/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/unify/plugins/sliding-panel/style.css">
    <link rel="stylesheet" href="vendor/unify/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="vendor/unify/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    <link rel="stylesheet" href="vendor/unify/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="vendor/unify/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="vendor/unify/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <!-- CSS Theme -->
    <link rel="stylesheet" href="vendor/unify/css/theme-colors/{{ $unify->getThemeColorCssFile() }}">

    @if($unify->isDark())
        <link rel="stylesheet" href="vendor/unify/css/theme-skins/dark.css">
    @endif

    @if($unify->hasCustomCss())
        <!-- CSS Customization -->
        <link rel="stylesheet" href="css/custom.css">
    @endif

    @stack('css')
</head>
@yield('body', '<body>')
    <div class="wrapper">
        @include('partials.header')
    </div>
</body>
</html>