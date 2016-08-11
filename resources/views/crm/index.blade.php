@extends('layouts.backend')

@section('title', ' | List Contacts')@stop

@section('content')

{!! Breadcrumbs::render('crm.index') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')
<br/>
@include('crm._search')
@include('crm._filter')
@include('crm._card')

@include('includes.partials._paginate')

@stop