@extends('layouts.backend')

@section('title', ' | Add Staff')@stop

@section('content')

{!! Breadcrumbs::render('staffs.create') !!}

@include('includes.status')
@include('includes.errors')
<br/>
<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <br/>

{!! Form::open(['url' => route('staffs.store'),'class' => 'form-signin','data-parsley-validate','id' => 'myForm', 'files' => true] ) !!}

    @include('staffs.file-upload')

    @include('staffs.form')

{!! Form::close() !!}

<br/>
    <div align="center">
        <a href="{{ route('staffs.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
    </div>
    <br/>

</div>
</div>

<div class="col-sm-1"></div>

@endsection
