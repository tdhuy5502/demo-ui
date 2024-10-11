@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update News Post
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
                <div class="mt-3">
                    <label class="text-dark" for="">Post main image: </label>
                    <label for="fileUpload" class="btn btn-primary">
                        <i class="fa fa-upload"></i> Upload Image
                    </label>
                    <input name="image" type="file" id="fileUpload" style="display: none;" />
                </div>
                @if($news->image)
                <div id="existingImagePreview" class="card mt-3 col-md-2">
                    <div class="card-body p-2" style="position: relative;">
                        <img src="{{ asset('uploads/news/' . $news->image) }}" alt="Current Image" id="currentImage" class="card-img-top" style="max-height: 200px; border: 1px solid #ccc;" />
                        <button type="button" id="removeCurrentImage" class="btn btn-danger btn-sm" style="position: absolute; top: 5px; right: 5px;">&times;</button>
                    </div>
                </div>
                @endif
                <!-- New image preview -->
                <div id="newImagePreview" class="card mt-3 col-md-2" style="display: none;">
                    <div class="card-body p-2" style="position: relative;">
                        <img src="" id="previewImg" alt="New Image Preview" class="card-img-top" style="max-height: 200px; border: 1px solid #ccc;" />
                        <button type="button" id="removeNewImage" class="btn btn-danger btn-sm" style="position: absolute; top: 5px; right: 5px;">&times;</button>
                    </div>
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <hr>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-dark">Cancel</a>
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
                    $('#newImagePreview').show();
                    $('#existingImagePreview').hide(); 
                };
                reader.readAsDataURL(file);
            }
        });
        $('#removeNewImage').on('click', function () {
            $('#fileUpload').val('');
            $('#newImagePreview').hide();
            $('#existingImagePreview').show();
            $('#previewImg').attr('src', '');
        });
        $('#removeCurrentImage').on('click', function () {
            let postId = {{ $news->id }};

            $.ajax({
                url: "{{ route('admin.news.removeImage', ':id') }}".replace(':id', postId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    if (response.success) {
                        $('#existingImagePreview').hide();
                        $('#fileUpload').val('');
                    }
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                    alert('Error response.');
                }
            });
        });
    });
</script>
@endsection