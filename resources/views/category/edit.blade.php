@extends('layouts.backend')

@section('title', ' | Edit Category')
@stop

@section('content')

    {!! Breadcrumbs::render('category.edit', $list) !!}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')

    <br/>
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">
            <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">
            <h2 align="center">Edit Category</h2>
            <br/>

            {!! Form::model($list, ['method' => 'PATCH','route' => ['category.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
                @include('category.categoryform')
            {!! Form::close() !!}

            </div>
            </div>
            <br/>
            <div align="center">
                <a href="{{ route('category.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
                <br/>
                <br/>
                {!! Form::open(['method'=> 'DELETE', 'route' => ['category.destroy', $list->id]]) !!}
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Category" data-message="You will not be able to recover this Category rate after deleting this ?">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </div>
            <br/>
    </div>
    </div>

    <div class="col-sm-3"></div>

@stop