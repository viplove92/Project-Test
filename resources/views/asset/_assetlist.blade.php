<table class="table table-striped table-bordered" id="tableWithSearch">

    <thead>
    <tr>
        <th width="20%">Asset Name</th>
        <th width="40%">Description</th>
        <th width="20%">Purchase Date</th>
        <th width="20%">Price</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('asset.edit', $list->id) }}"><h5>{{ $list->display_name }}</h5></a> </td>
            <td><a href="{{ route('asset.edit', $list->id) }}"><h6>{{ $list->brand_name }}</h6></a> </td>
            <td><a href="{{ route('asset.edit', $list->id) }}"><h6>{{ $list->purchase_date }}</h6></a> </td>
            <td><a href="{{ route('asset.edit', $list->id) }}"><h5><i class="fa fa-inr"></i> {{ number_format($list->price,2) }}</h5></a> </td>
            <td>
                {!! Form::open(['method'=> 'DELETE', 'route' => ['asset.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Asset" data-message="Asset will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>
</table>