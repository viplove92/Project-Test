@extends('layouts.backend')

@section('title', ' | Recent Expenses')@stop

@section('content')

{!! Breadcrumbs::render('expense.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Recent Expense </h2>
        <div align="center">
            <a href="{{ route('expense.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Expense </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('expense._recentexpense')
        @else
        <hr/>
                <h4 align="center">No Expenses Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center">
            <a href="{{ route('expense.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Expense </a>
        </div>
        <br/>
</div>
</div>
@include('includes.partials._paginate')

</div>
</div>
<div class="col-sm-1"></div>

@stop