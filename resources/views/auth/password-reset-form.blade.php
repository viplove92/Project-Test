@extends('layouts.landlogin')

@section('title', '| Reset Password')

@section('content')

        {!! Form::open(['url' => route('auth.reset-post', ['token' => $token ]), 'class' => 'form-signin' ] ) !!}

        @include('includes.errors')

        <h2 class="form-signin-heading">Set New Password</h2>

        <div class="form-group form-group-default">
        <label>Password</label>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword', 'autofocus' ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label>Password Confirmation</label>
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirmation' ]) !!}
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>

        {!! Form::close() !!}

@stop