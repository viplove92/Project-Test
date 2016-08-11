<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      Details
    </div>
  </div>

<div class="panel-body">
<h5>Mailing address details</h5>

<!-- Name Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'inputName',
                        'data-parsley-required-message' => 'Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

<!-- Address Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('address_line1', 'Address Line 1:', ['class' => 'control-label']) !!}
    {!! Form::text('address_line1', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'inputAddress',
                        'data-parsley-required-message' => 'Address Line 1 is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

<!-- Address Line 2 Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('address_line2', 'Address Line 2:', ['class' => 'control-label']) !!}
    {!! Form::text('address_line2', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'inputAddress Line 2',
                        'data-parsley-required-message' => 'Address Line 2 is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

<div class="row">

<div class="col-sm-6">
<!-- State Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('state', 'State:', ['class' => 'control-label']) !!}
    {!! Form::select('state_id', $state_id, null, ['id'=>'state_id', 'class' => 'full-width']) !!}
</div>
</div>

<div class="col-sm-6">
<!-- Pincode Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('pincode', 'Pincode:', ['class' => 'control-label']) !!}
    {!! Form::text('pincode', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'inputPincode',
                        'data-parsley-required-message' => 'Pincode is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

</div>
</div>

</div>
</div>

