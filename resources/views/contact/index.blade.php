<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
</head>
<body>

<!-- Navbar -->
@include('components.navbar')

<!-- Contact Section -->
<section class="contact-section">
    <div class="container py-5 px-5">
        <div class="row">
            <div class="col-md-6">
                <h6>CONTACT US</h6>
                <h2 class="fw-bold mt-4 col-8">We'd love to hear from you</h2>
                <p class="text-muted">Have any questions in mind or want to enquire? Please feel free to contact us through the form or the following details.</p>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>Let's talk!</h4>
                    <p><strong>Phone:</strong> +1 23 456 789</p>
                    <p><strong>Email:</strong> hello@finsweet.com</p>
                    <h5>Headoffice</h5>
                    <p>8 Brewery Drive, Hudson, NH 03051 USA</p>
                    <h5>Branch Office</h5>
                    <p>178 Marconi St., Venice, 34293 Italy</p>
                    <div class="social-icons">
                        <a href="#"><img src="{{asset('assets/Facebook/Vector.png')}}" alt="Facebook"></a>
                        <a href="#"><img src="{{asset('assets/Twitter/Negative.png')}}" alt="Twitter"></a>
                        <a href="#"><img src="{{asset('assets/LinkedIn/Vector.png')}}" alt="LinkedIn"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form-section justify-content-center">
    <div class="card">
        <div class="card-body">
            <div class="p-5 m-5">
                <form action="{{ route('get-contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <p class="fw-bold fs-7 text-muted mb-1">First Name</p>
                            <input name="first_name" type="text" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col">
                            <p class="fw-bold fs-7 text-muted mb-1">Last Name</p>
                            <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p class="fw-bold fs-7 text-muted mb-1">Email Id</p>
                            <input name="email" type="email" class="form-control" placeholder="Email Id" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        
                        <div class="col">
                            <p class="fw-bold fs-7 text-muted mb-1">Subject</p>
                            <input name="subject" type="text" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>  
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold fs-7 text-muted mb-1">Message</p>
                        <textarea name="message" class="form-control" rows="4" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="container col-sm-12 col-lg-2">
                        <button type="submit" class="btn btn-success">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345092046!2d144.9537363153185!3d-37.816279179751596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5775e24e1bc46db!2sEnvato!5e0!3m2!1sen!2sus!4v1619788446855!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<!-- Footer -->
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
