@extends('layouts.landlogin')

@section('head')
    {!! HTML::style('../assets/css/parsley.css') !!}
@stop

@section('title', '| Login')

@section('content')

          <p class="p-t-35">Sign into your easymanage account</p>

          <!-- START Login Form -->
          {!! Form::open(['url' => route('auth.login-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}

          @include('includes.status')

            <!-- START Form Control-->
            <div class="form-group form-group-default">
            <label>Login</label>
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
            <!-- END Form Control-->

            <!-- START Form Control-->
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

            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">
                <div class="checkbox ">
                  <input type="checkbox" value="1" id="checkbox1">
                  <label for="checkbox1">Keep Me Signed in</label>
                </div>
              </div>
              <div class="col-md-6 text-right">
                <a href="{{ route('auth.password') }}" class="text-info small">Forgot Password</a><br>
                <a href="{{ route('auth.verify') }}" class="text-info small">Resend Verification Link</a>

              </div>
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10 " type="submit">Sign in</button>
            <a class="btn btn-primary btn-cons m-t-10" href="{{ route('auth.register') }}">Sign up</a>

            {!! Form::close() !!}
          <!--END Login Form-->



          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
                {{--<img alt="" class="m-t-5" data-src="images/logo.png" data-src-retina="images/logo.png" height="60" src="images/logo.png" width="60">--}}
              </div>

              @include('includes.sociallogin')

            </div>
          </div>

      <!-- END Login Right Container-->
@endsection

{{--@section('footer')--}}

    {{--<script type="text/javascript">--}}
        {{--window.ParsleyConfig = {--}}
            {{--errorsWrapper: '<div></div>',--}}
            {{--errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'--}}
        {{--};--}}
    {{--</script>--}}

    {{--{!! HTML::script('../assets/easy/parsley.min.js') !!}--}}

{{--@stop--}}

@push('scripts')
    @include('includes.js.parsleyfooter')
@endpush
