<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finsweet Environment</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/whatwedo-section.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
</head>
<body>

  <!-- Navbar -->
  @include('components.navbar')

  <!-- Intro Section -->
  <section class="section-intro py-5">
    <div class="container">
      <div class="row mx-5">
        <div class="col-sm-5">
            <h5>WHAT WE DO</h5>
          <h2>{{ $homeTitle['what-we-do-main-title'] }}</h2>
          <p class="">{{ $homeTitle['what-we-do-main-subtitle'] }}</p>
          </div>
          <div class="col-sm-5 mx-5">
            <img src="{{ asset('assets/header-image-whatwedo.png') }}" alt="Intro Image" class="img-fluid">
          </div>
      </div>
    </div>
  </section>

  <!-- Environment Section -->
  <section class="section-environment py-5">
    <div class="container">
      <h2>What we do for the environment</h2>
      <div class="row">
        <!-- Icon boxes -->
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-city"></i>
          </div>
          <h5>Build healthy cities</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-water"></i>
          </div>
          <h5>Water sustainability</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-leaf"></i>
          </div>
          <h5>Biodiversity</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
      </div>
      <div class="row">
        <!-- Icon boxes -->
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-city"></i>
          </div>
          <h5>Build healthy cities</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-water"></i>
          </div>
          <h5>Water sustainability</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box mx-auto">
            <i class="fas fa-leaf"></i>
          </div>
          <h5>Biodiversity</h5>
          <p>Lorem ipsum dolor sit amet...</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="section-projects py-5 text-center">
    <div class="container">
      <h5>PROJECTS WE HAS DONE</h5>
        <h2 class="py-5">We are creating a sustainable society, for everyone.</h2>
      <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('assets/weekly_cleann.png') }}" alt="Project Image" class="card-img-top">
            <div class="card-body card-img-overlay">
              <h5 class="card-title">{{ $project->title }}</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
              <a href="{{ route('project-post.show',$project->id) }}" class="btn btn-seemore">See more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Volunteer Section -->
  <section class="section-volunteer py-5 text-center position-relative">
    <img src="{{ asset('assets/cta_img.png') }}" class="volunteer-img img-fluid w-100 position-absolute top-0 start-0 h-100" alt="Volunteer Image" style="object-fit: cover; z-index: -1;">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <h2 class="text-volunteer col-lg-6">You can contribute to make the environment greener!</h2>
        </div>
        <div class="mt-3">
            <a href="#" class="btn btn-success me-2">Join as a volunteer</a>
            <a href="#" class="btn btn-seemore">Donate</a>
        </div>
    </div>
</section>


  <!-- News Section -->
  <section class="section-news py-5">
    <div class="container">
      <h2 class="text-center">Read Our News</h2>
      <div class="row">
        @foreach ($news as $newsItem)
        <div class="col-md-3">
          <div class="card">
            <img src="{{ asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
            <div class="card-body">
              <a href="{{route('news-details.show',$newsItem->id)}}" class="nav-link fw-bold fs-5 card-title">{{ $newsItem->title }}</a>
              <p class="text-dark">{{ $newsItem->subtitle }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Events Section -->
    <section class="section-events py-5">
        <div class="container ">
          <h2>Our Events</h2>
          <div class="row">
            
            <!-- Sự kiện khác -->
            @foreach ($events as $event)
            @php
              $date = \Carbon\Carbon::parse($event->event_date);
            @endphp
            <div class="col-md-6">
              <a href="{{ route('event-details.show',$event->id) }}" class="nav-link">
              <div class="card event-section">
                <div class="card-body">
                  <div class="d-flex">
                    <h5>{{'Day: ' . $date->format('d ') . ',' }}</h5>
                    <h5>{{'Month: ' . $date->format(' m') }}</h5>
                  </div>
                  <h5>{{ $event->name }}</h5>
                </div>
              </div>
            </a>
            </div>
            @endforeach
              
          </div>
        </div>
      </section>

  <!-- Footer -->
  @include('components.footer')

  <!-- Bootstrap 5 JS và các scripts cần thiết -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
