<?php
use WebModularity\LaravelUnify\Helpers\UnifyHelper;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
@include('unify::partials.html.head')
@yield('body', '<body>')
<div class="wrapper">
    @include(UnifyHelper::getHeaderInclude())
    @yield('content')
    @include(UnifyHelper::getFooterInclude())
</div>
@include('unify::partials.html.script')
</body>
</html>