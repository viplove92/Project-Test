@extends('layouts.backend')

@section('title', ' | Complaints')@stop

@section('content')

{!! Breadcrumbs::render('complaints.create') !!}

@include('includes.status')
@include('includes.errors')

<div class="col-md-12">
    <h3 class="semi-bold" align="center">Create Complaint</h3>

{!! Form::open(['url' => route('complaints.store'), 'class' => 'form-signin', 'data-parsley-validate', 'files' => true, 'enctype' => 'multipart/form-data'] ) !!}

    <div class="col-sm-6 b-r b-dashed b-grey" align="center">
          @include('complaints.fileupload')
    </div>

    <div class="col-sm-6">
          @include('complaints.complaintsform')
    </div>

{!! Form::close() !!}

</div>

@stop
