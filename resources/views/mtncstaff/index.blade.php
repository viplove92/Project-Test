@extends('layouts.backend')

@section('content')

@include('includes.status')
@include('includes.errors')

@foreach($mtncstaffs as $mtncstaff)
    {{ $mtncstaff->first_name}}
    {{ $mtncstaff->last_name}}

        <a href="{{ route('mtncstaffs.show', $mtncstaff->id) }}" class="btn btn-info">View Details</a>
        <a href="{{ route('mtncstaffs.edit', $mtncstaff->id) }}" class="btn btn-primary">Edit Staff</a>

        <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['mtncstaffs.destroy', $mtncstaff->id]
                ]) !!}

                {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
        {{--<a href="{{ route('mtncstaffs.destroy', $mtncstaff->id) }}" class="btn btn-danger">Delete Staff</a>--}}
<hr>
@endforeach

<a href="{{ route('mtncstaffs.create') }}" class="btn btn-info">Create </a>


@stop