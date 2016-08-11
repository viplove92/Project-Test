@extends('layouts.backend')

@section('title', ' | Edit Contact')
@stop

@section('content')

{!! Breadcrumbs::render('crm.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
<br/>

    <div class="container-fluid container-fixed-lg bg-white">
    <div class="row">
    <div class="col-sm-2 b-r b-dashed b-grey"></div>

    <div class="col-sm-8" >
    <h2 align="center">Edit Contact </h2>
    <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['crm.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}

              @include('crm.crmform', ['submitButtonText' => 'Update Contact'])

    {!! Form::close() !!}

    <div class="col-sm-2 b-r b-dashed b-grey"></div>

    <br/>
    <div align="center">
    <a href="{{ route('crm.index') }}" class="btn btn-info">Back to List</a>
    </div>

    </div>
    </div>
    </div>
@stop


{{-- Capitalize First Letter of each words (.form-signin) --}}
@push('scripts')
    @include('includes.js.eachwordcap')
@endpush