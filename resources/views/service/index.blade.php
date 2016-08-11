@extends('layouts.backend')

@section('title', ' | Services List')@stop

@section('content')

{!! Breadcrumbs::render('service.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">
<div class="col-sm-12">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
    <h2 align="center"> Services List </h2>
    <div align="center" class="row">
        <a href="{{ route('product.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Product </a>
        <a href="{{ route('service.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Service </a>
    </div>
@if(count($lists))
                  @include('service._servicelist')
        @else
        <hr/>
                <h4 align="center">No Services Yet</h4>
        <hr/>
        @endif
</div>
</div>

@include('includes.partials._paginate')

</div>
</div>

@stop