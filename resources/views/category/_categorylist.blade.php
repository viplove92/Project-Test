<table class="table table-striped table-bordered" id="tableWithSearch">

    <thead>
    <tr>
        <th width="40%">Name</th>
        <th width="30%">Type</th>
        <th width="20%">Serial Order</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('category.edit', $list->id) }}"><h5>{{ $list->name }}</h5></a> </td>
            <td><a href="{{ route('category.edit', $list->id) }}"><h6>{{ $list->type }}</h6></a> </td>
            <td><a href="{{ route('category.edit', $list->id) }}"><h6>{{ $list->sorder }}</h6></a> </td>
            <td>
                {!! Form::open(['method'=> 'DELETE', 'route' => ['category.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Category" data-message="Category will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>
</table>