@extends('layouts.backend')

@section('title', ' | Add Quote')@stop

@section('content')

{!! Breadcrumbs::render('quote.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row ">
{{--<div class="row animated fadeInDown ">--}}

<div class="col-sm-1"></div>

<div class="col-sm-10 ">

        {!! Form::open(['url' => route('quote.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('quote.quoteform')
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('quote.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

    @include('quote.partials._addcustomermodal')


</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('quote.js.quotemain')
@endpush
