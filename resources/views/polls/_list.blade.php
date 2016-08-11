<table id="myDataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
        <th width="90%">Title</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('polls.show', $list->id) }}"><h5>{{ $list->title }}</h5></a> </td>
            <td align="center">
                {!! Form::open(['method'=> 'DELETE', 'route' => ['polls.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Poll" data-message="Poll will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i>
                </button>
                {!! Form::close() !!}
            </td>
        </tr>

    @endforeach

    </tbody>
</table>