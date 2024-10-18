@extends('master.main')

@section('main')
<div>
    <div class="card">
        <div class="card-body shadow">
            <h3 class="fw-bold">
                Update Contact Information
            </h3>
            <hr>
            <form action="{{ route('admin.contacts.update', $contact->id) }}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <label class="text-dark" for="">First name: </label>
                    <input class="form-control" type="text" name="first_name" placeholder="First name" value="{{ old('first_name',$contact->first_name) }}">
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Last name: </label>
                    <input class="form-control" type="text" name="last_name" placeholder="Last name" value="{{ old('first_name',$contact->last_name) }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Email: </label>
                    <input class="form-control" type="text" name="email" placeholder="Client's email" value="{{ old('email',$contact->email) }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Subject: </label>
                    <input class="form-control" type="text" name="subject" placeholder="Client's subject" value="{{ old('subject',$contact->subject) }}">
                    @error('subject')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <div>
                    <label class="text-dark" for="">Message: </label>
                    <textarea class="form-control" type="text" name="message" rows="5" readonly>{{ $contact->message }}</textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                <hr>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-dark">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection