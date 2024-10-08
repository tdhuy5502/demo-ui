@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update
            </h3>
            <hr>
            <form action="{{ route('admin.news.update',$news->id) }}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    <label class="text-dark" for="">Main title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Event title" value="{{ old('title',$news->title) }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Content: </label>
                    <textarea class="form-control" type="text" name="content" rows="6" placeholder="Type contents here...">{{ old('content',$news->content) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Section's title: </label>
                    <input class="form-control" type="text" name="subtitle" placeholder="Enter subtitle" value="{{ old('subtitle',$news->subtitle) }}">
                    @error('subtitle')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Post image: </label>
                    <div class="">
                        <input name="image" type="file" class="btn btn-dark" placeholder="Upload main image">
                    </div>
                    @error('image')
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