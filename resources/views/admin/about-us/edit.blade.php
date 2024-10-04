@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create
            </h3>
            <hr>
            <form action="{{route('admin.about-us.update', $aboutUsData->id)}}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{$aboutUsData->id}}">
                    <label class="" for="">About Us Content's Title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Key name" value="{{ old('title',$aboutUsData->title) }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Post Content: </label>
                    <textarea class="form-control" type="text" name="content" value="" rows="4" placeholder="Type contents here...">{{ old('content',$aboutUsData->content) }}</textarea>
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