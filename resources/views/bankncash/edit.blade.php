@extends('layouts.backend')

@section('title', ' | Edit Bank')
@stop

@section('content')

{!! Breadcrumbs::render('bankncash.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>
<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Edit Bank</h2>
        <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['bankncash.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
              @include('bankncash.bankncashform')
    {!! Form::close() !!}

<div class="col-sm-1"></div>

    <br/>
    <br/>
    <div align="center">
    <a href="{{ route('bankncash.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
    <br/>
    <br/>
    {!! Form::open(['method'=> 'DELETE', 'route' => ['bankncash.destroy', $list->id]]) !!}
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Bank" data-message="Bank will be Deleted.">
            <i class="glyphicon glyphicon-trash"></i> Delete
        </button>
    {!! Form::close() !!}
    </div>
    <br/>

</div>
</div>
<div class="col-sm-2"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush
