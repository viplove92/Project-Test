<table class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
    <tr>
        <th>Bank Account</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>

    @foreach($listsexpenses as $list)
        <tr>
            <td><a href="{{ route('expense.edit', $list->id) }}"><h5>{{ $list->banks->account }}</h5></a> </td>
            <td><a href="{{ route('expense.edit', $list->id) }}"><h5>{{ $list->description }}</h5></a> </td>
            <td class="amount" data-d-group="2" ><h5><i class="fa fa-inr"></i> {{ number_format($list->amount,2) }}</h5></td>
        </tr>
    @endforeach

    </tbody>
    </table>