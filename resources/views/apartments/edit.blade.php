@extends('layouts.backend')

@section('title', ' | Edit Apartment')
@stop

@section('content')

{!! Breadcrumbs::render('apartments.edit', $apartment) !!}

@include('includes.status')
@include('includes.errors')

    <div class="container-fluid container-fixed-lg bg-white">
    <div class="row">
    <div class="col-sm-2 b-r b-dashed b-grey"></div>

    <div class="col-sm-8" >
    <h2 align="center">Edit Apartment Information</h2>
    <br/>

    {!! Form::model($apartment, ['method' => 'PATCH','route' => ['apartments.update', $apartment->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}

              @include('apartments.form', ['submitButtonText' => 'Update Apartment'])

    {!! Form::close() !!}

    <div class="col-sm-2 b-r b-dashed b-grey"></div>

    <br/>
    <div align="center">
    <a href="{{ route('my-apartments') }}" class="btn btn-info">Back to List</a>
    </div>

    </div>
    </div>
    </div>
@stop


{{-- Capitalize First Letter of each words (.form-signin) --}}
@push('scripts')
    @include('includes.js.eachwordcap')
@endpush