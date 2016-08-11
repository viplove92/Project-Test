@foreach($staffs as $staff)
    {{ $staff->first_name}}
    {{ $staff->last_name}}

        <a href="{{ route('staffs.show', $staff->id) }}" class="btn btn-info">View Staff Details</a>
        <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">Edit Staff</a>

    <hr>
@endforeach