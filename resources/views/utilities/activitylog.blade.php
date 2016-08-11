@extends('layouts.backend')

@section('title', ' | Activity Log')@stop

@section('content')

{!! Breadcrumbs::render('accstatement') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

    <div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">

        <h2 align="center">Activity Log </h2>
        <div align="center">
        {{--{!! Form::open(['method'=> 'DELETE', 'route' => ['deleteactivity', $lists->id]]) !!}--}}
            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Clear Log" data-message="30 Logs will be cleared">
                <i class="glyphicon glyphicon-trash"></i> Clear Log
            </button>
        {{--{!! Form::close() !!}--}}
        </div>
        <br/>
        @if(count($lists))
                  @include('utilities._log_list')
        @else
        <hr/>
                <h4 align="center">No Activities Logged Yet</h4>
        <hr/>
        @endif
        <br/>
        <br/>
    </div>
    </div>

@include('includes.partials._paginate')
</div>
</div>
<div class="col-sm-1"></div>

@stop