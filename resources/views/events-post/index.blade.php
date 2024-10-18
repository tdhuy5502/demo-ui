<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/events.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <style>
        
    </style>
</head>
<body>

<!-- Navbar -->
@include('components.navbar')

<section class="hero-section">
    <div class="container col-md-7 py-5">
        <h1 class="fw-bold mt-5">{{ $event->name ?? 'Say no to using plastic and save Earth' }}</h1>
    <div class="row mt-5">
        <div class="col-md-6">{{ $event->destination }}</div>
        <div class="col-md-6">{{ $event->event_date }}</div>
    </div>
    </div>
</section>


<section class="section container py-5 mt-5 col-md-7">
    <h2 class="fw-bold cool-text">About</h2>
    <p class="text-muted mt-4">
       {{ $event->content }}
    </p>
    <div class="image-section text-center mt-5">
        <img src="{{asset('assets/event-image.png')}}" class="img-fluid rounded" alt="Cleanliness Program Image">
    </div>
    <p class="text-muted mt-4">
        {{ $event->content }}
    </p>
</section>

<section class="other-events">
    <div class="container py-4 col-md-7">
        <div class="row">
            <div class="col-4">
                <h2 class="fw-bold">Other events</h2>
            </div>
            <div class="col-8 mt-2">
                <hr>
            </div>
        </div>
    </div>
    <div class="container event-section col-md-7">
        @foreach ($topEvents as $topEvent)
        <a href="{{ route('event-details.show',$topEvent->id) }}" class="nav-link">
            <div class="event-card">
                @php
                    $date = \Carbon\Carbon::parse($topEvent->event_date);
                @endphp
                <div class="event-date">
                    <span class="day">{{ $date->format('d') }}</span>
                    <span class="month">{{ $date->format('m') }}</span>
                </div>
                <div class="event-details">
                    <span class="event-label">Next Events</span>
                    <h3>{{ $topEvent->name }}</h3>
                </div>
                <div class="event-arrow">
                    <button class="arrow-button">→</button>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

{{-- <footer class="section-footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h5 class="card-title">Finsweet</h5>
            <ul class="list-unstyled footer-links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </div>
            <div class="col-md-6">
            <h5 class="fw-bold">Subscribe to get latest updates</h5>
            <form>
                <input type="email" class="form-control" placeholder="Your email">
                <button class="btn btn-seemore mt-3">Subscribe</button>
            </form>
            </div>
        </div>
    </div>
</footer> --}}

<!-- Footer -->
    @include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
