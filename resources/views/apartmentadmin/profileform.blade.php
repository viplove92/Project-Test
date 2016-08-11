<div class="form-group-attached">

    <div class="row clearfix">
    <div class="col-sm-6">
    <!-- First Name Form Input -->
    <div class="form-group form-group-default">
        {!! Form::label('firstname', 'First Name:', ['class' => 'control-label']) !!}
        {!! Form::text('first_name', null, [
                            'class'                         => 'form-control',
                            'required',
                            'id'                            => 'inputFirst Name',
                            'data-parsley-required-message' => 'First Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
    </div></div>

    <div class="col-sm-6">
    <!-- Last Name Form Input -->
    <div class="form-group form-group-default">
        {!! Form::label('lastname', 'Last Name:', ['class' => 'control-label']) !!}
        {!! Form::text('last_name', null, [
                            'class'                         => 'form-control',
                            'required',
                            'id'                            => 'inputLast Name',
                            'data-parsley-required-message' => 'Last Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
    </div></div>
    </div>
<!-- E-Mail Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('email', 'E-Mail:', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, [
                        'class'                         => 'form-control',
                        'required',
                        'id'                            => 'inputE-Mail',
                        'data-parsley-required-message' => 'E-Mail is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

<!-- Password Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
    {!! Form::text('password', 'password', [
                        'class'                         => 'form-control',
                        'placeholder'                   => 'Password',
                        'required',
                        'id'                            => 'inputPassword',
                        'data-parsley-required-message' => 'Password is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '100'
                    ]) !!}
</div>

<!-- Floor No Form Input -->
    <div class="form-group form-group-default">
        {!! Form::label('floorno', 'Floor No:', ['class' => 'control-label']) !!}
        {!! Form::text('floorno', null, [
                            'class'                         => 'form-control',
                            'required',
                            'id'                            => 'floorno No/Flat No',
                            'data-parsley-required-message' => 'Floorno is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-type'             => 'alphanum',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
    </div>

    <!-- Block No/Flat No Form Input -->
    <div class="form-group form-group-default">
        {!! Form::label('blockno', 'Block No/Flat No:', ['class' => 'control-label']) !!}
        {!! Form::text('blockno', null, [
                            'class'                         => 'form-control',
                            'required',
                            'id'                            => 'inputBlock No/Flat No',
                            'data-parsley-required-message' => 'Block No/Flat No is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-type'             => 'alphanum',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
    </div>

<br/>

    @include('includes.partials._button')

</div>