@extends('layouts.backend')

@section('title', ' | Transactions')@stop

@section('content')

{{--{!! Breadcrumbs::render('viewspecifictransaction', $lists) !!}--}}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>

<h3 align="center">Bank Wise Transactions</h3>
@if(count($acc_name))
<h4 align="center">{{ $acc_name->banks->account }}</h4>
@else
@endif
<hr/>
<div class="row" align="center">
<a href="{{ route('viewtransaction') }}" class="btn btn-info"><i class="fa fa-list"></i> All Transactions </a>
@foreach($accounts as $account)
    <a href="{{ route('viewspecifictransaction', $account->id) }}" class="btn btn-info"><i class="fa fa-money"></i> {{ $account->account }} </a>
@endforeach
</div>
<hr/>
<br/>

@if(count($lists))
    @include('transaction._specifictransactionlist')
@else
<hr/>
        <h4 align="center">No Transactions Yet</h4>
<hr/>
@endif

@include('includes.partials._paginate')

@stop


@push('scripts')
    @include('includes.js.table')
@endpush