@extends('layouts.backend')

@section('title', ' | Edit Service')@stop

@section('content')

{!! Breadcrumbs::render('service.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
<br/>

    <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10" >
    <h2 align="center">Edit Service </h2>
    <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['service.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}

              @include('service.serviceform')

    {!! Form::close() !!}

    <div class="col-sm-1"></div>

    <br/>
    <div align="center">
    <a href="{{ route('service.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back to List</a>
    </div>

    </div>
    </div>
    </div>
@stop


{{-- Capitalize First Letter of each words (.form-signin) --}}
@push('scripts')
    @include('includes.js.eachwordcap')
@endpush