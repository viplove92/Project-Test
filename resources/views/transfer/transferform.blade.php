<div class="row">
<div class="col-sm-6">
    <div class="panel-body">
    <div class="form-group-attached">

@if(is_null($disable))
        <div class="form-group form-group-default required">
        {!! Form::label('from_account', 'From Account : ', ['class' => 'control-label']) !!}
        {!! Form::select('from_account', $account, null,
                        ['id'   =>  'from_account',
                        'class' =>  'full-width',
                        'required',
                        'data-parsley-required-message' => 'From Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
        </div>
@else
        <div class="form-group form-group-default disabled required">
        {!! Form::label('from_account', 'From Account : ', ['class' => 'control-label', 'disabled' => 'disabled']) !!}
        {!! Form::select('from_account', $account, null,
                        ['id'       =>  'from_account',
                        'class'     =>  'full-width',
                        'disabled'  =>  'disabled',
                        'required',
                        'data-parsley-required-message' => 'From Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
        </div>
@endif

@if(is_null($disable))
        <div class="form-group form-group-default required">
        {!! Form::label('to_account', 'To Account : ', ['class' => 'control-label']) !!}
        {!! Form::select('to_account', $account, null,
                        ['id'   => 'to_account',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message'     => 'To Bank Account is required',
                        'data-parsley-trigger'              => 'change focusout',
                        'data-parsley-notequalto'           => '#from_account',
                        'data-parsley-notequalto-message'   => 'Source bank must not be same as Destination Bank'
                        ]) !!}
        </div>
@else
        <div class="form-group form-group-default disabled required">
        {!! Form::label('to_account', 'To Account : ', ['class' => 'control-label', 'disabled' => 'disabled']) !!}
        {!! Form::select('to_account', $account, null,
                        ['id'       =>  'to_account',
                        'class'     =>  'full-width',
                        'disabled'  =>  'disabled',
                        'required',
                        'data-parsley-required-message' => 'To Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-notequalto'           => '#from_account',
                        'data-parsley-notequalto-message'   => 'Source bank must not be same as Destination Bank'
                        ]) !!}
        </div>
@endif

        <div class="form-group form-group-default required">
        <label class="control-label">Date</label>
        <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
        {!! Form::text('date', null, [
              'class'                         => 'form-control',
              'placeholder'                   => '',
              'required',
              'id'                            => 'date',
              'data-parsley-required-message' => 'Date is required',
              'data-parsley-trigger'          => 'change focusout'
          ]) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
        </div>

        <div class="form-group form-group-default required">
        {!! Form::label('description', 'Description : ', ['class' => 'control-label']) !!}
        {!! Form::text('description', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => '',
                            'required',
                            'id'                            => 'description',
                            'data-parsley-required-message' => 'Description is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '100'
                        ]) !!}
        </div>

@if(is_null($disable))
        <div class="form-group form-group-default input-group required">
        {!! Form::label('amount', 'Amount : ', ['class' => 'control-label', 'id' => 'amount']) !!}
               <input type="text" name="amount" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
               <span class="input-group-addon"><i class="fa fa-inr"></i></span>
        </div>
@else
        <div class="form-group form-group-default input-group required disabled">
        {!! Form::label('amount', 'Amount : ', ['class' => 'control-label', 'id' => 'amount']) !!}
        <input type="text" name="amount" class="form-control" placeholder="0.00" value="{{ $list->amount }}" disabled required="required" data-d-group="2" data-a-sign="&#x20B9 ">
        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
        </div>
@endif

</div>

</div>
</div>

<div class="col-sm-6">
    <div class="panel-body">
    <div class="form-group-attached">

            <div class="form-group form-group-default">
            {!! Form::label('payment_id', 'Payment Method : ', ['class' => 'control-label']) !!}
            {!! Form::select('payment_id', $payment, null, ['id'=>'group', 'class' => 'full-width']) !!}
            </div>

            <div class="form-group form-group-default">
            {!! Form::label('ref', 'Reference : ', ['class' => 'control-label']) !!}
            {!! Form::text('ref', null, [
                                'class'                         => 'form-control',
                                'placeholder'                   => 'e.g. Transaction ID, Check No.',
                                'id'                            => 'description',
                                'data-parsley-required-message' => 'Reference is required',
                                'data-parsley-trigger'          => 'change focusout',
                                'data-parsley-minlength'        => '2',
                                'data-parsley-maxlength'        => '100'
                            ]) !!}
            </div>
</div>

</div>
</div>

<div class="col-sm-12">
<div class="panel-body">
<div class="form-group-attached">
<div class="form-group form-group-default">
            {!! Form::label('tags', 'Tag : ', ['class' => 'control-label']) !!}
            {!! Form::textarea('tags', null, [ 'id'=>'tag', 'class' => 'full-width']) !!}
</div>
</div>
</div>
</div>
</div>

<div align="center">
@if(is_null($disable))
    <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-exchange"></i> Transfer Now</button>
@else
    <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
@endif
</div>