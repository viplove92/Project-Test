@extends('layouts.landlogin')

@section('content')

        {!! Form::open(['url' => route('auth.verify-post'), 'class' => 'form-signin' ] ) !!}

        @include('includes.status')

        <h2 class="form-signin-heading">Resend Email Verification Link</h2>

        <div class="form-group form-group-default">
        <label>Email address</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
        </div>

        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send me a Verification link</button>
        <br />
        <a class="btn btn-lg btn-primary btn-cons " href="{{ route('public.home') }}">Back to Login</a>


        {!! Form::close() !!}

@stop