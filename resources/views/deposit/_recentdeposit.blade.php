    <table class="table table-striped table-bordered">
    {{--<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">--}}

    <thead>
    <tr>
        <th width="20%">Bank Account</th>
        <th width="50%">Description</th>
        <th>Amount</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><h5>{{ $list->banks->account }}</h5> </td>
            <td><h5>{{ $list->description }}</h5> </td>
            <td class="amount" data-d-group="2" ><h5><i class="fa fa-inr"></i> {{ number_format($list->amount,2) }}</h5></td>
            <td>
            <a href="{{ route('deposit.edit', $list->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> Edit </a>

            </td>
        </tr>
    @endforeach

    </tbody>
    </table>