@extends('layouts.backend')

@section('title', ' | Tax List')@stop

@section('content')

{!! Breadcrumbs::render('tax.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Tax Rate List</h2>
        <div align="center">
            <a href="{{ route('tax.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Tax Rates </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('tax._taxlist')
        @else
        <hr/>
                <h4 align="center">No Tax Rates Defined Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center">
            <a href="{{ route('tax.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Tax Rates </a>
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
