@extends('layouts.backend')

@section('title', ' | Add Recurring Invoice')@stop

@section('content')

{!! Breadcrumbs::render('rinvoice.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Add Recurring Invoice</h2>
        <br/>

        {!! Form::open(['url' => route('rinvoice.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                {{--@include('rinvoice.rinvoiceform')--}}
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('rinvoice.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush

@push('scripts')
    @include('includes.js.datepicker')
@endpush