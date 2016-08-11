@extends('layouts.backend')

@section('title', ' | Create Product')@stop

@section('content')

{!! Breadcrumbs::render('product.create') !!}

@include('includes.status')
@include('includes.errors')

<div class="row">

<div class="col-sm-1"></div>

        <div class="col-sm-10">
        <h2 align="center">Add Product</h2>
        <br/>

        {!! Form::open(['url' => route('product.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}

                  @include('product.productform')

        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('product.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>

</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('includes.js.eachwordcap')
@endpush