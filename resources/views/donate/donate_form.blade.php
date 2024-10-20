<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finsweet - Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/donate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
</head>
<body>

@include('components.navbar')
<section class="donation-section">
    <div class="container p-5 ">
        <div class="card">
            <div class="card-body">
                <div class="p-5">
                    <h4 class="fw-bold text-muted">Donate Us Here</h4>
                    <hr>
                    <form action="{{ route('donation.store') }}" method="post">
                        @csrf
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Your Name:</label>
                            <input name="donator_name" type="text" class="form-control" placeholder="Your name">
                            @error('donator_name')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Project:</label>
                            <select name="project_id" id="" class="form-select">
                                <option value="">Choose a project to donate</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>{{ $project->title }}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Donation amount:</label>
                            <input name="amount" type="text" class="form-control" placeholder="Donation amount">
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="col-md-7 mt-3">
                            <label class="fs-6 fw-bold text-dark" for="">Message for us :</label>
                            <textarea name="message" type="text" rows="6" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-success mt-4">Donate</button>
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