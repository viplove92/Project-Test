@extends('layouts.backend')

@section('title', ' | Visitors Details')

@stop

@section('content')

            <b>{{ $recent->first_name}}
            {{ $recent->last_name}}</b> Visited
            <b>{{ $recent->to_meet}}</b><br/><br/>

            @if($sec < 60 )
                Meeting lasted for<b> {{ $sec }} Second </b> <br/><br/>
            @elseif($min < 60)
                Meeting lasted for<b> {{ $min }} Minute </b> <br/><br/>
            @elseif ($hour < 60)
                Meeting lasted for<b> {{ $hour }} Hour </b> <br/><br/>
            @else
                Meeting lasted for<b> {{ $day }} Day </b> <br/><br/>
            @endif

            <b>{{ $recent->first_name}}</b> left <b> {{ $ago2 }} </b>
<br/>
<br/>
    <a href="{{ route('visitors.index') }}" class="btn btn-info">Back to Visitors</a>

@stop