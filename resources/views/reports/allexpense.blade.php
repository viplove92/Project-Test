@extends('layouts.backend')

@section('title', ' | All Expenses')@stop

@section('content')

{!! Breadcrumbs::render('allexpense') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

<h2 align="center">All Expenses</h2>
        <br/>
        @if(count($lists))
                  @include('reports._allexpenselist')
        @else
        <hr/>
                <h4 align="center">No Expenses Noted Yet</h4>
        <hr/>
        @endif
        <br/>


</div>
</div>
        @include('includes.partials._paginate')
</div>

@stop