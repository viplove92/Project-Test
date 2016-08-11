<div class="card col2" data-social="item">
<h5 align="center"> <span class="hint-text">Flat Information</span></h5>

{{--{!! Form::model($apartment, ['method' => 'PATCH','route' => ['apartmentadmin.update', $apartment->id], 'class' => 'form-signin' , 'data-parsley-validate'] ) !!}--}}
{!! Form::model($apartment, ['method' => 'PATCH','route' => ['setflatfloor', $apartment->id], 'class' => 'form-signin' , 'data-parsley-validate'] ) !!}

 <div class="row" align="center">
    <div class="col-sm-4">
        <!-- Floor No Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('wingno', 'Wing No:', ['class' => 'control-label']) !!}
            {!! Form::select('wingno', $wingno, null, ['id'=>'floor', 'class' => 'full-width']) !!}
        </div>
    </div>

    <div class="col-sm-4">
        <!-- Floor No Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('floorno', 'Floor No:', ['class' => 'control-label']) !!}
            {!! Form::select('floor', $floorno, null, ['id'=>'floor', 'class' => 'full-width']) !!}
        </div>
    </div>

    <div class="col-sm-4">
        <!-- Block No/Flat No Form Input -->
        <div class="form-group form-group-default">
            {!! Form::label('blockno', 'Block No / Flat No:', ['class' => 'control-label']) !!}
            {!! Form::text('blockno', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => '',
                                'required',
                                'id'                            => 'inputBlock No/Flat No',
                                'data-parsley-required-message' => 'Block No/Flat No is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-type'             => 'alphanum',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '32'
                            ]) !!}
        </div>
    </div>

</div>

<hr/>

 <div class="row" align="center">
      <div class="col-sm-6">
            <div class="form-group form-group-default input-group">
              <label>Are you Owner ?</label>
              @if($prof->pivot->isOwner == 1)
              <input name="isOwner" id="isOwner" type="checkbox" checked class="switchery" />
              @else
              <input name="isOwner" id="isOwner" type="checkbox" class="switchery" />
              @endif
            </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group form-group-default input-group">
           <label title="If Yes, Admin Cannot Change edit your Information. If No, Admin can edit your Information">Prevent Profile ?</label>
             @if($prof->pivot->lock == 1)
             <input name="lock" type="checkbox" checked class="switchery" />
             @else
             <input name="lock" type="checkbox" class="switchery" />
             @endif
        </div>
      </div>

</div>

<div align="center">
    {!! Form::submit('Update', ['class' => 'btn btn-primary','align' => 'center']) !!}
</div>
<br/>
{!! Form::close() !!}

</div>
