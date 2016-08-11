@extends('layouts.backend')

@section('title', ' | Add Category')@stop

@section('content')

{!! Breadcrumbs::render('category.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-3"></div>

<div class="col-sm-6">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Add Category</h2>
        <br/>

        {!! Form::open(['url' => route('category.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('category.categoryform')
        {!! Form::close() !!}

        </div>
        </div>
        <br/>
        <div align="center">
            <a href="{{ route('category.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>

<div class="col-sm-3"></div>

@stop