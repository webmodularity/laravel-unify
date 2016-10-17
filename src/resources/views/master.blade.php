<?php
use WebModularity\LaravelUnify\Helpers\UnifyHelper;
?>
<!DOCTYPE html>
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