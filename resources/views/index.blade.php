<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">   
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
    <title>Document</title>
</head>
<body>
    {{-- <div class="container">
        <div class="row row-cols-4 gy-4">
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box"></div>
            </div>
            <div class="col">
                <div class="box">
                    <button class="btn btn-primary check">Submit</button>
                </div>
            </div>
        </div>
    </div>  --}}
    {{-- <div class="element">
        <p class="">
            This element has a height of 200 pixels and a width of 50%
        </p>    
    </div> --}}

    {{-- <table class="table table-bordered table-hover table-primary">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>1</td>
            <td>b</td>
            <td class="table-warning">2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>2</td>
            <td>2</td>
        </tr>
    </table> --}}
    {{-- <form action="" method="get">
        <div class="">
        <label class="form-label">Email:</label>
        <input class="form-control" type="email" id="email">
        </div>
        <div class="">
        <label class="form-label">Password:</label>
        <input class="form-control" type="password" id="email">
        </div>
        <div class="">
            <label class="form-label" for="">Select:</label>
            <select class="form-select" name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
        </div>
        <div class="form-check form-switch form-check-inline">
            <label class="form-label">Check:</label>
            <input class="form-check-input" type="checkbox" id="email">
        </div>
        <div class="form-check form-switch form-check-inline">
            <label class="form-label">Check:</label>
            <input class="form-check-input" type="checkbox" id="email">
        </div>
        <div>
            <a href="" class="btn btn-danger">Click</a>
            <button class="btn btn-outline-primary">Submit</button>
            <button class="btn-link btn">Link</button>
        </div>
    </form> --}}
    {{-- <div class="card">
        <div class="card-body">
        <div class="alert alert-success m-2 alert-dismissible" role="alert">
            Success
            <button data-bs-dismiss="alert" class="btn-close" aria-label="close"></button>
        </div>

        <div class="alert alert-danger m-2 alert-dismissible" role="alert">
            Failed
            <button data-bs-dismiss="alert" class="btn-close" aria-label="close"></button>
        </div>
        </div>
    </div> --}}
    @include('header')

    <div class="container p-3">
        
    </div>
</body>
</html>