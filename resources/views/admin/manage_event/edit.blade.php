@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update
            </h3>
            <hr>
            <form action="{{ route('admin.events.update',$event->id) }}" method="post">
                @csrf
                <div>
                    <label class="" for="">Event's name: </label>
                    <input type="hidden" name="id" value="{{ $event->id }}">
                    <input class="form-control" type="text" name="name" placeholder="Key name" value="{{ old('name',$event->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Event's destination: </label>
                    <input class="form-control" type="text" name="destination" placeholder="Key name" value="{{ old('destination',$event->destination) }}">
                    @error('destination')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Event's main content: </label>
                    <textarea class="form-control" type="text" name="content" rows="4" placeholder="Type contents here...">{{ old('content',$event->content) }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Date: </label>
                    <div class="">
                        <input name="date" type="text" class="form-control col-md-2" id="datepicker" placeholder="Choose a date" value="{{ old('date',$event->date) }}">
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