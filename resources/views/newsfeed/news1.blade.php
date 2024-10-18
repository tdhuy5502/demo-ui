<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/newsfeed.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <style>
        
    </style>
</head>
<body>

<!-- Navbar -->
@include('components.navbar')

<section class="hero container py-5 col-md-7">
    <h1 class="fw-bold">{{ $project->title }}</h1>
    <p class="text-muted mt-4">
        {{ $project->content }}
    </p>
</section>

<section class="image-section container text-center">
    <img src="{{asset('assets/news1-image.png')}}" class="img-fluid rounded" alt="Cleanliness Program Image">
</section>

<section class="section container py-5 col-md-7">
    <h2 class="fw-bold cool-text">{{ $homeContent['tree-project-subtitle'] }}</h2>
    <p class="text-muted mt-4">{{ $homeContent['project-tree-subcontent'] }}</p>
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
                    <h5 class="fw-bold">{{ $project->result }}</h5>
                    <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold">{{ $project->donated_qty }}M+ People Have donated</h5>
                    <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <h5 class="fw-bold">{{ $project->people_joined }}+ people joined</h5>
                    <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold">${{ $projectFund }} Raised for this initiative</h5>
                    <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects py-5 my-4">
    <div class="container">
        <div class="row">
            @foreach ($projectList as $projectItem)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/mission40K.png') }}" alt="Project Image" class="card-img-top">
                    <div class="card-body card-img-overlay">
                    <h5 class="card-title">{{ $projectItem->title }}</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                    <a href="{{ route('project-post.show' , $projectItem->id) }}" class="btn btn-seemore">See more</a>
                    </div>
                </div>
            </div>
            @endforeach      
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
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
