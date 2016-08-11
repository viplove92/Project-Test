@extends('layouts.backend')

@section('title', ' | Profile')
@stop

@section('content')

@include('includes.status')
@include('includes.errors')

@include('profiles.details')

<br/>

@stop