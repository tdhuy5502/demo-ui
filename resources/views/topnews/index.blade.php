<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/topnews.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Top News Section -->
    <section class="top-news-section">
        <div class="news-content">
            <h2>{{ $homeContent['news-index-title'] ?? 'Our goal is to make water available for everyone' }}</h2>
            <p>{{ $homeContent['news-index-content'] ?? 'Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.' }}</p>
            <a href="{{ route('news-details.index') }}" class="btn-read-more">Read more</a>
        </div>
        <div class="news-list">
          @foreach ($latestNews as $news)
          <a class="nav-link" href="{{ route('news-details.show',$news->id) }}">
            <div class="news-item">
              <img class="card-img-fluid" src="{{ $news->image ? asset('uploads/news/' . $news->image) : asset('assets/img_news1.png') }}" alt="News 1">
              <div>
                  <h4>{{ $news->title }}</h4>
                  <p>{{ $news->subtitle }}</p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
    </section>


    <section class="section-news py-5 text-center">
        <div class="container">
          <h2 class="fw-bold">Read Our News</h2>
          <p class="text-muted">Edit this text to make it your own. To edit, simply click directly on the text to start We are served</p>
          <div class="row mt-5">
           
            @foreach($allNews as $new)
              <div class="col-md-3">
                <div class="card">
                  <img class="img-fluid team-img" src="{{ $new->image ? asset('uploads/news/' . $new->image) : asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
                  <div class="card-body">
                    <a href="{{ route('news-details.show',$new->id)}}" class="fs-bold fw-bold nav-link card-title-news font-bold">{{ $new->title }}</a>
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
        <div class="container col-md-7">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

