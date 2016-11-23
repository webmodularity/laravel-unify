<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
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
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/headers/' . Unify::getHeaderCssFile()) }}">
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/footers/' . Unify::getFooterCssFile()) }}">
    <!-- CSS Implementing Plugins -->
    @stack('css')
    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/theme-colors/' . Unify::getThemeColorCssFile()) }}">
    @if(Unify::isDark())
    <link rel="stylesheet" href="{{ asset('vendor/unify/css/theme-skins/dark.css') }}">
    @endif
    @if(Unify::hasCustomCss())
    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif
</head>
@yield('body', '<body>')
<div class="wrapper">
    @include(Unify::getHeaderInclude())
    @yield('content')
    @include(Unify::getFooterInclude())
</div>
<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/smoothScroll.js') }}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{ asset('vendor/unify/js/app.js') }}"></script>
@push('js')
<!-- JS Customization -->
@if(Unify::hasCustomJs())
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endif
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();

        @push('jquery-ready')
    });
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/respond.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/html5shiv.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/unify/plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->
</body>
</html>