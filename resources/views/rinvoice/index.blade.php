@extends('layouts.backend')

@section('title', ' | Recurring Invoice List')@stop

@section('content')

{!! Breadcrumbs::render('rinvoice.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Recent Recurring Invoice </h2>
        <div align="center">
            <a href="{{ route('rinvoice.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Recurring Invoice </a>
        </div>
        <br/>
        {{--@if(count($lists))--}}
                  {{--@include('rinvoice._recentrinvoice')--}}
        {{--@else--}}
        {{--<hr/>--}}
                {{--<h4 align="center">No Recurring Invoice Yet</h4>--}}
        {{--<hr/>--}}
        {{--@endif--}}
        <br/>
        <div align="center">
            <a href="{{ route('rinvoice.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Recurring Invoice </a>
        </div>
        <br/>

{{--@include('includes.partials._paginate')--}}

</div>
</div>
<div class="col-sm-1"></div>

@stop