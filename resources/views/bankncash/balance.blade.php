@extends('layouts.backend')

@section('title', ' | Bank Accounts')@stop

@section('content')

{!! Breadcrumbs::render('accbal') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <h3 align="center">Financial Balance</h3>
    <br/>
    @if(count($lists))
          @include('bankncash._bankbalance')
    @else
    <hr/>
        <h4 align="center">No Bank Accounts Yet</h4>
    <hr/>
    @endif

</div>
</div>
@stop
