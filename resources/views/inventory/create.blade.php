@extends('layouts.backend')

@section('title', ' | Add Inventory')@stop

@section('content')

    {!! Breadcrumbs::render('inventory.create') !!}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')

    <br/>

    <div class="row">

        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <div class="easybox float-e-margins">
                <div class="easybox-content" id="easybox_form">
                    <h2 align="center">Add Inventory</h2>
                    <br/>

                    {!! Form::open(['url' => route('inventory.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                        @include('inventory.inventoryform')
                    {!! Form::close() !!}

                </div>
            </div>
            <br/>
            <div align="center">
                <a href="{{ route('inventory.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
            </div>
            <br/>

        </div>
    </div>

    <div class="col-sm-1"></div>

@stop