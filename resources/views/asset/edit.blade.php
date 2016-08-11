@extends('layouts.backend')

@section('title', ' | Edit Assets')
@stop

@section('content')

    {!! Breadcrumbs::render('asset.edit', $list) !!}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')

    <br/>
    <div class="row">

        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">
            <h2 align="center">Edit Assets</h2>
            <br/>

            {!! Form::model($list, ['method' => 'PATCH','route' => ['asset.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
                @include('asset.assetform')
            {!! Form::close() !!}

            </div>
            </div>
            <br/>
            <div align="center">
                <a href="{{ route('asset.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
                <br/>
                <br/>
                {!! Form::open(['method'=> 'DELETE', 'route' => ['asset.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Assets" data-message="You will not be able to recover this Assets rate after deleting this ?">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </div>
            <br/>
    </div>
    </div>

    <div class="col-sm-1"></div>

@stop