@extends('layouts.backend')

@section('title', ' | Update Staff')@stop

@section('content')

{!! Breadcrumbs::render('staffs.create') !!}

@include('includes.status')
@include('includes.errors')

{!! Form::model($staff, ['method' => 'PATCH','route' => ['staffs.update', $staff->id], 'class' => 'form-signin' , 'data-parsley-validate', 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}

    @include('staffs.file-edit')

    @include('staffs.form', ['submitButtonText' => 'Update Staff'])

{!! Form::close() !!}

@endsection