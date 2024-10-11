@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Create Home Content
            </h3>
            <hr>
            <form action="{{route('admin.home_content.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="" for="">Home Content's Key: </label>
                    <input class="form-control" type="text" name="key" placeholder="Key name" value="{{ old('key') }}">
                    @error('key')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="" for="">Home Content's Key: </label>
                    <textarea id="textContent" class="form-control" type="text" name="value" value="" rows="4" placeholder="Type contents here..."></textarea>
                    @error('value')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-dark" for="">Image content: </label>
                    <label for="fileUpload" class="btn btn-primary">
                        <i class="fa fa-upload"></i> Upload Image
                    </label>
                    <input name="value" type="file" id="fileUpload" style="display: none;" />
                    @error('value')
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
                    <a href="{{ route('admin.home_content.index') }}" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function () {
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