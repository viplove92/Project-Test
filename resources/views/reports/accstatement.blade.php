@extends('layouts.backend')

@section('title', ' | Account Statement')@stop

@section('content')

{!! Breadcrumbs::render('accstatement') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">

    <div class="col-sm-6 b-r b-dashed b-grey">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">

    <h4 align="center">Bank Name : {{ $account->account }}</h4>
    <h5 align="center">Type : {{ $type }}</h5>
    <h5 align="center"><b>{{ date('F d, Y', strtotime($from_date)) }}</b> to <b>{{ date('F d, Y', strtotime($to_date)) }}</b></h5>

    </div>
    </div>
    </div>

<div class="col-sm-6 ">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">

@if(count($lists))
<h5 align="center"> Export </h5>
<br/>
    <div class="export-options-container" align="center"></div>
    </div>
    </div>
</div>
</div>

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">
    @include('reports._accstatement')
@else
    <h4 align="center">No Transactions Noted Yet</h4>
@endif
</div>
</div>

<div align="center">
    <a href="{{ route('accstatement') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
</div>
<br/>

@stop

@push('scripts')
    @include('includes.js.mydatatable')
@endpush