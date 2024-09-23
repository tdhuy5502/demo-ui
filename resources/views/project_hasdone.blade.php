@extends('index')
@section('customizeCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/bt.css') }}">
@endsection
<div class="bt-page">
    <div class="container text-start py-6 mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="text-uppercase">Projects We Have Done</h6>
                <h2 class="font-weight-bold">We are Creating sustainable society, for everyone and forever.</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/mission40K.png') }}" class="card-img-top" alt="Mission 40K: Tree plantation">
                    <div class="card-body card-img-overlay p-5">
                        <h5 class="card-title">Mission 40K: Tree plantation</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/weekly_cleann.png') }}" class="card-img-top" alt="Weekly cleanliness program in city">
                    <div class="card-body card-img-overlay p-5">
                        <h5 class="card-title">Weekly cleanliness program in city</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/wild_safety.png') }}" class="card-img-top" alt="Wildlife safety program 2021">
                    <div class="card-body card-img-overlay p-5">
                        <h5 class="card-title">Wildlife safety program 2021</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>