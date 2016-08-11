@extends('layouts.backend')

@section('title', ' | Edit Tax')@stop

@section('content')

{!! Breadcrumbs::render('tax.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">

<div class="col-sm-3"></div>

<div class="col-sm-6">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
        <h2 align="center">Edit Tax</h2>
        <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['tax.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
              @include('tax.taxform')
    {!! Form::close() !!}

<div class="col-sm-3"></div>
    </div>
    </div>
    <br/>
    <div align="center">
    <a href="{{ route('tax.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
    <br/>
    <br/>
    {!! Form::open(['method'=> 'DELETE', 'route' => ['tax.destroy', $list->id]]) !!}
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Tax" data-message="You will not be able to recover this Tax rate after deleting this ?">
            <i class="glyphicon glyphicon-trash"></i> Delete
        </button>
    {!! Form::close() !!}
    </div>
    <br/>


</div>
</div>
<div class="col-sm-2"></div>

@stop