<table id="myDataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
        <th width="50%">Amount</th>
        <th width="30%">Date</th>
        <th>Payment Status</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><h5>{{ $list->amount }}</h5> </td>
            <td><h5>{{ $list->created_at }}</h5> </td>
            <td><h5>Done</h5> </td>
        </tr>

    @endforeach

    </tbody>
</table>