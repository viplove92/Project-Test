@extends('layouts.backend')

@section('title', ' | Edit User')
@stop

@section('content')

{{--{!! Breadcrumbs::render('adduser.edit', $user) !!}--}}

@include('includes.status')
@include('includes.errors')

<div class="col-md-6">

<h3 class="semi-bold" align="center">Edit User</h3>

{!! Form::model($user, ['method' => 'PATCH','route' => ['members.update', $user->id] , 'class' => 'form-signin' , 'data-parsley-validate', 'files' => true, 'enctype' => 'multipart/form-data'] ) !!}

    <div class="col-sm-12">
          @include('apartmentadmin.profileform', ['submitButtonText' => 'Update User'])
    </div>

{!! Form::close() !!}

</div>

@stop
