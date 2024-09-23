@extends('index')
@section('customizeCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/content.css') }}">
@endsection
<section class="about-us">
    <div class="container">
        <div class="text-content">
            <h4>Know About Us</h4>
            <h1>We help nature smile and survive everywhere</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            <p>Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.</p>
            <button class="learn-more-btn">Learn more</button>
        </div>
        <div class="image-content">
            <div class="image-wrapper">
                <img src="{{ asset('assets/BG.png') }}" alt="Children playing">
                <div class="play-button"></div>
            </div>
        </div>
    </div>
</section>

<section class="supporters">
    <h4 class="text-dark justify-content-start">Our Supporters</h4>
    <div class="supporter-logos">
        <img src="{{ asset('assets/Logo1.svg') }}" alt="Supporter Logo 1">
        <img src="{{ asset('assets/Logo2.svg') }}" alt="Supporter Logo 2">
        <img src="{{ asset('assets/Logo3.svg') }}" alt="Supporter Logo 3">
        <img src="{{ asset('assets/Logo4.svg') }}" alt="Supporter Logo 4">
        <img src="{{ asset('assets/Logo5.svg') }}" alt="Supporter Logo 5">
    </div>
</section>

