@extends('layouts.backend')

@section('title', ' | Quotation')@stop

@section('content')

{!! Breadcrumbs::render('quote.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">

        <h2 align="center">Recent Invoice </h2>
        <div align="center">
            <a href="{{ route('quote.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Expense </a>
        </div>
        <br/>
        {{--@if(count($lists))--}}
                  {{--@include('quote._recentquotes')--}}
        {{--@else--}}
        {{--<hr/>--}}
                {{--<h4 align="center">No Quotations Yet</h4>--}}
        {{--<hr/>--}}
        {{--@endif--}}
        <br/>
        <div align="center">
            <a href="{{ route('quote.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Expense </a>
        </div>
        <br/>

{{--@include('includes.partials._paginate')--}}

</div>
</div>
</div>
</div>
<div class="col-sm-1"></div>

@stop