@extends('layouts.backend')

@section('title', ' | Create Service')@stop

@section('content')

{!! Breadcrumbs::render('service.create') !!}

@include('includes.status')
@include('includes.errors')
<br/>

<div class="row">

<div class="col-sm-1"></div>

        <div class="col-sm-10">
        <h2 align="center">Add Service</h2>
        <br/>

        {!! Form::open(['url' => route('service.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}

                  @include('service.serviceform', ['submitButtonText' => 'Save Service'])

        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('service.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>

</div>
</div>
<div class="col-sm-1"></div>

@stop