<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonprofit Organization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/about-us.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar -->
@include('components.navbar')

<!-- About Us Section -->
<section class="section-about py-5">
    <div class="container ">
        <div class="row mb-4">
            <h5 class="">KNOW ABOUT US</h5>
            <div class="col-lg-5">
                <h2>We are a nonprofit team working worldwide</h2>
            </div>
            <div class="col-lg-6">
                <h5>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="about-image position-relative">
                    <img src="{{ asset('assets/team_image.png') }}" class="img-fluid" alt="Team Image">
                </div>
            </div>
            <div class="col-md-12 mt-5 p-0">
                <div class="container">
                    <div class="row">
                        <div class="mission col-md-6">
                            <h5>OUR MISSION</h5>
                            <h4 class="fw-bold col-7">We make the world we save our own environment</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <div class="vision col-md-6">
                            <h5>OUR VISION</h5>
                            <h4 class="fw-bold col-7">Plant more trees to make world air pollution free</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Supporters Section -->
<section class="supporters my-5 py-4 bg-light">
    <div class="container">
        <h6>OUR SUPPORTERS</h6>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <img src="{{ asset('assets/Logo1.svg') }}" class="img-fluid mx-3" alt="Logo 1">
            <img src="{{ asset('assets/Logo2.svg') }}" class="img-fluid mx-3" alt="Logo 2">
            <img src="{{ asset('assets/Logo3.svg') }}" class="img-fluid mx-3" alt="Logo 3">
            <img src="{{ asset('assets/Logo4.svg') }}" class="img-fluid mx-3" alt="Logo 4">
            <img src="{{ asset('assets/Logo5.svg') }}" class="img-fluid mx-3" alt="Logo 5">
        </div>
    </div>
</section>

<!-- Awards & Recognitions Section -->
<section class="awards text-center py-5">
    <div class="container">
        <h2>Awards & Recognitions</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-md-3">
                <img src="{{ asset('assets/award-image-4.png') }}" alt="" srcset="">
                <h4 class="mt-2">2021</h4>
                <p class="fw-bold">Best NGO Award</p>
                <p>BERLIN, GERMANY</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/award-image-3.png') }}" alt="" srcset="">
                <h4 class="mt-2">2018</h4>
                <p class="fw-bold">Global Award</p>
                <p>NEW YORK, USA</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/award-image-2.png') }}" alt="" srcset="">
                <h4 class="mt-2">2014</h4>
                <p class="fw-bold">Forest Award</p>
                <p>NEW DELHI, INDIA</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/award-image-1.png') }}" alt="" srcset="">
                <h4 class="mt-2">2010</h4>
                <p class="fw-bold">Earth Saver Award</p>
                <p>VIENNA, AUSTRIA</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Journey Section -->
<section class="journey-section text-light py-5">
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-md-6 ">
                <h6>OUR JOURNEY</h6>
                <h3 class="fw-bold">How we raised 34M</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh.</p>
                <p><strong>34M+</strong> Donations received</p>
                <p><strong>400+</strong> Team members</p>
                <p><strong>40k+</strong> Volunteers worldwide</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/journey_image.png') }}" class="img-fluid" alt="Our Journey">
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section class="team-section py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="">Meet our team</h2>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Leonard John Davies</h6>
                <p>Co-founder, CEO</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Francis Weber</h6>
                <p>Head of Marketing</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Kyla Obrien</h6>
                <p>Head of HR</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Adrian Dixon</h6>
                <p>Support Executive</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Leonard John Davies</h6>
                <p>Co-founder, CEO</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Francis Weber</h6>
                <p>Head of Marketing</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Kyla Obrien</h6>
                <p>Head of HR</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('assets/team_member2.png') }}" class="img-fluid team-img" alt="Team Member">
                <h6 class="fw-bold">Adrian Dixon</h6>
                <p>Support Executive</p>
            </div>
        </div>
    </div>
</section>

<section class="section-volunteer py-5 text-center position-relative">
    <img src="{{ asset('assets/cta_img.png') }}" class="volunteer-img img-fluid w-100 position-absolute top-0 start-0 h-100" alt="Volunteer Image" style="object-fit: cover; z-index: -1;">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <h2 class="text-volunteer col-lg-6">You can contribute to make the environment greener!</h2>
        </div>
        <div class="">
            <a href="#" class="btn btn-success me-2">Join as a volunteer</a>
            <a href="#" class="btn btn-seemore">Donate</a>
        </div>
    </div>
</section>


  <!-- News Section -->
  <section class="section-news py-5">
    <div class="container">
      <h2 class="fw-bold">Read Our News</h2>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
