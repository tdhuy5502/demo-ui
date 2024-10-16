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

<section class="hero container text-center py-5 col-md-7 mt-5">
    <h6>{{ $topnews->created_at }}</h6>
    <h1 class="fw-bold">{{ $topnews->title }}</h1>
    <p class="text-muted">Mauris morbi sed dignissim a in nec aliquam fringilla et. Mattis elit dignissim nibh sit.</p>
</section>

<section class="image-section container text-center">
    <img src="{{asset('assets/new2-image.png')}}" class="img-fluid rounded" alt="Cleanliness Program Image">
</section>

<section class="section container py-5 col-md-7">
    <h2 class="fw-bold cool-text">{{ $topnews->subtitle }}</h2>
    <p class="text-muted mt-4">
        {{ $topnews->content }}
    </p>

    <h4 class="fw-bold mt-5" style="font-size: 28px;">{{ $homeContent['top-news-post-subtitle'] ?? 'Transform Your Idea Into Reality with Ether a Leading Digital Agency'}}</h4>
    <ul class="text-muted mt-4">
        <li>
            <p>Et morbi vitae lobortis nam odio. Faucibus vitae vel neque nullam in in lorem platea mattis.</p>
        </li>
        <li>
            <p>Et morbi vitae lobortis nam odio. Faucibus vitae vel neque nullam in in lorem platea mattis. Viverra at diam nunc non ornare. Sed ultricies pulvinar nunc, lacus sem. Tellus aliquam ut euismod cursus dui lectus. Ut amet, cras volutpat dui. A bibendum viverra eu cras.
            </p>
        </li>
        <li>
            <p>Mauris morbi sed dignissim a in nec aliquam fringilla et. Consectetur feugiat quis hac enim nullam in enim.
            </p>
        </li>
    </ul>
    
    <h4 class="fw-bold mt-5" style="font-size: 28px;">Transform Your Idea Into Reality with Ether a Leading Digital Agency</h4>
    <p class="text-muted mt-4">{{ $topnews->content }}</p>
</section>

<!-- Footer -->
 @include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
