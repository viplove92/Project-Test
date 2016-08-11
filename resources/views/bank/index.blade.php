@extends('layouts.backend')

@section('title', ' | Bank List')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

{!! Breadcrumbs::render('bank.index') !!}


@include('bank.table')


@endsection