@extends('layouts.backend')

@section('title', ' | Profile')
@stop

@section('content')

{!! Breadcrumbs::render('profiles.index') !!}


@include('includes.status')
@include('includes.errors')

    <div class="col-sm-6 b-r b-dashed b-grey">

    {!! Form::model($user, ['method' => 'PATCH','route' => ['profiles.update', $user->profile->id]] ) !!}

    <div class="panel panel-transparent">
    <h2>Your Information</h2>
    <div class="form-group-attached">

        <div class="form-group form-group-default required" disabled>
          <label>Email ID</label>
          {{--<input type="text" class="form-control" name="email" value="{{ $user->email }}" required disabled>--}}
          <input type="text" class="form-control" value="{{ $user->email }}" required disabled>
        </div>

        <div class="row clearfix">
          <div class="col-sm-6">
            <div class="form-group form-group-default required">
              <label>First name</label>
              <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group form-group-default">
              <label>Last name</label>
              <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
            </div>
          </div>
        </div>

        <div class="form-group form-group-default">
        <label>Gender - {{ $user->profile->gender->gender }} </label>

        <div class="radio radio-success">
       @if($user->profile->gender_id == 1)
            <input type="radio" checked="checked" value="1" name="gender_id" id="radio2Male">
            <label for="radio2Male">Male</label>
            <input type="radio" value="2" name="gender_id" id="radio2Female">
            <label for="radio2Female">Female</label>
            <input type="radio" value="3" name="gender_id" id="radio2Other">
            <label for="radio2Other">Other</label>
       @elseif($user->profile->gender_id == 2)
            <input type="radio"  value="1" name="gender_id" id="radio2Male">
            <label for="radio2Male">Male</label>
            <input type="radio" checked="checked" value="2" name="gender_id" id="radio2Female">
            <label for="radio2Female">Female</label>
            <input type="radio" value="3" name="gender_id" id="radio2Other">
            <label for="radio2Other">Other</label>
       @else
            <input type="radio"  value="1" name="gender_id" id="radio2Male">
            <label for="radio2Male">Male</label>
            <input type="radio"  value="2" name="gender_id" id="radio2Female">
            <label for="radio2Female">Female</label>
            <input type="radio" checked="checked" value="3" name="gender_id" id="radio2Other">
            <label for="radio2Other">Other</label>
       @endif

        </div>

        </div>

        <div class="form-group form-group-default required">
          <label>Mobile Number</label>

                @if(is_null($user->profile->mobile_no))
                    <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number" required>
                    <i class="fa fa-mobile text-success fs-16 m-t-10" data-placement="top" title="Enter Mobile Number" ></i>
                @else
                    <input type="text" class="form-control" name="mobile_no" value="{{ $user->profile->mobile_no }}" required>

                    @if($user->profile->verified == 1)
                      <i class="fa fa-check-circle text-success fs-16 m-t-10" data-placement="top" title="Verified" ></i>
                    @else
                      <a href="#"> <i class="fa fa-paper-plane text-complete m-l-5"> </i> Send OTP</a>
                    @endif
               @endif
        </div>

            </div>

  <br>
  <br>
      <div align="center">
      {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
      </div>
  </div>

  <div class="col-sm-12">

  <h1>Profile Pic</h1>
  {!! Form::open([ 'route' => [ 'profiles.store' ], 'files' => true, 'enctype' => 'multipart/form-data']) !!}

       <div class="fileUpload">
       {!! Form::file('image', ['id'=>'imgInp', 'class'=>'upload']) !!}
       <h6>Current Profile Picture</h6>

@if(is_null(Auth::user()->profile->avatar))
       <img id="blah" src="../images/profiles/blank-profile.png" alt="Preview Profile Pic" width="200" height="auto" />
@else
       <img id="blah" src="../images/profiles/{{$var = Auth::user()->profile->avatar}}" width="200" height="auto" alt="logo">
@endif
        </div>
<br/>
        <div>
        {!! Form::submit('Upload Photo', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>

    <ul>
        <h6><li>Click on Picture to select and Press Upload Photo Button to Upload</li></h6>
        <h6><li>If you already had Picture uploaded, it will overwrite with new picture</li></h6>
    </ul>
  </div>

</div>

<div class="col-sm-6">

{!! Form::open(['url' => route('changepass'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}

<h2>Change Password</h2>

        <div class="form-group form-group-default">
                <label>Current Password</label>
                {!! Form::password('current_password', [
                    'class'                         => 'form-control',
                    'placeholder'                   => 'Current Password',
                    'required',
                    'id'                            => 'inputCurrentPassword',
                    'data-parsley-required-message' => 'Current Password is required',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-minlength'        => '6',
                    'data-parsley-maxlength'        => '20'
                ]) !!}
        </div>

        <div class="form-group-attached">

        <div class="form-group form-group-default">
        <label>New Password</label>
        {!! Form::password('password', [
            'class'                         => 'form-control',
            'placeholder'                   => 'New Password',
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
            'placeholder'                   => 'New Password confirmation',
            'required',
            'id'                            => 'inputPasswordConfirm',
            'data-parsley-required-message' => 'Password confirmation is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-equalto'          => '#inputPassword',
            'data-parsley-equalto-message'  => 'Not same as Password',
        ]) !!}
        </div>

<br/>
<div align="center">
        <button class="btn btn-primary btn-cons m-t-10" type="submit">Change Password</button>
</div>
        {!! Form::close() !!}

</div>
        </div>

@stop