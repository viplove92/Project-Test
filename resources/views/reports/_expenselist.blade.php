    <table class="table table-hover table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Date</th>
        <th>Account</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Dr</th>
        <th>Balance</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $list)
        <tr>
            <td>{{ $list->date }}</td>
            <td>{{ $list->banks->account }} (<i>{{ substr($list->banks->acc_number, -4) }}</i>)</td>
            <td>{{ $list->type }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->amount,2) }}</td>
            <td>{{ $list->description }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->dr,2) }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->bal,2) }}</td>
        </tr>
    @endforeach

    </tbody>
    </table>