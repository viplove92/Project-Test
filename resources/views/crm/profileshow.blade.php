@extends('layouts.backend')

@section('title', ' | View Profile')@stop

@section('content')

    @include('includes.status')
    @include('includes.errors')
    <br/>

<div class="col-sm-2"></div>
{{--    @include('crm._sidetab')--}}
<div class="col-sm-8">

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <h4 align="center">Payment History</h4>
    @if(count($lists))
    @include('crm._payment_history')
        @else
    <h5 align="center">No Payment History</h5>
    @endif

</div>
</div>
</div>

<div class="col-sm-2"></div>


@stop