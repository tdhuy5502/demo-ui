@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create What We Do Content
            </h3>
            <hr>
            <form action="{{route('admin.whatwedos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="" for="">Title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Key name" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Subtitle: </label>
                    <textarea id="textContent" class="form-control" type="text" name="subtitle" value="" rows="2" placeholder="Type contents here...">{{ old('subtitle') }}</textarea>
                    @error('subtitle')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <hr>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.whatwedos.index') }}" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection