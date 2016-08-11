@extends('layouts.backend')

@section('title', ' | Recent Deposits')@stop

@section('content')

{!! Breadcrumbs::render('deposit.index') !!}


@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">

        <h2 align="center">Recent Deposit </h2>
        <div align="center">
            <a href="{{ route('deposit.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Deposit </a>
        </div>
        <br/>
        @if(count($lists))
                  @include('deposit._recentdeposit')
        @else
        <hr/>
                <h4 align="center">No Deposits Yet</h4>
        <hr/>
        @endif
        <br/>
        <div align="center">
            <a href="{{ route('deposit.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Deposit </a>
        </div>
        <br/>
</div>
</div>

@include('includes.partials._paginate')

</div>
</div>
<div class="col-sm-1"></div>

@stop