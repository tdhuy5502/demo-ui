@extends('master.main')
    <link rel="stylesheet" href="{{ asset('assets/css/members.css') }}">
@section('main')
<div class="card">
    <div class="card-body shadow">
        <h3 class="fw-bold">Update</h3>
        <hr>
        <form action="{{ route('admin.about-us.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Cột bên trái: các thẻ input -->
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="">Member's name: </label>
                        <input class="form-control" type="text" name="title" placeholder="Key name" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's phone: </label>
                        <input class="form-control" type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email Account: </label>
                        <input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's role: </label>
                        <select id="company" class="form-control" name="role">
                            <option value="">Role</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                </div>
            </div>

            <hr>
            <div>
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="" class="btn btn-dark">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection