@extends('master.main')
    <link rel="stylesheet" href="{{ asset('assets/css/members.css') }}">
@section('main')
<div class="card">
    <div class="card-body shadow">
        <h3 class="fw-bold">Create</h3>
        <hr>
        <form action="{{ route('admin.members.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Cột bên trái: các thẻ input -->
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="">Member's name: </label>
                        <input class="form-control" type="text" name="name" placeholder="Key name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's phone: </label>
                        <input class="form-control" type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email Account: </label>
                        <input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's role: </label>
                        <select class="form-control" name="role_id">
                            <option value="">Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="text-dark" for="">Avatar: </label>
                        <label for="fileUpload" class="btn btn-primary">
                            <i class="fa fa-upload"></i> Upload Image
                        </label>
                        <input name="avatar" type="file" id="fileUpload" style="display: none;" />
                        @error('avatar')
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