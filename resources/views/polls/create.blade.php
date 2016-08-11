@extends('layouts.backend')

@section('title', ' | Create Poll')@stop

@section('content')

    {!! Breadcrumbs::render('polls.create') !!}

    @include('includes.status')
    @include('includes.errors')

    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">
            <h2 align="center">Create Poll</h2>
            <br/>

            {!! Form::open(['url' => route('polls.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('polls.pollform')
            {!! Form::close() !!}

            <br/>
            <div align="center">
                <a href="{{ route('polls.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
            </div>

        </div>
    </div>
    <div class="col-sm-3"></div>

@stop

@push('scripts')
@include('polls.js.addrow')
@endpush