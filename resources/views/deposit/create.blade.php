@extends('layouts.backend')

@section('title', ' | Add Deposit')@stop

@section('content')

{!! Breadcrumbs::render('deposit.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Add Deposit</h2>
            {!! Form::open(['url' => route('deposit.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                    @include('deposit.depositform')
            {!! Form::close() !!}
        </div>
        </div>
        <br/>
        <div align="center">
            <a href="{{ route('deposit.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-1"></div>

@stop