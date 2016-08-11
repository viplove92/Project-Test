<table class="table table-striped table-bordered" id="tableWithSearch">

    <thead>
    <tr>
        <th width="20%">Inventory Name</th>
        <th width="40%">Model Name</th>
        <th width="20%">Stock</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('inventory.edit', $list->id) }}"><h5>{{ $list->title }}</h5></a> </td>
            <td><a href="{{ route('inventory.edit', $list->id) }}"><h6>{{ $list->model_name }}</h6></a> </td>
            <td><a href="{{ route('inventory.edit', $list->id) }}"><h6>{{ $list->qty }}</h6></a> </td>
{{--            <td><a href="{{ route('inventory.edit', $list->id) }}"><h5><i class="fa fa-inr"></i> {{ number_format($list->price,2) }}</h5></a> </td>--}}
            <td>
                {!! Form::open(['method'=> 'DELETE', 'route' => ['inventory.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Asset" data-message="Asset will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>
</table>