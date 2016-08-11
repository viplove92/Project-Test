    <table id="myDataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
        <th width="30%">Bank Name</th>
        <th width="20%">Account Number</th>
        <th width="20%">Description</th>
        <th width="20%">Balance</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('bankncash.edit', $list->id) }}"><h5>{{ $list->account }}</h5></a> </td>
            <td><a href="{{ route('bankncash.edit', $list->id) }}"><h5>{{ $list->acc_number }}</h5></a> </td>
            <td><a href="{{ route('bankncash.edit', $list->id) }}"><h5>{{ $list->description }}</h5></a> </td>
            <td><a href="{{ route('bankncash.edit', $list->id) }}"><h5>{{ $list->balance }}</h5></a> </td>
            <td>
            {!! Form::open(['method'=> 'DELETE', 'route' => ['bankncash.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Bank" data-message="Bank will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i>
                </button>
            {!! Form::close() !!}
            </td>
        </tr>

    @endforeach

    </tbody>
    </table>