@extends('master.main')

@section('main')
<div class="card shadow p-0">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5>Volunteers List</h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="fl-right inline-blk">
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            @include('admin.volunteers.elements.datatable')
        </div>
    </div>
</div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#volunteers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.volunteers.getData') }}",
            columns: [
                { 
                    data: 'id', name: 'id',
                    orderable: false, 
                },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' },
                { data: 'message', name: 'message' },
                { data: 'created_at', name: 'created_at' },
                { 
                    data: 'id', 
                    name: 'action',
                    render: function(data, type, row, meta) {
                        return `
                            <a href="/admin/volunteers/show/${data}" class="/btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.volunteers.delete', 'data') }}" method="POST" style="display:inline;">
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