@extends('layouts.backend')

@section('title', ' | Create User')@stop

@section('content')

{!! Breadcrumbs::render('members.create') !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

<h3 align="center">Create User</h3>

{!! Form::open(['url' => route('members.store'), 'class' => 'form-signin' , 'data-parsley-validate' , 'files' => true, 'enctype' => 'multipart/form-data'] ) !!}
    @include('apartmentadmin.profileform')
{!! Form::close() !!}

</div>
</div>

<div class="col-sm-3"></div>

    <br/>
<div align="center">
    <a href="{{ route('members.index') }}" class="btn btn-info">Back to User List</a>
</div>

</div>

@stop

