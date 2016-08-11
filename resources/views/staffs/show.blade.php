@extends('layouts.backend')

@section('title', ' | View Staff')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

@include('staffs.icard')


@endsection