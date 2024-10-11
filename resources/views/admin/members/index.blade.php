@extends('master.main')

@section('main')
<div class="card shadow p-0">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5>Members List</h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="fl-right inline-blk">
                    <a title=""
                        class="btn btn-success btn-sm px-4 text-white"
                        href="{{ route('admin.members.create') }}"><i
                            class='fas fa-plus'></i></a>
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            @include('admin.members.elements.datatable')
        </div>
    </div>
</div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#members-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.members.getData') }}",
            columns: [
                { 
                    data: 'id', name: 'id',
                    orderable: false, 
                },
                { 
                    "data": "avatar_url",
                    "render": function(data, type, row) {
                        return '<img src="' + data + '" alt="Avatar" width="50" height="50"/>';
                    }
                },
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'email', name: 'email' },
                { data: 'role_name', name: 'role_name' },
                { 
                    data: 'id', 
                    name: 'action',
                    render: function(data, type, row, meta) {
                        return `
                            <a href="/admin/members/show/${data}" class="/btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.members.delete', 'data') }}" method="POST" style="display:inline;">
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