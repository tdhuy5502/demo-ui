@extends('index')
@section('customizeCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
@endsection
<header>
    <div class="container py-3">
        <div class="row align-items-center">
            
            <div class="col-6 col-sm-1">
                <span class="logo">Finsweet</span>
            </div>
    
            <div class="col-7 col-sm-11">
                <nav class="nav justify-content-end ml-5">
                    <a class="nav-link home-link" href="">Home</a>
                    <a class="nav-link nav-items" href="{{ route('home.about_us') }}">About us</a>
                    <a class="nav-link nav-items" href="{{ route('home.whatwedo') }}">What We Do</a>
                    <a class="nav-link nav-items" href="{{ route('home.project') }}">Media</a>
                    <a class="nav-link nav-items" href="{{ route('home.contact') }}">Contact</a>
                    <a class="btn btn-dark donate-btn" href="#">Donate</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-sm-5 card-img-overlay">
                <div class="">
                    <h1 class="header-text">Save the environment today for a better tomorrow</h1>
                </div>
                <div class="row row-cols-sm-4 action-row">
                    <div class="col-sm-6">
                        <a href="" class="btn btn-wwd">What we do</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="" class="play-text">
                            <i class="fas fa-play"></i> Play Video
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="background img-fluid">
            <img src="{{ asset('assets/BG Image.png') }}" alt="Background Image" class="img-fluid w-100">
        </div>
    </div>
</header>