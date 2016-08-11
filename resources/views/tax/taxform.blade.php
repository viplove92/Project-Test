<div class="form-group-attached">
        <div class="form-group form-group-default required">
        {!! Form::label('name', 'Tax Name : ', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => '',
                            'required',
                            'id'                            => 'name',
                            'data-parsley-required-message' => 'Tax Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '100'
                        ]) !!}
        </div>

@if(is_null($disable))
        <div class="form-group form-group-default input-group required full-width">
        {!! Form::label('rate', 'Rate : ', ['class' => 'control-label', 'id' => 'rate']) !!}
        <input type="text" name="rate" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign=" %" data-p-sign="s">
        </div>
@else
        <div class="form-group form-group-default input-group required full-width">
        {!! Form::label('rate', 'Rate : ', ['class' => 'control-label', 'id' => 'rate']) !!}
        <input type="text" name="rate" class="autonumeric form-control" placeholder="0.00" value="{{ $list->rate }}" required="required" data-d-group="2" data-a-sign=" %" data-p-sign="s">
        </div>
@endif

</div>

<br/>
<br/>

<div align="center">
@if(is_null($disable))
    <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-save"></i> Add Tax</button>
@else
    <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Tax</button>
@endif
</div>

