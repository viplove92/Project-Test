@extends('layouts.backend')

@section('title', ' | Income Reports')@stop

@section('content')

{!! Breadcrumbs::render('incomereport') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

<h3 align="center">Income Reports</h3>
<br/>
@if(count($income))
    @include('reports._income')
@else
<hr/>
        <h4 align="center">No Income Noted Yet</h4>
<hr/>
@endif

</div>
</div>

@stop

@push('scripts')
    @include('reports.js.incomereportline')
@endpush