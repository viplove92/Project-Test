@extends('layouts.backend')

@section('title', ' | Admin')@endsection


@section('content')
{!! Breadcrumbs::render('apartmentadmin.index') !!}

@include('includes.status')
@include('includes.errors')

{{--@include('cards.requests')--}}
{{--@include('cards.approvedmembers')--}}


@endsection
