@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create
            </h3>
            <hr>
            <form action="{{route('admin.home_content.update', $homeContent->id)}}" method="post">
                @csrf
                <div>
                    <input type="hidden" value="{{ $homeContent->id }}" name="id">
                    <label class="" for="">Home Content's Key: </label>
                    <input class="form-control" type="text" name="key" placeholder="Key name" value="{{ old('key', $homeContent->key) }}">
                    @error('key')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Home Content's Key: </label>
                    <textarea value="" class="form-control" type="text" name="value" value="" rows="4" placeholder="Type contents here...">{{ old('value',$homeContent->value) }}</textarea>
                    @error('value')
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