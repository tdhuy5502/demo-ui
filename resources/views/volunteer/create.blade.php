<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finsweet - Join as Volunteer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/donate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
</head>
<body>

@include('components.navbar')
<section class="donation-section">
    <div class="container p-5">
        <div class="card">
            <div class="card-body">
                <div class="p-5">
                    <h2 class="fw-bold">Join as a volunteer</h2>
                    <p class="text-muted" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen varius enim in eros elementum tristique. </p>
                    <hr>
                    <form action="{{ route('join-volunteer.store') }}" method="post">
                        @csrf
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Your First name: </label>
                            <input name="first_name" type="text" class="form-control" placeholder="Your first name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Your Last name: </label>
                            <input name="last_name" type="text" class="form-control" placeholder="Your last name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Your email: </label>
                            <input name="email" type="text" class="form-control" placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Project:</label>
                            <select name="project_id" id="" class="form-select">
                                <option value="">Choose a project to join</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->title }}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Message for us :</label>
                            <textarea name="message" type="text" rows="6" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        <div>
                            <button class="btn btn-success mt-4">Join</button>
                            <a href="#" class="btn btn-dark mt-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>