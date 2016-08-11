@extends('layouts.backend')

@section('title', ' | All Ledgers')@stop

@section('content')


    @include('ledgers.table')

<br/>
<a href="{{ route('ledger.create') }}" class="btn btn-primary">Create Ledgers</a>

@endsection

