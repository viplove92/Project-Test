<div class="row">
<div class="col-sm-6">
    <div class="panel-body">
    <div class="form-group-attached">

@if(is_null($disable))
        <div class="form-group form-group-default required">
        {!! Form::label('account_id', 'Account : ', ['class' => 'control-label']) !!}
        {!! Form::select('account_id', $account, null,
                        ['id'=>'group',
                        'class' => 'full-width',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
                        ]) !!}
        </div>
@else
        <div class="form-group form-group-default disabled required">
        {!! Form::label('account_id', 'Account : ', ['class' => 'control-label', 'disabled' => 'disabled']) !!}
        {!! Form::select('account_id', $account, null,
                        ['id'       =>  'group',
                        'class'     =>  'full-width',
                        'disabled'  =>  'disabled',
                        'required',
                        'data-parsley-required-message' => 'Bank Account is required',
                        'data-parsley-trigger'          => 'change focusout'
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
            {!! Form::label('category_id', 'Category : ', ['class' => 'control-label']) !!}
            {!! Form::select('category_id', $category, null, ['id'=>'group', 'class' => 'full-width']) !!}
            </div>

            <div class="form-group form-group-default">
            {!! Form::label('payer_id', 'Payer : ', ['class' => 'control-label']) !!}
            {!! Form::select('payer_id', $payerid, null, ['id'=>'group', 'class' => 'full-width']) !!}
            </div>

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
</div>


<div class="panel-body">
<div class="form-group-attached">
<div class="form-group form-group-default">
            {!! Form::label('tags', 'Tag : ', ['class' => 'control-label']) !!}
            {!! Form::textarea('tags', null, [ 'id'=>'tag', 'class' => 'full-width']) !!}
</div>
</div>
</div>

@include('includes.partials._button')


