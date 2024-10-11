@extends('master.main')
    <link rel="stylesheet" href="{{ asset('assets/css/members.css') }}">
@section('main')
<div class="card">
    <div class="card-body shadow">
        <h3 class="fw-bold">Update Member Information</h3>
        <hr>
        <form action="{{ route('admin.members.update',$member->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Cột bên trái: các thẻ input -->
                <div class="col-md-7">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="{{ $member->id }}">
                        <label for="">Member's name: </label>
                        <input class="form-control" type="text" name="name" placeholder="Key name" value="{{ old('name',$member->name) }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's phone: </label>
                        <input class="form-control" type="text" name="phone" placeholder="Phone number" value="{{ old('phone',$member->phone) }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email Account: </label>
                        <input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email',$member->email) }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Member's role: </label>
                        <select id="company" class="form-control" name="role_id">
                            <option value="">Role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}" 
                                {{ old('role_id', $member->role_id) == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="text-danger">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="text-dark" for="">Members avatar: </label>
                        <label for="fileUpload" class="btn btn-primary">
                            <i class="fa fa-upload"></i> Upload Image
                        </label>
                        <input name="avatar" type="file" id="fileUpload" style="display: none;" />
                    </div>
                    @if($member->avatar)
                    <div id="existingImagePreview" class="card mt-3 col-md-2">
                        <div class="card-body p-2" style="position: relative;">
                            <img src="{{ asset('uploads/members/' . $member->avatar) }}" alt="Current Image" id="currentImage" class="card-img-top" style="max-height: 200px; border: 1px solid #ccc;" />
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
                </div>
            </div>

            <hr>
            <div>
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-dark">Cancel</a>
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
            let memberId = {{ $member->id }};

            $.ajax({
                url: "{{ route('admin.members.removeAvatar', ':id') }}".replace(':id', memberId),
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