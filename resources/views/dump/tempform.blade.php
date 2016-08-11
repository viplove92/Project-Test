<div class="form-group form-group-default required">
        {!! Form::label('account', 'Account : ', ['class' => 'control-label']) !!}
        {!! Form::select('account_id', $account, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
</div>

<div class="form-group form-group-default required">
        {!! Form::label('category', 'Category : ', ['class' => 'control-label']) !!}
        {!! Form::select('category_id', $category, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
</div>

<div class="form-group form-group-default required">
        {!! Form::label('category', 'Payer : ', ['class' => 'control-label']) !!}
        {!! Form::select('payer_id', $payerid, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
</div>

<div class="form-group form-group-default required">
        {!! Form::label('payment_id', 'Payment Method : ', ['class' => 'control-label']) !!}
        {!! Form::select('payment_id', $payment, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Payment Method is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
</div>

<div class="form-group form-group-default required">
        {!! Form::label('description', 'Description : ', ['class' => 'control-label']) !!}
        {!! Form::text('description', null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Description is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
</div>

<div class="form-group form-group-default input-group required">
    {!! Form::label('amount', 'Amount : ', ['class' => 'control-label', 'id' => 'amount']) !!}
           <input type="text" name="amount" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
           <span class="input-group-addon"><i class="fa fa-inr"></i></span>
</div>

{{--<div class="form-group form-group-default input-group required">--}}
    {{--{!! Form::label('amount', 'Amount : ', ['class' => 'control-label', 'id' => 'amount']) !!}--}}
           {{--<input type="text" name="amount" placeholder="0.00" required="required" class="form-control" data-a-sign="&#x20B9 ">--}}
           {{--<span class="input-group-addon"><i class="fa fa-inr"></i></span>--}}
{{--</div>--}}

<div align="center">
<button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-save"></i> Add Deposit</button>
</div>