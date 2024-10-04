@extends('master.main')

@section('main')
<div class="card shadow p-0">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5>About Us Content</h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="fl-right inline-blk">
                    <a title=""
                        class="btn btn-success btn-sm px-4 text-white"
                        href="{{ route('admin.about-us.create') }}"><i
                            class='fas fa-plus'></i></a>
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            @include('admin.about-us.elements.datatable')
        </div>
    </div>
</div>
@endsection