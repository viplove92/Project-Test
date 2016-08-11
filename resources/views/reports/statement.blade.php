@extends('layouts.backend')

@section('title', ' | View Statement')@stop

@section('content')

{!! Breadcrumbs::render('accstatement') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="col-sm-3"></div>

<div class="col-sm-6">

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

<h3 align="center">View Statement</h3>
<br/>
    {!! Form::open(['url' => route('accstatementpost'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
        @include('reports._statementform')
    {!! Form::close() !!}

</div>
</div>
</div>

@stop