@extends('layouts.backend')

@section('title', ' | Products List')@stop

@section('content')

{!! Breadcrumbs::render('product.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">
<div class="col-sm-12">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">

        <h2 align="center"> Products List </h2>
        <div align="center" class="row">
            <a href="{{ route('product.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Product </a>
            <a href="{{ route('service.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Service </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('product._productlist')
        @else
        <hr/>
                <h4 align="center">No Products Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center" class="row">
            <a href="{{ route('product.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Product </a>
            <a href="{{ route('service.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Service </a>
        </div>
        <br/>

    </div>
    </div>
@include('includes.partials._paginate')

</div>
</div>

@stop