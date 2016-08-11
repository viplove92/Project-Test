@extends('layouts.backend')

@section('title', ' | Edit Complaints')
@stop

@section('content')

{!! Breadcrumbs::render('complaints.edit', $complaint) !!}

@include('includes.status')
@include('includes.errors')

<div class="col-md-12">

{!! Form::model($complaint, ['method' => 'PATCH','route' => ['complaints.update', $complaint->id] , 'class' => 'form-signin' , 'data-parsley-validate', 'files' => true, 'enctype' => 'multipart/form-data'] ) !!}

    <div class="col-sm-6 b-r b-dashed b-grey" align="center">
          @include('complaints.fileedit')
    </div>

    <div class="col-sm-6">
          @include('complaints.complaintsform', ['submitButtonText' => 'Update'])
    </div>

{!! Form::close() !!}

</div>

@stop


{{-- Capitalize First Letter of each words (.form-signin) --}}
@push('scripts')
    @include('includes.js.eachwordcap')
@endpush