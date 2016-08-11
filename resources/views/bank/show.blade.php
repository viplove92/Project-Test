@extends('layouts.backend')

@section('title', ' | View Bank')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

@include('bank.details')


@endsection