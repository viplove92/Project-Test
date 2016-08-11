@extends('layouts.backend')

@section('title', ' | Add Bank Account')@stop

@section('content')

{!! Breadcrumbs::render('bankncash.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Add Bank Account</h2>
        <br/>

        {!! Form::open(['url' => route('bankncash.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('bankncash.bankncashform')
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('bankncash.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-1"></div>

@stop

