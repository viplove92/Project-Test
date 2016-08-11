<input type="hidden" name="profile_id" class="form-control" value="{{ Auth::user()->profile->id }}">
<input type="hidden" name="apartment_id" class="form-control" value="{{ Auth::user()->profile->defaultApartment }}">


<div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-title">
          Name
        </div>
      </div>

<div class="panel-body">
    <h5>Name of the Ledger</h5>

<!-- Ledger Name Form Input -->
<div class="form-group form-group-default">
    {!! Form::label('ledger_name', 'Ledger Name:', ['class' => 'control-label']) !!}
    {!! Form::text('ledger_name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'inputLedger Name',
                        'data-parsley-required-message' => 'Ledger Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
</div>

<div class="form-group form-group-default">
        {!! Form::label('', 'Group :') !!}
        {!! Form::select('lg_id', $lg_id, null, ['id'=>'group', 'class' => 'full-width']) !!}
</div>


</div>
</div>


