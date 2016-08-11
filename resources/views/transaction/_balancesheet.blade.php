    <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th width="50%">Bank Account</th>
        <th width="50%">Balance</th>
    </tr>
    </thead>

    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><h5>{{ $list->account }}</h5></td>
            <td><h5 align="right"><i class="fa fa-inr"></i> {{ number_format($list->balance, 2) }}</h5></td>
        </tr>
    @endforeach

    </tbody>
    </table>

    <div  class="row">
        <div class="col-sm-6">

        </div>
        <div align="right" class="col-sm-6">
            <h4>Total Balance</h4>
            <h4><i class="fa fa-inr"></i> {{ number_format($tbal,2) }}</h4>
        </div>
    </div>