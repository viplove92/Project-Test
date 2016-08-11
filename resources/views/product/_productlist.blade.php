    <table class="table table-striped table-bordered" id="tableWithSearch" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th width="30%">Product Name</th>
        <th width="40%">Description</th>
        <th width="30%">Price</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="{{ route('product.edit', $list->id) }}"><h5>{{ $list->name }}</h5></a> </td>
            <td><a href="{{ route('product.edit', $list->id) }}"><h6>{{ $list->description }}</h6></a> </td>
            <td><a href="{{ route('product.edit', $list->id) }}"><h5><i class="fa fa-inr"></i> {{ number_format($list->sales_price,2) }}</h5></a> </td>
            <td>
            {!! Form::open(['method'=> 'DELETE', 'route' => ['product.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Product" data-message="Product will be deleted.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>