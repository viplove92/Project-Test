<div class="row">
    <div class="col-sm-6">
    <div class="form-group-attached">
    <div class="form-group form-group-default required">
        {!! Form::label('display_name', 'Display Name : ', ['class' => 'control-label']) !!}
        {!! Form::text('display_name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => '',
                            'required',
                            'id'                            => 'display_name',
                            'data-parsley-required-message' => 'Display Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '100'
                        ]) !!}
    </div>

    <div class="form-group form-group-default required">
    {!! Form::label('brand_name', 'Brand Name : ', ['class' => 'control-label']) !!}
    {!! Form::text('brand_name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'brand_name',
                        'data-parsley-required-message' => 'Brand Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '100'
                    ]) !!}
    </div>

    <div class="form-group form-group-default required">
    {!! Form::label('model_name', 'Model Name : ', ['class' => 'control-label']) !!}
    {!! Form::text('model_name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'model_name',
                        'data-parsley-required-message' => 'Model Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '100'
                    ]) !!}
    </div>

    <div class="form-group form-group-default required">
    {!! Form::label('serial_no', 'Serial Number : ', ['class' => 'control-label']) !!}
    {!! Form::text('serial_no', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => '',
                        'required',
                        'id'                            => 'serial_no',
                        'data-parsley-required-message' => 'Serial Number is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '100'
                    ]) !!}
    </div>
</div>
</div>

    <div class="col-sm-6">
    <div class="form-group-attached">
    <div class="form-group form-group-default required">
    <label class="control-label">Purchase Date</label>
    <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
    {!! Form::text('purchase_date', null, [
          'class'                         => 'form-control',
          'placeholder'                   => '',
          'required',
          'id'                            => 'purchase_date',
          'data-parsley-required-message' => 'Purchase Date is required',
          'data-parsley-trigger'          => 'change focusout'
      ]) !!}
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    </div>
    </div>

@if(is_null($disable))
        <div class="form-group form-group-default input-group required">
        {!! Form::label('price', 'Amount : ', ['class' => 'control-label', 'id' => 'price']) !!}
               <input type="text" name="price" placeholder="0.00" required="required" data-d-group="2" class="autonumeric form-control" data-a-sign="&#x20B9 ">
               <span class="input-group-addon"><i class="fa fa-inr"></i></span>
        </div>
@else
        <div class="form-group form-group-default input-group required disabled">
        {!! Form::label('price', 'Amount : ', ['class' => 'control-label', 'id' => 'price']) !!}
        <input type="text" name="price" class="form-control" placeholder="0.00" value="{{ $list->amount }}" disabled required="required" data-d-group="2" data-a-sign="&#x20B9 ">
        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
        </div>
@endif

        <div class="form-group">
            {!! Form::label('desc', 'Description : ', ['for' => 'desc']) !!}
            {!! Form::textarea('desc', null,
                            ['id'   =>'desc',
                            'class' => 'full-width form-control',
                            'rows'  => '3',
                            ]) !!}
        </div>

</div>
</div>
</div>

<br>
@include('includes.partials._button')