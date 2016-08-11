@extends('layouts.backend')

@section('title', ' | Inventory')@stop

@section('content')

{!! Breadcrumbs::render('inventory.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">
<div class="col-sm-12">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
            <div class="row">
                <div class="col-sm-6">
                    <h2> Inventory List </h2>
                </div>
                <div class="col-sm-6" style="padding-top: 10px" >
                    <a href="{{ route('inventory.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Inventory </a>
                </div>
            </div>
            </div>
        </div>

        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
                    @if(count($lists))
                        @include('inventory._inventorylist')
                    @else
                        <hr/>
                        <h4 align="center">No Inventory List Yet</h4>
                        <hr/>
                    @endif
        </div>
        </div>
            @include('includes.partials._paginate')
</div>
</div>

@stop