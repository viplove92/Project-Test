    {{--<table id="myDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">--}}
    <table class="table table-hover" id="tableWithExportOptions" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Date</th>
        <th>Description</th>
        <th>Dr.</th>
        <th>Cr.</th>
        <th>Balance</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $list)
        <tr>
            <td>{{ $list->created_at }}</td>
            <td>{{ $list->description }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->dr,2) }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->cr,2) }}</td>
            <td class="amount" data-d-group="2"><i class="fa fa-inr"></i> {{ number_format($list->bal,2) }}</td>
        </tr>
    @endforeach

    </tbody>
    </table>