<div class="row">

    <div class="col-sm-6">
        <div class="form-group form-group-default">
            {!! Form::label('first_name', 'First Name:', ['class' => 'control-label', 'title']) !!}
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
    </div>

    <div class="col-sm-6">
        <div class="form-group form-group-default">
            {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label']) !!}
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
    </div>
</div>


{{--<div class="form-group form-group-default">--}}
    {{--{!! Form::label('to_meet', 'To Meet:', ['class' => 'control-label']) !!}--}}
    {{--{!! Form::text('to_meet', null, [--}}
           {{--'class'                         => 'form-control',--}}
           {{--'placeholder'                   => 'To meet',--}}
           {{--'required',--}}
           {{--'id'                            => 'inputToMeet',--}}
           {{--'data-parsley-required-message' => 'To Meet is required',--}}
           {{--'data-parsley-trigger'          => 'change focusout',--}}
           {{--'data-parsley-pattern'          => '/^[a-zA-Z]*$/',--}}
           {{--'data-parsley-minlength'        => '2',--}}
           {{--'data-parsley-maxlength'        => '32'--}}
       {{--]) !!}--}}

{{--</div>--}}
<div class="form-group form-group-default">
    {!! Form::select('users', $users, null, ['id'=>'id', 'style' => 'width:100%']) !!}
</div>

<div class="form-group form-group-default"  >
{!! Form::label('mobile_no', 'Visitor\'s Mobile no:', ['class' => 'control-label']) !!}
{!! Form::text('mobile_no', null, [
'class'                         => 'form-control',
'placeholder'                   => 'Mobile',
'required',
'id'                            => 'inputMobile',
'data-parsley-required-message' => 'Mobile no is required',
'data-parsley-trigger'          => 'change focusout',
'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
'data-parsley-minlength'        => '10',
'data-parsley-maxlength'        => '10'
]) !!}

</div>

<div class="form-group form-group-default">
    {!! Form::label('wing', 'Wing no:', ['class' => 'control-label']) !!}
    {!! Form::text('wing_no', null, [
    'class'                         => 'form-control',
    'placeholder'                   => 'Wing no',
    'required',
    'id'                            => 'inputWingNo',
    'data-parsley-required-message' => 'Wing no is required',
    'data-parsley-trigger'          => 'change focusout',
    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
    'data-parsley-minlength'        => '2',
    'data-parsley-maxlength'        => '32'
    ]) !!}
</div>

<div class="form-group form-group-default">
    {!! Form::label('floor', 'Floor no:', ['class' => 'control-label']) !!}
    {!! Form::text('floor_no', null, [
    'class'                         => 'form-control',
    'placeholder'                   => 'Floor',
    'required',
    'id'                            => 'inputFloorno',
    'data-parsley-required-message' => 'Floor no is required',
    'data-parsley-trigger'          => 'change focusout',
    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
    'data-parsley-minlength'        => '2',
    'data-parsley-maxlength'        => '32'
    ]) !!}
</div>

<div class="form-group form-group-default">
    {!! Form::label('flat', 'Flat no:', ['class' => 'control-label']) !!}
    {!! Form::text('flat_no', null, [
    'class'                         => 'form-control',
    'placeholder'                   => 'Flat',
    'required',
    'id'                            => 'inputFlat',
    'data-parsley-required-message' => 'Flat no is required',
    'data-parsley-trigger'          => 'change focusout',
    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
    'data-parsley-minlength'        => '2',
    'data-parsley-maxlength'        => '32'
    ]) !!}
</div>

<div class="form-group form-group-default">
    {!! Form::label('purpose', 'Purpose:', ['class' => 'control-label']) !!}
    {!! Form::text('purpose', null, [
    'class'                         => 'form-control',
    'placeholder'                   => 'Purpose',
    'required',
    'id'                            => 'inputPurpose',
    'data-parsley-required-message' => 'purpose is required',
    'data-parsley-trigger'          => 'change focusout',
    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
    'data-parsley-minlength'        => '2',
    'data-parsley-maxlength'        => '32'
    ]) !!}
</div>


{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}





