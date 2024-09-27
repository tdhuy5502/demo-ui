<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/newsfeed.css')}}">
    <style>
        
    </style>
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

<section class="hero container py-5 col-md-7">
    <h1 class="fw-bold">Weekly cleanliness program in city</h1>
    <p class="text-muted mt-4">Et morbi vitae lobortis nam odio. Faucibus vitae vel neque nullam in in lorem platea mattis. Euismod aenean rhoncus scelerisque amet tincidunt scelerisque aliquam. Luctus porttitor elit vel sapien, accumsan et id ut est. Posuere molestie in turpis quam. Scelerisque in viverra mi ut quisque. In sollicitudin sapien, vel nulla quisque vitae. Scelerisque eget accumsan, non in. Posuere magna erat bibendum amet, nisi eu id.
    </p>
    <p class="text-muted mt-4">
        Viverra at diam nunc non ornare. Sed ultricies pulvinar nunc, lacus sem. Tellus aliquam ut euismod cursus dui lectus. Ut amet, cras volutpat dui. A bibendum viverra eu cras.
        Mauris morbi sed dignissim a in nec aliquam fringilla et. Mattis elit dignissim nibh sit. Donec arcu sed elit scelerisque tempor ornare tristique. Integer faucibus duis praesent tempor feugiat ornare in. Erat libero egestas porttitor nunc pellentesque mauris et pulvinar eget.
    </p>
    <p class="text-muted mt-4">
        Consectetur feugiat quis hac enim nullam in enim. Tellus nisi dapibus libero rutrum vitae nisl, cursus in sed. Egestas mi ultricies et consectetur vel non. Augue enim enim, eget ut sit purus, justo nisl pharetra. Tincidunt leo aenean dui, varius metus, vel. Maecenas eu rhoncus, est nunc nisi volutpat, amet venenatis faucibus. Enim, vel nunc purus feugiat purus tincidunt neque. Massa ultricies faucibus pellentesque risus duis est.
    </p>
</section>

<section class="image-section container text-center">
    <img src="{{asset('assets/news1-image.png')}}" class="img-fluid rounded" alt="Cleanliness Program Image">
</section>

<section class="section container py-5 col-md-7">
    <h2 class="fw-bold cool-text">Some cool heading</h2>
    <p class="text-muted mt-4">Posuere sed pulvinar enim faucibus justo, cursus. In diam facilisi at sit convallis blandit blandit in. Maecenas odio orci lectus urna ante consequat erat non morbi. Rhoncus ullamcorper dictum sit non semper sit tellus adipiscing. Est sapien rhoncus sit vestibulum sollicitudin. Tellus urna malesuada eu id tempus lorem. Est aliquam sem bibendum felis interdum pharetra. Diam fermentum in lectus morbi at eget sit et quisque. Semper commodo viverra donec magna egestas nibh. Condimentum pellentesque auctor ornare at at tellus nunc cras eu. Velit dignissim penatibus faucibus tempus. Arcu pharetra morbi bibendum et dolor volutpat amet. Sed mauris amet mi sed purus vitae odio. Mi eu lectus suscipit sagittis, ultrices ut dui.</p>
    <ul class="mt-4">
        <li class="fw-bold">Posuere sed pulvinar enim faucibus justo, cursus.</li>
        <li class="fw-bold">In diam facilisis sit at convallis blandit blandit in.</li>
        <li class="fw-bold">Maecenas odio orci lectus urna ante consequat erat non morbi.</li>
    </ul>
    <p class="text-muted mt-4">
        Posuere sed pulvinar enim faucibus justo, cursus. In diam facilisi at sit convallis blandit blandit in. Maecenas odio orci lectus urna ante consequat erat non morbi.
    </p>
</section>

<section class="stat-section">
    <div class="stats container  py-5">
        <div class="row">
            <div class="row">
                <div class="col mb-3">
                    <h5 class="fw-bold">200+ Plantation in 1 week</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold">230 People Have donated</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <h5 class="fw-bold">30+ people joined</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold">$324 Raised for this initiative</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects py-5 my-4">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('assets/mission40K.png') }}" alt="Project Image" class="card-img-top">
              <div class="card-body card-img-overlay">
                <h5 class="card-title">Mission 40K: Tree plantation</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                <a href="#" class="btn btn-seemore">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('assets/weekly_cleann.png') }}" alt="Project Image" class="card-img-top">
              <div class="card-body card-img-overlay">
                <h5 class="card-title">Weekly cleanliness program</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                <a href="#" class="btn btn-seemore">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('assets/wild_safety.png') }}" alt="Project Image" class="card-img-top">
              <div class="card-body card-img-overlay">
                <h5 class="card-title">Wildlife safety program</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                <a href="#" class="btn btn-seemore">See more</a>
              </div>
            </div>
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

<!-- Footer -->
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
            <h5 class="fw-bold">Subscribe to get latest updates</h5>
            <form>
                <input type="email" class="form-control" placeholder="Your email">
                <button class="btn btn-seemore mt-3">Subscribe</button>
            </form>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
