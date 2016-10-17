<?php
use WebModularity\LaravelUnify\Helpers\UnifyHelper;
?>
<!-- JS Global Compulsory -->
<script src="{{ asset('vendor/unify/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/back-to-top.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/smoothScroll.js') }}"></script>
<!-- JS Implementing Plugins -->
@if(UnifyHelper::hasFeature('parallax'))
<script src="{{ asset('vendor/unify/plugins/jquery.parallax.js') }}"></script>
@endif()
@if(UnifyHelper::hasFeature('wow-animations'))
<script src="{{ asset('vendor/unify/plugins/wow-animations/js/wow.min.js') }}"></script>
@endif()
@if(UnifyHelper::hasFeature('cube-portfolio'))
<script src="{{ asset('vendor/unify/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
@endif()
@if(UnifyHelper::hasFeature('fancybox'))
<script src="{{ asset('vendor/unify/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
@endif()
@if(UnifyHelper::hasFeature('owl-carousel'))
<script src="{{ asset('vendor/unify/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
@endif()
<!-- JS Customization -->
@if(UnifyHelper::hasCustomJs())
<script src="{{ asset('js/custom.js') }}"></script>
@endif
<!-- JS Page Level -->
<script src="{{ asset('vendor/unify/js/app.js') }}"></script>
@if(UnifyHelper::hasFeature('fancybox'))
<script src="{{ asset('vendor/unify/js/plugins/fancy-box.js') }}"></script>
@endif()
@if(UnifyHelper::hasFeature('owl-carousel'))
<script src="{{ asset('vendor/unify/js/plugins/owl-carousel.js') }}"></script>
@endif()
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        @if(UnifyHelper::hasFeature('wow-animations'))
        new WOW().init();
        @endif()
        @if(UnifyHelper::hasFeature('parallax'))
        App.initParallaxBg();
        @endif()
        @if(UnifyHelper::hasFeature('fancybox'))
        FancyBox.initFancybox();
        @endif()
        @if(UnifyHelper::hasFeature('owl-carousel'))
        OwlCarousel.initOwlCarousel();
        @endif()
        @if(UnifyHelper::hasFeature('cube-portfolio'))
        $('#cbp-lightbox').cubeportfolio({});
        @endif()
    });
</script>
<!--[if lt IE 9]>
<script src="{{ asset('vendor/unify/plugins/respond.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/html5shiv.js') }}"></script>
<script src="{{ asset('vendor/unify/plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->