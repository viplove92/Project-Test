@extends('layouts.backend')

@section('content')

    {{ $mtncstaff->first_name}}
    {{ $mtncstaff->last_name}}
    {{ $mtncstaff->address_1}}
    {{ $mtncstaff->address_2}}
    {{ $mtncstaff->address_3}}
    {{ $mtncstaff->company_name}}
    {{ $mtncstaff->photo}}
    {{ $mtncstaff->uida}}

        <a href="{{ route('mtncstaffs.index') }}" class="btn btn-info">Back to Index</a>
        {{--<a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">Edit Staff</a>--}}
    <hr>

<a href="{{ route('mtncstaffs.create') }}" class="btn btn-info">Create </a>


@stop