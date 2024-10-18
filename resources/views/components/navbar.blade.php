<!-- Navbar -->
<section class="navbar-section">  
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Finsweet</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-us.index') }}">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('what-we-do.index') }}">What We Do</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('top-news.index') }}">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-donate" href="{{ route('donation.index') }}">Donate</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>