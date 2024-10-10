@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create
            </h3>
            <hr>
            <form action="{{route('admin.home_content.update', $homeContent->id)}}" method="post" enctype="multipart/form-data">
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
                    <label class="" for="">Home Content's Value: </label>
                    <textarea value="" id="textContent" class="form-control" type="text" name="value" value="" rows="4" placeholder="Type contents here...">{{ old('value',$homeContent->value) }}</textarea>
                    @error('value')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-dark" for="">Main content's image (optional): </label>
                    <label for="fileUpload" class="btn btn-primary">
                        <i class="fa fa-upload"></i> Upload Image
                    </label>
                    <input name="value" type="file" id="fileUpload" style="display: none;" />
                </div>
                @if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $homeContent->value)) 
                <div id="existingImagePreview" class="card mt-3 col-md-2">
                    <div class="card-body p-2" style="position: relative;">
                        <img src="{{ asset('uploads/home-content/' . $homeContent->value) }}" alt="Current Image" id="currentImage" class="card-img-top" style="max-height: 200px; border: 1px solid #ccc;" />
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
                @error('avatar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
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
    $(document).ready(function(){
        // text submit
        $('#textContent').on('input', function() {
            if ($(this).val()) {
                $('#fileUpload').removeAttr('name');
            } else {
                $('#fileUpload').attr('name', 'fileUpload');
            }
        });

        // image submit
        $('#fileUpload').on('input', function() {
            if ($(this).val()) {
                $('#textContent').removeAttr('name');
            } else {
                $('#textContent').attr('name', 'textContent');
            }
        });

        $('#fileUpload').on('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewImg').attr('src', e.target.result);
                    $('#newImagePreview').show();
                    $('#existingImagePreview').hide();
                    $('#textContent').val('');
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
            let valueId = {{ $homeContent->id }};

            $.ajax({
                url: "{{ route('admin.home_content.removeImage', ':id') }}".replace(':id', valueId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    if (response.success) {
                        $('#existingImagePreview').hide();
                        $('#fileUpload').val('');
                        $('#textContent').val('');
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