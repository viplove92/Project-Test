    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Designation</th>
                <th>Photos</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>

@push('scripts')

<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'first_name', name: 'first_name' },
            { data: 'last_name', name: 'last_name' },
            { data: 'designation', name: 'designation' },
            { data: 'photos', name: 'photos' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>

@endpush