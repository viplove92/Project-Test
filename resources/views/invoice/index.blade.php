@extends('layouts.backend')

@section('title', ' | Invoice')@stop

@section('content')

{!! Breadcrumbs::render('invoice.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Recent Invoice </h2>
        <div align="center">
            <a href="{{ route('invoice.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Invoice </a>
        </div>
        <br/>
        {{--@if(count($lists))--}}
                  {{--@include('invoice._recentquotes')--}}
        {{--@else--}}
        {{--<hr/>--}}
                {{--<h4 align="center">No Quotations Yet</h4>--}}
        {{--<hr/>--}}
        {{--@endif--}}
        <br/>
        <div align="center">
            <a href="{{ route('invoice.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Invoice </a>
        </div>
        <br/>

{{--@include('includes.partials._paginate')--}}

</div>
</div>
<div class="col-sm-1"></div>

@stop