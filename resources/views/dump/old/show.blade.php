@extends('......layouts.backend')

@section('content')

    {{ $staffs->first_name}}
    {{ $staffs->last_name}}
    {{ $staffs->address_1}}
    {{ $staffs->address_2}}
    {{ $staffs->date}}
    {{ $staffs->phone}}
    {{ $staffs->photo_url}}
    {{ $staffs->uida}}

    <a href="{{ route('staffs.index') }}" class="btn btn-info">Back to Index</a>

    {{--<a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">Edit Staff</a>--}}
    <hr>

    <a href="{{ route('staffs.create') }}" class="btn btn-info">Create </a>


@stop