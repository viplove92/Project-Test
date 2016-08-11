@extends('layouts.backend')

@section('title', ' | Add Asset')@stop

@section('content')

{!! Breadcrumbs::render('asset.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Add Asset</h2>
        <br/>

        {!! Form::open(['url' => route('asset.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('asset.assetform')
        {!! Form::close() !!}

        </div>
        </div>
        <br/>
        <div align="center">
            <a href="{{ route('asset.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>

<div class="col-sm-1"></div>

@stop