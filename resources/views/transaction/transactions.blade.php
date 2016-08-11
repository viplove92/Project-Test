@extends('layouts.backend')

@section('title', ' | Balance Sheet')@stop

@section('content')

{!! Breadcrumbs::render('viewtransaction') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">
<h3 align="center">View Transactions</h3>
<br/>
<div class="row" align="center">
    <a href="{{ route('viewtransaction') }}" class="btn btn-info"><i class="fa fa-list"></i> All Transactions </a>
@foreach($accounts as $account)
    <a href="{{ route('viewspecifictransaction', $account->id) }}" class="btn btn-info"><i class="fa fa-money"></i> {{ $account->account }} </a>
@endforeach
</div>
<hr/>
<br/>
    @include('transaction._transactionlist')

</div>
</div>
    @include('includes.partials._paginate')

@stop

@push('scripts')
    @include('includes.js.table')
@endpush