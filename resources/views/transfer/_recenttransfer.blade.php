    <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th width="15%">Source / Dest.</th>
        <th width="20%">Bank Account</th>
        <th width="50%">Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><a href="#"><h5>{{ $list->fromto }}</h5></a> </td>

            <td><a href="#"><h5>{{ $list->banks->account }}</h5></a> </td>

            <td><a href="#"><h5>{{ $list->description }}</h5></a> </td>

            <td class="amount" data-d-group="2"><h5>{{ number_format($list->amount,2) }}</h5></td>
        </tr>
    @endforeach

    </tbody>
    </table>