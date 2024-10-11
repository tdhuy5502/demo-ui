@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update Volunteer's Information
            </h3>
            <hr>
            <form action="{{ route('admin.volunteers.update',$volunteer->id) }}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{ $volunteer->id }}">
                    <label class="text-dark" for="">First name: </label>
                    <input class="form-control" type="text" name="first_name" placeholder="First name" value="{{ old('first_name',$volunteer->first_name) }}">
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Last name: </label>
                    <input class="form-control" type="text" name="last_name" placeholder="Last name" value="{{ old('last_name',$volunteer->last_name) }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Email: </label>
                    <input class="form-control" type="text" name="email" placeholder="Volunteer's email" value="{{ old('email',$volunteer->email) }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Message: </label>
                    <textarea class="form-control" type="text" name="content" rows="5" readonly>{{ old('message',$volunteer->message) }}</textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <hr>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection