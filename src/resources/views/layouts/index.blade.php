@extends('unify::layouts.master')

@push('css')
{{ Unify::printCss(['parallax-slider', 'owl-carousel']) }}
@endpush()

@section('content')
Default Page
@endsection()

@push('js')
{{ Unify::printJs(['parallax-slider', 'owl-carousel']) }}
@endpush()

@push('jquery-ready')
App.init();
@endpush