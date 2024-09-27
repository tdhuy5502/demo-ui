<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finsweet - Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/donate.css')}}">
</head>
<body>

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
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">What We Do</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Media</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                <li class="nav-item"><a class="btn btn-donate" href="#">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>
</section>

<!-- Donation Section -->
<section class="donation-section py-5">
    <div class="container">
        <div class="row align-items-center p-5">
            <div class="col-md-6">
                <h6 class="text-uppercase fw-bold">Donate</h6>
                <h1 class="fw-bold">Making a donation for Nature.</h1>
                <p class="text-muted">When you donate, you're supporting effective solutions to big environmental challenges—an investment in the future of our planet.</p>
                <a href="#" class="btn btn-success">Donate now</a>
            </div>
            <div class="col-md-6 mt-4">
                <img src="{{asset('assets/donate.png')}}" class="img-fluid rounded" alt="Donation Image">
            </div>
        </div>
    </div>
</section>

<!-- Contribution Section -->
<section class="contribute-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fw-bold">How you can contribute to protect Earth</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-tabs mt-4" id="contributeTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="impact-tab" data-bs-toggle="tab" data-bs-target="#impact" type="button" role="tab" aria-controls="impact" aria-selected="false">Impact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="get-tab" data-bs-toggle="tab" data-bs-target="#get" type="button" role="tab" aria-controls="get" aria-selected="false">What You Get</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="contributeTabContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.</p>
                    </div>
                    <div class="tab-pane fade" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                        <p class="text-muted">Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                    <div class="tab-pane fade" id="get" role="tabpanel" aria-labelledby="get-tab">
                        <p class="text-muted">Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                </div>
            </div>
            <hr class="mt-5 text-muted">
        </div>
    </div>
</section>

<!-- Use Donation Section -->
<section class="use-donation-section py-5">
    <div class="container">
        <div class="row">
            <h2 class="fw-bold col-md-4">How we use your donation</h2>
            <div class="col-md-4">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.  Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted">Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section-volunteer py-5 text-center position-relative content-volunteer">
    <img src="{{ asset('assets/cta_img.png') }}" class="volunteer-img img-fluid w-100 position-absolute top-0 start-0 h-100" alt="Volunteer Image" style="object-fit: cover; z-index: -1;">
    <div class="container position-relative" style="z-index: 1;">
        <div class="">
            <div class="row justify-content-center">
                <h2 class="text-volunteer col-lg-6">You can contribute to make the environment greener!</h2>
            </div>
            <div class="">
                <a href="#" class="btn btn-success me-2">Join as a volunteer</a>
                <a href="#" class="btn btn-seemore">Donate</a>
            </div>
        </div>
    </div>
</section>

<footer class="section-footer py-5">
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
          <h5>Subscribe to get latest updates</h5>
          <form>
            <input type="email" class="form-control" placeholder="Your email">
            <button class="btn btn-seemore mt-3">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>