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
            <h2>Our goal is to make water available for everyone</h2>
            <p>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            <a href="#" class="btn-read-more">Read more</a>
        </div>
        <div class="news-list">
            <div class="news-item">
                <img src="{{ asset('assets/dog.png') }}" alt="News 1">
                <div>
                    <h4>Don't destroy greenery and don't spoil scenery.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="{{ asset('assets/dog.png') }}" alt="News 2">
                <div>
                    <h4>Why saving wildlife is extremely important</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="{{ asset('assets/dog.png') }}" alt="News 3">
                <div>
                    <h4>Caring for the present is caring for the future</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="section-news py-5 text-center">
        <div class="container">
          <h2 class="fw-bold">Read Our News</h2>
          <p class="text-muted">Edit this text to make it your own. To edit, simply click directly on the text to start We are served</p>
          <div class="row mt-5">
            <div class="col-md-3">
              <div class="card">
                <img src="{{ asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title-news">Don't destroy greenery</h5>
                  <p class="card-text-news">Lorem ipsum dolor sit amet...</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                  <img src="{{ asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title-news">Don't destroy greenery</h5>
                    <p class="card-text-news">Lorem ipsum dolor sit amet...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="{{ asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title-news">Don't destroy greenery</h5>
                    <p class="card-text-news">Lorem ipsum dolor sit amet...</p>
                  </div>
                </div>
              </div>
    
              <div class="col-md-3">
                <div class="card">
                  <img src="{{ asset('assets/img_news1.png') }}" alt="News Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title-news">Don't destroy greenery</h5>
                    <p class="card-text-news">Lorem ipsum dolor sit amet...</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
    
      <!-- Events Section -->
        <section class="section-events py-5">
            <div class="container">
              <h2 class="fw-bold">Our Events</h2>
              <div class="row mt-4">
    
                <div class="col-md-6">
                  <div class="card event-section">
                    <div class="card-body">
                      <h3>23 Sep</h3>
                      <h5>Say no to plastic usage</h5>
                    </div>
                  </div>
                </div>
                <!-- Sự kiện khác -->
                <div class="col-md-6">
                    <div class="card event-section">
                      <div class="card-body">
                        <h3>23 Sep</h3>
                        <h5>Say no to plastic usage</h5>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
    
      <!-- Footer -->
      @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

