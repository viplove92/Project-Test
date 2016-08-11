    <table class="table table-bordered">
    <thead>
    <tr>
        <th width="60%">Name</th>
        <th width="20%">Tax Rate</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('tax.edit', $list->id) }}"><h5>{{ $list->name }}</h5></a> </td>
            <td><a href="{{ route('tax.edit', $list->id) }}"><h5>{{ $list->rate }} %</h5></a> </td>
            <td>
            {!! Form::open(['method'=> 'DELETE', 'route' => ['tax.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Deposit" data-message="You will not be able to recover this Deposit after deleting this ?">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>