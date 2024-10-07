@extends('master.main')
    <link rel="stylesheet" href="{{ asset('assets/css/members.css') }}">
@section('main')
<div class="card">
    <div class="card-body shadow">
        <h3 class="fw-bold">Update</h3>
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