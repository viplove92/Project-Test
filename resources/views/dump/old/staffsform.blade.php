<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            Enter Staffs Detail
        </div>

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





 <div class="form-group ">
    {!! Form::label('address_1', 'Company Address:', ['class' => 'control-label']) !!}

    {!! Form::text('address_1', null, [
           'class'                         => 'form-control',
           'rows'                          => '3',
           'style'                         => 'resize:none',
           'placeholder'                   => 'Address Line 1',
           'required',
           'id'                            => 'inputAddress',
           'data-parsley-required-message' => 'First Name is required',
           'data-parsley-trigger'          => 'change focusout',
           'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
           'data-parsley-minlength'        => '2',
           'data-parsley-maxlength'        => '32'
       ]) !!}



     {!! Form::text('address_2', null, [
            'class'                         => 'form-control',
            'rows'                          => '3',
            'style'                         => 'resize:none',
            'placeholder'                   => 'Address Line 2',
            'required',
            'id'                            => 'inputAddress',
            'data-parsley-required-message' => 'First Name is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}

     {!! Form::text('landmark', null, [
            'class'                         => 'form-control',
            'rows'                          => '3',
            'style'                         => 'resize:none',
            'placeholder'                   => 'Landmark',
            'required',
            'id'                            => 'inputAddress',
            'data-parsley-required-message' => 'First Name is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}


 </div>


        <div class="form-group date form-group-default">
        {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!}
        <div id="date" class="input-group date" data-date-format="dd/mm/yyyy">
            <input name="date" type="text" class="form-control">
            <span class="input-group-addon"><i class="fa fa-calendar"></i>
            </span>
        </div>
        </div>


            {{--{!! Form::text('date', null, [--}}
            {{--'class'                         => 'form-control',--}}
            {{--'placeholder'                   => 'Date',--}}
            {{--'required',--}}
            {{--'id'                            => 'datewa',--}}
            {{--'data-parsley-required-message' => 'date is required',--}}
            {{--'data-parsley-trigger'          => 'change focusout',--}}
            {{--'data-parsley-pattern'          => '/^[a-zA-Z]*$/',--}}
            {{--'data-parsley-minlength'        => '2',--}}
            {{--'data-parsley-maxlength'        => '32'--}}
            {{--]) !!}--}}

        {{--</div>--}}



<div class="form-group form-group-default">
            {!! Form::label('phone', 'Phone Number:', ['class' => 'control-label']) !!}
            {!! Form::text('phone', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Phone Number',
            'required',
            'id'                            => 'phone',
            'data-parsley-required-message' => 'Phone is required',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
            ]) !!}

        </div>

<div class="form-group  form-group-default">
    {!! Form::label('uida', 'Uida:', ['class' => 'control-label']) !!}
    {!! Form::text('uida', null, [
           'class'                         => 'form-control',
           'placeholder'                   => 'UIDA',
           'required',
           'id'                            => 'uida',
           'data-parsley-required-message' => 'UIDA is required',
           'data-parsley-trigger'          => 'change focusout',
           'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
           'data-parsley-minlength'        => '2',
           'data-parsley-maxlength'        => '32'
       ]) !!}

</div>

<div class="form-group form-group-default">
    {!! Form::label('photo', 'Photo:', ['class' => 'control-label']) !!}
    {!! Form::text('photo_url', null, [
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




{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}


        </div>
    </div>


@push('scripts')

<script type="text/javascript">
    //Input mask - Input helper
    $(function($) {
        $("#datewa").mask("99/99/9999");
        $("#mobile").mask("9999-999-999");
        $("#phone").mask("9999 999 999");
        $("#tin").mask("99-9999999");
        $("#uida").mask("9999 9999 9999");

    });
</script>

@endpush

@push('scripts')

{!! HTML::script('../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}

@endpush



@push('scripts')

<script>
    $(document).ready(function() {
        $('.date').datepicker();
    });
</script>

@endpush