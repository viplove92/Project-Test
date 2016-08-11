@extends('layouts.backend')

@section('title', ' | Punch in')

@stop

@section('content')

    @include('includes.status')
    @include('includes.errors')

    <div class="col-md-6">

    {!! Form::open(['url' => route('visitors.store'),'class' => 'form-signin', 'files' => true] ) !!}

        @include('visitors.visitorform', ['submitButtonText' => 'Punch In'])

    {!! Form::close() !!}

    <a href="{{ route('visitors.index') }}" class="btn btn-info">Current Visitors</a>


    </div>

    <div class="pad-box">
      <h3 class="pad-lips text-center">now is the time for all good men to come to the aid of their country</h3>
      <h1 class="text-center">&darr;</h1>
      <h3 class="title pad-lips text-center">now is the time for all good men to come to the aid of their country</h3>
    </div>

@stop


@push('scripts')
    @include('includes.js.eachwordcap')
@endpush