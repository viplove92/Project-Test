@extends('layouts.backend')

@section('title', ' | Create Ledger')@stop

@section('content')

{!! Breadcrumbs::render('ledger.create') !!}

@include('includes.status')
@include('includes.errors')

<div class="col-md-12">
<h3 class="semi-bold" align="center">Create Ledger</h3>
<br/>

{!! Form::open(['url' => route('ledger.store'), 'class' => 'form-signin', 'data-parsley-validate', 'files' => true, 'enctype' => 'multipart/form-data'] ) !!}

    <div class="col-sm-6">
          @include('ledgers.ledgerform')
    </div>

    <div class="col-sm-6">
          @include('ledgers.address')
    </div>

    <div align="center">
        {!! Form::submit('Add Ledger', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

</div>

@endsection
