@extends('layouts.backend')

@section('title', ' | Initiate Transfer')@stop

@section('content')

{!! Breadcrumbs::render('transfer.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Initiate Transfer</h2>
        <br/>

        {!! Form::open(['url' => route('transfer.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('transfer.transferform')
        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('transfer.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
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