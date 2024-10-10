@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create
            </h3>
            <hr>
            <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="text-dark" for="">Main title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Event title" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Content: </label>
                    <textarea class="form-control" type="text" name="content" rows="6" placeholder="Type contents here...">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Section's title: </label>
                    <input class="form-control" type="text" name="subtitle" placeholder="Enter subtitle" value="{{ old('subtitle') }}">
                    @error('subtitle')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-dark" for="">Post main image: </label>
                    <label for="fileUpload" class="btn btn-primary">
                        <i class="fa fa-upload"></i> Upload Image
                    </label>
                    <input name="image" type="file" id="fileUpload" style="display: none;" />
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- Card container for image preview -->
                    <div id="imagePreview" class="card mt-3" style="display: none; width: 220px;">
                        <div class="card-body p-2" style="position: relative;">
                            <img src="" id="previewImg" alt="Image Preview" class="card-img-top" style="max-height: 200px; border: 1px solid #ccc;" />
                            <button type="button" id="removeImage" class="btn btn-danger btn-sm" style="position: absolute; top: 5px; right: 5px;">
                                &times;
                            </button>
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
</div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function () {
        $('#fileUpload').on('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewImg').attr('src', e.target.result);
                    $('#imagePreview').show();
                };
                reader.readAsDataURL(file);
            }
        });

        $('#removeImage').on('click', function () {
            
            $('#fileUpload').val('');
        
            $('#imagePreview').hide();
            
            $('#previewImg').attr('src', '');
        });
    });
</script>
@endsection