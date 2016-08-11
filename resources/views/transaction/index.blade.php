@extends('layouts.backend')

@section('title', ' | Add Deposit')@stop

@section('content')
{{--{!! Breadcrumbs::render('members.index') !!}--}}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>


<div class="row">

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="easybox float-e-margins">
    <div class="easybox-title">
        <h5>Add Deposit</h5>
    </div>
    <div class="easybox-content" id="easybox_form">

    {!! Form::open(['url' => route('deposit.store'),'class' => 'form-signin form-horizontal' ,'data-parsley-validate', 'files' => true] ) !!}

    @include('transaction._depositform')

    {!! Form::close() !!}



@include('deposit._recentdeposit')


@stop

@push('scripts')
    @include('includes.js.datepicker')
@endpush