@extends('layouts.backend')

@section('title', ' | Search Users')@stop

@section('content')

@include('includes.status')
@include('includes.errors')


@foreach($searchUser as $u)

<b>$u->name</b>
<br/>

@endforeach



@endsection