@extends('layouts.backend')

@section('title', ' | Visitor List')

@stop

@section('content')

    @include('includes.status')
    @include('includes.errors')

    <div class="col-md-6">
        <h3> Current Visitors </h3>
        <hr>
        @foreach($visitors as $visitor)
            <b>{{ $visitor->first_name}}
            {{ $visitor->last_name}}</b> meeting
            <b>{{ $visitor->to_meet}}</b>

            {!! Form::model($visitor,[
                                'method' => 'PATCH',
                                'route' => ['visitors.update', $visitor->id]
                            ]) !!}

            {!! Form::submit('Punch Out', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

            <br>
            <hr>
        @endforeach
    </div>

    <div class="col-md-6">
    <h3> Recently Walk-out </h3>
        <hr>
        @foreach($recents as $recent)
            <b>{{ $recent->first_name}}
            {{ $recent->last_name}}</b> Visited
            <b>{{ $recent->to_meet}}</b>

            <a href="{{ route('visitors.show', $recent->id) }}" class="fa fa-eye fa-lg"></a>

            <br>
            <hr>
    @endforeach
</div>
@stop