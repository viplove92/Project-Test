    <table class="table table-hover table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Date</th>
        <th>Account</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Dr</th>
        <th>Cr</th>
        <th>Balance</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $list)
        <tr>
            <td>{{ $list->date }}</td>
            <td>{{ $list->banks->account }} <i>({{ substr($list->banks->acc_number, -4) }})</i></td>
            <td>{{ $list->type }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->amount,2) }}</td>
            <td>{{ $list->description }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->dr,2) }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->cr,2) }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->bal,2) }}</td>

            @if($list->type == 'Income')
            <td align="center"><a href="{{ route('deposit.edit', $list->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
            @elseif($list->type == 'Expense' )
            <td align="center"><a href="{{ route('expense.edit', $list->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
            @elseif($list->type == 'Transfer' && $list->dr == '0.00' && $list->id == $last->id)
            <td align="center"><a href="{{ route('transfer.edit', $list->id) }}" class="btn btn-danger"><i class="fa fa-exchange"></i> Revert</a>
            @endif

            @if($list->id == $last->id)
                @if($list->type == 'Income')
                {!! Form::open(['method'=> 'DELETE', 'route' => ['deposit.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Deposit" data-message="You will not be able to recover this Deposit after deleting this ? Balance will be adjusted automatically.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}

                @elseif($list->type == 'Expense' )
                {!! Form::open(['method'=> 'DELETE', 'route' => ['expense.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Expense" data-message="You will not be able to recover this Expense after deleting this ? Balance will be adjusted automatically.">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}

                {{--@elseif($list->type == 'Transfer' && $list->dr == '0.00')--}}
                {{--{!! Form::open(['method'=> 'DELETE', 'route' => ['transfer.destroy', $list->id]]) !!}--}}
                {{--<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Revert" data-message="You will not be able to recover this Transfer after Reverting this ? Balance will be adjusted automatically.">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> Delete--}}
                {{--</button>--}}
                {{--{!! Form::close() !!}--}}
                @endif

            @else
            @endif
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>