@extends('layouts.backend')

@section('title', ' | Add Tax')@stop

@section('content')

{!! Breadcrumbs::render('tax.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">
<div class="col-sm-3"></div>

<div class="col-sm-6">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
        <h2 align="center">Add Tax</h2>
        <br/>

        {!! Form::open(['url' => route('tax.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('tax.taxform')
        {!! Form::close() !!}

    </div>
    </div>
        <br/>
        <div align="center">
            <a href="{{ route('tax.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
        <br/>

</div>
</div>
<div class="col-sm-3"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush

@push('scripts')
    @include('includes.js.datepicker')
@endpush