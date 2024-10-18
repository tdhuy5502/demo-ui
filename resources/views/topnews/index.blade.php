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
            <h2>{{ $homeContent['news-index-title'] }}</h2>
            <p>{{ $homeContent['news-index-content'] }}</p>
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
        <section class="section-events">
            <div class="container">
              <h2 class="fw-bold">Our Events</h2>
              <div class="row mt-4">            
                <!-- Sự kiện khác -->
                @foreach ($events as $event)
                  @php
                    $date = \Carbon\Carbon::parse($event->event_date);
                  @endphp
                  <div class="col-md-6 mt-3">
                    <a href="{{ route('event-details.show',$event->id) }}" class="nav-link display-flex">
                      <div class="card event-section">
                        <div class="card-body">
                          <h3>{{ 'Day: ' . $date->format('d') }}</h3>
                          <h5>{{ 'Month: ' . $date->format('m') }}</h5>
                          <h5 class="fw-bold">{{ $event->name }}</h5>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

