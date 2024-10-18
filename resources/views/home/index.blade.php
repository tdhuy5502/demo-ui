<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environmental Organization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section class="hero-section position-relative text-white align-items-start">
        <img src="{{asset('assets/BG Image.png')}}" class="img-fluid w-100" alt="Hero Image" style="object-fit: cover;">
        <div class="container">
            <h1 class="col-5 hero-text">{{ $homeContent['home-title'] }}</h1>
            <a href="https://www.youtube.com/watch?v=_BwpwpIFdvk" class="btn btn-seemore mt-3">Play Video</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h6 class="fw-bold">KNOW ABOUT US</h6>
                    <h2 class="fw-bold">{{ $homeContent['about-us-title'] }}</h2>
                    <p class="text-muted">{{ $homeContent['about-us-subtitle'] }}</p>
                    <a href="{{ route('about-us.index') }}" class="btn btn-success">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/BG.png')}}" class="img-fluid" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Supporters Section -->
    <section class="supporters py-5">
        <div class="container">
            <h5 class="">OUR SUPPORTERS</h5>
            <div class="row justify-content-center mt-3">
                <div class="col-2"><img src="{{asset('assets/Logo1.svg')}}" alt="Supporter"></div>
                <div class="col-2"><img src="{{asset('assets/Logo2.svg')}}" alt="Supporter"></div>
                <div class="col-2"><img src="{{asset('assets/Logo3.svg')}}" alt="Supporter"></div>
                <div class="col-2"><img src="{{asset('assets/Logo4.svg')}}" alt="Supporter"></div>
                <div class="col-2"><img src="{{asset('assets/Logo5.svg')}}" alt="Supporter"></div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="what-we-do py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold fs-6">WHAT WE DO</h5>
                    <h2 class="fw-bold">We care for earth, care for the coming birth</h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    <ul class="list-unstyled col-lg-8">
                      @foreach($whatwedos as $whatwedo)
                      <li>
                        <div class="d-flex align-items-center">
                            <img src="{{asset('assets/Icon_health.png')}}" style="width: 28px; height: 28px;" alt="">
                            <div class="mt-2 p-1">
                                <h6 class="fw-bold fs-5">{{ $whatwedo->title }}</h6>
                            </div>
                        </div>
                        <p class="text-muted">{{ $whatwedo->subtitle }}</p>
                      </li>
                      @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('what-we-do.index') }}">
                      <img src="{{asset('assets/whatwedo_img.png')}}" class="img-fluid" alt="Activity">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects py-5">
        <div class="container">
            <h5>PROJECTS WE HAS DONE</h5>
              <h2 class="py-5">We are creating a sustainable society, for everyone.</h2>
            <div class="row">
              @foreach ($projects as $project)
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('assets/mission40K.png') }}" alt="Project Image" class="card-img-top">
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

    <!-- Footer Section -->
    <section class="section-volunteer py-5 text-center position-relative">
        <img src="{{ asset('assets/cta_img.png') }}" class="volunteer-img img-fluid w-100 position-absolute top-0 start-0 h-100" alt="Volunteer Image" style="object-fit: cover; z-index: -1;">
        <div class="container position-relative" style="z-index: 1;">
            <div class="row justify-content-center">
                <h2 class="text-volunteer col-lg-6">You can contribute to make the environment greener!</h2>
            </div>
            <div class="">
                <a href="{{ route('join-volunteer.join') }}" class="btn btn-success me-2">Join as a volunteer</a>
                <a href="{{ route('donation.index') }}" class="btn btn-seemore">Donate</a>
            </div>
        </div>
    </section>
    
    
      <!-- News Section -->
      <section class="section-news py-5">
        <div class="container">
          <h2 class="fw-bold">Read Our News</h2>
          <div class="row mt-5">
            @foreach($news as $new)
              <div class="col-md-3">
                <div class="card">
                  <img class="img-fluid team-img" src="{{ $new->image ? asset('uploads/news/' . $new->image) : asset('assets/img_news1.png') }}" alt="News Image" >
                  <div class="card-body">
                    <a href="{{ route('news-details.show',$new->id) }}" class="fw-bold nav-link fs-5 text-dark card-title-news">{{ $new->title }}</a>
                    <p class="card-text-news">{{ $new->subtitle }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    
      <!-- Events Section -->
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
        <div class="container col-md-7 ">
            @foreach ($events as $event)
            <a href="{{ route('event-details.show',$event->id) }}" class="nav-link">
                <div class="event-card">
                    @php
                        $date = \Carbon\Carbon::parse($event->event_date);
                    @endphp
                    <div class="event-date">
                        <span class="day">{{ $date->format('d') }}</span>
                        <span class="month">{{ $date->format('m') }}</span>
                    </div>
                    <div class="event-details">
                        <span class="event-label">Next Events</span>
                        <h3>{{ $event->name }}</h3>
                    </div>
                    <div class="event-arrow">
                        <button class="arrow-button">→</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
    
      <!-- Footer -->
      @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
