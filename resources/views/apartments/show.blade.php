@extends('layouts.backend')

@section('title', ' | Apartment')
@stop

@section('content')

    @include('includes.status')
    @include('includes.errors')

    @include('apartments.details')

    <br/>

@stop

@push('scripts')
    @include('apartments.js.setowner')
@endpush