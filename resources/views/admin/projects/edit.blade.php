@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update Project
            </h3>
            <hr>
            <form action="{{ route('admin.projects.update',$project->id) }}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{ $project->id }}">
                    <label class="text-dark" for="">Project's title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Project title" value="{{ old('title',$project->title) }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Project's main content: </label>
                    <textarea class="form-control" type="text" name="content" rows="6" placeholder="Type contents here...">{{ old('content',$project->content) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">People joined quantity: </label>
                    <input class="form-control" type="text" name="people_joined" placeholder="Destination" value="{{ old('people_joined',$project->people_joined) }}">
                    @error('people_joined')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Project's result: </label>
                    <input class="form-control" type="text" name="result" placeholder="Result" value="{{ old('result',$project->result) }}">
                    @error('result')
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
@section('custom-scripts')
@endsection