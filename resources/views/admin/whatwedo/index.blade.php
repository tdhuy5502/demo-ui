@extends('master.main')
@section('custom-CSS')
    <link rel="stylesheet" href="{{ asset('assets/css/home-content.css') }}">
@endsection
@section('main')
    <div class="card shadow p-0">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5>What We Do Content</h5>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="fl-right inline-blk">
                        <a title=""
                            class="btn btn-success btn-sm px-4 text-white"
                            href="{{ route('admin.whatwedos.create') }}"><i
                                class='fas fa-plus'></i></a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="container">
                @include('admin.whatwedo.elements.datatable')
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#home-content-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.whatwedos.getData') }}",
            columns: [
                { 
                    data: 'id', name: 'id',
                    orderable: false, 
                },
                { data: 'title', name: 'title' },
                { data: 'subtitle', name: 'subtitle' },
                { 
                    data: 'id', 
                    name: 'action',
                    render: function(data, type, row, meta) {
                        return `
                            <a href="/admin/whatwedos/show/${data}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.whatwedos.delete', 'data') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="${data}">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>`;
                    }
                },
            ]
        });
    });
</script> 
@endsection