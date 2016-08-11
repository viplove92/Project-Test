@extends('layouts.backend')

@section('title', ' | Income vs Expense')@stop

@section('content')

{!! Breadcrumbs::render('incomeexpense') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>

<h3 align="center">Income vs Expense</h3>
<br/>
@if(count($income))
    @include('transaction._incomevsexpenselist')
@else
<hr/>
        <h4 align="center">No Transactions Yet</h4>
<hr/>
@endif

@stop

@push('scripts')
@include('transaction.js.incomevsexpensechart')
@endpush