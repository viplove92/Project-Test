@extends('layouts.backend')

@section('title', ' | Apartment')@stop

@section('content')

@include('includes.status')
@include('includes.errors')

{!! Breadcrumbs::render('apartments.create') !!}

        <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-8" >
        <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
        <h2 align="center">Apartment Information</h2>
        <br/>
          <div class="form-group form-group-default" align="center">
            <label>Find your Area </label>
            <input id="autocomplete" class="form-control" placeholder="Enter your Area Name" type="text" size="60px"> </input>
          </div>

        {!! Form::open(['url' => route('apartments.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                  @include('apartments.form')
        {!! Form::close() !!}

        </div>
        </div>
        <br/>
        <div align="center">
            <a href="{{ route('my-apartments') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

</div>
</div>
        <div class="col-sm-2"></div>

@endsection

@push('scripts')
    @include('apartments.js.autocomplete')
@endpush

@push('scripts')
    @include('includes.js.eachwordcap')
@endpush

@push('scripts')
    @include('apartments.js.increamental')
@endpush