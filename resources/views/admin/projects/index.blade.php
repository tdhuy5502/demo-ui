@extends('master.main')

@section('main')
    <div class="card shadow p-0">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5>Events</h5>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="fl-right inline-blk">
                        <a title=""
                            class="btn btn-success btn-sm px-4 text-white"
                            href="{{ route('admin.events.create') }}"><i
                                class='fas fa-plus'></i></a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="container">
                @include('admin.projects.elements.datatable')
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
<script>
    // $(document).ready(function() {
    //     $('#events-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{{ route('admin.events.getData') }}",
    //         columns: [
    //             { 
    //                 data: 'id', name: 'id',
    //                 orderable: false, 
    //             },
    //             { data: 'name', name: 'name' },
    //             { data: 'destination', name: 'destination' },
    //             { data: 'content', name: 'content' },
    //             { data: 'event_date', name: 'event_date' },
    //             { 
    //                 data: 'id', 
    //                 name: 'action',
    //                 render: function(data, type, row, meta) {
    //                     return `
    //                         <a href="/admin/events/show/${data}" class="/btn btn-sm btn-primary">Edit</a>
    //                         <form action="{{ route('admin.events.delete', 'data') }}" method="POST" style="display:inline;">
    //                             @csrf
    //                             @method('DELETE')
    //                             <input type="hidden" name="id" value="${data}">
    //                             <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    //                         </form>`;
    //                 }
    //             },
    //         ]
    //     });
    // });
</script> 
@endsection