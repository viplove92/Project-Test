@extends('layouts.backend')

@section('title', ' | Create Contact')@stop

@section('content')

{!! Breadcrumbs::render('crm.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>

<div class="row">

<div class="col-sm-2"></div>

        <div class="col-sm-8">
        <h2 align="center">Create Contact</h2>
        <br/>

        <div class="form-group form-group-default" align="center">
            <label>Find Area </label>
            <input id="autocomplete" class="form-control" placeholder="Enter your Area Name" type="text" size="60px"> </input>
        </div>

        {!! Form::open(['url' => route('crm.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}

                  @include('crm.crmform')

        {!! Form::close() !!}

        <br/>
        <div align="center">
            <a href="{{ route('crm.index') }}" class="btn btn-info">Back to List</a>
        </div>

        </div>
        </div>
</div>
<div class="col-sm-2"></div>

@stop

@push('scripts')
    @include('crm.js.autocomplete')
@endpush

@push('scripts')
    @include('includes.js.eachwordcap')
@endpush