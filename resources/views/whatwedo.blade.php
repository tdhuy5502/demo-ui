@extends('index')
@section('customizeCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/whatwedo.css') }}">
@endsection
<section class="what-we-do mt-5">
    <div class="container p-5">
        <div class="content">
            <h3>What we do</h3>
            <h1>We care for earth, care for the coming birth</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            
            <div class="activities">
                <div class="activity">
                    <div class="icon">
                        <img src="{{ asset('assets/Icon_health.png') }}" alt="City Icon"> <!-- Replace with your image -->
                    </div>
                    <div class="activity-details">
                        <h4>Build Healthy Cities</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                    </div>
                </div>
                
                <div class="activity">
                    <div class="icon">
                        <img src="{{ asset('assets/Icon_tree_plant.png') }}" alt="Tree Icon"> <!-- Replace with your image -->
                    </div>
                    <div class="activity-details">
                        <h4>Tree Plantation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                    </div>
                </div>

                <div class="activity">
                    <div class="icon">
                        <img src="{{ asset('assets/Icon_protect_land.png') }}" alt="Water Icon"> <!-- Replace with your image -->
                    </div>
                    <div class="activity-details">
                        <h4>Protect Land and Water</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                    </div>
                </div>

                <div class="activity">
                    <div class="icon">
                        <img src="{{ asset('assets/Icon_animal.png') }}" alt="Animal Icon"> <!-- Replace with your image -->
                    </div>
                    <div class="activity-details">
                        <h4>Animal Safety</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('assets/whatwedo_img.png') }}" alt="Man with Dog"> <!-- Replace with your image -->
        </div>
    </div>
</section>