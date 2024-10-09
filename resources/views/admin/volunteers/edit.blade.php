@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update
            </h3>
            <hr>
            <form action="" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="">
                    <label class="text-dark" for="">First name: </label>
                    <input class="form-control" type="text" name="title" placeholder="Event title" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <input type="hidden" name="id" value="">
                    <label class="text-dark" for="">Last name: </label>
                    <input class="form-control" type="text" name="title" placeholder="Event title" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <input type="hidden" name="id" value="">
                    <label class="text-dark" for="">Email: </label>
                    <input class="form-control" type="text" name="title" placeholder="Event title" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Content: </label>
                    <textarea class="form-control" type="text" name="content" rows="5" placeholder="Type contents here...">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <hr>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection