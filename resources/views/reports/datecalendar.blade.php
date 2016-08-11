@extends('layouts.backend')

@section('title', ' | Date wise Reports')@stop

@section('content')

    {!! Breadcrumbs::render('reportsbydate') !!}

    @include('includes.status')
    @include('includes.errors')
    <br/>

    <h3 align="center">Datewise Reports</h3>
    <br/>

    <div class="row">
        <div class="col-sm-12">
            <div id="calendar"></div>

        </div>
    </div>
    <hr>

@stop

@push('scripts')
    @include('includes.js.calender')
@endpush