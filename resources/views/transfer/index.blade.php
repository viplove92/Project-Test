@extends('layouts.backend')

@section('title', ' | Recent Transfers')@stop

@section('content')

{!! Breadcrumbs::render('transfer.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Recent Transfer </h2>
        <div align="center">
            <a href="{{ route('transfer.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Transfer </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('transfer._recenttransfer')
        @else
        <hr/>
                <h4 align="center">No Transfers Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center">
            <a href="{{ route('transfer.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Transfer </a>
        </div>
        <br/>

@include('includes.partials._paginate')

</div>
</div>
<div class="col-sm-1"></div>

@stop