@extends('layouts.backend')

@section('title', ' | Bank Accounts')@stop

@section('content')

{!! Breadcrumbs::render('bankncash.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
        <h2 align="center">Bank Accounts</h2>
        <div align="center">
            <a href="{{ route('bankncash.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Bank Account </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('bankncash._banklist')
        @else
        <hr/>
                <h4 align="center">No Bank Accounts Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center">
            <a href="{{ route('bankncash.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Bank Account </a>
        </div>
        <br/>
</div>
</div>
@include('includes.partials._paginate')

</div>
</div>
<div class="col-sm-1"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush