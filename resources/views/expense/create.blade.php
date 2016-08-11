@extends('layouts.backend')

@section('title', ' | Add Expense')@stop

@section('content')

{!! Breadcrumbs::render('expense.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Add Expense</h2>
        <br/>

        {!! Form::open(['url' => route('expense.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('expense.expenseform')
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('expense.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush

@push('scripts')
    @include('includes.js.datepicker')
@endpush