    <table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th width="60%">Bank Account</th>
        <th width="40%">Balance</th>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <th width="60%" style="padding-left: 20px">Total</th>
        <th width="40%" style="padding-left: 20px">{{ number_format($tbal,2) }}</th>
    </tr>
    </tfoot>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><h5>{{ $list->account }}</h5></td>
            <td><h5>{{ $list->balance }}</h5></td>
        </tr>
    @endforeach

    </tbody>
    </table>