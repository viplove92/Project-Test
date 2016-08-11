<div class="row">

           <div class="col-sm-6">
                <div class="form-group form-group-default">
                   {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
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

        {{--<div class="form-group">--}}
        {{--{!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}--}}
        {{--</div>--}}

        {{--<div class="col-sm-6">--}}
        {{--<div class="radio radio-success">--}}
            {{--<input type="radio" checked="checked" value="yes" name="radio2" id="radio2Yes">--}}
            {{--<label for="radio2Yes">Male</label>--}}
            {{--<input type="radio" value="no" name="radio2" id="radio2No">--}}
            {{--<label for="radio2No">Female</label>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="form-group form-group-default">
                    {!! Form::label('company_name', 'Company:', ['class' => 'control-label']) !!}
                    {!! Form::text('company_name', null, [
                           'class'                         => 'form-control',
                           'placeholder'                   => 'Company name',
                           'required',
                           'id'                            => 'inputCompanyName',
                           'data-parsley-required-message' => 'Company Name is required',
                           'data-parsley-trigger'          => 'change focusout',
                           'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                           'data-parsley-minlength'        => '2',
                           'data-parsley-maxlength'        => '32'
                       ]) !!}

</div>

    <div class="form-group ">
                        {!! Form::label('address_1', 'Company Address:', ['class' => 'control-label']) !!}

                        {!! Form::text('address_1', null, [
                               'class'                         => 'form-control',
                               'placeholder'                   => 'Address Line 1',
                               'required',
                               'id'                            => 'inputAddress1',
                               'data-parsley-required-message' => 'First Name is required',
                               'data-parsley-trigger'          => 'change focusout',
                               'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                               'data-parsley-minlength'        => '2',
                               'data-parsley-maxlength'        => '32'
                           ]) !!}

                       {!! Form::text('address_2', null, [
                              'class'                         => 'form-control',
                              'placeholder'                   => 'Address Line 2',
                              'required',
                              'id'                            => 'inputAddress2',
                              'data-parsley-required-message' => 'First Name is required',
                              'data-parsley-trigger'          => 'change focusout',
                              'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                              'data-parsley-minlength'        => '2',
                              'data-parsley-maxlength'        => '32'
                          ]) !!}

                          {!! Form::text('address_3', null, [
                             'class'                         => 'form-control',
                             'placeholder'                   => 'Address Line 3',
                             'required',
                             'id'                            => 'inputAddress3',
                             'data-parsley-required-message' => 'First Name is required',
                             'data-parsley-trigger'          => 'change focusout',
                             'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                             'data-parsley-minlength'        => '2',
                             'data-parsley-maxlength'        => '32'
                         ]) !!}

    </div>

    {{--<div class="form-group form-group-default">--}}
                        {{--{!! Form::label('contact', 'Contact Number:', ['class' => 'control-label']) !!}--}}
                        {{--{!! Form::text('contact', null, [--}}
                           {{--'class'                         => 'form-control',--}}
                           {{--'placeholder'                   => 'Mobile',--}}
                           {{--'required',--}}
                           {{--'id'                            => 'inputContact',--}}
                           {{--'data-parsley-required-message' => 'PhotoURL is required',--}}
                           {{--'data-parsley-trigger'          => 'change focusout',--}}
                           {{--'data-parsley-pattern'          => '/^[a-zA-Z]*$/',--}}
                           {{--'data-parsley-minlength'        => '2',--}}
                           {{--'data-parsley-maxlength'        => '32'--}}
                       {{--]) !!}--}}

    {{--</div>--}}

    <div class="form-group form-group-default">
                    {!! Form::label('uida', 'Uida:', ['class' => 'control-label']) !!}
                    {!! Form::text('uida', null, [
                           'class'                         => 'form-control',
                           'placeholder'                   => 'UIDA',
                           'required',
                           'id'                            => 'inputUIDA',
                           'data-parsley-required-message' => 'UIDA is required',
                           'data-parsley-trigger'          => 'change focusout',
                           'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                           'data-parsley-minlength'        => '2',
                           'data-parsley-maxlength'        => '32'
                       ]) !!}

    </div>

    <div class="form-group form-group-default">
                        {!! Form::label('photo', 'Photo:', ['class' => 'control-label']) !!}
                        {!! Form::text('photo', null, [
                           'class'                         => 'form-control',
                           'placeholder'                   => 'Photo URL',
                           'required',
                           'id'                            => 'inputPhotoURL',
                           'data-parsley-required-message' => 'PhotoURL is required',
                           'data-parsley-trigger'          => 'change focusout',
                           'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                           'data-parsley-minlength'        => '2',
                           'data-parsley-maxlength'        => '32'
                       ]) !!}

    </div>


    {{--<form role="form">--}}
        {{--<div class="form-group form-group-default">--}}
            {{--{!! Form::label('Profession', 'Profession:', ['class' => 'control-label']) !!}--}}

            {{--<!-- Using data-init-plugin='select2' automatically initializes a basic Select2 -->--}}
            {{--<select class="full-width" data-init-plugin="select2">--}}
                {{--<optgroup label="Electrician">--}}
                    {{--<option value="AK">Maintenance Work</option>--}}
                    {{--<option value="HI">Repairing work</option>--}}
                {{--</optgroup>--}}
                {{--<optgroup label="Plumber">--}}
                    {{--<option value="NV">Nevada</option>--}}
                    {{--<option value="OR">Oregon</option>--}}
                    {{--<option value="WA">Washington</option>--}}
                {{--</optgroup>--}}
            {{--</select>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<!-- Element intended to use with advance options -->--}}
            {{--<input type="hidden" id="mySelect2" class="full-width">--}}
        {{--</div>--}}
    {{--</form>--}}

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}





