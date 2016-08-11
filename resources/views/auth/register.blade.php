@extends('layouts.landlogin')

@section('title', ' | Register')


@section('head')
    {!! HTML::style('/assets/css/parsley.css') !!}
@stop

@section('content')

        <p class="p-t-35">Create a new easymanage account</p>

        {!! Form::open(['url' => route('auth.register-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}

        @include('includes.errors')

        <div class="form-group form-group-default">
        <label>Email address</label>
        {!! Form::email('email', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Email address',
            'required',
            'id'                            => 'inputEmail',
            'data-parsley-required-message' => 'Email is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-type'             => 'email'
        ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label>First name</label>
        {!! Form::text('first_name', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'First name',
            'required',
            'id'                            => 'inputFirstName',
            'data-parsley-required-message' => 'First Name is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label>Last name</label>
        {!! Form::text('last_name', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Last name',
            'required',
            'id'                            => 'inputLastName',
            'data-parsley-required-message' => 'Last Name is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label>Password</label>
        {!! Form::password('password', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Password',
            'required',
            'id'                            => 'inputPassword',
            'data-parsley-required-message' => 'Password is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-minlength'        => '6',
            'data-parsley-maxlength'        => '20'
        ]) !!}
        </div>

        <div class="form-group form-group-default">
        <label>Confirm Password</label>
        {!! Form::password('password_confirmation', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Password confirmation',
            'required',
            'id'                            => 'inputPasswordConfirm',
            'data-parsley-required-message' => 'Password confirmation is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-equalto'          => '#inputPassword',
            'data-parsley-equalto-message'  => 'Not same as Password',
        ]) !!}
        </div>

        <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>

        <br>
        <button class="btn btn-primary btn-cons m-t-10" type="submit">Create Account</button>
        <a class="btn btn-primary btn-cons m-t-10" href="{{ route('public.home') }}">Back to Login</a>


@stop

@section('footer')

    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>

    {!! HTML::script('../assets/easy/parsley.min.js') !!}

    <script src='https://www.google.com/recaptcha/api.js'></script>

@stop