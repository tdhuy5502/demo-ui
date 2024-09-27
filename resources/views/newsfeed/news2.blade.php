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
    <h6>21 DEC 2021</h6>
    <h1 class="fw-bold">Is climate change happening faster than expected?</h1>
    <p class="text-muted">Mauris morbi sed dignissim a in nec aliquam fringilla et. Mattis elit dignissim nibh sit.</p>
</section>

<section class="image-section container text-center">
    <img src="{{asset('assets/new2-image.png')}}" class="img-fluid rounded" alt="Cleanliness Program Image">
</section>

<section class="section container py-5 col-md-7">
    <h2 class="fw-bold cool-text">Mattis elit dignissim nibh sit. Donec arcu sed elit scelerisque</h2>
    <p class="text-muted mt-4">
        Et morbi vitae lobortis nam odio. Faucibus vitae vel neque nullam in in lorem platea mattis. Euismod aenean rhoncus scelerisque amet tincidunt scelerisque aliquam. Luctus porttitor elit vel sapien, accumsan et id ut est. Posuere molestie in turpis quam. Scelerisque in viverra mi ut quisque. In sollicitudin sapien, vel nulla quisque vitae. Scelerisque eget accumsan, non in. Posuere magna erat bibendum amet, nisi eu id.
    </p>
    <p class="text-muted mt-4">
        Viverra at diam nunc non ornare. Sed ultricies pulvinar nunc, lacus sem. Tellus aliquam ut euismod cursus dui lectus. Ut amet, cras volutpat dui. A bibendum viverra eu cras.
        Mauris morbi sed dignissim a in nec aliquam fringilla et. Mattis elit dignissim nibh sit. Donec arcu sed elit scelerisque tempor ornare tristique. Integer faucibus duis praesent tempor feugiat ornare in. Erat libero egestas porttitor nunc pellentesque mauris et pulvinar eget.
    </p>
    <p class="text-muted mt-4">
        Consectetur feugiat quis hac enim nullam in enim. Tellus nisi dapibus libero rutrum vitae nisl, cursus in sed. Egestas mi ultricies et consectetur vel non. Augue enim enim, eget ut sit purus, justo nisl pharetra. Tincidunt leo aenean dui, varius metus, vel. Maecenas eu rhoncus, est nunc nisi volutpat, amet venenatis faucibus. Enim, vel nunc purus feugiat purus tincidunt neque. Massa ultricies faucibus pellentesque risus duis est.
    </p>

    <h4 class="fw-bold mt-5" style="font-size: 28px;">Transform Your Idea Into Reality with Ether a Leading Digital Agency</h4>
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
    <p class="text-muted mt-4">Et morbi vitae lobortis nam odio. Faucibus vitae vel neque nullam in in lorem platea mattis. Euismod aenean rhoncus scelerisque amet tincidunt scelerisque aliquam. Luctus porttitor elit vel sapien, accumsan et id ut est. Posuere molestie in turpis quam. Scelerisque in viverra mi ut quisque. In sollicitudin sapien, vel nulla quisque vitae. Scelerisque eget accumsan, non in. Posuere magna erat bibendum amet, nisi eu id.</p>

    <p class="text-muted mt-4">Viverra at diam nunc non ornare. Sed ultricies pulvinar nunc, lacus sem. Tellus aliquam ut euismod cursus dui lectus. Ut amet, cras volutpat dui. A bibendum viverra eu cras.</p>
</section>

<!-- Footer -->
 @include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
