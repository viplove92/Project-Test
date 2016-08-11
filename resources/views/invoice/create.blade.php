@extends('layouts.backend')

@section('title', ' | Add Invoice')@stop

@section('content')

{!! Breadcrumbs::render('invoice.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Add Invoice</h2>
        <br/>

        {!! Form::open(['url' => route('invoice.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                {{--@include('invoice.invoiceform')--}}
                @include('invoice.invoiceform2')
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('invoice.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('invoice.js.invoice2')
@endpush
