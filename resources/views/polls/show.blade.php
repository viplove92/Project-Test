@extends('layouts.backend')

@section('title', ' | Vote')@stop

@section('content')

{!! Breadcrumbs::render('polls.show', $list) !!}

@include('includes.status')
@include('includes.errors')

<h4 align="center">Vote Now</h4>
@include('polls._card')


@endsection

@push('scripts')
@include('includes.js.radio')
@endpush

@push('scripts')
@include('includes.js.radio2')
@endpush

