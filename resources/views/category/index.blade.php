@extends('layouts.backend')

@section('title', ' | Categories')@stop

@section('content')

{!! Breadcrumbs::render('category.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">
<div class="col-sm-12">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
            <div class="row">
                <div class="col-sm-6">
                    <h2> Category List </h2>
                </div>
                <div class="col-sm-6" style="padding-top: 10px" >
                    <a href="{{ route('category.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Category </a>
                </div>
            </div>
        </div>
        </div>

    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
            @if(count($lists))
                    @include('category._categorylist')
            @else
                <hr/>
                <h4 align="center">No Categories Yet</h4>
                <hr/>
            @endif

    </div>
    </div>
</div>
</div>

@stop