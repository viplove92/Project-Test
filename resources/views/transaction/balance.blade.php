@extends('layouts.backend')

@section('title', ' | Balance Sheet')@stop

@section('content')

{!! Breadcrumbs::render('accbal') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">
<h3 align="center">Balance Sheet</h3>

    @if(count($lists))
        @include('transaction._balancesheet')
    @else
        <hr/>
        <h4 align="center">No Bank Accounts Yet</h4>
        <hr/>
    @endif

</div>
</div>

@include('includes.partials._paginate')

@stop