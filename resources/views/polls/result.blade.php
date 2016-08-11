@extends('layouts.backend')

@section('title', ' | Poll Result')@stop

@section('content')

    {!! Breadcrumbs::render('polls.show', $poll) !!}

@include('includes.status')
@include('includes.errors')

<div class="col-sm-2"></div>

<div class="col-sm-8">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <div id="container" style="height: 400px"></div>

</div>
</div>
</div>

    <h4>Total Votes</h4>

<div class="col-sm-2"></div>
    <div align="center">
        <a href="{{ route('polls.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
    </div>


@endsection

@push('scripts')
    @include('polls.js.barchart')
@endpush
