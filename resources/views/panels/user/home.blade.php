@extends('layouts.backend')

@section('title', ' | Welcome')@endsection

@section('content')

{!! Breadcrumbs::render('home') !!}

@include('includes.status')
@include('includes.errors')

<div class="row animated fadeInDown">
    @include('dashboard.defaultapartment')

    @if($isAdmin == true)
        @include('dashboard.manageapartment')
    @endif
</div>

@if($isAdmin == false)
<div class="row animated fadeInDown">
    @include('dashboard.outstanding')
    @include('dashboard.expense-month')
</div>

@elseif($isAdmin == true)
    <div class="row animated fadeInDown">
{{--        @include('dashboard.income')--}}
{{--        @include('dashboard.expense')--}}
        @include('dashboard.income-month')
        @include('dashboard.expense-month')
        @include('dashboard.outstanding')
    </div>
@endif


@if($isAdmin == true)

    <br>
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
            <div align="center" id="container" style="width:100%; height:400px;"></div>
        </div>
        </div>
    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">
            <h4 align="center">Maintenance Payment</h4>
                @include('dashboard.paymentlist')
            </div>
            </div>
    </div>

        <div class="col-sm-6">
            <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">
            <div align="center" id="piechart" style="width:100%; height:400px;"></div>

            </div>
            </div>
        </div>
    </div>

@endif

<br>
<div class="row">
    <div class="col-sm-6 b-r b-dashed b-grey">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h4 align="center"> Recent Incomes</h4>
            <hr>
            @if(count($listsincomes))
                @include('dashboard.recentincomes')
            @else
                <h4 align="center">No Income Noted Yet</h4>
            @endif
        </div>
        </div>
    </div>

     <div class="col-sm-6">
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h4 align="center"> Recent Expenses</h4>
            <hr>
            @if(count($listsexpenses))
                @include('dashboard.recentexpenses')
            @else
                <h4 align="center">No Expenses Noted Yet</h4>
            @endif
        </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    @include('dashboard.js.chart')
@endpush
@push('scripts')
    @include('dashboard.js.piechart')
@endpush
