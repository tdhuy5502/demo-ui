@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create
            </h3>
            <hr>
            <form action="{{ route('admin.events.store') }}" method="post">
                @csrf
                <div>
                    <label class="text-dark" for="">Event's name: </label>
                    <input class="form-control" type="text" name="name" placeholder="Event title" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Event's destination: </label>
                    <input class="form-control" type="text" name="destination" placeholder="Destination" value="{{ old('destination') }}">
                    @error('destination')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Event's main content: </label>
                    <textarea class="form-control" type="text" name="content" rows="4" placeholder="Type contents here...">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Date: </label>
                    <div class="">
                        <input name="date" type="text" class="form-control col-md-2" id="datepicker" placeholder="Choose a date">
                    </div>
                    @error('date')
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
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endsection