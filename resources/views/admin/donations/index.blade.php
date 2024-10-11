@extends('master.main')

@section('main')
<div class="card shadow p-0">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5>Donations List</h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="fl-right inline-blk">
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            @include('admin.donations.elements.datatable')
        </div>
    </div>
</div>
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#donations-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.donations.getData') }}",
            columns: [
                { 
                    data: 'id', name: 'id',
                    orderable: false, 
                },
                { data: 'donator_name', name: 'donator_name' },
                { data: 'project_name', name: 'project_id' },
                { data: 'amount', name: 'amount' },
                { data: 'message', name: 'message' },
                { data: 'created_at', name: 'created_at' },
                { 
                    data: 'id', 
                    name: 'action',
                    render: function(data, type, row, meta) {
                        return `
                            
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