@extends('unify::layouts.master')

@push('css')
{{ Unify::printCss(['parallax-slider', 'owl-carousel']) }}
@endpush

@push('js')
{{ Unify::printJs(['parallax-slider', 'owl-carousel']) }}
@endpush

@push('jquery-ready')

    //Owl Clients v1
    jQuery(".owl-clients-v1").owlCarousel({
    items : 7,
    autoPlay : 5000,
    itemsDesktop : [1000,5],
    itemsDesktopSmall : [900,4],
    itemsTablet: [600,3],
    itemsMobile : [300,2]
    });

    $('#da-slider').cslider({
    current     : 0,
    // index of current slide

    bgincrement : 50,
    // increment the background position
    // (parallax effect) when sliding
    autoplay    : false,
    // slideshow on / off
    interval    : 4000
    // time between transitions
    });

@endpush

@section('content')
    Default Page
@endsection()