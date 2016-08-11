@extends('layouts.backend')

@section('title', ' | Expense Reports')@stop

@section('content')

{!! Breadcrumbs::render('expensereport') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>

<h3 align="center">Expense Reports</h3>
<br/>
@if(count($expense))
    @include('reports._expense')
@else
<hr/>
        <h4 align="center">No Expenses Noted Yet</h4>
<hr/>
@endif

@stop

@push('scripts')
    @include('reports.js.expensereportline')
@endpush