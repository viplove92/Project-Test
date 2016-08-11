@extends('layouts.backend')

@section('title', ' | Edit Product')@stop

@section('content')

{!! Breadcrumbs::render('product.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>

    <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10" >
    <h2 align="center">Edit Product </h2>
    <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['product.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}

              @include('product.productform', ['submitButtonText' => 'Update Product'])

    {!! Form::close() !!}

    <div class="col-sm-1"></div>

    <br/>
    <div align="center">
    <a href="{{ route('product.index') }}" class="btn btn-info">Back to List</a>
    </div>

    </div>
    </div>
@stop

@push('scripts')
    @include('includes.js.eachwordcap')
@endpush