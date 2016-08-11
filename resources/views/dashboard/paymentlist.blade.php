<table id="myDataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">

    <h5> Payment Due Date : {{ $payment->due_date }}</h5>
    <h5 class="amount" data-d-group="2" >Amount : <i class="fa fa-inr"></i> {{ number_format($payment->amount,2) }}</h5>
    <thead>
    <tr>
        <th width="90%">Title</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($profiles as $list)
        <tr>
            <td><h5>{{ $list->account }}</h5> </td>
            {{--<td><a href="{{ route('payment.show', $list->id) }}"><h5>{{ $list->account }}</h5></a> </td>--}}
            <td align="center">
{{--                {!! Form::open(['method'=> 'DELETE', 'route' => ['payment.destroy', $list->id]]) !!}--}}
                {{--<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Poll" data-message="Poll will be deleted.">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i>--}}
                {{--</button>--}}
                {{--{!! Form::close() !!}--}}
            </td>
        </tr>

    @endforeach

    </tbody>
</table>